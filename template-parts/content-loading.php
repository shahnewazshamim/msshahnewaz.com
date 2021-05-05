<?php
/**
 * The template part for displaying loading content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<?php if(cs_get_options()['mss_misc']['mss_misc_is_loading']): ?>
    <!-- Loading -->
    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
<?php endif; ?>