<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/app.css" rel="stylesheet">
    <title>PRINT</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Imprima&display=swap');

        * {
            font-family: 'Imprima', sans-serif !important;
        }

        @media print {

            .hidden-print {
                display: none !important;
            }
        }

        @page {
            margin: 0; /* Set margins to zero */
        }

        .invoice table {
            margin-bottom: 20px !important;
            text-align: center !important;
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: center;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice .contacts {
            margin-bottom: 20px;
            padding: 0px 30px !important;
        }

        header {
            padding: 0px 30px !important;
        }

        tr td {
            width: 20%;
        }

        .invoice table td, .invoice table th {
            padding: 2.5px;
        }

        .invoice table tfoot td {
            text-align: center;
            padding: 0px 0px !important;
            font-size: 12px;
        }

        .invoice-id {
            font-size: 17px;
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0;
            color: #008cff;
        }

        .invoice main {
            padding-bottom: 0px !important;
        }

        .invoice table, strong {
            font-family: 'Imprima', sans-serif !important;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 0px !important;
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0;
            color: #008cff;
            font-size: 17px;
        }

        .invoice-to {
            text-transform: uppercase;
        }

        hr {
            color: black;
        }

        .invoice {
            position: relative;
            background-color: #fff;
            min-height: 680px;
            padding: 15px;
            width: 800px;
            margin: auto;
        }

        .invoice table {
            white-space: nowrap !important;
            font-weight: 400 !important;
            font-size: 16px !important;
        }
    </style>
</head>

<body>


<div id="invoice">
    <div class="toolbar hidden-print">
        <div class="text-end">
            <button type="button" class="btn btn-dark" onclick="window.print()"><i class="fa fa-print"></i> Print
            </button>
        </div>
        <hr/>
    </div>
    <div class="invoice overflow-auto">
        <header>
            <div class="row">
                <div class="col">
                    <a href="javascript:;">
                        <img src="{{ asset('backend') }}/assets/images/logo-icon.png" width="80"
                             alt=""/>
                    </a>
                </div>
                <div class="col company-details">
                    <h2 class="name">
                        <a target="_blank" href="javascript:;">
                            Maser Bazar
                        </a>
                    </h2>
                    <div>Bagmara,Rajshahi,Bangladesh</div>
                    <div>Owner:+8801307788699</div>
                    <div>Manager:+8801307788699</div>
                    <div>developerfaisal32@gmail.com</div>
                </div>
            </div>
        </header>
        <main>
            <div class="row contacts">
                <div class="col invoice-to">
                    <div class="text-gray-light">INVOICE TO:</div>
                    <h1 class="to">{{$invoice->name ? $invoice->name : ''}}</h1>
                    <div class="address">{{$invoice->phone ? $invoice->phone : ''}}</div>
                    <div class="address">{{$invoice->address ? $invoice->address : ''}}</div>
                    <div class="email">
                        <a href="mailto:{{$invoice->email ? $invoice->email : ''}}">{{$invoice->email ? $invoice->email : ''}}</a>
                    </div>
                </div>
                <div class="col invoice-details">
                    <h1 class="invoice-id">INVOICE #{{$invoice->invoice_id ? $invoice->invoice_id : ''}}</h1>
                    <div class="date">Date of Invoice: {{date('d-M-Y')}}</div>
                    <div class="date">Due Date: {{date('d-M-Y')}}</div>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-left">Name</th>
                    <th class="text-right">Rate</th>
                    <th class="text-right">Weight</th>
                    <th class="text-right">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach($supplier_sell_fishes as $key=>$supplier_sell_fish)
                    <tr>
                        <td class="">{{$key+1}}</td>
                        <td class="">{{$supplier_sell_fish->fish_name}}</td>
                        <td class="">{{$supplier_sell_fish->fish_rate}} TK</td>
                        <td class="">{{$supplier_sell_fish->fish_weight}} KG</td>
                        <td class="">{{$supplier_sell_fish->fish_amount}} TK</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <hr/>
            <table>
                <tbody class="table-footer">
                <tr>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""><strong> TOTAL WEIGHT </strong></td>
                    <td><strong> {{$total_fish_weight}} KG </strong></td>
                </tr>
                <tr>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""><strong> SUBTOTAL </strong></td>
                    <td><strong> {{$total_fish_amount}} Tk </strong></td>
                </tr>
                <tr>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""><strong> TAX 0% </strong></td>
                    <td><strong> 00 Tk </strong></td>
                </tr>
                <tr>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""></td>
                    <td colspan=""><strong> GRAND TOTAL </strong></td>
                    <td><strong> {{$total_fish_amount}} Tk </strong></td>
                </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>

<script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/app.js"></script>
</body>
</html>
