<?php
/*
Plugin Name: Disable WordPress ToolBar
Plugin URI: http://slangji.wordpress.com/toolbar-removal-completely-disable/
Description: Disable new WordPress 3.3+ and later ToolBar Frontend.
Version: 2011.1212.2011
Author: sLa
Author URI: http://slangji.wordpress.com/
Requires at least: 3.3
Tested up to: 3.8
License: GPLv2 (or later)
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Indentation: GNU (style coding standard)
Indentation URI: http://www.gnu.org/prep/standards/standards.html
 *
 * Disable WordPress ToolBar - Disable new WordPress 3.3+ and later ToolBar Frontend.
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
 * This software meet [Detailed Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ CODING
 *
 * This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 *
 * √ VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/extend/plugins/about/validator/) directives.
 * The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
 */
/**
 * @package sLa2sLaNGjIs
 * @subpackage WordPress PlugIn
 * @since 3.3.0
 * @version 2011.1212.2011
 * @status STABLE (release)
 * @author sLa
 * @license GPLv2 (or later)
 * @indentation GNU (style coding standard)
 */
	if (!function_exists('add_action'))
		{
			header('HTTP/1.0 403 Forbidden');
			header('HTTP/1.1 403 Forbidden');
			exit();
		}
	show_admin_bar(false);
	function admin_toolbar_init()
		{
			add_filter('show_admin_bar', '__return_false');
		}
	add_filter('init', 'admin_toolbar_init', 9);
?>
