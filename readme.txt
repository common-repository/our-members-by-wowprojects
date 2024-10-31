=== Our Members by WOWProjects ===
Contributors: XicoOfficial, wowprojectsco
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XKF74JDZ5HFWW
Tags: members, company members, member category, widget, organization members, merbership,
Requires at least: 3.8
Tested up to: 4.9
Stable tag: 1.2.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin registers the 'member' post type, it let's you manage your company member profiles.

== Description ==

= Organization Members Management =

"Our Members by WOWProjects" is a clean and easy-to-use organization members management system for WordPress. Load in your members and display them on a page as posts, with their own categories.

= Support =

Looking for a helping hand? [View plugin documentation](https://github.com/WOWProjectsco/wp-our-members/wiki/).

= Get Involved =

Looking to contribute code to this plugin? Go ahead and [fork the repository over at GitHub](https://github.com/WOWProjectsco/wp-our-members).
(submit pull requests to the latest "release-" tag)

== Usage ==

To display your organization members via a theme or a custom plugin, please use the following code:

Define your custom post type name in the arguments

`$args = array('post_type' => 'members');`

Define the loop based on arguments

`$loop = new WP_Query( $args );`
 Display the contents


== Usage Examples ==

`<?php
$args = array('post_type' => 'members');
$loop = new WP_Query( $args );

while ( $loop->have_posts() ) : $loop->the_post();
?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php the_content(); ?>
</div>
<?php endwhile;?>`

== Installation ==

Installing "Our Members by WOWProjects" can be done either by searching for "Our Members by WOWProjects" via the "Plugins > Add New" screen in your WordPress dashboard, or by using the following steps:

1. Download the plugin via WordPress.org.
1. Upload the ZIP file through the "Plugins > Add New > Upload" screen in your WordPress dashboard.
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= The plugin looks unstyled when I activate it. Why is this? =

"Our Members by WOWProjects" is a lean plugin that aims to keep it's purpose as clean and clear as possible. Thus, we don't load any preset CSS styling, to allow full control over the styling within your theme or child theme.
You can add a basic styling by coping and pasting the following code into your style.css on your theme. [css code](https://gist.github.com/xicoofficial/787efa55ca947fa2a51bad19b01bf89d).

= How do I contribute? =

We encourage everyone to contribute their ideas, thoughts and code snippets. This can be done by forking the [repository over at GitHub](https://github.com/WOWProjectsco/wp-our-members).

== Screenshots ==

1. The organization member management screen within the WordPress admin.

2. The organization members options on the settings menu.

3. The organization members posted.

== Changelog ==

= 1.2.0 =
Update Deprecated Functions

= 1.1.0 =
Add support for a header image.

= 1.0.0 =
* Initial release. Yeah!


== Upgrade Notice ==

= 1.2.0 =
* Update Deprecated Functions

= 1.1.0 =
* Add support for a header image

= 1.0.0 =
* Initial release. Yeah!

