<?php
/**
 * The template part (page) for displaying portfolio page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<?php
$args = array(
    'post_type'      => 'portfolios',
    'posts_per_page' => 50,
    'tax_query'      => array(
        array (
            'taxonomy'  => 'types',
            'field'     => 'slug',
            'terms'     => ['series','story'],
        )
    ),
);
$the_query = new WP_Query( $args );
$orientation = get_post_custom_values('orientation')[0];

$styles = array(
    3 => 'font-size: 11px',
    4 => 'font-size: 15px',
    6 => 'font-size: 17px; text-transform: uppercase',
);
?>

<section class="proto-services section-padding">
    <div class="container">
        <div class="row">
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <?php $grid = (cs_get_options()['mss_misc']['mss_misc_album_column_size']) ? cs_get_options()['mss_misc']['mss_misc_album_column_size'] : 3; ?>
                    <div class="col-md-<?php echo $grid ?> animate-box" data-animate-effect="fadeInUp">
                        <div class="services-con mb-60">
                            <div class="services-title">
                                <h4 style="<?php echo $styles[$grid] ?>"><?php the_title(); ?></h4>
                            </div>
                            <?php the_post_thumbnail('col-md-' . $grid . '-' . $orientation, ['class' => 'img-fluid', ]); ?>
                            <a href="<?php the_permalink(); ?>"></a>
                        </div>
                    </div>
                <?php endwhile;  ?>
                <?php wp_reset_postdata(); ?>
            <?php endif;  ?>
        </div>
    </div>
</section>