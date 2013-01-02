=== Plugin Name ===
Contributors: aloziak, huiz, stephanreiter, samuelaguilera
Tags: admin, media, images, gallery, library, upload, resize, crop, watermark, rotate, custom image size
Requires at least: 2.9
Tested up to: 3.5
Stable tag: 3.2

Scissors and Watermark enhances WordPress' handling of images by introducing cropping, resizing, rotating, and watermarking functionality.

== Description ==

This plugin adds cropping, resizing, and rotating functionality to Wordpress' image upload and management dialogs. Scissors also allows automatic resizing of images when they are uploaded and supports automatic and manual watermarking of images. Additionally, images that are resized in the post editor are automatically resampled to the requested size using bilinear filtering when a post is saved, which improves the perceived image quality while reducing the amount of data transferred at the same time.

Custom image size supported!

Check settings of this plugin after activation. Watermarking function must be set before using!

Please note that WordPress versions 2.8 and older are not supported!

This plugin builds on the plugin Scissors Continued v2.1. Many thanks to [huiz](http://profiles.wordpress.org/huiz/), [stephanreiter](http://profiles.wordpress.org/stephanreiter/) and [samuelaguilera](http://profiles.wordpress.org/samuelaguilera/). 


== Installation ==

Scissors and Watermark is available in the official plugin repository. To make a manual installation, follow these steps:

1. Extract the contents of the Scissors zip-archive you downloaded.
2. Upload the extracted `scissors` folder to your `/wp-content/plugins/` directory.
3. Activate the plugin in the 'Plugins' menu in WordPress.
4. Configure the plugin in WordPress' media settings.

Automatic resizing of the full-size image at upload-time can be configured in WordPress' media settings. You can specify a maximum width and a maximum height in pixels for this to take effect (a width/height of 0 disables image resizing in that particular dimension).

Watermarking can also be configured and enabled in WordPress' media settings: Supply an image that you want to be embedded into newly uploaded images, specify its alignment, size, and margin, and you're all set!

== Screenshots ==

1. Cropping a picture from within WordPress
2. Extended media settings for automatic resizing, cropping, and watermarking

== Changelog ==

= ToDo =
* Check function "Scissors TinyMCE Plugin for Wordpress"

= 3.2 =
* resolved – http://wordpress.org/support/topic/plugin-scissors-and-watermark-notices-and-errors?replies=8 
* Added "Reset" button to watermarking function. It resets watermark on an image.
* Deleted "Custom" option from watermarking function and added checkboxes for each of every custom image size. This upgrade should resolve these topics:
	– http://wordpress.org/support/topic/plugin-scissors-and-watermark-watermark-for-custom-sizes?replies=1
	– http://wordpress.org/support/topic/plugin-scissors-continued-watermark-logo-appears-twice?replies=1
	– http://wordpress.org/support/topic/plugin-scissors-continued-doesnt-work-on-wp-33?replies=6
* Tested watermarking function with PNG, JPG and GIF watermark files and it seems that works correctly.
* Added "Notice message" for set the plugin after activation.

= 3.1 =
* All functions are added to new metabox called "Scissors and Watermark" due to major changes in WP 3.5.
* Depricated "force a reload of the thumbnail..." at line 174 in file scissors.js.

= 3.0 =
* Remove jquery.pack.js file
* Change memory_limit to 64M
* Add a hack for cropping of custom image sizes – scissors_admin_head(), scissors_crop(); thanks to madisn and davidstinemetze
* Updated jQuery jCrop plugin to latest version 0.9.10
* Add rounding up to scissorsSelected(id, c) function in scissors.js file
* Fixed load_text_domain(), thanks to Daniele
* Replaced attribute_escape() with esc_attr(), thanks to Daniele
