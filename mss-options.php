<?php
/**
 * M S Shahnewaz options and definitions.
 *
 * @package    WordPress
 * @subpackage M_S_Shahnewaz_Dark
 * @since      M S Shahnewaz 1.0.1
 */

if (class_exists('CSF')) {

    $prefix = 'mss-options';

    /*******************************************************************************************************************
     * Codestar Framework settings
     ******************************************************************************************************************/

    CSF::createOptions($prefix, array(
        'menu_title'       => 'MSS Options',
        'type'             => 'theme', // menu, submenu, options, theme, etc.
        'menu_slug'        => 'mss-options',
        'ajax_save'        => true,
        'Enable_reset_all' => false,
        'framework_title'  => 'Theme Options <small><em><a>by Md. Shamim Shahnewaz</a></em></small>',
    ));


    /*******************************************************************************************************************
     * Codestar TAB - General
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_general',
        'title'  => 'General',
        'icon'   => 'fa fa-dashboard',
        'fields' => array(
            array(
                'id'     => 'mss_header',
                'type'   => 'fieldset',
                'title'  => 'Header Section',
                'fields' => array(
                    array(
                        'id'      => 'mss_header_site_name',
                        'type'    => 'text',
                        'title'   => 'Site Name/Text Logo',
                        'default' => get_bloginfo('name'),
                        'desc'    => 'Set the site name or text logo.',
                    ),
                    array(
                        'id'      => 'mss_header_tagline',
                        'type'    => 'text',
                        'title'   => 'Site Tagline/Moto',
                        'default' => get_bloginfo('description'),
                        'desc'    => 'Set the site tagline or moto.',
                    ),
                ),
            ),
            array(
                'id'     => 'mss_footer',
                'type'   => 'fieldset',
                'title'  => 'Footer Section',
                'fields' => array(
                    array(
                        'id'      => 'mss_footer_copyright',
                        'type'    => 'text',
                        'title'   => 'Copyright Text',
                        'default' => '&copy; '.date('Y').' | '.get_bloginfo('name').' | All Rights Reserved',
                        'desc'    => 'Set the copyright text of this site.<br> Ex: &copy; '.date('Y').' | '.get_bloginfo('name').' | All Rights Reserved',
                    ),
                    array(
                        'id'         => 'mss_footer_is_social',
                        'type'       => 'switcher',
                        'text_on'    => 'Enable',
                        'text_off'   => 'Disable',
                        'text_width' => 100,
                        'title'      => 'Enable Social Icon in "FOOTER"',
                    ),
                    array(
                        'id'         => 'mss_footer_is_logo',
                        'type'       => 'switcher',
                        'text_on'    => 'Enable',
                        'text_off'   => 'Disable',
                        'text_width' => 100,
                        'title'      => 'Enable Text Logo in "FOOTER"',
                    ),
                ),
            ),
            array(
                'id'     => 'mss_misc',
                'type'   => 'fieldset',
                'title'  => 'Miscellaneous . . .',
                'fields' => array(
                    array(
                        'id'         => 'mss_misc_is_loading',
                        'type'       => 'switcher',
                        'text_on'    => 'Enable',
                        'text_off'   => 'Disable',
                        'text_width' => 100,
                        'title'      => 'Enable "LOADING" while page load.',
                    ),
                    array(
                        'id'    => 'mss_misc_page_header',
                        'type'  => 'media',
                        'title' => 'Page Header Image',
                        'desc'  => 'Set the page header image of all pages.',
                    ),
                    array(
                        'id'    => 'mss_misc_page_header_overlay',
                        'type'  => 'slider',
                        'min'   => 0,
                        'max'   => 10,
                        'step'  => 1,
                        'title' => 'Page Header Overlay ',
                        'desc'  => 'Set the overlay amount of page header image.',
                    ),
                    array(
                        'id'    => 'mss_misc_profile',
                        'type'  => 'media',
                        'title' => 'Profile Photo',
                        'desc'  => 'Set the profile photo of your\'s.',
                    ),
                    array(
                        'id'    => 'mss_misc_signature',
                        'type'  => 'media',
                        'title' => 'Digital Signature',
                        'desc'  => 'Set the digital signature of your\'s.',
                    ),
                    array(
                        'id'    => 'mss_misc_gallery_column_size',
                        'type'  => 'select',
                        'title' => 'Column Size (Gallery)',
                        'options'     => array(
                            '6'  => '2 Columns',
                            '4'  => '3 Columns',
                            '3'  => '4 Columns',
                        ),
                        'default' => '4',
                        'desc'    => 'Set the column size of image gallery.',
                    ),
                    array(
                        'id'    => 'mss_misc_album_column_size',
                        'type'  => 'select',
                        'title' => 'Column Size (Portfolio)',
                        'options'     => array(
                            '6'  => '2 Columns',
                            '4'  => '3 Columns',
                            '3'  => '4 Columns',
                        ),
                        'default' => '4',
                        'desc'    => 'Set the column size of image album.',
                    ),
                    array(
	                    'id'    => 'mss_misc_album_gallery_column_size',
	                    'type'  => 'select',
	                    'title' => 'Column Size (Portfolio Gallery)',
	                    'options'     => array(
		                    '6'  => '2 Columns',
		                    '4'  => '3 Columns',
		                    '3'  => '4 Columns',
	                    ),
	                    'default' => '4',
	                    'desc'    => 'Set the column size of image of album gallery.',
                    ),
                    array(
	                    'id'         => 'mss_misc_is_description',
	                    'type'       => 'switcher',
	                    'text_on'    => 'Enable',
	                    'text_off'   => 'Disable',
	                    'text_width' => 100,
	                    'title'      => 'Enable Series/Story Description',
                    ),
                    array(
	                    'id'         => 'mss_misc_is_caption',
	                    'type'       => 'switcher',
	                    'text_on'    => 'Enable',
	                    'text_off'   => 'Disable',
	                    'text_width' => 100,
	                    'title'      => 'Enable Image Caption',
                    ),
                ),
            ),
        )
    ));


    /*******************************************************************************************************************
     * Codestar TAB - Home
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_home',
        'title'  => 'Home Page',
        'icon'   => 'fa fa-home',
        'fields' => array(
            array(
                'id'         => 'mss_home_is_slider',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Slider in "HOME PAGE"',
            ),
            array(
                'id'         => 'mss_home_is_instagram',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Instagram in "HOME PAGE"',
            ),
            array(
                'id'         => 'mss_home_is_social',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Social Icon in "HOME PAGE"',
            ),
            array(
                'id'         => 'mss_home_is_bio',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Biography in "HOME PAGE"',
            ),
        )
    ));


    /*******************************************************************************************************************
     * Codestar TAB - Slider
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_slider',
        'title'  => 'Slider',
        'icon'   => 'fa fa-images',
        'fields' => array(
            array(
                'id'                     => 'mss_slider_image',
                'type'                   => 'group',
                'title'                  => 'Home Page Slider',
                'min'                    => 1,
                'max'                    => 10,
                'accordion_title_number' => true,
                'desc'                   => 'You must have to enter at least one slide.',
                'button_title'           => 'Add new slide . . .',
                'fields'                 => array(
                    array(
                        'id'    => 'mss_slide_title',
                        'type'  => 'text',
                        'title' => 'Image Title',
                    ),
                    array(
                        'id'    => 'mss_slide_caption',
                        'type'  => 'text',
                        'title' => 'Image Caption',
                    ),
                    array(
                        'id'    => 'mss_slide_image',
                        'type'  => 'media',
                        'title' => 'Image',
                    ),
                )
            ),
            array(
                'id'    => 'mss_slide_overlay',
                'type'  => 'slider',
                'min'   => 0,
                'max'   => 10,
                'step'  => 1,
                'title' => 'Overlay Amount',
                'desc'  => 'Set the overlay amount of slider image.',
            ),
        )
    ));


    /*******************************************************************************************************************
     * Codestar TAB - BIOGRAPHY
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_bio',
        'title'  => 'Biography',
        'icon'   => 'fa fa-user',
        'fields' => array(
            array(
                'id'    => 'mss_bio_intro',
                'type'  => 'text',
                'title' => 'Intro of your biography',
                'desc'  => 'Set the intro line for your biography.',
            ),
            array(
                'id'           => 'mss_bio_repeater',
                'type'         => 'repeater',
                'min'          => 1,
                'max'          => 5,
                'title'        => 'Biography Details (multi paragraph)',
                'desc'         => 'Set the full biography in multiple paragraphs.',
                'button_title' => 'Add new paragraph . . .',
                'fields'       => array(
                    array(
                        'id'    => 'mss_bio_repeater_para',
                        'type'  => 'textarea',
                        'title' => 'Paragraph #'
                    ),
                ),
            ),
            array(
                'id'    => 'mss_bio_awards_count',
                'type'  => 'slider',
                'min'   => 0,
                'max'   => 1000,
                'step'  => 1,
                'title' => 'Number of Awards Show',
                'desc'  => 'Set the amount of awards to show in list.',
            ),
            array(
                'id'           => 'mss_bio_awards',
                'type'         => 'repeater',
                'min'          => 1,
                'max'          => 200,
                'title'        => 'Award Details (multiline)',
                'desc'         => 'Set the award list.',
                'button_title' => 'Add new award . . .',
                'fields'       => array(
                    array(
                        'id'    => 'mss_bio_award_item',
                        'type'  => 'text',
                        'title' => 'Award #'
                    ),
                ),
            ),
        )
    ));


    /*******************************************************************************************************************
     * Codestar TAB - Contact
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_contact',
        'title'  => 'Contact',
        'icon'   => 'fa fa-envelope',
        'fields' => array(
            array(
                'id'    => 'mss_contact_intro',
                'type'  => 'text',
                'title' => 'Contact Intro',
                'desc'  => 'Set the contact page intro.',
            ),
            array(
                'id'    => 'mss_contact_name',
                'type'  => 'text',
                'title' => 'Full Name',
                'desc'  => 'Set the name of your\'s.',
            ),
            array(
                'id'    => 'mss_contact_phone',
                'type'  => 'text',
                'title' => 'Phone Number',
                'desc'  => 'Set the phone number of your\'s.',
            ),
            array(
                'id'    => 'mss_contact_mobile',
                'type'  => 'text',
                'title' => 'Mobile Number',
                'desc'  => 'Set the mobile number of your\'s.',
            ),
            array(
                'id'    => 'mss_contact_whatsapp',
                'type'  => 'text',
                'title' => 'WhatsApp Number',
                'desc'  => 'Set the whatsapp number of your\'s.',
            ),
            array(
                'id'    => 'mss_contact_email',
                'type'  => 'text',
                'title' => 'Email Address',
                'desc'  => 'Set the email address of your\'s.',
            ),
            array(
                'id'    => 'mss_contact_address',
                'type'  => 'text',
                'title' => 'Full Address',
                'desc'  => 'Set the address of your\'s.',
            ),
        )
    ));


    /*******************************************************************************************************************
     * Codestar TAB - Hire Me
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_hire',
        'title'  => 'Hire Me',
        'icon'   => 'fa fa-briefcase',
        'fields' => array(
            array(
                'id'         => 'mss_hire_is_home_page',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Hire Me block in "HOME PAGE"',
            ),
            array(
                'id'         => 'mss_hire_is_other_page',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Hire Me block in "ALL OTHER PAGE"',
            ),
            array(
                'id'    => 'mss_hire_title',
                'type'  => 'text',
                'title' => 'Hire Me Title',
                'desc'  => 'Set the hire me title.',
            ),
            array(
                'id'    => 'mss_hire_desc',
                'type'  => 'textarea',
                'title' => 'Hire Me Description',
                'desc'  => 'Set the hire me description.',
            ),
            array(
                'id'    => 'mss_hire_portfolio_link',
                'type'  => 'link',
                'title' => 'Portfolio Page Link',
            ),
            array(
                'id'    => 'mss_hire_contact_link',
                'type'  => 'link',
                'title' => 'Contact Page Link',
            ),
            array(
                'id'    => 'mss_hire_commercial_link',
                'type'  => 'link',
                'title' => 'Commercial Page Link',
            ),
            array(
                'id'    => 'mss_hire_ngo_link',
                'type'  => 'link',
                'title' => 'NGO Page Link',
            ),
            array(
                'id'    => 'mss_hire_google_link',
                'type'  => 'link',
                'title' => 'Google Form Link',
            ),
        )
    ));


    /*******************************************************************************************************************
     * Codestar TAB - Package/Price
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_packages',
        'title'  => 'Packages',
        'icon'   => 'fa fa-dollar',
        'fields' => array(
            array(
                'id'         => 'mss_packages_is_contact_page',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Package block in "CONTACT PAGE"',
            ),
            array(
                'id'         => 'mss_packages_is_client_page',
                'type'       => 'switcher',
                'text_on'    => 'Enable',
                'text_off'   => 'Disable',
                'text_width' => 100,
                'title'      => 'Enable Package block in "CLIENT PAGE"',
            ),
            array(
                'id'    => 'mss_packages_section_title',
                'type'  => 'text',
                'title' => 'Section Title',
                'desc'  => 'Set the section title.',
            ),
            array(
                'id'                     => 'mss_packages_items',
                'type'                   => 'group',
                'title'                  => 'Package Items',
                'min'                    => 3,
                'max'                    => 60,
                'accordion_title_number' => true,
                'desc'                   => 'You must have to enter at least three packages.',
                'button_title'           => 'Add new package . . .',
                'fields'                 => array(
                    array(
                        'id'    => 'mss_package_title',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => 'mss_package_category',
                        'type'  => 'text',
                        'title' => 'Category',
                    ),
                    array(
                        'id'    => 'mss_package_price',
                        'type'  => 'text',
                        'title' => 'Price in BDT',
                    ),
                    array(
                        'id'    => 'mss_package_image',
                        'type'  => 'media',
                        'title' => 'Image',
                    ),
                    array(
                        'id'           => 'mss_package_item_repeater',
                        'type'         => 'repeater',
                        'min'          => 3,
                        'max'          => 12,
                        'title'        => 'Package Features',
                        'desc'         => 'Set the package features.',
                        'button_title' => 'Add new feature . . .',
                        'fields'       => array(
                            array(
                                'id'    => 'mss_package_feature',
                                'type'  => 'text',
                                'title' => 'Feature #'
                            ),
                        ),
                    ),
                )
            ),
        )
    ));


    /*******************************************************************************************************************
     * Codestar TAB - Social
     ******************************************************************************************************************/
    CSF::createSection($prefix, array(
        'id'     => 'mss_social',
        'title'  => 'Social',
        'icon'   => 'fa fa-share',
        'fields' => array(
            array(
                'id'                     => 'mss_social_items',
                'type'                   => 'group',
                'min'                    => 2,
                'max'                    => 5,
                'accordion_title_number' => true,
                'title'                  => 'Social Media Items',
                'desc'                   => 'Set the social media.',
                'button_title'           => 'Add new social . . .',
                'fields'                 => array(
                    array(
                        'id'    => 'mss_social_items_title',
                        'type'  => 'text',
                        'title' => 'Title'
                    ),
                    array(
                        'id'    => 'mss_social_items_url',
                        'type'  => 'text',
                        'title' => 'URL'
                    ),
                    array(
                        'id'    => 'mss_social_items_icon',
                        'type'  => 'text',
                        'title' => 'Icon name (as per CSS)'
                    ),
                ),
            ),
        )
    ));

}