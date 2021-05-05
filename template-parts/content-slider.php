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
<?php if(cs_get_options()['mss_home_is_slider']): ?>
    <header class="header slider-fade">
        <div class="owl-carousel owl-theme">
            <?php foreach(cs_get_options()['mss_slider_image'] as $data) : ?>
                <div class="text-right item bg-img" data-overlay-dark="<?php echo cs_get_options()['mss_slide_overlay'] ?>" data-background="<?php echo $data['mss_slide_image']['url'] ?>">
                </div>
            <?php endforeach; ?>
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
<?php endif; ?>