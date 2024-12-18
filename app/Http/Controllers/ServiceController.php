<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = [
            ['title' => 'Title 1', 'body' => 'body ng title1'],
            ['title' => 'Title 2', 'body' => 'body ng title2'],
        ];

        return view('home', compact('services'));
    }
}
