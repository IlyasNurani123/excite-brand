<?php


use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\DeleteModal;
use App\Http\Livewire\Admin\Projects\Index;
use App\Http\Livewire\Admin\Sliders\Slider;
use App\Http\Livewire\Admin\Sliders\AddSlider;
use App\Http\Livewire\Admin\Services\AddService;
use App\Http\Livewire\Admin\Features\ShowFeature;
use App\Http\Livewire\Admin\Services\UpdateService;
use App\Http\Livewire\Admin\Services\ServiceComponent;

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

// Route::get('/project', function () {
//     return view('welcome');
// })->name('project');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth:sanctum')->group(function () {
   
    Route::group(['middleware' => ['admin'],'prefix'=> 'admin'], function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');
        Route::get('/project', Index::class)->name('project');
        Route::get('/service', ServiceComponent::class)->name('service');
        Route::get('/service/add', AddService::class)->name('add-service');
        Route::get('/service/edit/{service}', UpdateService::class)->name('service.edit');
        Route::get('/service/feature',ShowFeature::class)->name('service.feature');
        Route::get('/slider', Slider::class)->name('slider');
        Route::get('/slider/create', AddSlider::class)->name('add.slider');
    });

});
