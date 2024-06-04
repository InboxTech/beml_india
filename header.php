<?php
class Header {
    public function includeHeader($title, $parentPath) {
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$title.'</title>
                <link rel="stylesheet" href="'.$parentPath.'public/css/style.css">
                <link rel="stylesheet" href="'.$parentPath.'public/bootstrap/bootstrap.min.css">
                <link rel="stylesheet" href="'.$parentPath.'public/fontawesome/css/all.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
            </head>
            <body>  
                <div class="fist-row"> 
                    <div clas="heading-epfo"><span> EPFO LETTER </span> CIN:L35202KA1964GOI001530 </div> 
                    <div class="fist-row-items"> 
                        <ul> 
                            <li><a href="#"> </a>Skip to Main Content |</li>
                            <li><a href="#"> </a>Accessibility Option |</li>
                            <li><a href="#"> </a>Screen Reader |</li>
                            <li><a href="#"> </a>A- |</li>
                            <li><a href="#"> </a>A+ |</li>
                            <li><a href="#"> </a>A |</li>
                        </ul>
                    </div>
                </div>

                <div class="second-row">
                    <div class="welcome-heading"> Welcome To <span> BEML Limited </span></div>
                    <div class="second-row-items">
                        <ul>
                            <li><a href="#">RTI <img src="public/images/down_arrow.png"> </a></li>
                            <li><a href="#">CSR</a></li>
                            <li><a href="#">CAREERS</a></li>
                            <li><a href="#">TENDER</a></li>
                            <li><a href="#">HELP DESKTESTMONIALS</a></li>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="#">STOCK:bse|nas</a></li>
                        </ul>
                    </div>
                </div>

                <div class="third-row"> 
                    <div class="logo"> <img src="public/images/logo_beml.png"></div>
                    <div class="prduct-btn"><a href="#"><img src="public/images/brow_btn.png"></a></div>
                    <div class="search-bar"><input type="text" name="search" placeholder="Search Here..."><img src="public/images/search.png"></div>
                    <div class="adv-image"><img src="public/images/adv_img.png"></div>
                    <div class="languages">
                        <label >Language<img src="public/images/down_arrow.png"> </label>
                        <span> <img src="public/images/flag-temp.png"> <b> English </b> </span>
                    </div>
                </div>
            
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <ul class="navbar-nav mainnav">
                            <li class="nav-item"><a href="#"> Home </a></li> 
                            <li class="nav-item"><a href="#"> Corporate <img src="public/images/down_arrow.png"></a></li> 
                            <li class="nav-item"><a href="#"> Business <img src="public/images/down_arrow.png"></a></li> 
                            <li class="nav-item"><a href="#"> Facilities <img src="public/images/down_arrow.png"></a></li> 
                            <li class="nav-item"><a href="#"> Inverter </a></li> 
                            <li class="nav-item"><a href="#"> Suppliers <img src="public/images/down_arrow.png"></a></li> 
                            <li class="nav-item"><a href="#"> Vigilance </a></li> 
                            <li class="nav-item"><a href="#"> Info Desk <img src="public/images/down_arrow.png"></a></li> 
                            <li class="nav-item"><a href="#"> Make In India <img src="public/images/down_arrow.png"></a></li> 
                            <li class="nav-item"><a href="#"> CMDs Massage</a></li> 
                        </ul>
                    </div>
                </nav>
        ';
    }
}
?>
