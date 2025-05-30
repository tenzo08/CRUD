<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CouncilController;

Route::view('/', 'library');
Route::view('/area_of_expertise', 'area_of_expertise.index');
Route::view('/audit_log', 'audit_log.index');
Route::view('/countries', 'countries.index');
Route::view('/degree_courses', 'degree_courses.index');
Route::view('/institutions', 'institutions.index');
Route::view('/local_regions', 'local_regions.index');
Route::view('/professions', 'professions.index');
Route::view('/specializations', 'specializations.index');
Route::view('/user_accounts', 'user_accounts.index');

Route::resource('councils', CouncilController::class);
