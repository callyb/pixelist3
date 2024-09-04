<?php

if (!function_exists('synved_social_addon_extra_icons_get'))
{
	
function synved_social_addon_extra_icons_version()
{
	return 100020002;
}

function synved_social_addon_extra_icons_get()
{
	$addon_dir = '/addons/' . basename(dirname(__FILE__));
	$path = synved_social_path($addon_dir);
	$uri = synved_social_path_uri($addon_dir);
	
	$icons = array(
		'clearslate' => array(
			'label' => __('Clear Slate', 'synved-social'),
			'image' => $uri . '/image/social/clearslate/preview.png',
			'folder' => $addon_dir . '/image/social/clearslate/',
			'path' => $path . '/image/social/clearslate/',
			'uri' => $uri . '/image/social/clearslate/'
		),
		'darkslate' => array(
			'label' => __('Dark Slate', 'synved-social'),
			'image' => $uri . '/image/social/darkslate/preview.png',
			'folder' => $addon_dir . '/image/social/darkslate/',
			'path' => $path . '/image/social/darkslate/',
			'uri' => $uri . '/image/social/darkslate/'
		),
		'circle' => array(
			'label' => __('Circle', 'synved-social'),
			'image' => $uri . '/image/social/circle/preview.png',
			'folder' => $addon_dir . '/image/social/circle/',
			'path' => $path . '/image/social/circle/',
			'uri' => $uri . '/image/social/circle/'
		),
		'wheel' => array(
			'label' => __('Wheel', 'synved-social'),
			'image' => $uri . '/image/social/wheel/preview.png',
			'folder' => $addon_dir . '/image/social/wheel/',
			'path' => $path . '/image/social/wheel/',
			'uri' => $uri . '/image/social/wheel/'
		),
		'flag' => array(
			'label' => __('Flag', 'synved-social'),
			'image' => $uri . '/image/social/flag/preview.png',
			'folder' => $addon_dir . '/image/social/flag/',
			'path' => $path . '/image/social/flag/',
			'uri' => $uri . '/image/social/flag/'
		),
		'medal' => array(
			'label' => __('Medal', 'synved-social'),
			'image' => $uri . '/image/social/medal/preview.png',
			'folder' => $addon_dir . '/image/social/medal/',
			'path' => $path . '/image/social/medal/',
			'uri' => $uri . '/image/social/medal/'
		),
		'shed' => array(
			'label' => __('Shed', 'synved-social'),
			'image' => $uri . '/image/social/shed/preview.png',
			'folder' => $addon_dir . '/image/social/shed/',
			'path' => $path . '/image/social/shed/',
			'uri' => $uri . '/image/social/shed/'
		),
		'balloon' => array(
			'label' => __('Balloon', 'synved-social'),
			'image' => $uri . '/image/social/balloon/preview.png',
			'folder' => $addon_dir . '/image/social/balloon/',
			'path' => $path . '/image/social/balloon/',
			'uri' => $uri . '/image/social/balloon/'
		),
	);
	
	return apply_filters('synved_social_addon_extra_icons_get', $icons);
}

}
