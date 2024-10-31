<?php

/**
* Plugin Name: Our Members
* Plugin URI: http://wowprojects.co
* Description: This plugin registers the 'member' post type, it let's you manage your company partner profiles.
* Author: XicoOfficial
* Version: 1.2.0
* License: GPLv2
* Author URI: http://wowprojects.co
* Text Domain: our-members-by-wowprojects
* Domain Path: /languages/
*
* @package WordPress
* @subpackage WOWProjects_Our_Members
* @author XicoOfficial
* @since 1.0.0
*/

require_once( 'classes/class-wowprojects-our-members.php' );
require_once( 'classes/class-wowprojects-our-members-taxonomy.php' );
require_once( 'classes/class-wowprojects-our-members-additional-fields.php' );

/**
 * Tell WordPress to load a translation file if it exists for the user's language
 */
function wds_om_load_plugin_textdomain() {
    load_plugin_textdomain( 'our-nenbers-by-wowprojects', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'wds_om_load_plugin_textdomain' );





/**
 * Checks if there are no defined single and archive templates
 * for the 'Member' custom post type on the theme, and if not
 * use the ones defined inseide de plugin.
 * @param  String $template_path url of the template
 * @since 1.0.0
 */
function wds_our_members_include_template_function( $template_path ) {
    if ( get_post_type() == 'member' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-member.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/includes/single-member.php';
            }
        }
    }
    return $template_path;
}

add_filter( 'template_include', 'wds_our_members_include_template_function', 1 );
