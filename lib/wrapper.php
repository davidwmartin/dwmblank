<?php
	# http://scribu.net/wordpress/theme-wrappers.html
	# License: Public Domain
	 
	function dwm_template_path() {
		return Dwm_Wrapping::$main_template;
	}
	 
	function dwm_template_base() {
		return Dwm_Wrapping::$base;
	}
	 
	class Dwm_Wrapping {
	 
		/**
		 * Stores the full path to the main template file
		 */
		static $main_template;
	 
		/**
		 * Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
		 */
		static $base;
	 
		static function wrap( $template ) {
			self::$main_template = $template;
	 
			self::$base = substr( basename( self::$main_template ), 0, -4 );
	 
			if ( 'index' == self::$base )
				self::$base = false;
	 
			$templates = array( 'base.php' );
	 
			if ( self::$base )
				array_unshift( $templates, sprintf( 'base-%s.php', self::$base ) );
	 
			return locate_template( $templates );
		}
	}
	 
	add_filter( 'template_include', array( 'Dwm_Wrapping', 'wrap' ), 99 );
?>