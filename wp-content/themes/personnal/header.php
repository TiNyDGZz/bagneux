<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="utf-8"/>

			<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css"/>
	</head>
	<body>
	
	
	<div id="wrapper">
			<div id="header">
				
				
				
					<!--
<li id="link1" class="selected"><a href="index.html">Home</a></li>
					<li id="link2"><a href="zoo.html">The Zoo</a></li>
					<li id="link3"><a href="info.html">Visitors Info</a></li>
					<li id="link4"><a href="tickets.html">Tickets</a></li>
					<li id="link5"><a href="events.html">Events</a></li>
					<li id="link6"><a href="gallery.html">Gallery</a></li>
					<li id="link7"><a href="contact.html">Contact Us</a></li>
-->
				
				<div id="access">
			  				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>
				</div>
		   
		   	<div id="main">
				
				
