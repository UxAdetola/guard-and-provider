<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

    public function index()
    {
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderby('name', 'desc')->get();
        // $pizzas = Pizza::where('base', 'pormoor')->get();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        $pizzas = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizzass' => $pizzas]);
    }

    public function create()
    {
        return view('pizzas.create');
    }
    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect('/')->with('mssg', 'It is successfully Created');
    }
    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/')->with('mssg', 'Record deleted successfully');
    }
}