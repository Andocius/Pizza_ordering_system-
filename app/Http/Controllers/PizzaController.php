<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index() {
        /*
        $pizzas = [
        ['type'=> 'hawaiian','base'=>'cheesy crust','price'=> 10],
        ['type'=> 'volcano','base'=>'garlic crust','price'=> 8],
        ['type'=> 'veg supreme','base'=>'thin & crisp','price'=> 16] 
        ];
        */

        $pizzas = Pizza::latest()->get();
        
        return view('pizzas.index', ['pizzas' => $pizzas]);

    }

    public function show($id) {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    
    }
    
    public function create(){
        return view('pizzas.create');
    }

    public function store(){

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('mssg', 'Thanks for the order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
