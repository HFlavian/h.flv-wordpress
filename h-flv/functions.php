<?php
//Titlu dinamic pentru pagina
function hflv_theme_support () {
add_theme_support ("title-tag");
add_theme_support ("custom-logo");
}

add_action ("after_setup_theme", "hflv_theme_support");

function hflv_menus(){
	$location = array(
		"primary" => "Top Bar Menu"
	);
	register_nav_menus($location);
}

add_action("init", "hflv_menus");


function hflv_register_styles() {
//$version pentru preluarea versiunii temei din style.css
	$version = wp_get_theme()->get( "Version" );
	wp_enqueue_style("hflv-style", get_template_directory_uri() . "/style.css", array("hflv-bootstrap"), $version, "all" );
	wp_enqueue_style("hflv-bootstrap", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", array(), "4.1.3", "all" );
	wp_enqueue_style("hflv-fontawesome", "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), "4.7.0", "all" );
}
add_action( "wp_enqueue_scripts", "hflv_register_styles");

function hflv_register_scripts() {
	wp_enqueue_script("hflv-bootstratjs", "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js", array(), "4.1.3", true);
	wp_enqueue_script("hflv-scriptmain",  get_template_directory_uri() . "/js/main.js", array(), true);


}
add_action( "wp_enqueue_scripts", "hflv_register_scripts");

 ?>
