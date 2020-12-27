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





/*Routes for Web Portal*/

use App\Category;
use App\News;
use App\PersonalDetail;
use App\Product;
use App\Slider;
use App\SocialLink;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;

Auth::routes();

//Route::get('/home', function (){
//   return redirect()->back();
//});

/*    User Index    */
Route::get('/user', 'PortalController@index_portal');
Route::get('product_detail/{id}', 'PortalController@product_detail');





/* Admin Portal Routes */
Route::get('/admin_index', 'AdminController@admin_index');

Route::get('/index_portal', 'PortalController@index_portal');

Route::get('/admin', 'PortalController@index_portal');

Route::get('/product_order', 'AdminController@product_order');

Route::get('/carousel_edit', 'AdminController@carousel_edit');

Route::get('/category_add', 'AdminController@category_add');

Route::get('/product_view', 'AdminController@product_view');

Route::get('/news', 'AdminController@news');

Route::post('/news', 'NewsController@store');

Route::get('/all_news', 'NewsController@destroy');

Route::get('/all_news', 'AdminController@all_news');

Route::get('cart', 'CartController@index')->name('cart.index');

Route::Post('cart', 'CartController@store')->name('cart.store');

Route::delete('cart/{id}', 'CartController@destroy')->name('cart.destroy');

Route::get('empty', function (){
    Cart::destroy();
});

Route::get('checkout', 'PortalController@checkout');




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




