<?php
/**
 * The template part (page) for displaying contact page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- Contact -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-90">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <h6>Contact Info</h6>
                <p>Qualamy nisl sodales sit amet sapien id, placerat sodales orciter.
                    <br>Vivamus nec magna rhoncus felis, faucibus printy.</p>
                <p><b>Phone :</b> +1 (123) 444-5555</p>
                <p><b>Email :</b> photography@jopho.com</p>
                <p><b>Address :</b> 1040 Bayhill Dr, San Bruno, CA 94066, US.</p>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                <h6>Contact Form</h6>
                <p>Interested to work wiht us?</p>
                <form method="post" class="row">
                    <div class="col-md-6">
                        <input type="text" name="name" id="name" placeholder="Full Name"> </div>
                    <div class="col-md-6">
                        <input type="email" name="email" id="email" placeholder="Email" required=""> </div>
                    <div class="col-md-12">
                        <textarea name="message" id="message" cols="40" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="butn-dark mt-10" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Map Section-->
        <div class="row">
            <div class="col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                <div id="jophoto-contactMap"></div>
            </div>
        </div>
    </div>
</section>
