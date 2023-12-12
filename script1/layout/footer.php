    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        * {
                padding: 0;
                margin: 0;
            }
            body {
                font: 16px/1.6 arial, sans-serif;
            }
            footer {
                position: fixed;
                bottom: 0;
            }
            .footer {
                background-color: #040a18;
                box-sizing: border-box;
                width: 100%;
                text-align: left;
                font: bold 16px sans-serif;
                padding: 50px 50px 60px 50px;
                margin-top: 80px;
            }
            .footer .footer-left,
            .footer .footer-center {
                display: inline-block;
                vertical-align: top;
            }
            @media (max-height:800px) {
                footer {
                    position: static;
                }
                header {
                    padding-top: 40px;
                }
            }
            .footer .footer-center {
                width: 40%;
            }
            .footer h3 {
                color: #f5f5f5;
                margin: 0;
                padding-bottom: 20px;
                font-family: Georgia, 'Time New Roman', Times, serif;
            }
            .footer .footer-copyright {
                color: #8f9296;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
                padding-top: 10%;
            }
            .footer .footer-left {
                width: 50%;
            }
            .footer .footer-left i {
                background-color: #33383b;
                color: #ffffff;
                font-size: 25px;
                width: 38px;
                height: 38px;
                border-radius: 50%;
                text-align: center;
                line-height: 42px;
                margin: 10px 15px;
                vertical-align: middle;
            }
            .footer .footer-left i.fa-envelope {
                font-size: 17px;
                line-height: 38px;
            }
            .footer .footer-left p {
                display: inline-block;
                color: #ffffff;
                vertical-align: middle;
                margin: 0px;
            }
            .footer .footer-left p span {
                display: block;
                font-weight: normal;
                font-size: 14px;
                line-height: 2;
            }
            .footer .footer-left p a {
                color: rgb(22, 255, 177);
                text-decoration: none;
            }
            .footer .footer-media {
                margin-top: 25px;
            }
            .footer .footer-media a {
                display: inline-block;
                width: 50px;
                height: 50px;
                cursor: pointer;
                background-color: #33383b;
                border-radius: 50%;
                font-size: 20px;
                color: #ffffff;
                text-align: center;
                line-height: 50px;
                margin-right: 3px;
                margin-bottom: 5px;
            }
            .footer .footer-media a:hover {
                background-color: rgb(0, 122, 82);
            }
            @media (max-width: 880px) {
                .footer .footer-left,
                .footer .footer-center{
                    display: block;
                    width: 100%;
                    margin-bottom: 40px;
                    text-align: left;
                }
                .footer .footer-left i {
                    margin-left: 0px;
                }
            }
    </style>

</head>
<body>
    <footer class="footer">
        <div class="footer-left">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Indonesia</span> Jl. Jamin Ginting No 14 Sp Pos Padang Bulan, Medan, Sumatera Utara</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 853-6004-8712</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:gadaismile2@gmail.com">gadaismile2@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-center">
            <h3>PT GADAI SENYUM SUKACITA</h3>
            <div class="footer-media">
                <a href="https://www.facebook.com/profile.php?id=100063725869003"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/gadaisenyumsukacita1/?hl=en"><i class="fa fa-instagram"></i></a>
            </div>
            <p class="footer-copyright">&copy; copyright 2022 PT Gadai Senyum Sukacita</p>
        </div>
    </footer>

<?php

include 'script.php';

?>