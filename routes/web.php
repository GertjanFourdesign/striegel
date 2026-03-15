<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Page;
use App\Models\Vacancy;
use App\Models\FaqCategory;

Route::get("/", function () {
    if(Page::where('slug', 'home')) :
        $page = Page::where('slug', 'home')->first();
        return view('pages.nova-page', compact('page'));
    else : 
        $posts = Post::all();
        return view("pages.home", compact('posts'));
    endif;
})->name("home");

Route::get('/nieuws', function () {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('pages.nieuws', compact('posts'));
})->name('nieuws');

Route::get('/nieuws/{post:slug}', function (Post $post) {
    $previews = Post::orderBy('created_at', 'desc')
        ->where('slug', '!=', $post->slug)
        ->limit(3)->get();

    return view('pages.post', compact('post', 'previews'));
})->name('post');

Route::get('/vacatures', function () {
    $posts = Vacancy::orderBy('created_at', 'desc')->get();
    return view('pages.vacatures', compact('posts'));
})->name('vacatures');

Route::get('/vacatures/{slug}', function ($request) {
    $post = Vacancy::where('slug', $request)->first();
    return view('pages.vacature', compact('post'));
})->name('vacature');

Route::get('/faq', function () {
    $categories = FaqCategory::all();

    return view('pages.faq', compact('categories'));
})->name('faq');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/cookies', function () {
    return view('pages.cookies');
})->name('cookies');

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cache is cleared";
})->name('clear-cache');

Route::get('/disclaimer', function () {
    return view('pages.disclaimer');
})->name('disclaimer');

foreach (Page::all() as $page) :
    if ($page->slug != 'home') {
        Route::get($page->slug, function() {
            $page = Page::where('slug', Request::path())->first();
            return view('pages.nova-page', compact('page'));
        })->name($page->slug);
    }
endforeach;

Route::get('/', function () {
    return view('pages.home');
})->name('home');