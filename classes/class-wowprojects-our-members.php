<?php

/**
 * WOWProjects Our Members
 *
 * All functionality pertaining to the Our Members feature.
 *
 * @package WordPress
 * @subpackage WOWProjects_Our_Members
 * @category Plugin
 * @author XicoOfficial
 * @since 1.0.0
 */


class WOWProjects_Our_Members_Post_Type {

	function __construct() {
		add_action( 'init', array($this, 'wds_om_register_cpt') );	
	}
	
	function wds_om_register_cpt() {
		$labels = array(
			"name" 					=> __( 'Members', 'our-members-by-wowprojects' ),
			"singular_name" 		=> __( 'Member', 'our-members-by-wowprojects' ),
			"menu_name"				=> __( 'Our Members', 'our-members-by-wowprojects' ),
			"all_items" 			=> __( 'All Members', 'our-members-by-wowprojects' ),
			"add_new" 				=> __( 'Add New', 'our-members-by-wowprojects' ),
			"add_new_item" 			=> __( 'Add New Member', 'our-members-by-wowprojects' ),
			"edit_item" 			=> __( 'Edit Member', 'our-members-by-wowprojects' ),
			"new_item" 				=> __( 'New Member', 'our-members-by-wowprojects' ),
			"view_item" 			=> __( 'New Member', 'our-members-by-wowprojects' ),
			"search_items" 			=> __( 'Search for a Member', 'our-members-by-wowprojects' ),
			"not_found"	 			=> __( 'No Members Found', 'our-members-by-wowprojects' ),
			"not_found_in_trash"	=> __( 'No Members Found in Trash', 'our-members-by-wowprojects' ),
			"parent_item_colon"		=> __( 'Parent Member', 'our-members-by-wowprojects' ),
			"featured_image" 		=> __( 'Feature image for this member', 'our-members-by-wowprojects' ),
			"set_featured_image" 	=> __( 'Set feature image for this member', 'our-members-by-wowprojects' ),
			"remove_featured_image" => __( 'Remove feature image for this member', 'our-members-by-wowprojects' ),
			"use_featured_image" 	=> __( 'Use as feature image for this member', 'our-members-by-wowprojects' ),
			"archives" 				=> __( 'Member archives', 'our-members-by-wowprojects' ),
			"insert_into_item" 		=> __( 'Insert into member', 'our-members-by-wowprojects' ),
			"uploaded_to_this_item" => __( 'Uploaded to this member', 'our-members-by-wowprojects' ),
			"filter_items_list" 	=> __( 'Filter members list', 'our-members-by-wowprojects' ),
			"items_list_navigation" => __( 'Member list navigation', 'our-members-by-wowprojects' ),
			"items_list" 			=> __( 'Members list', 'our-members-by-wowprojects' ),
			"parent_item_colon" 	=> __( 'Parent Member', 'our-members-by-wowprojects' ),
			);

		$args = array(
			"label" 				=> __( 'Members', 'our-members-by-wowprojects' ),
			"labels"				=> $labels,
			"description" 			=> "This post type is used for registering the members of a membership based organization.",
			"public" 				=> true,
			"publicly_queryable" 	=> true,
			"show_ui" 				=> true,
			"show_in_rest" 			=> false,
			"rest_base" 			=> "member",
			"has_archive" 			=> true,
			"show_in_menu" 			=> true,
			"exclude_from_search" 	=> false,
			"capability_type" 		=> "post",
			"map_meta_cap" 			=> true,
			"hierarchical" 			=> false,
			"rewrite" 				=> array( "slug" => "member", "with_front" => true ),
			"query_var" 			=> true,
			"menu_position" 		=> 7,"menu_icon" => "dashicons-image-filter",
			"supports" 				=> array( "title", "editor", "thumbnail", "excerpt", "revisions", "page-attributes" ),		
			"taxonomies" 			=> array( "service" ),
				);
		register_post_type( "member", $args );

	// End of wds_om_register_cpt()
	}
}

new WOWProjects_Our_Members_Post_Type;

