=== Logout Clear Cookies ===
Contributors: joelhardi
Donate link: https://lyncd.com/donate/
Tags: cookie, security, privacy, admin
Requires at least: 3.7
Tested up to: 4.8
Stable tag: trunk
License: GPLv2 or later

Clears all cookies on logout. Because leaving a trail of cookies is bad.

== Description ==

This is an extremely simple plugin (one line of code!) that deletes all domain cookies whenever a user logs out of your WordPress site, and then redirects the user to the site homepage.

**Why?** Because by default, WordPress sets a number of cookies that it doesn't remove on its own when you log out.

There are security and privacy benefits, because if there are vulnerabilities in WordPress or in your browser, or if someone has access to your computer or device, they may be able to access these cookies. (That goes for you or for anyone who logs into your site to add a post or comment.)

Likewise, when a user visits your site using a public or shared computer, now there won't be any cookies left behind.

The plugin also gives you back the "regular user view" of your site, because after you log out you can browse your site as an anonymous user, without having to manually clear cookies in your browser. (There are many plugins that will display different content or show cached or uncached versions of pages if they see that WordPress cookies have been set.)


== Installation ==

 1. Install and activate. That's it!

The plugin does not modify your files or database in any way, and does not actually contain any activation or deactivation code.

**To uninstall,** simply delete the plugin. You can deactivate it first, but it is also perfectly safe to delete the plugin without deactivating.


== Frequently Asked Questions ==

= Why redirect to the site homepage (`WP_HOME`) after logout instead of back to the admin console login page (`wp-login.php`)? =

Because the admin console login page actually sets a new cookie when your browser loads it.


== Changelog ==

= 0.1 =
 +  Initial public release.
 +  Tested over two years using WordPress 3.7 through 4.7.3.
