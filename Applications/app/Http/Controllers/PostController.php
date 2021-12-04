<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->is_admin != 1){
            abort(403);
        }
            $data = [
                'tittle' => 'List Post',
                'posts' => Post::get(),
                'route' => route('post.create')

            ];
            return view('admin.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->is_admin != 1){
            abort(403);
        }
        $data = [
            'tittle' => 'Create New',
            'method' => 'POST',
            'route' => route('post.store')

        ];
        return view('admin.post.editor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->is_admin != 1){
            abort(403);
        }
        $post = new Post;
        $user_id = auth()->user()->id;

        $post->user_id = $user_id;
        $post->tittle = $request->tittle;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
     
            $data = [
                'tittle' => 'Post Detail',
                'post' => Post::where('slug',$slug)->first(),

            ];
            return view('/post', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->is_admin != 1){
            abort(403);
        }
        $data = [
            'tittle' => 'Edit Post',
            'method' => 'PUT',
            'route' => route('post.update',$id),
            'post'=>Post::where('id',$id)->first()
        ];

        //dd('ok form edit');
        return view('admin.post.editor', $data );
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
        if(Auth::user()->is_admin != 1){
            abort(403);
        }
        $post= Post::find($id);
        $user_id = auth()->user()->id;

        $post->user_id = $user_id;
        $post->tittle = $request->tittle;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->update();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->is_admin != 1){
            abort(403);
        }
        $destroy = Post::where('id', $id);
        $destroy->delete();
        return redirect(route("post.index"));
    }
}
