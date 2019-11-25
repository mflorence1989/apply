<?php
/**
 * @package WordPress
 */
if (empty($feed_url)) { $feed_url = get_bloginfo('rss2_url'); }
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Favicons
	================================================== -->
<?php
	$favicon = ''; $favicon = iwebtheme_smof_data('favicon');
	if (empty($favicon)) { ?>
	<link link rel="shortcut icon" href="<?php echo get_template_directory_uri().'/img/favicon.ico' ?>" />
<?php }	else { ?>
	<link rel="icon" type="image/png" href="<?php echo $favicon ?>" />
<?php } ?>
<!-- wp head -->
<?php
wp_head();
?>
<?php echo stripslashes(iwebtheme_smof_data('google_analytics')); ?>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

</head>

<body <?php body_class( 'body' ); ?>>

<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <a class="navbar-brand" href="<?php echo home_url(); ?>/">
											<?php
												$image = get_field('header_logo', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
										</a>

                </div>
                <div class="navbar-collapse collapse ">
                    <?php
						wp_nav_menu(array(
						'menu_class' => 'nav navbar-nav',
						'container' => false,
						'theme_location' => 'main',
						'fallback_cb' => 'false',
						'walker' => new wp_bootstrap_navwalker(),
						'depth' => 0
						));
						?>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
