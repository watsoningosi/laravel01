<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($post)
    {
        // return 'hello';

        //data store
        $posts = [
            '1' => 'hello to discovery',
            '2' => 'peanut humper episode yeah',
            '3' => 'cyril figus , jerry smith'

        ];
        if (!array_key_exists($post, $posts)) {
            abort(404, 'No post found');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
