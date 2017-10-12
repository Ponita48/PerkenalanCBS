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
$route['default_controller'] = 'UserController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['nominasi'] = 'UserController/nominasi';

//UserController
$route['login'] = 'UserController/login';
$route['home'] = 'UserController/index';
$route['profile/(:any)'] = 'UserController/lihat_profile/$1'; //$1 = $id
$route['angkatan'] = 'UserController/get_angkatan_2017';
$route['angkatan/(:any)'] = 'UserController/get_angkatan/$1';
$route['logout'] = 'UserController/logout';
$route['new_login/submit'] = 'UserController/new_login';
$route['edit_profile'] = 'UserController/edit_profile';
$route['search/(:any)'] = 'UserController/search/$1'; //$1 = $keysearch
$route['change_profile'] = 'UserController/change_profile';
$route['login'] = 'UserController/login';
$route['perkenalan'] = 'UserController/get_angkatan/all';
$route['new_login'] = 'UserController/view_baru_login';
$route['profile/(:any)/change_pp'] = 'UserController/change_pp';
$route['search'] = 'UserController/search/$1'; //$1 = $keysearch


//Perkenalan
$route['request_keluarga/(:any)'] = 'Perkenalan/request_keluarga/$1'; //$1 = $id
$route['request_peserta/(:any)'] = 'Perkenalan/request_peserta/$1'; //$1 = $id
$route['my_request'] = 'Perkenalan/my_request';
$route['request/(:any)'] = 'Perkenalan/request/$1'; //$1 = $id_user keluarga / peserta (yang akan dimintai request)
$route['perkenalan_angkatan/(:any)/edit'] = 'Perkenalan/edit_perkenalan/$1'; //$1 = $id_perkenalan_angkatan
$route['perkenalan_angkatan/(:any)/submit'] = 'Perkenalan/edit_perkenalan_submit/$1'; //$1 = $id_perkenalan_angkatan
$route['perkenalan/declined/(:num)'] = 'Perkenalan/showRejected';
$route['perkenalan/accepted/(:num)'] = 'Perkenalan/showAccepted';

//A
$route['perkenalan_keluarga'] = 'A/perkenalanKeluarga';
$route['perkenalan_angkatan/(:any)'] = 'A/perkenalanAngkatan/$1'; //$1 = $id
$route['jumlah_perkenalan'] = 'A/jumlahPerkenalan';
$route['approve_perkenalan/(:any)'] = 'A/approvePerkenalan/$1'; //$1 = $id_perkenalan
$route['reject_perkenalan/(:any)'] = 'A/rejectPerkenalan/$1'; //$1 = $id_perkenalan
$route['detail_perkenalan/(:any)'] = 'A/detailPerkenalan/$1';

//Kuis
$route['kuis'] = 'Kuis/view_kuis';
$route['kuis/submit'] = 'Kuis/kuis_struktur_submit';
$route['kuis/jawaban'] = 'Kuis/get_kuis';
$route['kuis/jawaban/(:any)'] = 'Kuis/get_kuis/$1';
$route['kuis/filled'] = 'Kuis/filled_kuis';
$route['kuis/isi'] = 'Kuis/isi_kuis';

//view kuis
$route['kuis/kuis_cbs'] = 'Kuis/kuis_cbs';
$route['kuis/kuis_be'] = 'Kuis/kuis_be';
$route['kuis/kuis_dpa'] = 'Kuis/kuis_dpa';
$route['kuis/kuis_mubes'] = 'Kuis/kuis_mubes';


//ajax
$route['ajax/(:any)'] = 'UserController/hintSearch/$1';

//password
$route['resetPassword'] = 'A/hashPass';