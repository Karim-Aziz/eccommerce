<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>  الموقع غير متاح الان</title>

    <link href="{{ asset('/') }}resources/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}resources/assets/css/bootstrap/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}resources/assets/css/fonts.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font: 14px "JF Flat Regular",tahoma;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 38px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>الموقع غير متاح الان</h1>
                {!! settings::data('msg_site') !!}

            </div>
        </div>
    </div>
</div>

</body>
</html>
