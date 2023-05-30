<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //get and show all Properties on the client side
    public function list()
    {
        return view('blogs.articles', [
            'blogs' => Blog::latest()->filter(request(['category', 'search']))->paginate(4)
        ]);
    }

    //get and show single Property on the client side
    public function show(Blog $blog)
    {
        return view('blogs.details', [
            'blog' => $blog
        ]);
    }
    //********************************************//

}
