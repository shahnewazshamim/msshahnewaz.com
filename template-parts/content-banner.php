<?php
/**
 * The template part for displaying page head banner content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- Header Banner -->
<header class="banner-header banner-img valign bg-img" data-overlay-dark="<?php echo cs_get_options()['mss_misc']['mss_misc_page_header_overlay'] ?>" data-background="<?php echo has_post_thumbnail() ? the_post_thumbnail_url() : cs_get_options()['mss_misc']['mss_misc_page_header']['url']; ?>" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-5 text-right caption mt-60 animate-box" data-animate-effect="fadeInUp">
                <h5><?php echo get_post_custom_values('sub-title')[0] ?? get_the_terms($post->ID, get_object_taxonomies($post)[0])[0]->name; ?></h5>
                <h1><?php echo get_the_title() ?></h1>
            </div>
        </div>
    </div>
</header>