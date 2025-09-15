<?php

namespace App\Http\Controllers;

illuminate\Http\Request;

class Halocontroller extends Controller {
    function hello() {
        echo "Hello from Halocontroller";
    }

    function index() {


        $name = 'Jane Doe';  # declare variable
        // return view('hello', ['name' => $name]); #template for data importing ['key' => $value or $variable] OR
        return view('hello', compact('name')); # compact('variable1', 'variable2', ...).
    }
}

?>
