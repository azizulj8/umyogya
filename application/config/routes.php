<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'login';
$route['default_controller'] = 'guest';
$route['logout'] = 'Login/logout';
$route['scholars'] = 'Scholar';
$route['essays'] = 'Essay';
$route['bujsforms'] = 'BForms';
$route['users'] = 'Admin/user_admin';
$route['save_scholar'] = 'Scholar/save_add';
$route['delete_scholar/(:any)'] = 'Scholar/del';
$route['edit_scholar/(:any)'] = 'Scholar/edit';
$route['edit_schedule/(:any)'] = 'Schedule/edit_schedule';
$route['delete_schedule/(:any)'] = 'Schedule/del';
$route['svedit_scholar'] = 'Scholar/save_add';
$route['save_users'] = 'Admin/save_add';
$route['add_users'] = 'Admin/add_user';
$route['add_form'] = 'BForms/add_new_form';
$route['add_schedule'] = 'Schedule/add_new_schedule';
$route['save_schedule'] = 'Schedule/save';
$route['schedule'] = 'Schedule';
$route['save_form'] = 'BForms/save';
$route['add_essay'] = 'Essay/add_new_essay';
$route['edit_essay/(:any)'] = 'Essay/edit_essay';
$route['delete_essay/(:any)'] = 'Essay/del';
$route['save_admessay'] = 'Essay/save';
$route['submit_essay'] = 'Guest/submit_essay';
$route['add_new_scholar'] = 'Scholar/add_new_scholar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
