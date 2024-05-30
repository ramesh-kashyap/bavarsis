
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

    <style>.ambasador._mt50 *{
            font-family: "Russo One", sans-serif !important;
        }
    </style>

<style>.modal__content-ambasador{
        max-width: 500px;
        width: 100%;
        padding: 55px 20px;
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        top: 50%;
        margin-inline: auto;
        transform: translateY(-50%);

        background-color: #222222;
        border-radius: 20px;
        display: grid;
        justify-items: center;
        overflow-y: auto;
        box-sizing: border-box;
        max-height: 85dvh;
    }
    .modal form{
        max-width: 400px !important;
    }
    .fomr-a{
        width: 100%;
        max-width: 400px !important;
        box-sizing: border-box;
        display: grid;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        gap: 10px;
        position: relative;
        overflow: auto;
        justify-items: center;
    }
    .form-a__title{
        font-size: clamp(1.5rem, 3vw, 2rem);
    }
    .form-a__text{
        color: var(--color-gray, #585858);
    font-variant-numeric: lining-nums proportional-nums;
    font-family: 'Raleway', sans-serif;
    font-size: 13px;
    font-style: normal;
    font-weight: 400;
    line-height: 140%;
    }

    .settings__input{
        outline: 0;
        border: 1px solid white;
        background: #1b1b1b;
        border-radius: 8px;
        padding: 15px 60px 15px 20px !important;
        max-width: 400px;
        width: 100%;
        box-sizing: border-box;
    }
    .settings__input::placeholder{
        color:#585858;
    }

    @media screen and (max-width: 426px){
        .modal__content-ambasador{
        max-height: 100dvh;
    }
    }


    .success_info{
    padding: 20px 12px;
border-radius: 10px;
width: 98%;
background: #d7a3e6;
    color: #fff;
    font-size: 14px;
    margin: 20px 0px;
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
            <li class="main-menu__link-wrapper  active ">
                <a class="main-menu__link" href="page.php=ambassador.html">Ambassador Program</a>
            </li>
            <li class="main-menu__link-wrapper ">
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

        <div class="document__title document__title--hub">

            
            <div class="document__title-main document__title-main--hub">
                <span class="_light-grey _one _f64">Ambassador program</span>
            </div>
        </div>

   

    
        <div class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white" data-hover="Send" id="BecameAmbasador"><div>Became an ambasador </div></div>
     

        <div class="ambasador _mt50">
            <div class="ambasador__sub-title _mb36">An ambassador is a person who represents and promotes a company&#039;s brand among his audience or in certain circles. </div>
            <div class="ambasador__text _mb24">Company ambassadors are often influencers, experts in a certain field, but mostly they are simply loyal customers of the company. The role of a company ambassador may include the following functions: </div>
            <ul class="ambasador__list _mb70">
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__text">Promoting a company&#039;s products or services to its followers, viewers or followers on social media or other platforms. </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__text">Creating content that is related to the company&#039;s products or brand, such as reviews, write-ups, photos or videos. </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__text">Participate in company events and activities, such as promotions, advertising campaigns or customer events. </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__text">Providing feedback to the company about products and services to improve their quality and meet customer needs. </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__text">Help in establishing connections and partnerships between the company and other influential people or organizations. </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__text">Company ambassadors can be a key tool in a marketing strategy, </div>
                </li>
            </ul>

            <div class="ambasador__sub-title _mb16">An ambassador agreement with Bavarsis </div>
            <div class="ambasador__text _mb40">Include different payment methods, and this usually depends on the arrangements, but for our future ambassadors, we offer two payment options for promoting our company. </div>

            <div class="ambasador__sub-title _mb16">Here are the two main payment methods that can be used in ambassador agreements: </div>

            <div class="ambasador__content-wrapper _mb40">
                <div class="ambasador__text _mb24">Pay-per-job (upon request): In this case, the ambassador receives payment for specific actions or tasks completed as discussed with the company. This may include things like: 
                </div>
                <ul class="ambasador__list">
                    <li class="ambasador__list-item ambasador__list-item--white">
                        <div class="ambasador__text">
                            Creating and posting content (in your social networks or social networks of partners) 
                        </div>
                    </li>
                    <li class="ambasador__list-item ambasador__list-item--white">
                        <div class="ambasador__text">
                            Hosting an event 
                        </div>
                    </li>
                    <li class="ambasador__list-item ambasador__list-item--white">
                        <div class="ambasador__text">
                            Participation in advertising campaigns 
                        </div>
                    </li>
                    <li class="ambasador__list-item ambasador__list-item--white">
                        <div class="ambasador__text">
                            Payment can be provided after tasks are successfully completed and confirmed by a Bavarsis personal specialist. 
                        </div>
                    </li>
                    <li class="ambasador__list-item ambasador__list-item--white">
                        <div class="ambasador__text">
                            Increase in personal indicators or growth of your partner structure (increase in leadership turnover, increase in personal investments) 
                        </div>
                    </li>
                </ul>
            </div>

            <div class="ambasador__content-wrapper _mb70">



                <div class="ambasador__text _mb16">Monthly Payment: In this case, the ambassador receives a fixed monthly fee for maintaining his role and promoting the company&#039;s brand or products for a month. This payment method is usually used when a company wants to establish a long-term relationship with an ambassador and maintain ongoing activity. The Ambassador must adhere to the tasks that will be agreed upon with a personal Bavarsis specialist for a month. In addition, the ambassador agreement may also include additional bonuses or sales commissions if the ambassador helps increase sales of the company&#039;s products or services. It is important that the terms of payment of commissions for the ambassador are discussed personally.  </div>
                <div class="ambasador__text">This can be payment with cryptocurrency, or payment EURO &lt; DOLLAR &lt; GBP </div>
            </div>
            <div class="ambasador__main-title _mb50">Become a Bavarsis ambassador and receive rewards </div>

            <div class="ambasador__title _mb24">Benefits and privileges of an Ambassador:</div>

            <div class="ambasador__info-wrapper _mb40">
                <div class="ambasador__info-item">
                    <div class="ambasador__info-title">Access to the information:
                    </div>
                    <div class="ambasador__info-text">Getting to know a company&#039;s management can give you access to valuable information about that company&#039;s market, competitors, trends, and strategic plans. This can help you better understand the industry and make more informed business decisions 
                    </div>
                </div>
                <div class="ambasador__info-item">
                    <div class="ambasador__info-title">Opportunities for cooperation: 
                    </div>
                    <div class="ambasador__info-text">Dating can lead to opportunities for joint projects or collaborations. This can help grow your business and create new partnerships.
                    </div>
                </div>
                <div class="ambasador__info-item">
                    <div class="ambasador__info-title">Mentoring and advice: 
                    </div>
                    <div class="ambasador__info-text">Experienced Bavarsis executives can serve as mentors and provide valuable advice on managing and growing your business. Their experience can help you avoid mistakes and achieve your goals more successfully. 
                    </div>
                </div>
                <div class="ambasador__info-item">
                    <div class="ambasador__info-title">Access to resources: 
                    </div>
                    <div class="ambasador__info-text">Getting to know the management of companies can provide access to resources, such as investments, technology or information networks, that can be useful to your business. 
                    </div>
                </div>
                <div class="ambasador__info-item">
                    <div class="ambasador__info-title">Reputation and trust: 
                    </div>
                    <div class="ambasador__info-text">Establishing good relationships with Bavarsis team leaders can help strengthen your reputation and build trust within the business community. 
                    </div>
                </div>
                <div class="ambasador__info-item">
                    <div class="ambasador__info-title">Individual conference program: 
                    </div>
                    <div class="ambasador__info-text">We are actively ready to take part and create a business atmosphere for our ambassador. You can gather your partners and create an atmosphere for them to discuss Bavarsis. We take care of all the necessary organization. 
                    </div>
                </div>
                <div class="ambasador__info-item">
                    <div class="ambasador__info-title">Bavarsis showroom (office): 
                    </div>
                    <div class="ambasador__info-text">Opening a Bavarsis showroom can provide your team with great opportunities for growth, especially if planned and executed correctly. Here are a few benefits that a showroom can offer. </div>
                </div>
            </div>

            <div class="ambasador__title _mb24">Reward: </div>

            <ul class="ambasador__list _mb70">
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__list-item-wrapper">
                        <div class="ambasador__text">Ama session  </div>
                        <div class="ambasador__price">up to 100 $</div>
                    </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__list-item-wrapper">
                        <div class="ambasador__text">Holding an offline conference </div>
                        <div class="ambasador__price">up to 500 $</div>
                    </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__list-item-wrapper">
                        <div class="ambasador__text">Opening an office </div>
                        <div class="ambasador__price">up to 1000 $</div>
                    </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__list-item-wrapper">
                        <div class="ambasador__text">Article writing </div>
                        <div class="ambasador__price">up to 50 $</div>
                    </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__list-item-wrapper">
                        <div class="ambasador__text">Publication about the company on personal social networks  </div>
                        <div class="ambasador__price">up to 30 $</div>
                    </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__list-item-wrapper">
                        <div class="ambasador__text">Video review of the company on YouTube </div>
                        <div class="ambasador__price">up to 1000 $</div>
                    </div>
                </li>
                <li class="ambasador__list-item ambasador__list-item--purple">
                    <div class="ambasador__list-item-wrapper">
                        <div class="ambasador__text">Other activities that will increase the company’s awareness </div>
                        <div class="ambasador__price">discussed individually </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>

    <div class="modal _hidden" id="CabinetModalSettings">
        <div class="modal__shadow"></div>
        <div class="modal__content-ambasador">
            <div class="modal__close"></div>

            <form action="page.php=ambassador.html" method="POST" class="form-a">
                <span class="form-a__title _pink">Become an Ambassador of Bavarsis </span>
                <span class="form-a__text">Request form for participation in the Bavarsis Ambassador Program. <br>Fill in the form, please.<br>
                    Our team will contact you as soon as they receive your application. </span>
                <div class="settings__personal-inputs">
                    <input type="email" value="" required placeholder="E-Mail" name="email" class="_semi _f17 _pink settings__input">
                    <input type="text" value="" required placeholder="Name" name="userName" class="_semi _f17 _pink settings__input">
                    <input type="text" value="" required placeholder="Your telegram" name="userTelegram" class="_semi _f17 _pink settings__input">
                    <input type="text" value="" placeholder="Your another socaials" name="userAnother" class="_semi _f17 _pink settings__input">
                   
                    <textarea name="us_text" required placeholder="Tell us about you and why you want to become Bavarsis ambassador?" class="_semi _f17 _pink settings__input" id="" cols="30" rows="5"></textarea>
                    <button type="submit" name="send_amb_req" value="1" class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white" style="width: 100%; max-width: unset;" data-hover="Send" id="AmbasadorSubmit"><div>Send </div></button>
                </div>
            </form>
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
                <div class="footer-new__item-title"><a href="cdn-cgi/l/email-protection.html#d695b9b9a6b3a4b7a2bfb9b896b4b7a0b7a4a5bfa5f8b5b9bb" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="c685a9a9b6a3b4a7b2afa9a886a4a7b0a7b4b5afb5e8a5a9ab">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - we are open to collaboration. If you have something to offer for us, feel free to do so. We will definitely consider your offer. 
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#a5eac3c3ccc6c0e5c7c4d3c4d7d6ccd68bc6cac8" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="602f06060903052002011601121309134e030f0d">[email&#160;protected]</span></a>

                </div>
                <div class="footer-new__item-text">
                    - our experts can help with any issue and redirect your enquiry to the right Bavarsis department. 

                </div>
            </div>
        </div>
        <div class="footer-new__double">
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#b8ebdddbcdcad1ccc1f8dad9ced9cacbd1cb96dbd7d5" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="d784b2b4a2a5bea3ae97b5b6a1b6a5a4bea4f9b4b8ba">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - to avoid fraudulent activity from hackers and others, we always keep an eye on our partners.                    
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#ce81b9aba083a7baada6aba2a28eacafb8afbcbda7bde0ada1a3" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="86c9f1e3e8cbeff2e5eee3eaeac6e4e7f0e7f4f5eff5a8e5e9eb">[email&#160;protected]</span></a>
                    
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
            <a href="cdn-cgi/l/email-protection.html#5f0c2a2f2f302d2b1f3d3e293e2d2c362c713c3032" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="d685a3a6a6b9a4a296b4b7a0b7a4a5bfa5f8b5b9bb">[email&#160;protected]</span></a>

        </div>
        <div class="footer-new__item-text">
            - our technical department, will help make your time on Bavarsis comfortable. If you notice any problems with Bavarsis, please let us know. If you have any wishes about the work of our company, please write to us and we will be glad to hear from you. 

        </div>
    </div>
    <div class="footer-new__item">
        <div class="footer-new__item-title">
            <a href="cdn-cgi/l/email-protection.html#f9bf909798979a9cb99b988f988b8a908ad79a9694" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="387e515659565b5d785a594e594a4b514b165b5755">[email&#160;protected]</span></a>
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
    const baButton = document.querySelector('#BecameAmbasador');
    const baModal = document.querySelector('#CabinetModalSettings');

    if(baButton && baModal){
        baButton.addEventListener('click', ()=>{
            baModal.classList.toggle('_hidden');
        })
    }


</script>

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
