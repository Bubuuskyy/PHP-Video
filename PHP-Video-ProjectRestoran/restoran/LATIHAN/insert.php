<form action="" method="post">
    Kategori :
    <input type="text" name="kategori">
    <br>
    <input type="submit" name="simpan" value="Simpan">
</form>


<?php 

    require_once "../function.php";

    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        
        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
    
        $result = mysqli_query($koneksi, $sql);

        header ("locatio:http://localhost/PHP-Putih-18/restoran/kategori/select.php");
    }

    
?>