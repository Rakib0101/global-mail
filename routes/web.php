<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/contact-us', 'contact-us')->name('contact-us');
Route::view('/faqs', 'faqs')->name('faqs');

// FAQ Category Routes
Route::view('/faqs/getting-started', 'faqs.getting-started')->name('faqs.getting-started');
Route::view('/faqs/activation', 'faqs.activation')->name('faqs.activation');
Route::view('/faqs/mailbox-features', 'faqs.mailbox-features')->name('faqs.mailbox-features');
Route::view('/faqs/account-management', 'faqs.account-management')->name('faqs.account-management');
Route::view('/faqs/enterprise', 'faqs.enterprise')->name('faqs.enterprise');
Route::view('/faqs/pricing', 'faqs.pricing')->name('faqs.pricing');
Route::view('/faqs/shipping', 'faqs.shipping')->name('faqs.shipping');
Route::view('/faqs/troubleshooting', 'faqs.troubleshooting')->name('faqs.troubleshooting');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
