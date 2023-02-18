<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route:: get("/home", function(){
//     return view("home");
// });

// Route:: get("contact", function(){
//     return view("contact");
// });

// Route:: get("about", function(){
//     return view("about");
// });

// Route:: view("/contact","home");


Route::get("/",[HomeController::class, "index"])->name('home');
Route::get("/payment",[HomeController::class, "payment"])->name('payment');
Route::get("/admissionform",[HomeController::class, "admissionform"])->name('apply');
Route::post("/admissionform", [HomeController::class, "storeData"])->name("student.create");
// Route::get("/admin.dashboard",[HomeController::class, "admin.dashboard"]);

