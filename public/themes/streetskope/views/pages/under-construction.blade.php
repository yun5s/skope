@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <head>
                    <title>Under Construction</title>
                    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js ">
                </script>
               </head>

            </div>
        </div>
    </div>
</div>
<body>


<ul class="ticker">
<li><span>Lastest Update &raquo;</span> Page</li>
<li><span>Lastest Update &raquo;</span> Is</li>
<li><span>Lastest Update &raquo;</span> Undering</li>
<li><span>Lastest Update &raquo;</span> Construction</li>

</ul>


<div class="wrapper">
       <!-- <div class="const"><img src="{{asset('themes/streetskope/assets/images/icons/cropped-ssnow2.png')}}"></div>-->
        <div class="constext">
            <h2>Page</h2>
            <h3>Under Construction</h3>
            <a href = "http://streetskope.com/">Cick here to go back<a>
        </div>
    </div>
</body>



<script type="text/javascript">
    var hoveredElement=null;

    function tick(){
        $('.ticker').filter(function(item){   
                    return !$(this).is(hoveredElement)
                }).each(function(){
            $(this).find('li:first').slideUp(function () {                       
                $ticker = $(this).closest('.ticker');
                
                $(this).appendTo($ticker).slideDown();
            });
        });
    }
    setInterval(tick, 5000);


    $(function(){
        $('.ticker').hover(function(){
    hoveredElement=$(this);        
        },function(){
            hoveredElement=null;
        });
    });
</script>

<style>
    /*--------------------------------------------------------------
    # News Ticker 
    --------------------------------------------------------------*/
    body {
        background-color: #c3f4ef;
        margin: 0;
        }
    .ticker {
        height: 42px;
        overflow: hidden;
        line-height: 38px;

    }
    ul.ticker li span{
        background-color: #16ccc2;
        border-right: 1px solid #fff
        color: #cbefee;
        margin-right: 6px;
        font-size: 20px;  
            padding: 10px 25px 10px 30px;
    }

    .ticker a:hover,
    .ticker li:hover{
        color:#000000;
    }
    .ticker a,
    .ticker li{
      color: #fff;
      font-size: 15px;
      background:#295abc;
      list-style: none;

    }
    </style>
    <!---<style type="text/css">
        body {
            background-color: #eee;
            margin: 0;
        }
        .wrapper {
            display: block;
            margin: 0 auto;
            position: relative;
            top: 120px;
            width: 990px;
        }
        .const {
            background-color: #f0cb01;
            border: 10px solid #000;
            display: inline-block;
            height: 200px;
            padding: 30px;
            position: relative;
            transform: rotate(45deg);
            width: 200px;
        }
        .const > img {
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }
        .constext {
            display: inline-block;
            margin-left: 145px;
            width: 465px;
        }
        .constext > h2 {
            font-family: sans-serif;
            font-size: 170px;
            margin: 0;
            text-align: left;
            text-transform: uppercase;
            color: #35d1cc;
        }
        .constext > h3 {
            font-family: sans-serif;
            font-size: 39px;
            margin: 0;
            text-align: left;
            text-transform: uppercase;
            color: #35d1cc;
        }
    </style>
</head>
-->



@endsection
