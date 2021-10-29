<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBS @yield('title') </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/d3444df7ec.js" crossorigin="anonymous"></script>

    <meta property="og:url"           content="" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="GBS Plastic" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="" />

      
  </head>
  <body>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=241110544128";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header class="header">
      <div class="container">

        <nav class="navbar navbar-expand-md navbar-light ">
          <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="./"><img src="{{asset('images/logo-gbs.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/productos">Productos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/servicios">Servcicios</a>
                </li>

               
                  <a class="navbar-brand gbs__logo d-none d-lg-block" href="./">
                    <img src="{{asset('images/logo-gbs.png')}}" alt="">
                  </a>
              
                
                <li class="nav-item dropdown">
                  <a class="nav-link" href="/blog">Blog</a>
                
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contacto">Contacto</a>
                </li>
              </ul>
             

            
              
            </div>
          </div>
        </nav>
      </div>

    </header>
    <div class="bottom__nav">
      <div class="container">
        <div class="bottom__content">
          <div class="bottom__social">
            <p>Siguenos: </p>
            <a href="#">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
          <div class="bottom__search">
            <form action="">
              <input type="text" placeholder="Buscar productos">
              <button type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
        
        