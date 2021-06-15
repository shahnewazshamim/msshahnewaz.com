<?php
/**
 * The template part for displaying instagram content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<?php if(cs_get_options()['mss_home_is_instagram']): ?>
    <!-- Instagram -->
    <section class="jophoto-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30">
                    <span class="section-subtitle">Instagram</span>
                    <h2 class="section-title">Gallery</h2>
                </div>
            </div>
            <div class="row jophoto-photos" id="jophoto-section-photos">
                <?php echo do_shortcode( '[instagram-feed]' ); ?>
            </div>
        </div>
    </section>
<?php endif; ?>