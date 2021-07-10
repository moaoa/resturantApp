<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resturant;

class RestoController extends Controller
{
    //
    function index(){
        $resturants = Resturant::all();
        return view('list', ['resturants' => $resturants]);
    }
    function store(Request $req){
        $newResto = new Resturant();
        $newResto->name = $req->name;
        $newResto->email = $req->email;
        $newResto->address = $req->address;
        $result = $newResto->save();
        if($result){
            return redirect('/');
        }else{
            return 'error creating the resto';
        }
    }
    function edit($id){
        $resto = Resturant::findOrFail($id);
        return view("edit", ['resto' => $resto]);
    }
    function update(Request $req, $id){
        $resto  = Resturant::findOrFail($id);
        $resto->name = $req->name;
        $resto->email = $req->email;
        $resto->address = $req->address;
        $resto->save();
        return redirect('/');
    }
}
