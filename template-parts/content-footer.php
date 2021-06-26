<?php
/**
 * The template part for displaying footer content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-text-left">
                <?php if(cs_get_options()['mss_footer']['mss_footer_is_social']): ?>
                    <div class="social">
                        <?php foreach(cs_get_options()['mss_social_items'] as $key => $value) : ?>
                            <a href="<?php echo $value['mss_social_items_url'] ?>" target="_blank">
                                <i class="<?php echo $value['mss_social_items_icon']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if(cs_get_options()['mss_footer']['mss_footer_is_logo']): ?>
                <div class="col-md-4 footer-text-center">
                    <div class="footer-logo">
                        <h1 class=""><a href="<?php echo home_url() ?>"><?php echo cs_get_options()['mss_header']['mss_header_site_name'] ?>
                                <span><?php echo cs_get_options()['mss_header']['mss_header_tagline'] ?></span></a></h1>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-md-4 footer-text-right">
                <p><?php echo '&copy; ' . date('Y') . ' | ' . cs_get_options()['mss_footer']['mss_footer_copyright'] ?></p>
            </div>
        </div>
    </div>
</footer>