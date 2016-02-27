<?php

/*
 * Name: Sociall Dark
 * Description: Sociall Dark: Dark, Spartan, Sleek, and Functional
 * Author: Simon <http://simon.kisikew.org/>
 * Maintainer: Simon <http://simon.kisikew.org/>
 * Screenshot: <a href="screenshot.jpg">Screenshot</a>
 */

function sociall_dark_init(&$a) {
	$a->theme_info = array(
		'family' => 'sociall',
		'name' => 'dark',
	);
	set_template_engine($a, 'smarty3');

    /** @purpose set some theme defaults
    */
    $cssFile = null;
    $colour = 'dark';
	$colour_path = "/dark/";

    // set css
    if (!is_null($cssFile)) {
        $a->page['htmlhead'] .= sprintf('<link rel="stylesheet" type="text/css" href="%s" />', $cssFile);
    }
}

