<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts'=> Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        if ($request->file('image')) {
            $file = $request->file('image');
            $file_name = str_replace(' ', '', time() . "." . $file->extension());
            $request->file('image')->move('admin/post/image/', $file_name);
        }
       
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $file_name = str_replace(' ', '', time() . "." . $file->extension());
        //     $request->file('image')->move('admin/post/image/', $file_name);
        //     $file->storeAs($folder_path, $file_name);

        //     $validatedData['image'] = 'admin/post/image/' . $file_name;
        // } else {
        //     $validatedData['image'] = null;
        // }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        // Post::create($validatedData);
        $data = Post::create($validatedData);
        $data->image = $file_name;
        $data->save();

        return redirect('admin/posts')->with('success', 'New Post Telah Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
{
    $rules = [
        'title' => 'required|max:255',
        'category_id' => 'required',
        'image' => 'image|file|max:1024',
        'body' => 'required'
    ];

    if ($request->slug != $post->slug) {
        $rules['slug'] = 'required|unique:posts';
    }

    $validatedData = $request->validate($rules);
    $validatedData['user_id'] = auth()->user()->id;
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

    if ($request->hasFile('image')) { 
        $previousImagePath = public_path('admin/post/image/') . $post->image;  
        if (File::exists($previousImagePath)) {  
        File::delete($previousImagePath);
        }
          
        $file = $request->file('image');
        $file_name = str_replace(' ', '', time() . "." . $file->extension());
        $file->move('admin/post/image/', $file_name);           
        $validatedData['image'] = $file_name;
   
        // Update the post data
        Post::where('id', $post->id)
            ->update($validatedData);
    }
        return redirect('admin/posts')->with('success', 'Post Telah Di Update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
if ($post->image) {
    $imagePath = public_path('admin/post/image/') . $post->image;
    if (File::exists($imagePath)) {
        File::delete($imagePath);
    }
}
        Post::destroy($post->id);
        return redirect('admin/posts')->with('success', 'Post Telah Di Hapus!');
    }
}
