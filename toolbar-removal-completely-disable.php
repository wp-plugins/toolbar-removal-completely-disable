<?php

/*
Plugin Name: √ Disable Admin Bar and ToolBar
Plugin URI: http://slangji.wordpress.com/toolbar-removal-completely-disable/
Description: &#9733;&#9733;&#9733;&#9733;&#9733; Disable (basic) WordPress 3.1+ (or later) Admin Bar, and WordPress 3.3+ (or later) ToolBar. This is only a "basic" removal. For "full" removal refer to <a href="http://wordpress.org/plugins/wp-admin-bar-removal/" title="Completely Remove Admin Bar Frontend Backend and related Code">Admin Bar Removal</a> with Add-On and <a href="http://wordpress.org/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Node Group and Top Dasboard Links Alone">Admin Bar Node Removal</a> and to <a href="http://wordpress.org/plugins/wp-toolbar-removal/" title="Completely Remove ToolBar Frontend Backend and related Code">ToolBar Removal</a> with Add-On <a href="http://wordpress.org/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Node Group and Top Dasboard Links Alone">ToolBar Node Removal</a>  The configuration of this plugin is Automattic! Work under <a href="http://www.gnu.org/licenses/gpl-2.0.html" title"GPLv2 or later License compatible">GPLv2</a> or later License. <a href="http://www.gnu.org/prep/standards/standards.html" title"GNU Style indentation coding standard compatible">GNU Style</a> indentation compatible. Meet detailed [Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) quality requirements. | <a href="http://slangji.wordpress.com/donate/" title="Free Donation">Donate</a> | <a href="http://slangji.wordpress.com/contact/" title="Send Me Bug and Suggestion">Contact</a>
Version: 2013.0614.0504
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 3.1
Tested up to: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * [Disable Admin Bar and ToolBar](http://wordpress.org/plugins/toolbar-removal-completely-disable/) - Disable (basic) WordPress 3.1+ (or later) Admin Bar, and WordPress 3.3+ (or later) ToolBar.
 *
 * Please Noted That:
 * For Completely Backend Removal is needed on WordPress 3.1+ (or later) [WP Admin Bar Removal](http://wordpress.org/plugins/wp-admin-bar-removal/)
 * Try also your Add-On [WP Admin Bar Removal Node](http://wordpress.org/plugins/wp-admin-bar-node-removal/)
 * For Completely Backend Removal is needed on WordPress 3.3+ (or later) [WP ToolBar Removal](http://wordpress.org/plugins/wp-toolbar-removal/)
 * Try also your Add-On [WP ToolBar Removal Node](http://wordpress.org/plugins/wp-toolbar-node-removal/)
 *
 * Copyright (C) 2011-2013 [sLaNGjI's](http://slangji.wordpress.com/slangjis/) (email: <slangji[at]gmail[dot]com>)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](http://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * √ DISCLAIMER
 *
 * The license under which the WordPress software is released is the GPLv2 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
 *
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VIOLATIONS
 *
 * [Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ THANKS
 * Greetings to [storkontheroof](http://profiles.wordpress.org/storkontheroof/) for this class trick: add_filter( 'wp_admin_bar_class', '__return_false' );
 */

	/**
	 * @package Disable Admin Bar and ToolBar
	 * @subpackage WordPress PlugIn
	 * @description Disable WP 3.1+ Admin Bar and WP 3.3+ ToolBar
	 * @since 3.1.0
	 * @tested 3.6.0
	 * @version 2013.0614.0504
	 * @status STABLE release
	 * @author sLa
	 * @license GPLv2 or later
	 * @indentation GNU style
	 */

	if ( !function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'Status: 403 Forbidden' );
			header( 'Connection: Close' );
				exit();
		}

	function wptrcd_rbbcb()
		{
			if ( has_filter( 'wp_head', '_admin_bar_bump_cb' ) )
				{
					remove_filter( 'wp_head', '_admin_bar_bump_cb' );
				}
		}
	add_filter('wp_head', 'wptrcd_rbbcb', 1);

	function wptrcd_rbmse()
		{
			echo '<style type="text/css">#adminmenushadow,#adminmenuback{background-image:none}</style>';
		}
	add_action('admin_head', 'wptrcd_rbmse');
	
	function wptrcd_rbwog()
		{
			echo '<style type="text/css">html.wp-toolbar,html.wp-toolbar #wpcontent,html.wp-toolbar #adminmenu,html.wp-toolbar #wpadminbar,body.admin-bar,body.admin-bar #wpcontent,body.admin-bar #adminmenu,body.admin-bar #wpadminbar{padding-top:0px !important}</style>';
		}
	add_action('admin_print_styles', 'wptrcd_rbwog', 21);

	function wptrcd_ablhdr()
		{
?>
<style type="text/css">table#wptbr td#wptbr_ttl a:link,table#wptbr td#wptbr_ttl a:visited{text-decoration:none}table#wptbr td#wptbr_lgt,table#wptbr td#wptbr_lgt a{text-decoration:none}</style><table style="margin-left:6px;float:left;z-index:100;position:relative;left:0px;top:0px;background:none;padding:0px;border:0px;border-bottom:1px solid #DFDFDF" id="wptbr" border=0 cols=4 width="97%" height="33"><tr><td align=left valign=center id="wptbr_ttl">
<?php
			echo '<a href="' . home_url() . '">' . __(get_bloginfo()) . '</a>';
?>
</td><td align=right valign=center id="wptbr_lgt"><div style="padding-top:2px">
<?php if(function_exists('sLa_pml')){echo (sLa_pml() . 'M - ');}?> <?php if(function_exists('sLa_pcl')){echo (sLa_pcl() . ' | ');}?> <?php echo date('l j F Y @ H:i')?>
<?php
			wp_get_current_user();
			$current_user = wp_get_current_user();
			if (!($current_user instanceof WP_User))
					return;
			echo ' | ' . $current_user->display_name . '';
?>
<?php
			if (is_multisite() && is_super_admin())
				{
					if (!is_network_admin())
						{
							echo ' | <a href="' . network_admin_url() . '">' . __('Network Admin') . '</a>';
						}
					else
						{
							echo ' | <a href="' . get_dashboard_url(get_current_user_id()) . '">' . __('Site Admin') . '</a>';
						}
				}
?>
<?php
			echo ' | <a href="' . wp_logout_url(home_url()) . '">' . __('Log Out') . '</a>';
?>
</div></td><td width="8"></td></tr></table>
<?php
		}

	global $wp_version;

	if ( $wp_version >= 3.3 )
		{
			add_action( 'in_admin_header', 'wptrcd_ablhdr' );
		}

	function wp_admin_tool_bar_init()
		{
			add_filter( 'wp_admin_bar_class', '__return_false' );
			add_filter( 'show_wp_pointer_admin_bar', '__return_false' );
		}
	add_filter( 'init', 'wp_admin_tool_bar_init', 9 );

	function wptrcd_ruppoabpc()
		{
			echo '<style type="text/css">.show-admin-bar{display:none}</style>';
		}
	add_action('admin_print_styles-profile.php', 'wptrcd_ruppoabpc');

	function wptrcd_hflog()
		{
			echo "\n<!--Plugin Disable Admin Bar and ToolBar 2013.0614.0504 Active-->\n\n";
		}
	add_action( 'wp_head', 'wptrcd_hflog' );
	add_action( 'wp_footer', 'wptrcd_hflog' );

?>