<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>{{ $title }} - News Aggregator</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>
<body>
    
<x-header />

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">{{ $title }}</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      
      {{ $slot }}
      
    </div>
  </div>

</main>

<x-footer />

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>      

</body>
</html>
