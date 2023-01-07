<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Agung Nurhayanto",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, totam nulla! Voluptas laboriosam quis mollitia! Atque soluta officia voluptatem repellendus explicabo, rem facere perferendis similique delectus dolore, accusamus tempora rerum veniam, voluptatum quisquam? Ipsum fugiat soluta, molestias, velit nostrum, quasi perspiciatis harum aliquam dignissimos temporibus consequatur? Perferendis nisi quam tempore ad voluptas aperiam at. Rerum atque maiores fuga cum, voluptate similique aut alias ad vitae minus, aliquid libero, sed nam voluptates quo vel impedit earum doloribus in. Dolores, sint inventore."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Arlina Nur Cholifah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eveniet esse cum dolor perspiciatis, soluta, est eos quidem quibusdam enim consectetur! Quisquam molestias cupiditate laudantium tenetur corporis quis enim ad quo sapiente non libero sed quae dolorem deserunt accusantium ea dolor temporibus eaque eveniet unde doloremque sint, accusamus ut recusandae. Veritatis, eveniet totam illum nesciunt distinctio ea quasi ipsum possimus! Nemo corporis inventore optio pariatur saepe? Maxime cumque nemo nesciunt recusandae quibusdam iste deleniti voluptatibus earum. Voluptates atque tempore beatae nihil! Facilis voluptatum placeat, quidem mollitia dolore similique dolor sed vel excepturi. Vel culpa sunt delectus ad saepe! Aperiam, deleniti?"
    ]

    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();


    return $posts->firstWhere('slug', $slug);
 }
}
