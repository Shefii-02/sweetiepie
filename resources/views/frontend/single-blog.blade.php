@extends('layouts.frontend')
@section('contents')
    
<section class="product-listing-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Blog Details</h1>
            </div>
        </div>
    </div>
</section>


<main class="pt-5 pb-5">
    <section class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9">
                    <div class="row">
                        <div class="col-12  ">
                            <div class="blog-head">
                                <h2>Nanaimo Bar</h2>
                                <h5>06 DEC 2023</h5>
                            </div>
                            <div class="blog-card ">

                                <div class="blog-img">
                                    <img src="assets/images/blog.jpeg" alt="">
                                </div>
                                <div class="blog-content">

                                    <p>
                                        Named after the city it was invented in (Nanaimo, British
                                        Columbia on the west coast of Canada), this no-bake dessert has been hailed as
                                        Canada’s most iconic treat. A layer of chocolate ganache sits atop of a layer of
                                        thick yellow custard that sits atop of a chocolate-graham-coconut layer creating
                                        a triple-threat dessert bar. The earliest published recipe is said to date back
                                        to 1953, but if you ask around town, locals will tell you stories of their
                                        grandmothers making them long before. The treat has transformed over the years
                                        to include a variety of flavors (mint, red velvet, peanut butter, mocha) and
                                        forms (ice cream, martinis, cupcakes, lattes, even spring rolls). You can even
                                        walk the Nanaimo Bar Trail for the ultimate sugar rush, which includes 39 stops
                                        to taste classics, modern takes and drinks, and even marvel at inedible tributes
                                        to the classic dessert. </p>

                                </div>
                            </div>
                        </div>

                    </div>



                </div>

                <div class="col-12 col-md-12 col-lg-3">
                    <div class="for-sticky">
                        <div class="recent">
                            <div class="row ">
                                <div class="col-12">
                                    <h2>Upcoming Blog</h2>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/images/blog.jpeg" alt="">
                                                <div class="recent-content">
                                                    <h5>Nanaimo Bar</h5>
                                                    <p>DEC 06 2022</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <img src="assets/images/blog.jpeg" alt="">
                                                <div class="recent-content">
                                                    <h5>Nanaimo Bar</h5>
                                                    <p>DEC 06 2022</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="re-category mt-3">
                            <div class="row ">
                                <div class="col-12">
                                    <h2>Related Blog</h2>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="assets/images/blog.jpeg" alt="">
                                                <div class="recent-content">
                                                    <h5>Nanaimo Bar</h5>
                                                    <p>DEC 06 2022</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <img src="assets/images/blog.jpeg" alt="">
                                                <div class="recent-content">
                                                    <h5>Nanaimo Bar</h5>
                                                    <p>DEC 06 2022</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>

</main>

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