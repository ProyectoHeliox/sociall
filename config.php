<?php
/**
 * Theme settings
 */

function theme_content(&$a) {
	if(!local_user()) { return;	}

	$font_size = get_pconfig(local_user(),'sociall', 'font_size' );
	$line_height = get_pconfig(local_user(), 'sociall', 'line_height' );
	$colour = get_pconfig(local_user(), 'sociall', 'colour' );
	
	return sociall_form($a, $font_size, $line_height, $colour);
}

function theme_post(&$a) {
	if(!local_user()) { return; }
	
	if (isset($_POST['sociall-settings-submit'])) {
		set_pconfig(local_user(), 'sociall', 'font_size', $_POST['sociall_font_size']);
		set_pconfig(local_user(), 'sociall', 'line_height', $_POST['sociall_line_height']);
		set_pconfig(local_user(), 'sociall', 'colour', $_POST['sociall_colour']);	
	}
}

function theme_admin(&$a) {
	$font_size = get_config('sociall', 'font_size' );
	$line_height = get_config('sociall', 'line_height' );
	$colour = get_config('sociall', 'colour' );	
	
	return sociall_form($a, $font_size, $line_height, $colour);
}

function theme_admin_post(&$a) {
	if (isset($_POST['sociall-settings-submit'])) {
		set_config('sociall', 'font_size', $_POST['sociall_font_size']);
		set_config('sociall', 'line_height', $_POST['sociall_line_height']);
		set_config('sociall', 'colour', $_POST['sociall_colour']);
	}
}

function sociall_form(&$a, $font_size, $line_height, $colour) {
	$line_heights = array(
		"1.3" => "1.3",
		"---" => "---",
		"1.6" => "1.6",				
		"1.5" => "1.5",		
		"1.4" => "1.4",
		"1.2" => "1.2",
		"1.1" => "1.1",
	);	
	$font_sizes = array(
		'12' => '12',
		'14' => '14',
		"---" => "---",
		"16" => "16",		
		"15" => "15",
		'13.5' => '13.5',
		'13' => '13',		
		'12.5' => '12.5',
		'12' => '12',
	);
	$colours = array(
		'light' => 'light',		
		'dark' => 'dark',						
	);

	$t = get_markup_template("theme_settings.tpl" );
	$o .= replace_macros($t, array(
		'$submit' => t('Submit'),
		'$baseurl' => $a->get_baseurl(),
		'$title' => t("Theme settings"),
		'$font_size' => array('sociall_font_size', t('Set font-size for posts and comments'), $font_size, '', $font_sizes),
		'$line_height' => array('sociall_line_height', t('Set line-height for posts and comments'), $line_height, '', $line_heights),
		'$colour' => array('sociall_colour', t('Set colour scheme'), $colour, '', $colours),	
	));

	return $o;
}
