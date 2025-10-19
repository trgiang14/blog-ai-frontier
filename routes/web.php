<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/',[UserController::class,'showDataInHome'])->name('home');
Route::get('fullpost/{id}',[UserController::class, 'showFullPost'])->name('fullpost');
Route::get('/dashboard', [UserController::class,'home'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware(['auth','admin'])->group(function(){
    Route::get('/dashboard',[UserController::class,'index'])->name('admin.dashboard');
    Route::get('/dashboard/addpost',[AdminController::class,'addpost'])->name('admin.addpost');
    Route::post('/dashboard/addpost',[AdminController::class,'createpost'])->name('admin.createpost');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
