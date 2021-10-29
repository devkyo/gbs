@extends('layouts.frontend')


@section('title', 'Contacto')

@section('content')

    <div class="contact">
        <div class="container">
            <div class="contact__content">
                <h1 class="contact__title">Ponte en contacto con nosotros</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus mollitia adipisci, repellat
                    placeat omnis fugit optio nihil qui atque debitis numquam doloremque aspernatur veritatis sapiente eum,
                    reiciendis, repudiandae repellendus sequi.</p>
            </div>
        </div>
        <div class="contact__form">
          <div class="contact__map">
            <div class="container d-flex justity-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15757.789469203626!2d-76.9865961989838!3d-12.063847578720992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c66820eb9773%3A0x70f01c7a79dc1633!2sAv.%20Nicol%C3%A1s%20Ayll%C3%B3n%202480%2C%20Ate%2015022!5e0!3m2!1ses-419!2spe!4v1634995343643!5m2!1ses-419!2spe" width="80%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>

          <div class="contactsmall" style="margin-top: -100px">
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
                        <h3>Formulario de consultas</h3>
                          <div class="row">
                              <div class="col-sm-12 col-md-6">
                                  <input type="text" placeholder="Nombres" name="nombre">
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <input type="text" placeholder="Apellidos" name="apellidos">
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <input type="text" placeholder="Empresa" name="empresa">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input type="text" placeholder="DNI o RUC" name="apellidos">
                            </div>
                        </div>
                          <div class="row">
                              <div class="col-sm-12 col-md-6">
                                  <input type="text" placeholder="Introducir email" name="email">
                              </div>
                              <div class="col-sm-12 col-md-6">
                                  <input type="text" placeholder="Teléfonos">
                              </div>
                          </div>
                          <textarea name="consulta" id="" cols="30" rows="5" placeholder="Consulta"></textarea>
                          <br>
                          <br>
                          <div class="contactsmall__buttons">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" style="font-size: 11px">Acepto terminos y condiciones</label>
                            </div>
                            <div class="contactsmall__send">
                                <div class="row ">
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
                            </div>
                          </div>
                         
                          
                      </form>

                  </div>
              </div>
          </div>


      </div>
    </div>

@endsection
