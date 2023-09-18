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
$route['translate_uri_dashes'] = FALSE;

$route['medical-advisor'] = 'doctor';

$route['terms-and-conditions'] = 'tnc';
$route['privacy-policy'] = 'privacy';

$route['all-product'] = 'category/all';
$route['fragrance'] = 'category/fragrance';
$route['hair-body'] = 'category/hairbody';
$route['merchandise'] = 'category/merchandise';
$route['performance'] = 'category/performance';
$route['skincare'] = 'category/skincare';
$route['medical-grade'] = 'category/prescription';

$route['ultimate-gift-set'] = 'product/ultimate_gift';
$route['ultimate-gift-set-plus-bag'] = 'product/ultimate_gift_bag';

$route['complete-plus-bag'] = 'product/complete_plus_bag';
$route['maintenance-plus-bag'] = 'product/maintenance_plus_bag';
$route['shower-plus-bag'] = 'product/shower_plus_bag';

$route['starter-set'] = 'product/starter_set';
$route['daily-set'] = 'product/daily_set';
$route['aging-set'] = 'product/aging_set';

$route['face-wash'] = 'product/facewash';
$route['face-scrub'] = 'product/facescrub';
$route['moisturizer'] = 'product/moisturizer';

$route['body-wash'] = 'product/bodywash';
$route['shampoo'] = 'product/shampoo';

$route['utility-bag'] = 'product/utility_bag';

$route['complete-hair-growth-kit'] = 'product/complete_hair_growth';
$route['dht-shampoo'] = 'product/dht_shampoo';
$route['starter-hair-growth-kit'] = 'product/starter_hair_growth';
$route['hair-growth-capsule'] = 'product/hair_growth_capsule';
$route['hair-tonic'] = 'product/hair_tonic';
$route['stamina-cream'] = 'product/stamina_cream';

$route['complete-set'] = 'product/complete';
$route['maintenance-set'] = 'product/maintenance';
$route['shower-set'] = 'product/shower';

$route['summer-sol'] = 'product/summer_sol';
$route['white-night'] = 'product/white_night';
$route['spectrum-set'] = 'product/spectrum_set';

$route['hair-growth'] = 'program/hairgrowth';
$route['stamina-system'] = 'program/staminasystem';

$route['code/hair'] = 'code/category/hair';
$route['code/skin'] = 'code/category/skin';
$route['code/sex'] = 'code/category/sex';
$route['code/lifestyle'] = 'code/category/lifestyle';

$route['consultation/hairgrowth'] = 'consultation/category/hairgrowth';

$route['start/consultation/hairloss'] = 'program/hairgrowth';
$route['start/consultation/pe'] = 'program/staminasystem';

$route['community-influencer'] = 'influencer';
$route['community-influencer/register'] = 'influencer/register';