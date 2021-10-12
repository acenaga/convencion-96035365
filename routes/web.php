<?php

use App\Models\Skill;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\UserController;


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

Route::resource('user', UserController::class)->except([
    'show'
]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
