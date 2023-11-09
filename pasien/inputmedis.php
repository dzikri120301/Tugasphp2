<html>
<head>
    <title>Medis</title>
</head>
 
<body>
    <a href="index.php">Kembali</a>
    <br/><br/>

    <!-- input data pasien -->
    <form action="inputmedis.php" method="post">
        <table width="25%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
             <td>Pasien</td>
                <td><select name="id_pasien" class="form-control" required>
                    <option>- pilih -</option>
                    <?php 
                    include_once("koneksi.php");
                    $sql_pasien = mysqli_query($con, "SELECT * FROM pasien") or die
                        (mysqli_error($con));
                    while($data_pasien = mysqli_fetch_array($sql_pasien)) {
                        echo "<option value=$data_pasien[id_pasien]>$data_pasien[nama_pasien]</option>";
                    } ?>
                </select>
                </td>
            </tr>
            <tr>
             <td>Dokter</td>
                <td><select name="id_dokter" class="form-control" required>
                    <option>- pilih -</option>
                    <?php 
                    include_once("koneksi.php");
                    $sql_dokter = mysqli_query($con, "SELECT * FROM dokter") or die
                        (mysqli_error($con));
                    while($data_dokter = mysqli_fetch_array($sql_dokter)) {
                        echo "<option value=$data_dokter[id_dokter]>$data_dokter[nama_dokter]</option>";
                    } ?>
                </select>
                </td>
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
             <td>Diagnosis</td>
                <td><input type="text" name="diagnosis"></td>
            </tr>
            <tr> 
                <td>Resep</td>
                <td><input type="text" name="resep"></td>
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
        $id_pasien = $_POST['id_pasien'];
        $id_dokter = $_POST['id_dokter'];
        $id_poli = $_POST['id_poli'];
        $diagnosis = $_POST['diagnosis'];
        $resep = $_POST['resep'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($con, "INSERT INTO medis(id,id_pasien,id_dokter,id_poli,diagnosis,resep) VALUES('$id','$id_pasien','$id_dokter','$id_poli','$diagnosis','$resep')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>