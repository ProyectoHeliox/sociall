<?php

/*
 * Name: Sociall Light
 * Description: Sociall Light: Light, Spartan, Sleek, and Functional
 * Author: Simon <http://simon.kisikew.org/>
 * Maintainer: Simon <http://simon.kisikew.org/>
 * Screenshot: <a href="screenshot.jpg">Screenshot</a>
 */

function sociall_light_init(&$a) {

	$a->theme_info = array(
		'family' => 'sociall',
		'name' => 'light',
	);
	set_template_engine($a, 'smarty3');

    /** @purpose set some theme defaults
    */
    $cssFile = null;
    $colour = 'light';
	$colour_path = "/light/";

    // set css
    if (!is_null($cssFile)) {
        $a->page['htmlhead'] .= sprintf('<link rel="stylesheet" type="text/css" href="%s" />', $cssFile);
    }
}

