<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// Texto del copyright del footer
function wp_shortcode_copyright(){
	
	if(date("Y") > 2018){
		$my_year = "2018-".date("Y");
	}
	else{
		$my_year = date("Y");
	}
	
	echo '<div id="my_copyright" style="text-align: center;color: gray;">© '.$my_year.' Club Avila | Sitio web desarrollado por <a href="https://joaodemedeiros.com/" target="_blank">Joao de Medeiros</a></div>';
}
add_shortcode('my_copyright', 'wp_shortcode_copyright');
