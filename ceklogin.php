<?php
    session_start();
    include "koneksi.php";

    $userid = $_POST['username'];
    $pass = $_POST['pass'];
    $op = $_GET['op'];
        
    if($op=="in"){
        $cek = mysql_query("SELECT * FROM admin WHERE idadmin='$userid' AND pass=md5('$pass')");
            if(mysql_num_rows($cek)==1){ //jika berhasil akan bernilai 1
                $c = mysql_fetch_array($cek);
                $_SESSION['idadmin'] = $c['idadmin'];
                $_SESSION['level'] = $c['level'];

            if($c['level']==1){
                header("location:beranda/beranda.php");
            }

            else if($c['level']==2){
            header("location:beranda/beranda.php");
            }
        }

    else{
        echo "<center>LOGIN GAGAL! <br>
        Username atau Password Anda tidak benar.<br>
        Atau account Anda Belum Mendaftar.<br>";
        echo "<a href=index.php><b>ULANGI LAGI</b></a><br>";
        }
    }

    else if($op=="out"){
        unset($_SESSION['idadmin']);
        unset($_SESSION['level']);
        header("location:index.php");
    }
?>