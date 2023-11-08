<?php

namespace App\Http\Controllers;
use App\Models\studentdetails;
use Illuminate\Http\Request;

class studentdetailsController extends Controller
{
    public function index()
    {
        $studentdetails = studentdetails::all();
        // return view ('studentdetails.index')->with('studentdetails', $studentdetails);
        return view ('studentfolder.index')->with('studentdetails', $studentdetails);
    }
 
    
    public function create()
    {
        return view('studentfolder.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        studentdetails::create($input);
        return redirect('studentdetails')->with('flash_message', 'Student Details Addedd!');  
    }
 
    
    public function show($id)
    {
        $studentdetails = studentdetails::find($id);
        return view('studentfolder.show')->with('studentdetails', $studentdetails);
    }
 
    
    public function edit($id)
    {
        $studentdetails = studentdetails::find($id);
        return view('studentfolder.edit')->with('studentdetails', $studentdetails);
    }
 
  
    public function update(Request $request, $id)
    {
        $studentdetails = studentdetails::find($id);
        $input = $request->all();
        $studentdetails->update($input);
        return redirect('studentdetails')->with('flash_message', 'Student Details Updated!');  
    }
 
  
    public function destroy($id)
    {
        studentdetails::destroy($id);
        return redirect('studentdetails')->with('flash_message', 'Student Details deleted!');  
    }

}