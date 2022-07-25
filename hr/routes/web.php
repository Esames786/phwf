<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";
});


Auth::routes();
Route::get('/', 'WelcomeController@loginn');

Route::get('profile', function () {
})->middleware('auth');

//welcome
//Route::get('/', 'front_view@laado');
Route::get('/loginn', 'WelcomeController@loginn');
Route::post('/getlogin2', 'WelcomeController@getlogin2')->name('getlogin2');
Route::get('verify/{id}/{id2}/{id3}', 'WelcomeController@getVerification');
Route::post('/code_verify', 'WelcomeController@codeVerify')->name('code_verify');
Route::post('/resend_verify', 'WelcomeController@resend_verify')->name('resend_verify');


//ADmin  Panel

Route::get('/logout', 'WelcomeController@logout');


Route::group(['middleware' => ['auth:web']], function () {


    Route::get('/dashboard', 'DashboardController@getDashboard');
//Employee
    Route::get('/add_employee', 'DashboardController@add_employee');
    Route::post('/save_employee', 'DashboardController@save_employee')->name('save_employee');
    Route::get('/view_employee', 'DashboardController@view_employee');
    Route::get('/download_agreement', 'DashboardController@download_agreement');
    Route::get('/check_expense/{id}', 'DashboardController@check_expense');
    Route::get('/user_active/{id}', 'DashboardController@user_active');
    Route::get('/user_deactive/{id}', 'DashboardController@user_deactive');
    Route::get('/edit_employee/{id}', 'DashboardController@edit_employee');
    Route::post('/update_employee', 'DashboardController@update_employee')->name('update_employee');

//about
    Route::resource('/customer', 'Customer\CustomerController');

    Route::get('/deleted_customer', 'Customer\CustomerController@deleted_customer');
    Route::get('/reactive_customer/{id}', 'Customer\CustomerController@reactive_customer');
    Route::get('/view_doc/{id}', 'Customer\CustomerController@view_doc')->name('view_doc');
    Route::get('/employee_card/{id}', 'Customer\CustomerController@employee_card');


//
//    Route::resource('/package', 'Customer\PackageController');
//    Route::get('get_package_id/{id}', 'Customer\PackageController@get_package_id');
//    Route::resource('/invoice', 'Customer\InvoiceController');
//    Route::get('/print/{id}', 'Customer\InvoiceController@print');
//    Route::get('/send_invoice_email/{id}', 'Customer\InvoiceController@send_invoice_email');
//    Route::resource('/expense', 'ExpenseController');
//
////contact us
//Route::get('/add_contact', 'phone_quote\NewQuote@add_contact');
//Route::post('/save_contact', 'phone_quote\NewQuote@save_contact');
//
////home page
//
//Route::get('/add_home', 'phone_quote\NewQuote@add_home');
//Route::post('/save_home', 'phone_quote\NewQuote@save_home');
//
////blog page
//Route::get('/add_blog', 'phone_quote\NewQuote@add_blog');
//Route::post('/save_blog', 'phone_quote\NewQuote@save_blog');
//
//Route::get('/add_service', 'phone_quote\NewQuote@add_service');
//Route::post('/save_service', 'phone_quote\NewQuote@save_service');
//
////ichat
//Route::get('/chats', 'phone_quote\global_chat\ChatController@index');
//Route::post('/save_chat', 'phone_quote\global_chat\ChatController@save_chat')->name('save_chat');
//Route::get('/get_chat', 'phone_quote\global_chat\ChatController@get_chat')->name('get_chat');
//
////issue
//
//Route::get('/issues_add', 'issues\IssuesController@issues_add')->name('issues_add');
//Route::post('/save_issue', 'issues\IssuesController@save_issue')->name('save_issue');
//Route::get('/my_issues', 'issues\IssuesController@my_issues')->name('my_issues');
//Route::get('admin_issues','issues\IssuesController@admin_issues')->name('admin_issues');
//Route::get('issue_approve/{id}','issues\IssuesController@issue_approve')->name('issue_approve');
//Route::get('issue_reject/{id}','issues\IssuesController@issue_reject')->name('issue_reject');
//Route::get('get_notification','issues\IssuesController@get_notification')->name('get_notification');
//Route::get('issue_comments_list','issues\IssuesController@issue_comments_list')->name('issue_comments_list');
//Route::get('issue_comments_add/{id}','issues\IssuesController@issue_comments_add')->name('issue_comments_add');
//Route::post('/issue_comments_store','issues\IssuesController@issue_comments_store')->name('issue_comments_store');
//Route::get('issue_comments_done/{id}','issues\IssuesController@issue_comments_done')->name('issue_comments_done');
//Route::get('issue_view_admin/{id}','issues\IssuesController@issue_view_admin')->name('issue_view_admin');
//Route::post('/issue_penalty_store','issues\IssuesController@issue_penalty_store')->name('issue_penalty_store');
//
////front_view
//
//Route::get('/about_us', 'front_view@about_us');
//Route::get('/contact_us', 'front_view@contact_us');
//Route::get('/laado', 'front_view@laado');
//Route::get('/blog', 'front_view@blog');
//Route::get('/blog_detail/{id}', 'front_view@blog_detail');
//
//Route::get('/service', 'front_view@service');


});






