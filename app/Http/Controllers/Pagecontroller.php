<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Page;
use Illuminate\Support\Str;
class Pagecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $page)
    {

        $pages = DB::table('page')->get();

        return view('page.index', ['page' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dump($request);

//        $Page = new page();

        $title = $request->title;
        $description = $request->description;
        //$author = Auth::user()->id;
        $author = 1;
        $slug = Str::of($title)->slug('-');

        DB::table('page')->insert(
            [   'title' => $title,
                'description' => $description,
                'author' => $author,
                'slug'=> $slug]
        );

        return redirect('/Page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // return ("Hello");

//        $page = Page::where('slug', $page)->firstOrFail();
//      $page =  DB::table->where('slug', $page)->firstOrFail();
//    $page = App\page::find(1);
//        return view('page.show', [
//            'slug' => $page
//        ]);
        //return view('page.show', ['page' => Page::findOrFail($page)]);

        $page =   DB::table('page')
            ->where('id', $id)->FindOrFail();
        return $page;

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
        $title = $request->title;
        $description = $request->description;
        //$author = Auth::user()->id;
        $author = 1;

            DB::table('page')
            ->where('id', $id)
            ->update(
                [   'title' => $title,
                    'description' => $description,
                    'author' => $author,
                   ]

            );
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
