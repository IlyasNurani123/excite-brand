<?php

use App\Http\Livewire\Admin\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\UserInterface\Index;
use App\Http\Livewire\UserInterface\ContactUs;
use App\Http\Livewire\UserInterface\WhoWeAre\AboutUs;
use App\Http\Livewire\UserInterface\Services\WhatWeDo;
use App\Http\Livewire\UserInterface\Services\WebDevelopment;
use App\Http\Livewire\UserInterface\Services\WeDesign\WeDesign;
use App\Http\Livewire\UserInterface\Services\SeoService\SeoIndex;
use App\Http\Livewire\UserInterface\Services\Support\SupportIndex;
use App\Http\Livewire\UserInterface\Services\WePromote\PromoteIndex;

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
Route::get('/what-we-do', WhatWeDo::class)->name('what-we-do');
Route::get('/we-develop', WebDevelopment::class)->name('we-develop');
Route::get('/we-design', WeDesign::class)->name('we-design');
Route::get('/we-promote', PromoteIndex::class)->name('we-promote');
Route::get('/we-support', SupportIndex::class)->name('we-support');
Route::get('/seo-services', SeoIndex::class)->name('seo-services');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware('auth:sanctum')->group(function () {

//     Route::get('/dashboard', Dashboard::class)->name('dashboard');
//     Route::get('/project', Project::class)->name('project');

// });
