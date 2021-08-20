<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
    public function index()
    {
        return view('programs', [
            'title' => 'Programs',
            'programs' => Program::all()
        ]);
    }
}
