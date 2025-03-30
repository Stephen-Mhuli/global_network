<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/networks', function(){
    $ninjas = [
        ["name" => "mario", "skill" => 75, "id" => "1"],
        ["name" => "luigi", "skill" => 45, "id" => "2"]
    ];
    return view('networks.index', ["greeting" => "Hello, How are you?","ninjas" => $ninjas]);
});

Route::get('/networks/{id}', function($id){
    return view('networks.show', ["id" => $id]);
});
