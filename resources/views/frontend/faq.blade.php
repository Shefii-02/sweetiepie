@extends('layouts.frontend')
@section('contents')
    
<section class="product-listing-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>FAQ</h1>
            </div>
        </div>
    </div>
</section>



<main class="pb-5 pt-5">
    <section class="faq-section">
        <div class="container">
            <div class="fix-wrap">
                <div class="faq-accordions">
                    <h2>General</h2>
                    <div class="accordion-row">
                        <div class="title">What Happens After I Place An Order?</div>
                        <div class="content">

                            After placing an order online you will be directed to a confirmation page that will provide
                            you with the invoice number pertaining to your order. This invoice number will also be sent
                            to you via e-mail to the address you provided. Keep this number for your records and
                            reference it in the event that you have any questions or concerns regarding your order. If
                            you do not see a confirmation page after placing your order it means your order placement
                            was unsuccessful and your credit card was not charged.

                        </div>
                    </div>
                    <div class="accordion-row">
                        <div class="title">Can I Include A Message With My Order For The Recipient?</div>
                        <div class="content">

                            Yes, and itâ€™s free! When placing an order you will be given the option to include a card
                            message with your gift and will be asked for the message during the checkout process. If you
                            do not wish to include a card message simply select the "No Message Required" option.
                            Messages can contain up to 255 characters to ensure they fit neatly on our complimentary
                            message cards. <br>
                            We respect the privacy of our customers and will only ever disclose the contents of a card
                            message to the recipient or customer, never to anybody else. If you leave the card blank and
                            your intended recipient contacts us to inquire about the sender, you can be assured that we
                            will not disclose your personal details without your permission. As per our privacy policy,
                            we will contact you first before we release any information about you to the recipient,
                            including your name.

                        </div>
                    </div>

                    <h2>Substitutions</h2>
                    <div class="accordion-row">
                        <div class="title">What If I Am Not Happy With The Substitutions Made?</div>
                        <div class="content">
                            We want our all customers to have a positive experience with us and will work with you to
                            ensure satisfaction. If you are not satisfied with the substitutions applied to your order
                            we encourage you to get in touch with us within 24 hours of delivery and provide images so
                            we can better asses discrepancies and determine course of action.

                        </div>
                    </div>
                    <div class="accordion-row">
                        <div class="title">Will I Be Informed Of Substitutions?</div>
                        <div class="content">

                            Our open substitution policy allows us to approve minor substitutions without notifying the
                            customer. If the substitutions in question will drastically change the look an an
                            arrangement then we will typically notify you unless we are not informed by the filling
                            florist.

                        </div>
                    </div>

                    <h2>Discounts</h2>
                    <div class="accordion-row">
                        <div class="title">Do You Accept Promotion And Discount Coupons?</div>
                        <div class="content">

                            Yes. To use a promotion or discount coupon simply enter it into the "APPLY COUPON" box upon
                            checkout and your discount will apply. Please note that promotion coupons are case sensitive
                            so be sure to enter your code exactly how you see it.


                        </div>
                    </div>

                    <div class="accordion-row">
                        <div class="title">I've Placed An Order And Forgot To Apply My Discount Code, What Can I Do?
                        </div>
                        <div class="content">

                            If your order has already been delivered, we unfortunately cannot apply a discount to your
                            order. We can, however, ensure remains active for a future order. If your order has not been
                            delivered, you will have to cancel your order and place a new one with your desired coupon
                            code.


                        </div>
                    </div>

                    <!--  -->
                    <div class="accordion-row">
                        <div class="title">Can More Than One Discount Be Applied To My Order?</div>
                        <div class="content">


                            No, discounts cannot be combined. If you have two discount codes you can only apply one to
                            your order. Please note that store credits count as discount codes so you cannot use a store
                            credit and discount code for the same order.



                        </div>
                    </div>
                    <!--  -->
                    <h2>Returns</h2>
                    <div class="accordion-row">
                        <div class="title">I Am Not Satisfied With My Order And Would Like A Refund, What Is Your Return
                            Policy?</div>
                        <div class="content">


                            Due to the perishable nature of our products we require a 24 notice from delivery date for
                            quality complaints. If you are unsatisfied with the quality of your order we ask that you
                            send us pictures so we can better determine course of action. If we receive your complaint
                            and pictures within 24 hours of delivery you may be eligible for a full refund. If you are
                            unable to send us pictures or file a complaint after 24 hours of delivery, you may be
                            eligible for store credit for the full value of your purchase OR we can send a replacement
                            bouquet. All complaints are addressed on a case by case basis so how your complaint is
                            resolved depends on the time we receive it and the nature of your concerns.


                        </div>
                    </div>
                    <!--  -->


                </div>
            </div>
        </div>
    </section>




    <script>
        let items = document.querySelectorAll(".faq-section .faq-accordions .title");
        items.forEach(function (t) {
            t.addEventListener("click", function (e) {
                items.forEach(function (e) {
                    e !== t || e.classList.contains("open")
                        ? e.classList.remove("open")
                        : e.classList.add("open");
                });
            });
        });
    </script>

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