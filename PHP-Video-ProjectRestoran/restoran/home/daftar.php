<h3>Registrasi Pelanggan</h3>
<div>
    <form action="" method="post" class="form-group">
        <div class="form=group w-50 mt-4">
            <label for="">Pelanggan</label>
            <input type="text" name="pelanggan" required placeholder="Isi User" class="form-control mt-1">
        </div>
        <div class="form=group w-50 mt-4">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required placeholder="Isi User" class="form-control mt-1">
        </div>
        <div class="form=group w-50 mt-4">
            <label for="">Nomor Telepon</label>
            <input type="text" name="telpon" required placeholder="Isi User" class="form-control mt-1">
        </div>
        <div class="form=group w-50 mt-4">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="Email" class="form-control mt-1">
        </div>
        <div class="form=group w-50 mt-4">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="Password" class="form-control mt-1">
        </div>
        <div class="form=group w-50 mt-4">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="Password" class="form-control mt-1">
        </div>
        <div>
            <input type="submit" name="simpan" value="SignIn"class="btn btn-primary mt-4">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $pelanggan=$_POST['pelanggan'];
        $alamat=$_POST['alamat'];
        $telpon=$_POST['telpon'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $konfirmasi=$_POST['konfirmasi'];

        if ($password === $konfirmasi) {
            $sql= "INSERT INTO tblpelanggan VALUES('','$pelanggan','$alamat','$telpon','$email','$password',1)";
            $db->runSQL($sql);
            header("location:?f=home&m=info");
        }else {
            echo "<h2>Password Tidak Sama</h2>";
        }
        
    }

?>