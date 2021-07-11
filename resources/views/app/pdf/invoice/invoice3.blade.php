<!DOCTYPE html>
<html>

<head>
    <title>@lang('pdf_invoice_label') - {{$invoice->invoice_number}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">

    <style type="text/css">
        /* arabic */

        @font-face {
            font-family: 'Qahiri';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/qahiri/v1/tsssAp1RZy0C_hGeUXqgnnk.woff2) format('woff2');
            unicode-range: U+0600-06FF, U+200C-200E, U+2010-2011, U+204F, U+2E41, U+FB50-FDFF, U+FE80-FEFC;
        }

        body {

            font-family: "DejaVu Sans", Arial, "Simplified Arabic Fixed", monospace;
            direction: rtl;
        }

        html {
            margin: 0px;
            padding: 0px;
            margin-top: 50px;
        }

        table {
            border-collapse: collapse;
        }

        hr {
            color: rgba(0, 0, 0, 0.2);
            border: 0.5px solid #EAF1FB;
        }

        /* -- Header -- */

        .header-container {
            margin-top: -30px;
            width: 100%;
            padding: 0px 30px;
        }

        .header-logo {
            height: 50px;
            text-transform: capitalize;
            color: #817AE3;
            padding-top: 0px;
        }

        .company-address-container {
            width: 50%;
            padding-left: 80px;
            margin-bottom: 2px;
        }

        .color_primary {
            color: #12427B;
        }

        .color_secondary {
            color: #2869B1;
        }

        .company-address {
            margin-top: 12px;
            font-size: 12px;
            color: #595959;
        }

        /* -- Content Wrapper  */

        .content-wrapper {
            display: block;
            padding-top: 0px;
            padding-bottom: 20px;
        }

        .customer-address-container {
            display: block;
            float: left;
            width: 45%;
            padding: 10px 0 0 30px;
        }

        /* -- Shipping -- */
        .shipping-address-container {
            float: right;
            display: block;
        }

        .shipping-address-container--left {
            float: left;
            display: block;
            padding-left: 0;
        }

        .shipping-address {
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin-top: 5px;
            width: 160px;
            word-wrap: break-word;
        }

        /* -- Billing -- */

        .billing-address-container {
            display: block;
            float: left;
        }

        .billing-address {
            font-size: 10px;
            line-height: 15px;
            color: #595959;
            margin-top: 5px;
            width: 160px;
            word-wrap: break-word;
        }

        /*  -- Estimate Details -- */

        .invoice-details-container {
            display: block;
            float: right;
            padding: 10px 30px 0 0;
        }

        .attribute-label {
            font-size: 16px;
            line-height: 18px;
            font-weight: 400;
            font-style: normal;
            font: Amiri !important;
            text-align: left;
            color: #2869B1
        }

        .attribute-value {
            font-size: 16px;
            line-height: 18px;
            font-weight: 400;
            font-style: normal;
            font: Amiri !important;
            color: #111827;
        }

        /* -- Items Table -- */

        .items-table {
            margin-top: 35px;
            padding: 0px 30px 10px 30px;
            page-break-before: avoid;
            page-break-after: auto;
        }
        .items-tablesa {
            margin-top: 2px;
            padding: 0px 30px 10px 30px;
            page-break-before: avoid;
            page-break-after: auto;
        }

        div.page_break {
            page-break-before: always !important;
        }

        .items-table hr {
            height: 0.1px;
        }

        .item-table-heading {
            font-size: 13.5;
            text-align: center;
            color: rgba(0, 0, 0, 0.85);
            padding: 5px;
            color: #55547A;
        }

        tr.item-table-heading-row th {
            border-bottom: 0.620315px solid #E8E8E8;
            font-size: 12px;
            line-height: 18px;
        }

        tr.item-row td {
            font-size: 12px;
            line-height: 18px;
        }

        .item-cell {
            font-size: 13;
            text-align: center;
            padding: 5px;
            padding-top: 10px;
            color: #040405;
        }
        .item-cellsa {
            font-size: 13;
            text-align: center;
            padding: 5px;
            color: #040405;
        }

        .color_accent {
            color: #E41721 !important;
        }

        .color_dark {
            color: #111827;
        }

        .item-description {
            color: #595959;
            font-size: 9px;
            line-height: 12px;
        }

        .item-cell-table-hr {
            margin: 0 30px 0 30px;
        }

        /* -- Total Display Table -- */

        .total-display-container {
            padding: 0 25px;
        }


        .total-display-table {
            page-break-inside: avoid;
            page-break-before: auto;
            page-break-after: auto;
            margin-top: 10px;
        }

        .total-table-attribute-label {
            border: 1px solid #E8E8E8 !important;
            font-size: 14px;
            color: #2869B1;
            text-align: center !important;
            width: 15% !important;

        }

        .remarks {
            border: 1px solid #E8E8E8 !important;
            font-size: 14px !important;
            color: #2869B1;
        }

        .total-table-attribute-value {
            border: 1px solid #E8E8E8 !important;
            font-weight: bold;
            text-align: center;
            font-size: 14px;
            color: #040405;
            text-align: center !important;
            padding-top: 2px;
            padding-bottom: 2px;
            width: 35% !important;

        }

        .total-border-left {
            border: 1px solid #E8E8E8 !important;
            border-right: 0px !important;
            padding-top: 0px;
            padding: 8px !important;
        }

        .total-border-right {
            border: 1px solid #E8E8E8 !important;
            border-left: 0px !important;
            padding-top: 0px;
            padding: 8px !important;
        }
        .border-all{
            border: 1px solid #E8E8E8 !important;
        }

        /* -- Notes -- */
        .notes {
            font-size: 12px;
            color: #595959;
            margin-top: 15px;
            margin-left: 30px;
            width: 442px;
            text-align: left;
            page-break-inside: avoid;
        }

        .big-text {
            font-size: 32px;
            font-weight: normal;

        }

        .notes-label {
            font-size: 15px;
            line-height: 22px;
            letter-spacing: 0.05em;
            color: #040405;
            width: 108px;
            height: 19.87px;
            padding-bottom: 10px;
        }

        /* -- Helpers -- */

        .text-primary {
            color: #5851DB;
        }

        .text-center {
            text-align: center
        }

        table .text-left {
            text-align: left;
        }

        table .text-right {
            text-align: right;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0px;
            right: 0px;
            height: 100px;
        }

        .footer-wrapper {
            padding: 0 30px;
        }

        .footer-wrapper .footer-label {
            display: inline-block;
            width: 60px;
            line-height: 14px;
            height: 14px;
        }

        .footer-table {
            border-top: 0.620315px solid #E8E8E8;
            color: #595959;
            font-size: 10px;
            line-height: 14px;
        }

        .footer-table a {
            color: #595959;
            text-decoration: none;
        }

        header {
            position: fixed;
            top: 0;
            left: 0px;
            right: 0px;
            height: 270px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0px;
            right: 0px;
            height: 100px;
        }
    </style>
</head>

<body>
<header>
    <div class="header-container">
        <table width="100%">
            <tr>
                <td width="50%" class="header-section-left">
                    @if($logo)
                    <img class="header-logo" src="{{ $logo }}" alt="Company Logo">
                    @else
                    <h1 class="header-logo"> {{$invoice->user->company->name}} </h1>
                    @endif
                </td>
                <td width="50%" style="text-align: center; vertical-align: middle;"
                    class="text-center company-address-container company-address">
                <span class="color_primary" dir="rtl"
                      style="font-size: 24px !important; font-weight: 700;font-style: normal;font: Amiri !important;">اير اند سي انترناشيونال</span><br>
                    <span class="color_dark" style="font-size: 12px !important;'">س.ت: 74953  ب.ض: 6020 </span><br>
                    <span class="color_dark" style="font-size: 12px !important;">ق.م.: 435863614</span>
                </td>
            </tr>
        </table>
    </div>

    <hr class="header-bottom-divider">
</header>
<footer>
    <div class="footer-wrapper">
        <table width="100%" class="footer-table" cellspacing="0" border="0">
            <tr>
                <td width="100%" class="text-center" style="padding-top: 10px">
                    <span style="font-size: 18px; font-weight: normal; word-spacing: 2px" class="color_primary">
                    Head Office : 68 Fuad Street, Flat #606 - 6th Floor, Alexandria, Egypt<br>
                        Tel: 4848043 - Fax: 4848042 - Mobile: 01222320055 - 01222640163 <br>
                        Email: asint80@yahoo.com
                    </span>
                </td>
            </tr>
        </table>
    </div>
</footer>

<div class="content-wrapper" style="margin-bottom: 10px;margin-top: 50px" dir="rtl">
    <br>
    <div class="main-content text-center big-text" style="text-decoration: underline;text-decoration-color: #2869B1">
        <span style="padding-bottom: 5px; color: #12427B; font-weight: 700;font-style: normal;font: Amiri !important;">كشف حساب</span>
    </div>
</div>

<div dir="rtl" class="total-display-container">
    <table width="100%" dir="rtl" cellspacing="0px" border="0"
           class="total-display-table" style="margin-right: 50px">

        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->invoice_date}}

            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                الإسكندرية في:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->clientName}}
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                الســـــادة:
            </td>

        </tr>
        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->reference_number}}

            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                ملــف رقـــــم:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->policyData}}
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                البوليـــصة:
            </td>

        </tr>
        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->importedFrom}}

            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                وارد مـــــــــن:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->included}}
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                المشمـول:
            </td>

        </tr>
        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->validationNumber}}

            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                اعتمـــاد رقـــم:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->importsDesc}}
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                الــــــــوارد
            </td>

        </tr>


    </table>
</div>


@include('app.pdf.invoice.partials.table')
<div class="page_break">


</div>

<br class="header-bottom-divider">

<div class="content-wrapper" style="margin-bottom: 10px;margin-top: 50px" dir="rtl">
    <div class="main-content text-center big-text" style="text-decoration: underline;text-decoration-color: #2869B1">
        <span style="padding-bottom: 5px; color: #12427B; font-weight: 700;font-style: normal;font: Amiri !important;">فاتورة</span>
    </div>
    <span style="float: left!important; margin-left: 100px" class="color_accent">{{$invoice->invoice_number}}</span>
</div>

<div dir="rtl" class="total-display-container">
    <table width="100%" dir="rtl" cellspacing="0px" border="0"
           class="total-display-table" style="margin-right: 50px">

        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">


            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                ميناء الشحن:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                الإسكندرية في:
            </td>

        </tr>
        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">


            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                عدد الحاويات:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->clientName}}
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                الســـــادة:
            </td>

        </tr>
        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                ميناء التفريغ:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">

            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                اسم الباخرة:
            </td>

        </tr>
        <tr width="100%" dir="rtl">

            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">

            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label"
                style="font-size: 10px !important;">
                رقم الشهادة الجمركية:
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-value">
                {{$invoice->policyData}}
            </td>
            <td dir="rtl" width="25%" class="py-3 border-0 total-table-attribute-label">
                بوليـــصة:
            </td>

        </tr>


    </table>
</div>

<table dir="rtl" width="100%" class="items-table border-all" cellspacing="0" border="1" >
    <tr dir="rtl" class="item-table-heading-row">
        <th dir="rtl" width="15%" class="text-center item-table-heading">التاريخ</th>
        <th dir="rtl" width="20%" class="text-center item-table-heading">رقم المستند</th>
        <th dir="rtl" width="20%" class="text-center item-table-heading">المبـــــلغ</th>
        <th dir="rtl" width="40%" class="pl-0 text-center item-table-heading">البيــــــــان</th>
        <th dir="rtl" width="5%" class="pr-20 text-center item-table-heading">#</th>
    </tr>
    <tr dir="rtl" class="item-row">
        <td dir="rtl"
            class="text-left item-cellsa"
            style="vertical-align: top;"
        >

        </td>
        <td dir="rtl"
            class="text-center item-cellsa"
            style="vertical-align: center; !important;" rowspan="6"
        >
            {{$invoice->invoice_number}}
        </td>
        <td dir="rtl"
            class="text-left item-cellsa"
            style="vertical-align: top;"
        >
            {!! format_money_pdf($vatWithout, $invoice->user->currency) !!}
        </td>

        <td dir="rtl"
            class="pl-0 text-right item-cellsa"
            style="vertical-align: top;"
        >
            اتعاب  التخليص الجمركى
        </td>
        <td dir="rtl"
            class="pr-20 text-center item-cellsa"
            style="vertical-align: top;"
        >

        </td>
    </tr>
    <tr  dir="rtl" class="item-row" ><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr  dir="rtl" class="item-row" ><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr  dir="rtl" class="item-row" ><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr dir="rtl" class="item-row">
        <td dir="rtl"
            class="text-left item-cellsa"
            style="vertical-align: top;"
        >

        </td>

        <td dir="rtl"
            class="text-left item-cellsa"
            style="vertical-align: top;"
        >
            {!! format_money_pdf($vatVat, $invoice->user->currency) !!}
        </td>

        <td dir="rtl"
            class="pl-0 text-right item-cellsa"
            style="vertical-align: top;"
        >
           ضريبة القيمة المضافة
        </td>
        <td dir="rtl"
            class="pr-20 text-center item-cellsa"
            style="vertical-align: top;"
        >

        </td>
    </tr>
    <tr dir="rtl" class="item-row">
        <td dir="rtl"
            class="text-left item-cellsa"
            style="vertical-align: top;"
        >

        </td>

        <td dir="rtl"
            class="text-left item-cellsa"
            style="vertical-align: top;"
        >
            {!! format_money_pdf($invoice->vat, $invoice->user->currency) !!}
        </td>

        <td dir="rtl"
            class="pl-0 text-right item-cellsa"
            style="vertical-align: center"  colspan="2">
            {{$vatString}}
        </td>

    </tr>

</table>

<table dir="rtl" width="100%" class="items-tablesa" cellspacing="0" border="0" >
    <tr>
        <td class=" color_primary text-center">  ماعدا السهو والخطا
        </td>
        <td class="color_primary text-center">الحسابات</td>
    </tr>
    <tr>
        <td class=" color_primary text-center"> &nbsp;
        </td>
        <td class="color_primary text-center">...........................</td>
    </tr>
</table>
<hr style="border-top: dotted 3px #111827;" />


<div class="content-wrapper" style="margin-bottom: 10px;margin-top: 5px" dir="rtl">
    <div class="main-content text-center big-text" style="text-decoration: underline;text-decoration-color: #2869B1">
        <span style="padding-bottom: 5px; color: #12427B; font-weight: 700;font-style: normal;font: Amiri !important;">قسيمة استلام - نقدي</span>
    </div>
    <span style="float: left!important; margin-left: 100px" class="color_accent">{{$invoice->invoice_number}}</span>
</div>

<table dir="rtl" width="100%" class="items-tablesa border-all" style="border-color: #000000 !important;" cellspacing="0" border="1" >
    <tr>
        <td class=" color_primary text-center" colspan="3">{{$invoice->clientName}}</td>
        <td class="color_primary text-center" width="25%" style="padding-right: 10px;border-color: #000000 !important;">الاسم</td>
    </tr>
    <tr>
        <td class="color_primary text-center" width="65%">&nbsp;</td>
        <td class="color_primary text-center" width="10%">جنيه</td>
        <td class="color_primary text-center" width="10%"> قرش</td>
        <td class="color_primary text-center" width="15%">&nbsp;</td>
    </tr>
    <tr>
        <td class="color_primary text-center" width="65%"> {{$vatString}}</td>
        <td class="color_primary text-center" width="10%"> {{$vatInt}}</td>
        <td class="color_primary text-center" width="10%"> {{$vatFraction}}</td>
        <td class="color_primary text-center" width="15%" style="padding-right: 10px;border-color: #000000 !important;">المبلغ</td>
    </tr>
    <tr>
        <td colspan="4" class="color_primary text-right" style="padding-right: 10px;border-color: #000000 !important;">
            اتعاب  التخليص الجمركى + ضريبة القيمة المضافة
        </td>
    </tr>
    <tr>
        <td colspan="1" class="color_primary text-right" style="margin-right: 10px"> الحسابات:.......................</td>
        <td colspan="2" class="text-center">
            20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;
        </td>
        <td colspan="1" class="text-center color_primary" style="padding-right: 10px;border-color: #000000 !important;">التاريخ</td>
    </tr>


</table>


</div>
</body>

</html>
