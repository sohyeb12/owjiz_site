<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ControllerLink extends Controller
{
    public function store(Request $request){
        $validate = $request->validate([
            'link' => 'required|string',
            'suggestd_word' => 'nullable|string', 
        ]);

        $link = new Link();
        $link->id = Str::uuid();
        $link->full_link = $request->input('link');

        if($request->input('suggestd_word')){
            $link->sorted_link = $request->input('suggestd_word') . rand(0,99999);
        }
        else{
            $link->sorted_link = $request->input('suggestd_word') . Str::random(7);
        }

        $link->save();

        return back()->with('message',"http://127.0.0.1:8000/ohjiz/"."$link->sorted_link");
    }

    public function show(string $sorted_link){
        $link = Link::where('sorted_link' , $sorted_link)->firstOrFail();
        // dd($link);
        return redirect($link->full_link);
    }
}
