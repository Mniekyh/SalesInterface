<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Laravel";
        $arr = [
            'one' => 'uno',
            'two' => 'dos',
            'three' => 'tres'
        ];
        //Metoda COMPACT
        // 
        // return view("products.index", compact('title'));
        //metoda WITH
        return view("products.index", [
            'arr' =>$arr
        ]);

    }
}
