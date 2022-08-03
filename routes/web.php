<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\WorkController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Controllers\Task\TaskController;

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

Route::get('/', [HomeController::class, 'index'] );
Route::get('/about', [AboutController::class, 'index'] );
Route::get('/service', [ServiceController::class, 'index'] );
Route::get('/work', [WorkController::class, 'index'] );
Route::get('/contact', [ContactController::class, 'index'] );
Route::get('/review', [ReviewController::class, 'index'] );

Route::post('/message', [ContactController::class, 'save'])->name("admin.message");
Route::post('/write-review', [ReviewController::class, 'saveReview'])->name("admin.review");
// Route::any('/viewreview', [ReviewController::class, 'display'] );

// Route for tasks
Route::get('/task', [TaskController::class, 'index'] );
Route::any('/email', [TaskController::class, 'Email'] );
Route::any('/gmap', [TaskController::class, 'GoogleMapApi'] );
Route::any('/youtube', [TaskController::class, 'YouTubeApi'] );
Route::any('/payment', [TaskController::class, 'PaymentGateway'] );
Route::any('/qr', [TaskController::class, 'QRCode'] );
Route::any('/captcha', [TaskController::class, 'Captcha'] );
Route::any('/topdf', [TaskController::class, 'WebpageToPdf'] );
Route::any('/exceltodatabase', [TaskController::class, 'ExcelToDatabase'] );
Route::any('/googlelogin', [TaskController::class, 'LoginWithGoogle'] );
Route::any('/fblogin', [TaskController::class, 'LoginWithFacebook'] );
Route::any('/multi-image', [TaskController::class, 'MultiImageUpload'] );
Route::any('/analytics', [TaskController::class, 'GoogleAnalytics'] );
Route::any('/seo', [TaskController::class, 'SEO'] );