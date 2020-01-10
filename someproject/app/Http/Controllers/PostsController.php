<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($post)
    {
        $posts = [
            'first' => 'Hello, first post',
            'second' => 'Hello, second post'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'sorry not found');
        }

        return view('post', [
            'post' => $posts[$post] ?? 'nothing'
        ]);
    }
}
