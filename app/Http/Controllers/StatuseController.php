<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statuse;

class StatuseController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function login()
    {
        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function tasklist() {

        $statuses = Statuse::orderBy('name', 'desc')->paginate(20);;
        return view('statuslist', compact('statuses'));
    }


    public function create ()
    {
        return view ('create_status');
    }


    public function store(Request $request)
    {

        $status = new Statuse;
        $status->id = $request->id;
        $status->name = $request->name;
        $status->save();
        return back();
    }
    public function edit()
    {
        $statuses= Statuse::all();
        return view ('edit_status',compact('statuses'));
    }
    public function editdelete(Request $request,$id)
    {
        $statuses = Statuse::find($id);
        return view('editdeletestatus',compact('statuses'));
    }

    public function update(Request $request,$id)
    {

        $statuses = Statuse::find($id);
        $statuses->id = $request->id;
        $statuses->name = $request->name;
        $statuses->save();
        return redirect(route('statuslist'))->with('successMsg','Task Successfully Update');
    }

    public function delete($id)
    {
        Statuse::find($id)->delete();
        return redirect(route('statuslist'))->with('successMsg','Task Successfully Delete');
    }
}