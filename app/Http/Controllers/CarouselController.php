<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class CarouselController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function carousel(Request $request)
    {
        $data = Post::get();
        return response()->json($data);
    }
}