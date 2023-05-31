<?php

namespace App\Http\Controllers;

use App\Models\User;
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
  //show create form for the property on the admin section
  public function create()
  {
      return view('admin.create-articles');
  }

  //creates the property and stores in the database
  public function store(Request $request)
  {
      $formFields = $request->validate([
          'title' => 'required',
          'category_id' => 'required',
          'content' => 'required'
      ]);

      if ($request->hasFile('image')) {
          $formFields['image'] = $request->file('image')->store('image', 'public');
      }

      $formFields['user_id'] = auth()->id();

      Blog::create($formFields);

      return redirect('/viewArticles')->with('message', 'Article created successfully!');
  }

  public function edit(Blog $blog)
  {
      return view('admin.edit-article', ['blog' => $blog]);
  }

  public function update(Request $request, Blog $blog)
  {

      if ($blog->user_id != auth()->id()) {
          abort(403, 'Unauthorized Action');
      }

      $formFields = $request->validate([
        'title' => 'required',
        'category_id' => 'required',
        'content' => 'required'
      ]);

      if ($request->hasFile('image')) {
          $formFields['image'] = $request->file('image')->store('image', 'public');
      }

      $blog->update($formFields);

      return redirect('/viewArticles')->with('message', 'Article updated successfully!');
  }

  public function destroy(Blog $blog)
  {
      if ($blog->user_id != auth()->id()) {
          abort(403, 'Unauthorized Action');
      }
      $blog->delete();
      return redirect('/viewArticles')->with('message', 'Article deleted successfully!');
  }

  public function manage()
  {
      return view('admin.viewArticles', ['blogs' => auth()->user()->blogs()->get()]);
  }
}
