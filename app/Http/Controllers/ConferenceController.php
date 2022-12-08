<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use DataTables;
use Illuminate\Support\Facades\Auth;

class ConferenceController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('conference');
    }

    function fetch_all(Request $request){
        if ($request->ajax()){
            $data = Conference::latest()->get();
            return DataTables::of($data)->addIndexColumn()->addColumn('action', function ($row){
                return '<a href="conference/edit/"'.$row->id.'"class = "btn btn-primary btn-sm">Edit</a>&nbsp;
                <button type="button" class="btn-danger btn-sm delete" data-id = "'.$row->id.'">Delete</button>';
            })->rawColumns(['action'])->make(true);
        }
    }
}
