<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creer.formulairecreer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:50|unique:products',
            'price'=>'required|between:1,600',
            'stock'=>'required|between:1,100',
            'description'=>'required|max:255',
            'image'=>'required|max:255',
            'image'=>'required|max:255',
            'weight'=>'required|min:1',
            'category_id'=>'required',
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->weight = $request->weight;
        $product->category_id=$request->category_id;

        $product->save();

        return redirect(route('product.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id',$id)
            ->get();
        return view('produit', ['product' => $product[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('modifier/formulairemodifier', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:50',
            'price'=>'required|between:1,600|',
            'stock'=>'required|between:1,100|',
            'description'=>'required|max:255|',
            'image'=>'required|max:255|',
            'image'=>'required|max:255|',
            'weight'=>'required|min:1|',
            'category_id'=>'required|',
        ]);

        $post = Product::find($id);
        $post->name=$request->input('name');
        $post->price=$request->input('price');
        $post->stock=$request->input('stock');
        $post->description=$request->input('description');
        $post->image=$request->input('image');
        $post->weight=$request->input('weight');
        $post->category_id=$request->input('category_id');
        $post->save();
        return redirect('/produit/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('catalogue');
    }
}
