<?php include("inc_header.php")?>
<?php 
if(isset($_SESSION['members_email']) != ''){ //sudah dalam keadaan login
    header("location:halaman.php");
    exit();
}
?>
<h3>Pendaftaran</h3>
<?php 
$email          = "";
$nama_lengkap   = "";
$err            = "";
$sukses         = "";

if(isset($_POST['simpan'])){
    $email                  = $_POST['email'];
    $nama_lengkap           = $_POST['nama_lengkap'];
    $password               = $_POST['password'];
    $konfirmasi_password    = $_POST['konfirmasi_password'];

    if($email == '' or $nama_lengkap == '' or $konfirmasi_password =='' or $password == ''){
        $err .= "<li>Silakan masukkan semua isian.</li>";
    }

    //cek di bagian db, apakah email sudah ada atau belum
    if (!empty($email)) {
        // Validate email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Check if the email already exists in the database
            $sql1 = "SELECT email FROM members WHERE email = ?";
            
            // Use prepared statement to prevent SQL injection
            $stmt = mysqli_prepare($koneksi, $sql1);
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            
            // Store the result
            mysqli_stmt_store_result($stmt);
            
            // Check the number of rows returned
            $n1 = mysqli_stmt_num_rows($stmt);
            
            // Close the statement
            mysqli_stmt_close($stmt);
    
            if ($n1 > 0) {
                $err .= "<li>Email yang kamu masukkan sudah terdaftar.</li>";
            }
        } else {
            $err .= "<li>Email yang kamu masukkan tidak valid.</li>";
        }
    } else {
        $err .= "<li>Email tidak boleh kosong.</li>";
    }
    

    //cek kesesuaian password & konfirmasi password
    if($password != $konfirmasi_password){
        $err .= "<li>Password dan Konfirmasi Password tidak sesuai.</li>";
    }
    if(strlen($password) < 6){
        $err .= "<li>Panjang karakter yang diizinkan untuk password paling tidak 6 karakter.</li>";
    }

    if(empty($err)){
        $status             = (rand(0,1000));
        $judul_email        = "Halaman Konfirmasi Pendaftaran";
        $isi_email          = "Akun yang kamu miliki dengan email <b>$email</b> telah siap digunakan.<br/>";
        $isi_email          .= "Sebelumnya silakan melakukan aktifasi email di link di bawah ini:<br/>";
        $isi_email          .= url_dasar()."/verifikasi.php?email=$email&kode=$status";

        kirim_email($email,$nama_lengkap,$judul_email,$isi_email);

        $sql1       = "insert into members(email,nama_lengkap,password,status) values ('$email','$nama_lengkap',md5($password),'$status')";
        $q1         = mysqli_query($koneksi,$sql1);
        if($q1){
            $sukses = "Proses Berhasil. Silakan cek email kamu untuk verifikasi.";
        }

        
    }

}
?>
<?php if($err) {echo "<div class='error'><ul>$err</ul></div>";} ?>
<?php if($sukses) {echo "<div class='sukses'>$sukses</div>";} ?>

<form action="" method="POST">
    <table>
        <tr>
            <td class="label">Email</td>
            <td>
                <input type="text" name="email" class="input" placeholder="Masukkan Email Anda" value="<?php echo $email?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Nama Lengkap</td>
            <td>
                <input type="text" name="nama_lengkap" class="input" placeholder="Masukkan Nama Lengkap Anda" value="<?php echo $nama_lengkap?>"/>
            </td>
        </tr>
        <tr>
            <td class="label">Password</td>
            <td>
                <input type="password" name="password" placeholder="Masukkan Password Anda" class="input" />
            </td>
        </tr>
        <tr>
            <td class="label">Konfirmasi Password</td>
            <td>
                <input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password Anda" class="input" />
                <br/>
                Sudah punya akun? Silakan <a href='<?php echo url_dasar()?>/login.php'>login</a>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="simpan" class="tbl-biru"/>
            </td>
        </tr>
    </table>
</form>

<?php include("inc_footer.php")?>