<?php
/**
 * The template part for displaying navigation content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <!-- Logo -->
    <div class="logo-wrapper valign">
        <div class="logo">
            <h2>
                <a href="<?php echo home_url() ?>"><?php echo cs_get_options()['mss_header']['mss_header_site_name'] ?></a>
                <span><?php echo cs_get_options()['mss_header']['mss_header_tagline'] ?></span>
            </h2>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"><i class="ti-line-double"></i></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'container'      => false,
            'menu_class'     => 'navbar-nav ml-auto',
            'menu_id'        => 'nav',
            'sort_column'    => 'menu_order'
        ) ); ?>
    </div>
</nav>