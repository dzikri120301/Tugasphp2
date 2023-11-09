<?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id = $_POST['id'];
        $id_dokter = $_POST['id_dokter'];
        $id_pasien = $_POST['id_pasien'];
        $id_poli = $_POST['id_poli'];
        $diagnosis = $_POST['diagnosis'];
        $resep = $_POST['resep'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($host, "INSERT INTO medis(id,id_dokter,id_pasien,id_poli,diagnosis,resep) VALUES('$id','$id_dokter','$id_pasien','$id_poli','diagnosis','resep')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>