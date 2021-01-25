<?php

use App\Http\Livewire\Admin\Project;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\UserInterface\Index;
use App\Http\Livewire\UserInterface\Blog\BlogIndex;
use App\Http\Livewire\UserInterface\Blog\PostDetail;
use App\Http\Livewire\UserInterface\WhoWeAre\AboutUs;
use App\Http\Livewire\UserInterface\Services\WhatWeDo;
use App\Http\Livewire\UserInterface\Blog\PostBycategory;
use App\Http\Livewire\UserInterface\Services\WebDevelopment;
use App\Http\Livewire\UserInterface\ContactUs\ContactUsIndex;
use App\Http\Livewire\UserInterface\Projects\PortfolioDetail;
use App\Http\Livewire\UserInterface\Services\WeDesign\WeDesign;
use App\Http\Livewire\UserInterface\Services\SeoService\PpcIndex;
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

Route::get('/who-we-are', AboutUs::class)->name('who-we-are');
Route::get('/what-we-do', WhatWeDo::class)->name('what-we-do');
Route::get('/we-develop', WebDevelopment::class)->name('we-develop');
Route::get('/we-design', WeDesign::class)->name('we-design');
Route::get('/we-promote', PromoteIndex::class)->name('we-promote');
Route::get('/we-support', SupportIndex::class)->name('we-support');
Route::get('/seo-services', SeoIndex::class)->name('seo-services');
Route::get('/ppc-agency', PpcIndex::class)->name('ppc-agency');


Route::get('/contact-us',ContactUsIndex::class)->name('contact-us');

Route::get('/newupdates-blog',BlogIndex::class)->name('blogs');
Route::get('/newupdates-blog/{slug}',PostDetail::class)->name('details');
Route::get('newupdates-blog/category/{category}',PostBycategory::class)->name('post-by-category');
Route::get('/our-work', PortfolioDetail::class)->name('our-work');
