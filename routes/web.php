<?php

use App\Http\Controllers\FamilleController;
use App\Http\Controllers\HomeControler;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\SousFamilleController;
use App\Http\Controllers\UserController;
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



//Home route 

Route::get('/', [HomeControler::class, 'index']);

//Products
Route::get('/Products',[ProduitController::class,'sort'])->name('product_lis');
Route::get('/Products/{id}',[ProduitController::class,'product'])->name('productdetail');

//categorie page 
Route::get('/categories',[FamilleController::class,'Categories'])->name('Categories');
Route::get('/categories/{id}',[FamilleController::class,'familleDetail'])->name('familleDetail');
Route::get('/sub-categories',[SousFamilleController::class,'Sub_Categories'])->name('Sub_Categories');
Route::get('/sub-categories/{id}',[SousFamilleController::class,'sous_familleDetail'])->name('sousfamilleDetail');

//Brand routes
Route::get('/Brand/{id}',[MarqueController::class,'showBrand'])->name('MarquesDetail');

#admin route
Route::middleware('auth', 'isAdmin:1')->group(function () {
    Route::get('/dachboard', [HomeControler::class, 'dachboard'])->name('backend.dachboard');

    //Categories route
    Route::resource('familles', FamilleController::class);
    Route::resource('sous-famille', SousFamilleController::class);
    Route::resource('Produits', ProduitController::class);
    Route::resource('marques', MarqueController::class);
    Route::get('clients', [UserController::class, 'index'])->name('clients.index');



  //Messages route
  Route::resource('/admin/Messages', MessageController::class);

    //profile routing
    Route::get('/admin/profile', [UserController::class, 'AdminProfile'])->name('Admin.profile');
    Route::put('/admin/Profile/update/{id}', [UserController::class, 'update'])->name('Admin.update');
    Route::put('/admin/profile/change-password/{id}', [UserController::class, 'changePassword'])->name('admin.changePassword');
    Route::delete('/admin/Profile/destroy/{id}', [UserController::class, 'destroy'])->name('admin.destroy');
});

//message route 
Route::post('/contact', [MessageController::class,'store'])->name('contact.store');
Route::get('/contact-us',function(){
    return view('Frontend.pages.contact');
    })->name('contact-us');


#admin route
Route::middleware('auth', 'isAdmin:0')->group(function () {

    //profile routing
    Route::get('/User/profile', [UserController::class, 'UserProfile'])->name('User.profile');
    Route::put('/User/Profile/update/{id}', [UserController::class, 'update'])->name('User.update');
    Route::put('/User/profile/change-password/{id}', [UserController::class, 'changePassword'])->name('profile.changePassword');
    Route::delete('/user/Profile/destroy/{id}', [UserController::class, 'destroy'])->name('profile.destroy');
});

//message route 
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');
Route::get('/contact-us', function () {
    return view('Frontend.pages.contact');
})->name('contact-us');

//route of registre and login 
Route::middleware('guest')->group(function () {
    Route::get('/Registre', [UserController::class, 'create']);
    Route::post('/Rgistre/store', [UserController::class, 'store'])->name('login.regitsre');
    Route::get('/Login', [loginController::class, 'show'])->name('login.show');
    Route::post('/Login', [loginController::class, 'login'])->name('login.login');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
