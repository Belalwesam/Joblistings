<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CompanyController;
//users
//for seeing the landing page (main route)
Route::get('/' , [UsersController::class , 'index'])->name('user.index');
//for searching for a job
Route::post('/' , [UsersController::class , 'search'])->name('users.search');

//company 
//register page
Route::get('/register' , [CompanyController::class , 'registerPage'])->name('company.register');
//for storing company
Route::post('/register' , [CompanyController::class , 'store'])->name('company.store');
//dashboard
Route::get('/dashboard' , [CompanyController::class , 'dashboard'])->name('dashboard');
//login page
Route::get('/login' , [CompanyController::class , 'loginPage'])->name('company.loginPage');
//logging in to the system 
Route::post('/login' , [CompanyController::class , 'login'])->name('company.login');
//logging out 
Route::post('/logout' , [LogoutController::class , 'logout'])->name('logout');
//for creating a listing page
Route::get('/create' , [CompanyController::class , 'createPage'])->name('user.create');
//for storing a listing
Route::post('/store' , [CompanyController::class , 'storeListing'])->name('company.storeListing');
//ajaxtest
//Route::get('/ajaxtest' , [CompanyController::class , 'ajaxTest'])->name('ajaxTest');
//deleting a listing 
Route::delete('listings/{id}' , [CompanyController::class , 'destroy'])->name('listing.destroy');