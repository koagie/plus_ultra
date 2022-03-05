<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AddController;
use App\Http\Controllers\Posts\PostsController;
use App\Http\Controllers\Demo\DemosController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return view('layouts.layout');
    });
    // add画面
    Route::get('/add', function () {
        return view('add');
    });
    Route::get('/wysiwyg', function () {
        return view('wysiwyg');
    });

    Route::post('/newpostsend', [AddController::class, 'save_new'])->name('save_new');

    // Posts画面
    Route::group(['prefix' => 'posts'], function() {
        Route::get('/index', [PostsController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostsController::class, 'create'])->name('posts.create');
        Route::post('/create', [PostsController::class, 'store'])->name('posts.store');
        Route::get('/{post}/show', [PostsController::class, 'show'])->name('posts.show');
        Route::get('/{post}/edit', [PostsController::class, 'edit'])->name('posts.edit');
        Route::patch('/{post}/update', [PostsController::class, 'update'])->name('posts.update');
        Route::delete('/{post}/destroy', [PostsController::class, 'destroy'])->name('posts.destroy');
        
        //top画面
        Route::get('/top', [PostsController::class, 'top',])->name('posts.top');
            
        //single page appのtop画面
        Route::get('/spa', [PostsController::class, 'index_spa'])->name('spa.index');
        Route::post('/spa', [PostsController::class, 'index_spa'])->name('spa.index');
        Route::get('/spa_portfolio', [PostsController::class, 'portfolio'])->name('spa.portfolio');
        Route::post('/spa_portfolio', [PostsController::class, 'portfolio'])->name('spa.portfolio');
        
    });


    //catwork画面
    Route::group(['prefix' => 'demo'], function() {
        Route::get('/catwork', [DemosController::class, 'catwork'])->name('demo.catwork');
    });



});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


