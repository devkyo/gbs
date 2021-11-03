@extends('layouts.frontend')


@section('title', 'Nosotros')

@section('content')

<div class="nosotros">
  <div class="container">
    <h1 class="nosotros__title">Sobre nosotros</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates delectus vero voluptatum dolores vel a fuga ratione corrupti ad optio, minus debitis eius expedita, explicabo blanditiis amet dignissimos officiis? Illum eum culpa quaerat dolorum consectetur, similique iste! Ipsam doloremque ipsum fuga. Molestias, natus quis. Nisi laudantium impedit quis perferendis cum.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam cumque ratione neque, minus voluptas explicabo veritatis enim facilis, sapiente ad ducimus vitae accusamus rerum eligendi! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus impedit consequuntur deleniti vel temporibus repudiandae eaque molestias? Ex atque, delectus eum eius deleniti praesentium quisquam deserunt? Nesciunt magni sint suscipit.</p>
    <div class="nosotros__button">
      <a href="/contacto">Contáctenos</a>
      <a href="/productos">Línea de productos</a>
    </div>
  </div>
</div>

<div class="mision">
  <div class="container">

    <div class="mision__content">
      
      <div class="mision__box">
        <img src="/images/mision_ico.png" alt="">
        <h4>Nuestra Misión</h4>
        <p>Brindar a nuestros clientes, una amplia gama de artículos plásticos innovadores, prácticos y seguros, generando experiencias inolvidables que faciliten sus vidas en todo momento y lugar.</p>
      </div>
      <div class="mision__box">
        <img src="/images/mision_ico.png" alt="">
        <h4>Nuestra Misión</h4>
        <p>Brindar a nuestros clientes, una amplia gama de artículos plásticos innovadores, prácticos y seguros, generando experiencias inolvidables que faciliten sus vidas en todo momento y lugar.</p>
      </div>
      
    </div>
  </div>

</div>


<div class="newsletter">
  <div class="container">
      <div class="newsletter__content">
          <div class="newsletter__copy">
              <p><strong>NEWSLETTER</strong> > Suscríbete y recibe información sobre todas nuestras novedades.</p>
          </div>

          <form action="{{ route('admin.newsletter.store') }}" class="newsletter__form" method="POST">
            @csrf 
              <input type="text" name="email" placeholder="Introducir email">
              <button type="submit">Suscribirse</button>

          </form>

          <p><input type="checkbox"> Acepto recibir información del boletín, promociones y publicidad.</p>
      </div>
  </div>
</div>
@endsection