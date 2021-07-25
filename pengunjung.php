<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UAS PWEB</title>
        <!-- Favicon-->
        <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">UAS PWEB</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Beranda</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="portopolio.php">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="about.php">About</a></li>
                        <div class="dropdown">
                            <span >Kontak</span>
                            <div class="dropdown-content">
                            <a class="active" href="contact.php">Hubungi Saya</a>
                            <a href="">Pengunjung</a>
                            </div>
                        </div>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br><br><br><br>
        <div class="konten">
            <div class="boxx-1">
                <table>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Pesan</th>
                    </tr>
                    <?php
                    $query = mysqli_query($conn, "select * from kontak");
                    $i = 1;
                    while($row = mysqli_fetch_array($query)){
                    
                    ?>
                    <tr id="tr<?=$i?>">
                        <td>
                            <?=$i?>
                        </td>
                        <td>
                            <?=$row['nama']?>
                        </td>
                        <td>
                            <?=$row['email']?>
                        </td>
                        <td>
                            <?=$row['notel']?>
                        </td>
                        <td>
                            <?=$row['pesan']?>
                        </td>
                    </tr>
                    <?php 
                        $i++;    }
                    ?>
                </table>
            </div>
        </div>
</body>
<script>
    var n = <?=$i?>;
    <?php $x = 1;
    ?>
    for(i = 1; i<=n; i++){
        if(i%2==0){
            document.getElementById('tr<?php echo $x; ?> ').style.backgroundColor = "#e5e5e5";
        }
        <?php $x++; ?>
    }
</script>
</html>