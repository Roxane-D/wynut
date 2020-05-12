@extends('layouts.main')

@section('title', 'acceuil')

@section('hero')

<div class="hero">
    <img class="hero_img" src="{{asset("img/cereales1.jpg")}}" alt="">
</div>
<button class="hero_btn">nouveautés
    <div class="fleche_btn">
        <img src="{{asset("img/fleche_droite.svg")}}" alt="">
    </div>
</button>

@endsection


@section('menu')
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
