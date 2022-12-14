@extends('master')
@section('content')
    <div class="container">

          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">

                @foreach ($products as $item)
                    <div class="carousel-item {{$item['id']==1?'active':''}}">
                        <div class="d-flex justify-content-center">
                            <img src="{{$item['gallery']}}" class="d-block" alt="..."  style="height: 400px;">
                            <div class="carousel-caption d-none d-md-block bg-dark bg-gradient text-white" style="--bs-bg-opacity: .50;">
                                <h5>{{$item['name']}}</h5>
                                <p >{{$item['description']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
@endsection

