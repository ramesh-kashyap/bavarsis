
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bavarsis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Russo+One&amp;display=swap&amp;_v=20230901012932"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/style121312312223.css" />
    <link rel="icon" type="image/x-icon" href="{{asset('')}}assets/img/icons/fav.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?_v=20230901012932" />
</head>

<body>
    <div class="content-wrapper content-wrapper--document">
        <div class="document">
            <style>.main-menu__link-wrapper.active::before {
opacity: 1;
transition: all 0.3s ease;
}

.news__card{
    border: 0px;
}

.main-menu__link-wrapper.active a {
color: #fff;
}

.baza2{
    padding: 5px 12px;
max-width: max-content;
font-size: 10px;
letter-spacing: 1px;
border-radius: 4px;
}


.news__bottom {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.news__card-content {
  min-height: 600px;
  border-radius: 20px;
  padding: 20px 25px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 20px;
  position: relative;
}

.menu-button-new{
    margin-left: auto;
    align-self: center;
    max-width: 100px;
    padding: 10px;
    display: none;
}

@media screen and (max-width: 1023px){
    .menu-button-new{
        display: flex;
    }
}
@media screen and (max-width: 320px){
    .menu-button-new{
        max-width: fit-content;
    }
}
</style>

<div class="mobile-menu _hidden">
    <div class="mobile-menu__wrapper">
        <div class="mobile-menu__top">
            <a href="index.html" class="logo">
                <img src="{{asset('')}}assets/img/icons/logo-main.svg" alt="./index.html">
            </a>
            <div class="close close--mobile-menu"></div>
            <ul class="mobile-menu__links-wrapper _one _f15">
                <li class="mobile-menu__link-wrapper active">
                    <a class="mobile-menu__link" href="page.php=referral_hub.html">Referral hub</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="mobile-menu__link" href="page.php=learning_hub.html">Learning hub</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="mobile-menu__link" href="page.php=bonus_hub.html">Bonus hub</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="main-menu__link" href="page.php=showroom.html" style="color: #fff;">ShowRoom</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="main-menu__link" href="page.php=ambassador.html" style="color: #fff;">Ambassador Program</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="main-menu__link" href="page.php=reserve_hub.html" style="color: #fff;">Reserve hub</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="mobile-menu__link" href="page.php=documents.html">Documents</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="mobile-menu__link" href="page.php=news.html">News</a>
                </li>
                <li class="mobile-menu__link-wrapper">
                    <a class="mobile-menu__link" href="page.php=faq.html">FAQ</a>
                </li>
                                <li class="mobile-menu__link-wrapper">
                    <a class="mobile-menu__link _pink" style="color: #d7a3e5 !important;" href="page.php=auth.html">Get started</a>
                </li>
                               
            </ul>
            <div class="mobile-menu__decorator"></div>
            <ul class="mobile-menu__socials-wrapper _one _f14">
                <li class="mobile-menu__link-wrapper"><a class="mobile-menu__link mobile-menu__link--social" href="">Facebook</a>
                </li>                
                <li class="mobile-menu__link-wrapper"><a class="mobile-menu__link mobile-menu__link--social" href="">Linkedin</a>
                </li>
                <li class="mobile-menu__link-wrapper"><a class="mobile-menu__link mobile-menu__link--social" href="">Telegram</a>
                </li>
                <li class="mobile-menu__link-wrapper"><a class="mobile-menu__link mobile-menu__link--social" href="">Whatsapp</a>
                </li>
            </ul>
        </div>
        <div class="mobile-menu__bottom">
            <div class="language language--mobile _one _f16">
                <div class="language__link language__select" style="text-transform: uppercase;">
                    en                </div>
                <div class="language__drop-down language__drop-down--mobile _hidden">
                    <a href="index.html" class="language__link language__link--inside">
                        EN
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        CN
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        DE
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        HI
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        IT
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        PT
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        SP
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        VN
                    </a>
    
                    <a href="index.html" class="language__link language__link--inside">
                        BN
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        HU
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        SL
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        CZ
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        FR
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        JP
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        PL
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        RO
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        RU
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        MN
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        KR
                    </a>
                    <a href="index.html" class="language__link language__link--inside">
                        TH
                    </a>
                </div>
            </div>
            <img src="{{asset('')}}assets/img/icons/allM.svg" alt="" class="mark mark--mobile-menu"></div>
    </div>
</div>

<nav class="main-menu">
    <a href="index.html" class="logo logo--main-header main-menu__left">
        <img src="{{asset('')}}assets/img/icons/logo-main.svg" alt="">
    </a>
    <!--  -->
    <div class="main-menu__right">
        <div class="burger">
            <div class="burger__line"></div>
            <div class="burger__line"></div>
            <div class="burger__line"></div>
        </div>
        <ul class="main-menu__links-wrapper _one _f15" id="MainMenu">
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=referral_hub.html">Referral hub</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=learning_hub.html">Learning hub</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=bonus_hub.html">Bonus hub</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=showroom.html">ShowRoom</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=ambassador.html">Ambassador Program</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=reserve_hub.html">Reserve hub</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=documents.html">Documents</a>
            </li>
            <li class="main-menu__link-wrapper  active ">
                <a class="main-menu__link" href="page.php=news.html">News</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=faq.html">FAQ</a>
            </li>
                        <li class="main-menu__link-wrapper">
                <a class="main-menu__link _pink" href="page.php=auth.html" style="font-size: 1.2em;">Get started</a>
            </li>
                        
        </ul>
        <div class="language language--main _one _f16">
            <div class="language__link language__select" style="text-transform: uppercase;">
                en            </div>
            <div class="language__drop-down _hidden">
                <a href="index.html" class="language__link language__link--inside">
                    EN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    CN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    DE
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    HI
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    IT
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    PT
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    SP
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    VN
                </a>

                <a href="index.html" class="language__link language__link--inside">
                    BN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    HU
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    SL
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    CZ
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    FR
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    JP
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    PL
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    RO
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    RU
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    TR
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    MN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    KR
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    TH
                </a>
            </div>
        </div>
                            </div>
</nav>

            <div class="document__title document__title--news">
                <div class="document__title-main _light-grey _one _f64">
                                        Bavarsis news portal                 </div>
                <div class="document__subtitle _light-grey _f28 _fw200">

                     Get acquainted with the news and information novelties of
                    our portal                 </div>
            </div>
            <!-- <ul class="tags tags--main _f15 _medium">
            <li class="tags__tag" data-tag="All">
                <span class="tags__text" data-tag="All">All</span>
            </li>
            <li class="tags__tag" data-tag="News">
                <span class="tags__text" data-tag="News">News</span>
            </li>
            <li class="tags__tag" data-tag="trading">
                <span class="tags__text" data-tag="trading">Trading</span>
            </li>
            <li class="tags__tag" data-tag="Economics">
                <span class="tags__text" data-tag="Economics">Economics</span>
            </li>
            <li class="tags__tag" data-tag="Technology">
                <span class="tags__text" data-tag="Technology">Technology</span>
            </li>
            <li class="tags__tag" data-tag="Blockchain">
                <span class="tags__text" data-tag="Blockchain">Blockchain</span>
            </li>
            <li class="tags__tag" data-tag="Software">
                <span class="tags__text" data-tag="Software">Software</span>
            </li>
        </ul> -->
            <div class="swiper newsSwiper">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next" style="right: 5%;"></div>
                <div class="swiper-wrapper">
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/10/10-second-to-become-the-best-company-in-the-world.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_10.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> 10 SECOND TO BECOME THE BEST COMPANY IN THE WORLD </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Oct 10, 2023 15:41</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/24/new-quality-of-life-update-on-the-deposit-page.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_24.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> New quality of life update on the Deposit page! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Oct 19, 2023 09:09</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/29/deposit-plan-update.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_29.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Deposit plan update </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Oct 25, 2023 10:54</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/30/proof-of-reserves.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_30.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> PROOF OF RESERVES </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Oct 30, 2023 11:28</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/36/news-media-about-bavarsis.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_36.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> News media about Bavarsis! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Oct 31, 2023 11:53</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/48/our-statistic-in-10-seconds.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_48.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Our statistic in 10 seconds. </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Nov 9, 2023 15:23</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/52/telegram-bot.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_52.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white">Telegram bot</div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Nov 14, 2023 15:40</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/55/bittrex-shutting-down.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_55.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bittrex shutting down. </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Nov 21, 2023 11:05</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/56/bavarsis-elevates-user-experience-with-the-launch-of-telegram-bot.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_56.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis Elevates User Experience with the Launch of Telegram Bot </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Nov 22, 2023 13:07</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/57/reserve-hub-update-01-12-2023.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_57.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Reserve Hub update 01.12.2023  </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Dec
 1, 2023 09:48</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/58/trading-bots.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_58.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Trading Bots </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Dec
 6, 2023 07:27</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/59/first-bavarsis-conference-in-china.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_59.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> First Bavarsis conference in China.  </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Dec
 6, 2023 11:13</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/64/new-office-in-spain.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_64.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> New Office in Spain  </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Dec
 7, 2023 12:08</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/65/conference-in-beijing.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_65.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Conference in Beijing </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Dec
 12, 2023 14:20</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/66/leader-turnover-policy-update.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_66.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Leader turnover policy update </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Dec
 13, 2023 17:06</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/67/leader-turnover-update-from-26th-of-december.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_67.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Leader turnover update from 26th of December: </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Dec
 14, 2023 08:28</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/69/sec-approves-btc-etf-get-your-bonus-now.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_69.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> SEC approves BTC ETF! Get your bonus NOW! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Jan 11, 2024 11:01</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/70/bavarsis-anniversary.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_70.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis Anniversary! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Jan 12, 2024 10:08</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/74/bavarsis-beijing-conference.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_74.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis Beijing Conference </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Jan 13, 2024 10:25</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/75/bavarsis-2023-financial-report.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_75.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis 2023 financial report </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Jan 29, 2024 14:36</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/79/spot-trading-launch.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_79.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> SPOT TRADING LAUNCH </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Jan 30, 2024 17:51</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/83/bavarsis-exchange.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_83.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis Exchange </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Feb 5, 2024 16:36</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/88/bitcoin-profit.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_88.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> BITCOIN PROFIT </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Feb 27, 2024 11:53</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/90/shiba-inu-token.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_90.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> SHIBA INU TOKEN  </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Feb 28, 2024 13:40</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/92/big-updates-coming-soon.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_92.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> BIG UPDATES COMING SOON </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Feb 29, 2024 11:20</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/113/bavarsis-is-now-available-in-turkish.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_113.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis is now available in Turkish! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 11, 2024 14:53</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/114/btc-at-all-time-high.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_114.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> BTC AT ALL TIME HIGH </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 11, 2024 15:45</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/116/conference-in-asia-region.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_116.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Conference in Asia region </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 15, 2024 08:56</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/120/new-my-team-update.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_120.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> New "My team" update! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 15, 2024 14:11</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/125/transaction-filtering.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_125.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Transaction filtering! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 22, 2024 16:11</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/126/qr-code-for-your-referrals.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_126.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> QR-code for your referrals! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 22, 2024 16:15</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/127/introducing-our-limited-time-bonus-program.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_127.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white">  Introducing our Limited-Time Bonus Program!  </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 27, 2024 08:01</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/130/bavarsis-participation-at-the-conference-in-oman.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_130.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis participation at the conference in Oman! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Mar 29, 2024 13:51</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/134/reserve-hub-update-assets-increased-by-8-08.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_134.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Reserve Hub update: Assets increased by 8.08%! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Apr 1, 2024 08:51</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/143/hsbc-insurance.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_143.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> HSBC Insurance </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Apr 4, 2024 06:39</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/144/successful-start-of-business-and-long-term-relationship-with-btcturk.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_144.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Successful start of business and long-term relationship with BTCTURK  </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">Apr 9, 2024 10:19</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/148/new-office-opened.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_148.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> New Office Opened </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 13, 2024 09:54</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/152/bavarsis-exchange-launch.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_152.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Bavarsis Exchange Launch </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 13, 2024 16:04</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/156/crypto-staking-with-bavarsis.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_156.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Crypto-Staking with Bavarsis! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 13, 2024 16:44</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/160/new-languages-added.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_160.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> New Languages Added! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 19, 2024 14:16</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/161/thai-language-added.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_161.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Thai Language Added! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 21, 2024 15:13</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/162/event-in-czech-republic.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_162.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Event in Czech Republic! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 24, 2024 12:22</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/163/event-in-taiwan.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_163.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Event in Taiwan! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 24, 2024 13:10</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                        <div class="swiper-slide news">
                        <a href="page.php=news_more/164/deposit-plan-update.html" class="news__card news__card--1"
                            style="background-image: url({{asset('')}}assets/img/news/news/news_164.png);">
                            <div class="news__card-content news__card-content--white">
                                <ul class="tags tags--news _f15 _medium" style="visibility: hidden;">
                                    <li class="tags__tag tags__tag--news" data-tag="News">
                                        <span class="tags__text" data-tag="News">News</span>
                                    </li>
                                    <li class="tags__tag tags__tag--news" data-tag="trading">
                                        <span class="tags__text" data-tag="trading">Trading</span>
                                    </li>
                                </ul>
                                <div class="news__bottom">
                                    <div class="news__title _one _f30 _white"> Deposit plan update! </div>
                                    <div class="news__date">
                                        <img src="{{asset('')}}assets/img/icons/calendar.svg" alt="" class="news__date-img" />
                                        <span class="news__date-text _medium _f14 _pink">May 27, 2024 09:57</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                                    </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <footer>
            <nav class="main-menu main-menu--footer">
  <div class="main-menu__top-wrapper">
      <a href="index.html" class="logo logo--footer main-menu__left">
          <img src="{{asset('')}}assets/img/icons/logo-footer.svg" alt="" style="width: auto;">
      </a>

      <div class="main-menu__right main-menu__right--footer">
          <ul class="main-menu__links-wrapper _one _f15">
              <li class="main-menu__link-wrapper">
                  <a class="main-menu__link" href="page.php=referral_hub.html">Referral hub </a>
              </li>
              <li class="main-menu__link-wrapper">
                  <a class="main-menu__link" href="page.php=learning_hub.html">Learning hub </a>
              </li>
              <li class="main-menu__link-wrapper">
                  <a class="main-menu__link" href="page.php=bonus_hub.html">Bonus hub </a>
              </li>
              <li class="main-menu__link-wrapper">
                <a class="main-menu__link" href="page.php=showroom.html">ShowRoom </a>
            </li>
              <li class="main-menu__link-wrapper">
                <a class="main-menu__link" href="page.php=ambassador.html">Ambassador Program </a>
            </li>
            <li class="main-menu__link-wrapper">
                <a class="main-menu__link" href="page.php=reserve_hub.html">Reserve hub</a>
            </li>
              <li class="main-menu__link-wrapper">
                  <a class="main-menu__link" href="page.php=documents.html">Documents </a>
              </li>
              <li class="main-menu__link-wrapper">
                  <a class="main-menu__link" href="page.php=news.html">News</a>
              </li>
              <li class="main-menu__link-wrapper">
                <a class="main-menu__link" href="page.php=faq.html">FAQ</a>
            </li>
                          <li class="main-menu__link-wrapper">
                <a class="main-menu__link _pink" href="page.php=auth.html">Get started </a>
            </li>
                      </ul>
      </div>
        <div class="language _one _f16 language-grid">
            <div class="language__link" style="text-transform: uppercase;">
                en            </div>
            <div class="language__drop-down language__drop-down--footer _hidden">
                <a href="index.html" class="language__link language__link--inside">
                    EN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    CN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    DE
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    HI
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    IT
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    PT
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    SP
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    VN
                </a>

                <a href="index.html" class="language__link language__link--inside">
                    BN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    HU
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    SL
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    CZ
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    FR
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    JP
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    PL
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    RO
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    RU
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    MN
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    KR
                </a>
                <a href="index.html" class="language__link language__link--inside">
                    TH
                </a>
            </div>
        </div>
      <div class="main-menu__social-wrapper main-menu__social-wrapper--mobile">
        <a href="https://www.facebook.com/profile.php?id=61551701895816" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/facebook.svg" style="height: 30px;" alt="">
        </a>
        <a href="#" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/lnkd.svg" style="height: 30px;" alt="">
        </a>
        <a href="https://t.me/bavarsis_channel" target="_blank" class="main-menu__social-link">
          <img src="{{asset('')}}assets/img/icons/tg.svg" style="height: 30px;" alt="">
        </a>
        <a href="https://www.youtube.com/channel/UCvRY5VklD2DMTlxQgE9uT3A" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/yb.svg" alt="">
          </a>
        <a href="https://wa.me/+61451602190" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/whatsap.svg" style="height: 30px;" alt="">
        </a>
      </div>
  </div>
  
  <section class="footer-new _border-top">
    <div class="footer-new__block">
        <div class="footer-new__double">
            <div class="footer-new__item">
                <div class="footer-new__item-title"><a href="cdn-cgi/l/email-protection.html#b5f6dadac5d0c7d4c1dcdadbf5d7d4c3d4c7c6dcc69bd6dad8" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="a3e0ccccd3c6d1c2d7cacccde3c1c2d5c2d1d0cad08dc0ccce">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - we are open to collaboration. If you have something to offer for us, feel free to do so. We will definitely consider your offer. 
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#b6f9d0d0dfd5d3f6d4d7c0d7c4c5dfc598d5d9db" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="632c05050a0006230102150211100a104d000c0e">[email&#160;protected]</span></a>

                </div>
                <div class="footer-new__item-text">
                    - our experts can help with any issue and redirect your enquiry to the right Bavarsis department. 

                </div>
            </div>
        </div>
        <div class="footer-new__double">
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#c596a0a6b0b7acb1bc85a7a4b3a4b7b6acb6eba6aaa8" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="0754626472756e737e476566716675746e742964686a">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - to avoid fraudulent activity from hackers and others, we always keep an eye on our partners.                    
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#3e71495b5073574a5d565b52527e5c5f485f4c4d574d105d5153" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="652a12000b280c11060d000909250704130417160c164b060a08">[email&#160;protected]</span></a>
                    
                </div>
                <div class="footer-new__item-text">
                    - the CEO of the company. I&#039;m always open to partners. 
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu__social-wrapper main-menu__social-wrapper--main">
        <a href="https://www.facebook.com/profile.php?id=61551701895816" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/facebook.svg" style="height: 30px;" alt="">
        </a>
        <a href="#" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/lnkd.svg" style="height: 30px;" alt="">
        </a>
        <a href="https://t.me/bavarsis_channel" target="_blank" class="main-menu__social-link">
          <img src="{{asset('')}}assets/img/icons/tg.svg" style="height: 30px;" alt="">
        </a>
        <a href="https://www.youtube.com/channel/UCvRY5VklD2DMTlxQgE9uT3A" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/yb.svg" alt="">
          </a>
        <a href="https://wa.me/+61451602190" target="_blank" class="main-menu__social-link">
            <img src="{{asset('')}}assets/img/icons/whatsap.svg" style="height: 30px;" alt="">
        </a>
    </div>
  </section>
  <section class="footer-new footer-new--sub _border-top">
    <div class="footer-new__item">
        <div class="footer-new__item-title">
            <a href="cdn-cgi/l/email-protection.html#e2b19792928d9096a28083948390918b91cc818d8f" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="d380a6a3a3bca1a793b1b2a5b2a1a0baa0fdb0bcbe">[email&#160;protected]</span></a>

        </div>
        <div class="footer-new__item-text">
            - our technical department, will help make your time on Bavarsis comfortable. If you notice any problems with Bavarsis, please let us know. If you have any wishes about the work of our company, please write to us and we will be glad to hear from you. 

        </div>
    </div>
    <div class="footer-new__item">
        <div class="footer-new__item-title">
            <a href="cdn-cgi/l/email-protection.html#83c5eaede2ede0e6c3e1e2f5e2f1f0eaf0ade0ecee" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="97d1fef9f6f9f4f2d7f5f6e1f6e5e4fee4b9f4f8fa">[email&#160;protected]</span></a>
        </div>
        <div class="footer-new__item-text">
            - our finance department is a great department that makes your accounting and statistics happen instantly in your personal account. Finance department access for important questions from our partners. 

        </div>
    </div>
    <div class="footer-new__item">
        <div class="footer-new__item-title">Address 
        </div>
        <div class="footer-new__item-text footer-new__item-text--no-pink">
            234 GEORGE ST, SYDNEY, NEW SOUTH WALES 2000

        </div>
    </div>
    <!-- <div class="footer-new__item">
        <div class="footer-new__item-title">Contact Number

        </div>
        <div class="footer-new__item-text footer-new__item-text--no-pink">
            + 

        </div>
    </div> -->
  </section>
  <section class="footer-new">
    <div class="footer-new__wide">
        <div class="footer-new__wide-text">
            In the spirit of reconciliation we acknowledge the Traditional Custodians of Country throughout Australia and their connections to land, sea and community. We pay our respect to their Elders past and present and extend that respect to all Aboriginal and Torres Strait Islander peoples today. 
        </div>
    </div>
  </section>

  <div class="main-menu__copyright">
      <p class="main-menu__copy-text _one _f14 _pink">
          © 2023 All rights reserved 
      </p>
  </div>
</nav>
        </footer>
    </div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?_v=20230901012932"></script>
    <script src="{{asset('')}}assets/js/app.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        function get_last_tron(marker) {
            $.ajax({
                type: "GET",
                url: "https://www.binance.com/api/v3/ticker",
                data: "symbol=" + marker,
                success: function (ex) {
                    var r1 = ex["lastPrice"] * 1;
                    console.log(r1);
                    $(".ticker_" + marker).html(
                        "" + marker.slice(0, marker.length - 4) + ": " + r1.toFixed(6) + "$"
                    );
                },
            });
        }
        get_last_tron("BTCUSDT");
        setInterval("get_last_tron('BTCUSDT')", 10000);
        get_last_tron("ETHUSDT");
        setInterval("get_last_tron('ETHUSDT')", 10000);
        get_last_tron("LTCUSDT");
        setInterval("get_last_tron('LTCUSDT')", 10000);
        get_last_tron("DOGEUSDT");
        setInterval("get_last_tron('DOGEUSDT')", 10000);
        get_last_tron("BNBUSDT");
        setInterval("get_last_tron('BNBUSDT')", 10000);
        get_last_tron("ADAUSDT");
        setInterval("get_last_tron('ADAUSDT')", 10000);
        get_last_tron("SHIBUSDT");
        setInterval("get_last_tron('SHIBUSDT')", 10000);
        get_last_tron("SOLUSDT");
        setInterval("get_last_tron('SOLUSDT')", 10000);
        get_last_tron("XRPUSDT");
        setInterval("get_last_tron('XRPUSDT')", 10000);
    </script>

    

    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16266537;
        (function (n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n);
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function () {
                    i(["on", c.call(arguments)]);
                },
                once: function () {
                    i(["once", c.call(arguments)]);
                },
                off: function () {
                    i(["off", c.call(arguments)]);
                },
                get: function () {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)]);
                },
                call: function () {
                    i(["call", c.call(arguments)]);
                },
                init: function () {
                    var n = t.createElement("script");
                    (n.async = !0),
                        (n.type = "text/javascript"),
                        (n.src = "https://cdn.livechatinc.com/tracking.js"),
                        t.head.appendChild(n);
                },
            };
            !n.__lc.asyncInit && e.init(), (n.LiveChatWidget = n.LiveChatWidget || e);
        })(window, document, [].slice);
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/16266537/" rel="nofollow">Chat with us</a>, powered by
        <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

    
</body>

</html>