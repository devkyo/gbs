@extends('layouts.frontend')


@section('title', 'Nosotros')

@section('content')
<div class="blog">
  <div class="blog__title">
    <h1>Blog</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sint voluptates deleniti ullam voluptatem ex rerum atque qui harum. Placeat ab molestias quas tempore aspernatur facere qui praesentium cumque tenetur!</p>
  </div>
</div>
<div class="container">
  <div class="blog__content">
   
    <div class="blog__box">
      <a href="/post">
      <div class="blog__box-image">
        <img src="/images/img-post.jpg" alt="">
      </div>
      <div class="blog__box-copy">
        <h4>Titulo noticia</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis fugit cumque sapiente expedita deserunt maxime molestiae placeat ratione recusan.</p>
      </div>
    </a>
    </div>

    <div class="blog__box">
      <a href="">
      <div class="blog__box-image">
        <img src="/images/img-post.jpg" alt="">
      </div>
      <div class="blog__box-copy">
        <h4>Titulo noticia</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis fugit cumque </p>
      </div>
    </a>
    </div>

    <div class="blog__box">
      <a href="#">
      <div class="blog__box-image">
        <img src="/images/img-post.jpg" alt="">
      </div>
      <div class="blog__box-copy">
        <h4>Titulo noticia</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis fugit cumque sapiente expedita deserunt maxime molestiae placeat ratione recusandae.</p>
      </div>
    </a>
    </div>

  </div>
</div>

@endsection