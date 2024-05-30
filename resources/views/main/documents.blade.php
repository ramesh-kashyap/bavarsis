
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


        <div class="document__title">
            <div class="document__title-main _light-grey _one _f64">
                 Our permits             </div>
            <div class="document__subtitle _light-grey _f28 _fw200">
                List of necessary permits for cooperation with us 
            </div>
        </div>

        <style>.grid_docs_box{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
gap: 20px;
align-items: center;
justify-items: flex-start;
            }

            @media only screen and (max-width: 650px) {
                .grid_docs_box{
grid-template-columns: 1fr 1fr;

            }
}

        </style>

        <div class="grid_docs_box">


        <ul class="document__links">
            <li class="document__link-wrapper">
                <a class="document__link" href="Consents_Bavarsis%20(1).pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Consents Australia </span>
                </a>
            </li>
            <li class="document__link-wrapper">
                <a class="document__link" href="Minutes%20of%20Meeting%20(1).pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Minutes of meeting Australia </span>
                </a>
            </li>
            <li class="document__link-wrapper">
                <a class="document__link" href="Share%20Certificate.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Certificates Australia </span>
                </a>
            </li>
            <li class="document__link-wrapper">
                <a class="document__link" href="Certificate%20of%20Registration.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Company Registration Australia </span>
                </a>
            </li>
        </ul>

        <ul class="document__links">
            <li class="document__link-wrapper">
                <a class="document__link" href="Cash%20Management%20License%20Hong%20Kong.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Cash Management License Hong Kong </span>
                </a>
            </li>
            <li class="document__link-wrapper">
                <a class="document__link" href="Company%20Certificate%20Hong%20Kong.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Company Certificate Hong Kong </span>
                </a>
            </li>
            <li class="document__link-wrapper">
                <a class="document__link" href="Company%20Registration%20Hong%20Kong.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Company Registration Hong Kong </span>
                </a>
            </li>
          
        </ul>

        <ul class="document__links">
            <li class="document__link-wrapper">
                <a class="document__link" href="BAVARSIS%20GLOBAL%20LIMITED/BAVARSIS%20GLOBAL%20LIMITED.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Registration United Kingdom</span>
                </a>
            </li>
            <li class="document__link-wrapper">
                <a class="document__link" href="BAVARSIS%20GLOBAL%20LIMITED/CERTIFICATE.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Certificates United Kingdom </span>
                </a>
            </li>
            <li class="document__link-wrapper">
                <a class="document__link" href="BAVARSIS%20GLOBAL%20LIMITED/MEMARTS.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Memarts Unites Kingdom </span>
                </a>
            </li>
          
        </ul>
       </div>

       
     
        <div class="document__subtitle _light-grey _f28 _fw200">
            
             Financial reports:         </div>
        <ul class="document__links" style="margin-top: 17px;">
            <li class="document__link-wrapper">
                <a class="document__link" href="Bavarsis%202023%20financial_report.pdf" target="_blank">
                    <img class="document__link-img" src="{{asset('')}}assets/img/icons/chain.svg" alt="">
                    <span class="document__link-text">Bavarsis 2023 Financial Report </span>
                </a>
            </li>
        
        </ul>
    


        <div class="document__content">
            <div class="text">
                
                <div class="text__main _f18 _fw100 _light-grey">Bavarsis Pty Ltd (&#039;Bavarsis,&#039; &#039;we,&#039; &#039;us,&#039; or &#039;our&#039;) places a paramount importance on safeguarding sensitive and confidential information entrusted to us by our valued clients, esteemed partners, dedicated employees, and other stakeholders. This comprehensive Confidentiality Policy outlines our unwavering commitment to preserving the confidentiality, integrity, and security of all proprietary and private information, delineates the measures we employ to protect confidential data, and explicates the pivotal responsibilities assigned to individuals who access and manage such privileged information. 
                </div>
            </div>
            <div class="text">
                <div class="text__title _one _f18 _light-grey">1. Scope </div>
                <div class="text__main _f18 _fw100 _light-grey">DashbThis policy enshrines the principles and practices that apply to every facet of our organization. All employees, contractors, third-party vendors, and any other entities associated with Bavarsis, who are exposed to or entrusted with confidential information, must unequivocally adhere to the stipulations herein.oard 
                </div>
            </div>
            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    2. Definition of Confidential Information 

                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    Confidential information constitutes a diverse array of data, knowledge, or intelligence, irrespective of its form, that has not been disseminated publicly and is deemed to possess intrinsic value to Bavarsis or its discerning stakeholders. This encapsulates, without limitation: 
<br><br>
Intrinsic financial data, encompassing investment strategies, portfolio particulars, and comprehensive performance assessments The personal and contact information of clients, partners, and diligent employees. Forecasts, business blueprints, innovative marketing methodologies, and proprietary software that engender our competitive edge Any exclusive non-public information germane to Bavarsis&#039; operations, intricate transactions, and closely guarded trade secrets 
                </div>
            </div>





            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    3. Responsibilities 


                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    Management Stalwarts: Senior management assumes the vanguard in nurturing a culture of confidentiality, ensuring that an indomitable framework is erected to uphold the sanctity of confidential information. 
<br><br>
Dedicated Workforce: Every member of our workforce bears the solemn duty of upholding the inviolability of the information they encounter, be it in the course of their employment at Bavarsis or beyond. 
<br><br>
Third-Party Collaborators: Vendors and partners, who are privy to confidential information, shall demonstrate their unwavering commitment by formalizing their solemn pledge through the execution of a non-disclosure agreement. They shall adhere to the tenets articulated within this policy. 

<br><br>

Referral income is the income a partner receives for active work. Bavarsis reserves the right to modify the referral programme of the partner in case the partner does not show activity. Bavarsis reserves the right to disconnect a partner from the referral programme Disconnection from the referral programme is made by the decision of Bavarsis. In case a partner will be disconnected from the referral programme, he/she will be notified about it not later than 24 hours in advance by means of an e-mail.

                </div>
            </div>





            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    4. Handling and Protection of Confidential Information 


                </div>
                <div class="text__main _f18 _fw100 _light-grey">

                                        Referral income is a bonus to an active partner and is accrued at the will of the company.
                    In case a partner does not show active activity, he/she can be disconnected from referral accruals or his/her referral percentage can be reduced.
                    <br><br>
                                       
                    Access Fortification: Access to confidential information shall be judiciously conferred on a need-to-know basis, and shall be restricted to individuals who have been expressly authorized. 
<br><br>
Transmission and Sanctity of Storage: The dissemination and retention of confidential information must be executed through the application of secure channels, which include encrypted conduits and safeguarded servers. 
<br><br>
Vigilant Physical Security: Physically archived copies of confidential information shall be vigilantly stored within impregnable precincts, their accessibility closely curtailed. 
<br><br>
Guardianship of Electronic Devices: Electronic devices that are repositories of confidential information, including laptops, mobile devices, and analogous apparatus, shall be fortified by robust passwords and encrypted measures. 

                </div>
            </div>




            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    5. Non-Disclosure Agreements


                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    Every employee, contractor, and third-party associate granted access to confidential information shall be mandated to solemnize their unwavering allegiance by affixing their signature to a non-disclosure agreement. This formal pledge signifies their unwavering commitment to preserving the sanctity and confidentiality of the privileged information. 

                </div>
            </div>




            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    6. Reporting Unauthorized Access or Disclosure 

                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    Instances, whether suspected or substantiated, of unauthorized access, utilization, or dissemination of confidential information must be promptly communicated to the designated authority within Bavarsis. 

                </div>
            </div>




            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    7. Training and Awareness 

                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    Regularly conducted training and awareness programs shall equip employees and stakeholders with the requisite knowledge and insight, fostering an acute comprehension of the significance of confidentiality and engendering an innate mastery of protocols governing the judicious handling of confidential information. 

                </div>
            </div>




            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    8. Compliance with Legal and Regulatory Mandates 


                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    Bavarsis maintains an unwavering allegiance to all prevailing statutes and regulations governing the protection of confidential information, inclusive of data privacy mandates and the rigorous tenets delineated within the financial industry. 

                    <br>

                                        Users can only withdraw funds from their Bavarsis account if those funds were initially deposited into the designated deposit plan. The serves as a secure repository for users' funds, allowing for efficient and organized management of financial transactions. By restricting withdrawals to funds deposited into this plan, Bavarsis aims to uphold the integrity and reliability of our platform, safeguarding the interests of both users and the company.
                                    </div>
            </div>




            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    9. Enforcement 


                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    Instances of non-compliance with this inviolable Confidentiality Policy may warrant the imposition of corrective measures, spanning the spectrum from disciplinary actions to the possible termination of employment or contractual commitments. 

                </div>
            </div>





            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    10. Policy Review and Evolution 


                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    A systematic review of this policy shall be conducted at periodic intervals to ensure its continued relevance, effectiveness, and resonance. Any updates or enhancements shall be diligently communicated to all pertinent stakeholders. 
                </div>
            </div>


            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    Contact Information 



                </div>
                <div class="text__main _f18 _fw100 _light-grey">
                    For any queries, clarifications, or concerns related to this Confidentiality Policy, kindly direct your correspondence to: Contact Email. 


                </div>
            </div>


            <div class="text">
                <div class="text__title _one _f18 _light-grey">
                    By steadfastly adhering to the principles encapsulated within this all-encompassing Confidentiality Policy, we fortify our pursuit of nurturing trust and confidence amongst our esteemed clients, revered partners, and cherished stakeholders. Your unwavering reliance upon us, as custodians of confidential information, is pivotal to our mutual success and prosperity. 


                </div>
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
                <div class="footer-new__item-title"><a href="cdn-cgi/l/email-protection.html#195a7676697c6b786d707677597b786f786b6a706a377a7674" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="7e3d11110e1b0c1f0a1711103e1c1f081f0c0d170d501d1113">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - we are open to collaboration. If you have something to offer for us, feel free to do so. We will definitely consider your offer. 
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#7d321b1b141e183d1f1c0b1c0f0e140e531e1210" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="c788a1a1aea4a287a5a6b1a6b5b4aeb4e9a4a8aa">[email&#160;protected]</span></a>

                </div>
                <div class="footer-new__item-text">
                    - our experts can help with any issue and redirect your enquiry to the right Bavarsis department. 

                </div>
            </div>
        </div>
        <div class="footer-new__double">
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#c596a0a6b0b7acb1bc85a7a4b3a4b7b6acb6eba6aaa8" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="efbc8a8c9a9d869b96af8d8e998e9d9c869cc18c8082">[email&#160;protected]</span></a>
                </div>
                <div class="footer-new__item-text">
                    - to avoid fraudulent activity from hackers and others, we always keep an eye on our partners.                    
                </div>
            </div>
            <div class="footer-new__item">
                <div class="footer-new__item-title">
                    <a href="cdn-cgi/l/email-protection.html#aae5ddcfc4e7c3dec9c2cfc6c6eac8cbdccbd8d9c3d984c9c5c7" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="e7a8908289aa8e93848f828b8ba78586918695948e94c984888a">[email&#160;protected]</span></a>
                    
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
            <a href="cdn-cgi/l/email-protection.html#e8bb9d9898879a9ca88a899e899a9b819bc68b8785" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="184b6d6868776a6c587a796e796a6b716b367b7775">[email&#160;protected]</span></a>

        </div>
        <div class="footer-new__item-text">
            - our technical department, will help make your time on Bavarsis comfortable. If you notice any problems with Bavarsis, please let us know. If you have any wishes about the work of our company, please write to us and we will be glad to hear from you. 

        </div>
    </div>
    <div class="footer-new__item">
        <div class="footer-new__item-title">
            <a href="cdn-cgi/l/email-protection.html#7a3c13141b14191f3a181b0c1b0809130954191517" target="_blank" style="color: inherit;"><span class="__cf_email__" data-cfemail="02446b6c636c6167426063746370716b712c616d6f">[email&#160;protected]</span></a>
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



<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 16266537;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/16266537/" rel="nofollow">{$arr_lang[512]} </a>,{$arr_lang[513]}  <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">{$arr_lang[514]} </a></noscript>
<!-- End of LiveChat code -->





</body>
</html>
