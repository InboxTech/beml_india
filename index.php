<?php 
    require_once('header.php');
    $header = new Header();
    $header->includeHeader('Index Page', '');
?>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">  
            <img class="d-block w-100" src="public/images/building.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="public/images/adv_img.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="public/images/building.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">

    <div class="image-container">
        <img src="public/images/building.jpg" alt="image">
        <div class="overlay-text">
            <lable>BEML</label></br>
            <lable>WE PROVIDES DEFENCE $ AEROSPACE</label></br>
            <lable>SINCE 1964</label>
        </div>
    </div>

    </div>

    <script src="public/js/jquery-3.7.1.min.js"></script>
    <script src="public/bootstrap/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>
