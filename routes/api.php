<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TechnologyController;
use App\Http\Controllers\Api\SkillController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\BlogPostController;
use App\Http\Controllers\Api\ContactController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/skills', [SkillController::class, 'index']);
Route::get('/technologies', [TechnologyController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::get('/blog-posts', [BlogPostController::class, 'index']);
Route::get('/blog-posts/{id}', [BlogPostController::class, 'show']);
Route::post('/contacts', [ContactController::class, 'store']);
