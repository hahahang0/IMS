<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\FooterController;
use Illuminate\Support\Facades\Route;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('public.home');
});

Route::get('/industries', function () {
    return view('public.industries');
})->name('public.industries');

Route::get('/about_us', function () {
    return view('public.about_us');
})->name('public.about_us');

Route::get('/pricing', function () {
    return view('public.pricing');
})->name('public.pricing');

Route::get('/contact', function () {
    return view('public.contact');
})->name('public.contact');
Route::get('/faq', function () {
    return view('public.faq');
})->name('public.faq');
Route::get('/demo', function () {
    return view('public.demo');
})->name('public.demo');

Route::get('/integrations', function () {
    return view('public.integrations');
})->name('public.integrations');

Route::get('/blog', function () {
    return view('public.blog');
})->name('public.blog');

Route::get('/support', function () {
    return view('public.support');
})->name('public.support');

Route::get('/terms', function () {
    return view('public.terms');
})->name('public.terms');

Route::get('/privacy', function () {
    return view('public.privacy');
})->name('public.privacy');

Route::get('/signup', function () {
    return view('public.auth.signup');
})->name('public.auth.signup');


Route::get('/login', function () {
    return view('public.auth.login');
})->name('public.auth.login');


Route::get('/features', function () {
    return view('public.features');
})->name('public.features');



Route::prefix('features')
    ->name('public.features.')
    ->group(function () {

        Route::view('/landing-cost', 'public.features.landing-cost')
            ->name('landing-cost');

        Route::view('/scan-import', 'public.features.scan-import')
            ->name('scan-import');

        Route::view('/stock-tracking', 'public.features.stock-tracking')
            ->name('stock-tracking');

        Route::view('/serial-expiry-tracking', 'public.features.serial-expiry-tracking')
            ->name('serial-expiry-tracking');

        Route::view('/fifo', 'public.features.fifo')
            ->name('fifo');

        Route::view('/packeting', 'public.features.packeting')
            ->name('packeting');
    });








Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');

    Route::middleware('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    });
    Route::middleware(['auth', 'admin'])->group(function () {

        //admin home page
        Route::get('/home', [HomeController::class, 'index'])
            ->name('admin.home');

        // GET  for home section
        Route::get('/home/{section}', [SectionController::class, 'edit'])
            ->name('admin.home.section.edit');

        // PUT for home section
        Route::put('/home/{section}', [SectionController::class, 'update'])
            ->name('admin.home.section.update');

        // For media section --> GET request
        Route::get('/media', [MediaController::class, 'index'])
            ->name('admin.media.index');
        //   FOR POST
        Route::post('/media', [MediaController::class, 'store'])
            ->name('admin.media.store');
        // FOR DELETE
        Route::delete('/media/{media}', [MediaController::class, 'destroy'])
            ->name('admin.media.destroy');


        Route::get('/footer', [FooterController::class, 'edit'])
            ->name('admin.footer.edit');

        Route::put('/footer', [FooterController::class, 'update'])
            ->name('admin.footer.update');
    });
});
