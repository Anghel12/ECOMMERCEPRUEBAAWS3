<?php

use App\Http\Controllers\Admin\ECommerce\CategoryController;
use App\Http\Controllers\Admin\ECommerce\CustomerController;
use App\Http\Controllers\Admin\ECommerce\DashboardController;
use App\Http\Controllers\Admin\ECommerce\OrderController;
use App\Http\Controllers\Admin\ECommerce\ProductController;
use App\Http\Controllers\Admin\ECommerce\ReviewController;
use App\Http\Controllers\Admin\ECommerce\SellerController;
use App\Http\Controllers\Admin\ECommerce\sliderController;
use App\Http\Controllers\Admin\ECommerce\TagController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\User\AdressController;
use App\Http\Controllers\Admin\User\ConfigController;
use App\Http\Controllers\Admin\User\NotificationController;
use App\Http\Controllers\Admin\User\PaymentMethodController;
use App\Http\Controllers\Admin\User\ProfileController;
use App\Http\Controllers\Admin\User\WishlistController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\SuperAdmin\ReportController;
use App\Http\Controllers\SuperAdmin\RoleController;
use App\Http\Controllers\SuperAdmin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('admin.index');
/* ,'auth:sanctum', 
config('jetstream.auth_session'),
'verified' */
Route::get('cart', [ProfileController::class, 'showCart'])->name('admin.user.cart.index'); 

/* ADMIN USER */
Route::get('/checkout', [CartController::class, 'checkout'])->name('admin.user.cart.checkout');  
Route::post('/CrearOrden', [CartController::class, 'CrearOrden'])->name('CrearOrden');  

Route::resource('wishlist', WishlistController::class)->names('admin.user.wishlist');
 
Route::resource('profile', ProfileController::class)->names('admin.user');

Route::resource('address', AdressController::class)->names('admin.user.address');

Route::resource('setting', ConfigController::class)->names('admin.user.setting');

Route::resource('order', OrderController::class)->names('admin.user.order');

Route::resource('payment_method', PaymentMethodController::class)->names('admin.user.payment_method');

Route::resource('notification', NotificationController::class)->names('admin.user.notification');

Route::resource('withlist', WishlistController::class)->names('admin.user.withlist');

/* ADMIN ECOMMERCE */

Route::resource('dashboard', DashboardController::class)->names('admin.e_commerce.dashboard');

Route::resource('products', ProductController::class)->names('admin.e_commerce.products');

Route::resource('categories', CategoryController::class)->names('admin.e_commerce.categories');

Route::resource('orders', OrderController::class)->names('admin.e_commerce.orders');

Route::resource('sellers', SellerController::class)->names('admin.e_commerce.sellers');

Route::resource('customers', CustomerController::class)->names('admin.e_commerce.customers');

Route::resource('reviews', ReviewController::class)->names('admin.e_commerce.reviews');

Route::resource('tags', TagController::class)->except('show')->names('admin.e_commerce.tags');

Route::resource('sliders', sliderController::class)->names('admin.e_commerce.sliders');


/*ADMIN/ super admin */

Route::resource('reports', ReportController::class)->names('super_admin.reports');

Route::resource('roles', RoleController::class)->names('super_admin.roles');

Route::resource('users', UserController::class)->names('super_admin.users');


