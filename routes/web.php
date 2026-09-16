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
