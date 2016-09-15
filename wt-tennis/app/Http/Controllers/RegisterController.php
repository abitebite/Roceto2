<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Participant;
use App\Model\Category;
use App\Model\Event;
use App\Http\Controllers\Controllers;
use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    protected $rules = [
        'nama_tim' => ['required'],
        'no_hp' => ['required'],
        'email' => ['required'],
        'warna_kostum' => ['required'],
        'jumlah_pemain' => ['required'],
        
    ];

    public function index($id)
    {
        $category = Category::findOrFail($id);
        $event_id = $category->event_id;
        $event = Event::findOrFail($event_id);
        return view('register.register', compact('category', 'event'));
    }

    public function store($id, Request $request)
    {
        $this->validate($request, $this->rules);
        $input = $request->all();
        $input['category_id'] = $id;
        $input['status'] = 'waiting';
        $input['user_id'] = Auth::user()->id;
        Participant::create($input);
        return redirect()->action('RegisterController@index', $id);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
        'atas_nama' => ['required'],
        'no_rek' => ['required'],
        'nama_bank' => ['required'],
        'bukti' => ['required']
        ]);

        $input = $request->all();
        $photo = $request->bukti->getClientOrginalName();
        $destination = 'images/bukti/';
        $request -> bukti->move($destination, $photo);

        $Participant = Participant::findOrFail($id);
        $input['bukti'] = $destination.$photo;
        $input['category_id'] = $id;
        $input['status'] = 'waiting';

        $Participant = Participant::findOrFail($id);
        $Participant->update($input);
        return redirect()->action('HomeController@index');

    }

}
