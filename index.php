<?php include_once("inc_header.php") ?>
<!-- untuk home -->
<section id="home">
    <img src="<?php echo ambil_gambar('8') ?>" />
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('8') ?></p>
        <h2><?php echo ambil_judul('8') ?></h2>
        <?php echo maximum_kata(ambil_isi('8'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('8') ?>" class="tbl-pink">More Information</a></p>
    </div>
</section>

<!-- untuk courses -->
<section id="trending">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('9') ?></p>
        <h2><?php echo ambil_judul('9') ?></h2>
        <?php echo maximum_kata(ambil_isi('9'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('9') ?>" class="tbl-biru">More Information</a></p>
    </div>
    <img src="<?php echo ambil_gambar('9') ?>" />
</section>

<!-- untuk tutors -->
<section id="technology">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">News</p>
            <h2>Technology</h2>
            <p>The latest Technology Information News can be viewed in full below!</p>
        </div>

        <div class="tutor-list">
            <?php
            $sql1       = "select * from tutors order by id asc";
            $q1         = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_array($q1)) {
            ?>
                <div class="kartu-tutor">
                    <a href="<?php echo buat_link_tutors($r1['id']) ?>">
                        <img src="<?php echo url_dasar() . "/gambar/" . tutors_foto($r1['id']) ?>" />
                        <p><?php echo $r1['nama'] ?></p>
                    </a>
                </div>
            <?php
            }
            ?>


        </div>
    </div>
</section>

<!-- untuk partners -->
<section id="partners">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Our Top Media Partners</p>
            <h2>Media Partners</h2>
            <p>The Media Partners Technology Information News can be viewed in full below!</p>
        </div>

        <div class="partner-list">
            <?php
            $sql1   = "select * from partners order by id asc";
            $q1     = mysqli_query($koneksi, $sql1);
            while ($r1 = mysqli_fetch_assoc($q1)) {
            ?>
                <div class="kartu-partner">
                    <a href="<?php echo buat_link_partners($r1['id'])?>">
                    <img src="<?php echo url_dasar()."/gambar/".partners_foto($r1['id'])?>"/>
                    </a>
                </div>
            <?php
            }
            ?>
            
        </div>
    </div>
</section>
<?php include_once("inc_footer.php") ?>