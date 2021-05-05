<?php
/**
 * The template part for displaying slider content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- Slider -->
<header class="header slider-fade">
    <div class="owl-carousel owl-theme">
        <div class="text-right item bg-img" data-overlay-dark="3" data-background="img/slider/1.jpg">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="o-hidden">
                                <h4>Agency Owner</h4>
                                <h1>Vika Spring</h1>
                                <p>We are professional photography agency</p>
                                <a href="https://1.envato.market/jopho" target="_blank" class="butn butn-dark mt-30"> <span>About Me</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="text-right item bg-img" data-overlay-dark="3" data-background="img/slider/2.jpg">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="o-hidden">
                                <h4>Model, Moscow</h4>
                                <h1>Anna Karla</h1>
                                <p>Human is beautiful, perfect is boring</p>
                                <a href="https://1.envato.market/jopho" target="_blank" class="butn butn-dark mt-30"> <span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right item bg-img" data-overlay-dark="5" data-background="img/slider/3.jpg">
            <div class="v-middle caption mt-30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="o-hidden">
                                <h4>Wedding Shots</h4>
                                <h1>Nata & Robert</h1>
                                <p>Happiness for a lifetime</p>
                                <a href="https://1.envato.market/jopho" target="_blank" class="butn butn-dark mt-30"> <span>Discover More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <?php if(cs_get_options()['mss_home_is_social']): ?>
        <!-- Left Panel -->
        <div class="left-panel">
            <div class="left-txt">
                <?php foreach(cs_get_options()['mss_social_items'] as $key => $value) : ?>
                    <a href="<?php echo $value['mss_social_items_url'] ?>" target="_blank">
                        <?php echo $value['mss_social_items_title']; ?>
                    </a>
                    <span>-</span>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</header>