<?php

use App\Http\Livewire\Admin\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\UserInterface\Index;
use App\Http\Livewire\UserInterface\ContactUs;
use App\Http\Livewire\UserInterface\WhoWeAre\AboutUs;

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


Route::get('/',Index::class)->name('index');

Route::get('/contact-us', ContactUs::class)->name('contact-us');
Route::get('/who-we-are', AboutUs::class)->name('who-we-are');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware('auth:sanctum')->group(function () {

//     Route::get('/dashboard', Dashboard::class)->name('dashboard');
//     Route::get('/project', Project::class)->name('project');

// });
