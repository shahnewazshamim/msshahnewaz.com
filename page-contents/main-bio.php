<?php
/**
 * The template part (page) for displaying biography page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- About Us -->
<section class="section-padding mt-30 mb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7 mb-60">
                        <div class="row">
                            <div class="col-md-3 animate-box" data-animate-effect="fadeInUp"> <span class="line-one"></span> </div>
                            <div class="col-md-8 animate-box" data-animate-effect="fadeInUp">
                                <h6><?php echo cs_get_options()['mss_bio_intro'] ?></h6>
                                <?php foreach(cs_get_options()['mss_bio_repeater'] as $data) : ?>
                                    <p class="text-justify"><?php echo $data['mss_bio_repeater_para'] ?></p>
                                <?php endforeach; ?>
                                <img src="<?php echo cs_get_options()['mss_misc']['mss_misc_signature']['url'] ?>" class="sign" alt="<?php echo cs_get_options()['mss_header']['mss_header_site_name'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 animate-box mb-60" data-animate-effect="fadeInUp">
                        <div class="jophoto-about-img">
                            <div class="img"> <img src="<?php echo cs_get_options()['mss_misc']['mss_misc_profile']['url'] ?>" alt="<?php echo cs_get_options()['mss_header']['mss_header_site_name'] ?>"> </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-25">
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInUp"> <span class="line-one"></span> </div>
                    <div class="col-md-8 animate-box mb-60" data-animate-effect="fadeInUp">
                        <h6>Awards <small class="text-em-sm"><em>Don't Judge My Skill</em></small></h6>
                        <ul class="award-list">
                            <?php foreach(cs_get_options()['mss_bio_awards'] as $data) : ?>
                                <li class="text-justify"><span class="text-default pr-2">&#10003; </span><?php echo $data['mss_bio_award_item'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php if(cs_get_options()['mss_hire_is_other_page']): ?>
            <?php get_template_part( 'template-parts/content', 'hire' ); ?>
        <?php endif; ?>
    </div>
</section>