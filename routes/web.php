<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage\IndexController;
use App\Http\Controllers\Introduce\IntroduceController;
use App\Http\Controllers\Location\LocationController;
use App\Http\Controllers\Production\ProductionController;
use App\Http\Controllers\Utility\UtilityController;
use App\Http\Controllers\Library\LibraryController;
use App\Http\Controllers\Progress\ProgressController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\News\NewsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localize']], function () {
    Route::get(LaravelLocalization::transRoute('routes.homepage.index'), [IndexController::class, 'index'])->name('homepage.index');
    Route::get(LaravelLocalization::transRoute('routes.introduce.index'), [IntroduceController::class, 'index'])->name('introduce.index');
    Route::get(LaravelLocalization::transRoute('routes.location.index'), [LocationController::class, 'index'])->name('location.index');
    Route::get(LaravelLocalization::transRoute('routes.Product.index'), [ProductionController::class, 'index'])->name('Product.index');
    Route::get(LaravelLocalization::transRoute('routes.utility.index'), [UtilityController::class, 'index'])->name('utility.index');
    Route::get(LaravelLocalization::transRoute('routes.news.index'), [NewsController::class, 'index'])->name('news.index');
    Route::get(LaravelLocalization::transRoute('routes.news.show'), [NewsController::class, 'show'])->name('news.show');
    Route::get(LaravelLocalization::transRoute('routes.progress.index'), [ProgressController::class, 'index'])->name('progress.index');
    Route::get(LaravelLocalization::transRoute('routes.library.index'), [LibraryController::class, 'index'])->name('library.index');
    Route::get(LaravelLocalization::transRoute('routes.contact.index'), [ContactController::class, 'index'])->name('contact.index');
    Route::get(LaravelLocalization::transRoute('routes.library.viewPDF'), [ContactController::class, 'viewPDF'])->name('library.viewPDF');
    Route::post(LaravelLocalization::transRoute('routes.info.send'), [IndexController::class, 'send'])->name('info.send');
});


Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('images', 'ImageController');
    Route::resource('products', 'ProductController');
    Route::resource('articles', 'ArticleController')->except(['index']);
    Route::resource('users', 'UserController');
    Route::get('index/{conditionView}', [ArticleController::class, 'index'])->name('articles.index');
    Route::delete('articles/forceDel/{article} ', [ArticleController::class, 'forceDestroy'])->name('articles.forceDestroy');
    Route::post('articles/trash/{article} ', [ArticleController::class, 'restore'])->name('articles.restore');
    Route::post('/order-number', [ArticleController::class, 'OrderNumber'])->name('admin.updateOrderNumber');
    Route::get('/media', [MediaController::class, 'index'])->name('admin.media.index');
    Route::post('/upload', [MediaController::class, 'upload'])->name('admin.media.upload');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/trash', [ArticleController::class, 'trashBin'])->name('admin.trashBin');
    Route::get('/about', function () {
        return view('admin/about');
    })->name('about');
});



