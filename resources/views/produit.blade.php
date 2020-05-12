@extends("layouts/main")


@section('content')

    <div class="display">
        <div class="affichageimage">
            <div class="imgmain">
                <img src="{{asset($product->image)}}" alt="wynut riz rond">
                <div class="imgothers">
                    <img src="{{asset("img/riz2.jpg")}}" alt="wynut riz rond">
                    <img src="{{asset("img/riz3.jpg")}}" alt="wynut riz rond">
                    <img src="{{asset("img/riz4.jpg")}}" alt="wynut riz rond">
                    <img src="{{asset("img/riz1.jpg")}}" alt="wynut riz rond">
                </div>
                <div class="imglogo">
                    <img src="{{asset("img/bio.png")}}">
                    <img src="{{asset("img/naturel.png")}}">
                    <img src="{{asset("img/equitable.png")}}">
                </div>
            </div>
        </div>

        <div class="descri">
            <p class="titre">{{$product->name}}</p>
            <p class="prix">{{$product->price}}€</p>
            <p class="prixkilo">14€/kg</p>
            <p class="texte">
                {{$product->description}}
            </p>
            <div class="blocqte">
                <div class="gramme"><p>100 gr</p></div>
                <div class="quantite">
                    <img src="{{asset("img/minus.svg")}}">
                    <div class="carre"></div>
                    <img src="{{asset("img/plus.svg")}}">
                </div>
                <div class="bouton"><p>acheter</p></div>
                <div class="boutonedit"><a href="{{"/produit/edit/" . $product->id}}"><p>modifier</p></a></div>
                <div class="boutonsupp">
                    <form method="post" action="{{"/produit/destroy/" . $product->id}}">
                        @method('DELETE')
                        {{ csrf_field() }}
                        <input class="supp" type="submit" value="supprimer">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="nutri">
        <p class="titre">valeurs nutritionnelles</p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu lacinia sem, ac pellentesque sapien.
            Vestibulum gravida elementum magna. Nulla.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu lacinia sem, ac pellentesque sapien.
            Vestibulum gravida elementum magna. Nulla.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu lacinia sem, ac pellentesque sapien.
            Vestibulum gravida elementum magna. Nulla.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu lacinia sem, ac pellentesque sapien.
            Vestibulum gravida elementum magna. Nulla.
        </p>
    </div>

<div class="recettes">
    <p class="titre">recettes associées</p>
</div>

<div class="menu_card_cont">
    <div class="menu_card">
        <img class="img_plat" src="{{asset("img/plat2.jpg")}}" alt="">
        <div class="cta_plat plat_droite">
            <div class="menu_card_top">
                salade healthy
                <span class="separator separator_cotes">&nbsp;|&nbsp;</span>
                <img class="eye_icon" src="{{asset("img/eye.svg")}}" alt="">
            </div>
            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quis quam natus rem, dolorem iusto libero recusandae? Vitae, aut facere!</p>
            </div>
        </div>
    </div>
    <div class="menu_card center_card">
        <img class="img_plat" src="{{asset("img/plat1.png")}}" alt="">
        <div class="cta_plat">
            <div class="menu_card_top">
                bowl gourmand
                <span class="separator">&nbsp;|&nbsp;</span>
                <img class="eye_icon" src="{{asset("img/eye.svg")}}" alt="">
            </div>
            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quis quam natus rem, dolorem iusto libero recusandae? Vitae, aut facere!</p>
            </div>
        </div>
    </div>
    <div class="menu_card">
        <img class="img_plat" src="{{asset("img/plat3.jpg")}}" alt="">
        <div class="cta_plat plat_gauche">
            <div class="menu_card_top">
                pâtes aux épinards
                <span class="separator separator_cotes">&nbsp;|&nbsp;</span>
                <img class="eye_icon" src="{{asset("img/eye.svg")}}" alt="">
            </div>
            <div class="description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quis quam natus rem, dolorem iusto libero recusandae? Vitae, aut facere!</p>
            </div>
        </div>
    </div>
</div>
@endsection

