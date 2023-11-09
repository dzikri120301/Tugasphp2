<html>
<head>
    <title>Pasien</title>
</head>
 
<body>
    <a href="index.php">Kembali</a>
    <br/><br/>
    
    <!-- input data pasien -->
    <form action="inputpasien.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id_pasien"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_pasien"></td>
            </tr>
            <tr> 
                <td>Phone</td>
                <td><input type="text" name="phone"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_pasien = $_POST['id_pasien'];
        $nama_pasien = $_POST['nama_pasien'];
        $alamat = $_POST['alamat'];
        $phone = $_POST['phone'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($con, "INSERT INTO pasien(id_pasien,nama_pasien,alamat,phone) VALUES('$id_pasien','$nama_pasien','$alamat','$phone')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>