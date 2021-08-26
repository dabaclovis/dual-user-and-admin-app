<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>  'required',
            'body' =>  'required|max:2000',
            'image' => 'image|max:1999|nullable',
        ],[
            'title.required' => 'Enter a descriptive heading.',
            'body.required' => 'This content field is required',
        ]);
        $article = new Article();

        $article->title = Str::of($request->input('title'))->ucfirst()->trim();
        $article->body = Str::of($request->input('body'))->ucfirst()->trim();
        $article->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $file = $request->file('image')->getClientOriginalName();
            $sense = $file.'.'.time();
            $path = $request->file('image')->storeAs('articles',$sense, 'public');
        }
        $article->image = $sense;
        $article->save();
        return redirect('/article/articles')->with('success','Article created successfully, Thank You!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('articles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('articles.edit');
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
