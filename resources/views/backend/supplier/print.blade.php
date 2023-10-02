<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend') }}/assets/images/favicon-32x32.png" type="image/png"/>
    <!--plugins-->
    <link href="{{ asset('backend') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="{{ asset('backend') }}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{ asset('backend') }}/assets/css/pace.min.css" rel="stylesheet"/>
    <script src="{{ asset('backend') }}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/app.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/dark-theme.css"/>
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/semi-dark.css"/>
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/header-colors.css"/>
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>

<div class="page-content">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="toolbar hidden-print">
                    <div class="text-end">
                        <button type="button" class="btn btn-dark" onclick="window.print()"><i class="fa fa-print"></i> Print</button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Export as PDF
                        </button>
                    </div>
                    <hr/>
                </div>
                <div class="invoice overflow-auto">
                    <div style="min-width: 600px">
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
                                            Arboshiki
                                        </a>
                                    </h2>
                                    <div>455 Foggy Heights, AZ 85004, US</div>
                                    <div>(123) 456-789</div>
                                    <div>company@example.com</div>
                                </div>
                            </div>
                        </header>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-to">
                                    <div class="text-gray-light">INVOICE TO:</div>
                                    <h2 class="to">John Doe</h2>
                                    <div class="address">796 Silver Harbour, TX 79273, US</div>
                                    <div class="email"><a href="mailto:john@example.com">john@example.com</a>
                                    </div>
                                </div>
                                <div class="col invoice-details">
                                    <h1 class="invoice-id">INVOICE 3-2-1</h1>
                                    <div class="date">Date of Invoice: 01/10/2018</div>
                                    <div class="date">Due Date: 30/10/2018</div>
                                </div>
                            </div>
                            <table>
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
                                <tr>
                                    <td class="">04</td>
                                    <td class="text-left">
                                        <h3>
                                            <a target="_blank" href="javascript:;">
                                                Youtube channel
                                            </a>
                                        </h3>
                                        <a target="_blank" href="javascript:;">
                                            Useful videos
                                        </a> to improve your Javascript skills. Subscribe and stay tuned :)
                                    </td>
                                    <td>$0.00</td>
                                    <td>100</td>
                                    <td class="total">$0.00</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">SUBTOTAL</td>
                                    <td>$5,200.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">TAX 25%</td>
                                    <td>$1,300.00</td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">GRAND TOTAL</td>
                                    <td>$6,500.00</td>
                                </tr>
                                </tfoot>
                            </table>
{{--                            <div class="thanks">Thank you!</div>--}}
{{--                            <div class="notices">--}}
{{--                                <div>NOTICE:</div>--}}
{{--                                <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30--}}
{{--                                    days.--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </main>
                        <footer>Develop By <a href="https://www.facebook.com/developerfaisalahmmedapon"> Faisal Ahmmed  </a></footer>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('backend') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{ asset('backend') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{ asset('backend') }}/assets/js/app.js"></script>
</body>
</html>
