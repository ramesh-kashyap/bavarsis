
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bavarsis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Russo+One&amp;display=swap&amp;_v=20230901012932" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('')}}assets/css/style121312312223.css">
    <link rel="icon" type="image/x-icon" href="{{asset('')}}assets/img/icons/fav.png">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?_v=20230901012932"
    />

    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WFZ7F4SP');</script>
        <!-- End Google Tag Manager -->
        
    
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WFZ7F4SP"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        

    <style>.show__shedule{
            border-left: 3px solid #D7A3E5;
            padding-left: 15px;
        }
        .ambasador__text--li{
            color: var(--color-light-gray, #999);
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 140%;
            max-width: 300px;
        }
        .ambasador__price{
            color: var(--color-white, #FFF);
            font-family: 'Russo One';
            font-size: 16px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
            white-space: nowrap;
        }
        .ambasador__text-sub{
            color: var(--color-gray, #585858);
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 141%;
        }

        .reserve__hex{
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
            align-items: center;
            justify-content: space-between;
        }
        .reserve__hex-item{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-sizing: border-box;
            gap: 12px;
            max-width: 266px;
            width: 100%;
            aspect-ratio: 266/300;
            background-image: url('img/reserve/hex.svg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .reserve__title{
            color: var(--color-pink, #D7A3E5);
            font-size: clamp(14px, 3vw, 24px);
            text-transform: uppercase;
        }
        .reserve__subtitle{
            color: var(--color-white, #FFF);
            font-size: clamp(10px, 3vw, 18px);
        }
        .reserve__price{
            color: var(--color-white, #FFF);
            text-align: center;
            font-size: clamp(12px, 3vw, 24px);
            white-space: nowrap;
        }
        .reserve__percent{
            color: var(--color-light-gray, #999);
            text-align: center;
            font-size: clamp(12px, 3vw, 24px);
        }
        .reserve__img{
            max-width: 60px;
            width: 100%;
            aspect-ratio: 1/1;
        }
        .button-wrapper{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 24px;
            max-width: 400px;
            width: 100%;
            margin: 30px 0;
        }
        .button-wrapper > .button{
            min-width: unset;
        }

        .docs-wrap{
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 50px;
            margin-bottom: 50px;
            max-width: 1650px;
        }
        .docs-info{
            display: flex;
            flex-direction: column;
            gap: 16px;
            justify-content: space-between;
        }

        @media screen and (max-width: 1700px){
            .reserve__hex-item{
                gap: 7px;
                max-width: 220px;
            }
            .reserve__title{
                font-size: clamp(14px, 3vw, 18px);
            }
            .reserve__subtitle{
                font-size: clamp(10px, 3vw, 14px);
            }
            .reserve__price{
                font-size: clamp(12px, 3vw, 18px);
            }
            .reserve__percent{
                font-size: clamp(12px, 3vw, 18px);
            }
        }

        @media screen and (max-width: 1350px){
            .reserve__hex{
                max-width: 700px;
                grid-template-columns: repeat(3, 1fr);
            }
            .reserve__hex-item--relative-p{
                position: relative;
                left: 120px;
                bottom: 65px;
            }
            .docs-wrap{
                display: flex;
                flex-direction: column-reverse;
                grid-template-columns: unset;
                gap: 50px;
                margin-bottom: 50px;
                max-width: 1650px;
            }
        }

        @media screen and (max-width: 900px){
            .reserve__hex{
                max-width: 450px;
                grid-template-columns: repeat(2, 1fr);
            }
            .reserve__hex-item--relative-p{
                position: relative;
                left: unset;
                bottom: unset;
            }
            .reserve__hex-item--relative-m1{
                position: relative;
                left: 110px;
                bottom: 60px;
            }
            .reserve__hex-item--relative-m2{
                position: relative;
                bottom: 120px;
            }
        }

        @media screen and (max-width: 650px){
            .reserve__hex{
                max-width: 270px;
                gap: 0;
            }
            .reserve__hex-item{
                gap: 3px;
                max-width: 124px;
            }
            .reserve__title{
                font-size: 14px;
            }
            .reserve__subtitle{
                font-size: 10px;
            }
            .reserve__price{
                font-size: 12px;
            }
            .reserve__percent{
                font-size: 12px;
            }
            .reserve__img{
                width: 28px;
            }
            .reserve__hex-item--relative-m1{
                position: relative;
                left: 70px;
                bottom: 24px;
            }
            .reserve__hex-item--relative-m2{
                position: relative;
                bottom: 48px;
            }
        }

        @media screen and (max-width: 374px){
            .button-wrapper{
                flex-wrap: wrap;
            }
            .reserve__hex{
                display: flex;
                flex-direction: column;
                gap: 24px;
                justify-content: center;
                align-items: center;
                margin-inline: auto;
            }
            .reserve__hex-item{
                gap: 10px;
                max-width: unset;
            }
            .reserve__title{
                font-size: 18px;
            }
            .reserve__subtitle{
                font-size: 14px;
            }
            .reserve__price{
                font-size: 18px;
            }
            .reserve__percent{
                font-size: 18px;
            }
            .reserve__img{
                width: 40px;
            }
            .reserve__hex-item--relative-m1{
                position: unset;
            }
            .reserve__hex-item--relative-m2{
                position: unset;
            }
            .reserve__hex-item{
                aspect-ratio: 1/1;
                background-size: contain;
            }
        }

    </style>

</head>
<body>
<div class="content-wrapper content-wrapper--document">
    <div class="document document--ambasador">
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
            <li class="main-menu__link-wrapper  active ">
                <a class="main-menu__link" href="page.php=reserve_hub.html">Reserve hub</a>
            </li>
            <li class="main-menu__link-wrapper ">
                <a class="main-menu__link" href="page.php=documents.html">Documents</a>
            </li>
            <li class="main-menu__link-wrapper ">
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


        <div class="show">

            <div class="document__title document__title--hub _mb50">
                <div class="document__title-main document__title-main--hub">
                    <span class="_light-grey _one _f64">Reserve hub </span>
                </div>
            </div>


            <div class="ambasador__main-title _mb24">We share the financial responsibility </div>
            <div class="ambasador__text _mb40">Capital is any corporate resource that has the potential to earn a profit. This concept includes both financial instruments - own money, securities and equipment, technologies, goods, brands, as well as ideas and concepts.

            </div>
        </div>

        <div class="docs-wrap">

            <div class="docs-info">
                <div class="ambasador__title ambasador__title--white">Bavarsis&#039; share capital complies with Australian regulations and jurisdictions. </div>

                <div class="ambasador__text">
                    Our share capital is insured by the Central Bank of Australia and is expressed in company shares. 1 share costs $1, which means that the tax costs of our company will be less than other financial companies. If our shares grow, we will receive additional privileges and an increase in authorized capital from the central bank of Australia. What our financial specialists have done is the best solution for reducing tax costs in the Australian jurisdiction. If you don’t understand something, then you should study Australian jurisdiction in detail 
                </div>
                <div class="ambasador__sub-title">The authorized capital includes the following assets: </div>
    
                <div class="show__shedule">
                    <div class="ambasador__text ambasador__text--li">Reserve capital (crypto)   </div>
                    <div class="ambasador__price">$ 156,108,028.09</div>
                    <div class="ambasador__text ambasador__text--li">Material and property assets  </div>
                    <div class="ambasador__price">$ 31,400,000</div>
                    <div class="ambasador__text ambasador__text--li">Patented development <br><span class="ambasador__text-sub">(AI, Trading bot, arbitrage trading system and norms)  </span>  </div>
                    <div class="ambasador__price">$ 178,600,000</div>
                    <div class="ambasador__text ambasador__text--li">Currency current account </div>
                    <div class="ambasador__price">$ 30,000,000</div>
                    <div class="ambasador__text ambasador__text--li">Risk management  </div>
                    <div class="ambasador__price">$ 20,000,000</div>
                </div>
    
                <div class="ambasador__title ambasador__title--white">Protocol ZKPInsp</div>
    
                <div class="ambasador__text">
                    ZKPInsp is a protocol that uses zero-knowledge proof. Using ZKPInsp you can verify the reserve fund that belongs to us. In addition, you can be convinced of this and do not disclose the original value of the data which we leave in a closed format in order to avoid hacker attacks, hacking and synchronization of our wallets with other services that introduce a virus into our transaction.
                </div>
    
                <div class="button-wrapper" style="margin: unset;">
                    <a href="bavarsisaudit_01052024.xlsx" download target="_blank" class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white" data-hover="Latest Audit" id="LatestAudit"><div>Latest Audit </div></a>
                    <a href="https://drive.google.com/file/d/1xAt_QGr8Y6s9Zq_53BWHv_qIwAcUpami/view?usp=sharing" target="_blank" class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white" data-hover="ZKPInsp" id="ZKPInsp"><div>ZKPInsp </div></a>
                </div>
            </div>
            <div>
                
                <a href="Bav%20Insurance.pdf" target="_blank"><img src="Bav%20Insurance_page-0001.jpg" alt="" style="width: 100%; max-width: 300px; border: 2px solid #D7A3E5; border-radius: 10px; cursor: pointer;"></a>
                <a href="HSBC%20Bavarsis%20Insurance.pdf" target="_blank"><img src="askcm.png" alt="" style="width: 100%; max-width: 300px; border: 2px solid #D7A3E5; border-radius: 10px; cursor: pointer;"></a>
            </div>

        </div>


        
        
        <div class="reserve__hex">
            <div class="reserve__hex-item">
                <span class="reserve__title">BTC</span>
                <span class="reserve__subtitle">Bitcoin</span>
                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BTC.svg" alt="" class="reserve__img">
                <span class="reserve__price">$ 45302738</span>
                <span class="reserve__percent">28,10%</span>
            </div>
            <div class="reserve__hex-item">
                <span class="reserve__title">LTC</span>
                <span class="reserve__subtitle">Litecoin</span>
                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/LTC.svg" alt="" class="reserve__img">
                <span class="reserve__price">$ 7769234</span>
                <span class="reserve__percent">4,82%</span>
            </div>
            <div class="reserve__hex-item reserve__hex-item--relative-m1">
                <span class="reserve__title">ETH</span>
                <span class="reserve__subtitle">Ethereum</span>
                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ETH.svg" alt="" class="reserve__img">
                <span class="reserve__price">$ 21303998</span>
                <span class="reserve__percent"> 13,21%</span>
            </div>
            <div class="reserve__hex-item reserve__hex-item--relative-p reserve__hex-item--relative-m1">
                <span class="reserve__title">DOGE</span>
                <span class="reserve__subtitle">Dogecoin</span>
                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/DOGE.svg" alt="" class="reserve__img">
                <span class="reserve__price">$  5574172 </span>
                <span class="reserve__percent">3,46%</span>
            </div>
            <div class="reserve__hex-item reserve__hex-item--relative-p reserve__hex-item--relative-m2">
                <span class="reserve__title">USDT</span>
                <span class="reserve__subtitle">ERC / TRC</span>
                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="" class="reserve__img">
                <span class="reserve__price">$ 81289770</span>
                <span class="reserve__percent">50,42%</span>
            </div>
            <div class="reserve__hex-item reserve__hex-item--relative-p reserve__hex-item--relative-m2">
                <span class="reserve__title">SHIB</span>
                <span class="reserve__subtitle">Shiba</span>
                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/SHIB.svg" alt="" class="reserve__img">
                <span class="reserve__price">$ 0</span>
                <span class="reserve__percent">0%</span>
            </div>


            
        </div>

        <div class="show" style="padding-top: 35px;">


<div class="ambasador__title ambasador__title--white _mb24">How to check Bavarsis reserves.
</div>

<div class="ambasador__text _mb24">
    Step 1: Install ZKPInsp
    <br>
    Download ZKPInsp:
    <br>
    Find and download the ZKPInsp application.
    <br><br>
    Step 2: Check wallet data
    <br><br>
    Download the latest audit spreadsheet and open it in Excel. Insert the WalletID with corresponding key into ZKPInsp. ZKPInsp will calculate and display your wallet balances without disclosing wallet numbers. Review Balances: Carefully review the displayed balances to ensure they match your expectations. Close and Secure: Close ZKPInsp after verifying your wallet balances.
    
    <br><br>
    Why Bavarsis Protects Wallet Numbers
    <br><br>
    At Bavarsis, we prioritize your wallet security. We do not provide wallet numbers for the following reasons
Protection from Hacker Attacks: By keeping wallet numbers confidential, we reduce the risk of targeted attacks that could compromise your cryptocurrency assets. Enhanced Security: Concealing wallet numbers adds an extra layer of security, making it more challenging for malicious actors to gain access to your funds. Prevention of Synchronization: Exposing wallet numbers could lead to synchronization with other online services, increasing the potential for malware or viruses to infiltrate your transactions. By safeguarding your wallet numbers, Bavarsis ensures your cryptocurrency assets remain protected and secure, reducing the risk of unauthorized access and security breaches. We encourage responsible use of Bavarsis and ZKPInsp while maintaining the security of your wallet data. Protect your investments and financial information with confidence.
</div>

         
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
                <div class="footer-new__item-title"><a href="cdn-cgi/l/email-protection.html#1e5d71716e7b6c7f6a7771705e7c7f687f6c6d776d307d7173" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="3675595946534457425f5958765457405744455f451855595b">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - we are open to collaboration. If you have something to offer for us, feel free to do so. We will definitely consider your offer. 
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#d59ab3b3bcb6b095b7b4a3b4a7a6bca6fbb6bab8" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="a9e6cfcfc0cacce9cbc8dfc8dbdac0da87cac6c4">[email&#160;protected]</span></a>

                </div>
                <div class="footer-new__item-text">
                    - our experts can help with any issue and redirect your enquiry to the right Bavarsis department. 

                </div>
            </div>
        </div>
        <div class="footer-new__double">
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#8cdfe9eff9fee5f8f5cceeedfaedfeffe5ffa2efe3e1" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="5a093f392f28332e231a383b2c3b2829332974393537">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - to avoid fraudulent activity from hackers and others, we always keep an eye on our partners.                    
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#5b142c3e3516322f38333e37371b393a2d3a2928322875383436" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="69261e0c0724001d0a010c0505290b081f081b1a001a470a0604">[email&#160;protected]</span></a>
                    
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
            <a href="cdn-cgi/l/email-protection.html#bfeccacfcfd0cdcbffdddec9decdccd6cc91dcd0d2" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="297a5c5959465b5d694b485f485b5a405a074a4644">[email&#160;protected]</span></a>

        </div>
        <div class="footer-new__item-text">
            - our technical department, will help make your time on Bavarsis comfortable. If you notice any problems with Bavarsis, please let us know. If you have any wishes about the work of our company, please write to us and we will be glad to hear from you. 

        </div>
    </div>
    <div class="footer-new__item">
        <div class="footer-new__item-title">
            <a href="cdn-cgi/l/email-protection.html#a5e3cccbc4cbc6c0e5c7c4d3c4d7d6ccd68bc6cac8" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="edab84838c838e88ad8f8c9b8c9f9e849ec38e8280">[email&#160;protected]</span></a>
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
 type: 'GET',
 url: 'https://www.binance.com/api/v3/ticker',
 data: 'symbol='+marker,
 success: function(ex) {
   
   

     var r1 = ex['lastPrice']*1;
     console.log(r1);
    $(".ticker_"+marker).html(""+marker.slice(0, marker.length-4)+": "+r1.toFixed(6)+"$");
   }


 });
}
get_last_tron('BTCUSDT');
setInterval("get_last_tron('BTCUSDT')", 10000);
get_last_tron('ETHUSDT');
setInterval("get_last_tron('ETHUSDT')", 10000);
get_last_tron('LTCUSDT');
setInterval("get_last_tron('LTCUSDT')", 10000);
get_last_tron('DOGEUSDT');
setInterval("get_last_tron('DOGEUSDT')", 10000);
get_last_tron('BNBUSDT');
setInterval("get_last_tron('BNBUSDT')", 10000);
get_last_tron('ADAUSDT');
setInterval("get_last_tron('ADAUSDT')", 10000);
get_last_tron('SHIBUSDT');
setInterval("get_last_tron('SHIBUSDT')", 10000);
get_last_tron('SOLUSDT');
setInterval("get_last_tron('SOLUSDT')", 10000);
get_last_tron('XRPUSDT');
setInterval("get_last_tron('XRPUSDT')", 10000);
</script>

</body>
</html>
