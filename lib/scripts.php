<?php	
	#jQuery include
	if (!is_admin()) {
		function my_jquery_enqueue() {
		   wp_deregister_script('jquery');
		   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", false, null);
		   wp_enqueue_script('jquery');
		};
		add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
	}

	#Loads Concatenated JS file
	wp_register_script('theme_scripts', get_template_directory_uri() . '/lib/theme.js', array(), null, true);

	wp_enqueue_script('theme_scripts');
?>