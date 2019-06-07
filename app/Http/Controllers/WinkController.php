<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Wink\WinkPost;

class WinkController extends Controller
{


    public function index()
    {
        $postData = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'ASC')
            ->simplePaginate(12);

        return view('blog.index', [
            'posts' => $postData,
        ]);
    }

    public function show($slug)
    {
        $postData = WinkPost::live()->whereSlug($slug)->firstOrFail();

        return view('post.index', [
            'post' => $postData
        ]);
    }
}
