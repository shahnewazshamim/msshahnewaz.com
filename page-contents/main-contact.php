<?php
/**
 * The template part (page) for displaying contact page main content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<!-- Contact -->
<section class="section-padding">
    <div class="container">
        <div class="row mb-90">
            <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                <h6><?php echo cs_get_options()['mss_contact_intro'] ?></h6>
                <p><?php echo cs_get_options()['mss_bio_intro'] ?></p>
                <p><b>Phone :</b> <?php echo cs_get_options()['mss_contact_phone'] ?></p>
                <p><b>Mobile :</b> <?php echo cs_get_options()['mss_contact_mobile'] ?></p>
                <p><b>WhatsApp :</b> <?php echo cs_get_options()['mss_contact_whatsapp'] ?></p>
                <p><b>Email :</b> <?php echo cs_get_options()['mss_contact_email'] ?></p>
                <p><b>Address :</b> <?php echo cs_get_options()['mss_contact_address'] ?></p>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                <h6><?php echo cs_get_options()['mss_hire_title'] ?></h6>
                <p class="text-justify"><?php echo cs_get_options()['mss_hire_desc'] ?></p>
                <p class="text-justify">
                    <a href="<?php echo cs_get_options()['mss_hire_google_link']['url'] ?>" target="<?php echo cs_get_options()['mss_hire_google_link']['target'] ?>" class="butn butn-dark mt-10 mr-3"><span><?php echo cs_get_options()['mss_hire_google_link']['text'] ?></span></a>
                    <a href="<?php echo cs_get_options()['mss_hire_commercial_link']['url'] ?>" target="<?php echo cs_get_options()['mss_hire_commercial_link']['target'] ?>" class="butn butn-dark mt-10 mr-3"><span><?php echo cs_get_options()['mss_hire_commercial_link']['text'] ?></span></a>
                    <a href="<?php echo cs_get_options()['mss_hire_ngo_link']['url'] ?>" target="<?php echo cs_get_options()['mss_hire_ngo_link']['target'] ?>" class="butn butn-dark mt-10 mr-3"><span><?php echo cs_get_options()['mss_hire_ngo_link']['text'] ?></span></a>
                </p>
            </div>
        </div>
    </div>
</section>
