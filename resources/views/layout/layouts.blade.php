<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miracle Payment</title>
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
    <!-- End Font -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
</head>

<body>
    <header class="bg-blue box-shadow-sm navbar-sticky">
        <!-- Topbar-->
        <div class="topbar topbar-dark bg-dark">
            <div class="container">
                <div>
                    <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="javascript:void(0);" data-toggle="dropdown">English</a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item pb-1" href="">English</a></li>

                            <li><a class="dropdown-item pb-1" href="">Spanish</a></li>

                            <li><a class="dropdown-item pb-1" href="">Arabic</a></li>
                        </ul>
                    </div>
                </div>
                <div class="topbar-text dropdown d-md-none"><a class="topbar-link" href="tel:+" data-toggle="dropdown"><i class="fa fa-phone mr-2"></i>+84.........</a>
                </div>
                <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="fa fa-phone"></i><span class="text-muted mr-1">Support</span><a class="topbar-link" href="tel:+84.........">+84.........</a></div>
            </div>
        </div>
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <div class="navbar-sticky">
            <div class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand d-none d-sm-block mr-4 order-lg-1" href="" style="min-width: 7rem;">
                        <img width="200" src="{{asset('assets/img/11220.png')}}" alt="" />
                    </a>
                    <a class="navbar-brand d-sm-none mr-2 order-lg-1" href="" style="min-width: 4.625rem;">
                        <img width="74" src="{{asset('assets/img/11221.png')}}" alt="" />
                    </a>
                    <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="#searchBox" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
                            <div class="navbar-tool-icon-box"><i class="fa fa-search"></i></div>
                        </a>
                        <a class="navbar-tool d-none d-lg-flex" href=""><span class="navbar-tool-tooltip">Favourites</span>
                            <div class="navbar-tool-icon-box"><i class="fa fa-heart"></i></div>
                        </a>
                        <a class="navbar-tool ml-1 mr-n1" href=""><span class="navbar-tool-tooltip">Account</span>
                            <div class="navbar-tool-icon-box"><i class="fa fa-user"></i></div>
                        </a>
                        <div class="navbar-tool dropdown ml-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href=""><span class="fa fa-label">0</span><i class="fa fa-shopping-basket"></i></a>
                            <!-- Cart dropdown-->
                        </div>
                    </div>
                    <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbarCollapse">
                        <!-- Search-->
                        <div class="input-group-overlay d-lg-none my-3">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                            <form action="" id="search_form1" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="GJXCkTXTFiMeHv0viPAAnro53yYO0Awuu9NzTEU6">
                                <input class="form-control prepended-form-control" type="text" name="product_item" placeholder="Search your products...">
                            </form>
                        </div>
                        <!-- Primary menu-->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown"><a class="nav-link" href="">Home</a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="">Shop</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Featured Items</a></li>
                                    <li><a class="dropdown-item" href="">Free Items</a></li>
                                    <li><a class="dropdown-item" href="">New Releases</a></li>
                                    <li><a class="dropdown-item" href="">Popular Items</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Categories</a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="">Android</a></li>

                                    <li><a class="dropdown-item" href="">iOS</a></li>

                                    <li><a class="dropdown-item" href="">Unity</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">About Us</a></li>
                                    <li><a class="dropdown-item" href="">Terms of Service</a></li>
                                    <li><a class="dropdown-item" href="">Privacy Policy</a></li>
                                    <li><a class="dropdown-item" href="">Disclaimer</a></li>
                                    <li><a class="dropdown-item" href="">License details</a></li>
                                    <li><a class="dropdown-item" href="">Note for Free Items</a></li>
                                    <li><a class="dropdown-item" href="">Note before buying items</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link" href="">Contact</a></li>
                            <li class="nav-item dropdown"><a class="nav-link" href="">Flash Sale</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Search collapse-->
            <div class="search-box collapse" id="searchBox">
                <div class="card pt-2 pb-4 border-0 rounded-0">
                    <div class="container">
                        <div class="input-group-overlay">
                            <div class="input-group-prepend-overlay"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                            <form action="https://www.srcunity.com/shop" id="search_form2" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="GJXCkTXTFiMeHv0viPAAnro53yYO0Awuu9NzTEU6">
                                <input class="form-control prepended-form-control" type="text" name="product_item" id="product_item_top" placeholder="Search your products...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>