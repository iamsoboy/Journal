<?php

use App\Http\Controllers\Guest\AboutUsController;
use App\Http\Controllers\Guest\ArchiveController;
use App\Http\Controllers\Guest\ArticleController;
use App\Http\Controllers\Guest\ContactUsController;
use App\Http\Controllers\Guest\FaqController;
use App\Http\Controllers\Guest\GuideController;
use App\Http\Controllers\Guest\HomeController;
use App\Http\Controllers\Guest\JournalController;
use App\Http\Controllers\Guest\ManuscriptController;
use App\Http\Controllers\Guest\MembersController;
use App\Http\Controllers\Guest\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact.store');
Route::get('/board-members', [MembersController::class, 'index'])->name('members');
Route::get('/submit-manuscript', [ManuscriptController::class, 'index'])->name('manuscript');
Route::post('/submit-manuscript', [ManuscriptController::class, 'store'])->name('manuscript.store');
Route::get('/journals', [JournalController::class, 'index'])->name('journals');
Route::get('/journals/{journal}', [JournalController::class, 'show'])->name('journals.show');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/manuscript-payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/archive/{journal}', [ArchiveController::class, 'archive'])->name('archive');
Route::get('/current-issue/{journal}', [ArchiveController::class, 'current'])->name('current-issue');
Route::get('/guidelines', [GuideController::class, 'index'])->name('guideline');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
