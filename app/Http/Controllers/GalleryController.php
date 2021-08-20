<?php

namespace App\Http\Controllers;

use App\Gallery;

class GalleryController extends Controller
{
    protected function index()
    {
        return view('gallery_list', [
            'galleries' => Gallery::paginate(4),
            'title' => 'Gallery',
        ]);
    }
}
