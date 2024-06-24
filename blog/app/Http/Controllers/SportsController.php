<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;

class SportsController extends Controller
{
    public function index(){
        $data = Sport::all();
        return view('sports', compact('data'));
    }

    public function show($id){
    $data = Sport::find($id);
    return view('sport-show', compact('data'));
    }

    public function destroy($id){
        $data = Sport::find($id);
        $data->delete();
        return redirect('sport/list')->with('success','sport deleted successfully.');
    }

    public function edit($id){
        $data = Sport::find($id);
        return view('sport-edit', compact('data'));
        }

        public function update(Request $request, $id){
            $newData = $request->all();
            $sport = Sport::find($id);
            $sport->update($newData);
            return redirect('sport/list')->with('success','sport updated successfully.');
            }

            public function create(){
                return view('sport-create');
            }

            public function store(Request $request){
                $data = $request->all();
                Sport::create($data);
                return redirect('sport/list')->with('success','sport created successfully.');
            }
}
