<?php
/**
 * Header
 *
 * @package rossross
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Ross & Ross</title>

<link rel="stylesheet" href="https://use.typekit.net/axv0hre.css"><!--TYPEKIT INJECT-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css"/>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.0/mapbox-gl-geocoder.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

        <header>
            <div class="mobileMenu">
                <i class="fas fa-bars"></i>
            </div>
        	<div class="container cols-10-10-4 cols-lg-6-12-6 cols-md-6-18 cols-sm">
        		<div class="col" id="logo">
            		<a href="<?php echo get_home_url(); ?>"><span style="font-size:2rem;">logo</span></a>
            	</div>
            	<div class="col">
            		<nav id="nav">
            			<?php
                            wp_nav_menu(array(
                            'theme_location'  => 'main-menu',
                            'container_class' => 'mainMenu',
                            ));
                        ?>
            		</nav>
            	</div>
            	<?php if( have_rows('contact_info', 'options') ):
            		while( have_rows('contact_info', 'options') ): the_row(); ?>
		            	<div class="col hide-md">
		            		<div class="contact">
			                     <a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
			                </div>
			            </div>
                <?php endwhile; endif;?>
        	</div>
        </header>

		<main><!--closes in footer.php-->
