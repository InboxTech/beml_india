<?php 
    require_once('header.php');
    $header = new Header();
    $header->includeHeader('Index Page', '');
?>
  <div class="container-fluid">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="public/images/building.jpg" alt="">
            <div class="overlay-text">
                <lable class="title-tag"><h1>BEML</h1></lable></br>
                <lable>WE PROVIDES DEFENCE $ AEROSPACE</lable></br>
                <lable>SINCE 1964</lable>
            </div>
        </div>
        <div class="swiper-slide"><img src="public/images/building.jpg" alt="No Preview"></div>
    
        </div>
        <div class="swiper-pagination"></div>
        <div class="autoplay-progress">
        <svg viewBox="0 0 48 48">
            <circle cx="24" cy="24" r="20"></circle>
        </svg>
        <span></span>
        </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="public/js/slider.js"></script>

<?php include_once ('footer.php');?>
