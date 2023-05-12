<?php
use Jenssegers\Blade\Blade;

function view($view, $data = [])
{

    $views = VIEWPATH;
	$cache = APPPATH . 'cache';
	$blade = new Blade($views, $cache);

	echo $blade->make($view, $data)->render();
}