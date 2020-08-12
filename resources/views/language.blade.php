<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width,maximum-scale=1.0,user-scalable=no,initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/48be5f5ef0.js" crossorigin="anonymous"></script>
    <title>ELearning Migrare 101</title>
</head>

<body>


    <style>
        body {
            min-height: 100vh;
            /* will cover the 100% of viewport */
            overflow: hidden;
            display: block;
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            color: #5D6D7E;


        }

        .dot {
            height: 180px;
            width: 180px;
            background-color: white;
            border-radius: 50%;
            display: inline-block;
            margin: 10px;
            padding: 60px 0;
            text-align: center;
            font-size: 1.8rem;
            border-style: solid;
            border-color: #77216F;
            border-width: 3px;
            cursor: pointer;
            transition: 0.3s;
        }

        hr {
            border: none;
            height: 2px;
            /* Set the hr color */
            color: #D5D8DC;
            /* old IE */
            background-color: #D5D8DC;
            /* Modern Browsers */
        }

        .dot:hover {
            background-color: #77216F;
            color: whitesmoke;
            height: 200px;
            width: 200px;
            padding: 70px 0;

          }

          footer {
            background: rgba(0, 0, 0, 0.05);
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            position: absolute;
        }

        /* Media queries */

@media only screen and (max-device-width: 480px) and (orientation:portrait) {
    
    .dot {
        height: 130px;
        width: 130px;
        background-color: white;
        border-radius: 50%;
        display: inline-block;
        margin: 10px;
        padding: 45px 0;
        text-align: center;
        font-size: 1.2rem;
        border-style: solid;
        border-color: #77216F;
        border-width: 3px;
        cursor: pointer;
        transition: 0.3s;
    }

    .dot:hover {
        background-color: #77216F;
        color: whitesmoke;
        height: 150px;
        width: 150px;
        padding: 55px 0;

      }
    
}
    </style>
    </head>

    <body class="container-fluid">

        <div style="text-align:center;margin: auto;">
            <h1>Migrare Elearning 101</h1>
            <h3>Language | Español | Língua</h3>
            <br>
            <hr>
            <div class="dot" onclick="location.href='https://migrare101.herokuapp.com/en/login';">English</div>
            <div class="dot">Español</div>
            <div class="dot">Portugues</div>

        </div>

        <footer>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-2" style="color: #808B96;font-size: 12px;">© 2020 Copyright, developed
              by
              Ing. André Bolaños</div>
            <!-- Copyright -->
          </footer>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>

</html>
