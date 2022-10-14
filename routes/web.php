<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelMarkdown\MarkdownRenderer;

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

Route::get('/', function () {
    $article = Article::all()->first();
    $html = app(MarkdownRenderer::class)->toHtml($article->body);
    return Blade::render(
        "
            @extends('welcome')
            @section('content')
                {$html}
            @endsection
        "
    );
});
