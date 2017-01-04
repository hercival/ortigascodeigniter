<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "page";
$route['404_override'] = 'errorpage';
$route['home'] = 'main';

//administrator
$route['login'] = 'login';
$route['login/signin'] = 'login/signin';
$route['administrator'] = 'administrator/index';
$route['administrator/(:any)'] = 'administrator/$1';

$route['banner'] = 'banner/index';
$route['banner/(:any)'] = 'banner/$1';

$route['contactus'] = 'contactus/index';
$route['contactus/(:any)'] = 'contactus/$1';

$route['tile'] = 'tile/index';
$route['tile/(:any)'] = 'tile/$1';

$route['html'] = 'html/index';
$route['html/(:any)'] = 'html/$1';

$route['news/modify/(:any)'] = 'news/modify/$1';
$route['news/(:any)'] = 'news/inner/$1';
$route['news'] = 'news/$1';

$route['career/modify/(:any)'] = 'career/modify/$1';
$route['career/(:any)'] = 'career/inner/$1';
$route['career'] = 'career/$1';

$route['units/modify/(:any)'] = 'units/modify/$1';
$route['units/search'] = 'units/search';
$route['units/(:any)'] = 'units/inner/$1';
$route['units'] = 'units/$1';


//frontend
$route['errorpage'] = 'errorpage';
$route['(:any)'] = 'page/index/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */

