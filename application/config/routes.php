<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/******* MAIN *******/
$route['index'] 	= 'home';
$route['price'] 	= 'home/price';
$route['biaya'] 	= 'home/price';

$route['about'] 	= 'home/about';
$route['faq'] 		= 'home/faq';

/******* AUTH *******/
$route['checkemail/(:any)'] 	= 'auth/checkemail/$1';
$route['verify/(:any)/(:any)'] 	= 'auth/signup_verify/$1/$2';
$route['signup'] 				= 'auth/signup';	// form pendaftaran
$route['register'] 				= 'auth/register';	// proses pendaftaran
$route['signin']    			= 'auth/signin';
$route['signout']   			= 'auth/signout';

/******* USER *******/
$route['(:any)/(:any)'] 	    = 'user/view/$1/$2';
$route['(:any)'] 	    		= 'user/view/$1';

$route['default_controller'] 	= 'home';

$route['404_override'] 			= 'libk_404';
$route['translate_uri_dashes'] 	= FALSE;
