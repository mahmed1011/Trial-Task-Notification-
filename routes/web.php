<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('notify', [HomeController::class, 'notify']);
Route::get('markasread/{id}', [HomeController::class, 'markasread'])->name('markasread');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::put('/mark-notification-read/{notification}', [NotificationController::class, 'markAsRead'])
    ->name('mark.notification.read');

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'admin'], function () {

    //Admin Panel
    Route::get('admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Show All Users
    Route::get('users', [AdminController::class, 'users'])->name('users');
    Route::get('delete/{id}', [AdminController::class, 'user_destroy'])->name('delete.user');
    // End Users

    // Admin Can Send Custom notification of Specific user
    Route::get('/admin/send-notification', [AdminController::class, 'showSendNotificationForm'])->name('admin.send-notification');
    Route::post('/admin/send-notification', [AdminController::class, 'sendNotification']);

    // Admin Can change email content
    Route::get('/admin/email-form', [AdminController::class, 'showEmailForm'])
        ->name('admin.email.form');

    Route::post('/admin/send-custom-email', [AdminController::class, 'sendCustomEmail'])
        ->name('send.custom.email');
});

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});
