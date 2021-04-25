<?php

// Walker class to create a flat menu, with no submenus and simple HTML
// compatible with Bootstrap 4
class CFCT_Header_Nav_Walker extends Walker_Nav_Menu {

	function start_lvl(&$output, $depth = 0, $args = array()) {
        $output .= "<ul>";
	}

	function end_lvl(&$output, $depth = 0, $args = array()) {
		$output .= "</ul>";
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $output .= "<li><a href=" . esc_attr($item->url) . ">" . $item->title . "</a>";
	}

	function end_el(&$output, $item, $depth = 0, $args = array()) {
        $output .= "</li>";
	}
}