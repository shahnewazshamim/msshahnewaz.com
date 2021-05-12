<?php
/**
 * The template part for displaying hire content.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */
?>

<div class="row">
    <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
        <h6 class="text-center"><?php echo cs_get_options()['mss_hire_title'] ?></h6>
        <p class="text-center"><?php echo cs_get_options()['mss_hire_desc'] ?></p>
        <p class="text-center"><b>Phone :</b> <?php echo cs_get_options()['mss_contact_phone'] ?> <b>Email :</b> <?php echo cs_get_options()['mss_contact_email'] ?> <b>WhatsApp :</b> <?php echo cs_get_options()['mss_contact_whatsapp'] ?></p>
        <p class="text-center"><a href="<?php echo cs_get_options()['mss_hire_contact_link']['url'] ?>" target="<?php echo cs_get_options()['mss_hire_contact_link']['target'] ?>" class="butn butn-dark mt-10"><span><?php echo cs_get_options()['mss_hire_contact_link']['text'] ?></span></a></p>
    </div>
</div>