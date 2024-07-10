<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/posts', function () {
    return view('posts', [
        'posts' => [
            [
                'id' => '1',
                'title' => 'Judul 1',
                'author' => 'kevin',
                'slug' => 'judul-1',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus recusandae veritatis placeat modi dolore maxime doloribus sapiente, laborum enim officia omnis totam ipsa suscipit quibusdam, ea aut! Eaque nemo rerum cupiditate aliquam dolor dignissimos nulla delectus veritatis eveniet voluptates debitis, adipisci dolorum nihil fugiat magni excepturi dolore sequi soluta asperiores harum? In harum eos nihil voluptates, dolorum ab perspiciatis est quis ipsa ex veritatis nemo nam eius pariatur recusandae minima ipsum dignissimos facilis saepe sit quia quo. Possimus, quisquam minus tempora consequatur officia dolor architecto sed repudiandae mollitia repellendus animi quasi maxime unde dolores placeat! Maxime, culpa iure voluptate iusto corrupti exercitationem reprehenderit tempore maiores quasi voluptatibus, eligendi officiis est recusandae odit, praesentium quod ea repudiandae molestias incidunt inventore adipisci ratione sapiente minima perspiciatis? Blanditiis, asperiores dolorem exercitationem fuga ad soluta, saepe quia, dolore hic veniam itaque cupiditate enim reprehenderit. Aut blanditiis vitae illo, ducimus commodi harum aliquid neque voluptate!'
            ],
            [
                'id' => '2',
                'title' => 'Judul 2',
                'author' => 'mira',
                'slug' => 'judul-2',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus recusandae veritatis placeat modi dolore maxime doloribus sapiente, laborum enim officia omnis totam ipsa suscipit quibusdam, ea aut! Eaque nemo rerum cupiditate aliquam dolor dignissimos nulla delectus veritatis eveniet voluptates debitis, adipisci dolorum nihil fugiat magni excepturi dolore sequi soluta asperiores harum? In harum eos nihil voluptates, dolorum ab perspiciatis est quis ipsa ex veritatis nemo nam eius pariatur recusandae minima ipsum dignissimos facilis saepe sit quia quo. Possimus, quisquam minus tempora consequatur officia dolor architecto sed repudiandae mollitia repellendus animi quasi maxime unde dolores placeat! Maxime, culpa iure voluptate iusto corrupti exercitationem reprehenderit tempore maiores quasi voluptatibus, eligendi officiis est recusandae odit, praesentium quod ea repudiandae molestias incidunt inventore adipisci ratione sapiente minima perspiciatis? Blanditiis, asperiores dolorem exercitationem fuga ad soluta, saepe quia, dolore hic veniam itaque cupiditate enim reprehenderit. Aut blanditiis vitae illo, ducimus commodi harum aliquid neque voluptate!'
            ]
        ]
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'title' => 'Judul 1',
            'author' => 'kevin',
            'slug' => 'judul-1',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus recusandae veritatis placeat modi dolore maxime doloribus sapiente, laborum enim officia omnis totam ipsa suscipit quibusdam, ea aut! Eaque nemo rerum cupiditate aliquam dolor dignissimos nulla delectus veritatis eveniet voluptates debitis, adipisci dolorum nihil fugiat magni excepturi dolore sequi soluta asperiores harum? In harum eos nihil voluptates, dolorum ab perspiciatis est quis ipsa ex veritatis nemo nam eius pariatur recusandae minima ipsum dignissimos facilis saepe sit quia quo. Possimus, quisquam minus tempora consequatur officia dolor architecto sed repudiandae mollitia repellendus animi quasi maxime unde dolores placeat! Maxime, culpa iure voluptate iusto corrupti exercitationem reprehenderit tempore maiores quasi voluptatibus, eligendi officiis est recusandae odit, praesentium quod ea repudiandae molestias incidunt inventore adipisci ratione sapiente minima perspiciatis? Blanditiis, asperiores dolorem exercitationem fuga ad soluta, saepe quia, dolore hic veniam itaque cupiditate enim reprehenderit. Aut blanditiis vitae illo, ducimus commodi harum aliquid neque voluptate!'
        ],
        [
            'id' => '2',
            'title' => 'Judul 2',
            'author' => 'mira',
            'slug' => 'judul-2',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus recusandae veritatis placeat modi dolore maxime doloribus sapiente, laborum enim officia omnis totam ipsa suscipit quibusdam, ea aut! Eaque nemo rerum cupiditate aliquam dolor dignissimos nulla delectus veritatis eveniet voluptates debitis, adipisci dolorum nihil fugiat magni excepturi dolore sequi soluta asperiores harum? In harum eos nihil voluptates, dolorum ab perspiciatis est quis ipsa ex veritatis nemo nam eius pariatur recusandae minima ipsum dignissimos facilis saepe sit quia quo. Possimus, quisquam minus tempora consequatur officia dolor architecto sed repudiandae mollitia repellendus animi quasi maxime unde dolores placeat! Maxime, culpa iure voluptate iusto corrupti exercitationem reprehenderit tempore maiores quasi voluptatibus, eligendi officiis est recusandae odit, praesentium quod ea repudiandae molestias incidunt inventore adipisci ratione sapiente minima perspiciatis? Blanditiis, asperiores dolorem exercitationem fuga ad soluta, saepe quia, dolore hic veniam itaque cupiditate enim reprehenderit. Aut blanditiis vitae illo, ducimus commodi harum aliquid neque voluptate!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['post' => $post]);
});

Route::get('/admin', function () {
    return view('admin-dashboard');
});

Route::get('/pemerintahan', function () {
    return view('dashboard');
});

Route::get('/potensi', function () {
    return view('dashboard');
});
