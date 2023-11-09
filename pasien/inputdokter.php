<html>
<head>
    <title>Dokter</title>
</head>
 
<body>
    <a href="index.php">Kembali</a>
    <br/><br/>
    
    <!-- input data Dokter -->
    <form action="inputdokter.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama_dokter"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td>Poli</td>
                <td><select name="id_poli" class="form-control" required>
                    <option>- pilih -</option>
                    <?php 
                    include_once("koneksi.php");
                    $sql_poli = mysqli_query($con, "SELECT * FROM poli") or die
                        (mysqli_error($con));
                    while($data_poli = mysqli_fetch_array($sql_poli)) {
                        echo "<option value=$data_poli[id_poli]>$data_poli[poli]</option>";
                    } ?>
                </select>
                </td>
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
        $id = $_POST['id'];
        $nama_dokter = $_POST['nama_dokter'];
        $email = $_POST['email'];
        $id_poli = $_POST['id_poli'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($con, "INSERT INTO dokter(id,nama_dokter,email,id_poli) VALUES('$id','$nama_dokter','$email','$id_poli')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>