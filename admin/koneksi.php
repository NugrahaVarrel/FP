<?php
    $koneksi = mysqli_connect("localhost","root","","baby_needs2");

    if(mysqli_connect_errno()){
    	echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>