<?php
function load_stylesheets() {
    wp_register_style('bootstrapCss', get_template_directory_uri().'/assets/css/bootstrap.min.css',
    array(), false, 'all');
    wp_enqueue_style('bootstrapCss');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function loadjs() {
    wp_register_script('customJS', get_template_directory_uri().'/assets/js/custom.js', '',1, true);
    wp_enqueue_script('customJS');
}
add_action('wp_enqueue_scripts', 'loadjs');

function hackathonFirstSection($wp_customize) {
    $wp_customize->add_section('hclDigitalHack-firstSection', array('title'=>'Top Banner Content Area'));

    $wp_customize->add_setting('hclDigitalHack-content-headLine', array('default'=> 'Drive the next phase of'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-content-control', array(
    'label'=> 'headline',
    'section' => 'hclDigitalHack-firstSection',
    'settings'=> 'hclDigitalHack-content-headLine'
    )));

    $wp_customize->add_setting('hclDigitalHack-content-headLine2', array('default'=> 'digital transformation'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-content-control1', array(
    'label'=> 'headline',
    'section' => 'hclDigitalHack-firstSection',
    'settings'=> 'hclDigitalHack-content-headLine2'
    )));

    $wp_customize->add_setting('hclDigitalHack-content-date', array('default'=> 'September 7, 2019'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-date-control', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-firstSection',
    'settings'=> 'hclDigitalHack-content-date'
    )));
    $wp_customize->add_setting('hclDigitalHack-content-place', array('default'=> 'HCL Seattle Hackathon'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-place-control', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-firstSection',
    'settings'=> 'hclDigitalHack-content-place'
    )));

    $wp_customize->add_setting('hclDigitalHack-content-condition', array('default'=> 'Open to external as well as internal participants'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-cond-control', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-firstSection',
    'settings'=> 'hclDigitalHack-content-condition'
    )));

    $wp_customize->add_setting('hclDigitalHack-content-image', array('default'=> 'content banner image'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-image-control', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-firstSection',
    'settings'=> 'hclDigitalHack-content-image',
    'width'=>666,
    'height'=> 410,
    'default'=>''
    )));
}
add_action('customize_register','hackathonFirstSection');

function hackathonSecondSection($wp_customize) {
     $wp_customize->add_section('hclDigitalHack-secondSection', array('title'=>'Middle Content Area'));

     $wp_customize->add_setting('hclDigitalHack-content-area', array('default'=> 'At HCL, we believe that the smartest minds deserve the opportunity to tackle the biggest business problems. Our Seattle Hackathon is an attempt to discover the sharpest technocrats, and provide them with the opportunity, tools, and incentives for helping global enterprises leverage digital to transform their business. From reinventing retail to revolutionizing the in-store experience, and to harnessing the power of data, we invite Front-end, API, Full-stack, and DevOps engineers to showcase and get rewarded for their skills in a day of innovation, agility, and technology.'));

     $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-sscontent-control', array(
     'label'=> 'Text',
     'section' => 'hclDigitalHack-secondSection',
     'settings'=> 'hclDigitalHack-content-area',
     'type'=> 'textarea'
     )));
}
add_action('customize_register','hackathonSecondSection');

function hackathonThirdSection($wp_customize) {
    $wp_customize->add_section('hclDigitalHack-thirdSection', array('title'=>'Prizes For Winners & Participants Area'));

    $wp_customize->add_setting('hclDigitalHack-tSection-heading', array('default'=> 'Exciting Prizes For Winners & Participants'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-tsheading-control', array(
    'label'=> 'headline',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tSection-heading'
    )));

    $wp_customize->add_setting('hclDigitalHack-tSection-heading2', array('default'=> 'Exciting rewards and career opportunities for participants and winners'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-tsheading2-control', array(
    'label'=> 'headline',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tSection-heading2'
    )));

    $wp_customize->add_setting('hclDigitalHack-tSection-content-image', array('default'=> 'content banner image'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-tsimage-control', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tSection-content-image',
    'width'=>347,
    'height'=> 244
    )));

    $wp_customize->add_setting('hclDigitalHack-tscontent-offer', array('default'=> 'More than'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-tscontent-control', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tscontent-offer'
    )));

    $wp_customize->add_setting('hclDigitalHack-tscontent-offer2', array('default'=> '$1000'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-tscontent-control2', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tscontent-offer2'
    )));

    $wp_customize->add_setting('hclDigitalHack-tscontent-offer3', array('default'=> 'worth of prizes for the winners'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-tscontent-control3', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tscontent-offer3'
    )));

    $wp_customize->add_setting('hclDigitalHack-tSection-rightcontent-image', array('default'=> 'content banner image'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-tsimage-right-control', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tSection-rightcontent-image',
    'width'=>80,
    'height'=> 70
    )));

    $wp_customize->add_setting('hclDigitalHack-tscontent-right-offer', array('default'=> 'Prizes and certification for all participants'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-tscontent-right-control', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tscontent-right-offer'
    )));

    $wp_customize->add_setting('hclDigitalHack-tSection-rightcontent-image1', array('default'=> 'content banner image'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-tsimage-right-control1', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tSection-rightcontent-image1',
    'width'=>80,
    'height'=> 70
    )));

    $wp_customize->add_setting('hclDigitalHack-tscontent-right-offer1', array('default'=> 'Complimentary food and refreshments provided on-site.'));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hclDigitalHack-tscontent-right-control1', array(
    'label'=> 'Text',
    'section' => 'hclDigitalHack-thirdSection',
    'settings'=> 'hclDigitalHack-tscontent-right-offer1'
    )));

}

add_action('customize_register','hackathonThirdSection');

function hackathonFourthSection($wp_customize) {
    $wp_customize->add_section('hclDigitalHack-fourthSection', array('title'=>'Past Hackathon Slideshow'));

    $wp_customize->add_setting('hclDigitalHack-fSection-slideshow-image1', array('default'=> 'wp-content/uploads/2019/10/cropped-seattle-banner-2-1.png'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-fslideshowImage1', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-fourthSection',
    'settings'=> 'hclDigitalHack-fSection-slideshow-image1',
    'width'=>376,
    'height'=> 212
    )));

    $wp_customize->add_setting('hclDigitalHack-fSection-slideshow-image2', array('default'=> 'wp-content/uploads/2019/10/cropped-seattle-banner-2-1.png'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-fslideshowImage2', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-fourthSection',
    'settings'=> 'hclDigitalHack-fSection-slideshow-image2',
    'width'=>376,
    'height'=> 212
    )));

    $wp_customize->add_setting('hclDigitalHack-fSection-slideshow-image3', array('default'=> 'wp-content/uploads/2019/10/cropped-seattle-banner-2-1.png'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-fslideshowImage3', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-fourthSection',
    'settings'=> 'hclDigitalHack-fSection-slideshow-image3',
    'width'=>376,
    'height'=> 212
    )));

    $wp_customize->add_setting('hclDigitalHack-fSection-slideshow-image4', array('default'=> 'wp-content/uploads/2019/10/cropped-seattle-banner-2-1.png'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-fslideshowImage4', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-fourthSection',
    'settings'=> 'hclDigitalHack-fSection-slideshow-image4',
    'width'=>376,
    'height'=> 212
    )));

    $wp_customize->add_setting('hclDigitalHack-fSection-slideshow-image5', array('default'=> 'wp-content/uploads/2019/10/cropped-seattle-banner-2-1.png'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-fslideshowImage5', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-fourthSection',
    'settings'=> 'hclDigitalHack-fSection-slideshow-image5',
    'width'=>376,
    'height'=> 212
    )));

    $wp_customize->add_setting('hclDigitalHack-fSection-slideshow-image6', array('default'=> 'wp-content/uploads/2019/10/cropped-seattle-banner-2-1.png'));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hclDigitalHack-fslideshowImage6', array(
    'label'=> 'Image',
    'section' => 'hclDigitalHack-fourthSection',
    'settings'=> 'hclDigitalHack-fSection-slideshow-image6',
    'width'=>376,
    'height'=> 212
    )));
}

add_action('customize_register','hackathonFourthSection');
?>