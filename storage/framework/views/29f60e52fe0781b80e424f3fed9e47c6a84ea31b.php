<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> خطأ 404</title>
        <link href="<?php echo e(url('/css/bootstrap.min.css')); ?>" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo e(url('/css/font-awesome.min.css')); ?>">

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
                    <h1>404</h1>
                    <h2>الصفحة التى تطلبها غير موجود.</h2>
                    <p class="error-details">
                        ربما أنه قد تم حذف الصفحة أو أنه غير مصرح لك بدخول هذه الصفحة .
                    </p>
                    <div class="error-actions">
                        <a href="<?php echo e(asset('/')); ?>" class="btn btn-primary"><span class="fa-lg fa-home fa"></span>
                        الصفحة الرئيسيه</a>
                        <a href="<?php echo e(asset('/')); ?>contact" class="btn btn-default"><span class="fa-lg fa-envelope fa"></span> اتصل بنا </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
