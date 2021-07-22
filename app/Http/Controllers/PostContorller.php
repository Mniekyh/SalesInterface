<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostContorller extends Controller
{

    ######## Query Builder #############
    //non Fluent ===> BAD
    
    //DB::select(['table' => 'posts', 'where' => [id=>1]]);


    // Fluent === > Guud
    //DB::table('posts)->where('id',1) -> get()

    public function index()
    {
        /*This is normal SQL method
        $posts = DB::select('select * from posts');
        dd($posts);
        */
        // $id = 2;
        // $posts = DB::table('posts')
        //     ->where('id', 2)
        //     ->get();


        ################# CRUD ############## 

        // Tworzonko

            // $postsCreate = DB::table('posts')
            //     ->insert([ 
            //         'title' => 'Dodaje', 'body' => 'Nowy' 
            //     ]);
            //     //dd() allows to show query;
            //     dd($postsCreate);
        
        
        //Updejtowanko

            // $postsUpdate = DB::table('posts')
            // ->where('id','=', '3')
            // ->update([
            //     'title' => 'Updejted', 'body' => 'Tu tysz'
                
            // ]);
            // dd($postsUpdate);

        //Deletowanko
        $postDelete = DB::table('posts')
        ->where('id', '=', 1)
        ->delete();
        dd($postDelete);
    }
    //
}
