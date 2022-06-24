<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Progress;
class ProgressController extends Controller
{
    
    public function index()
    {
        $progresses = Progress::all();
        return view ('progresses.index')->with('progresses', $progresses);
    }


    public function create()
    {
        return view('progresses.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Progress::create($input);
        return redirect('progress')->with('flash_message', 'Contact Addedd!');  
    }

    public function show($id)
    {
        $progresse = Progress::find($id);
        return view('progresses.show')->with('progresses', $progresse);
    }

    public function edit($id)
    {
        $progresse = Progress::find($id);
        return view('progresses.edit')->with('progresses', $progresse);
    }

   
    public function update(Request $request, $id)
    {
        $progresse = Progress::find($id);
        $input = $request->all();
        $progresse->update($input);
        return redirect('progress')->with('flash_message', 'Contact Updated!');  
    }
    


    public function destroy($id)
    {
        Progress::destroy($id);
        return redirect('progress')->with('flash_message', 'Contact deleted!');  
    }
}
