@include('ajaxJs')
<meta name="token" content="{{csrf_token()}}">


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

      .navbar-bg {
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
          opacity: .5;
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

    <title>Boovies - Book of Movies</title>
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


<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 d-none d-md-block">
                <div class="carousel-caption pl-5" style="text-align: left;">
                  <h2 class="display-4">Boovies. <br>Book of <i>Movies</i>.</h2>
                  <p class="lead">Discover millions of movies just by one single click.</p>
                  <button class="btn btn-outline-secondary mt-3" onclick='scrollMovie()'>Learn More</button>
                </div>
              </div>
              <div class="carousel-caption d-block d-md-none">
                <h3>Book of <i>Movies</i>.</h3>
              </div>




                <div class="blob">
                  <svg viewBox="0 0 350 350" xmlns="http://www.w3.org/2000/svg">
  <path fill="#68da23" d="M43.2,-36.7C54.2,-20.5,60.4,-2.7,58.8,17.1C57.2,36.8,47.9,58.4,32.9,63.9C17.9,69.4,-2.7,58.9,-22,48.5C-41.3,38.1,-59.3,27.9,-63,13.7C-66.8,-0.4,-56.3,-18.4,-43.4,-35.1C-30.5,-51.7,-15.3,-66.9,0.4,-67.2C16,-67.5,32.1,-52.9,43.2,-36.7Z" transform="translate(100 100)" />
</svg>
                </div>
                <div class="blob2">
                  <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path fill="#fff" d="M34.5,-33C45.2,-14.1,54.8,0.3,54.3,16.3C53.8,32.4,43.2,50.1,29.1,54.7C15,59.2,-2.7,50.7,-17.5,41.6C-32.3,32.4,-44.3,22.6,-46.5,11.1C-48.8,-0.5,-41.4,-13.8,-32.1,-32.5C-22.7,-51.1,-11.3,-75.2,0.3,-75.4C11.9,-75.6,23.8,-52,34.5,-33Z" transform="translate(100 100)" />
</svg>
                </div>
                <div class="blob3">
                  <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
  <path fill="#412854" d="M49.7,-43.9C57.4,-30,51.9,-9.7,43.3,2.7C34.7,15.1,23.2,19.6,8.7,31.8C-5.7,44,-23,63.9,-40.1,63.3C-57.1,62.7,-73.9,41.7,-71.4,24.5C-68.8,7.2,-46.9,-6.3,-31.7,-22C-16.6,-37.7,-8.3,-55.5,6.3,-60.5C21,-65.6,42,-57.9,49.7,-43.9Z" transform="translate(100 100)" />
</svg>
                </div>


            </div>
          </div>
      </div>

          @foreach( $data as $movie )
          @if($loop->iteration < 5)
      <div class="carousel-item">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 d-none d-md-block">
                <div class="carousel-caption pl-5" style="text-align: left;">
                  <h2 class="display-4">{{ $movie['title'] }}</h2>
                  <p>{{ $movie['overview'] }}</p>
                  <a href="/movie/{{$movie['id']}}" class="btn btn-outline-secondary mt-3">Learn More</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 p-0">
                <div class="grad-overlay d-none d-md-block"></div>
                <div class="carousel-backdrop" style="background-image: url('http://image.tmdb.org/t/p/original{{$movie['backdrop_path']}}')"></div>
              </div>

              <div class="carousel-caption d-block d-md-none my-auto">
                  <h3><a href="/movie/{{$movie['id']}}" style="text-decoration: none; background: #000; color: #fff">{{ $movie['title'] }}</a></h3>
              </div>
            </div>
          </div>
      </div>
          @endif
          @endforeach

      <!-- Slide Two - Set the background image for this slide in the line below 
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>-->
      <!-- Slide Three - Set the background image for this slide in the line below 
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>-->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>


    <div class="container" id="allMovie">
      <div class="row mt-5 pt-5 justify-content-center">
        <div class="col-sm-8 col-xs-10">
          <center>
            <h3 style="color: #fff">Here's a bunch of fresh and handpicked movies, only for you.</h3>
          </center>
        </div>
      </div>
      <div class="row mt-3 justify-content-center">
        <div class="col-sm-8 col-xs-10">

          <div class="btn-group btn-block btn-group-toggle" data-toggle="buttons" id="ajaxToggle">
            <label class="btn btn-secondary active">
              <input type="radio" checked onclick='sort_by("popularity.desc")'> Sort by Popularity
            </label>
            <label class="btn btn-secondary">
              <input type="radio" onclick='sort_by("release_date.desc")'> Sort by Newest
            </label>
            <label class="btn btn-secondary">
              <input type="radio" onclick='sort_by("vote_count.desc")'> Sort by Rating
            </label>
          </div>

        </div>
      </div>

      <div class="row mt-5 justify-content-center" id="movieList">
          @foreach( $data as $movie )
        <div class="col-sm-3 col-xs-12 mt-4">
          <div class="post-toggle d-none d-md-block">
            <div style="position: relative;" class="d-none d-md-block">
              <img src="http://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" alt="{{ $movie['title'] }}" style="max-width: 100%; border-radius: 10px;">
              <div class="grad-overlay-movie"></div>
              <a href="/movie/{{$movie['id']}}"><h5 class="p-3" style="position: absolute; bottom: 0px">{{ $movie['title'] }}</h5></a>
            </div>
            <div class="hideme d-block">
              <p class="overview">{{ $movie['overview'] }}</p>
              <p class="p-0 m-0 pb-2"><b><i>Popularity: </i></b>{{ $movie['popularity'] }} (<b>#{{$loop->iteration}}</b>)</p>
              <p class="p-0 m-0"><b><i>Genre: </i></b>
                @foreach( $movie['genre_ids'] as $gen_id )
                  <?php 
                  $genre = DB::table('genres')->where('id',$gen_id)->get(); 
                  ?>
                  @foreach( $genre as $gen_name )
                    {{ $gen_name->name }}, 
                  @endforeach
                  @endforeach
              </p>
            </div>
          </div>
          <div class="post-toggle d-block d-sm-none">
              <img src="http://image.tmdb.org/t/p/w500{{$movie['poster_path']}}" alt="{{ $movie['title'] }}" style="max-width: 100%;">
              <center><a href="/movie/{{$movie['id']}}"><h3 class="p-3">{{ $movie['title'] }}</h3></a></center>
            <div class="p-3" style="background: #fff;">
              <p class="overview">{{ $movie['overview'] }}</p>
              <p class="p-0 m-0 pb-2"><b><i>Popularity: </i></b>{{ $movie['popularity'] }} (<b>#{{$loop->iteration}}</b>)</p>
              <p class="p-0 m-0"><b><i>Genre: </i></b>
                @foreach( $movie['genre_ids'] as $gen_id )
                  <?php 
                  $genre = DB::table('genres')->where('id',$gen_id)->get(); 
                  ?>
                  @foreach( $genre as $gen_name )
                    {{ $gen_name->name }}, 
                  @endforeach
                  @endforeach
              </p>
            </div>
          </div>
        </div>
          @endforeach
        <div class="col-sm-8 col-xs-10 mx-auto mt-3 p-5">
          <center>
            <h5 style="color: #fff">Don't feel good with the results?</h5>
            <button class="btn btn-outline-secondary mt-3" onclick='sort_by("popularity.asc")'>Sort by Ascending</button>
            <button class="btn btn-outline-secondary mt-3 ml-2" onclick='dateDashboard()'>Pick a certain date</button>
          </center>
        </div>
      </div>
    </div>

  <footer class="p-5" style="background: #888; display: none;">
    <div class="container">
      <div class="row p-3">
        <div class="col-sm-8 col-xs-10 mx-auto">
          <h5 style="color: #fff; text-align: center;" class="mb-3">Pick the date you want and you're good to go!</h5>
          <div class="input-group input-daterange">
              <input type="text" class="form-control" placeholder="Start Date" name="start">
              <h5 class="mx-3">to</h5>
              <input type="text" class="form-control" placeholder="End Date" name="end">
          </div>
          <center>
            <button class="btn btn-outline-dark mt-3" onclick='checkRelease()'>Search Movie</button>
          </center>
        </div>
      </div>

      <div class="row mt-5 justify-content-center" id="movieDateList"></div>
    </div>

  </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">


  </body>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.input-daterange input').each(function() {
        $(this).datepicker({
          format: 'yyyy-mm-dd'
        });
      });
    })

    $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();
      if (scroll > window.innerHeight) 
        $('.navbar').addClass('navbar-bg')
      else
        $('.navbar-bg').removeClass('navbar-bg')
    });
  </script>
</html>