=== MSTW Bracket Builder ===
Contributors: MarkODonnell
Donate link: http://shoalsummitsolutions.com
Tags: tournament,tournament bracket,bracket,tournament manager,sports tournament,knockout round,sports schedules,ncaa basketball tournament,euro 2016 soccer  
Requires at least: 4.3
Tested up to: 4.7.2
Stable tag: 1.2
Text Domain: mstw-bracket-builder
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Builds and manages tournament brackets. Displays tournament brackets (knockout rounds), and tables of games (fixtures).

== Description ==

The MSTW Bracket Builder plugin creates, manages, and displays multiple tournaments. Shortcodes are available to display brackets (knockout rounds), and tables of games (fixtures). The front end displays can be formatted via shortcode arguments, and the plugin's stylesheet. 

= UPGRADE NOW TO THE PREMIUM VERSION =
Build tournament brackets (knockout rounds) and tournament schedules (fixture tables) quickly and easily. Make your site pop by adding team logos, name and location formats, and links to maps, team sites, and venue sites. Automatically schedule by seed, or schedule manually. The automated admin process advances teams to future rounds based on the results of previous rounds. [What are the differences between Bracket Builder Free & Premium Versions?](http://shoalsummitsolutions.com/bb-version-differences "Differences")
[See how easy it is in this short video!](https://vimeo.com/203653626 "Video Tutorial") Or learn more [@shoalsummitsolutions.com](http://shoalsummitsolutions.com/downloads/mstw-bracket-builder-premium/ "Learn More")

NOTE 1: You MUST deactivate and delete the free version of the plugin before installing the premium version.

NOTE 2: Tournaments built in the free version will not be available in the premium version. You must recreate any existing tournaments. [This will be addressed in a future release.]

NOTE 3: The plugin is designed for tournaments with TEAMS participating. While it will work for tournaments with individual players, e.g., tennis tournaments, it is not intended for that purpose. [This will be addressed in a future release.]


= Helpful Links =
* [**See what the plugin in action on the MSTW Dev Site -»**](http://dev.shoalsummitsolutions.com/bracket-builder/)
* [**Read the (site admin) user's manual at shoalsummitsolutions.com -»**](http://shoalsummitsolutions.com/category/users-manuals/bb-plugin/)

== Installation ==

All the normal installation methods for WordPress plugins work. See [the installation manual page](http://shoalsummitsolutions.com/bb-installation/) for details.
*Upon installation make sure the WP default timezone is set correctly in the Wordpress Settings->General screen.*

== Frequently Asked Questions ==

[The FAQs may be found here.](http://shoalsummitsolutions.com/bb-faq/)

== Screenshots ==

1. Sample Tournament Bracket [shortcode]
2. Sample Tournament Games/Fixtures Table [shortcode]
3. Create/configure Tournament (admin) [shortcode]
4. Edit/update Tournament [shortcode]

== Upgrade Notice ==

The current version of MSTW League Manager has been tested on WP 4.7.2 with the [Wordpress Twenty Eleven theme.](https://wordpress.org/themes/twentytwelve/) If you use older version of WordPress, the plugin may or may not function properly. If you are using a newer version, please let me know how the plugin works, especially if you encounter problems.

== Changelog ==

= 1.2 =
* Extensive changes to the plugin's stylesheet to insure brackets layout correctly (in containers with a min-width of 1200px)
* Fixed Bug. Tourney slug now shows correctly On the Tournaments admin screen's table.
* Fixed Bug. Team Names that have not been entered now display as blank rather than -1. 

= 1.1 =
* Fixed bug. Calls mstw_bb_get_current_post_type instead of mstw_get_current_post_type in mstw_bb_admin (left over from LM). 
* Fixed bug (left-over test code) in single-tourney.php template.
* Fixed bug. Call to mstw_safe_ref(), which no longer exists.
* Fixed bugs (typos) with CSS tags.
* Updated Quick Start Screen
* Added more error checking and internationalized strings throughout

= 1.0 =
* Initial release.