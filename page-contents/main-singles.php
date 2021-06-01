<?php
/**
 * The template part (page) for displaying singles page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>
<?php while ( have_posts() ) : the_post(); ?>
    <?php
    if (has_block('gallery', $post->post_content)) {
        $post_blocks = parse_blocks($post->post_content);
        $ids = $post_blocks[0]['attrs']['ids'];
    }
    ?>

    <section class="jophoto-gallery section-padding mb-30">
        <div class="container">
            <div class="row jophoto-photos" id="jophoto-section-photos">
                <?php if(is_array($ids)) : ?>
                    <?php $orientation = get_post_custom_values('orientation')[0]; ?>
                    <?php foreach($ids as $id) : ?>
                        <?php $grid = (cs_get_options()['mss_misc']['mss_misc_gallery_column_size']) ? cs_get_options()['mss_misc']['mss_misc_gallery_column_size'] : 3 ; ?>
                        <div class="col-md-<?php echo $grid ?> animate-box" data-animate-effect="fadeInUp">
                            <a href="<?php echo wp_get_attachment_image_src($id, 'full')[0] ?>" class="d-block jophoto-photo-item" data-caption="<?php echo wp_get_attachment_caption($id) . ' | Photo By - ' . get_userdata(1)->display_name; ?>" data-fancybox="gallery">
                                <img src="<?php echo wp_get_attachment_image_src($id, 'col-md-' . $grid . '-' . $orientation)[0] ?>" alt="Image" class="img-fluid">
                                <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endwhile;  ?>