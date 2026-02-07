<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts' => [
        [
            'title' => 'Manfaat Bernafas Manual',
            'author' => 'FinWasHere',
            'time' => '2 May 2008',
            'content' => 'Apa yg kamu pikirkan setelah mendengar kata "Nafas kok manual"?? Mungkin kamu langsung marah karena kamu harus bernafas manual? Dan mungkin banyak orang akan beraksi sama denganmu'
        ],
        [
            'title'=> 'Karena pasti malu saat bertemu lagi',
            'author' => 'Nadya',
            'time' => '12 March 2009',
            'content'=> '"Tapi, selama kita melanjutkan perjalanan, bisa jadi nanti akan bertemu lagi. Perpisahan berlinang air mata itu tidak cocok untuk kita. Karena pasti malu saat bertemu lagi"'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
