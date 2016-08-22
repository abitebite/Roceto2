<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Gallery;
use App\Model\Event;
use App\Http\Requests;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::paginate();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = Event::lists('nama','id');
        return view('admin.gallery.create', compact('event'));
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'required',
            'kategori' => 'required',
        ]);
        $input = $request->all();

        // $photo = $request->thumbnail->getClientOriginalName();
        // $destination = 'images/gallery/'.$request->kategori.'/';
        // $request->thumbnail->move($destination, $photo);
        //
        // $input['thumbnail'] = $destination.$photo;
        $input['event_id'] = $request->kategori;
        Gallery::create($input);
        return redirect()->action('GalleryController@index')->with('success', 'Gallery has been created');
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
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
        return redirect()->action('GalleryController@index')->with('danger','Event has been deleted');
    }
}
