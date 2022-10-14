<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',
    [
        'title' => 'Home'
    ]);
});

Route::get('/aboutus', function () {
    return view('aboutus', [
        'title' => 'About Us',
        'name' => 'Liggar Dicky Ardy Prayoga',
        'email' => 'liggardap@gmail.com',
        'image' => 'https://i.pinimg.com/564x/18/53/66/185366757d3dba63fbe71f702e441473.jpg'
    ]);
});

Route::get('/blog', function () {

    $blog_posts = [
        [
            'author' => 'Faqihuddin',
            'title'  => 'Artikel Pertama',
            'slug' => 'artikel-pertama',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet diam est, at accumsan nisi tincidunt vitae. Nunc malesuada sodales lectus ac dignissim. Duis eget vehicula urna. Proin a eros ut sapien feugiat egestas ac ac felis. Suspendisse faucibus imperdiet turpis. Sed eu leo nisl. Nullam non urna interdum, gravida felis nec, sodales dolor. Maecenas eget commodo tortor. Praesent vulputate odio mattis, vulputate arcu sed, pretium lectus. Integer semper at ligula eget blandit. Ut accumsan sapien ac risus vehicula ultricies. Fusce maximus nisi ac lorem eleifend, non tristique ipsum suscipit. Quisque tincidunt efficitur tortor eu pellentesque. Cras vel iaculis tortor.'
        ],
        [
            'author' => 'Amanda',
            'title'  => 'Artikel Kedua',
            'slug' => 'artikel-kedua',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet diam est, at accumsan nisi tincidunt vitae. Nunc malesuada sodales lectus ac dignissim. Duis eget vehicula urna. Proin a eros ut sapien feugiat egestas ac ac felis. Suspendisse faucibus imperdiet turpis. Sed eu leo nisl. Nullam non urna interdum, gravida felis nec, sodales dolor. Maecenas eget commodo tortor. Praesent vulputate odio mattis, vulputate arcu sed, pretium lectus. Integer semper at ligula eget blandit. Ut accumsan sapien ac risus vehicula ultricies. Fusce maximus nisi ac lorem eleifend, non tristique ipsum suscipit. Quisque tincidunt efficitur tortor eu pellentesque. Cras vel iaculis tortor.'
        ]
    ];

    return view('blog',
    [
        'title' => 'Blog',
        'posts' => $blog_posts
    ]);
});

Route::get('/contactus', function () {
    return view('contactus',
    [
        'title' => 'Contact Us'
    ]);
});

//Halaman single post
Route::get('post/{slug}', function ($slug) {

    $blog_posts = [
        [
            'author' => 'Faqihuddin',
            'title'  => 'Artikel Pertama',
            'slug' => 'artikel-pertama',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet diam est, at accumsan nisi tincidunt vitae. Nunc malesuada sodales lectus ac dignissim. Duis eget vehicula urna. Proin a eros ut sapien feugiat egestas ac ac felis. Suspendisse faucibus imperdiet turpis. Sed eu leo nisl. Nullam non urna interdum, gravida felis nec, sodales dolor. Maecenas eget commodo tortor. Praesent vulputate odio mattis, vulputate arcu sed, pretium lectus. Integer semper at ligula eget blandit. Ut accumsan sapien ac risus vehicula ultricies. Fusce maximus nisi ac lorem eleifend, non tristique ipsum suscipit. Quisque tincidunt efficitur tortor eu pellentesque. Cras vel iaculis tortor.'
        ],
        [
            'author' => 'Amanda',
            'title'  => 'Artikel Kedua',
            'slug' => 'artikel-kedua',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer imperdiet diam est, at accumsan nisi tincidunt vitae. Nunc malesuada sodales lectus ac dignissim. Duis eget vehicula urna. Proin a eros ut sapien feugiat egestas ac ac felis. Suspendisse faucibus imperdiet turpis. Sed eu leo nisl. Nullam non urna interdum, gravida felis nec, sodales dolor. Maecenas eget commodo tortor. Praesent vulputate odio mattis, vulputate arcu sed, pretium lectus. Integer semper at ligula eget blandit. Ut accumsan sapien ac risus vehicula ultricies. Fusce maximus nisi ac lorem eleifend, non tristique ipsum suscipit. Quisque tincidunt efficitur tortor eu pellentesque. Cras vel iaculis tortor.'
        ]
    ];

    $new_post = [];
    foreach ( $blog_posts as $post ) {
        if($post['slug'] === $slug ) {
            $new_post = $post;
        }
    }
    return view('post',
    [
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
