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
              <p class="p-0 m-0 pb-2"><b><i>Popularity: </i></b>{{ $movie['popularity'] }}</p>
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
              <p class="p-0 m-0 pb-2"><b><i>Popularity: </i></b>{{ $movie['popularity'] }}</p>
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
            @if($req == "popularity.desc")
              <button class="btn btn-outline-secondary mt-3" onclick='sort_by("popularity.asc")'>Sort by Ascending</button>
            @elseif($req == "popularity.asc")
              <button class="btn btn-outline-secondary mt-3" onclick='sort_by("popularity.desc")'>Sort by Descending</button>
            @elseif($req == "release_date.desc")
              <button class="btn btn-outline-secondary mt-3" onclick='sort_by("release_date.asc")'>Sort by Ascending</button>
            @elseif($req == "release_date.asc")
              <button class="btn btn-outline-secondary mt-3" onclick='sort_by("release_date.desc")'>Sort by Descending</button>
            @elseif($req == "vote_count.desc")
              <button class="btn btn-outline-secondary mt-3" onclick='sort_by("vote_count.asc")'>Sort by Ascending</button>
            @elseif($req == "vote_count.asc")
              <button class="btn btn-outline-secondary mt-3" onclick='sort_by("vote_count.desc")'>Sort by Descending</button>
            @endif
            
            <button class="btn btn-outline-secondary mt-3 ml-2" onclick='dateDashboard()'>Pick a certain date</button>
          </center>
        </div>
      </div>