<?php
// Register widget area
add_action( 'widgets_init', 'flixita_widgets_init' );
function flixita_widgets_init() {
	
	// Sidebar Widget
	register_sidebar( 
		array(
			'name' => __( 'Main Sidebar Widget', 'flixita' ),
			'id' => 'sidebar-primary',
			'description' => __( 'Main Sidebar Widget', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 1
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 1', 'flixita' ),
			'id' => 'footer-sidebar-1',
			'description' => __( 'The Footer Widget Area 1', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 2
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 2', 'flixita' ),
			'id' => 'footer-sidebar-2',
			'description' => __( 'The Footer Widget Area 2', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);
	
	// Footer Sidebar 3
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 3', 'flixita' ),
			'id' => 'footer-sidebar-3',
			'description' => __( 'The Footer Widget Area 3', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		)
	);
	
	// Footer Sidebar 4
	register_sidebar( 
		array(
			'name' => __( 'Footer  Sidebar 4', 'flixita' ),
			'id' => 'footer-sidebar-4',
			'description' => __( 'The Footer Widget Area 4', 'flixita' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) 
	);

	// WooCommerce Sidebar
	if ( class_exists( 'WooCommerce' ) ) {
		register_sidebar( 
			array(
				'name' => __( 'WooCommerce Sidebar', 'flixita' ),
				'id' => 'sidebar-woocommerce',
				'description' => __( 'This Widget area for WooCommerce Widget', 'flixita' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h5 class="widget-title">',
				'after_title' => '</h5>',
			) 
		);
	}
}