<?php

use App\Http\Controllers\Auth\FacebookAuthController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\Ecommerce\HomeController;
use App\Http\Controllers\Home\BlogsController;
use App\Http\Controllers\Home\CartController;
use App\Http\Controllers\Home\CommentController;
use App\Http\Controllers\Home\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* HOME post */

Route::get('/', [ProductController::class, 'index'])->name('home.e_commerce.products.index')/* ->middleware('log.device.info', CacheMiddleware::class.':300') */;

Route::get('products/{product}', [ProductController::class, 'show'])->name('home.e_commerce.products.show');

/* Route::get('category/{category}', [ProductController::class, 'category'])->name('posts.category');
 */
Route::get('categoria/{category}', [ProductController::class, 'category'])->name('posts.category');

Route::get('tag{tag}', [ProductController::class, 'tag'])->name('posts.tag');


/* COMMENTARIOS  */
Route::get('/viewcomment', [CommentController::class, 'viewComment'])->name('viewcomment'); 
Route::get('/viewcommentpost/{id}', [CommentController::class, 'viewCommentPost'])->name('viewcommentpost'); 
Route::post('/agregarmensaje/{post}', [CommentController::class, 'agregarMensaje'])->name('agregarmensaje');


/* AUTENTICADOR GOOGLE login*/
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

/* AUTENTICADOR FACEBOOK */
Route::get('auth/facebook', [FacebookAuthController::class, 'redirect'])->name('facebook-auth');
Route::get('auth/facebook/call-back', [FacebookAuthController::class, 'callbackFacebook']);

//carrito de comprar vista 
 Route::Post('/agregarItem', [CartController::class, 'agregarItem'])->name('agregaritem'); 
 Route::get('/vercarrito', [CartController::class, 'verCarrito'])->name('home.e_commerce.cart.index'); 
 Route::get('/incrementar/{id}', [CartController::class, 'incrementarCantidad'])->name('incrementarcantidad'); 
 Route::get('/decrementar/{id}', [CartController::class, 'decrementarCantidad'])->name('decrementarcantidad');
 Route::delete('/eliminar/{id}', [CartController::class, 'eliminarProducto'])->name('eliminarproducto');
 Route::delete('/eliminarcarrito', [CartController::class, 'eliminarCarrito'])->name('eliminarcarrito');  
 Route::get('/comfirmarcarrito', [CartController::class, 'comfirmarCarrito'])->name('comfirmarcarrito');  
 Route::Post('/comprarProducto', [CartController::class, 'comprarProducto'])->name('comprarProducto');  
 
 
 /* ORDEN PEDIDOS */
 Route::get('/Blog', [BlogsController::class, 'index'])->name('home.Blogs.index');  



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */