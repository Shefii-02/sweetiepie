@extends('layouts.frontend')
@section('contents')
    
<section class="landing-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                <h1>
                    Baked Special Items
                </h1>
                <p>Baked Special Items</p>

            </div>
        </div>
    </div>
</section>

<section class="landing-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="landing-content">
                    <h2>Baked Speciality Item </h2>
                    <p>Baked Speciality Item</p>
                    <div class="connect">
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="assets/images/image-1.png" alt="">
            </div>
        </div>
    </div>
</section>


<section class="landing-simple-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1> Baked Speciality Items </h1>
                <a href="#">Shop Now</a>
            </div>
        </div>
    </div>
</section>

<section class="landing-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="assets/images/image-1.png" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="landing-content">
                    <h2>Baked Speciality Item </h2>
                    <p>Baked Speciality Item</p>
                    <div class="connect">
                        <a href="#">Shop Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="landing-gallery">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1>
                    Gallery
                </h1>

            </div>
            <div class="col-12 col-md-8">

                <div class="slick-gallery">
                    <div>
                        <img src="assets/images/gallery-1.png" alt="">
                    </div>
                    <div>
                        <img src="assets/images/gallery-2.png" alt="">
                    </div>
                    <div>
                        <img src="assets/images/gallery-3.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>




<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Sign Up for News & Updates</h3>
                <div class="subscribe-under col-12 col-md-8 col-lg-6">
                    <input type="text" required placeholder="E-mail">
                    <button>Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection