@extends('layouts.frontend')
@section('contents')
    
<section class="product-listing-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Blog & Media</h1>
            </div>
        </div>
    </div>
</section>

<main style="padding: 60px 0;">
    <section class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9">
                    <div class="row">
                        <div class="col-12 col-md-6 ">
                            <div class="blog-card shadow">
                                <div class="blog-img">
                                    <img src="assets/images/blog.jpeg" alt="">
                                </div>
                                <div class="blog-content">
                                    <h2>Nanaimo Bar</h2>
                                    <h5>06 DEC 2023</h5>
                                    <p>
                                        Named after the city it was invented in (Nanaimo, British Columbia on the west
                                        coast of Canada), this no-bake dessert has been hailed as Canada’s most iconic
                                        treat. A layer of chocolate ganache sits atop of a layer of thick yellow custard
                                        that sits atop of a </p>
                                    <a href="#">Read more <span><i class="bi bi-arrow-right-circle"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-12 col-md-6">
                            <div class="blog-card shadow">
                                <div class="blog-img">
                                    <img src="assets/images/blog.jpeg" alt="">
                                </div>
                                <div class="blog-content ">
                                    <h2>Nanaimo Bar</h2>
                                    <h5>06 DEC 2023</h5>
                                    <p>
                                        Named after the city it was invented in (Nanaimo, British Columbia on the west
                                        coast of Canada), this no-bake dessert has been hailed as Canada’s most iconic
                                        treat. A layer of chocolate ganache sits atop of a layer of thick yellow custard
                                        that sits atop of a </p>
                                    <a href="#">Read more <span><i class="bi bi-arrow-right-circle"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <!--  -->
                        <div class="col-12 col-md-6">
                            <div class="blog-card shadow">
                                <div class="blog-img">
                                    <img src="assets/images/blog.jpeg" alt="">
                                </div>
                                <div class="blog-content">
                                    <h2>Nanaimo Bar</h2>
                                    <h5>06 DEC 2023</h5>
                                    <p>
                                        Named after the city it was invented in (Nanaimo, British Columbia on the west
                                        coast of Canada), this no-bake dessert has been hailed as Canada’s most iconic
                                        treat. A layer of chocolate ganache sits atop of a layer of thick yellow custard
                                        that sits atop of a </p>
                                    <a href="#">Read more <span><i class="bi bi-arrow-right-circle"></i></span></a>
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
                                    <h2>Recent Post</h2>
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
                                    <h2>Category</h2>
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