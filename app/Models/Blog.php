<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $posts = [
        [
            'title' => 'Post pertama',
            'slug' => 'post-pertama',
            'description' => 'ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama ini post pertama.'
        ],
        [
            'title' => 'Post kedua',
            'slug' => 'post-kedua',
            'description' => 'ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua ini post kedua.'
        ]
    ];

    public static function get_posts()
    {
        return collect(self::$posts);
    }

    public static function detail($slug)
    {
        $posts = static::get_posts();

        return $posts->firstWhere('slug', $slug);
    }
}
