@extends('layouts.main')

@section('content')

    {{--    @if(isset($confirmation))--}}
    {{--        <p>Le catalogue a bien été ensemencé</p>--}}
    {{--    @endif--}}

    <div class="formu">
        <h2>Plantez votre graine</h2>
        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}

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
            <input type="text" name="name">
            <br>
            <label for="Prix">Prix :</label>
            <input type="number" name="price">
            <br>
            <label for="Stock">Stock :</label>
            <input type="number" name="stock">
            <br>
            <label for="Description">Description :</label>
            <input class="desc" type="text" name="description">
            <br>
            <label for="Image">Image :</label>
            <input type="text" name="image">
            <br>
            <label for="Poids">Poids :</label>
            <input type="number" name="weight">
            <br>
            <label for="Catégorie">Catégorie :</label>
            <input type="text" name="category_id">
            <br>
            <input class="boutonsend" type="submit" value="Egrainer">
        </form>
    </div>
@endsection
