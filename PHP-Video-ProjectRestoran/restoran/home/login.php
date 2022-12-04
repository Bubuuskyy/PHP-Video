<div class="row" style="margin-right:110px;">
            <div class="col-4 mx-auto mt-4">

            <div class="form-group mt-3">
            <form action="" method="post">
                <div>
                    <h3>LOGIN PELANGGAN</h3>
                </div>
            <div class="form=group mt-3">
            <label for="">Email :</label>
            <input type="email" name="email"class="form-control mt-3">
            </div>

            <div class="form-group">
            <form action="" method="post">
            <div class="form=group mt-3">
            <label for="">Password :</label>
            <input type="password" name="password"class="form-control mt-3">
            </div>

            <div>
            <input type="submit" name="login" value="Login"class="btn btn-primary mt-3" style="margin-left:100px;">
            </div>
            </form>
            </div>

            </div>
        </div>
</div>
        <?php 

if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";

    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
        echo "<h3 style='margin-left:260px; margin-top:1.5cm;'>Email atau Password Salah</h3>";
    }else {
        $sql="SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif=1";
        $row=$db->getITEM($sql);

        $_SESSION['pelanggan']=$row['email'];
        $_SESSION['idpelanggan']=$row['idpelanggan'];
        
        header("location:index.php");
    }
}

?>