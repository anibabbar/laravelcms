<?php

namespace App\Http\Controllers;
use DB;
use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $post_type = $_GET['post_type'];
        $content = DB::table('content')->where('post_type', '=', $post_type)->get();

        return view('content.listcontent', [
            'content' => $content,
            'post_type' => $post_type
        ]);


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('content')->where('post_type', '=', 'category')->get();
        $tag = DB::table('content')->where('post_type', '=', 'tags')->get();
        $page = DB::table('content')->where('post_type', '=', 'page')->get();

        //return $content;

        //return view('content.create');
         $post_type = $_GET['post_type'];

        return view('content.create', [
            'category' => $category,
            'tag' => $tag,
            'page' => $page,
            'post_type' => $post_type
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
        //
        //dump($request);

        $content = new Content;

//        $content->title = $request->title;
//        $content->description = $request->description;
//        $content->excerpts = $request->excerpts;
//        $content->meta_title = $request->meta_title;
//        $content->meta_description = $request->meta_description;
//
//        $content->save();

        Content::create($request->except('_token'));

            $post_type = $request->post_type;

            $redirect_url = '/Content?post_type=' . $post_type;
     //   return ("Data Updated");
    return redirect($redirect_url);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post_type = $_GET['post_type'];
        $content = Content::where('id', $id)->firstOrFail();
        $category = DB::table('content')->where('post_type', '=', 'category')->get();
        $tag = DB::table('content')->where('post_type', '=', 'tags')->get();
        $page = DB::table('content')->where('post_type', '=', 'page')->get();

//        dd($content);
        return view('content.edit', [
            'content' => $content,
            'post_type' => $post_type,
            'category' => $category,
            'tag' => $tag


        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
      /* public function update(Request $request, Content $content) */
    {
        $content =  Content::find($id);

        $input = $request->all();

        $content->fill($input)->save();

        return back()->with('message', 'Record Successfully Updated!');


//        $content =  Content::find($id);
//
//        $content->title = request('title');
//        $content->slug = request('slug');
//        $content->description = request('description');
//        $content->meta_title = request('meta_title');
//        $content->meta_description = request('meta_description');
//        $content->tags = request('tags');
//        $content->category = request('category');
//
//        $content->save();
//
//        $post_type =  request('post_type');
//
//        $redirect_url = '/Content?post_type=' . $post_type;
//
//        return redirect($redirect_url);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();

        $redirect = $_SERVER['HTTP_REFERER'];

        return redirect($redirect);

    }

}
