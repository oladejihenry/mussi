@extends('main')

@section('body')

<div class="container">
    <h1 class="desktop">Want to Learn and Hire? <span>Search Here</span></h1>
    <h4 class="mobile">Want to Learn and Hire? <span>Search Here</span></h4>
    <form class="form-inline" method="GET" action="{{ route('searchpost') }}">
        <div class="form-group col-md-9">
        <input type="search" name="query" value="{{ request()->input('query') }}" class="form-control" placeholder="Search by post">
        </div>
        <button type="submit" class="btn btn-primary col-md-3">Search</button>
    </form>	
</div>
</section>
<section id="addedCompanies">
    <div class="container">
        <h2 class="header text-center">Our Categories</h2>
        <br>
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="company">
                    <div class="image">
                        <img src="{{asset('images/keyboard.jpg')}}" >
                    </div>
                    <h6>Keyboard</h6>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="company">
                    <div class="image">
                        <img src="{{asset('images/guitar.jpg')}}" >
                    </div>
                    <h6>Guitar</h6>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="company">
                    <div class="image">
                        <img src="{{asset('images/saxophone.jpg')}}" >
                    </div>
                    <h6>Saxophone</h6>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>

        </div>
    </div>
</section>
<section id="addedCompanies">
    <div class="container">
    <br>
        <h2 class="header text-center">Newly Added Lessons</h2>
        <br>
        <div class="row">
            @foreach ($post as $posts)
            <div class="col-md-3">
                <a href="{{ route('posts.show', ['category'=>strtolower($posts->category()->first()->name), 'post'=>$posts->slug]) }}" class="company">
                    <div class="image">
                        <img src="{{url('uploads/'.$posts->image)}}">
                    </div>
                    <h6>{{ $posts->title }}</h6>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>
            @endforeach
           

        </div>
       
    </div>
</section>
@endsection