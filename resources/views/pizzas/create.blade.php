@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza Order</h1>
    <form action="/pizzas" method="POST" onsubmit="return validateForm()">
    @csrf
        <label for="name">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="" disabled selected>Select pizza type</option>
            <option value="margherita">Margherita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="" disabled selected>Select base type</option>
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra toppings:<br></label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br>
            <input type="checkbox" name="toppings[]" value="galric">Garlic<br>
            <input type="checkbox" name="toppings[]" value="olives">Olives<br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection

@section('scripts')
<script>
function validateForm() {
    let name = document.getElementById("name").value;
    let type = document.getElementById("type").value;
    let base = document.getElementById("base").value;

    if (name === "") {
        alert("Please enter your name.");
        return false;
    }

    if (type === "") {
        alert("Please select a pizza type.");
        return false;
    }

    if (base === "") {
        alert("Please select a base type.");
        return false;
    }

    return true;
}
</script>
@endsection