<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Down Town</title>

    <!-- Bootstrap cdn 3.3.7 -->
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Custom font montseraat -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png" />

    <!-- Custom style invoice1.css -->
    <link rel="stylesheet" type="text/css" href="./invoice1.css">
</head>

<body>

    <section class="back">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="invoice-wrapper">
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="logo-wrapper">
                                        <a href="../index.html"> <img style="width: 100px;" src="../assets/imgs/navbar-brand.svg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="invoice-top-right">
                                        <h2 class="our-company-name">Down Town</h2>
                                        <h6 class="our-address">536, 20-100 NAKURU<br>Kenya</h6>

                                        <h5 id="date"></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h2 class="title">Invoice</h2>
                                </div>
                                <div class="invoice-bottom-left">
                                    <div class="col-sm-3 col-md-3">
                                        <div>
                                            <h5>Invoice_No.</h5>
                                            <h4>BJI009872</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="responsive">
                                    <div class="col-md-offset-1 col-md-8 col-sm-9">
                                        <div class="invoice-bottom-right">
                                            <table class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="success">
                                                        <th>Qty</th>
                                                        <th>Description</th>
                                                        <th>Price</th>
                                                        <th>Total Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Pumpkins </td>
                                                        <td>KSH 85.00</td>
                                                        <td>Ksh 255.00</td>
                                                    </tr>

                                                    <tr style="height: 50px;"></tr>
                                                </tbody>
                                                <thead>
                                                    <tr class="danger">
                                                        <th class="text-center" colspan="3">Total</th>

                                                        <th>Ksh 1295.00</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                            <h4 class="terms">Terms</h4>
                                            <ul>

                                                <li>Make payment immediately to ensure convenience in sales transaction.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <hr class="divider">
                                </div>

                                <div class="col-sm-4">
                                    <h6 class="text-left">customercare@downtown.com</h6>
                                </div>

                                <div class="col-sm-8">
                                    <h6 class="text-right">(+254) 746 244 279</h6>
                                </div>
                            </div>
                            <div class="bottom-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- jquery slim version 3.2.1 minified -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="../assets/vendors/bootstrap/bootstrap.min.js"></script>
    <script>
        var d = new Date();
        document.getElementById("date").innerHTML = d.toDateString();
    </script>

</body>

</html>