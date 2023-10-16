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

// VIEW

Route::view('', 'pages.main.index')->name('main');

// Info
Route::view('info', 'pages.info.index')->name('basicInformation');
Route::view('structure', 'pages.info.structure')->name('structureAndManagement');
Route::view('education', 'pages.info.education')->name('education');
Route::view('guide', 'pages.info.guide')->name('guide');
Route::view('material', 'pages.info.material')->name('material');
Route::view('services', 'pages.info.services')->name('services');
Route::view('financial', 'pages.info.financial')->name('financial');
Route::view('places', 'pages.info.places')->name('places');
Route::view('available', 'pages.info.available')->name('available');
Route::view('international', 'pages.info.international')->name('international');
Route::view('school', 'pages.info.school')->name('school');
 
// Documents
Route::view('documents', 'pages.documents.index')->name('documents');
