<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="@yield('keywords')">
  <meta name="description" content="@yield('description')">
  <meta name="token" content="{{csrf_token()}}">
  <title>@yield('title') My SweetiePie</title>
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/Fav/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/Fav/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/Fav/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('assets/images/Fav/site.webmanifest') }}">
  <link rel="mask-icon" href="{{ asset('assets/images/Fav/safari-pinned-tab.svg') }}" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
</head>
<body>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-12 header-first-col shadow-sm">
          <ul class="first-ul">
            <div class="first-li-div">
              <li>
                <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                  aria-controls="offcanvasExample">
                  <i class="bi bi-filter-left"></i>
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                  aria-labelledby="offcanvasExampleLabel">
                  <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                      aria-label="Close"></button>
                    <a href="#" style="text-decoration: none; color: var(--white);" class="offcanvas-title"
                      id="offcanvasExampleLabel">
                      Sign In
                    </a>
                  </div>

                  <div class="offcanvas-body">

                    {!!getMenu('main-menu',['id'=>'header-wr'])!!} 
                    {{-- <ul>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          OUR PIES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="category">SWEETIEPIES</a></li>
                          <li><a class="dropdown-item" href="category">SAVORY PIES</a></li>


                        </ul>
                      </li>

                      <li>
                        <a href="category">COOKIES</a>
                      </li>
                      <li>
                        <a href="menu">MENU</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-bs-toggle="dropdown" aria-expanded="false">
                          SWEET TREATS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="site">BAKED SPECIALITY ITEMS</a></li>
                          <li><a class="dropdown-item" href="site">ICE CREAM</a></li>
                          <li><a class="dropdown-item" href="site">MILK SHAKES</a></li>
                          <li><a class="dropdown-item" href="site">DRINKS</a></li>
                          <li><a class="dropdown-item" href="site">SEASONAL</a></li>
                          <li><a class="dropdown-item" href="site">COOKIES</a></li>


                        </ul>
                      </li>
                      <li>
                        <a href="wholesale">WHOLESALE</a>
                      </li>
                    </ul> --}}

                    <div class="social-links">
                      <ul>
                        <li>
                          <a href="#"> <i class="bi bi-instagram"></i> </a>
                        </li>
                        <li>
                          <a href="#"> <i class="bi bi-twitter"></i> </a>
                        </li>
                        <li>
                          <a href="#"> <i class="bi bi-youtube"></i> </a>
                        </li>
                        <li>
                          <a href="#"> <i class="bi bi-facebook"></i> </a>
                        </li>
                      </ul>
                    </div>
                    <div class="mb-20 sm:mb:0">
                      <ul class="_secondary">
                        <li><a class=" rounded-xl" href="blogs" target="self" rel="">Our Blogs</a></li>
                        <li><a class=" rounded-xl" href="media" target="self" rel="">Media</a></li>
                        <li><a class=" rounded-xl" href="page" target="self" rel="">Privacy policy</a></li>
                        <li><a class=" rounded-xl" href="faq" target="self" rel="">Support and FAQ</a></li>
                        <li><a class=" rounded-xl" href="page" target="self" rel="">Shipping Policy</a></li>
                        <li><a class=" rounded-xl" href="page" target="self" rel="">Delivery Policy</a></li>
                        <li><a class=" rounded-xl" href="site" target="self" rel="">Wedding</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="index"><img src="assets/images/logo.png" alt="logo" /></a>
              </li>
            </div>
            <div class="second-li-div">
              <li>
                <a href="#"><i class="bi bi-geo-alt"></i> FIND A SWEETIEPIE</a>
              </li>
              <li>
                <a href="category">ORDER NOW</a>
              </li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </header>

  @yield('contents')

  <footer>
    <div class="container">
        <div class="row main">
            <div class="col-6 col-md-2">
                <div class="f-h">
                    <p>About</p>
                </div>
                <ul>
                    <li>
                        <a href="#">Our Story</a>
                    </li>
                    <li>
                        <a href="#">In The News</a>
                    </li>
                    <li>
                        <a href="#">Partners</a>
                    </li>
                    <li>
                        <a href="#">Careers</a>
                    </li>
                </ul>

            </div>
            <div class="col-6 col-md-2">
                <div class="f-h">
                    <p>Support</p>
                </div>
                <ul>
                    <li>
                        <a href="#">How to Order</a>
                    </li>
                    <li>
                        <a href="#">Delivery</a>
                    </li>
                    <li>
                        <a href="#">Fundrising</a>
                    </li>
                    <li>
                        <a href="#">Charity Donation</a>
                    </li>
                    <li>
                        <a href="#">Find Retailer</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>

            </div>

            <div class="col-12 col-md-2">
                <div class="f-h">
                    <p>Store</p>
                </div>
                <div class="f-a">
                    <ul>
                        <li>Head Office <div class="li-hover">
                                36 Colville Rd, North York | ON, M6M 2Y4 | +1 647-245-3301 | +1 416-675-9436
                            </div>
                        </li>

                        <li>Queen Street <div class="li-hover">
                                654 Queen Street West, Toronto | ON, M6J 1E5 | +1 647-245-3301 ext. 272
                            </div>
                        </li>

                        <li>Harbord <div class="li-hover">
                                326 Harbord St, Toronto | ON, M6G 1H1 | +1 647-245-3301 ext. 222
                            </div>
                        </li>

                        <li>Unionville <div class="li-hover">
                                190 Main St Unionville, Markham | ON, L3R 2G9 | +1 647-245-3301 ext. 226
                            </div>
                        </li>

                        <li> Danforth <div class="li-hover">
                                563 Danforth Ave, Toronto | ON M4K 1P9 | +1 647-245-3301 ext. 273
                            </div>
                        </li>

                        <li>Distillery <div class="li-hover">
                                6 Case Goods Lane, Toronto | ON M5A 3C4 | +1 647-245-3301 ext. 274
                            </div>
                        </li>

                        <li>Leaside <div class="li-hover">
                                1639 B Bayview Ave East York, Toronto | ON M4G 3B5 | +1 647-245-3301 ext. 275
                            </div>
                        </li>

                        <li>Yonge st <div class="li-hover">
                                3308 Yonge st, Toronto | ON M4N 2M4 | +1 647-245-3301 ext. 276
                            </div>
                        </li>

                        <li>First Canadian Place <div class="li-hover">
                                100 King Street West, Toronto | ON M5X 1A9 | +1 647-245-3301
                            </div>
                        </li>

                    </ul>
                </div>

            </div>



            <div class="col-6 col-md-2">
                <div class="f-h">
                    <p>Contact</p>
                </div>
                <ul>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#">Shipping</a>
                    </li>
                    <li>
                        <a href="#">Refund</a>
                    </li>

                </ul>

            </div>



            <div class="col-6 col-md-2">
                <div class="logo">
                    <img src="assets/images/logo-icon.png" alt="">
                </div>
                <div class="social-link">
                    <li>
                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                </div>

            </div>
        </div>
    </div>


</footer>

<section class="f-bottom" style="background: #000;">
    <div class="container-fluid" style="border-top: 1px solid rgba(255,255,255,.1)">
        <div class="row">
            <div class="col-12">
                <p>&COPY;<?php echo date("Y"); ?> MySweetiepie.ca. All rights are reserved.</p>
            </div>
        </div>

    </div>
</section>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(".order-btn").on('click', function () {
        $(".custom-model-main").addClass('model-open');
    });
    $(".close-btn, .bg-overlay").click(function () {
        $(".custom-model-main").removeClass('model-open');
    });



    $('.form-btn').on('click', function () {
        $(".form-model-main").addClass('form-open');
    });
    $('.form-close, .bg-form').click(function () {
        $('.form-model-main').removeClass('form-open')
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>