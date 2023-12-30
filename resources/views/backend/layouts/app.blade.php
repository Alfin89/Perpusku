<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta name="description" content="POS - Bootstrap Admin Template" />
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive" />
    <meta name="author" content="Dreamguys - Bootstrap Admin Template" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Dreams Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}" />

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        {{-- Header --}}
        @include('backend.layouts.includes.header')
        
            @include('backend.layouts.includes.sidebar')

        <div class="page-wrapper">
            <div class="content">
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Expired Products</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>SNo</th>
                                        <th>Product Code</th>
                                        <th>Product Name</th>
                                        <th>Brand Name</th>
                                        <th>Category Name</th>
                                        <th>Expiry Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="javascript:void(0);">IT0001</a>
                                        </td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product2.jpg" alt="product" />
                                            </a>
                                            <a href="productlist.html">Orange</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>12-12-2022</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <a href="javascript:void(0);">IT0002</a>
                                        </td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product3.jpg" alt="product" />
                                            </a>
                                            <a href="productlist.html">Pineapple</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>25-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <a href="javascript:void(0);">IT0003</a>
                                        </td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product4.jpg" alt="product" />
                                            </a>
                                            <a href="productlist.html">Stawberry</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>19-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <a href="javascript:void(0);">IT0004</a>
                                        </td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="assets/img/product/product5.jpg" alt="product" />
                                            </a>
                                            <a href="productlist.html">Avocat</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>20-11-2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>