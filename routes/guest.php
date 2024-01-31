<?php

use App\Models\RequestJob;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Guest\TeamController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Guest\ServiceController;
use App\Http\Controllers\Guest\RequestJobController;
use App\Http\Controllers\Guest\ServiceIndexController;

Route::controller(ServiceController::class)->group(function(){
    Route::middleware("guest")->group(function(){
        Route::get("guest/service","all");
        Route::get("guest/show/{id}","show");
        });
    });

    Route::controller(HomeController::class)->group(function(){
    Route::get("redirect","redirect");

    });


    Route::controller(ServiceIndexController::class)->group(function(){
        Route::middleware("guest")->group(function(){
            Route::get("/","all");
            Route::get("guest/indexshow/{id}","show");
            });

        });



Route::controller(TeamController::class)->group(function(){
    Route::middleware("guest")->group(function(){

    Route::get("guest/team","all")->name("team/all");
    //Route::get("team/show/{id}","show");
    });
});

    Route::controller(RequestJobController::class)->group(function(){
    Route::middleware("guest")->group(function(){

        Route::get("guest/request/create","create")->name("guestrequest");
        Route::post("guest/request/store","store")->name("guestrequest/store");
        });
    });


        Route::controller(ContactController::class)->group(function(){
    Route::middleware("guest")->group(function(){

            Route::get("guest/contact/create","create")->name("guestcontact");
            Route::post("guest/contact/store","store")->name("guestcontact/store");
            });
        });

        //Route::middleware("guest")->group(function(){

        //    Route::get("/",function(){
        //        return view("guest.index");

        //    });
        //});

        Route::middleware("guest")->group(function(){

            Route::get("/aboutus",function(){
                return view("guest.about_us");

            });
        });

