<?php
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Newsletter;
use App\Models\Produit;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/product', function(){
    $products = Produit::all();
    return view('shop', compact('products'));
});

Route::get('show/{id}', [ProduitController::class, 'show']);

Route::get('showModal/{id}', [ProduitController::class, 'showQuickview']);

Route::get('/blog', function(){
    $blogs = Blog::latest()->first();
    return view('blog', compact('blogs'));
});

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::get('contact', function(){
    return view('contact');
});

Route::get('loginRegister', [RegisteredUserController::class, 'create']);

Route::resource('newsletter', NewsletterController::class);

require __DIR__.'/auth.php';
