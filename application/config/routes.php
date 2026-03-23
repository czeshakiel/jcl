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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['save_user_account'] = 'pages/save_user_account';
$route['delete_employee/(:any)'] = 'pages/delete_employee/$1';
$route['save_employee'] = 'pages/save_employee';
$route['manage_employee'] = 'pages/manage_employee';
$route['delete_branch/(:any)'] = 'pages/delete_branch/$1';
$route['save_branch'] = 'pages/save_branch';
$route['manage_branch'] = 'pages/manage_branch';
$route['delete_plan_type/(:any)'] = 'pages/delete_plan_type/$1';
$route['save_plan_type'] = 'pages/save_plan_type';
$route['manage_plan_type'] = 'pages/manage_plan_type';
$route['delete_designation/(:any)'] = 'pages/delete_designation/$1';
$route['save_designation'] = 'pages/save_designation';
$route['manage_designation'] = 'pages/manage_designation';
$route['admin_logout'] = 'pages/admin_logout';
$route['admin_main'] = 'pages/admin_main';
$route['admin_authentication'] = 'pages/admin_authentication';
$route['admin'] = 'pages/admin';
$route['default_controller'] = 'pages/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
