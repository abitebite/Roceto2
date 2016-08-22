<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.category.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.category.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);
        $input = $request->all();
        $event = Event::findOrFail($id);
        $input['event_id'] = $event->id;
        Category::create($input);
        return redirect()->action('EventController@show', $event->id)->with('success', 'Category has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $id_category)
    {
        $event = Event::findOrFail($id);
        $category = Category::findOrFail($id_category);
        return view('admin.category.show', compact('event', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $id_category)
    {
        $event = Event::findOrFail($id);
        $category = Category::findOrFail($id_category);
        return view('admin.category.edit', compact('event', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_category)
    {
        $this->validate($request, [
            'nama' => 'required'
        ]);
        $event = Event::findOrFail($id);
        $category = Category::findOrFail($id_category);
        $input = $request->all();
        $category->update($input);
        return redirect()->action('EventController@show', [$event->id])->with('danger', 'Category has been deleted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_category)
    {
        $event = Event::findOrFail($id);
        $category = Category::findOrFail($id_category);
        $category->delete();
        return redirect()->action('EventController@show', $event->id)->with('danger', 'Category has been deleted');
    }
}