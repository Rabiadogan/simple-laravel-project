<!DOCTYPE html>
<html lang="tr">
<head>

<title>Blog Sitesi</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="{{ asset('front/') }}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('front/') }}/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('front/') }}/css/magnific-popup.css">

<link rel="stylesheet" href="{{ asset('front/') }}/css/owl.theme.css">
<link rel="stylesheet" href="{{ asset('front/') }}/css/owl.carousel.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{ asset('front/') }}/css/tooplate-style.css">
<link rel="shortcut icon" type="image/png" href="https://toren.com.tr/wp-content/uploads/2017/01/cropped-Favicon.png"/>
</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
    <div class="spinner">
         <span class="sk-inner-circle"></span>
    </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

         <!-- NAVBAR HEADER -->
         <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
                   <span class="icon icon-bar"></span>
              </button>
              <!-- lOGO -->
              <a href="{{ route('homepage') }}" class="navbar-brand">Rabia Doğan</a>
         </div>

<!-- MENU LINKS -->
<div class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
         <li><a href="{{ route('homepage') }}" class="smoothScroll">Ana Sayfa</a></li>
        @foreach ($pages as $page)
        <li>
            <a class="smoothScroll" href="{{ route('page',$page->slug) }}">{{ $page->title }}</a>
        </li>
        @endforeach
        <li><a href="{{ route('iletisim') }}" class="smoothScroll">İletişim</a></li>
    </ul>
</div>

</div>
</div>


<!-- HOME -->
<section id="home" class="parallax-section">
<div class="overlay"></div>
<div class="container">
<div class="row">

    <div class="col-md-8 col-sm-12">
         <div class="home-text">
              <h1>@yield('title')</h1>
              <ul class="section-btn">
                   <a href="#about" class="smoothScroll"><span data-hover="Dahası..">@yield('title')</span></a>
              </ul>
         </div>
    </div>

</div>
</div>

<!-- Video -->
<video controls autoplay loop muted>
<source src="{{ asset('front/') }}/videos/video.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</section>


<!-- ABOUT -->
<section id="about" class="parallax-section">
<div class="container">
<div class="row">
