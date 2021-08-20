<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutu;

class AboutusController extends Controller
{

    protected function index()
    {
        return view('aboutus', [
            'title' => 'About Us',
            'aboutus' => Aboutu::first()
        ]);
    }
}
