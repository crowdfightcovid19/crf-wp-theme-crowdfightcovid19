<?php
/**
 * Defines the header for the theme
 *
 * @since 0.0.1
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		
		<?php // Norton (antivirus) site verification ?>
		<meta name="norton-safeweb-site-verification" content="4c4ffl5gzgv9pbasxb265kvjekhl18u03dm1l-f-uqbnj5xhg4ryycwfyuz9qwpjsf6mmm086ogijy5qpaenid8zjsih3giya45ju5vbprb0gj19acc8gozjmedohie8" />

        <?php // Bootstrap 4 CSS from CDN ?>
        <link   rel="stylesheet" 
                href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
                integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
                crossorigin="anonymous">

		<?php // jQuery NOT SLIM (we need AJAX) ?>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"
				integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
				crossorigin="anonymous">
		</script>

		<?php // MailerLite ?>
		<script>
			(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
			var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
			f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
			var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
			_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');
			var ml_account = ml('accounts', '1932420', 'f8d4p0r8d6', 'load');
		</script>

		<?php wp_head(); ?>	

	</head>

	<body <?php body_class(); ?>>

		<header id="cfct-site-header" class="container-fluid" role="banner">
			
			<div id="cfct-logo-container" class="row justify-content-center pt-5 pb-5">
				<div id="cfct-logo" class="col-8 col-md-6">
					<a href="https://crowdfightcovid19.org">
						<img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Crowdfight COVID-19 Logo">
					</a>
				</div>
			</div>
			
			<?php if(has_nav_menu('header-menu')): ?>
				<div id="cfct-menu-container" class="row justify-content-center pt-5 pb-5">
					<nav id="cfct-menu" class="col text-center">
						<?php	
							wp_nav_menu(array(
								'walker' => new CFCT_Header_Nav_Walker(), 
								'theme_location' => 'header-menu'
							));
						?>
					</nav>
				</div>
			<?php endif; ?>
<!-- 
			<div id="cfct-message-container" class="row justify-content-center mb-5">
				<div id="cfct-message" class="col-10 p-2">
					<p class="mt-0">
						<strong>NOTE:</strong> we in CrowdFight COVID-19 are working against the clock to migrate all our website to a new server,
						creating WordPress plugins, developing code for our new theme and more great things that are to come!
					</p>
					<p>
						Please, understand we are all volunteers working hard to have a great platform for everyone, so you might see weird stuff
						going on in the next few days. Thanks for your understanding! :)
					</p>
					<p class="mb-0">
						By the way, we will release open source code in the following days/weeks, so stay tuned!
					</p>
				</div>
			</div>
-->
		</header>
