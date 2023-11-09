<html>
<head>
    <title>Poli</title>
</head>
 
<body>
    <a href="index.php">Kembali</a>
    <br/><br/>
    
    <!-- input data Dokter -->
    <form action="inputpoli.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr> 
                <td>Poli</td>
                <td><input type="text" name="poli"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
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
        $poli = $_POST['poli'];
        $deskripsi = $_POST['deskripsi'];
        
        // include database connection file
        include_once("koneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($con, "INSERT INTO poli(id,poli,deskripsi) VALUES('$id','$poli','$deskripsi')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>