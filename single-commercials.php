<?php
/**
 * The template for displaying commercial single posts
 * 
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'loading' ); ?>
<?php get_template_part( 'template-parts/content', 'navbar' ); ?>
<?php get_template_part( 'template-parts/content', 'banner' ); ?>

<section class="section-padding">
    <div class="container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php
            if (has_block('gallery', $post->post_content)) {
                $post_blocks = parse_blocks($post->post_content);
                $ids = $post_blocks[0]['attrs']['ids'];
            }
            $orientation = get_post_custom_values('orientation')[0];
            ?>
            <?php if(cs_get_options()['mss_misc']['mss_misc_is_commercial_description']): ?>
                <div class="row">
                    <div class="col-md-12">
                        <p><?php the_content() ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <div class="row jophoto-photos mt-30" id="jophoto-section-photos">
                <?php foreach($ids as $id) : ?>
	                <?php if(!is_null(get_post_custom_values('column')[0]) && get_post_custom_values('column')[0] != ''): ?>
		                <?php $grid = 12/get_post_custom_values('column')[0] ?>
                    <?php else: ?>
		                <?php $grid = (cs_get_options()['mss_misc']['mss_misc_commercial_gallery_column_size']) ? cs_get_options()['mss_misc']['mss_misc_commercial_gallery_column_size'] : 3; ?>
                    <?php endif; ?>
                    <div class="col-md-<?php echo $grid ?> animate-box" data-animate-effect="fadeInUp">
                        <a href="<?php echo wp_get_attachment_image_src($id, 'full')[0] ?>" class="d-block jophoto-photo-item" data-caption="<?php get_image_caption($id) ?>" data-fancybox="gallery">
                            <img src="<?php echo wp_get_attachment_image_src($id, 'col-md-' . $grid . '-' . $orientation)[0] ?>" alt="Image" class="img-fluid">
                            <div class="photo-text-more"> <span class="ti-fullscreen"></span> </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endwhile;  ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                <p class="text-center"><a href="<?php echo cs_get_options()['mss_hire_commercial_link']['url'] ?>" class="butn butn-dark mt-10"><span><?php echo cs_get_options()['mss_hire_commercial_link']['text'] ?></span></a></p>
            </div>
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

<?php get_template_part( 'template-parts/content', 'footer' ); ?>
<?php get_footer(); ?>