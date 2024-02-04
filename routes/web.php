<?php

use App\Models\Country;
use App\Models\RequestJob;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\RequestJobController;
use App\Http\Controllers\Admin\SectionItemController;
use App\Http\Controllers\Admin\ServiceSectionController;
use App\Http\Controllers\Admin\ServiceCategoryController;

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
Route::middleware("auth")->group(function(){

Route::get('/dashboard', function () {
    return view('Admin.Dashboard.home');
});
});


Route::controller(LoginController::class)->group(function(){
    Route::middleware("guest")->group(function(){
    Route::get("login", "loginForm")->name("login");
    Route::post("login","login");
    });
});
Route::controller(LogoutController::class)->group(function(){
    Route::middleware("auth")->group(function(){
    Route::post("logout", "logout")->name("logout");

    });
});



//contacts
Route::controller( ContactController::class)->group(function(){
Route::middleware('auth')->group(function () {
    Route::get("/contacts","all");
    Route::put('/contacts/{id}/update-status', 'updateStatus')->name('admin.contacts.updateStatus');
    });
});



Route::controller(ServiceController::class)->group(function(){
Route::middleware('auth')->group(function () {
    Route::get("/services","all")->name("services");
    Route::get("/services/create","create")->name("services/create");
    Route::post("/services/store","store")->name("services/store");
    Route::get("/services/edit/{id}","edit");
    Route::put("/services/update/{id}","update");
    Route::delete("/services/delete/{id}","delete");
});
});


Route::controller(ServiceCategoryController::class)->group(function(){
    Route::middleware('auth')->group(function () {

    Route::get("/category","all")->name("category/all");
    Route::get("/category/create","create");
    Route::post('category/store',"store")->name("category/store");
    Route::get("/category/edit/{id}","edit")->name("category/edit");
    Route::put("/category/update/{id}","update")->name("category/update");
    Route::delete("/category/delete/{id}","delete")->name("category/delete");
});
});

Route::controller(ServiceSectionController::class)->group(function(){
    Route::middleware('auth')->group(function () {

    Route::get("/section","all")->name("section/all");
    Route::get("/section/create","create");
    Route::post('section/store',"store")->name("section/store");
    Route::get("/section/edit/{id}","edit")->name("section/edit");
    Route::put("/section/update/{id}","update")->name("section/update");
    Route::delete("/section/delete/{id}","delete")->name("section/delete");
});
});

Route::controller(SectionItemController::class)->group(function(){
    Route::middleware('auth')->group(function () {

    Route::get("/item","all")->name("item/all");
    Route::get("/item/create","create");
    Route::post('item/store',"store")->name("item/store");
    Route::get("/item/edit/{id}","edit")->name("item/edit");
    Route::put("/item/update/{id}","update")->name("item/update");
    Route::delete("/item/delete/{id}","delete")->name("item/delete");
});
});


Route::controller(JobController::class)->group(function(){
    Route::middleware('auth')->group(function () {

    Route::get("/job","all")->name("job/all");
    Route::get("/job/create","create");
    Route::post('job/store',"store")->name("job/store");
    Route::get("/job/edit/{id}","edit")->name("job/edit");
    Route::put("/job/update/{id}","update")->name("job/update");
    Route::delete("/job/delete/{id}","delete")->name("job/delete");
});
});


Route::controller(CountryController::class)->group(function(){
    Route::middleware('auth')->group(function () {

    Route::get("/country","all")->name("country/all");
    Route::get("/country/create","create");
    Route::post('country/store',"store")->name("country/store");
    Route::get("/country/edit/{id}","edit")->name("country/edit");
    Route::put("/country/update/{id}","update")->name("country/update");
    Route::delete("/country/delete/{id}","delete")->name("country/delete");
});
});

Route::controller(CityController::class)->group(function(){
    Route::middleware('auth')->group(function () {


    Route::get("/city","all")->name("city/all");
    Route::get("/city/create","create");
    Route::post('city/store',"store")->name("city/store");
    Route::get("/city/edit/{id}","edit")->name("city/edit");
    Route::put("/city/update/{id}","update")->name("city/update");
    Route::delete("/city/delete/{id}","delete")->name("city/delete");
});
});

Route::controller(RequestJobController::class)->group(function(){
    Route::middleware('auth')->group(function () {

    Route::get("/requestJob","all")->name("requestJob/all");
    Route::delete("/requestJob/delete/{id}","delete")->name("requestJob/delete");
});
});


Route::controller(TeamController::class)->group(function(){
    Route::middleware('auth')->group(function () {

    Route::get("/team","all")->name("team/all");
    Route::get("/team/create","create");
    Route::post('team/store',"store")->name("team/store");
    Route::get("/team/edit/{id}","edit")->name("team/edit");
    Route::put("/team/update/{id}","update")->name("team/update");
    Route::delete("/team/delete/{id}","delete")->name("team/delete");
});
});


Route::middleware("auth")->group(function(){
    Route::get("social",function(){
        return view("Admin.Dashboard.social");
        });
});

Route::middleware("auth")->group(function(){
Route::controller(SettingController::class)->group(function(){
    Route::get('settings/edit','edit')->name('settings.edit');
    Route::put('settings','update')->name('settings.update');
});

Route::middleware("auth")->group(function(){


Route::get('/socials', [SocialController::class, 'index'])->name('socials.index');
Route::get('/socials/create', [SocialController::class, 'create']);
Route::post('/socials', [SocialController::class, 'store'])->name('socials.store');
Route::delete('/socials/{id}', [SocialController::class, 'destroy'])->name('socials.destroy');


});
});


