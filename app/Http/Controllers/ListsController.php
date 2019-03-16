<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lists;

class ListsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('create-item');
    }
    
    public function store(Request $request)
    {
        Lists::create($request->all());
        return redirect('/home');
    }

    public function show($id)
    {
        Lists::find($id)->delete();
        return redirect('/home');
    }
}
