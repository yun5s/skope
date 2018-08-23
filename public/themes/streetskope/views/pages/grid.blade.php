@extends('layouts.app')

@section('content')

    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <div class="well">
                <p>Catagory</p>
                <p><a href="#">Business</a></p>
                <p><a href="#">Promotion</a></p>
                <p><a href="#">Charity</a></p>
                <p><a href="#">Art</a></p>
                <p><a href="#">Poetry</a></p>
                <p><a href="#">Design</a></p>
                <p><a href="#">Music</a></p>
                </div>

                <div class="well">
                    <p>AD</p>
                    <hr>
                    <p>AD</p>
                    <hr>
                    <p>AD</p>
                    <hr>
                    <p>AD</p>
                </div>
            </div>

            <div class="col-sm-8 text-left">

                    <div class="row">
                        <div class="alert alert-info" role="alert">
                            <marquee class="col-lg-offset-3" ><p style="font-family: Impact; font-size: 18pt">Streetskope is a social networking application made to inspire, create and connect with people!</p></marquee>
                        </div>
                    </div>

                <h1>The success behind LEGO  <span class="label label-danger">Live</span></h1>
                <div align="center" class="embed-responsive embed-responsive-16by9">
                    <video autoplay loop class="embed-responsive-item">
                        <source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
                    </video>
                </div>
                <hr>
                <h3>Featured</h3>
                <div class="well">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="images/images-3.jpeg" alt="...">
                        </a>
                    </div>
                </div>
                </div>
                <hr>
                <h3>Competition</h3>
                <div class="well">
                <p>It's not enough that Toshiba is the laptop expert and makes the best laptops for your school experience. You've gotta take it one notch further: super-size your cool factor, turn the dial up to 11, radiate awesome from every angle. Go nuts and design a laptop skin that exemplifies the very essence of cool that you and every other student out there needs.
                    <ul>3 Steps to Victory
                    <li>Download the Skin Template provided below.</li>
                    <li> Design your skin within the boundaries of the template.</li>
                    <li>Upload your work to deviantART!</li>
                </ul></p>
                <button type ="submit" class="btn btn-success" role="button"> Enter Competition</button>
                </div>
                <hr>
                <h3>Writer's Blog</h3>
                <div class="well">
                <p><a href="https://www.google.com">Where is Technology taking us? Predictions 2020 </a><span class="label label-default">New</span></p>
                <p><a href="https://uk.reuters.com/article/us-uber-austria/uber-rides-again-in-vienna-after-two-day-suspension-idUKKBN1HY2PW">Uber rides again in Vienna after two-day suspension </a><span class="label label-default">New</span></p>
                <p><a href="https://uk.reuters.com/article/us-usa-china-zte-taiwan/taiwan-tells-firms-to-seek-approval-for-trading-with-zte-nikkei-idUKKBN1HY2P8">Taiwan tells firms to seek approval for trading with ZTE: Nikkei </a><span class="label label-default">New</span></p>
                <p><a href="https://uk.reuters.com/article/us-nfl-amazon-com/amazon-nfl-reach-130-million-streaming-deal-for-thursday-night-games-source-idUKKBN1HX3EP">Amazon, NFL reach $130 million streaming deal for Thursday night games: source </a></p>
                <p><a href="https://uk.reuters.com/article/us-crypto-currencies/bitcoin-frenzy-settles-down-as-big-players-muscle-into-market-idUKKBN1HY0W7">Bitcoin frenzy settles down as big players muscle into market </a><span class="label label-default">New</span></p>
                <p><a href="https://uk.reuters.com/article/uk-sony-results/sony-targets-eventual-repeat-of-last-years-record-after-flagging-profit-dip-idUKKBN1HY0LO">Sony targets eventual repeat of last year's record after flagging profit dip</a></p>
                <a href ="" class = "btn btn-default btn-md" role="button"> view more</a>
                </div>
                <hr>

            </div>

            <div class="col-sm-2 sidenav">
                <div class="well">
                        <table class="table table-hover table table-striped">
                            <thead>
                            <tr><th>#</th><th>Art Painting</th></tr>
                            </thead>
                            <tbody>
                            <tr><td>1</td><td>John</td></tr>
                            <tr><td>2</td><td>Smith</td></tr>
                            <tr><td>3</td><td>David</td></tr>
                            <tr><td>4</td><td>Paul</td></tr>
                            </tbody>
                        </table>
                </div>



                </div>
            </div>
        </div>
    </div>


    @endsection