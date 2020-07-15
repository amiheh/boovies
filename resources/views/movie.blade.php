<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

    <style type="text/css">
      body {
        background-color: #000000 !important;
      }

      .navbar {
        background: linear-gradient(to top, rgba(0,0,0,0) , #000000 );
      }

      .carousel-item {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }

      .carousel-backdrop {
        height: 100vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }

      .grad-overlay {
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          left: 0;
          background: linear-gradient(to left, rgba(0,0,0,0) , #000000 );
      }


      .carousel-caption {
        bottom: inherit;
        top: 100px;
      }



      .blob {
        position: absolute;
        top: 0;
        right: 0;
        width: 50vmax;
        z-index: -1;
        animation: move 10s ease-in-out infinite;
        transform-origin: 50% 50%;
        opacity: .5;
        z-index: -1;
      }
      .blob2 {
        position: absolute;
        left: 0;
        top: 10%;
        width: 50vmax;
        z-index: -1;
        animation: move2 10s ease-in-out infinite;
        transform-origin: 50% 50%;
        opacity: .5;
        z-index: -1;
      }
      .blob3 {
        position: absolute;
        bottom: 0;
        right: 20%;
        width: 50vmax;
        z-index: -1;
        animation: move3 10s ease-in-out infinite;
        transform-origin: 50% 50%;
        opacity: .5;  
        z-index: -1;
      }

      .post-toggle {
        position: relative;
        transition: .5s;
      }

      .post-toggle .hideme {
        position: absolute;
        background: #fff;
        z-index: 999 !important;
        top: 10px;
        left: 10px;
        padding: 10px; 
        border-radius: 5px;
        font-size: 11px;
        width: calc(100% - 20px);
        opacity: 0;
        transition: .5s;
        box-sizing: border-box;
      }
      .post-toggle:hover {
      }
      .post-toggle:hover .hideme {
        opacity: 1;
      }


      .grad-overlay-movie {
          width: 100%;
          height: 100%;
          position: absolute;
          top: 0;
          left: 0;
          background: linear-gradient(to bottom, rgba(0,0,0,0) , #000000 );
          opacity: 1;
          transition: .5s;
      }

      #movieDateList .grad-overlay-movie {
          background: linear-gradient(to bottom, rgba(136,136,136,0) , #888888 );
      }

      .post-toggle:hover .grad-overlay-movie {
        opacity: 1;
      }

      .hideme .overview {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;

      }

      .navbar-brand {
        font-family: 'Suez One', serif;
      }

      .post-toggle a {
        color: #fff; 
        transition: .2s; 
        opacity: 1;
      }

      .post-toggle a:hover {
        opacity: .7
      }

      @keyframes move {
        0%   { transform: scale(1)   translate(-10px, -30px); }
        38%  { transform: scale(0.8, 1) translate(-80vw, -30vh) rotate(160deg); }
        40%  { transform: scale(0.8, 1) translate(-80vw, -30vh) rotate(160deg); }
        78%  { transform: scale(1.3) translate(0vw, 50vh) rotate(-20deg); }
        80%  { transform: scale(1.3) translate(0vw, 50vh) rotate(-20deg); }
        100% { transform: scale(1)   translate(10px, -30px); }
      }
      @keyframes move2 {
        0%   { transform: scale(1)   translate(10px, -30px); }
        38%  { transform: scale(1.3) translate(0vw, 20vh) rotate(-20deg); }
        40%  { transform: scale(1.3) translate(0vw, 20vh) rotate(-20deg); }
        78%  { transform: scale(0.8, 1) translate(80vw, 30vh) rotate(160deg); }
        80%  { transform: scale(0.8, 1) translate(80vw, 30vh) rotate(160deg); }
        100% { transform: scale(1)   translate(10px, -30px); }
      }
      @keyframes move3 {
        0%   { transform: scale(1)   translate(-30px, 10px); }
        38%  { transform: scale(0.8, 1) translate(10vw, 40vh) rotate(160deg); }
        40%  { transform: scale(0.8, 1) translate(10vw, 40vh) rotate(160deg); }
        78%  { transform: scale(1.3) translate(-50vw, -0vh) rotate(-20deg); }
        80%  { transform: scale(1.3) translate(-50vw, -0vh) rotate(-20deg); }
        100% { transform: scale(1)   translate(-30px, 10px); }
      }
      </style>

    <title>{{ $data['title'] }} - Boovies</title>

  </head>
  <body>


    <nav class="navbar navbar-dark fixed-top">
  <div class="container">
      <a class="navbar-brand mx-auto" href="{{url('/')}}"><h3>Boovies.</h3></a>
          <!--<div class="navbar-right">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>-->
  </div>
    </nav>


      <div class="row mt-5 pt-sm-5 mb-sm-5 pb-5 justify-content-center" style="color: #fff">
        <div class="col-sm-8 col-xs-10 mt-5">
          <div style="position: relative;">
            <img src="http://image.tmdb.org/t/p/original{{$data['backdrop_path']}}" alt="{{ $data['title'] }}" style="max-width: 100%; border-radius: 20px 20px 0 0" class="d-none d-sm-block">
            <img src="http://image.tmdb.org/t/p/original{{$data['backdrop_path']}}" alt="{{ $data['title'] }}" style="max-width: 100%;" class="d-block d-sm-none">
            <div class="grad-overlay-movie"></div>
            <div class="container p-5 d-none d-sm-block" style="position: absolute; bottom: 0">
              <div class="row">
                <div class="col-3 offset-md-1">
                  <img src="http://image.tmdb.org/t/p/w500{{$data['poster_path']}}" alt="{{ $data['title'] }}" style="max-width: 100%; 
    box-shadow: 0 0 100px 5px #000000;">
                </div>
                <div class="col-6 offset-md-1">
                  <div style="position: absolute; bottom: 0" class="d-none d-sm-block">
                    <h2>{{ $data['title'] }}</h2>
                    <p class="m-0 mt-2">
                      {{ floor((int)$data['runtime'] / 60) }} hours 
                      @if( (int)$data['runtime'] % 60  > 0)
                      and {{ (int)$data['runtime'] % 60 }} minutes
                      @endif | Rated <b>{{ $data['vote_average'] }}</b> by {{ $data['vote_count'] }} users
                    </p>
                    <p class="m-0 mt-2">
                      <i>Language: </i>
                      @foreach( $data['spoken_languages'] as $sl )
                      {{ $sl['name'] }},
                      @endforeach
                      |
                      <i>Genre: </i>@foreach( $data['genres'] as $g )
                      {{ $g['name'] }},
                      @endforeach
                    </p>
                    <a class="btn btn-outline-success mt-3" href="{{ $data['homepage'] }}">Watch Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-5">
            <div class="container">
              <div class="row">

                  <div class="col-12 d-block d-sm-none">
                    <h2>{{ $data['title'] }}</h2>
                    <p class="m-0 mt-2">
                      {{ floor((int)$data['runtime'] / 60) }} hours 
                      @if( (int)$data['runtime'] % 60  > 0)
                      and {{ (int)$data['runtime'] % 60 }} minutes
                      @endif | Rated <b>{{ $data['vote_average'] }}</b> by {{ $data['vote_count'] }} users
                    </p>
                    <p class="m-0 mt-2">
                      <i>Language: </i>
                      @foreach( $data['spoken_languages'] as $sl )
                      {{ $sl['name'] }},
                      @endforeach
                      |
                      <i>Genre: </i>@foreach( $data['genres'] as $g )
                      {{ $g['name'] }},
                      @endforeach
                    </p>
                    <a class="btn btn-outline-success mt-3" href="{{ $data['homepage'] }}">Watch Now</a>
                  </div>

                  <div class="col-12 d-block d-sm-none mx-auto my-5">
                    <h4 class="mb-3"><i>Poster</i></h4>
                    <img src="http://image.tmdb.org/t/p/w500{{$data['poster_path']}}" alt="{{ $data['title'] }}" style="max-width: 100%;">
                  </div>
                <div class="col-12 col-md-8">

                  <h4><i>Overview</i></h4>
                  <p>{{ $data['overview'] }}</p>
                </div>
                <div class="col-12 col-md-4">
                  <h4><i>Other info</i></h4>
                  <p><i>Popularity: </i>{{ $data['popularity'] }}</p>
                  <p><i>Release Date: </i>{{ $data['release_date'] }}</p>
                  <p><i>Revenue: </i>${{ $data['revenue'] }}</p>
                  <p><i>Production Companies:</i>
                    @foreach( $data['production_companies'] as $pc )
                    {{ $pc['name'] }};
                      @endforeach
                  </p>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>