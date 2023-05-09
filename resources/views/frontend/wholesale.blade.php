@extends('layouts.frontend')
@section('contents')
    
<section class="product-listing-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Wholesale</h1>
            </div>
        </div>
    </div>
</section>

<main class="pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="wholesle-under">


                    <div class="wholesale-form">
                        <h3>Wholesale Form</h3>
                    </div>
                    <form class="wholesale-form" action="#">
                        <div class="w-name">
                            <input type="text" name="name" id="name" placeholder="First name" required>
                            <input type="text" name="s-name" id="s-name" placeholder="Last name" required>
                        </div>
                        <div class="w-contact">
                            <input type="number" name="number" id="number" placeholder="Contact No" required>
                            <input type="email" name="email" id="email" placeholder="Mail" required>
                        </div>
                        <div class="w-website">
                            <input type="text" name="" id="" placeholder="Company Name" required>
                            <input type="text" name="" id="" placeholder="Website" required>
                        </div>
                        <div class="w-interest">
                            <p for="#">Product interested in</p>

                            <!-- check boxes -->
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Sweetie Pies</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Savory Pies</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Cookies</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                <label class="form-check-label" for="inlineCheckbox4">Baked Specialty Items</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                                <label class="form-check-label" for="inlineCheckbox5">Crazy Good Cake </label>
                            </div>

                            <div class="w-tell">
                                <textarea name="" id="" placeholder="Tell us about your business"></textarea>
                            </div>

                            <button type="submit">Submit <i class="bi bi-arrow-right-circle"></i></button>



                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="our-locations">
                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Head Office</h4>
                        </div>
                       <ul>
                        <li> 36 Colville Rd, North York
                            ON, M6M 2Y4
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i> +1 647-245-3301
                           </a></li>
                           <li><a href="tel: +1 416-675-9436"> <i class="bi bi-telephone-plus"></i> +1 416-675-9436</a></li>
                       </ul>
                    </div>

                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Queen Street</h4>
                        </div>
                       <ul>
                        <li> 654 Queen Street West, Toronto
                            ON, M6J 1E5
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i>  +1 647-245-3301 ext. 272
                           </a></li>
                           
                       </ul>
                    </div>

                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Harbord Street</h4>
                        </div>
                       <ul>
                        <li> 326 Harbord St, Toronto
                            ON, M6G 1H1
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i>  +1 647-245-3301 ext. 222
                           </a></li>
                           
                       </ul>
                    </div>
                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Unionville</h4>
                        </div>
                       <ul>
                        <li> 190 Main St Unionville, Markham
                            ON, L3R 2G9
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i>   +1 647-245-3301 ext. 226
                           </a></li>
                           
                       </ul>
                    </div>
                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Danforth</h4>
                        </div>
                       <ul>
                        <li> 563 Danforth Ave, Toronto
                            ON M4K 1P9
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i>   +1 647-245-3301 ext. 273
                           </a></li>
                           
                       </ul>
                    </div>
                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Distillery</h4>
                        </div>
                       <ul>
                        <li> 6 Case Goods Lane, Toronto
                            ON M5A 3C4
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i>  +1 647-245-3301 ext. 274
                           </a></li>
                           
                       </ul>
                    </div>
                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Leaside</h4>
                        </div>
                       <ul>
                        <li> 1639 B Bayview Ave East York, Toronto
                            ON M4G 3B5
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i>   +1 647-245-3301 ext. 275
                           </a></li>
                           
                       </ul>
                    </div>
                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>Yonge St</h4>
                        </div>
                       <ul>
                        <li> 3308 Yonge st, Toronto
                            ON M4N 2M4
                           </li>
                           <li><a href="tel:+1 647-245-3301"> <i class="bi bi-telephone-plus"></i>  +1 647-245-3301 ext. 276
                           </a></li>
                           
                       </ul>
                    </div>
                    <div class="head-office">
                        <div class="h-o-h">
                            <h4>First Canadian Place</h4>
                        </div>
                       <ul>
                        <li> 100 King Street West, Toronto
                            ON M5X 1A9
                           </li>
                           <li><a href="tel: +1 647-245-3301"> <i class="bi bi-telephone-plus"></i>   +1 647-245-3301
                           </a></li>
                           
                       </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>

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