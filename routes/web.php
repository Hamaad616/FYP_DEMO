<?php
Auth::routes();

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

use App\Category;
use App\News;
use App\PersonalDetail;
use App\Product;
use App\Slider;
use App\SocialLink;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;


/*===========All Resource Controller start ============*/

Route::resource('vendor', 'VendorController');

Route::resource('sales', 'SalesController');

Route::resource('purchase', 'PurchaseController');

Route::resource('bulk', 'BulkController');

Route::resource('inventory', 'InventoryController');

Route::resource('contacts', 'ContactController');

Route::resource('adddetails', 'PersonalDetailController');

Route::resource('suppliers', 'SupplierController');

Route::resource('employees', 'EmployeeController');

Route::resource('product', 'ProductController'); /*product is path just for route*/

Route::resource('category', 'CategoryController'); /*product is path just for route*/

Route::resource('variant', 'VariantController');

Route::resource('variant_value', 'VariantValueController');

Route::resource('sociallink', 'SocialLinkController');

Route::resource('slider', 'SliderController');

Route::resource('video', 'VideoController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');




//Route::get('/home', function (){
//   return redirect()->back();
//});

/*    User Index    */
Route::get('/user', 'PortalController@index_portal');
Route::get('product_detail/{id}', 'PortalController@product_detail');
Route::get('/index_portal', 'PortalController@index_portal');

Route::get('/admin', 'PortalController@index_portal');


/*   Admin Routes        */

Route::get('/product_order', 'AdminController@product_order');

Route::get('/carousel_edit', 'AdminController@carousel_edit');

Route::get('/category_add', 'AdminController@category_add');

Route::get('/product_view', 'AdminController@product_view');

Route::get('/news', 'AdminController@news');

Route::post('/news', 'NewsController@store');

Route::get('/all_news', 'NewsController@destroy');

Route::get('/all_news', 'AdminController@all_news');


/* Admin Portal Routes */
Route::get('/admin_index', 'AdminController@admin_index');


Route::get('empty', function (){
    Cart::destroy();
});





/* Index Pages Routes */
Route::get('/', 'IndexController@index_portal');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('become_a_seller', 'IndexController@showPage');

Route::post('store_a_seller', 'IndexController@showPage');


Route::get('customer_contact', 'IndexController@contact');

//Route::get('customer_search', 'IndexController@search');

Route::post('customer_addcontact', 'IndexController@store');

Route::get('test', 'IndexController@test');

 Route::get('about', 'IndexController@about');

 Route::get('customer_cart', 'IndexController@cart');

 Route::get('customer_checkout', 'IndexController@checkout');

Route::get('customer_showproducts', 'IndexController@showproducts');

Route::get('customer_product_detail/{id}', 'IndexController@product_detail');

Route::get('cus_product_detail/{id}', 'IndexController@prod_detail');
Route::get('customer_shoplist', 'IndexController@shoplist');

Route::get('customer_shop_grid', 'IndexController@shop_grid');

Route::get('customer_shop_grid/{id}', 'IndexController@shop_grid_id');

Route::get('customer_video_show', 'IndexController@video_show');


Route::any ( '/customer_search', function () {

    $q = Request::input('search');
    $news = News::all();
    $detail      = PersonalDetail::first();
    $sliders     = Slider::all();
    $adddetails  = PersonalDetail::all();
    $categories = Category::all();
    $sociallink = SocialLink::all();

    if(isset($q))
    {
        $products = Product::where('product_name','like','%'.$q.'%')->where('status',1)->get();

        return view('customer.search', compact(['sliders','adddetails','sociallink','categories','detail','products','news']));
    }

});


/*  Web and CEO and Dashboard Routes   */

Route::get('contact', 'PortalController@contact');

Route::get('/search', 'PortalController@search');

Route::post('addcontact', 'HomeController@store');

Route::get('test', 'PortalController@test');

// Route::get('about', 'PortalController@about');

//Route::get('cart', 'PortalController@cart');

//Route::get('checkout', 'PortalController@checkout');

Route::get('showproducts', 'PortalController@showproducts');

Route::get('product_detail/{id}', 'PortalController@product_detail');


Route::get('shoplist', 'PortalController@shoplist');

Route::get('shop_grid', 'PortalController@shop_grid');

Route::get('shop_grid/{id}', 'PortalController@shop_grid_id');

Route::get('video_show', 'PortalController@video_show');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::Post('/cart', 'CartController@store')->name('cart.store');

Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

Route::post('/cart/switchToSaveForLater/{id}', 'CartController@SaveForLater')->name('cart.switchToSaveForLater');

Route::delete('/cart/switchToSaveForLater/{id}', 'SaveForLaterController@destroy')->name('saveForLater.destroy');

Route::post('/cart/switchToCart/{id}', 'SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');

Route::get('/thankyou', 'ConfirmationController@index')->name('confirmation.index');


Route::any ( '/search', function () {

    $q = Input::get ( 'search' );
    $news = News::all();
    $detail      = PersonalDetail::first();
    $sliders     = Slider::all();
    $adddetails  = PersonalDetail::all();
    $categories = Category::all();
    $sociallink = SocialLink::all();

    if(isset($q))
    {
        $products = Product::where('product_name','like','%'.$q.'%')->where('status',1)->get();

        return view('portal.search', compact(['sliders','adddetails','sociallink','categories','detail','products','news']));
    }

});




/*Routes for Dashboard*/

Route::get('/CEO ', 'DashboardController@index_dash');

Route::get('/CEO_web ', 'PortalController@index_portal');

// Route::get('admin', 'DashboardController@dashlogin');

Route::get('recovery_password', 'DashboardController@recovery_password');

Route::get('dashregister', 'DashboardController@dashregister');

Route::post('dashregister', 'DashboardController@postDashRegister');

Route::post('dashlogin', 'DashboardController@postDashLogin');

Route::get('view_invoice/{id}', 'DashboardController@view_invoice');

Route::get('bulkquery','DashboardController@bulkquery');

Route::get('add_qualified_supplier','DashboardController@add_qualified_supplier');

Route::get('employee_add', 'DashboardController@employee_add');

Route::get('add_employee_role', 'DashboardController@add_employee_role');

Route::get('test', 'DashboardController@test');

Route::post('admin', 'DashboardController@postDashLogin');

//Route::get('', 'DashboardController@dasloginpage');

//Route::get('/dashloginpage', function () {
//
//    return view('dash.dashlogin');
//});






//Route::get('/quick_view', function (){
//
//    return view('portal.quickview');
//
//});

Route::get('/home', function (){
    return  redirect('/user');
});




