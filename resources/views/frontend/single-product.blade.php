@extends('layouts.frontend')
@section('contents')
    
    <section class="product-listing-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Product</h1>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="card-wrapper">
            <div class="detail-card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                            <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                            <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                            <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="assets/images/Cookie_Detail.webp" alt="cookie image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="product-content">
                    <h2 class="product-title">Cookie</h2>
                    <h5>Only 29 remaining</h5>

                    <div class="product-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                        <span>4.7(21)</span>
                    </div>

                    <div class="product-price">
                        <p class="last-price">Old Price: <span>$257.00</span></p>
                        <p class="new-price">New Price: <span>$249.00 (5%)</span></p>
                    </div>

                    <div class="product-detail">
                        <h2>about this item: </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga
                            tenetur
                            placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius.
                            Dignissimos, labore suscipit. Unde.</p>
                        <p>Ingredient</p>
                        <p>Loaded with plump, juicy, fresh, local BC blueberries all held in our Double Butter Crust; a
                            perfect dessert to serve up warm with vanilla ice cream!</p>
                    </div>

                    <div class="product-sizes">
                        <h5>Select Sizes</h5>
                        <ul>
                            <li><input type="radio" name="test" id="cb1" />
                                <label for="cb1"><img src="assets/images/9.png" />
                                    <p style="margin: 0; text-align: center;">" 9 "</p>
                                </label>
                            </li>
                            <li><input type="radio" name="test" id="cb2" />
                                <label for="cb2"><img src="assets/images/9.png" />
                                    <p style="margin: 0; text-align: center;">" 5 "</p>
                                </label>
                            </li>
                            <li><input type="radio" name="test" id="cb3" />
                                <label for="cb3"><img src="assets/images/soldout.png" />
                                    <p style="margin: 0; text-align: center;">" 3 " (9pack)</p>
                                </label>
                            </li>
                            <li><input type="radio" name="test" id="cb4" />
                                <label for="cb4"><img src="assets/images/soldout.png" />
                                    <p style="margin: 0; text-align: center;">(slice)</p>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="product-sizes">
                        <h5>Select an Option

                        </h5>
                        <ul>
                            <li><input type="radio" name="test" id="cb5" />
                                <label for="cb5"><img src="assets/images/baked.webp" />
                                    <p style="margin: 0; text-align: center;">Baked
                                    </p>
                                </label>
                            </li>
                            <li><input type="radio" name="test" id="cb6" />
                                <label for="cb6"><img src="assets/images/baked.webp" />
                                    <p style="margin: 0; text-align: center;">Frozen</p>
                                </label>
                            </li>

                        </ul>
                    </div>

                    <div class="product-sizes">
                        <h5>Select an Option

                        </h5>
                        <ul>
                            <li><input type="radio" name="test" id="cb7" />
                                <label for="cb7"><img src="assets/images/baked.webp" />
                                    <p style="margin: 0; text-align: center;">Baked
                                    </p>
                                </label>
                            </li>
                            <li><input type="radio" name="test" id="cb8" />
                                <label for="cb8"><img src="assets/images/baked.webp" />
                                    <p style="margin: 0; text-align: center;">Frozen</p>
                                </label>
                            </li>

                        </ul>
                    </div>



                    <div class="purchase-info">
                        <!-- <input type="number" min="0" value="1"> -->
                        <button type="button" class="btn">
                            Add to Cart <i class="bi bi-cart"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <section class="related-products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Related Product</h1>

                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="assets/images/xpteTStV018ZgMl2pbaRO8QdxCARRX.jpg" alt="">
                        <h4>Hot Cross Pie</h4>
                        <h4 class="vegan">5 INCH (VEGAN)</h4>
                        <h4 class="price"> $9.99</h4>
                        <div class="order-btn">
                            <a href="#">Order Now</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="assets/images/xpteTStV018ZgMl2pbaRO8QdxCARRX.jpg" alt="">
                        <h4>Hot Cross Pie</h4>
                        <h4 class="vegan">5 INCH (VEGAN)</h4>
                        <h4 class="price"> $9.99</h4>
                        <div class="order-btn">
                            <a href="#">Order Now</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="assets/images/xpteTStV018ZgMl2pbaRO8QdxCARRX.jpg" alt="">
                        <h4>Hot Cross Pie</h4>
                        <h4 class="vegan">5 INCH (VEGAN)</h4>
                        <h4 class="price"> $9.99</h4>
                        <div class="order-btn">
                            <a href="#">Order Now</a>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="product-card">
                        <img src="assets/images/xpteTStV018ZgMl2pbaRO8QdxCARRX.jpg" alt="">
                        <h4>Hot Cross Pie</h4>
                        <h4 class="vegan">5 INCH (VEGAN)</h4>
                        <h4 class="price"> $9.99</h4>
                        <div class="order-btn">
                            <a href="#">Order Now</a>
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

    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
@endsection


