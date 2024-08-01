<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);



// Route::get('/posts/{post}/{category}', function($post, $category){
//     return "Aquí se mostrará {$post} de la categoría {$category}";
//     });
//GET
//POST
//PUT
//PATCH
//DELETE