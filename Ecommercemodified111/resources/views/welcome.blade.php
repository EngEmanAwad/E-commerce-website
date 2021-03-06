<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">



    <link rel="stylesheet" href="{{URL::asset('enduser/css/style.css')}}">

    <title>E-Commerce Website</title>
</head>
<body>

{{-- <body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}

    <!--  --------------------------------start Top Nav Bar--------------------------------------  -->

    <nav class=" navbar navbar-expand-lg navbar-light top-navbar  mt-2">
        <div class="container">
            <nav class="navbar navbar-light  ">
                <span class="navbar-text">
                    Free shipping on all orders over 75$ !
                </span>
            </nav>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mt-2 mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Myaccount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"   id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            All Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Women</a></li>
                            <li><a class="dropdown-item" href="#">Men</a></li>
                            <li><a class="dropdown-item" href="#">Kids</a></li>
                            <li><a class="dropdown-item" href="#">Foot wear</a></li>
                            <li><a class="dropdown-item" href="#">Women</a></li>
                            <li><a class="dropdown-item" href="#">Health & Beauty</a></li>
                            <li>
                               
                            </li>
                            
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link nav-icon " href="#">

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart-fill " viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            Mycart</a>
                    </li>

                </ul>



            </div>
        </div>
        </div>
    </nav>



    <!-- ------------start search box---------------------------- -->
    <form action="{{url('/search')}}" method="GET" class="form">
        @csrf
<div class="container search-all">
    <div class="container search-b">
          <input type="search" placeholder="Search Here What you Need !  " class="search-field"    />

         
          <button type="submit" class="search-button"  name="box-search">
            <i class="bi bi-search"></i>
          </button>
        
      </div>

    </div>

</form>
    <!-- <div class=" container search-box mt-4 box position-relative">

        <form class="d-flex fnav">
            <input class="form-control me-2 rounded-pill" type="search" placeholder="Search here what you need ..... "
                aria-label="Search">

            <i class="fs-thin fa-magnifying-glass"></i>
        </form>

        <i class="fa fa-search sicon position-absolute"></i>
        <div class="line"> | </div>

    </div> -->

    <!-- ------------End search box---------------------------- -->

    <!--  --------------------------------End Top Nav Bar--------------------------------------  -->


    <!--  --------------------------------start Header section--------------------------------------  -->

    <!--  --------------------------------start logo Nav Bar--------------------------------------  -->

    <nav class="navbar navbar-expand-lg  navbar-dark    mt-5 logo-navbar">
        <div class="container ">
            <a class="navbar-brand Fashion-logo" href="#"> Fashion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarCollapse">
                <ul class="navbar-nav  ms-auto mb-2 mb-md-0 hnav-item  ">
                    <li class="nav-item  ">
                        <a class="nav-link " aria-current="page" href="/admin">Login/register</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Footwear</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Blog</a>
                    </li>

            </div>
    </nav>

    <!--  --------------------------------End logo Nav Bar--------------------------------------  -->

    <!--  --------------------------------start header-slider--------------------------------------  -->


    <div id="carouselExampleDark" class="carousel  slide  mb-4 " data-bs-ride="carousel">


        <div class="carousel-inner text-center  ">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{asset('enduser/imgs/header/fashionheader1.jpg')}}" class=" w-100" alt="fashion1">

                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center   ">
                    <div class="header-slider-para-caption  ">

                        <p1>
                            SOME THING IS BETTER </p1>
                        <p2>
                            Fashion lorrem </p2>
                    </div>
                </div>
            </div>


            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{asset('enduser/imgs/header/fashionheader1.jpg')}}" class=" w-100" alt="fashion1">

                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center   ">
                    <div class="header-slider-para-caption  ">

                        <p1>
                            SOME THING IS BETTER </p1>
                        <p2>
                            Fashion lorrem </p2>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{asset('enduser/imgs/header/fashionheader1.jpg')}}" class=" w-100" alt="fashion1">

                <div class="carousel-caption d-flex h-100 align-items-center justify-content-center   ">
                    <div class="header-slider-para-caption  ">

                        <p1>
                            SOME THING IS BETTER </p1>
                        <p2>
                            Fashion lorrem </p2>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    <!--  --------------------------------End Header section--------------------------------------  -->

    <!-- --------------------------------start  New trend section--------------------------------------  -->
    <div class="container middel-trend-section">
        <div class="grid-container  new-trend mb-4">


            <div class="trend-card">


                <img src="{{asset('enduser/imgs/middlesection/middle2.jpg')}}" class="card-img-top mb-4" alt="tpicture">
                <div class="trend-body ">

                    <h4 class="trend-title1">Hot Collection</h4>

                    <h2 class="trend-title2 mb-4">New trend for women</h2>

                    <p class="trend-text mb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur sed repellendus harum.
                        Necessitatibus dicta sint qui, quos nobis fuga! Dignissimos quaerat amet facilis odio,
                        eligendi tempora vel? Aliquid, </p>

                    <a href="#" class="btn btn-trend text-center mb-2">Shop Now</a>
                </div>


            </div>
            <div class=" left-trend position-relative ">
                <div class="upper-trend-img    ">
                    <img src="{{asset('enduser/imgs/collection/lucollection.jpg')}}" class="card-img-top   position-relative" alt="uimg">

                    <div class="deschov   position-absolute">
                        <a href="#"
                            class="btn btn-upper text-center btn-outline ms-2 top-50 start-50  translate-middle    position-absolute ">View
                            Collection</a>
                    </div>


                </div>
            </div>


            <div class="lower-trend-img">

                <img src="{{asset('enduser/imgs/collection/ldcollection1.jpg')}}" class="card-img-top" alt="limg">
            </div>

        </div>

    </div>
    </div>
    <!--  -------------------------------- End New trend section--------------------------------------  -->

    <!--  -------------------------------- Start featured items section--------------------------------------  -->
    <div class="container featured-section mt-5">
        <h3><span style=" font-size:30px; color:#4b4b4b;">Featured Items</span></h3>

        <!--    start featured items nav bar -->
        <div class="container feature-navbar-links   mt-3  mb-1 ">
            <ul class="nav justify-content-center  feature-navbar-items ">

                <li class="nav-item feature-navbar-items">
                    <a class="nav-link link-secondary link-color " aria-current="page" href="{{route('products.index')}}">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary link-color" href="#">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary link-color" href="#">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-secondary link-color" href="#">kids</a>
                </li>
            </ul>
        </div>

        <!--    end featured items nav bar -->

        <!--    start Items Album -->
        <div class="container mb-2  ">

            <div class="album py-5 ">
              

                <div class="feature-items-album-img1  position-relative ">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col-lg-3">
                           
                            <div class="feature-items-album-img1  position-relative     ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                 <a href="{{route('carts.index')}}" >
                                <img src="{{asset('enduser/imgs/featured/feature1c.jpg')}}" class="bd-placeholder-img card-img-top   "
                                    alt="albumimg1">

                 </a>  
                           
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center mb-2">
                                        <span style="color:#4b4b4b;">
                                  
                                         
                                            
                                            <h2 class="items-album-img1-title1">  Susupendisse et</h2>
                                         
                                   
                                        </span>

                                             
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                      
                        <div class="col-lg-3">

                            <div class="feature-items-album-img2  position-relative     ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>
                                <a href="{{route('carts.index')}}" >
                                <img src="{{asset('enduser/imgs/featured/feature6c.jpg')}}" class="bd-placeholder-img card-img-top"
                                    alt="albumimg1">

                                </a>
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center mb-2">
                                        <span style="color:#4b4b4b;">
                                            
                                            <h2 class="items-album-img1-title1"> Susupendisse et</h2> 
                                        </span>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">

                            <div class="feature-items-album-img3  position-relative pink-block   ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                                <div class="pink-circle  position-absolute position-relative">
                                    <div class="circle-p position-absolute pt-2 ps-3">
                                        <p> 20% <br>OFF</p>
                                    </div>
                                </div>

                                <a href="{{route('carts.index')}}" >

                                <img src="{{asset('enduser/imgs/featured/feature8.jpg')}}" class="bd-placeholder-img card-img-top"
                                    alt="albumimg1">
                                </a>
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center mb-2">
                                        <span style="color:#4b4b4b;">
                                           
                                            <h2 class="items-album-img1-title1"> Susupendisse et</h2> 
                                        </span>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="feature-items-album-img4  position-relative     ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $120.00 </p>
                                <a href="{{route('carts.index')}}" >
                                <img src="{{asset('enduser/imgs/featured/feature9c.jpg')}}" class="bd-placeholder-img card-img-top"
                                    alt="albumimg1">

                                </a>
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center mb-2">
                                        <span style="color:#4b4b4b;">

                                          
                                            <h2 class="items-album-img1-title1"> Susupendisse et</h2>   
                                        </span>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="feature-items-album-img5  position-relative pink-block   ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                                <div class="pink-circle  position-absolute position-relative">
                                    <div class="circle-p position-absolute pt-2 ps-3">
                                        <p> 20% <br>OFF</p>
                                    </div>
                                </div>

                                <a href="{{route('carts.index')}}" >

                                <img src="{{asset('enduser/imgs/featured/feature8.jpg')}}" class="bd-placeholder-img card-img-top"
                                    alt="albumimg1">
                                </a>
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center mb-2">
                                        <span style="color:#4b4b4b;">
                                            
                                            <h2 class="items-album-img1-title1"> Susupendisse et</h2>  
                                        </span>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="feature-items-album-img6  position-relative     ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>
                                <a href="{{route('carts.index')}}" >
                                <img src="{{asset('enduser/imgs/featured/feature9c.jpg')}}" class="bd-placeholder-img card-img-top"
                                    alt="albumimg1">
                                </a>
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center mb-2">
                                        <span style="color:#4b4b4b;">

                                          
                                            <h2 class="items-album-img1-title1"> Susupendisse et</h2>   
                                        </span>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">

                            <div class="feature-items-album-img7  position-relative  eye-block     ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $120.00 </p>
                                <div class="fdesc   position-absolute">
                                    <a href="{{route('carts.index')}}" >
                                    <div class="eye-circle  position-absolute position-relative">

                                        <i class="fa fa-eye circle-icon position-absolute fa-2x "></i>
                                    </div>
                                </div>
                                
                                <img src="{{asset('enduser/imgs/featured/feature1c.jpg')}}" class="bd-placeholder-img card-img-top "
                                    alt="albumimg1">
                                </a>
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center mb-2">
                                        <span style="color:#4b4b4b;">

                                           
                                            <h2 class="items-album-img1-title1"> Susupendisse et</h2>   
                                        </span>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">

                            <div class="feature-items-album-img8  position-relative     ">

                                <p class="img-text  position-absolute ps-2 top-0 end-0"> $120.00 </p>
                                <a href="{{route('carts.index')}}" >
                                <img src="{{asset('enduser/imgs/featured/feature6c.jpg')}}" class="bd-placeholder-img card-img-top"
                                    alt="albumimg1">
                                </a>
                                <div class="card-body">
                                    <div class="ficons justify-content-center align-items-center  mb-2">
                                        <span style="color:#4b4b4b;">

                                        
                                            <h2 class="items-album-img1-title1"> Susupendisse et</h2> 
                                        </span>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:fuchsia;"></i>
                                        <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                    </div>
                                    <div class="items-icons">

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-heart fa-stack-1x"></i>
                                        </span>
                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                        </span>

                                        <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-project-diagram fa-stack-1x "></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>


    <!--    End Items Album -->
    <!--  -------------------------------- end featured items section--------------------------------------  -->


    <!--   Start Off section  -->

    <div class="row  mb-4">
        <div class="column position-relative  ">
            <div class="off-left-para   ">
                <p class="left-parag   position-absolute  ">
                    <span style="font-size: 70px; font-weight: bold;"> 70% </span>
                    <span class="rot-off"> OFF </span>
                    <br>
                    Tao Kinben Na ?
                </p>

                <img src="{{asset('enduser/imgs/rcollection1c.jpg')}}" alt="off-pic-left" style="width:100%">
            </div>
        </div>
        <div class="column">


            <div class="off-right-para   position-relative">

                <p class="right-parag   position-absolute  ">
                    <span style="font-size: 25px; "> Amr CHEHARA KHARAP NA </span> <BR>
                    <span style="color:fuchsia;font-size: 50px; font-weight: bold;"> Chehara </span>
                    <span style="font-size: 50px; font-weight: bold;"> Dia Ki hoy </span>
                </p>
                <img src="{{asset('enduser/imgs/images26c.jpg')}}" alt="off-pic-right" style="width:100%  ">
            </div>

        </div>


        <!--   End Off section  -->


        <!-- Start Trending Items  -->

        <div class="container featured-section mt-5   mb-2">
            <h3><span style=" font-size:30px; color:#4b4b4b;">Trending Items</span></h3>

            <div class="container   ">

                <div class="album py-5 ">

                    <div class="feature-items-album-img1  position-relative     ">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <div class="col-lg-3">

                                <div class="feature-items-album-img1  position-relative     ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                                    <img src="{{asset('enduser/imgs/featured/feature1c.jpg')}}" class="bd-placeholder-img card-img-top   "
                                        alt="albumimg1">


                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-3">

                                <div class="feature-items-album-img2  position-relative     ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                                    <img src="{{asset('enduser/imgs/trending/trending2c.jpg')}}" class="bd-placeholder-img card-img-top"
                                        alt="albumimg1">
                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">

                                <div class="feature-items-album-img3  position-relative pink-block   ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $120.00 </p>

                                    <div class="pink-circle  position-absolute position-relative">
                                        <div class="circle-p position-absolute pt-2 ps-3">
                                            <p> 20% <br>OFF</p>
                                        </div>
                                    </div>



                                    <img src="{{asset('enduser/imgs/featured/feature8.jpg')}}" class="bd-placeholder-img card-img-top"
                                        alt="albumimg1">
                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-items-album-img4  position-relative     ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $120.00 </p>

                                    <img src="{{asset('enduser/imgs/featured/feature9c.jpg')}}" class="bd-placeholder-img card-img-top"
                                        alt="albumimg1">
                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="feature-items-album-img5  position-relative pink-block   ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                                    <div class="pink-circle  position-absolute position-relative">
                                        <div class="circle-p position-absolute pt-2 ps-3">
                                            <p> 20% <br>OFF</p>
                                        </div>
                                    </div>

                                    <img src="{{asset('enduser/imgs/trending/trending4c.jpg')}}" class="bd-placeholder-img card-img-top"
                                        alt="albumimg1">
                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="feature-items-album-img6  position-relative     ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                                    <img src="{{asset('enduser/imgs/featured/feature9c.jpg')}}" class="bd-placeholder-img card-img-top"
                                        alt="albumimg1">
                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="feature-items-album-img7  position-relative  eye-block     ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $120.00 </p>
                                    <div class="fdesc   position-absolute">
                                        <div class="eye-circle  position-absolute position-relative">

                                            <i class="fa fa-eye circle-icon position-absolute fa-2x "></i>
                                        </div>
                                    </div>
                                    <img src="{{asset('enduser/imgs/trending/trending10c.jpg')}}" class="bd-placeholder-img card-img-top "
                                        alt="albumimg1">
                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">

                                <div class="feature-items-album-img8  position-relative     ">

                                    <p class="img-text  position-absolute ps-2 top-0 end-0"> $120.00 </p>

                                    <img src="{{asset('enduser/imgs/trending/trending3c.jpg')}}" class="bd-placeholder-img card-img-top"
                                        alt="albumimg1">
                                    <div class="card-body">
                                        <div class="ficons justify-content-center align-items-center  mb-2">
                                            <span style="color:#4b4b4b;">
                                                <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                            </span>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:fuchsia;"></i>
                                            <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                                        </div>
                                        <div class="items-icons">

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-heart fa-stack-1x"></i>
                                            </span>
                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                            </span>

                                            <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                                <i class="far fa-circle fa-stack-2x"></i>
                                                <i class="fas fa-project-diagram fa-stack-1x "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End Trending Items  -->


    <!-- Start load more button -->



    <div class="album container   more mb-5 ">

        <div class="feature-items-album-img1  position-relative     ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col-lg-3">

                    <div class="feature-items-album-img1  position-relative     ">

                        <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                        <img src="{{asset('enduser/imgs/featured/feature1c.jpg')}}" class="bd-placeholder-img card-img-top   "
                            alt="albumimg1">


                        <div class="card-body">
                            <div class="ficons justify-content-center align-items-center mb-2">
                                <span style="color:#4b4b4b;">
                                    <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                </span>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                            </div>
                            <div class="items-icons">

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-heart fa-stack-1x"></i>
                                </span>
                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                </span>

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-project-diagram fa-stack-1x "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="feature-items-album-img2  position-relative     ">

                        <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                        <img src="{{asset('enduser/imgs/featured/feature6c.jpg')}}" class="bd-placeholder-img card-img-top" alt="albumimg1">
                        <div class="card-body">
                            <div class="ficons justify-content-center align-items-center mb-2">
                                <span style="color:#4b4b4b;">
                                    <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                </span>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                            </div>
                            <div class="items-icons">

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-heart fa-stack-1x"></i>
                                </span>
                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                </span>

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-project-diagram fa-stack-1x "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">

                    <div class="feature-items-album-img3  position-relative pink-block   ">

                        <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                        <div class="pink-circle  position-absolute position-relative">
                            <div class="circle-p position-absolute pt-2 ps-3">
                                <p> 20% <br>OFF</p>
                            </div>
                        </div>

                        <img src="{{asset('enduser/imgs/featured/feature8.jpg')}}" class="bd-placeholder-img card-img-top" alt="albumimg1">
                        <div class="card-body">
                            <div class="ficons justify-content-center align-items-center mb-2">
                                <span style="color:#4b4b4b;">
                                    <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                </span>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                            </div>
                            <div class="items-icons">

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-heart fa-stack-1x"></i>
                                </span>
                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                </span>

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-project-diagram fa-stack-1x "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">

                    <div class="feature-items-album-img2  position-relative     ">

                        <p class="img-text  position-absolute ps-2 top-0 end-0"> $150.00 </p>

                        <img src="{{asset('enduser/imgs/trending/trending2c.jpg')}}" class="bd-placeholder-img card-img-top" alt="albumimg1">
                        <div class="card-body">
                            <div class="ficons justify-content-center align-items-center mb-2">
                                <span style="color:#4b4b4b;">
                                    <h2 class="items-album-img1-title1"> Susupendisse et</h2>
                                </span>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:fuchsia;"></i>
                                <i class="fa fa-star" style="color:rgb(219, 215, 219);"></i>

                            </div>
                            <div class="items-icons">

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-heart fa-stack-1x"></i>
                                </span>
                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-shopping-cart fa-stack-1x "></i>
                                </span>

                                <span class="fa-stack small" style="vertical-align: top; opacity:0.2">
                                    <i class="far fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-project-diagram fa-stack-1x "></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <button name="loadmore-btn" class="loadmoreless">LOADMORE</button>

    <!-- <script>
        let LoadMoreLessButton = document.querySelector('.loadmoreless');

        let morePhotos = document.querySelectorAll('.more');


        LoadMoreLessButton.addEventListener("click", (e) => {
            for (let i = 0; i < morePhotos.length; i++) {
                morePhotos[i].style.display = "block";
            }


            if (LoadMoreLessButton.innerText === "LOADMORE") {
                LoadMoreLessButton.innerText = "LOADLESS";
            }

            else {
                LoadMoreLessButton.innerText = "LOADMORE";

                for (let i = 0; i < morePhotos.length; i++) {
                    morePhotos[i].style.display = "none"; 


                }
            }

        })

    </script>  -->

    <!-- End load more button -->


    <!-- Start CEO Section -->


    <div class="ceo mt-5  position-relative">

        <div class="overlay">


            <div class="container content-txt position-absolute  text-align: center  ">


                <div class="qoute-icon  ">
                    <i class="fas  fa-quote-left" style="color:fuchsia; font-size: 30px; font-weight: bold;"></i>
                </div>

                <p class="mb-5">
                    Lorem ipsum, dolor sit adipisicing Lorem Temporibus repudiandae quasi molestias dolorum <br>
                    error provident corpori quod .veritatis sit molestiae" <br>

                </p>



                <img src="{{asset('enduser/imgs/ceopic1.jpg')}}" style=" width: 120px;  height: 120px;   " class="ceopic mb-2  mt-5 start-0"
                    alt="ceo pic">

                <p>
                    MDSHAHIN ALLAM <br>
                    CEO OF TCCM
                </p>


            </div>




        </div>
        <img src="{{asset('enduser/imgs/ceo2c.jpg')}}" alt="ceo back ground pic" style="width:100%; height:600px; " class="bg-pic  mb-5">
    </div>

    <!--End CEO Section -->

    <!-- Start Latest Blog section  -->

    <div class="container latest-blog mt-5   mb-2">
        <h3><span style=" font-size:30px; color:#4b4b4b;">Latest Blogs</span></h3>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4 blogs-cards  mb-5">
            <div class="col">
                <div class="blog-img1">
                    <img src="{{asset('enduser/imgs/latest/latest1c.jpg')}}" class="card-img-top" alt="blog-imag1">
                    <div class="card-body">
                        <h5 class="card-title">SOME HEADLINES HERE</h5>
                        <p class="blog-para"> Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolores illum
                            corporis vitae nam necessitatibusadipisicing elit.
                            Dolores illum corporis vitae <span id="dots1">...</span><span id="more1">nam
                                necessitatibusDolores illum corporis vitae nam necessitatibusadipisicing elit.
                                praesentium sapiente facilis porro omnis, accusantium recusandae! Ex,Dolores illum
                                corporis vitae nam necessitatibusadipisicing elit.
                                quam voluptates itaque neque id earum corporis debitis? </span></p>
                        <button class="btn btn-blog btn-outline" onclick="myFunction1()" id="myBtn1"> Read More</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="blog-img1">
                    <img src="{{asset('enduser/imgs/latest/latest3c.jpg')}}" class="card-img-top" alt="blog-imag2">
                    <div class="card-body">
                        <h5 class="card-title">SOME HEADLINES HERE</h5>
                        <p class="blog-para"> Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolores illum
                            corporis vitae nam necessitatibusadipisicing elit.
                            Dolores illum corporis vitae <span id="dots2">...</span><span id="more2">nam
                                necessitatibusDolores illum corporis vitae nam necessitatibusadipisicing elit.
                                praesentium sapiente facilis porro omnis, accusantium recusandae! Ex,Dolores illum
                                corporis vitae nam necessitatibusadipisicing elit.
                                quam voluptates itaque neque id earum corporis debitis? </span></p>
                        <button class="btn btn-blog btn-outline" onclick="myFunction2()" id="myBtn2"> Read More</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="blog-img1">
                    <img src="{{asset('enduser/imgs/latest/latest4c.jpg')}}" class="card-img-top" alt="blog-imag3">
                    <div class="card-body">
                        <h5 class="card-title">SOME HEADLINES HERE</h5>
                        <p class="blog-para"> Lorem ipsum dolor sit amet consectetur adipisicing elit.Dolores illum
                            corporis vitae nam necessitatibusadipisicing elit.
                            Dolores illum corporis vitae <span id="dots3">...</span><span id="more3">nam
                                necessitatibusDolores illum corporis vitae nam necessitatibusadipisicing elit.
                                praesentium sapiente facilis porro omnis, accusantium recusandae! Ex,Dolores illum
                                corporis vitae nam necessitatibusadipisicing elit.
                                quam voluptates itaque neque id earum corporis debitis? </span></p>
                        <button class="btn btn-blog btn-outline" onclick="myFunction3()" id="myBtn3"> Read More</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- End Latest Blog section    -->

    <!-- Start shop by brand section  -->

    <div class="container shop-brand mt-5   mb-5">
        <h3><span style=" font-size:30px; color:#4b4b4b;">Shop By Brand</span></h3>


        <div class="container shop mb-5 mt-4">

            <div class=" container row ">

                <div class="col brand">
                    <i class='fab fa-r-project '></i>
                    themeforest

                </div>

                <div class="col brand">
                    <i class='fab fa-r-project '></i>
                    themeforest

                </div>



                <div class="col brand">
                    <i class='fab fa-r-project '></i>
                    themeforest
                </div>


                <div class="col brand">

                    <i class='fab fa-r-project '></i>
                    themeforest
                </div>



            </div>


        </div>
    </div>

        <!-- End shop by brand section  -->


        <!--Start Footer Section -->

        <div class="my-5">
            <!-- Footer -->
            <footer class="text-center text-lg-start text-white" style="background-color:rgba(45, 52, 54,1.0);">
                <!-- Grid container -->
                <div class="p-4 pb-0">
                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row mb-5">
                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">SHOPS</h6>
                                <div class="shops-elements" style="font-size: 13px; color: rgba(247, 241, 227,1.0);">
                                    <p>New In</p>
                                
                                    <p>Women</p>
                                    <p>Men</p>
                                    <p>Schuhe shoes</p>
                                    <p>Bags&Accessories</p>
                                    <p>Top Brands</p>
                                    <p>Sale & Special offers</p>
                                    <p>Lookbook</p>
                                </div>
                            </div>
                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                               
                                    <h6 class="text-uppercase mb-4 font-weight-bold">INFORMATION</h6>
                                    <div class="shops-elements" style="font-size: 13px; color: rgba(247, 241, 227,1.0);">
                                        <p>About Us</p>
                                    
                                        <p>Customer Services</p>
                                        <p>New Collection</p>
                                        <p>Best Sellers</p>
                                        <p>Manufacturers</p>
                                        <p>Privacy Policy</p>
                                        <p>Terms & Conditions</p>
                                        <p>Blog</p>
                                    </div>
                            </div>
                            <!-- Grid column -->

                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                                <h6 class="text-uppercase mb-4 font-weight-bold">CUSTUMER SERVICE</h6>
                                <div class="shops-elements" style="font-size: 13px; color: rgba(247, 241, 227,1.0);">
                                    <p>Search Terms</p>
                                
                                    <p>Advanced Search</p>
                                    <p>Orders and Returns</p>
                                    <p>Contact Us</p>
                                    <p>RSS</p>
                                    <p>Help & FAQs</p>
                                    <p>Consultant</p>
                                    <p>Store Locations</p>
                                </div>
                            </div>

                            <!-- Grid column -->
                            <hr class="w-100 clearfix d-md-none" />

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 newsletter">
                                <h6 class="text-uppercase mb-4 font-weight-bold">NEWSLETTERS</h6>
                                <p  style="font-size: 13px; color: rgba(247, 241, 227,1.0);"> Sign up for News Letter</p>

                                <input type="text" class="email-label mb-4"  placeholder="Type Your Email">
                                <button type="button" class=" d-flex   btn-subs mb-3" disabled>SUBSCRIBE</button>

                                <div class="news-icons">
                                    <i class="fab fa-facebook-square" style="font-size: 25px; color:grey; border-radius: 7px;"></i>

                                    <i class="fab fa-twitter-square" style="font-size: 25px; color: grey; border-radius: 7px;"></i>

                                    <i class="fab fa-behance-square" style="font-size: 25px; color: grey; border-radius: 7px;"></i>
                                    <i class="fab fa-tumblr-square" style="font-size: 25px; color:grey; border-radius: 7px;"></i>
                                    <i class="fab fa-vimeo-square" style="font-size: 25px; color: grey; border-radius: 7px;"></i>

                                    <img srcset="https://img.icons8.com/windows/344/youtube.png 15x"  
                                    class="fa-square mb-2" style="border:1px solid grey; background-color: grey; border-radius: 3px;"alt="icon" loading="lazy">
                                  

                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                    </section>
                </div>
                
                        <!--Grid row-->
                        <nav class="navbar navbar footer-line bg-dark">
                            <div class="container">
                              <span class="navbar-text1">
                                2014 ELLA Fashion Store Spotift . All Rights Reseverd . Ecommerce Software By Spotify.  <!-- <p style="font-size: 10px; padding: 35px; color:rgb(255, 246, 225); ">2014 ELLA Fashion Store Spotift . All Rights Reseverd . Ecommerce Software By Spotify. <p> -->
                              </span>
                              <span class="navbar-text2 me-5">
                            <span style="  font-size: 18px; color:rgb(236, 236, 236); font-weight: bold; padding-right:20px;  font-family: ArialBlack;">VISA </span>
                            <span style="  font-size: 18px; color:rgb(236, 236, 236); font-weight: bold; padding-right:10px;font-style: italic;font-family: ArialBlack;">Master Card </span>
                            <span style="  font-size: 18px; color:rgb(236, 236, 236); font-weight: bold;padding-right:5px;font-style: italic; font-family: ArialBlack;">PayPal</span>
                              </span>
                            </div>
                          </nav>


















                    
<!-- <div class="row">
<div class="col-lg-6">
   
<p style="font-size: 10px; padding: 35px; color:rgb(255, 246, 225); ">2014 ELLA Fashion Store Spotift . All Rights Reseverd . Ecommerce Software By Spotify. <p>

</div>


<div class="col-lg-6">
<div class="row">
<div class="col-lg-4">
    Visa
</div>

<div class="col-lg-4">
    master
</div>

<div class="col-lg-4">

    paypal
</div>








</div>
</div>


</div>








                   </div>
                </div> -->
                <!-- Grid container -->
            </footer>
            <!-- Footer -->
        </div>
        <!-- End of .container -->


































        <!--End Footer Section-->

























        <!-- Optional JavaScript; choose one of the two! -->
        <script src="{{URL::asset('enduser/js/main.js')}}"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>