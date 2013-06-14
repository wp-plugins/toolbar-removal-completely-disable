=== √ Disable Admin Bar and ToolBar ===
Contributors: sLaNGjI
Donate link: http://slangji.wordpress.com/donate/
Tags: disable,wordpress,admin,bar,toolbar,frontend,backend,bumpcb,pointer,shaddow,sLa,plugin
Stable tag: 2013.0613.0448
Requires at least: 3.1
Tested up to: 3.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
&#9733;&#9733;&#9733;&#9733;&#9733; Disable (basic) WordPress 3.1+ Admin Bar and WordPress 3.3+ ToolBar (or later) Bump CB, Shaddow Effect, Pointers, User Options. Add Logout.
== Description ==
Disable (basic) WordPress 3.1+ (or later) Admin Bar, and WordPress 3.3+ (or later) ToolBar, Bump CB, Shaddow Effect, Pointers, User Options, without loosing Logout functionality! This is only a "basic" removal. For "full" removal refer to <a href="http://wordpress.org/plugins/wp-admin-bar-removal/" title="Completely Remove Admin Bar Frontend Backend and related Code">Admin Bar Removal?</a> with Add-On and <a href="http://wordpress.org/plugins/wp-admin-bar-node-removal/" title="Remove Admin Bar Node Group and Top Dasboard Links Alone">Admin Bar Node Removal?</a> and to <a href="http://wordpress.org/plugins/wp-toolbar-removal/" title="Completely Remove ToolBar Frontend Backend and related Code">ToolBar Removal?</a> with Add-On <a href="http://wordpress.org/plugins/wp-toolbar-node-removal/" title="Remove ToolBar Node Group and Top Dasboard Links Alone">ToolBar Node Removal?</a>

Features:

1. Remove Frontend Bump CB
1. Remove Backend DashBoard Admin Menu Shaddow Effect
1. Remove Backend DashBoard Admin Menu Pointers Function
1. Remove Backend "gap" on top of Admin DashBoard for WP 3.3+ or later
1. Remove Backend DashBoard User Option "Show Admin Bar/Toolbar" Choice
1. Add logout functionality on top of Admin DashBoard for WP 3.3+ or later
1. Add Header and Footer Log
`
 * Less Plugin Memory Consumption.
 * Full Strict Security Rules Applied.
 * Handy Syntax Improvement.
 * Reduce Code Bloat.
 * Code Cleanup for faster loading.
 * Only one unique PHP file.
 * Supports PHP 4 and PHP 5.
 * Ready to Single and Network Multisite Environment.
 * Compatible with Shared, Dedicated, Cloud and VPS Hosting.
 * Run on Hosting with high and low resources.
 * Nothing is written into space disk.
 * Nothing is written into wp_option database table.
`
1. Compatible with: WordPress, bbPress, Buddypress.
1. Unified Code to run with WordPress 3.1 to 3.6 or later
1. Work under [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later License.
1. Implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
1. Meet detailed [Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) quality requirements.
= Thanks =
Greetings to [storkontheroof](http://profiles.wordpress.org/storkontheroof/) for this class trick: add_filter( 'wp_admin_bar_class', '__return_false' );
== Installation ==
= Plugin Installation =
1. Upload this plugin to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
= Installation Trick =
A neat trick is to put this single file (not its parent directory) in the wp-content/mu-plugins directory (create it if not exists) so you won't even have to enable it, it will be loaded by default.
== Frequently Asked Questions ==
= [Goodbye Admin Bar, Hello Toolbar](http://digwp.com/2012/01/goodbye-admin-bar-hello-toolbar/) =
Posted on: January 13, 2012 by Jeff Starr

When the Admin Bar hit the streets in WordPress 3.1, people seemed to either love it or hate it. And rightly so, it was a significant change in the appearance of the WP Admin area, and if not disabled in your User Profile, the front-end of your site as well. Many tips, tricks and plugins for customizing the Admin Bar began appearing around the Web. And then just as the dust began to settle, BAM — the “Admin Bar” transforms into the “Toolbar” with the WordPress 3.3 update.

The WordPress 3.3 update focused heavily on streamlining and optimizing the Admin experience. The Admin Bar of WP 3.1 was intended as the “first step toward a front-end editor”. The original Admin Bar was debated for several good reasons:

    It’s enabled on the front-end by default
    Gobbles up too much vertical screen space
    It’s redundant, all links available elsewhere
    It’s not visually appealing in general

Using the many Admin Bar tricks that became available around the Web, WordPress users dealt with the thing in their own way and moved on with their lives. Some use plugins, some custom snippets & scripts, some just love it as-is. But now with the new 3.3 update, the big question is “what works and what doesn’t?” We’re glad you asked..
Admin Bar is dead, long live the Toolbar

If you’ve updated to WP 3.3, you’ve seen the smaller “Toolbar” tucked neat above the Admin area. The new Admin Bar Toolbar seems to address some of the main concerns about the old Admin Bar:

    No longer enabled on front-end by default
    Uses less vertical screen space
    Integrates the Admin header area, so no longer redundant
    It looks a little better (in my opinion)

For those who have not yet updated or have no idea what’s going on, here is a visual comparison of the old “Admin Bar” and the new “Toolbar”:

The new Toolbar certainly looks better, but concerns remain. From what I’ve gathered, the main gripe is that the Toolbar is mandatory, and possibly still redundant, depending on site setup and configuration (plugins, networks, etc.). Is it really mandatory? That sounds silly to me, but seems to be the case:

So yeah, something changed, so the question for the Admin Toolbar is “what works and what doesn’t?” Let’s dig in and see what’s up..
Admin Bar changes, now WP Toolbar

As [Ipstenu puts it](http://wordpress.org/support/topic/hiding-admin-bar-in-wordpress-33#post-2495448): “You don’t have to like it, but it’s here to stay.” So it’s time to look at things practically and get on with it. First of all, if you have a plugin or functions script that hides, removes, or customizes the Admin Bar, definitely investigate to see if everything is still working according to plan.
What works..

After some testing, we’ve seen the following functions.php snippets continue to work in WordPress version 3.3:

// disable the admin bar (front end only) show_admin_bar(false); // disable the admin bar (front end only) add_filter('show_admin_bar', '__return_false');

In WP 3.1, these functions hid the Admin Bar on both sides of the fence — front end & back end. In WP 3.3+, these snippets will hide the Admin Toolbar only on the front-end of your site (the public side). Likewise, this snippet of CSS added to your theme’s style.css file hides the Toolbar on the front-end:

/* hide the admin bar (front end only) */ #wpadminbar { display:none; }

Keep in mind that, when using the CSS method, the Toolbar markup is still present in the source code, but will not be displayed in the browser.

Here is another useful snippet for disabling the Toolbar for lesser users:

// show admin bar only for admins if (!current_user_can('manage_options')) { add_filter('show_admin_bar', '__return_false'); } // show admin bar only for admins and editors if (!current_user_can('edit_posts')) { add_filter('show_admin_bar', '__return_false'); }

Note that this also only applies to Toolbar display on the front-end.
What doesn’t work..

Basically the show_admin_bar() function seems to work as it did before version 3.3, except that now the Toolbar is integral to the Admin area, so disabling it using the previous functions works only on the front-end of your site. So tricks like this stopped working:

If you’re running WP 3.1+ or 3.2+ (not 3.3+), then show_admin_bar() will continue to disable the Admin Bar on both front and back ends of WordPress.

To be continued..

Without a doubt things will continue to change, and it’ll be fun watching as WordPress continues to evolve, Toolbar and all :)

= A brief Markdown Example =

Ordered list:

1. Some feature
1. Another feature
1. Something else about the plugin

Unordered list:

* something
* something else
* third thing

Here's a link to [WordPress](http://wordpress.org/ "Your favorite software") and one to [Markdown's Syntax Documentation][markdown syntax].
Titles are optional, naturally.

[markdown syntax]: http://daringfireball.net/projects/markdown/syntax
            "Markdown is what the parser uses to process much of the readme file"

Markdown uses email style notation for blockquotes and I've been told:
> Asterisks for *emphasis*. Double it up  for **strong**.

`<?php code(); // goes in backticks ?>`
== Screenshots ==
= Plugin Screenshots =
[ The 'old' WP Admin Bar ]
Admin Bar: bigger, clunkier, and redundant

[ The 'new' WP Toolbar ]
Toolbar: smaller, simpler, and required

[ The 'old' WP Admin Bar ]
User Profile settings for the old Admin Bar: full control

[ The 'new' WP Toolbar ]
User Profile settings for the Toolbar: bamboozled! No option to disable for back-end
== Changelog ==
= Disclaimer =
`All previous release, prior of latest stable, are on fact
deprecated, and no longer supported on this project:
is very suggested upgrade to the latest build always!`
= Development Status =
Developmental Code in Becoming!
= Common Features =
 * Compatible with: WordPress, bbPress, Buddypress.
 * Unified Code to run with WordPress 3.1 to 3.6 or later
 * Work under [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) or later License.
 * Implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * Meet detailed [Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) quality requirements.
= 2013.0614.0000 =
* Release [STABLE] Disable Admin Bar and ToolBar
 * NEW Remove Backend DashBoard User Option "Show Admin Bar/Toolbar" Choice
 * NEW Add logout functionality on top of Admin DashBoard for WP 3.3+ or later
 * UPDATED Code Cleanup
 * UPDATED Handy Syntax
 * Bump Version 2013 Build 0614 Revision 0000
= 2013.0613.0448 =
* Release [STABLE] Disable Admin Bar and ToolBar
 * NEW Remove Frontend Bump CB
 * NEW Remove Backend DashBoard Admin Menu Shaddow Effect
 * NEW Remove Backend DashBoard Admin Menu Pointers Function
 * NEW Remove Backend "gap" on top of Admin DashBoard for WP 3.3+ or later
 * NEW Add Header and Footer Log
 * UPDATED Class Removal
 * UPDATED Style Removal
 * UPDATED Plugin Descriptions and Documantations
 * UPDATED Disabled Redundant and Unneeded Filters
 * UPDATED Disabled Redundant and Unneeded Styles
 * UPDATED Removed Unnecessary Complex Code
 * UPDATED Security Rules
 * Bump Version 2013 Build 0613 Revision 0448
= 2011.1212.2011 =
* Release [STABLE] Disable Admin Bar and ToolBar
 * First Plugin Version.
 * Less Plugin Memory Consumption.
 * Full Strict Security Rules Applied.
 * Handy Syntax Improvement.
 * Reduce Code Bloat.
 * Code Cleanup for faster loading.
 * Only one unique PHP file.
 * Supports PHP 4 and PHP 5.
 * Ready to Single and Network Multisite Environment.
 * Compatible with Shared, Dedicated, Cloud and VPS Hosting.
 * Run on Hosting with high and low resources.
 * Nothing is written into space disk.
 * Nothing is written into wp_option database table.
 * Version 2011 Build 1212 Revision 2011
== Upgrade Notice ==
= 2013.0614.0000 =
* Release [STABLE] Remove Backend DashBoard User Option Admin Bar/Toolbar Choice. Add logout functionality on top of Admin DashBoard for WP 3.3+ or later.
= 2013.0613.0448 =
* Release [STABLE] Remove: Frontend Bump CB, Backend DashBoard Admin Menu Shaddow Effect, Backend DashBoard Admin Menu Pointers Function, Backend "gap" on top of Admin DashBoard for WP 3.3+ or later. Add: Header and Footer Log.
= 2011.1212.2011 =
* Release [STABLE] Disable (basic) WordPress 3.1+ (or later) Admin Bar, and WordPress 3.3+ (or later) ToolBar.
= License =
[Disable Admin Bar and ToolBar](http://wordpress.org/plugins/toolbar-removal-completely-disable/) - Disable (basic) WordPress 3.1+ (or later) Admin Bar, and WordPress 3.3+ (or later) ToolBar.

Copyright (C) 2011-2013 [sLaNGjI's](http://slangji.wordpress.com/slangjis/) (email: <slangji[at]gmail[dot]com>)

* This program is free software; you can redistribute it and/or
modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
as published by the Free Software Foundation; either [version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
of the License, or (at your option) any later version.

* This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

* You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.
= Disclaimer =
* The license under which the WordPress software is released is the GPLv2 (or later) from the Free Software Foundation. A copy of the license is included with every copy of WordPress.

* Part of this license outlines requirements for derivative works, such as plugins or themes. Derivatives of WordPress code inherit the GPL license.

* There is some legal grey area regarding what is considered a derivative work, but we feel strongly that plugins and themes are derivative work and thus inherit the GPL license.

* The license for this software can be found on [Free Software Foundation](http://www.gnu.org/licenses/gpl-2.0.html) and as license.txt into this plugin package.

* The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
= Violations =
[Violations of the GNU Licenses](http://www.gnu.org/licenses/gpl-violation.en.html)

The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
= Guidelines =
This software meet [Detailed Plugin Guidelines](http://wordpress.org/extend/plugins/about/guidelines/) paragraphs 1,4,10,12,13,16,17 quality requirements.

The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
= Coding =
This software implement [GNU style](http://www.gnu.org/prep/standards/standards.html) coding standard indentation.

The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
= Validation =
This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to WordPress [Readme Validator](http://wordpress.org/extend/plugins/about/validator/) directives.

The author of this plugin is available at any time, to make all changes, or corrections, to respect these specifications.
