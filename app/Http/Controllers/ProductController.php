<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create()
    {
       return view('produit');
    }

    public function show($id)
    {
        // $ID=DB::select('select * from products where id=:id', ["id"=>$ID]);
        // return view('produit',['product'=>$ID[0]]);

        $id = \App\Product::where('id',$id) ->get();
        return view('produit',['product'=>$id[0]]);
    }
}

