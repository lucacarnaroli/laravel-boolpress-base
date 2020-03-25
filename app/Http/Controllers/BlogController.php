<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Mail\Message;
use PhpParser\Node\Expr\New_;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $blogs = Blog::all();
    //    nella view ci va nome della cartella (blog) .index(pagina stampa), compatc(vi va la var)
       return view('blog.index',compact('blogs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'title'=>'required|string|max:255',
            'subtitles' => 'required|string|max:255',
            'article' => 'required|string',
        ]);
        $newBlog = new Blog;
        $newBlog->fill($data);
        $saved = $newBlog->save();
        if ($saved == true) {
            $blog = Blog::orderBy('id','desc')->first();
            return view('blog.show',compact('blog'));
        } else {
            dd('error');
        }
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        if(empty($blog)){
            abort('404');
        }
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        if (empty($blog)) {
            abort('404');
        }
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->all();
        $blog->update($data);
        return view('blog.update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $id = $blog->id;
        $blog->delete();
        $data = [
            'id' => $id,
            'blogs' => Blog::all(),
        ];
        return view('blog.index',$data);
    }
}
