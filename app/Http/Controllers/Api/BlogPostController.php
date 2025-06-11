<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index()
    {
        return response()->json(BlogPost::with('category')->orderByDesc('published_at')->paginate(10));
    }

    public function show($id)
    {
        return response()->json(BlogPost::with('category')->findOrFail($id));
    }
}
