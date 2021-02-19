<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{

    public function index($id =null)
    {

        if (!empty($id)){
            $products = Category::find($id)->product()->get();
            return view('catalogue', ['products'=>$products]);
        }
        else {
            $products = Product::all();
            return view('catalogue', ['products'=>$products]);
        }
    }

    public function create()
    {
        return view('catalogue');
    }

    public function store(Request $request)
    {


        return view('');

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
