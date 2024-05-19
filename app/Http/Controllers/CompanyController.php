<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(){
        $companies = Company::all();
        return view('welcome', compact('companies'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        Company::create([
            'company'=>$request->company,
            'capital'=>$request->capital
        ]);
        return redirect(route('show'));
    }
    public function edit($id){
        $companies=Company::findOrFail($id);
        return view('edit', compact('companies'));
    }
    public function update(Request $request, $id){
        $companies=Company::findOrFail($id);
        $companies->update([
            'company'=>$request->company,
            'capital'=>$request->capital
        ]);
        return redirect(route('show'));
    }
    public function delete($id){
        company::destroy($id);
        return redirect(route('show'));
    }
}
