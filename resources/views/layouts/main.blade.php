<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset("css/style.css")}}">
        <link rel="stylesheet" href="{{asset("css/stylecatalogue.css")}}">
        <link rel="stylesheet" href="{{asset("css/styleproduit.css")}}">
        <link rel="stylesheet" href="{{asset("css/styleform.css")}}">
        <title>@yield('title')</title>
    </head>
    <body>

    <div class="nav">
        <div class="nav_titles">
            <div class="logo">
                <a href="{{"/accueil/"}}"><img src="{{asset("img/logo_wynut.svg")}}" alt=""></a>
            </div>
            <div class="nav_links">
                <li><a href="{{"/catalogue/"}}">boutique</a></li>
                <li>blog</li>
                <li>l'équipe</li>
            </div>
        </div>
        <div class="nav_cont">
            <div class="vertical_nav">
            <div class="search">
                <img class="icons" src="{{asset("img/search.svg")}}" alt="icone recherche">
                <input class="search_input" type="text">
            </div>
            <div class="cart">
                <img class="icons bag" src="{{asset("img/bag.svg")}}" alt="icone panier">
                <div class="cart_count">
                    3
                </div>
                <div class="panier_preview">
                    <img class="panier_preview_img" src="{{asset("img/panier2.svg")}}" alt="">
                </div>
            </div>
            <img class="icons" src="{{asset("img/user.svg")}}" alt="icone utilisateur">
            </div>
            @yield('hero')
        </div>
    </div>

    @yield('menu')

    @yield('content')

</body>
</html>
