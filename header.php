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
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

        <header>
            <div class="mobileMenu">
                <i class="fas fa-bars"></i>
            </div>
        	<div class="container cols-8-16 cols-lg-6-12-6 cols-md-6-18 cols-sm">
        		<div class="col" id="logo">
            		<a href="<?php echo get_home_url(); ?>">
                       	<?php $logo = get_field("logo", "options");?>
                    	<img src="<?php echo $logo["url"];?>"/>
                    </a>
            	</div>
            	<div class="col nav">
            		<nav id="nav">
            			<?php
                            wp_nav_menu(array(
                            'theme_location'  => 'main-menu',
                            'container_class' => 'mainMenu',
                            ));
                        ?>
            		</nav>
					<?php if( have_rows('contact_info', 'options') ):
	            		while( have_rows('contact_info', 'options') ): the_row(); ?>
			            	<div class="hide-md">
			            		<div class="contact">
				                     <a href="tel:<?php the_sub_field("phone"); ?>"><?php the_sub_field("phone"); ?></a>
				                </div>
				            </div>
	                <?php endwhile; endif;?>
            	</div>
        	</div>
        </header>

		<main><!--closes in footer.php-->
