<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index()
    {
        $title = "Welcome to my Laravel";
        print_r(route('products'));

        // $arr = [
        //     'one' => 'uno',
        //     'two' => 'dos',
        //     'three' => 'tres'
        // ];
        //Metoda COMPACT
        // 
        // return view("products.index", compact('title'));
        //metoda WITH
        return view("products.index");
    }

    public function show($name)
    {      $array = [
            'uno' => 'Ipone',
            'dos' => 'Sasung',
            'tres' => 'Morola'
        ];
        return view("products.index",[
            'products' =>$array[$name] ?? 'Product '.$name.' does not exist'
        ]);
         
        
    }
}
