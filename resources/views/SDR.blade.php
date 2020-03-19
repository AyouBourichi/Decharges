<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .areaContent{
                width: 350px;
                display: grid;
                direction: rtl;
                border: 1px dashed #000;
                border-radius: 5px;
                padding: 75px 20px 30px 20px;
                margin: auto;
                margin-top: 145px;
                background-color: #ededed;
                position: relative;
            }
            input[type="text"] {
                padding: 5px;
                border-radius: 3px;
                border: 1px solid #8f8f8f;
            }
            button {
                width: 200px;
                cursor: pointer;
                margin: auto;
                display: block;
                margin-top: 30px;
                padding: 10px;
                border-radius: 5px;
                background-color: darkblue;
                color: #fff;
                font-family: inherit;
                font-weight: bold;
                font-size: 16px;
                outline: none;
                border: 1px solid;
                transition: .3s;
            }
            button:hover {
                background-color: #0404c0;
            }
            .logo{
                height: 150px;
                width: 150px;
                position: absolute;
                top: -90px;
                right: 115px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                <div>
                    {{ Form::open(array('url' => '/word')) }}
                        <div class="areaContent">
                            <img class="logo" src="{{URL::asset('/img/logo.png')}}">
                            {{ Form::label('titre', 'الاسم : ') }}
                            {{ Form::text('prenom', '', ['class' => 'form-control', 'placeholder' => '...............']) }}
                            <br>
                            {{ Form::label('titre', 'النسب : ') }}
                            {{ Form::text('nom', '', ['class' => 'form-control', 'placeholder' => '...............']) }}
                            <button>تحميل الملف</button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </body>
</html>
