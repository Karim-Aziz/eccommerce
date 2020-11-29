<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Roboto Condensed", sans-serif;
        }
        label {
            color: #fff;
        }
        body {
            margin: 0;
            padding: 0;
            background: url("<?php echo e(url('/img/bg.jpg')); ?>");
            background-size: cover;
        }

        .loginBox {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            height: 420px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.7);
        }

        .user {
            width: 100px;
            height: 100px;
            overflow: hidden;
            position: absolute;
            top: calc(-100px / 2);
            left: calc(50% - 50px);
        }

        h2 {
            margin: 0;
            padding: 0 0 20px;
            color: #ab854f;
            text-align: center;
        }

        .loginBox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }

        .loginBox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .loginBox input[type="email"],
        .loginBox input[type="password"] {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }

        ::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .loginBox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
            background: #ab854f;
            cursor: pointer;
            border-radius: 20px;
        }

        .loginBox input[type="submit"]:hover {
            background: #efed40;
            color: #262626;
        }

        .loginBox a {
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
        }

        .custom-a {
            margin-top: 20px;
            text-align: center;
        }
        .help-bloc{
            color: red;
        }
        .custom-a :hover {
            color: #efed40;
        }
    </style>

</head>

<body>
    <div class="loginBox">
    <img src="<?php echo e(url('/img/user.png')); ?>" class="user">
        <h2>Log In Here</h2>
        <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>


            <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required
                        autofocus>

                    <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <input type="submit" name="" value="Sign In">
                </div>
            </div>

        </form>
        <div class="custom-a">
            <a href="https://vudigitalsolution.com/">Designed by Small Shop</a>
        </div>

    </div>
</body>

</html>
