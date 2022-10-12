<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactanosMailable;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(StoreContacto $request){
        $correo = new ContactanosMailable($request->all());
        Mail::to('pablopg06@yahoo.com.ar')->send($correo);

        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}
