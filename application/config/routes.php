<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news/creaComment'] = 'news/creaComment';
$route['news/borrarComment'] = 'news/borrarComment';
$route['news/logout'] = 'news/logout';
$route['news/login'] = 'news/login';
$route['news/create'] = 'news/create';
$route['news/borrar'] = 'news/borrar';
$route['news/allNews'] = 'news/allNews';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'news/view/$1';

$route['default_controller'] = 'news';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
