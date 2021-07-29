<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }

        body {
            line-height: 1;
        }

        ol, ul {
            list-style: none;
        }

        blockquote, q {
            quotes: none;
        }



        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            font: 14px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #404040;
            background: black;
        }

        .register-title {
            width: 366px;
            line-height: 43px;
            margin: 50px auto 20px;
            font-size: 19px;
            font-weight: 500;
            color: white;
            color: rgba(255, 255, 255, 0.95);
            text-align: center;
            text-shadow: 0 1px rgba(0, 0, 0, 0.3);
            background: #12c8e5;
            border-radius: 3px;
            background-image: -webkit-linear-gradient(top, #12c8e5, #12c8e5);
            background-image: -moz-linear-gradient(top, #12c8e5, #12c8e5);
            background-image: -o-linear-gradient(top, #12c8e5, #12c8e5);
            background-image: linear-gradient(to bottom, #12c8e5, #12c8e5);
            -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
            box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .register {
            margin: 0 auto;
            width: 326px;
            padding: 20px;
            background: #f4f4f4;
            border-radius: 3px;
            -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        input {
            font-family: inherit;
            font-size: inherit;
            color: inherit;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .register-input {
            display: block;
            width: 100%;
            height: 38px;
            margin-top: 2px;
            font-weight: 500;
            background: none;
            border: 0;
            border-bottom: 1px solid #d8d8d8;
        }
        .register-input:focus {
            border-color: #1e9ce6;
            outline: 0;
        }

        .register-button {
            display: block;
            width: 100%;
            height: 42px;
            margin-top: 25px;
            font-size: 16px;
            font-weight: bold;
            color: #494d59;
            text-align: center;
            text-shadow: 0 1px rgba(255, 255, 255, 0.5);
            background: #fcfcfc;
            border: 1px solid;
            border-color: #d8d8d8 #d1d1d1 #c3c3c3;
            border-radius: 2px;
            cursor: pointer;
            background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
            background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
            background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
            background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
            -webkit-box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
            box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
        }
        .register-button:active {
            background: #eee;
            border-color: #c3c3c3 #d1d1d1 #d8d8d8;
            background-image: -webkit-linear-gradient(top, #eeeeee, #fcfcfc);
            background-image: -moz-linear-gradient(top, #eeeeee, #fcfcfc);
            background-image: -o-linear-gradient(top, #eeeeee, #fcfcfc);
            background-image: linear-gradient(to bottom, #eeeeee, #fcfcfc);
            -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
            box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
        }
        .register-button:focus {
            outline: 0;
        }

        .register-switch {
            height: 32px;
            margin-bottom: 15px;
            padding: 4px;
            background: #12c8e5;
            border-radius: 2px;
            background-image: -webkit-linear-gradient(top, #12c8e5, #12c8e5);
            background-image: -moz-linear-gradient(top, #12c8e5, #12c8e5);
            background-image: -o-linear-gradient(top, #12c8e5, #12c8e5);
            background-image: linear-gradient(to bottom, #12c8e5, #12c8e5);
            -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
            box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
        }

        .register-switch-input {
            display: none;
        }

        .register-switch-label {
            float: left;
            width: 50%;
            line-height: 32px;
            color: white;
            text-align: center;
            text-shadow: 0 -1px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .register-switch-input:checked + .register-switch-label {
            font-weight: 500;
            color: #434248;
            text-shadow: 0 1px rgba(255, 255, 255, 0.5);
            background: white;
            border-radius: 2px;
            background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
            background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
            background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
            background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
        }

        :-moz-placeholder {
            color: #aaa;
            font-weight: 300;
        }

        ::-moz-placeholder {
            color: #aaa;
            font-weight: 300;
            opacity: 1;
        }

        ::-webkit-input-placeholder {
            color: #aaa;
            font-weight: 300;
        }

        :-ms-input-placeholder {
            color: #aaa;
            font-weight: 300;
        }

        ::-moz-focus-inner {
            border: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<h1 class="register-title">Create Product Shopping Cart</h1>
<form class="register" method="post">
    @csrf
    <div class="register-switch">
        <input type="radio" name="sex" value="F" id="sex_f" class="register-switch-input" checked>
        <label for="sex_f" class="register-switch-label">Female</label>
        <input type="radio" name="sex" value="M" id="sex_m" class="register-switch-input">
        <label for="sex_m" class="register-switch-label">Male</label>
    </div>
    <input type="text" class="register-input" name="name" placeholder="name">
    <input type="text" class="register-input" name="thumbnail" placeholder="thumbnail">
    <input type="date" class="register-input" name="price" placeholder="price">
    <input type="submit" value="Submit" class="register-button">
</form>
</body>
</html>
