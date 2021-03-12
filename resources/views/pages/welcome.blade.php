@extends('main')

@section('body')

<div class="container">
    <h1 class="desktop">Want to Learn and Hire? <span>Search Here</span></h1>
    <h4 class="mobile">Want to Learn and Hire? <span>Search Here</span></h4>
    <form class="form-inline">
        <div class="form-group col-md-9">
        <input type="text" class="form-control" placeholder="Search by company's name or location">
        </div>
        <button type="submit" class="btn btn-primary col-md-3">Search</button>
    </form>	
</div>
</section>
<section id="addedCompanies">
    <div class="container">
        <h2 class="header text-center">To Learn</h2>
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
        <h2 class="header text-center">Newly Added Companies</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="company">
                    <div class="image">
                        <img src="http://www.peoplesdailyng.com/wp-content/uploads/2014/02/Guaranty-Trust-Bank-gtbank-logo.jpg" >
                    </div>
                    <h6>Guaranty Trust Bank</h6>
                    <div class="rating">
                        <i class="my-rating"></i> <span>4.5</span>
                    </div>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="company">
                    <div class="image">
                        <img src="https://kareercircle.com/public/logos/1507916292.jpg" >
                    </div>
                    <h6>Ikeja Electric</h6>
                    <div class="rating">
                        <i class="my-rating"></i> <span>4.5</span>
                    </div>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="company">
                    <div class="image">
                        <img src="https://kareercircle.com/public/logos/1511944180.png" >
                    </div>
                    <h6>PricewaterhouseCoopers</h6>
                    <div class="rating">
                        <i class="my-rating"></i> <span>4.5</span>
                    </div>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="company">
                    <div class="image">
                        <img src="https://kareercircle.com/public/logos/1507916817.jpg" >
                    </div>
                    <h6>KPMG</h6>
                    <div class="rating">
                        <i class="my-rating"></i> <span>4.5</span>
                    </div>
                    <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                </a>
            </div>

        </div>
        <div class="desktop">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="company">
                        <div class="image">
                            <img src="https://kareercircle.com/public/logos/1504862880.jpg" >
                        </div>
                        <h6>Whogohost</h6>
                        <div class="rating">
                            <i class="my-rating"></i> <span>4.5</span>
                        </div>
                        <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="company">
                        <div class="image">
                            <img src="https://kareercircle.com/public/logos/1507914911.JPG" >
                        </div>
                        <h6>Monstajams</h6>
                        <div class="rating">
                            <i class="my-rating"></i> <span>4.5</span>
                        </div>
                        <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="company">
                        <div class="image">
                            <img src="img/bells.jpg" >
                        </div>
                        <h6>Bells University</h6>
                        <div class="rating">
                            <i class="my-rating"></i> <span>4.5</span>
                        </div>
                        <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> -->
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="company">
                        <div class="image">
                            <img src="img/bells.jpg" >
                        </div>
                        <h6>Bells University</h6>
                        <div class="rating">
                            <i class="my-rating"></i> <span>4.5</span>
                        </div>
                        <!-- <a class="btn btn-block btn-primary" href="#" role="button">Review</a> --> 
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection