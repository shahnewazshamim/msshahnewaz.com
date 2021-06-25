<?php
/**
 * The template part (page) for displaying biography page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- 404 -->
<section class="section-padding mt-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-danger"><?php echo cs_get_options()['mss_404_title']?></h1>
                <h5 class="text-center"><?php echo cs_get_options()['mss_404_description']?></h5>
                <p class="text-center"><a href="<?php echo cs_get_options()['mss_404_button_link']['url'] ?>" class="mt-10"><span><?php echo cs_get_options()['mss_404_button_link']['text'] ?></span></a></p>
            </div>
        </div>
    </div>
</section>
<section class="section-padding mb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
	            <?php get_template_part( 'template-parts/content', 'hire' ); ?>
            </div>
        </div>
    </div>
</section>