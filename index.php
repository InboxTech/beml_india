<?php
require_once('header.php');
$header = new Header();
$header->includeHeader('Index Page', '');
?>
<div class="container-fluid">
    <!-- this is carousel page 1 -->
    <div class="main-image">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-pagination"></div>
                    <img src="public/images/building.jpg" alt="">
                    <!-- img text -->
                    <div class="overlay-text container-fluid">
                        <label><img src="public/images/rpund 2.png" alt=""></label><br>
                        <label>
                            <h1>BEML</h1>
                        </label></br>
                        <label>WE PROVIDES <span class="title-tag"> DEFENCE & AEROSPACE</span></label></br>
                        <label>SINCE 1964</label>
                        <div class="container-fluid">
                            <div class="line"></div>
                            <div class="row">
                                <div class="explor-btn">
                                    <button class="btn btn-md btn-outline-light">
                                        Explore Our Projects
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide"><img src="public/images/building.jpg" alt="No Preview"></div>

            </div>

            <div class="line"></div>

            <div class="image-items">
            </div>

        </div>
    </div>
    <!-- page 2 -->
    <div class="page-2">
        <div class="row">
            <h3>- Who We Are</h3>

            <div class="col-lg-6">
                <div class="image-container">
                    <div class="card-1">
                        <img src="public/images/Vector.svg" alt="" class="img-fluid">
                        <div class="num">500+</div>
                        Completed Projects
                    </div>
                    <div class="card-2">
                        <img src="public/images/trophy.svg" alt="" class="img-fluid">
                        <div class="num">50+</div>
                        Awards Winning
                    </div>
                    <img src="public/images/tank.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="pb-2">BEML LIMITED</h1>
                <h4 class="pb-2">Building Aatmanirbhar Bharat</h4>
                <div data-bs-spy="scroll" data-bs-smooth-scroll="true" class="scrollspy-example-2" tabindex="0">
                    <p>BEML Limited, a 'Schedule 'A' Company under Ministry of Defence, Govt. Of India, plays a pivotal role and serves India's core sectors like Defence, Rail, Power, Mining and Infrastructure.</p>
                    <p>The Company started with a modest turnover of Rs. 5 Crs. during 1965 and today, thanks to its diverse business portfolio, the company has been able to achieve a turnover of more than Rs. 4,300 Crs.</p>
                    <p>BEML Limited, formerly Bharat Earth Movers Limited, is an Indian public sector undertaking which manufactures a variety of heavy equipment.</p>
                    <button class="btn btn-outline-danger">Explore Our Projects</button>
                </div>
            </div>
        </div>
    </div>
    <!-- page 3 -->
    <div class="page-3">
        <div class="d-flex justify-content-between">
            <h3 class="col">- Business Verticals</h3>
            <h1 class="col">BEML OFFERS QUALITY PRODUCTS</h1>
        </div>
        <div class="d-flex">
            <div class="item">
                <img src="public/images/defence.png" alt="Defence & Aerospace">
                <span>DEFENCE & AEROSPACE</span>
                <button class="button"><img src="public/images/up-right-arrow.svg" alt=""></button>
            </div>
            <div class="item">
                <img src="public/images/mining.png" alt="Mining">
                <span>DEFENCE & AEROSPACE</span>
                <button class="button"><img src="public/images/up-right-arrow.svg" alt=""></button>
            </div>
            <div class="item">
                <img src="public/images/rail.png" alt="Rail">
                <span>DEFENCE & AEROSPACE</span>
                <button class="button"><img src="public/images/up-right-arrow.svg" alt=""></button>
            </div>
        </div>
    </div>
    <!-- page 4 -->
    <div class="page-4">
        <div class="row">
            <div class="col-lg-3 pe-4">
                <span class="">HIGH MOBILITY VEHICLES</span>
                <div class="line2"></div>
                <h1>8500</h1>
            </div>
            <div class="col-lg-3 pe-4">
                <span>CONSTRUCTION EQUIPMENT</span>
                <div class="line2"></div>
                <h1>32500</h1>
            </div>
            <div class="col-lg-3 pe-4">
                <span>RAIL COACHES</span>
                <div class="line2"></div>
                <h1>8500</h1>
            </div>
            <div class="col-lg-3">
                <span>ENGINES (76 HP - 700 HP)</span>
                <div class="line2"></div>
                <h1>27500</h1>
            </div>
        </div>
    </div>
    <!-- page 5 -->
    <div class="page-5">
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="public/js/slider.js"></script>

<?php include_once ('footer.php');?>

