@extends('layouts.home')

@section('page_title', 'Thank You for Donating')

@section('content')
    <!-- Header Carousel -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!--<div class="fill carousel-video">
                    <video autoplay loop>
                        <source src="video/csd-home-mov.mov" type="video/mov">
                        <source src="video/csd-home-mov.webm" type="video/webm">
                    </video>
                    <div class="carousel-caption">
                        <i class="fa fa-star fa-3x identity"></i>
                        <h2>Web design & development</h2>
                    </div>
                </div>-->
                <div class="fill" style="background-image:url('/img/portfolio/thumbnails/1.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/img/portfolio/thumbnails/2.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/img/portfolio/thumbnails/3.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/img/portfolio/thumbnails/4.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/img/portfolio/thumbnails/5.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('/img/portfolio/thumbnails/6.jpg');"></div>
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <img style="margin-bottom: 30px; width: 200px;" src="/img/shanti_logo.png" alt="Shanti logo" />
                <h2 class="section-heading">Thank you for contacting Shanti 2nd Chances!</h2>
                <hr >
                <p>We have received your message. A 2nd Chances representative will be in touch with you shortly to arrange for pickup wherever you are in the Valley.</p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.carousel').carousel({
            interval: 6000 //changes the speed
        })
    </script>
@endsection