<?php
/*
Plugin Name: √ Disable Frontend Admin Bar and ToolBar
Plugin URI: http://slangji.wordpress.com/toolbar-removal-completely-disable/
Description: &#9733;&#9733;&#9733; Disable (basic) WordPress 3.1+ (or later) Admin Bar, and WordPress 3.3+ (or later) ToolBar, Frontend, only. This is only a "basic" frontend removal. For "full" frontend and backend removal refer to <a href="http://wordpress.org/plugins/wp-admin-bar-removal/" title="Completely Remove Admin Bar Frontend Backend and related Code">Admin Bar Removal?</a> with Add-On and <a href="http://wordpress.org/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Node Group and Top Dasboard Links Alone">Admin Bar Node Removal?</a> and to <a href="http://wordpress.org/plugins/wp-toolbar-removal/" title="Completely Remove ToolBar Frontend Backend and related Code">ToolBar Removal?</a> with Add-On <a href="http://wordpress.org/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Node Group and Top Dasboard Links Alone">ToolBar Node Removal?</a>
Version: 2013.0613.0448
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 3.1
Tested up to: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU style
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * Disable Frontend Admin Bar and ToolBar - Disable (basic) WordPress 3.1+ (or later) Admin Bar, and WordPress 3.3+ (or later) ToolBar, Frontend (only).
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
 */

/**
 * @package Disable Frontend Admin Bar and ToolBar
 * @subpackage WordPress PlugIn
 * @since 3.1.0
 * @version 2013.0613.0448
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

	show_admin_bar( false );
	show_tool_bar( false );
	show_toolbar( false );

	function wp_admin_tool_bar_init()
		{
			add_filter( 'show_admin_bar', '__return_false' );
			add_filter( 'wp_admin_bar_class', '__return_false' );
			add_filter( 'show_tool_bar', '__return_false' );
			add_filter( 'wp_tool_bar_class', '__return_false' );
			add_filter( 'show_toolbar', '__return_false' );
			add_filter( 'wp_toolbar_class', '__return_false' );
		}
	add_filter( 'init', 'wp_admin_tool_bar_init', 9 );

function wp_trcd_log()
	{
		echo "\n<!--Plugin Toolbar Removal Completely Disable 2013.0613.0448 Active-->\n\n";
	}
add_action( 'wp_head', 'wp_trcd_log' );
add_action( 'wp_footer', 'wp_trcd_log' );

?>