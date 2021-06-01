<?php
/**
 * The template part (page) for displaying portfolio page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<section class="section-padding">
    <div class="container">
        <?php if(cs_get_options()['mss_hire_is_other_page']): ?>
            <?php get_template_part( 'template-parts/content', 'hire' ); ?>
        <?php endif; ?>
    </div>
</section>