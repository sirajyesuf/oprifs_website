<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;


class PostController extends Controller
{
    public function show($id)
    {
        return view('news_readmore', ['news' => Post::findOrFail($id)]);
    }

    public function stories()
    {
        return view('stories', [
            'title' => 'Stories',
            'stories' => Post::where('category_id', Category::where('name', 'story')->first()->id)->paginate(4),
        ]);
    }
}
