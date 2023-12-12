<?php

$title = 'Lowongan Kerja';
include 'layout/header.php';
?>

    <style type="text/css">
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
            background-color: #cc0;
        }
        
        .banner h1 {
            color: rgb(6, 7, 7);
            z-index: 1;
            padding: 20px 25px;
            border: 5px solid rgb(6, 7, 7);
        }
        section {
            margin: 75px 200px;
        }

        section h2 {
            text-align: center;
            color: rgb(15, 15, 16);
            margin-bottom: 20px;
        }

        .about p {
            color:#080808;
            word-spacing: 2px;
            line-height: 25px;
        }
    </style>
    </head>
    <body>
        <section class="banner">
            <center><h1>Lowongan Kerja</h1></center>
        </section>

        <section class="about">
            <div class ="container">
                <h2>Qualifikasi</h2>
                <p>1. Berjenis kelamin pria atau laki laki.</p>
                <p>2. Lulusan min D3 Akutansi.</p>
                <p>3. Memiliki Ijazaha dan Transkrip nilai asli.</p>
                <p>4. Berusia max 27 tahun.</p>
                <p>5. Mewujudkan sumber daya pendidik dan kependidikan yang profesional.</p>
                <p>6. Membawa Surat Lmaran, CV, dan Pas Foto.</p>
                <p>7. Fotocopy KTP, SIM, KK, Akte Kelahiran.</p>
                <p>8. Mampu bekerja sama dengan tim.</p>
                <p>9. Memiliki sifat jujur, teliti, inisiatif, dan cekatan.</p>
                <br><br>
                <h2>Fasilitas</h2>
                <p>1. BPJS KESEHATAN.</p>
                <p>2. BPJS TENAGA KERJA.</p>
                <p>3. Gaji UMK.</p>
                <br><br>
            </div>
            <div class ="container">
                <h2>APABILA TERTARIK, ANDA BISA MENGANTARKAN LAMARAN ANDA KE:</h2>
                <p style="text-align: center">Jl. Jamin Ginting No 14 Simpang Pos Padang Bulan, Medan, Sumatera Utara</p>
            </div>
        </section>

<?php

include 'layout/footer.php';

?>