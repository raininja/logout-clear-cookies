<?php
/*
Plugin Name: Logout clear cookies
Plugin URI: https://lyncd.com/
Description: Clears all cookies on logout. Because leaving a trail of cookies is bad.
Version: 0.1
Author: Joel Hardi
Author URI: https://lyncd.com/
License: GPL2
*/

/*  Copyright 2015-2017 Joel Hardi

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Plugin hook
add_action('wp_logout', function () {
  array_map(function ($k) {
    setcookie($k, FALSE, time()-YEAR_IN_SECONDS, '', COOKIE_DOMAIN);
  }, array_keys($_COOKIE));
  // Redirect to WP_HOME since by default WordPress redirects to its login URL,
  // which actually sets a new cookie
  //header('Location:', WP_HOME);
  wp_redirect( home_url() );
  exit;
}, 99999);
