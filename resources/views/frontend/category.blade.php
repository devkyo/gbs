@extends('layouts.frontend')


@section('title', 'Nosotros')

@section('content')

{{-- <x-slider/> --}}

<div class="category">
  <div class="title">
    <h1>Hogar</h1>
  </div>
  
</div>

<div class="category__back">
  <div class="container">
    <a href="/productos">Volver</a>

  </div>
</div>

<div class="products">

  <div class="container">
    
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

      <form action="/formcontact" class="contactsmall__form">
        <div class="row">
          <div class="col">
            <input type="text" placeholder="Nombres">
          </div>
          <div class="col">
            <input type="text" placeholder="Apellidos">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="text" placeholder="Introducir email">
          </div>
          <div class="col">
            <input type="text" placeholder="Teléfonos">
          </div>
        </div>
        <input type="text" placeholder="Consulta" style="width: 100%;">

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