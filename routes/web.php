<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.familylist');
});
Route::get('/member', function () {
    return view('pages.memberDetail');
});
Route::get('/member-management', function () {
    return view('pages.memberManagement');
});
Route::get('/search', function() {
    return view('pages.search');
});
Route::get('/login', function() {
    return view('pages.login');
});
Route::get('/register', function() {
    return view('pages.register');
});
