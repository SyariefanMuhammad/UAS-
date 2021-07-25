<?php
session_start();
//Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","uas");


if(isset($_POST['subContact'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $notel = $_POST['notel'];
    $pesan = $_POST['pesan'];

    $addtomasuk = mysqli_query($conn, "INSERT INTO kontak (nama, email, notel, pesan) values('$nama','$email','$notel','$pesan')");
    if($addtomasuk){
        header('location:contact.php');
    }
}
?>