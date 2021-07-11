<table dir="rtl" width="100%" class="items-table " cellspacing="0" border="0">
    <tr dir="rtl" class="item-table-heading-row">

        <th dir="rtl" width="33%" class="text-left item-table-heading">المبـــــلغ</th>
        <th dir="rtl" width="55%" class="pl-0 text-right item-table-heading">البيــــــــان</th>
        <th dir="rtl" width="8%" class="pr-20 text-right item-table-heading"></th>
        <th dir="rtl" width="2%" class="pr-20 text-right item-table-heading">#</th>
    </tr>
    @php
    $index = 1
    @endphp
    @if($invoice->vat > 0)
    <tr dir="rtl" class="item-row">
        <td dir="rtl"
            class="text-left item-cell"
            style="vertical-align: top;"
        >
            {!! format_money_pdf($invoice->vat, $invoice->user->currency) !!}
        </td>

        <td dir="rtl"
            class="pl-0 text-right item-cell"
            style="vertical-align: top;"
        >
            <span dir="rtl">{{ $vatTextVal }}</span><br>
            <span dir="rtl" class="item-description"></span>
        </td>

        <td dir="rtl" class="pr-20 text-right item-cell"></td>
        <td dir="rtl"
            class="pr-20 text-right item-cell"
            style="vertical-align: top;"
        >
            {{$index}}
        </td>
    </tr>
    @php
    $index += 1
    @endphp
    @endif
    @foreach ($invoice->items as $item)
    <tr dir="rtl" class="item-row">


        <td dir="rtl"
            class="text-left item-cell"
            style="vertical-align: top;"
        >
            {!! format_money_pdf($item->total, $invoice->user->currency) !!}
        </td>

        <td dir="rtl"
            class="pl-0 text-right item-cell"
            style="vertical-align: top;"
        >
            <span dir="rtl">{{ $item->name }}</span><br>
            <span dir="rtl" class="item-description">{!! nl2br(htmlspecialchars($item->description)) !!}</span>
        </td>

        <td dir="rtl" class="pr-20 text-right item-cell"></td>
        <td dir="rtl"
            class="pr-20 text-right item-cell"
            style="vertical-align: top;"
        >
            {{$index}}
        </td>
    </tr>
    @php
    $index += 1
    @endphp
    @endforeach
    <tr dir="rtl" class="item-row">
        <td dir="rtl"
            class="text-left item-cell remarks"
            style="vertical-align: top;"
        >
            {!! format_money_pdf($total, $invoice->user->currency)!!}
        </td>

        <td dir="rtl"
            class="pl-0 text-right item-cell remarks" colspan="2"
            style="vertical-align: top;"
        >
            {{$stringTotal}}
        </td>
        <td></td>
    </tr>
    <tr dir="rtl" class="item-row">
        <td dir="rtl"
            class="text-left item-cell remarks"
            style="vertical-align: top;"
        >
            ماعدا السهو والخطا
        </td>

        <td dir="rtl"
            class="pl-0 text-right item-cell remarks" colspan="2"
            style="vertical-align: top;"
        >
            يعتمد قسم الوارد
        </td>
        <td></td>
    </tr>
</table>



