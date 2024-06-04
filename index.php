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
            <div class="swiper-pagination"></div>

        </div>
    </div>
    <!-- page 2 -->
    <div class="page-2">
        <div class="row">
            <h3>- Who We Are</h3>

            <div class="col-lg-6">
                <div class="image-container">
                    <div class="pop-1">
                        <img src="public/images/Vector.svg" alt="" class="img-fluid">
                        <div class="num">500+</div>
                        Completed Projects
                    </div>
                    <div class="pop-2">
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
                    <a href=""><img src="public/images/button.svg" alt=""></a>
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
    <!-- items 5 -->
    <div class="itmems-5">
        <div class="business-verticals">
            <div class="business-title">
                <h3> - Business Verticals<h3>
            </div>
            <div class="defence-txt">
                <h1>DEFENCE & AEROSPACE</h1>
                <p>Beign India's leading defence equipment manufactures, BEML Limited keeps the indian army and
                    other defence forces abrests with state-of-the-art military equipment
                </p>
            </div>
        </div>
    </div>

    <!-- items 8 -->
    <div class="items-8">
        <div class="top">
            <h3>-360 View</h3>
            <div class="">
                <h1>DEFENCE & AEROSPACE</h1>
                <p>Being India’s leading defence equipment manufacturer, 
                    BEML Limited keeps the Indian Army and other defence forces abreast with 
                    state-of-the-art military equipment.
                </p>
            </div>
        </div>
        <div class="main">
            <img src="public/images/main.png" alt="">
        </div>
        <div class="bottom">
            <div class="col-4">
                <ul>
                    <li class="m-2 my-4"><h5>OPENCAST MINING</h5></li>
                    <li class="m-2"><img src="public/images/o1.png" class="me-2"> BH205E </li>
                    <li class="m-2"><img src="public/images/o2.png" class="me-2"> BE1800D </li>
                    <li class="m-2"><img src="public/images/o3.png" class="me-2"> BE1000-1 </li>

                </ul>
            </div>
            <div class="col-4">
                <ul>
                    <li class="m-2 my-4"><h5>CONSTRUCTION</h5></li>
                    <li class="m-2"><img src="public/images/c1.png" class="me-2"> BG605I </li>
                    <li class="m-2"><img src="public/images/c2.png" class="me-2"> BG405A </li>
                    <li class="m-2"><img src="public/images/c3.png" class="me-2"> BE300LC </li>
                </ul>
            </div>
            <div class="col-4">
                <ul>
                    <li class="m-2 my-4"><h5>UNDERGROUND MINING</h5></li>
                    <li class="m-2"><img src="public/images/u1.png" class="me-2"> Mine Locomotive 12 T </li>
                    <li class="m-2"><img src="public/images/u2.png" class="me-2"> Granby Car 7.5 T </li>
                    <li class="m-2"><img src="public/images/u3.png" class="me-2"> Granby Car 5.4 T </li>
                    
                </ul>
            </div>
        </div>
    </div>


    <!-- items 9 -->
    <div class="items-9">
        <div class="col-5">
            <div>
                <h3>- Meet our Team</h3>
                <h1>Our <br>
                    experienced <br>
                    experts
                </h1>
            </div>
            <div class="card-1">
                <img src="public/images/team1.png" alt="">

                <div class="name-label">
                    <div class="a">
                        <h5>SHRI SHANTANU ROY</h5>
                        <p>Chairman & Managing Director</p>
                    </div>
                    <div class="b">
                        <img src="public/images/group-admin.png" alt="">
                    </div>
                </div>
                <p>Shri Shantanu Roy assumed charge as Chairman & Managing Director at BEML Ltd.,
                    w.e.f. 01.08.2023. Prior to assuming his present position,
                    Shri Shantanu Roy was Director (Mining and Construction Business).
                    He is a graduate in Electrical Engineering from NIT Raipur and an MBA in Financial Management.
                    He is having more than 30 years of extensive experience in the capital goods sectors for Defence,
                    Mining & Construction, Transportation, Transmission, Renewable and large power projects.
                </p>
            </div>
        </div>
        <div class="col-7">
            <div class="card-2">
                <div class="">
                    <img src="public/images/team2.png">
                </div>
                <div class="">
                    <div class="top">
                        <div class="title">
                            <p class=""><small class="text-body-secondary">CEO - FOUNDER</small></p>
                            <h5 class="">Robert Fox</h5>
                        </div>
                        <div class="title-img">
                            <img src="public/images/teams.svg" alt="">
                        </div>
                    </div>
                    <div class="hr"></div>
                    <p class="text">Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa
                        quae Nemo enim ipsam voluptatem quia…</p>
                </div>
            </div><br>
            <div class="card-2">
                <div class="">
                    <img src="public/images/team3.png">
                </div>
                <div class="">
                    <div class="top">
                        <div class="title">
                            <p class=""><small class="text-body-secondary">OFFICE MANAGER</small></p>
                            <h5 class="">Jeny Fisher</h5>
                        </div>
                        <div class="title-img">
                            <img src="public/images/teams.svg" alt="">
                        </div>
                    </div>
                    <div class="hr"></div>
                    <p class="text">Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione
                        voluptatem sequ Sed ut perspiciatis unde…
                    </p>
                </div>
            </div><br>
            <div class="card-2">
                <div class="">
                    <img src="public/images/team4.png">
                </div>
                <div class="">
                    <div class="top">
                        <div class="title">
                            <p class=""><small class="text-body-secondary">CHIEF MARKETING</small></p>
                            <h5 class="">Guy Hawkins</h5>
                        </div>
                        <div class="title-img">
                            <img src="public/images/teams.svg" alt="">
                        </div>
                    </div>
                    <div class="hr"></div>
                    <p class="text">Neque porro quisquam est, qui dolorem
                        ipsumed ut perspiciatis unde omnis iste natus
                        error sit voluptatem accusantium doloremque
                        laudantium Sed ut perspiciatis unde omnis…
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- page 10 -->
    <div class="page-10">
        <div class="d-flex justify-content-between">
            <h3 class="col">- From Our Blog.</h3>
            <h1 class="col">NEWS & EVENTS</h1>
        </div>
        <div class="swiper mySwiperP">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="date-container"><b>01</b><br> Jun</div>
                        <img src="public/images/news1.png" alt="">
                        <div class="caption row">
                            <h4>News Title 1</h4>
                            <p>BEML Ltd and Bharat Electronics Limited (BEL) Forge Partnership to Develop Indigenous Train Control Management System (i-TCMS)</p>
                            <a href="http://example.com" class="button">Read more<img src="public/images/up-right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="date-container"><b>02</b><br> Jun</div>
                        <img src="public/images/news2.png" alt="">
                        <div class="caption">
                            <h4>News Title 2</h4>
                            <p>Defence Secretary inaugurates test firing of India’s first indigenously developed Prototype 1500 HP Engine by BEML for Main Battle Tank</p>
                            <a href="http://example.com" class="button">Read more<img src="public/images/up-right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="date-container"><b>03</b><br> Jun</div>
                        <img src="public/images/news3.png" alt="">
                        <div class="caption">
                            <h4>News Title 3</h4>
                            <p>Hon’ble Union Minister for Railways inaugurates India’s First Vande Bharat SleeperTrainset Carbody Structure</p>
                            <a href="http://example.com" class="button">Read more<img src="public/images/up-right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="date-container"><b>01</b><br> Jun</div>
                        <img src="public/images/news1.png" alt="">
                        <div class="caption row">
                            <h4>News Title 1</h4>
                            <p>BEML Ltd and Bharat Electronics Limited (BEL) Forge Partnership to Develop Indigenous Train Control Management System (i-TCMS)</p>
                            <a href="http://example.com" class="button">Read more<img src="public/images/up-right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="date-container"><b>02</b><br> Jun</div>
                        <img src="public/images/news2.png" alt="">
                        <div class="caption">
                            <h4>News Title 2</h4>
                            <p>Defence Secretary inaugurates test firing of India’s first indigenously developed Prototype 1500 HP Engine by BEML for Main Battle Tank</p>
                            <a href="http://example.com" class="button">Read more<img src="public/images/up-right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="date-container"><b>03</b><br> Jun</div>
                        <img src="public/images/news3.png" alt="">
                        <div class="caption">
                            <h4>News Title 3</h4>
                            <p>Hon’ble Union Minister for Railways inaugurates India’s First Vande Bharat SleeperTrainset Carbody Structure</p>
                            <a href="http://example.com" class="button">Read more<img src="public/images/up-right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>