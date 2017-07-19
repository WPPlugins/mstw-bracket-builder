<?php
/**
 * MSTW League Manager single tournament template.
 *
 * NOTE: Plugin users/site admins may have to modify this template to fit their 
 * individual themes. This template has been tested in the WordPress 
 * Twenty Eleven and Twenty Twelve themes.
 *
 *	MSTW Wordpress Plugins (http://shoalsummitsolutions.com)
 *	Copyright 2016-17 Mark O'Donnell (mark@shoalsummitsolutions.com)
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU General Public License as published by
 *	the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.

 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *	GNU General Public License for details. <http://www.gnu.org/licenses/>
 *-------------------------------------------------------------------------*/
 ?>

<?php get_header(); ?>

<div id="primary">
 <div id="content" role="main">
 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php 
	// get the games in the tourney
	$tourney_slug = basename( get_permalink( ) );
	
	if ( '' != $tourney_slug ) {
		echo do_shortcode( '[mstw_tourney_table tourney="' . $tourney_slug . '"]' );
		
	} else {
		echo "<h1>";
		_e( 'No tourney slug found.', 'mstw_bracket_builder' );
		echo "</h1>";
		
	}
	?>

	</article> <!-- #post-<?php the_ID(); ?> -->



 </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer();?>