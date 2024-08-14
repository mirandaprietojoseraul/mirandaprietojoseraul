<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

Route::get('prueba', function () {
    $post = new Post;
    $post->title = 'Título de prueba 1';
    $post->content = 'Contenido de prueba 1';
    $post->categoria = 'Categoria de prueba 1';
    $post->save();
    return $post;

    return 'Hola desde la ruta de prueba';
});
