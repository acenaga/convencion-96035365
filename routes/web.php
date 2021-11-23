<?php

use App\Models\Skill;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;



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


// Route::get('/', function() {

//     return view('welcome');

// });


Route::get('hola', function() {



    return view('hola');

});

Route::get('adios', function() {


    return view('adios');

});

Route::view('/', 'welcome');

Route::get('/hola/{name}', function($name) {

    return '<h1> Hola '.$name.'</h1>';

});

Route::get('portfolio/{slug}', function($slug){

    $user = User::with('skill')->with('education')->where('slug', $slug)->first();

    if($user) {
        return view('portfolio')->with('user', $user);
    }else{
        return view('welcome');
    }
    //dd($user);


    // return view('portfolio', compact('user', 'skill'));

});

Route::get('portfolio', function(){

    $user = User::with('skill')->with('education')->latest()->get();
    //$skill = Skill::latest()->get();

    //dd($user);


    return view('portfolio')->with('user', $user[0]);
    // return view('portfolio', compact('user', 'skill'));

});

Route::get('logout-user', UserController::class.'@logout_user')->name('logout-user');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::group(['middleware' => ['role:admin']], function() {

        Route::get('/dashboard', function(){
            return view('admin.dashboard');

        })->name('dashboard');

        Route::resource('user', UserController::class)->except([
            'show'
        ]);

        Route::resource('skill', SkillController::class)->except([
            'show'
        ]);

    });


    Route::group(['middleware' => ['role:client']], function() {

        Route::get('my-portfolio', function(){

            return view('my-portfolio');
        })->name('my-portfolio');



    });





});



