<?php

namespace App\Http\Controllers;

use App\Models\foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function show(){
        $fotos = foto::all();
        return view('welcome', compact('fotos'));
    }
    public function create(){
        $fotos=foto::all();
        return view('create', compact('fotos'));

    }
    public function store(Request $request){
        $request->validate([
            'foto'=>'required|mimes:png,jpg'
        ]);
        $fileName = $request->title . '-'. $request->author. '-'. $request->file('foto')->getClientOriginalName();
        $request->file('foto')->storeAs('public/image', $fileName);
        foto::create([
            'foto'=>$fileName
        ]);
        return redirect(route('show'));
    }
    public function delete($id){
        foto::destroy($id);
        return redirect(route('show'));
    }
}
