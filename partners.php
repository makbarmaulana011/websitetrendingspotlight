<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
//http://localhost/website-company-profile/halaman.php/8/tetap-sehat-tetap-semangat
//print_r($_SERVER);
$id = dapatkan_id();

$sql1   = "select * from partners where id = '$id'";
$q1     = mysqli_query($koneksi, $sql1);
$n1     = mysqli_num_rows($q1);
$r1     = mysqli_fetch_array($q1);

$nama  = $r1['nama'];
?>
<?php include_once("inc_header.php") ?>

<?php
if ($nama == '') {
    echo "<div><p>Maaf data yang kamu maksud tidak ditemukan :(</p></div>";
} else {
?>
    <style>
        .lokasi_foto {
            float: inline-start;
            inline-size: 20%;
            margin-block-start: 20px;
        }
        .lokasi_foto img {
            inline-size: 100%;
            border-radius: 50%;
        }

        .lokasi_deskripsi {
            margin-block-start: 20px;
            float: inline-end;
            inline-size: 75%;
        }
    </style>
    <div class="lokasi_foto">
    <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>" />
    </div>
    <div class="lokasi_deskripsi">
        <h1><?php echo $r1['nama'] ?></h1>
        <?php echo set_isi($r1['isi']) ?>
    </div>
    <br style="clear: both"/>

<?php
}
?>

<?php include_once("inc_footer.php") ?>