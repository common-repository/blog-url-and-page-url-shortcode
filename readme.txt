=== Blog URL and Page URL Shortcode ===
Contributors: oggeuk
Tags: blogurl, template url, template, url, page url, page, permalink, post, permalink, shortcode
Requires at least: 2.8
Tested up to: 3.2.1
Stable tag: trunk

Adds the blogurl shortcode to wordpress.

== Description ==

The plugin adds the following shortcode to the wordpress backend.

[blogurl id='$id' temp='$temp']

* [blogurl] returns the url of the wordpress installation
* [blogurl id='$id'] returns the permalink for a page or post with the id $id
* [blogurl temp='true'] will return the directory of the template

* [pageurl] shortcode can also be used using the same parameters this is included for legacy reasons

== Installation ==

1. Upload `blogurl-plugin.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `[blogurl]` with parameters if needed in your posts or pages


== Changelog ==

= 1.0 =
* Added template url.
* Merged all functions into one shortcode.
* Included pageurl shortcode to allow previous installations to work.