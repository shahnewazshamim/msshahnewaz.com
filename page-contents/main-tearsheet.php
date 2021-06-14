<?php
/**
 * The template part (page) for displaying tear sheet page main content.
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
                        <?php $grid = (cs_get_options()['mss_misc']['mss_misc_gallery_column_size']) ? cs_get_options()['mss_misc']['mss_misc_gallery_column_size'] : 3; ?>
                        <div class="col-md-<?php echo $grid ?> animate-box" data-animate-effect="fadeInUp">
                            <a href="<?php echo wp_get_attachment_caption($id) ?>" target="_blank" class="d-block jophoto-photo-item">
                                <img src="<?php echo wp_get_attachment_image_src($id, 'col-md-' . $grid . '-' . $orientation)[0] ?>" alt="Image" class="img-fluid">
                                <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
	<?php if(cs_get_options()['mss_hire_is_other_page']): ?>
        <section class="section-padding">
            <div class="container">
                <?php get_template_part( 'template-parts/content', 'hire' ); ?>
            </div>
        </section>
	<?php endif; ?>
<?php endwhile;  ?>
