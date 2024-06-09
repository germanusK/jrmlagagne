<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'index'])->name('public.home');
Route::get('/service/{slug}', [Controller::class, 'service_details'])->name('public.service');
Route::get('/projects/details/{project_slug}', [Controller::class, 'project_details'])->name('public.project');
Route::get('/projects/{service_slug?}', [Controller::class, 'projects'])->name('public.projects');
Route::get('/about', [Controller::class, 'about'])->name('public.about');
Route::get('/contact', [Controller::class, 'contact'])->name('public.contact');
Route::get('/login', [Controller::class, 'login'])->name('public.login');


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('home', [Admin\HomeController::class, 'home'])->name('home');
    // 
    Route::get('services/{id?}', [Admin\ServiceController::class, '_index'])->name('services.index');
    Route::post('services/{id?}', [Admin\ServiceController::class, 'save'])->name('services.save');
    Route::get('services/{id}/editor', [Admin\ServiceController::class, 'editor'])->name('services.editor');
    Route::post('services/{id}/delete', [Admin\ServiceController::class, 'delete'])->name('services.delete');
    // 
    Route::get('projects/{id?}', [Admin\ProjectController::class, '_index'])->name('projects.index');
    Route::post('projects/{id?}', [Admin\ProjectController::class, 'save'])->name('projects.save');
    Route::get('projects/{id}/editor', [Admin\ProjectController::class, 'editor'])->name('projects.editor');
    Route::get('projects/{id}/delete', [Admin\ProjectController::class, 'delete'])->name('projects.delete');
    // 
    Route::get('property/{id?}', [Admin\PropertyController::class, '_index'])->name('property.index');
    Route::post('property/{id?}', [Admin\PropertyController::class, 'save'])->name('property.save');
    Route::get('property/{id}/editor', [Admin\PropertyController::class, 'editor'])->name('property.editor');
    Route::get('property/{id}/delete', [Admin\PropertyController::class, 'delete'])->name('property.delete');
    // 
    Route::get('pages', [Admin\HomeController::class, 'public_data'])->name('pages');
    Route::get('pages/editor', [Admin\HomeController::class, 'edit_public_data'])->name('pages.editor');
    Route::post('pages/{id?}', [Admin\HomeController::class, 'update_public_data'])->name('pages.save');
});