@extends('layouts.frontend')


@section('title', 'Home')

@section('content')

    <x-slider :images="$images" />


    <div class="block">
        <div class="container">
            <div class="block__content">
                <div class="block__products">
                    <div class="block__title">
                        <h2>Productos Nuevos</h2>
                        <p>Encuentra los nuevos productos que tenemos esta temporada.</p>
                    </div>
                    <a href="/productos" class="block__button">Ver más</a>
                </div>
                <div class="block__servicios">
                    <div class="block__title">
                        <h2>Servicios</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, vitae?</p>
                    </div>
                    <a href="/productos" class="block__button">Ver más</a>
                </div>
                <div class="block__blog">
                    <div class="block__title">
                        <h2>Blog</h2>
                        <p>Encuentra tips y mucho más para tu hogar.</p>
                    </div>
                    {{-- <a href="/productos" class="block__button">Ver más</a> --}}
                </div>
            </div>
        </div>
        <div class="title">
            <h1>Conoce más de nuestras líneas de productos</h1>
        </div>
    </div>

    <div class="categories">
        <div class="container">
            <div class="categories__content">

                {{-- <a href="/asdsd"> --}}
                <div class="categories__box category__one">
                    <a href="/asdsd" href="#">Hogar</a>
                </div>
                {{-- </a> --}}
                {{-- <a href="/asdsd"> --}}
                <div class="categories__box category__two">
                    <a href="/asdsd" href="#">Avícola</a>
                </div>
                {{-- </a> --}}
                {{-- <a href="/asdsd"> --}}
                <div class="categories__box category__trhee">
                    <a href="/asdsd" href="#">Hogar</a>
                </div>
                {{-- </a> --}}
                {{-- <a href="/asdsd"> --}}
                <div class="categories__box category__four">
                    <a href="/asdsd" href="#">Pesquera</a>
                </div>
                {{-- </a> --}}

            </div>
            <div class="categories__more">
                <a href="/productos" class="categories__more">Ver todás las líneas</a>
            </div>
        </div>
    </div>

    <div class="newsletter">
        <div class="container">
            <div class="newsletter__content">
                <div class="newsletter__copy">
                    <p><strong>NEWSLETTER</strong> > Suscríbete y recibe información sobre todas nuestras novedades.</p>
                </div>

                <form action="" class="newsletter__form">
                    <input type="text" name="email" placeholder="Introducir email">
                    <button type="submit">Suscribirse</button>

                </form>

                <p><input type="checkbox"> Acepto recibir información del boletín, promociones y publicidad.</p>
            </div>
        </div>
    </div>

@endsection
