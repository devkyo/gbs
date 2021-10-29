@extends('layouts.frontend')


@section('title', 'Producto name')

@section('content')

{{-- <x-slider/> --}}

<div class="item">
  <div class="container">
    <div class="item__back">
      <a href="/productos">Volver</a>
    </div>
    <div class="item__content">
      <div class="item__image">
        <img src="https://casaideasperu.vteximg.com.br/arquivos/ids/177237-350-350/3221216000012_1.jpg" alt="">
      </div>
      <div class="item__features">
        <h3>Lavatorio Españolita </h3>
        <span>CODIGO: ASDASD</span>

        <table class="table">
          <tr>
            <td><strong>Largo</strong></td>
            <td>cm</td>
          </tr>
          <tr>
            <td><strong>Ancho</strong></td>
            <td>cm</td>
          </tr>
          <tr>
            <td><strong>Alto</strong></td>
            <td>29.5 cm</td>
          </tr>
          <tr>
            <td><strong>Díametro</strong></td>
            <td>28.4 cm</td>
          </tr>
          <tr>
            <td><strong>Capacidad</strong></td>
            <td>11 Lts</td>
          </tr>
        </table>

        <div class="item__colors">
          Colores disponibles: 
          <ul>    
            <li style="background:red"></li>
            <li style="background: orange"></li>
          </ul>
        </div>
        <img src="/images/calidad-ico.png" alt="">
      </div>
    </div>

    <div class="item__cotizar">
      <a  target="_blank" href="https://api.whatsapp.com/send?phone=51944124595&text=Hola%20quiero%20cotizar%20el%20producto%20">Cotizar</a>
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

      <form action="/formcontact" class="contactsmall__form">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <input type="text" placeholder="Nombres">
          </div>
          <div class="col-sm-12 col-md-6">
            <input type="text" placeholder="Apellidos">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <input type="text" placeholder="Introducir email">
          </div>
          <div class="col-sm-12 col-md-6">
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