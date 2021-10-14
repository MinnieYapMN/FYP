<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
        <title>GO Uniform</title>
        <link rel="icon"  type="image/png" sizes="16×16" href="pictures/Logo2.png">
        <?php include "headlink.php" ?>
        <style type="text/css">
            body{
                background-color: #fff !important;
            }
            h1 {
                font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
                font-size: 35px;
                text-align: center;
            }

            p {
                font-family: 'Poppins', sans-serif;
                font-size: medium;
                font-weight: 300;
                line-height: 1.7em;
                color: #999;
            }

            /* Slideshow container */
            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .text {font-size: 11px}
            }
            .slideImg{
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">           
            <div id="content">
                <?php include ("component/header.php"); ?>
                <div class="slideshow-container">

                    <div class="mySlides fade"  style="height:520px;">
                        <div class="numbertext">1 / 3</div>
                        <img class="d-block w-100 slideImg" src="pictures/slide1.jpg"  height=520 style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img class="d-block w-100 slideImg" src="pictures/slide2.jpg" height=520 style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img class="d-block w-100 slideImg" src="pictures/slide3.jpg" height=520 style="width:100%">
                    </div>

                </div>
                <br>

                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>

                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        setTimeout(showSlides, 5000); // Change image every 5 seconds
                    }
                </script>

                <div id="Festival">            
                    <br>
                    <br>
                    <form>

                        <h1>"People in uniform always look so great."</h>
                            <p>
                                <span class="auto-style1">
                                    <a href="productPage.php?category_id=8"">&nbsp;More information...</a> </p>
                            </span>
                            <img class="img-fluid" src="pictures/hp.jpg" alt="Responsive image">
                            <br>
                            </div>
                            <?php include "component/footer.php"; ?>
     </body>
  </html>


