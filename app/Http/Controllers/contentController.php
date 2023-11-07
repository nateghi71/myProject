<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class contentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        $contents = Content::all();
        return view('show' , compact('contents'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' =>'required' ,
           'message' =>'required'
        ]);

        Content::create([
            'name' => $request->name ,
            'message' =>$request->message
        ]);

        return redirect()->route('show');
    }

    public function destroy(Content $content)
    {
        $content->delete();
        return back();
    }
}
