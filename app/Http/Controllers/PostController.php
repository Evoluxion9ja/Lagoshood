<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use App\Comment;
use App\Reply;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'asc')->get();
        $categories = Category::all();
        $tags = Tag::all();
        return view('videos.index',[
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:10|max:255',
            'slug' => 'required|max:255|alpha_dash',
            'categories' => 'max:255',
            'tags' => 'max:255',
            'content' => 'required|min:10',
            'image' => 'image|nullable|max:1999'
        ]);

        //Upload image
        if($request->hasFile('image')){
            $imageNameWithExt = $request->file('image')->getClientOriginalName();
            $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
            $imageExtension = $request->file('image')->getClientOriginalExtension();
            $imageFullName = $imageName.'_'.time().'.'.$imageExtension;
            $location = $request->file('image')->storeAs('public/blog_files', $imageFullName);
        }
        else{
            $imageFullName = 'no_image.jpg';
        }

        $posts = new Post;
        $posts->title = $request->input('title');
        $posts->slug = $request->input('slug');
        $posts->content = $request->input('content');
        $posts->image = $imageFullName;
        $posts->user_id = auth()->user()->id;
        $posts->save();

        $posts->categories()->sync($request->categories, false);
        $posts->tags()->sync($request->tags, false);

        return redirect()->route('publish.index')->withSuccess('Article posted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
