<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function workExperiences()
    {
        $data = collect(Storage::json('data/experiences.json'));
        return view('pages.work-experience', compact('data'));
    }
}
