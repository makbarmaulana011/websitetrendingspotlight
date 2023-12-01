</div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('1','judul')?></h3>
                    <?php echo ambil_isi_info('1','isi')?>
                </div>
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('2','judul')?></h3>
                    <?php echo ambil_isi_info('2','isi')?>
                </div>
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('3','judul')?></h3>
                    <?php echo ambil_isi_info('3','isi')?>
                </div>
                <div class="footer-section">
                    <h3><?php echo ambil_isi_info('4','judul')?></h3>
                    <?php echo ambil_isi_info('4','isi')?>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2023. <b>TrendingSpotlight.</b> All Rights Reserved.
        </div>
    </div>
        <style>
            * {
    text-decoration: none;
    margin: 0px;
    padding: 0px;
}

body {
    margin: 0px;
    padding: 0px;
    font-family: 'Open Sans',sans-serif;
    background-color: whitesmoke;
}

.wrapper {
    inline-size: 1100px;
    margin: auto;
    position: relative;
}

.logo a {
    font-size: 50px;
    font-weight: 800;
    float: inline-start;
    font-family: courier;
    color: #364f6b;
}

.menu {
    float: inline-end;
}

nav {
    inline-size: 100%;
    margin: auto;
    display: flex;
    line-height: 80px;
    position: sticky;
    position: -webkit-sticky; 
    inset-block-start: 0;
    background: #FFFFFF;
    z-index: 1;
    border-block-end:1px solid #364f6b;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

nav ul li {
    float: inline-start;
}

nav ul li a {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 0px 16px 0px 16px;
    text-decoration: none;
}

nav ul li a:hover {
    text-decoration: underline;
}

section {
    margin: auto;
    display: flex;
    margin-block-end: 50px;
}

.kolom {
    margin-block-start: 50px;
    margin-block-end: 50px;
}

.kolom .deskripsi {
    font-size: 20px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: #364f6b;
}

h2 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 45px;
    margin-block-end: 20px;
    color: #364f6b;
    inline-size: 100%;
    line-height: 50px;
}

a.tbl-biru {
    background: #3f72af;
    border-radius: 20px;
    margin-block-start: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-biru:hover {
    background: #fc5185;
    text-decoration: none;
}

a.tbl-pink {
    background: #fc5185;
    border-radius: 20px;
    margin-block-start: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-pink:hover {
    background: #3f72af;
    text-decoration: none;
}

p {
    margin: 10px 0px 10px 0px;
    padding: 10px 0px 10px 0px;
}

.tengah {
    text-align: center;
    inline-size: 100%;
}

.tutor-list {
    inline-size: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}

.kartu-tutor {
    inline-size: 20%;
    margin: 0 auto;
}

.kartu-tutor img {
    inline-size: 80%;
    border-radius: 50%;
}

.kartu-tutor p {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 25px;
    text-align: center;
    color: #364f6b;
}

.partner-list {
    inline-size: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
}

.kartu-partner {
    inline-size: 20%;
    margin: 0 auto;
}

.kartu-partner img {
    inline-size: 150px;
    border-radius: 50%;
}

#contact {
    background: #dedede;
    padding:50px 0px 50px 0px;
}

.footer {
    inline-size: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
}

.footer-section {
    inline-size: 20%;
    margin: 0 auto;
}

h3 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 30px;
    margin-block-end: 20px;
    color: #364f6b;
    inline-size: 100%;
    line-height: 50px;
}

#copyright {
    text-align: center;
    inline-size: 100%;
    padding: 50px 0px 50px 0px;
    margin-block-start: 50px;
}

@media screen and (max-inline-size: 991.98px) {
    .wrapper {
        inline-size: 90%;
    }

    .logo a {
        display: block;
        inline-size: 100%;
        text-align: center;
    }

    nav .menu {
        inline-size: 100%;
        margin: 0;
    }

    nav .menu ul {
        text-align: center;
        margin: auto;
        line-height: 60px;
    }

    nav .menu ul li {
        display: inline-block;
        float: none;
    }

    section {
        display: block;
    }

    section img {
        display: block;
        inline-size: 100%;
        block-size: auto;
    }

    .kartu-tutor {
        inline-size: 50%;
    }

    .kartu-partner {
        inline-size: 50%;
    }
}

/* tambahan dari pendaftaran dan verifikasi */
table {
    inline-size: 600px;
}

@media screen and (max-inline-size: 700px){
    table {
        inline-size: 90%;
    }
}
table td {
    padding: 5px;
}
td.label { inline-size: 40%;}
.input {
    border: 1px solid #CCCCCC;
    background-color: #dfdfdf;
    border-radius: 5px;
    padding: 10px;
    inline-size: 100%;
}
input.tbl-biru {
    border: none;
    background-color: #3f72af;
    border-radius: 20px;
    margin-block-start: 20px;
    padding: 15px 20px 15px 20px;
    color:#FFFFFF;
    cursor:pointer;
    font-weight: bold;
}
input.tbl-biru:hover {
    background-color: #fc5185;
    text-decoration: none;
}
.error {
    padding: 20px;
    background-color: #f44336;
    color: #FFFFFF;
    margin-block-end: 15px;
}

.sukses {
    padding: 20px;
    background-color: #2196F3;
    color: #FFFFFF;
    margin-block-end: 15px;
}

.error ul { margin-inline-start: 10px; }
        </style>
</body>
</html>