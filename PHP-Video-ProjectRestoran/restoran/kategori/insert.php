<h3>Insert Kategori</h3>
<div class="form-group">
    <form action="" method="post">
        <div class="form=group w-50">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" required placeholder="Isi Kategori" class="form-control mt-3">
        </div>
        <div>
            <input type="submit" name="simpan" value="Simpan"class="btn btn-primary mt-3">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $kategori=$_POST['kategori'];
        $sql= "INSERT INTO tblkategori VALUES('','$kategori')";
        
        $db->runSQL($sql);
        header("location:?f=kategori&m=select");
    }

?>