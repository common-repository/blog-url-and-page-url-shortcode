<?php
/*
Plugin Name: Blog URL[blogurl] (and Page URL[pageurl]) Shortcode
Plugin URI: http://www.ogge.co.uk
Description: Adds the blogurl shortcode to wordpress.
Version: 1.0
Author: James Jackson
Author URI: http://www.ogge.co.uk
*/

/*
Blog URL Shortcode (Wordpress Plugin)
Copyright (C) 2011 James Jackson
Contact me at http://www.ogge.co.uk

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/
add_shortcode('blogurl', 'blogUrl');
add_shortcode('pageurl', 'blogUrl');
function blogUrl($atts) {
	extract(shortcode_atts(array("id" => ''), $atts));
	extract(shortcode_atts(array("temp" => false), $atts));
		if($id != ''){
			return get_permalink($id);
		}
		if($temp){
			return get_bloginfo('template_url');
		}
		return get_bloginfo('url');
}
?>