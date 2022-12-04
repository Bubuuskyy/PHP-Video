<?php 

    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $sql="SELECT * FROM tblkategori WHERE idkategori=$id";
        $row=$db->getITEM($sql);
    }

?>
<h3>Update Kategori</h3>
<div>
    <form action="" method="post" class="form-group">
        <div class="form=group w-50">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" required value="<?php echo $row['kategori']?>" class="form-control">
        </div>
        <div>
            <input type="submit" name="simpan" value="Simpan"class="btn btn-primary">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $kategori=$_POST['kategori'];
        $sql= "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id";
        
        $db->runSQL($sql);
        header("location:?f=kategori&m=select");
    }

?>