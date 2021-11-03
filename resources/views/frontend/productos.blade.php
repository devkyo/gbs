@extends('layouts.frontend')


@section('title', 'Nosotros')

@section('content')

{{-- <x-slider/> --}}

<div class="collection">
  <div class="container">
    <div class="title">
      <h1>Nuestra Colección</h1>
    </div>
    <ul class="collection__content">

      <a href="#">
        <li class="collection__box" style="background: url('images/bg_category.png');background-size:cover;">
          <div class="collection__box-title">
            Hogar
          </div>
        </li>
      </a>
      <a href="#">
        <li class="collection__box" style="background: url('images/bg_category.png');background-size:cover;">
          <div class="collection__box-title">
            Hogar
          </div>
        </li>
      </a>
      <a href="#">
        <li class="collection__box" style="background: url('images/bg_category.png');background-size:cover;">
          <div class="collection__box-title">
            Hogar
          </div>
        </li>
      </a>
      <a href="#">
        <li class="collection__box" style="background: url('images/bg_category.png');background-size:cover;">
          <div class="collection__box-title">
            Hogar
          </div>
        </li>
      </a>
      <a href="#">
        <li class="collection__box" style="background: url('images/bg_category.png');background-size:cover;">
          <div class="collection__box-title">
            Hogar
          </div>
        </li>
      </a>
    </ul>

    <div class="collection__more">
      <a href="#">Ver todo</a>
    </div>
  </div>
</div>

<div class="products">
  <div class="container">
    <div class="title">
      <h1>Lo más visto</h1>
    </div>
    <div class="products__content">

      <a href="#">
        <div class="products__box">
          <div class="products__box-img">
            <img src="/images/product-test.png" alt="">
          </div>
          <div class="products__box-title">
            <h5>Silla bla bla</h5>
            <h3>s/ 22.90</h3>
          </div>
        </div>
      </a>

      <a href="#">
        <div class="products__box">
          <div class="products__box-img">
            <img src="/images/product-test.png" alt="">
          </div>
          <div class="products__box-title">
            <h5>Silla bla bla</h5>
            <h3>s/ 22.90</h3>
          </div>
        </div>
      </a>

      <a href="#">
        <div class="products__box">
          <div class="products__box-img">
            <img src="/images/product-test.png" alt="">
          </div>
          <div class="products__box-title">
            <h5>Silla bla bla</h5>
            <h3>s/ 22.90</h3>
          </div>
        </div>
      </a>

      <a href="#">
        <div class="products__box">
          <div class="products__box-img">
            <img src="/images/product-test.png" alt="">
          </div>
          <div class="products__box-title">
            <h5>Silla bla blSilla bla blSilla bla blSilla bla blSilla bla bla</h5>
            <h3>s/ 22.90</h3>
          </div>
        </div>
      </a>
      
    </div>
  </div>
</div>


<div class="contactsmall">
  <div class="container">
    <div class="contactsmall__content">
      <div class="contactsmall__copy">
        <h3>Contacto</h3>
        <ul>
          <li>Av. Nicolás Ayllón 2480 Ate – Lima – Perú </li>
          <li>atencionalcliente@ximesa.com</li>
          <li>205 5000 Anexo 243</li>
        </ul>
      </div>

      <form action="{{ route('admin.contact.store') }}" class="contactsmall__form" method="POST">
        @csrf
        <div class="row">
          <div class="col">
            <input type="text" placeholder="Nombres" name="name">
          </div>
          <div class="col">
            <input type="text" placeholder="Apellidos" name="apellidos">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" placeholder="Introducir email" name="email">
          </div>
          <div class="col">
            <input type="text" placeholder="Teléfonos" name="telefono">
          </div>
        </div>
        <input type="text" placeholder="Consulta" style="width: 100%;" name="consulta">

        <div class="row">
          <div class="col">
            <button type="reset">
              Reset
            </button>
          </div>
          <div class="col">
            <button type="submit">
              Enviar
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection