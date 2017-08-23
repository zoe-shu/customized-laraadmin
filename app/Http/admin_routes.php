<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('home');
// });

/* ================== Homepage + Admin Routes ================== */
// require __DIR__.'/admin_routes.php';
/* ================== Homepage ================== */
// Route::get('/', 'HomeController@index');
// Route::get('/home', 'HomeController@index');
Route::auth();
Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [  ]
],
function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', 'HomeController@index');
	Route::get('/about', 'AboutController@index');
	Route::get('/services', 'ServiceController@index');
	Route::get('/contact', 'ContactController@index');
	Route::get('/projects', 'ProjectController@index');
	Route::get('/projects/{slug}', 'ProjectDetailController@detail');
	Route::post('/ajax', 'ProjectController@ajax');
});
/* ================== Access Uploaded Files ================== */
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');

/*
|--------------------------------------------------------------------------
| Admin Application Routes
|--------------------------------------------------------------------------
*/

$as = "";
if(\Dwij\Laraadmin\Helpers\LAHelper::laravel_ver() == 5.3) {
	$as = config('laraadmin.adminRoute').'.';

	// Routes for Laravel 5.3
	Route::get('/logout', 'Auth\LoginController@logout');
}


Route::group(['as' => $as, 'middleware' => ['auth', 'permission:ADMIN_PANEL']], function () {

	/* ================== Dashboard ================== */

	Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
	Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');

	/* ================== Users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
	Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');

	/* ================== Uploads ================== */
	Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
	Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
	Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
	Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
	Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');

	/* ================== Roles ================== */
	Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
	Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_module_role_permissions/{id}', 'LA\RolesController@save_module_role_permissions');

	/* ================== Permissions ================== */
	Route::resource(config('laraadmin.adminRoute') . '/permissions', 'LA\PermissionsController');
	Route::get(config('laraadmin.adminRoute') . '/permission_dt_ajax', 'LA\PermissionsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/save_permissions/{id}', 'LA\PermissionsController@save_permissions');

	/* ================== Departments ================== */
	Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
	Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');

	/* ================== Employees ================== */
	Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
	Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/change_password/{id}', 'LA\EmployeesController@change_password');

	/* ================== Organizations ================== */
	Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
	Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

	/* ================== Backups ================== */
	Route::resource(config('laraadmin.adminRoute') . '/backups', 'LA\BackupsController');
	Route::get(config('laraadmin.adminRoute') . '/backup_dt_ajax', 'LA\BackupsController@dtajax');
	Route::post(config('laraadmin.adminRoute') . '/create_backup_ajax', 'LA\BackupsController@create_backup_ajax');
	Route::get(config('laraadmin.adminRoute') . '/downloadBackup/{id}', 'LA\BackupsController@downloadBackup');



	/* ================== Crg_users ================== */
	Route::resource(config('laraadmin.adminRoute') . '/crg_users', 'LA\Crg_usersController');
	Route::get(config('laraadmin.adminRoute') . '/crg_user_dt_ajax', 'LA\Crg_usersController@dtajax');
	/* ================== Agents ================== */
	Route::resource(config('laraadmin.adminRoute') . '/agents', 'LA\AgentsController');
	Route::get(config('laraadmin.adminRoute') . '/agent_dt_ajax', 'LA\AgentsController@dtajax');
	/* ================== Abouts ================== */
	Route::resource(config('laraadmin.adminRoute') . '/abouts', 'LA\AboutsController');
	Route::get(config('laraadmin.adminRoute') . '/about_dt_ajax', 'LA\AboutsController@dtajax');
	/* ================== Services ================== */
	Route::resource(config('laraadmin.adminRoute') . '/services', 'LA\ServicesController');
	Route::get(config('laraadmin.adminRoute') . '/service_dt_ajax', 'LA\ServicesController@dtajax');
	/* ================== Homes ================== */
	Route::resource(config('laraadmin.adminRoute') . '/homes', 'LA\HomesController');
	Route::get(config('laraadmin.adminRoute') . '/home_dt_ajax', 'LA\HomesController@dtajax');
	/* ================== Contacts ================== */
	Route::resource(config('laraadmin.adminRoute') . '/contacts', 'LA\ContactsController');
	Route::get(config('laraadmin.adminRoute') . '/contact_dt_ajax', 'LA\ContactsController@dtajax');
	/* ================== Projects ================== */
	Route::resource(config('laraadmin.adminRoute') . '/projects', 'LA\ProjectsController');
	Route::get(config('laraadmin.adminRoute') . '/project_dt_ajax', 'LA\ProjectsController@dtajax');
	/* ================== Tests ================== */
	Route::resource(config('laraadmin.adminRoute') . '/tests', 'LA\TestsController');
	Route::get(config('laraadmin.adminRoute') . '/test_dt_ajax', 'LA\TestsController@dtajax');
	/* ================== Project_details ================== */
	Route::resource(config('laraadmin.adminRoute') . '/project_details', 'LA\Project_detailsController');
	Route::get(config('laraadmin.adminRoute') . '/project_detail_dt_ajax', 'LA\Project_detailsController@dtajax');
	/* ================== Frontend_menuses ================== */
	Route::resource(config('laraadmin.adminRoute') . '/frontend_menuses', 'LA\Frontend_menusesController');
	Route::get(config('laraadmin.adminRoute') . '/frontend_menus_dt_ajax', 'LA\Frontend_menusesController@dtajax');
	/* ================== Service_details ================== */
	Route::resource(config('laraadmin.adminRoute') . '/service_details', 'LA\Service_detailsController');
	Route::get(config('laraadmin.adminRoute') . '/service_detail_dt_ajax', 'LA\Service_detailsController@dtajax');
	/* ================== Project_prices ================== */
	Route::resource(config('laraadmin.adminRoute') . '/project_prices', 'LA\Project_pricesController');
	Route::get(config('laraadmin.adminRoute') . '/project_price_dt_ajax', 'LA\Project_pricesController@dtajax');
	/* ================== Website_languages ================== */
	Route::resource(config('laraadmin.adminRoute') . '/website_languages', 'LA\Website_languagesController');
	Route::get(config('laraadmin.adminRoute') . '/website_language_dt_ajax', 'LA\Website_languagesController@dtajax');
	/* ================== Project_types ================== */
	Route::resource(config('laraadmin.adminRoute') . '/project_types', 'LA\Project_typesController');
	Route::get(config('laraadmin.adminRoute') . '/project_type_dt_ajax', 'LA\Project_typesController@dtajax');
});
