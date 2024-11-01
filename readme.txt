=== Wikiloops Track Player ===
Contributors: jmrukkers
Donate link: https://www.wikiloops.com/donate.php
Tags: wikiloops, oembed, music player, shortcode
Requires at least: 3.0
Tested up to: 4.9.1
Requires PHP: 5.2
Stable tag: 1.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin makes it easy to add a Wikiloops track player to your WordPress blog. The plugin adds Wikiloops to the list of recognized oEmbed providers, making it very easy to embed a player for any Wikiloops jam track, and provides a Wikiloops shortcode as well.

== Description ==

This plugin makes it easy to add a [Wikiloops](https://www.wikiloops.com) track player to your WordPress blog. The plugin adds Wikiloops to the list of recognized oEmbed providers, making it very easy to embed a player for any Wikiloops jam track, and provides a Wikiloops shortcode as well.

Once the plugin is activated, a link to a Wikiloops track can be added into any post or page by putting it on a separate line by itself, or by explicitly embedding it by putting the global Wikiloops jam track link between embed tags. 

Example of a global Wikiloops track url: https://www.wikiloops.com/backingtrack-jam-67141.php

You can also add the Wikiloops track player using a shortcode, providing the track number as an id. Example: [wikiloops id="67141"]

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

Once the plugin is activated, enter any global wikiloops url on a line of its own in a post or page, and it will be rendered as a Wikiloops player for that track, or use the "wikiloops" shortcode with the id of the track you want to include.

== Frequently Asked Questions ==

= Can I use localized track urls =

No, localized, language-specific track references are not supported. Always use the language-agnostic global Wikiloops urls for referencing a specific track. Example: https://www.wikiloops.com/backingtrack-jam-67141.php

== Screenshots ==

1. Example of a Wikiloops embedded track player

== Changelog ==

= 1.0.1 = 
* Minor changes

= 1.0 =
* Initial version

== Upgrade Notice ==

= 1.0 =
Initial version