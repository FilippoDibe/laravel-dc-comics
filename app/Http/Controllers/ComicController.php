<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\ComicRequest;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        $data = $request -> all();

        $comic = new Comic();

        $comic -> title = $data['title'];
        $comic -> description = $data['description'];
        $comic -> price = $data['price'];

        $comic -> save();

        return redirect() -> route('comic.show', $comic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic :: find($id);

        return view('pages.comics.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        return view('pages.comics.edit', compact('comic'));
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

        // $data =$request->validate([
        //     'title' => 'required|string|min:3|max:255',
        //     'desctiprion '=> 'nullable|string|max:255',
        //     'price'=> 'required|decimal:0,2',
        // ]);

        dd($data);
        $comic = Comic ::find($id);

       $comic ->  title = $data['title'];
       $comic ->  description = $data ['description'];
       $comic -> price  = $data ['price'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic=Comic::find($id);
        $comic->delete();
        return redirect()-> route('comic.index');
    }
}
