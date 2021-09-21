<?php
include '../admin/login/koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no maximum-scale=1, user-scalable=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Style+Script&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="foto/bh2.png">

    <link rel="shortcut icon" href="malas_ngoding.jpg">

    <title>Bajirah Huis</title>
    <style>
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css");

        html,
        body {
            height: 100%;
            margin: 0;
        }

        /* jumbotron */
        .jt {
            background-image: url(foto/sd.jpeg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100%;
            position: relative;
        }

        .jt::after {
            content: '';
            display: block;
            width: 100%;
            height: 110%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
            position: absolute;
            bottom: 0;
        }

        .jt,
        .container {
            position: relative;
            z-index: 1;
        }

        .display-2,
        h1,
        p,
        .btn {
            margin-left: 50px;
            position: relative;
            animation: re 1s forwards;
        }

        @keyframes re {
            from {
                top: -400px;
            }

            to {
                top: 10px;
            }
        }

        .jt h1 {
            margin-top: 10px;
            font-family: viga;
            font-size: 28px;
            font-weight: 200px;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.6);
            margin-bottom: 30px;
            margin-left: 50px;
            text-transform: uppercase;
        }

        .jt span {
            font-weight: 500px;
        }

        .jt p {
            margin-top: -20px;
            font-size: 15px;
            margin-left: 55px;
        }

        .jt .btn {
            margin-top: 5px;
            margin-left: 60px;
            background-color: #463837;
            font-size: 12px;
            width: 100px;
            height: 35px;
        }

        /* akhir jumbotron */


        @media (min-width: 992px) {

            html,
            body {
                height: 100%;
                width: 100%;
                margin: 0;
            }

            .jt {
                background-image: url(foto/ol.jpeg);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                width: 100%;
                height: 100%;
                position: relative;
            }

            .jt::after {
                content: '';
                display: block;
                width: 100%;
                height: 50%;
                background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
                position: absolute;
                bottom: 0;
            }

            .display-2 {
                margin-top: 5px;
                margin-left: 150px;

            }

            .jt h1 {
                margin-top: 50px;
                margin-left: 50px;
                font-size: 50px;
                font-weight: 200px;
                margin-bottom: 15px;
                text-transform: uppercase;
            }

            .jt h1 span {
                font-weight: 500px;
            }

            .jt p {
                margin-top: 15px;
                font-size: 23px;
                margin-left: 100px;
            }

            .jt .btn {
                margin-top: 20px;
                margin-left: 150px;
                font-size: 17px;
                width: 140px;
                height: 40px;
            }

            .display-2,
            h1,
            p,
            .btn {
                margin-left: 100px;
                position: relative;
                animation: re 1s forwards ease;
            }

            @keyframes re {
                from {
                    top: -400px;
                }

                to {
                    top: 70px;
                }
            }
        }

        @media (min-width: 576px) {
            btn {
                width: 50px;
            }

            .t,
            .display-2 {
                font-size: 40px;
            }
        }
    </style>
</head>

<body>


    <!-- jumbotron -->
    <div class="jt jumbotron-fluid">
        <div class="container col-sm-12 col-lg-6 row ">
            <h1 class="display-2 text-dark"><span>Bajirah</span> Huis</h1>
            <p class="col-lg-9 col-sm-9 text-left">Menyediakan menu yang lezat namun tidak mengesampingkan kandungan gizi agar masyarakat
                tetap sehat.
                Menjual makanan/minuman terbaik dengan harga yang lebih terjangkau agar dapat dinikmati semua kalangan.
                Tak ada hentinya berinovasi untuk memberikan produk sesuai dengan selera muda-mudi</p>
            <a href="home.php" class="btn text-light">Learn More<i class="bi bi-arrow-right-short"></i></a>
        </div>
    </div>
    <!-- akhir jumbotron -->























    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>