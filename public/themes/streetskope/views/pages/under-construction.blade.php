<!DOCTYPE HTML>
<html>
    <head>
        <title>Under Construction</title>
        <style type="text/css">
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

    <body>
        <div class="wrapper">
            <div class="const"><img src="{!! url('setting/'.Setting::get('logo')) !!}"></div>
            <div class="constext">
                <h2>Page</h2>
                <h3>Under Construction</h3>
            </div>
        </div>
    </body>
</html>