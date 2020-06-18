<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['forum'] = 'forum/index';
$route['lapor'] = 'lapor/index';
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
