<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PenulisCotroller;
use App\Http\Controllers\ArtikelController;

//Route::get('/', function () {
//
  //  return view('welcome');

  Route::get('/', [HomeController::class, 'index'])->name('home');
  Route::get('post/{slug}', [PostController::class, 'detail'])->name('post.detail');
  Route::get('/artikel', [ArtikelController::class, 'index']);
  Route::get('/artikel/{slug}', [ArtikelController::class, 'show']);
  Route::get('/artikels', [ArtikelController::class, 'index'])->name('artikels.index');
  Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
  Route::get('/penulis', [PenulisCotroller::class, 'index']);
  Route::get('/login', [User::class,'index']);







