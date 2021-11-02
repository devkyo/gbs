@extends('layouts.frontend')


@section('title', 'Titulo noticia')

@section('content')

<div class="post">
  <div class="container">
    <div class="post__title">
      <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, fuga Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente ad ullam aut culpa omnis! Rem, itaque voluptates asperiores nisi quasi sequi alias optio sint. Maiores magnam saepe ratione pariatur quasi! ?</h1>
      {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sequi, exercitationem consequuntur, itaque saepe perferendis aut illo facilis et consectetur beatae sapiente eaque cupiditate, reprehenderit placeat aspernatur totam fugiat quo?</p> --}}
    </div>

  </div>
  <div class="post__content">
    <div class="container">
      <div class="post__image">
        <img src="/images/post_img.jpg" alt=""> 
      </div>
      <div class="post__text">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus animi est velit minus similique maiores tenetur ratione, doloribus ducimus odio, dolorem placeat molestias, cumque quidem fugit iure nemo perferendis magni.</p>
        <h1>Lorem ipsum dolor sit amet.</h1>
        <h2>Lorem ipsum dolor sit.</h2>
        <h3>Lorem ipsum dolor sit amet.</h3>
        <img src="/images/post_img.jpg" alt="">
        <ul>
          <li>Lorem, ipsum dolor.</li>
          <li>Lorem, ipsum dolor.</li>
        </ul>



        <strong>Lorem ipsum dolor sit amet consectetur.</strong>

        <i>Lorem, ipsum.</i>
      </div>
    </div>

    
    <div class="container">
      <div class="post__shared">
        <div class="post__shared-social">
          <p>Compartir noticia en: </p>

            <div class="fb-share-button" data-href="http://YourPageLink.com" data-layout="button_count" style="margin-top:-5px;margin-left:10px"> 
            </div>


            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.google.com" target="_blank" onclick="window.open(this.href, this.target, 'width=500,height=350'); return false;">
              <i class="fab fa-linkedin"></i>
            </a>
        </div>

        <div class="post__shared-button">
          <a href="/blog">Regresar al blog</a>
        </div>

        
      </div>
    </div>

  </div>

</div>

@endsection