<?php

namespace App\Http\Controllers;

use App\Models\Network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    public function index(){
        // route-> /networks/
        $networks = Network::with('region')->orderBy('created_at','desc')->paginate(10);
        return view('networks.index',["networks" => $networks]);
    }

    public function show($id){
        // route-> /networks/{id}
        $network = Network::with('region')->findOrFail($id);
        // echo $network;
        return view('networks.show', ["network" => $network]);
    }

    public function create(){
        //route--> /networks/create
        return view('networks.create');
    }

    public function store(){

    }

    public function destroy(){

    }
}
