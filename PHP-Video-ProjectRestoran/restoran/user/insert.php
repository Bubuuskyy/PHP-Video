<h3>Insert User</h3>
<div>
    <form action="" method="post" class="form-group">
        <div class="form=group w-50 mt-1">
            <label for="">Nama User</label>
            <input type="text" name="user" required placeholder="Isi User" class="form-control mt-1">
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
        <div class="form=group w-50 mt-3">
            <label for="">Level</label><br>
            <select name="level" id="" class="mt-1">

            <option value="admin">Admin</option>
            <option value="koki">Koki</option>
            <option value="kasir">Kasir</option>

            </select>
        </div>
        <div>
            <input type="submit" name="simpan" value="Simpan"class="btn btn-primary mt-5">
        </div>
    </form>
</div>

<?php 

    if (isset($_POST['simpan'])) {
        $user=$_POST['user'];
        $email=$_POST['email'];
        $password= hash('sha256',$_POST['password']);
        $konfirmasi= hash('sha256',$_POST['konfirmasi']);
        $level=$_POST['level'];

        if ($password === $konfirmasi) {
            $sql= "INSERT INTO tbluser VALUES('','$user','$email','$password','$level',1)";
            $db->runSQL($sql);
            header("location:?f=user&m=select");
        }else {
            echo "<h2>Password Tidak Sama</h2>";
        }
        
    }

?>