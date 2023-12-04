<?php
use App\Http\Controllers\ArticleController;
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

Route::get('/', [IndexController::class, 'index'])->name('homepage.index');
Route::get('/gioi-thieu', [IntroduceController::class, 'index'])->name('introduce.index');
Route::get('/vi-tri', [LocationController::class, 'index'])->name('location.index');
Route::get('/san-pham', [ProductionController::class, 'index'])->name('Product.index');
Route::get('/tien-ich', [UtilityController::class, 'index'])->name('utility.index');
Route::get('/tin-tuc', [NewsController::class, 'index'])->name('news.index');
Route::get('/tin-tuc/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/tien-do', [ProgressController::class, 'index'])->name('progress.index');
Route::get('/thu-vien', [LibraryController::class, 'index'])->name('library.index');
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact.index');
Route::get('/view-pdf', [ContactController::class, 'viewPDF'])->name('library.viewPDF');

Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('images', 'ImageController');
    Route::resource('products', 'ProductController');
    Route::resource('articles', 'ArticleController')->except(['index']);
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



