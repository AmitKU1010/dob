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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'WelcomeController@index');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// ==================== CUSTOM PAGES ============================= //
Route::get('/about', 'Pages\PagesController@about')->name('about');
Route::get('/contact', 'Pages\PagesController@contact')->name('contact');
Route::get('/services', 'Pages\PagesController@services')->name('services');
Route::get('/careers', 'Pages\PagesController@careers')->name('careers');
Route::get('/help', 'Pages\PagesController@help')->name('help');
Route::get('/faq', 'Pages\PagesController@faq')->name('faq');
Route::get('/terms_conditions', 'Pages\PagesController@terms_conditions')->name('terms_conditions');
Route::get('/privacy_policy', 'Pages\PagesController@privacy_policy')->name('privacy_policy');
Route::get('/sitemap', 'Pages\PagesController@sitemap')->name('sitemap');

Route::post('/updatecustomer/{id}', 'CustomerController@updatecustomer');

Route::get('/vendor/login', 'Auth\LoginController@vendorlogin')->name('vendor_login');

  

##  ## 
### ##
##  ##
// ==================== ADMIN SECTION ============================= //
Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@dashboard');

    // Route::get('categories/{category}/remove', 'CategoryController@remove')->name('categories.remove');
    // Route::get('categories/trash', 'CategoryController@trash')->name('categories.trash');
    // Route::get('categories/recover/{id}', 'CategoryController@recoverCat')->name('categories.recover');

    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    Route::get('vendor/dashboard', 'AdminController@vendordashboard');



    Route::resource('profiles', 'ProfileController');
    Route::resource('profiles', 'ProfileController');



    // pincode
    Route::resource('pins', 'PinController');
    Route::post('/pins/create', 'PinController@create');
    Route::get('/pins/edit/{id}', 'PinController@edit'); 
    Route::post('/pins/update/{id}', 'PinController@update'); 
    Route::post('/pins/update/{id}', 'PinController@update');      
    Route::get('/pins/destroy/{id}','PinController@destroy');
    // pincode
     

     
    // branches
    Route::resource('branches', 'BranchController');
    Route::post('/branches/store', 'BranchController@store');
    Route::get('/branches/edit/{id}', 'BranchController@edit'); 
    Route::post('/branches/update/{id}', 'BranchController@update'); 
    Route::get('/branches/destroy/{id}','BranchController@destroy');
    // branches


      // departments
    Route::resource('departments', 'DepartmentController');
    Route::post('/departments/store', 'DepartmentController@store');
    // Route::get('/departments/edit/{id}', 'DepartmentController@edit'); 
    // Route::post('/departments/update/{id}', 'DepartmentController@update'); 
    // Route::get('/departments/destroy/{id}','DepartmentController@destroy');
    // departments

    
      // categories
    Route::resource('categories', 'CategoryController');
    Route::post('/categories/store', 'CategoryController@store');
    // Route::get('/categories/edit/{id}', 'CategoryController@edit'); 
    // Route::post('/categories/update/{id}', 'CategoryController@update'); 
    // Route::get('/categories/destroy/{id}','CategoryController@destroy');
    // categories

     // Sub-categories
    Route::resource('subcategories', 'SubcatagoryController');
    Route::post('/subcategories/store', 'SubcatagoryController@store');
    // Route::get('/subcategories/edit/{id}', 'SubcatagoryController@edit'); 
    // Route::post('/subcategories/update/{id}', 'SubcatagoryController@update'); 
    // Route::get('/subcategories/destroy/{id}','SubcatagoryController@destroy');
    // Sub-categories


        // Service Type
    Route::resource('servicetype', 'ServiceTypeController');
    Route::post('/servicetype/store', 'ServiceTypeController@store');
    // Route::get('/servicetype/edit/{id}', 'ServiceTypeController@edit'); 
    // Route::post('/servicetype/update/{id}', 'ServiceTypeController@update'); 
    // Route::get('/servicetype/destroy/{id}','ServiceTypeController@destroy');
    // Service Type


     // catagory list
    Route::resource('catagorylist', 'CatagoryListController');
    Route::post('/catagorylist/store', 'CatagoryListController@store');
    // Route::get('/catagorylist/edit/{id}', 'CatagoryListController@edit'); 
    // Route::post('/catagorylist/update/{id}', 'CatagoryListController@update'); 
    // Route::get('/catagorylist/destroy/{id}','CatagoryListController@destroy');
    // catagory list
  

      // services 
    Route::resource('services', 'ProductController');
    Route::post('/services/store', 'ProductController@store');
    // Route::get('/catagorylist/edit/{id}', 'CatagoryListController@edit'); 
    // Route::post('/catagorylist/update/{id}', 'CatagoryListController@update'); 
    // Route::get('/catagorylist/destroy/{id}','CatagoryListController@destroy');
    // services


       //managers
    Route::resource('managers', 'ManagerController');
     Route::post('/managers/store', 'ManagerController@store');
    Route::get('/managers/edit/{id}', 'ManagerController@edit'); 
    Route::post('/managers/update/{id}', 'ManagerController@update'); 
    Route::get('/managers/destroy/{id}','ManagerController@destroy');

    //managers



         //vendor
    Route::resource('vendors', 'VendorController');
     Route::post('/vendors/store', 'VendorController@store');
    Route::get('/vendors/edit/{id}', 'VendorController@edit'); 
    Route::post('/vendors/update/{id}', 'VendorController@update'); 
    Route::get('/vendors/destroy/{id}','VendorController@destroy');

    //vendor
    

    // ajax related
     Route::post('/get/catagory', 'AjaxController@getcatagoryBydepartment'); 
     Route::post('/get/subcatagory', 'AjaxController@getsubcatagoryBycatagory'); 




});
