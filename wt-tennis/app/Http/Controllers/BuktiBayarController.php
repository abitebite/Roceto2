<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Model\Category;
use App\Model\Participant;
use App\Model\Event;
use App\Model\BuktiPembayaran;

use App\Model\User;
use App\Http\Controllers\Controllers;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class BuktiBayarController extends Controller
{
    public function store($id, Request $request)
    {
    	$this->validate($request, [
            'atas_nama' => ['required'],
            'no_rek'    => ['required'],
            'bank'      => ['required'],
            'thumbnail' => ['required'],
        ]);
    	$input = $request->all();

    	$photo = $request->thumbnail->getClientOriginalName();
        $destination = 'images/bukti/';
        $request->thumbnail->move($destination, $photo);
        $input['thumbnail'] = $destination.$photo;
        
        $input['user_id'] = Auth::user()->id;

    	BuktiPembayaran::create($input);
        return redirect()->action('HomeController@index');

    }
}
