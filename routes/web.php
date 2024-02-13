<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('admin/companies', CompanyController::class);
    Route::resource('admin/announcements', AnnouncementsController::class);
    Route::resource('admin/statics', StaticController::class);
    Route::resource('admin/skills', SkillController::class);
    Route::get('admin/applies', [ApplyController::class, 'index'])->name('applies.index');
    Route::get('admin/applies/{id}', [ApplyController::class, 'index'])->name('applies.show');
    Route::resource('admin/users', UserController::class);
    Route::post('/profile/update-skills', [ProfileController::class, 'updateSkills'])->name('profile.updateSkills');
    Route::post('/applies', [ApplyController::class, 'store'])->name('applies.store');
    Route::post('admin/applies/{apply}/accept', [ApplyController::class, 'accept'])->name('applies.accept');
    Route::post('admin/applies/{apply}', [ApplyController::class, 'reject'])->name('applies.reject');




});

require __DIR__.'/auth.php';

 