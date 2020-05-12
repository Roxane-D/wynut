@extends('layouts.main')

@section('content')

    {{--    @if(isset($confirmation))--}}
    {{--        <p>Le produit a bien été modifié petite graine !</p>--}}
    {{--    @endif--}}

    <div class="formu">
        <h2>Modifiez votre graine !</h2>
        <form method="post" action="{{"/modifier/edit/" . $product->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')

            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <label for="Nom">Nom du produit :</label>
            <input type="text" name="name" value="{{$product->name}}">
            <br>
            <label for="Prix">Prix :</label>
            <input type="number" name="price" value="{{$product->price}}">
            <br>
            <label for="Stock">Stock :</label>
            <input type="number" name="stock" value="{{$product->stock}}">
            <br>
            <label for="Description">Description :</label>
            <input class="desc" type="text" name="description" value="{{$product->description}}">
            <br>
            <label for="Image">Image :</label>
            <input type="text" name="image" value="{{$product->image}}">
            <br>
            <label for="Poids">Poids :</label>
            <input type="number" name="weight" value="{{$product->weight}}">
            <br>
            <label for="Catégorie">Catégorie :</label>
            <input type="text" name="category_id" value="{{$product->category_id}}">
            <br>
            <input class="boutonsend" type="submit" value="Egrainer">
        </form>
    </div>
@endsection
