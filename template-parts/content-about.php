<?php
/**
 * The template part for displaying about content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<?php if(cs_get_options()['mss_home_is_bio']): ?>
    <!-- About Us -->
    <section class="proto-services section-padding">
        <div class="container">
	        <?php if(cs_get_options()['mss_misc']['mss_misc_is_headline']): ?>
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <span class="section-subtitle"><?php echo cs_get_options()['mss_header']['mss_header_tagline'] ?> and Indie Filmmaker</span>
                        <h2 class="section-title"><?php echo cs_get_options()['mss_header']['mss_header_site_name'] ?></h2>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-3 animate-box" data-animate-effect="fadeInUp">
                            <span class="line-one"></span>
                        </div>
                        <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                            <h6><?php echo cs_get_options()['mss_bio_intro'] ?></h6>
                            <?php foreach(cs_get_options()['mss_bio_repeater'] as $key => $data) : ?>
                                <p class="text-justify"><?php echo $data['mss_bio_repeater_para'] ?></p>
                            <?php endforeach; ?>
                            <img src="<?php echo cs_get_options()['mss_misc']['mss_misc_signature']['url'] ?>" class="sign" alt="<?php echo cs_get_options()['mss_header']['mss_header_site_name'] ?>">
                        </div>
                    </div>
                </div>
                <div class="col-md-5 animate-box" data-animate-effect="fadeInUp">
                    <div class="jophoto-about-img">
                        <div class="img"> <img src="<?php echo cs_get_options()['mss_misc']['mss_misc_profile']['url'] ?>" alt="<?php echo cs_get_options()['mss_header']['mss_header_site_name'] ?>"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>