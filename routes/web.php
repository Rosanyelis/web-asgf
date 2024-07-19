<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('/residential-home-entertainment', [IndexController::class, 'residential_home'])->name('residential.one');
Route::get('/residential-smart-home-automation', [IndexController::class, 'residential_smarthome'])->name('residential.two');
Route::get('/residential-lighting-energy-control', [IndexController::class, 'residential_lighting'])->name('residential.three');
Route::get('/residential-security-installation', [IndexController::class, 'residential_security'])->name('residential.four');


Route::get('/comercial-integrated-security', [IndexController::class, 'comercial_security'])->name('comercial.one');
Route::get('/comercial-professional-av-system', [IndexController::class, 'comercial_professional'])->name('comercial.two');
Route::get('/comercial-it-structured-wired', [IndexController::class, 'comercial_it'])->name('comercial.three');

Route::get('/marine-professional-starlink-installation', [IndexController::class, 'marine_start'])->name('marine.one');
Route::get('/marine-kvh-partners', [IndexController::class, 'marine_kvh'])->name('marine.two');
Route::get('/marine-audio-video-systems', [IndexController::class, 'marine_system'])->name('marine.three');
Route::get('/marine-video-surveillance', [IndexController::class, 'marine_video'])->name('marine.four');

Route::get('/about-us', [IndexController::class, 'about'])->name('about');
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/blog/article/{slug}', [IndexController::class, 'blog_details'])->name('blog-details');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::post('/contact', [IndexController::class, 'contact_store'])->name('contact.send');


Route::get('comandos', function () {
    // Artisan::call('optimize');
    // Artisan::call('view:clear');
    // Artisan::call('cache:clear');
    // Artisan::call('route:clear');
    // Artisan::call('config:clear');
    // Artisan::call('filament:clear-cached-components');
    // Artisan::call('filament:cache-components');
    // Artisan::call('config:cache');
    // Artisan::call('view:cache');
    // Artisan::call('route:cache');
    //Artisan::call('icons:cache');
    Artisan::call('storage:link');

    return 'Comandos ejecutados con éxitos';
});
