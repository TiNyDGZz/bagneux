<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
 
	<title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	

	
<script>

jQuery.noConflict();

jQuery(document).ready(function(){

jQuery(".element").bind("mouseover",function(){
		jQuery(".blanc",this).hide();
		jQuery(".color",this).show();
		jQuery(".lien",this).css('color','#528ac0');
		
	});
	jQuery(".element").bind("mouseout",function(){
		jQuery(".color",this).hide();
		jQuery(".blanc",this).show();
		jQuery(".lien",this).css('color','white');
	});

});

</script>
 
</head>
<body>
<!--<div id="bordure_gauche"><img src="wp-content/themes/montheme/images/trait_body_left.png"></div>
<div id="bordure_droite"><img src="wp-content/themes/montheme/images/trait_body_right.png"></div>-->
<div id="wrapper">

	<div id="header">

		



<a href="http://www.rqbagneux.fr/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" id="logo"></a>

<div id="access" role="navigation">
			  				

			
			<ul>
			
			<li class="element"><div class="blanc"><img src="<?php echo get_template_directory_uri(); ?>/images/prestations_blanc.png"></div>
			<div class="color"><img src="<?php echo get_template_directory_uri(); ?>/images/prestations.png"></div>
            <a class="lien" href="http://www.rqbagneux.fr/prestations/">PRESTATIONS</a>
            </li>
            <li class="element"><div class="blanc"><img src="<?php echo get_template_directory_uri(); ?>/images/insertion_blanc.png"></div>
            <div class="color"><img src="<?php echo get_template_directory_uri(); ?>/images/insertion.png"></div>
            <a class="lien" href="http://www.rqbagneux.fr/insertion/">INSERTION</a>
            </li>
			<li class="element"><div class="blanc"><img src="<?php echo get_template_directory_uri(); ?>/images/anim_blanc.png"></div>
			<div class="color"><img src="<?php echo get_template_directory_uri(); ?>/images/animation_final.png"></div>
            <a class="lien" href="http://www.rqbagneux.fr/animation/">ANIMATION</a>
            </li>
            <li class="element"><div class="blanc"><img src="<?php echo get_template_directory_uri(); ?>/images/apropos.png"></div>
            <div class="color"><img src="<?php echo get_template_directory_uri(); ?>/images/apropos_final.png"></div>
            <a class="lien" href="http://www.rqbagneux.fr/a-propos">À PROPOS</a>
            </li>
           
            <li class="element" id="recrutement"><div class="blanc"><img src="<?php echo get_template_directory_uri(); ?>/images/recrut_blanc.png"></div>
            <div class="color"><img src="<?php echo get_template_directory_uri(); ?>/images/cv_final.png"></div>
            <a class="lien" href="http://www.rqbagneux.fr/recrutement/">RECRUTEMENT</a></li>
	       
	            	
          </ul>
			
				</div><!-- #access -->

			

	</div><!--fin du header-->




				
				
