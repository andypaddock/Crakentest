<?php /** Header @package avoriazchalets */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $excerpt; ?>">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo the_title(); ?></title>

    <link rel="stylesheet" href="https://use.typekit.net/wox5jbn.css">
    <!--TYPEKIT INJECT-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

    <script src="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.css" rel="stylesheet" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site-wrapper">
        <header>
            <div class="container">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>" alt="Avoriaz Chalets Logo" title="Avoriaz Chalets Logo">
                        AVORIAZ <span>CHALETS</span>
                    </a>
                </div>

                <div class="nav nav__upper-section">
                    <?wp_nav_menu( array( 
						'theme_location' => 'upper-menu'
					) ); ?>
                </div>
                <div class="nav nav__lower-section">
                    <?wp_nav_menu( array( 
						'theme_location' => 'lower-menu'
					) ); ?>
                </div>
                <div class="mobile-booking">
                    <a href="/contact">Book Now</a>
                </div>
                <div id="menu-toggle">
                    <img src="<?php echo get_bloginfo('template_url') ?>/inc/img/navicon.svg" />

                </div>
            </div>
        </header>
        <!-- Mobile Menu Overlay -->
        <div id="mobileNav" class="overlay">
            <!-- Overlay content -->
            <div class="overlay-content">
                <?wp_nav_menu( array( 
						'theme_location' => 'mobile-menu'
					) ); ?>
                <div class="book-now">
                    <a href="/contact">Book Now</a>
                </div>
            </div>


        </div>


        <main>
            <?php if ( is_page_template( 'page-templates/home.php' ) ) {
			    get_template_part('template-parts/home-hero');
			} elseif ( is_singular( 'property' )) {
                get_template_part('template-parts/av-prop-hero');
                
			}  elseif ( is_singular( array('intproperty', 'holiday' ))) {
                get_template_part('template-parts/int-prop-hero');

            }  elseif ( is_singular('post')) {
                get_template_part('template-parts/news-hero');
                
			} else {
                get_template_part('template-parts/hero');
            }
            ?>