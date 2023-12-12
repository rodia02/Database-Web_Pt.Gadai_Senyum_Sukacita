<?php

$title = 'PT. GADAI SENYUM SUKACITA';
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

        
        /* Slideshow container */
        .content-slide {
            max-width: 1200px;
            max-height: 1000px;
            position: relative;
            margin: auto;
        }
        
        .imgslide {
            display: none;
        }
        
        img {
            vertical-align: middle;
            width: 100%;
            height: auto;
        }
        
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            color: rgb(255, 254, 224);
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.8); 
        }
        
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        
        .pre:hover,
        .next:hover {
            background-color: rgba(255, 255, 255, 0.8);
            color: rgb(0, 0, 0);
        }
        
        .text {
            color: #fafafa;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        
        .content-slide .numberslide {
            color: #ffffff;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        
        /* resposive */
        
        @media screen and (max-width: 800px) {
        
            .content-slide {
                padding: 8px 50px 12px 50px;
            }
        
            .next {
                right: 50px;
                border-radius: 3px 0 0 3px;
            }
            
        }
        
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 5s;
            animation-name: fade;
            animation-duration: 5s;
        }
        
        @-webkit-keyframes fade {
            from {
                opacity: .4;
            }
        
            to {
                opacity: 1;
            }
        }
        
        @keyframes fade {
            from {
                opacity: .6;
            }    
            to {
                opacity: 1;
            }
        }
        
        .container .page {
            text-align: center;
            padding-top: 20px;
        }
        
        .page .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            display: inline-block;
            transition: background-color 0.6s ease;
            border-radius: 50%;
        }
        
        .page .active,
        .page .dot:hover {
            background-color: #ce0000;
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
        <center><h1>PT GADAI SENYUM SUKACITA</h1></center>
    </section>

    <div class="container">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide">1 / 3</div>
                <img src="img/gadai.jpg" alt="">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">2 / 3</div>
                <img src="img/gadai1.jpg" alt="">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="img/gadai2.png" alt="">
            </div>

            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
        }
    </script>

    <section class="about">
        <div class ="container">
            <h2 style="text-align: center">GADAIKAN BARANG ANDA DENGAN AMAN</h2>
            <p style="text-align: center" >PT Gadai Senyum Sukacita adalah perusahaan Gadai Swasta yang tarletak dikota Medan, Sudah memperoleh izin dan diawasi oleh Otoritas Jasa Keuangan (OJK) dan juga terdaftar sebagai anggota asosiasi PPGI, yang melayani jasa simpan pinjam (gadai).</p>
        </div>

    </section>
    

<?php

include 'layout/footer.php';

?>