<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Rota para obter usuário autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// =============================================================================
// ROTAS PÚBLICAS (sem autenticação)
// =============================================================================

// Users - Rotas públicas (listar e visualizar)
Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index');                    // GET /api/users -> users.index
    Route::get('{user}', 'show')->name('show');                // GET /api/users/{id} -> users.show
    Route::get('{userId}/posts', [PostController::class, 'getByUser'])->name('posts'); // GET /api/users/{userId}/posts -> users.posts
});

// Posts - Rotas públicas (listar e visualizar)
Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('/', 'index')->name('index');                   // GET /api/posts -> posts.index
    Route::get('{post}', 'show')->name('show');               // GET /api/posts/{id} -> posts.show
});

// Tags - Rotas públicas (listar, visualizar e buscar)
Route::prefix('tags')->name('tags.')->controller(TagController::class)->group(function () {
    Route::get('/', 'index')->name('index');                   // GET /api/tags -> tags.index
    Route::get('popular', 'popular')->name('popular');         // GET /api/tags/popular -> tags.popular
    Route::get('search', 'search')->name('search');           // GET /api/tags/search -> tags.search
    Route::get('{tag}', 'show')->name('show');               // GET /api/tags/{id} -> tags.show
    Route::get('{tagId}/posts', [PostController::class, 'getByTag'])->name('posts'); // GET /api/tags/{tagId}/posts -> tags.posts
});

// =============================================================================
// ROTAS DE AUTENTICAÇÃO
// =============================================================================

Route::prefix('auth')->controller(\App\Http\Controllers\Api\AuthController::class)->group(function () {
    Route::post('login', 'login')->name('login');              // POST /api/auth/login -> auth.login
    Route::post('register', 'register')->name('register');     // POST /api/auth/register -> auth.register
    
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('logout', 'logout')->name('logout');       // POST /api/auth/logout -> auth.logout
        Route::get('profile', 'profile')->name('profile');     // GET /api/auth/profile -> auth.profile
    });
});

// =============================================================================
// ROTAS PROTEGIDAS (com autenticação)
// =============================================================================

Route::middleware(['auth:sanctum'])->group(function () {
    
    // Users - Rotas protegidas (criar, atualizar, deletar)
    Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {
        Route::post('/', 'store')->name('store');              // POST /api/users -> users.store
        Route::put('{user}', 'update')->name('update');        // PUT /api/users/{id} -> users.update
        Route::delete('{user}', 'destroy')->name('destroy');   // DELETE /api/users/{id} -> users.destroy
    });

    // Posts - Rotas protegidas (criar, atualizar, deletar, publicar)
    Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
        Route::post('/', 'store')->name('store');              // POST /api/posts -> posts.store
        Route::put('{post}', 'update')->name('update');        // PUT /api/posts/{id} -> posts.update
        Route::delete('{post}', 'destroy')->name('destroy');   // DELETE /api/posts/{id} -> posts.destroy
        
        // Ações específicas de posts
        Route::post('{post}/publish', 'publish')->name('publish');     // POST /api/posts/{id}/publish -> posts.publish
        Route::post('{post}/unpublish', 'unpublish')->name('unpublish'); // POST /api/posts/{id}/unpublish -> posts.unpublish
    });

    // Tags - Rotas protegidas (criar, atualizar, deletar)
    Route::prefix('tags')->name('tags.')->controller(TagController::class)->group(function () {
        Route::post('/', 'store')->name('store');              // POST /api/tags -> tags.store
        Route::put('{tag}', 'update')->name('update');         // PUT /api/tags/{id} -> tags.update
        Route::delete('{tag}', 'destroy')->name('destroy');    // DELETE /api/tags/{id} -> tags.destroy
    });
});

// =============================================================================
// ROUTE MODEL BINDING PERSONALIZADO
// =============================================================================

// Route Model Binding para Post (busca por ID ou slug)
Route::bind('post', function ($value) {
    return \App\Models\Post::where('id', $value)
        ->orWhere('slug', $value)
        ->with(['user', 'tags'])
        ->firstOrFail();
});

// Route Model Binding para Tag (busca por ID ou slug)
Route::bind('tag', function ($value) {
    return \App\Models\Tag::where('id', $value)
        ->orWhere('slug', $value)
        ->withCount('posts')
        ->firstOrFail();
});

// Route Model Binding para User (carrega relacionamentos)
Route::bind('user', function ($value) {
    return \App\Models\User::findOrFail($value);
});
