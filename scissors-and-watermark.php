<?php
/*
Plugin Name: Scissors and Watermark
Plugin URI: http://www.apollo1.cz/
Description: Scissors and Watermark enhances WordPress' handling of images by introducing cropping, resizing, rotating, and watermarking functionality. Works from WordPress v2.9 and up. Support WP 3.5.
Version: 3.2
Requires at least: 2.9
Tested up to: 3.5
Author: Ales Loziak
Author URI: http://www.apollo1.cz/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Original Plugin Name: Scissors Continue
Original Plugin URI: http://dev.huiz.net
Description: Scissors Continued enhances WordPress' handling of images by introducing cropping, resizing, rotating, and watermarking functionality. Works from WordPress v2.9 and up.
Original Version: 2.1
Original Author: A. Huizinga
Original Author URI: http://www.huiz.net/

Copyright (C) 2011  A. Huizinga <anton@huiz.net>
Copyright (C) 2012  Apollo1 <info@apollo1.cz>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

global $wp_version;

if(version_compare($wp_version, '3.5', '>=')) {
	include 'scissors-and-watermark_wp3_5.php';
} else {
	// update WP at least to version 3.5
	include 'scissors-and-watermark_wp3_4.php';
}

?>