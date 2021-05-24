<?php
/**
 * The template part for displaying package content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- Packages -->
<section class="mb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-30">
                <span class="section-subtitle">Packages</span>
                <h2 class="section-title"><?php echo cs_get_options()['mss_packages_section_title'] ?></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach(cs_get_options()['mss_packages_items'] as $data) : ?>
                <div class="col-md-4">
                    <div class="price-box">
                        <div class="price-box-inner img-grayscale" style="background-image: url(<?php echo $data['mss_package_image']['url'] ?>)">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title"><?php echo $data['mss_package_title'] ?>
                                        <br><small style="font-size: 10px;" class="text-muted text-sm-center mb-30"><?php echo $data['mss_package_category'] ?></small>
                                    </h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">&#2547;</sup> <span class="pricing-price"><?php echo $data['mss_package_price'] ?></span> </li>
                                <li class="pricing-content">
                                    <ul>
                                        <?php foreach($data['mss_package_item_repeater'] as $feat) : ?>
                                            <li><?php echo $feat['mss_package_feature'] ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>