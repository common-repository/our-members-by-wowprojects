<?php

/**
 * WOWProjects Our Members
 *
 * Registering team-member taxonomies.
 *
 * @package WordPress
 * @subpackage WOWProjects_Our_Members
 * @category Plugin
 * @author XicoOfficial
 * @since 1.0.0
 */

class WOWProjects_Our_Members_Taxonomy {

	function __construct() {
		add_action( 'init', array($this, 'cptui_register_my_taxes') );
	}

	function cptui_register_my_taxes() {
		$labels = array(
			"name" 					=> __( 'Types of services', 'our-members-by-wowprojects' ),
			"singular_name" 		=> __( 'Type of services', 'our-members-by-wowprojects' ),
			"menu_name" 			=> __( 'Types of Services', 'our-members-by-wowprojects' ),
			"all_items" 			=> __( 'All Types of Services', 'our-members-by-wowprojects' ),
			"edit_item" 			=> __( 'Edit Type of Services', 'our-members-by-wowprojects' ),
			"view_item" 			=> __( 'Vew Type of Services', 'our-members-by-wowprojects' ),
			"update_item" 			=> __( 'Update Type of Services Name', 'our-members-by-wowprojects' ),
			"add_new_item" 			=> __( 'Add New Type of Services', 'our-members-by-wowprojects' ),
			"new_item_name" 		=> __( 'New Type of Services Name', 'our-members-by-wowprojects' ),
			"parent_item" 			=> __( 'Parent Type of Services', 'our-members-by-wowprojects' ),
			"parent_item_colon" 	=> __( 'Parent Type of Services', 'our-members-by-wowprojects' ),
			"search_items" 			=> __( 'Search Types of Services', 'our-members-by-wowprojects' ),
			"popular_items" 		=> __( 'Popular Types of Services', 'our-members-by-wowprojects' ),
			"separate_items_with_commas" => __( 'Separate Types of Services with Commas', 'our-members-by-wowprojects' ),
			"add_or_remove_items" 	=> __( 'Add or Remove Types of Services', 'our-members-by-wowprojects' ),
			"choose_from_most_used" => __( 'Choose from the most used Types of Services', 'our-members-by-wowprojects' ),
			"not_found" 			=> __( 'No Types of Services found', 'our-members-by-wowprojects' ),
			"no_terms" 				=> __( 'No Types of Services', 'our-members-by-wowprojects' ),
			"items_list_navigation" => __( 'Types of Services list navigation', 'our-members-by-wowprojects' ),
			"items_list" 			=> __( 'Types of Services list', 'our-members-by-wowprojects' ),
			);

		$args = array(
			"label" 				=> __( 'Types of services', 'our-members-by-wowprojects' ),
			"labels" 				=> $labels,
			"public" 				=> true,
			"hierarchical" 			=> true,
			"label" 				=> "Types of services",
			"show_ui"				=> true,
			"show_in_menu" 			=> true,
			"show_in_nav_menus" 	=> true,
			"query_var" 			=> true,
			"rewrite" 				=> array( 'slug' => 'types_of_services', 'with_front' => true, ),
			"show_admin_column" 	=> false,
			"show_in_rest" 			=> false,
			"rest_base" 			=> "",
			"show_in_quick_edit" 	=> true,
		);
		register_taxonomy( "types_of_services", array( "member" ), $args );

	// End cptui_register_my_taxes()
	}

}

new WOWProjects_Our_Members_Taxonomy;