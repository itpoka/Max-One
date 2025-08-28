<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\backend\dashboardController;
use App\Http\Controllers\backend\AdminAuthController;
use App\Http\Controllers\backend\OilTypeController;
use App\Http\Controllers\backend\gradeController;
use App\Http\Controllers\backend\featureController;
use App\Http\Controllers\backend\ProductController;

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



// =====================================
// Start backend
// =====================================



Route::prefix('backend')->name('backend.')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
    Route::post('/login-process', [AdminAuthController::class, 'login_process'])->name('login.submit');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

});

Route::prefix('backend')->name('backend.')->group(function () {
    
    // Dashboard
    Route::get('/oil-type', [OilTypeController::class, 'index'])->name('oil.type.index');
    Route::post('/oil-type-add', [OilTypeController::class, 'create'])->name('oil.type.add');
    Route::post('/oil-category-add', [OilTypeController::class, 'oil_category_create'])->name('oil.category.add');
    Route::get('/grade', [gradeController::class, 'index'])->name('grade.index');
    Route::post('/grade-add', [gradeController::class, 'create'])->name('grade.add');
    Route::get('/feature', [featureController::class, 'index'])->name('feature.index');
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::post('/AddNewProduct', [ProductController::class, 'AddNewProduct']);
});
//  ===================================
//  backend end
//  ====================================



Route::get('/', [ExampleController::class, 'view_home'])->name('home');
Route::get('/contact', [ExampleController::class, 'view_contact'])->name('contact');
Route::get('/about', [ExampleController::class, 'view_about'])->name('about');
Route::get('/at_a_Glance', [ExampleController::class, 'view_at_a_Glance'])->name('at_a_Glance');
Route::get('/leadership', [ExampleController::class, 'view_leadership'])->name('leadership');
Route::get('/ourvalues', [ExampleController::class, 'view_ourvalues'])->name('ourvalues');
Route::get('/diversity', [ExampleController::class, 'view_diversity'])->name('diversity');
Route::get('/ourhistory', [ExampleController::class, 'view_ourhistory'])->name('ourhistory');
Route::get('/ourStrategy', [ExampleController::class, 'view_ourStrategy'])->name('ourStrategy');
Route::get('/motorcycleEngineOils', [ExampleController::class, 'view_motoEngine'])->name('motorcycleEngineOils');
Route::get('/carEngineOils', [ExampleController::class, 'view_carEngine'])->name('carEngineOils');
Route::get('/productView', [ExampleController::class, 'view_productView'])->name('productView');
Route::get('/distributor', [ExampleController::class, 'view_distributor'])->name('distributor');
Route::get('/chooseProduct', [ExampleController::class, 'view_chooseProduct'])->name('chooseProduct');
Route::get('/openCard', [ExampleController::class, 'view_openCard'])->name('openCard');
Route::get('/checkout', [ExampleController::class, 'view_checkout'])->name('checkout');
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
