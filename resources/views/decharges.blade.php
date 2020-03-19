<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Decharges</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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
                width: 80%;
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
                width: 100%;
            }
            button {
                width: 200px;
                cursor: pointer;
                margin: auto;
                display: block;
                /*margin-top: 30px;*/
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
                color: #fff !important;
                background-color: #116952 !important;
            }
            button:hover {
                background-color: #0e5140 !important;
            }
            div.logo {
                width: 100%;
                height: 0;
                text-align: center;
            }
            div.logo img{
                height: 150px;
                width: 150px;
                position: relative;
                top: -152px;
            }
            label {
                float: right;
                color: #03674c;
                text-decoration: underline;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                <div class="container">
                    {{ Form::open(array('url' => '/decharge')) }}
                        <div class="areaContent">
                            <div class="logo">
                                <img src="{{URL::asset('/img/logo.png')}}">
                            </div>
                            <br>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="manager">المصلحـــــة:</label>
                                    <select name="manager" id="manager" class="form-control">
                                        <option value="رئيس مصلحة كتابة الضبط ب" selected>مصلحة كتابة الضبط</option>
                                        <option value="رئيس مصلحة كتابة النيابة العامة لدى ">مصلحة كتابة النيابة العامة</option>
                                        <option value="المدير الفرعي لدى ">المديرية الفرعية</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="local">المحكمـــــة:</label>
                                    <select name="local" id="local" class="form-control">
                                        <option value="حكمة الاستئناف بورزازات" selected>محكمة الاستئناف</option>
                                        <option value="المحكمة الإِبتدائية بورزازات">المحكمة الإِبتدائية بورزازات</option>
                                        <option value="بالمحكمة الابتدائية بورزازات ) قسم قضاء الأسرة (">قسم قضاء الأسرة</option>
                                        <option value="المحكمة الإِبتدائية بتنغير">المحكمة الإِبتدائية بتنغير</option>
                                        <option value="المحكمة الإِبتدائية بزاكورة">المحكمة الإِبتدائية بزاكورة</option>
                                        <option value="المديرية الفرعية">المديرية الفرعية</option>
                                        <option value="مركز القاضي المقيم بأكدز">مركز القاضي المقيم بأكدز</option>
                                        <option value="مركز القاضي المقيم ببومالن دادس">مركز القاضي المقيم ببومالن دادس</option>
                                        <option value="مركز القاضي المقيم بقلعة مكونة">مركز القاضي المقيم بقلعة مكًونة</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="r">نوع العتــــاد:</label>
                                    <input type="text" name="equipment" class="form-control" id="equripment" placeholder="...............">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="quantity">الــــكميــــة:</label>
                                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="...............">
                                </div>
                            <button class="btn btn-lg btn-block col-md-12">تحميل الإشهــــــاد</button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </body>
</html>

