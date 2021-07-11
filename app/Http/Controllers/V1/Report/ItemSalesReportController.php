<?php

namespace Crater\Http\Controllers\V1\Report;

use Carbon\Carbon;
use Crater\Http\Controllers\Controller;
use Crater\Models\Company;
use Crater\Models\CompanySetting;
use Crater\Models\Invoice;
use Crater\Models\InvoiceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PDF;

class ItemSalesReportController extends Controller
{
    /**
    * Handle the incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  string  $hash
    * @return \Illuminate\Http\JsonResponse
    */
    public function __invoke(Request $request, $hash)
    {
        $company = Company::where('unique_hash', $hash)->first();

        $locale = CompanySetting::getSetting('language',  $company->id);

        App::setLocale($locale);

        $items = InvoiceItem::whereCompany($company->id)
            ->applyInvoiceFilters($request->only(['from_date', 'to_date']))
            ->itemAttributes()
            ->get();

        $totalAmount = 0;
        foreach ($items as $item) {
            $totalAmount += $item->total_amount;
        }
        $start = Carbon::createFromFormat('Y-m-d', $request->from_date);
        $end = Carbon::createFromFormat('Y-m-d', $request->to_date);

        $invoices = Invoice::whereBetween('invoice_date',
            [$start->format('Y-m-d'), $end->format('Y-m-d')])->orderBy('invoice_date','DESC')->get();
        $dateFormat = CompanySetting::getSetting('carbon_date_format', $company->id);
        $from_date = Carbon::createFromFormat('Y-m-d', $request->from_date)->format($dateFormat);
        $to_date = Carbon::createFromFormat('Y-m-d', $request->to_date)->format($dateFormat);
        $totalVat =0;
        $totalFees=0;
        $totalInTotal=0;
        foreach ($invoices as $inv){
            $vatWith = $inv->vat / 1.1;
            $vatOnly = $inv->vat - $vatWith;
            $totalVat+=$vatOnly;
            $totalFees+=$vatWith;
            $totalInTotal+=$inv->vat;
        }
        $colors = [
            'primary_text_color',
            'heading_text_color',
            'section_heading_text_color',
            'border_color',
            'body_text_color',
            'footer_text_color',
            'footer_total_color',
            'footer_bg_color',
            'date_text_color',
        ];
        $colorSettings = CompanySetting::whereIn('option', $colors)
            ->whereCompany($company->id)
            ->get();

        view()->share([
            'items' => $items,
            'colorSettings' => $colorSettings,
            'totalAmount' => $totalAmount,
            'company' => $company,
            'from_date' => $from_date,
            'to_date' => $to_date,
            'totalFees'=>$totalFees,
            'totalVat'=>$totalVat,
            'totalInTotal'=>$totalInTotal,
            'invoices'=>$invoices,
            'type'=>'2'
        ]);
        $pdf = PDF::loadView('app.pdf.reports.sales-customers');

        if ($request->has('download')) {
            return $pdf->download();
        }

        return $pdf->stream();
    }
}
