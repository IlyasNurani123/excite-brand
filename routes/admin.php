<?php



use App\Http\Livewire\Admin\Banners;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\DeleteModal;
use App\Http\Livewire\Admin\Posts\AddPost;
use App\Http\Livewire\Admin\Posts\Category;
use App\Http\Livewire\Admin\Posts\ShowPost;
use App\Http\Livewire\Admin\Projects\Index;
use App\Http\Livewire\Admin\Sliders\Slider;
use App\Http\Livewire\Admin\Logos\LogoImage;
use App\Http\Livewire\Admin\Posts\TrashIndex;
use App\Http\Livewire\Admin\Posts\UpdatePost;
use App\Http\Livewire\Admin\Sliders\AddSlider;
use App\Http\Livewire\Admin\Services\AddService;
use App\Http\Livewire\Admin\Features\ShowFeature;
use App\Http\Livewire\Admin\Packages\ShowPackage;
use App\Http\Livewire\Admin\Services\UpdateService;
use App\Http\Livewire\Admin\Testimonials\Testimonial;
use App\Http\Livewire\Admin\Services\ServiceComponent;
use App\Http\Livewire\Admin\Testimonials\AddTestimonial;

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
    // \UniSharp\LaravelFilemanager\Lfm::routes();
    Route::group(['middleware' => ['admin'],'prefix'=> 'admin'], function () {
        Route::get('/dashboard', Dashboard::class)->name('dashboard');

        Route::get('/project', Index::class)->name('project');
        Route::get('/service', ServiceComponent::class)->name('service');
        Route::get('/service/add', AddService::class)->name('add-service');
        Route::get('/service/edit/{service}', UpdateService::class)->name('service.edit');
        Route::get('/service/feature',ShowFeature::class)->name('service.feature');
        Route::get('/slider', Slider::class)->name('slider');
        Route::get('/slider/create', AddSlider::class)->name('add.slider');
        Route::get('/package', ShowPackage::class)->name('package');
        Route::get('/logo', LogoImage::class)->name('logo');
        Route::get('/testimonial', Testimonial::class)->name('testimonial');
        Route::get('/testimonial/create', AddTestimonial::class)->name('add.testimonial');
        Route::get('/posts',ShowPost::class)->name('show.post');
        Route::get('/post/create',AddPost::class)->name('add.post');
        Route::get('/posts/edit/{id}', UpdatePost::class)->name('update.post');
        Route::get('/banner',Banners::class)->name('banner');
        Route::get('/categories',Category::class)->name('category');
        Route::get('/post/trash',TrashIndex::class)->name('post.trash');
       
    });

});
