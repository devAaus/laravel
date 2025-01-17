<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ninjas', function () {
    $ninjas = [
        ['name' => 'Ryu', 'age' => 22, 'occupation' => 'Samurai', 'id' => '1'],
        ['name' => 'Hattori', 'age' => 25, 'occupation' => 'Ninja', 'id' => '2'],
        ['name' => 'Yagyu', 'age' => 20, 'occupation' => 'Samurai', 'id' => '3'],
    ];

    return view('ninjas.index', ["greeting" => "hello", "ninjas" => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
    //fetch data with id
    return view('ninjas.show', ["id" => $id]);
});

