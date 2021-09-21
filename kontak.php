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
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="foto/bh2.png">

    <title>Bajirah Huis</title>
    <style>
        .col-lg-9 {
            margin-top: 30px;
        }

        .row {
            margin-top: 70px;
        }

        .card {
            animation: re 1s forwards;
            margin-bottom: 450px;
        }

        @keyframes re {
            from {
                left: -500px;
            }

            to {
                left: 0px;
            }
        }

        .card-body {
            font-size: 14px;
        }

        @media (min-width: 992px) {
            .row {
                margin-top: 150px;
            }

            .card-body {
                font-size: 20;
            }
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container col-lg-10 col-sm-12">
            <a class="navbar-brand" href="#"><img src="foto/bh2.png" alt="" class="s"> Bajirah Huis
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="minuman.php">Minuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary btn-sm rounded-pill" href="https://gofood.co.id/bahasa/tasikmalaya/restaurant/bajirah-huis-218de9c9-346f-4a6b-b38b-9b484c540ca8"><i class="bi bi-cart"></i> pesan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- kontak -->
    <section class="content">
        <div class="row d-flex justify-content-center">
            <?php
            $no = 1;
            $data = mysqli_query($koneksi, "select * from kontak");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <div class="card-title">
                                <div class="card-tool">
                                    <td>
                                        <div style="color: white"><?php echo $d['nama']; ?></div>
                                    </td>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="height: 200px;">
                            <div class="d-flex align-items-center">0<?php echo $d['no_hp']; ?></div>
                            <div class="d-flex align-items-center"><?php echo $d['ig']; ?></div>
                            <div class="d-flex align-items-center"><?php echo $d['alamat']; ?></div>
                        </div>
                    </div>
                </div>


            <?php
            }
            ?>
        </div>
    </section>
    <!-- akhir kontak -->

    <!-- copyright -->
    <footer class="main-footer bg-dark text-light">
        <strong>Copyright &copy; 2021 <a href="#">Bajirah Huis</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.1
        </div>
    </footer>
    <!-- akhir -->

























    <!-- akhir menu minuman -->
    <!-- akhir container -->

    <!-- Optional JavaScript; choose one of the two! -->

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