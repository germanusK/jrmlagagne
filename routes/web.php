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
Route::post('/contact', [Controller::class, 'contact_post']);
Route::get('/login', [Controller::class, 'login'])->name('public.login');
Route::post('/login', [Controller::class, 'authenticate']);
Route::get('/logout', [Controller::class, 'logout'])->name('public.logout');


Route::prefix('admin')->name('admin.')->middleware('admin')->group(function(){
    Route::get('home', [Admin\HomeController::class, 'home'])->name('home');
    // 
    Route::get('services/editor/{id?}', [Admin\ServiceController::class, 'editor'])->name('services.editor');
    Route::post('services/editor/{id?}', [Admin\ServiceController::class, 'save'])->name('services.save');
    Route::post('services/{id}/delete', [Admin\ServiceController::class, 'delete'])->name('services.delete');
    Route::get('services/{id}/images', [Admin\ServiceController::class, 'images'])->name('services.images');
    Route::get('services/{id}/images/edit', [Admin\ServiceController::class, 'edit_images'])->name('services.images.edit');
    Route::post('services/{id}/images/edit', [Admin\ServiceController::class, 'update_images']);
    Route::get('services/{id}/properties', [Admin\ServiceController::class, '_properties'])->name('services.properties');
    Route::get('services/{id}/projects', [Admin\ServiceController::class, '_projects'])->name('services.projects');
    Route::get('services/{id?}', [Admin\ServiceController::class, '_index'])->name('services.index');
    // 
    Route::get('projects/editor/{id?}', [Admin\ProjectController::class, 'editor'])->name('projects.editor');
    Route::post('projects/editor/{id?}', [Admin\ProjectController::class, 'save'])->name('projects.save');
    Route::get('projects/{id}/delete', [Admin\ProjectController::class, 'delete'])->name('projects.delete');
    Route::get('projects/{id}/images', [Admin\ProjectController::class, 'images'])->name('projects.images');
    Route::get('projects/{id}/images/edit', [Admin\ProjectController::class, 'edit_images'])->name('projects.images.edit');
    Route::post('projects/{id}/images/edit', [Admin\ProjectController::class, 'update_images']);
    Route::get('projects/{id?}', [Admin\ProjectController::class, '_index'])->name('projects.index');
    // 
    Route::get('property/editor/{id?}', [Admin\PropertyController::class, 'editor'])->name('property.editor');
    Route::post('property/editor/{id?}', [Admin\PropertyController::class, 'save'])->name('property.save');
    Route::get('property/{id}/delete', [Admin\PropertyController::class, 'delete'])->name('property.delete');
    Route::get('property/{id}/images', [Admin\PropertyController::class, 'images'])->name('property.images');
    Route::get('property/{id}/images/edit', [Admin\PropertyController::class, 'edit_images'])->name('property.images.edit');
    Route::post('property/{id}/images/edit', [Admin\PropertyController::class, 'update_images']);
    Route::get('property/{id?}', [Admin\PropertyController::class, '_index'])->name('property.index');
    // 
    Route::get('pages', [Admin\HomeController::class, 'public_data'])->name('pages');
    Route::get('pages/editor', [Admin\HomeController::class, 'edit_public_data'])->name('pages.editor');
    Route::post('pages/{id?}', [Admin\HomeController::class, 'update_public_data'])->name('pages.save');
});