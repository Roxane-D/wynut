@extends('layouts.main')

@section('content')


    <section class="contenu">
        <div class="menuecatalogue">
            <div class="cercle">
                <div class="categorie">

                    <div class="rond"><a class="link" href="{{"/catalogue/" . 2}}"><img
                                class=" picto"
                                src="{{asset("img/broccoli.svg")}}" alt="POURQUOI SEIGNEUR"></a></div>
                    <div class="rond"><a class="link" href="{{"/catalogue/" . 1}}"><img
                                class=" picto"
                                src="{{asset("img/apple.svg")}}" alt="POURQUOI SEIGNEUR"></a></div>
                    <div class="rond"><a class="link" href="{{"/catalogue/" . 4}}"><img
                                class=" picto"
                                src="{{asset("img/ravioli.svg")}}" alt="POURQUOI SEIGNEUR"></a></div>
                    <div class="rond"><a class="link" href="{{"/catalogue/" . 3}}"><img
                                class=" picto"
                                src="{{asset("img/wheat.svg")}}" alt="POURQUOI SEIGNEUR"></a></div>

                </div>
            </div>
        </div>

        <div class="containerproduits">
            @foreach ($products as $product)
                <div class="prod">
                    <div class="image_produit_cont">
                        <a href="{{"/produit/" . $product->id}}"><img class="image_produit"
                                                                      src="{{asset($product->image)}}"
                                                                      alt="POURQUOI SEIGNEUR BULGUR"></a>
                    </div>
                    <div class="description">
                        <div class="imagepanier"><a href="https://www.le-campus-numerique.fr/%22%3E"><img class="
                                                    pictopanier" src="{{asset("img/bag.svg")}}" alt="POURQUOI SEIGNEUR
                            DES PANIERS"></a></div>
                        <h2>{{$product->name}}</h2>
                        <p>{{$product->price}}€ /@if($product->weight >= 1000)
                                                {{($product->weight / 1000) . "kg"}}
                                                    @else {{$product->weight . "gr"}}
                                                @endif
                            <br>
                            {{$product->description}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
