<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use DataTables;
use Illuminate\Support\Facades\Auth;

class ConferenceController extends Controller
{
    public function index(){
        $conferences = Conference::all();
        return view('conference')->with('conferences', $conferences);
    }

    function create(){
        return view('add_conference');
    }

    function add(){
        return view('add_conference');
    }

    public function show($id){
        $conference = Conference::find($id);
        return view('show_conference')->with('conferences', $conference);
    }

    public function edit($id){
        $conference = Conference::find($id);
        return view('edit_conference')->with('conferences', $conference);
    }

    public function update(Request $request, $id){
        $conference = Conference::find($id);
        $request->validate([
            'title'  => 'required',
            'description' => 'required',
            'conference_date' => 'required|date',
            'address' => 'required',
            'participants' => 'required|numeric'
        ]);
        $input = $request->all();
        $conference->update($input);
        return redirect('conference')->with('success', 'Conference Updated');
    }

    public function destroy($id){
        Conference::destroy($id);
        return redirect('conference')->with('success', 'Conference Successfully Deleted');
    }

    function add_validation(Request $request){
        $request->validate([
            'title'  => 'required',
            'description' => 'required',
            'conference_date' => 'required|date',
            'address' => 'required',
            'participants' => 'required'
        ]);
        $data = $request->all();

        Conference::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'conference_date' => $data['conference_date'],
            'address' => $data['address'],
            'participants' => $data['participants']
        ]);

        return redirect('conference')->with('success', 'New Conference Added');
    }
}
