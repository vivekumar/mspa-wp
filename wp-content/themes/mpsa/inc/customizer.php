<?php
add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize)
{

    $wp_customize->add_section('slides', array(
        'title'          => 'Slides',
        'priority'       => 25,
    ));
    for ($i = 1; $i < 6; $i++) {
        $wp_customize->add_setting('slide' . $i, array(
            'default'        => '',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'slide' . $i, array(
            'label'   => 'Slide ' . $i,
            'section' => 'slides',
            'settings'   => 'slide' . $i,
        )));

        $wp_customize->add_setting('heading1' . $i, array(
            'default'        => '',
        ));
        $wp_customize->add_control('heading1' . $i, array(
            'label'   => 'Heading Text' . $i,
            'section' => 'slides',
            'settings'   => 'heading1' . $i,
        ));
        $wp_customize->add_setting('heading2' . $i, array(
            'default'        => '',
        ));
        $wp_customize->add_control('heading2' . $i, array(
            'label'   => 'Heading Text' . $i,
            'section' => 'slides',
            'settings'   => 'heading2' . $i,
        ));

        $wp_customize->add_setting('slider_desc' . $i, array(
            'default'        => '',
        ));
        $wp_customize->add_control('slider_desc' . $i, array(
            'label'   => 'Sub Text' . $i,
            'section' => 'slides',
            'settings'   => 'slider_desc' . $i,
        ));

        $wp_customize->add_setting('slider_button_text' . $i, array(
            'default'        => '',
        ));
        $wp_customize->add_control('slider_button_text' . $i, array(
            'label'   => 'Button text' . $i,
            'section' => 'slides',
            'settings'   => 'slider_button_text' . $i,
        ));
        $wp_customize->add_setting('slider_button_link' . $i, array(
            'default'        => '',
        ));
        $wp_customize->add_control('slider_button_link' . $i, array(
            'label'   => 'Button Link' . $i,
            'section' => 'slides',
            'settings'   => 'slider_button_link' . $i,
        ));
    }


    // Header section
    $wp_customize->add_section('header', array(
        'title'          => 'Header',
        'priority'       => 24,
    ));

    $wp_customize->add_setting('truck', array(
        'default'        => '',
    ));
    $wp_customize->add_control('truck', array(
        'label'   => 'Text truck',
        'section' => 'header',
        'settings'   => 'truck',
    ));
    $wp_customize->add_setting('award', array(
        'default'        => '',
    ));
    $wp_customize->add_control('award', array(
        'label'   => 'Text award',
        'section' => 'header',
        'settings'   => 'award',
    ));
    $wp_customize->add_setting('watch', array(
        'default'        => '',
    ));
    $wp_customize->add_control('watch', array(
        'label'   => 'Text watch',
        'section' => 'header',
        'settings'   => 'watch',
    ));
    $wp_customize->add_setting('archive', array(
        'default'        => '',
    ));
    $wp_customize->add_control('archive', array(
        'label'   => 'Text archive',
        'section' => 'header',
        'settings'   => 'archive',
    ));
    // footer section
    $wp_customize->add_section('footer', array(
        'title'          => 'Footer',
        'priority'       => 24,
    ));

    $wp_customize->add_setting('footer_address', array(
        'default'        => '',
    ));
    $wp_customize->add_control('footer_address', array(
        'label'   => 'Address',
        'section' => 'footer',
        'settings'   => 'footer_address',
    ));
    $wp_customize->add_setting('footer_phone', array(
        'default'        => '',
    ));
    $wp_customize->add_control('footer_phone', array(
        'label'   => 'Phone no',
        'section' => 'footer',
        'settings'   => 'footer_phone',
    ));
    $wp_customize->add_setting('footer_email', array(
        'default'        => '',
    ));
    $wp_customize->add_control('footer_email', array(
        'label'   => 'Email',
        'section' => 'footer',
        'settings'   => 'footer_email',
    ));
    $wp_customize->add_setting('footer_time1', array(
        'default'        => '',
    ));

    $wp_customize->add_control('footer_time1', array(
        'label'   => 'Time 1',
        'section' => 'footer',
        'settings'   => 'footer_time1',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('footer_time2', array(
        'default'        => '',
    ));

    $wp_customize->add_control('footer_time2', array(
        'label'   => 'Time 2',
        'section' => 'footer',
        'settings'   => 'footer_time2',
        'type' => 'textarea',
    ));
    //social section
    $wp_customize->add_setting('twitter', array('default' => ''));
    $wp_customize->add_setting('instagram', array('default' => ''));
    $wp_customize->add_setting('facebook', array('default' => ''));
    $wp_customize->add_setting('linkedin', array('default' => ''));

    //Sections
    $wp_customize->add_section(
        'social-media',
        array(
            'title' => __('Social Media', '_s'),
            'priority' => 30,
            'description' => __('Enter the URL to your accounts for each social media for the icon to appear in the header.', '_s')
        )
    );

    //Controls
    //Twitter
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'twitter',
            array(
                'label' => __('Twitter', '_s'),
                'section' => 'social-media',
                'settings' => 'twitter'
            )
        )
    );
    //Instragram
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'instagram',
            array(
                'label' => __('Instagram', '_s'),
                'section' => 'social-media',
                'settings' => 'instagram'
            )
        )
    );
    //Facebook
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'facebook',
            array(
                'label' => __('Facebook', '_s'),
                'section' => 'social-media',
                'settings' => 'facebook'
            )
        )
    );
    //Linked in
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'linkedin',
            array(
                'label' => __('Linked in', '_s'),
                'section' => 'social-media',
                'settings' => 'linkedin'
            )
        )
    );


    // Home page section
    $wp_customize->add_panel(
        'home_panel',
        array(
            'title' => 'Home setting',
            'priority' => 1,
        )
    );

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'brand_image', array(
        'label'   => 'Image ',
        'section' => 'brand',
        'settings'   => 'brand_image',
    )));
    //TWO BUSINESS SEGMENTS
    $wp_customize->add_section('business', array(
        'title'          => 'Business Segments',
        'panel' => 'home_panel',
        'priority'       => 28,
    ));

    $wp_customize->add_setting('business_title', array(
        'default'        => '',
    ));
    $wp_customize->add_control('business_title', array(
        'label'   => 'Business Title',
        'section' => 'business',
        'settings'   => 'business_title',
        'type' => 'text',
    ));

    for ($i = 1; $i < 3; $i++) {

        $wp_customize->add_setting('business_image' . $i, array(
            'default'        => '',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'business_image' . $i, array(
            'label'   => 'Business ' . $i,
            'section' => 'business',
            'settings'   => 'business_image' . $i,
        )));

        $wp_customize->add_setting('business_text' . $i, array(
            'default'        => '',
        ));

        $wp_customize->add_control('business_text' . $i, array(
            'label'   => 'Text 1',
            'section' => 'business',
            'settings'   => 'business_text' . $i,
            'type' => 'textarea',
        ));
        $wp_customize->add_setting('business_title' . $i, array(
            'default'        => '',
        ));

        $wp_customize->add_control('business_title' . $i, array(
            'label'   => 'Text 2',
            'section' => 'business',
            'settings'   => 'business_title' . $i,
            'type' => 'text',
        ));
    }
}
