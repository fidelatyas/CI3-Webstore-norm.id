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
|    example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|    https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|    $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|    $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|    $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:    my-controller/index    -> my_controller/index
|        my-controller/my-method    -> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['code/rambut-rontok'] = 'code/hairloss/';
$route['code/jerawat'] = 'code/acne/';
$route['code/sex'] = 'code/sex/';
$route['code/lifestyle'] = 'code/lifestyle/';
$route['code/media'] = 'code/media/';
$route['code/video'] = 'code/video/';
$route['code/ajax_load_article'] = 'code/ajax_load_article/';
$route['code/ajax_load_media'] = 'code/ajax_load_media/';
$route['code/ajax_load_video'] = 'code/ajax_load_video/';
$route['code/(:any)'] = 'code/detail/$1';
$route['terms-and-conditions'] = 'terms_and_conditions';
$route['privacy-policy'] = 'privacy_policy';
$route['medical-advisor'] = 'doctor';
$route['translate_uri_dashes'] = FALSE;

$route['rambut-rontok'] = 'hairloss';
$route['rambut-rontok/finasteride'] = 'hairloss/finasteride';
$route['rambut-rontok/starter-kit'] = 'hairloss/starter';
$route['rambut-rontok/complete-kit'] = 'hairloss/complete';
$route['rambut-rontok/hair-tonic'] = 'hairloss/minoxidil';
$route['rambut-rontok/anti-dht-shampoo'] = 'hairloss/shampoo';

$route['jerawat'] = 'acne';
$route['jerawat/day-cream'] = 'acne/daycream';
$route['jerawat/night-cream'] = 'acne/nightcream';
$route['jerawat/starter-kit'] = 'acne/starter';
//$route['jerawat/complete-kit'] = 'acne/complete';

//$route['disfungsi-ereksi'] = 'ed';
$route['disfungsi-ereksi/sildenafil'] = 'ed/sildenafil';
$route['disfungsi-ereksi/konsultasi-de'] = 'ed/sildenafil';

//$route['ejakulasi-dini'] = 'pe';
$route['ejakulasi-dini/stamina-cream'] = 'pe/staminacream';

$route['merchandise/safety-mask'] = 'merchandise/safetymask';

$route['questionnaire/rambut-rontok/start'] = 'questionaire/hairloss';
$route['questionnaire/jerawat/start'] = 'questionaire/acne';
$route['questionnaire/disfungsi-ereksi/start'] = 'questionaire/ed';
$route['questionnaire/ejakulasi-dini/start'] = 'questionaire/pe';

$route['hairloss/dht-blocker'] = 'hairloss/finasteride';
$route['ed/ed-medication'] = 'ed/sildenafil';