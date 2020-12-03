<?php

use Illuminate\Support\Facades\Route;
use Nvdai\Blog\Http\Controllers\ArticleController;

Route::get('articles', [ArticleController::class, 'index']);
