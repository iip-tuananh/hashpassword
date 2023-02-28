<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class mkController extends Controller
{
    public function index(){
        return redirect()->name('index');
    }
    public function mhmk(Request $request){
      
        $data['mahoa'] = Hash::make($request->name);
        return view('welcome', $data);
        
     
    }
}
