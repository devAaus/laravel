<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // Get all ninjas with their dojos and order by creation date in descending order.
        // route --> /ninjas/
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id) {
        // Get the ninja with the given ID and their dojo.
        // route --> /ninjas/{id}
        $ninja = Ninja::with('dojo')->findOrFail($id);

        return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create() {
        // Show the form to create a new ninja.
        // route --> /ninjas/create
        return view('ninjas.create');
    }

    public function store() {

    }
}
