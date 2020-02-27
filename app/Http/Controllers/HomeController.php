<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intern;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index');
    }
    public function kaydet(Request $request) 
    {
        $request->validate ([
            'ad' => 'required',
            'soyad' => 'required',
            'okul' => 'required',
            'bolum' => 'required',
            'il' => 'required',
            'ilce' => 'required',
        ]);
        Intern::create([
            'ad' =>request('ad'),
            'soyad' => request('soyad'),
            'okul' => request('okul'),
            'bolum' => request('bolum'),
            'il' => request('il'),
            'ilce' => request('ilce'),
        ]);

        return redirect()->route('listeleme');    

    }
    public function listeleme() 
    {
        $interns =  Intern::all();

        return view('listeleme',compact('interns'));
    }
    public function sil($id) 
    {
        
        Intern::find($id)->delete();
        return redirect()->route('listeleme');   
    }
    public function show($id) 
    {   
        $interns = Intern::find($id);
        return view('duzeltme',compact('interns', 'id'));
    }
    public function update(Request $request, $id) 
        {   
            $request->validate ([
            'ad' => 'required',
            'soyad' => 'required',
            'okul' => 'required',
            'bolum' => 'required',
            'il' => 'required',
            'ilce' => 'required',
        ]);
        if($id) 
        {
            $intern = Intern::find($id);
            $intern->update([
                'ad' =>request('ad'),
                'soyad' => request('soyad'),
                'okul' => request('okul'),
                'bolum' => request('bolum'),
                'il' => request('il'),
                'ilce' => request('ilce'),
            ]);
        }

        return redirect()->route('listeleme');   
    }
}
