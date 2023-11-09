<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($con, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
if ($cek > 0){
    echo "<meta http-equiv=refresh content=0;URL='/apotek/pasien/'>";;
} else {
    echo "<meta http-equiv=refresh content=0;URL='index.php'>";
}
?>