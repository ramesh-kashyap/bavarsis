
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bavarsis</title>
        <meta name="Description" content="The world`s most powerful crypto tool">
    <meta name="Keywords" content="Bavarsis, bavarsis, Crypto, arbitrage, cryptoarbitrage, trading, cryptotrading, investments, cryptoinvestments, crypto-arbitrage, crypto-investments, owen mitchell">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Russo+One&display=swap&_v=20230827163835" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('')}}assets/css/style121312312223.css">
                        <link rel="icon" type="image/x-icon" href="{{asset('')}}assets/img/icons/fav.png">
        <link
                rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css?_v=20230827163835"
        />

<style type="text/css">

@media screen and (max-width: 1440px){
    .cabinet-menu__wrapper {
max-width: 795px;
}
}

.cabinet-menu__image {
width: 25px;
height: 25px;

}

.cabinet-menu__image{
    background-size: 20px 20px !important;
}

.cabinet-menu__item{
    gap: 7px;
}

.cabinet-menu__wrapper{
    gap: 4px;
}

.cabinet-menu__image--my-team {
background-image: url("{{asset('')}}assets/img/icons/team.svg");
background-size: auto;
}

.success_info{
    padding: 20px 12px;
border-radius: 10px;
width: 98%;
background: #d7a3e6;
    color: #fff;
    font-size: 14px;
}

.new-form-table{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 15px;
}

.btn_copy_ref{
    transition: all 0.7s ease 0s;
}

.show_copied_p{
    transition: all 0.7s ease 0s;
}

.cryptobox__submit--deposit222 {
background-color: #d7a3e5 !important;
color: #fff !important;
}


.danger_info{
    padding: 20px 12px;
    border-radius: 10px;
    width: 98%;
    background: rgb(116, 26, 26);
    color: #fff;
    font-size: 14px;
}

input::placeholder {
  color: #eee !important;
  opacity: 0.5 !important;
}

.pin-inputs-wrapper{
    display: flex;
    flex-direction: row;
    gap: 5px;
    padding: 3px;
}

.pin-input-new{
    width: 32px;
    height: 30px;
    border-radius: 4px;
    padding: 10px;
    border: 1px solid gray;
}

@media screen and (max-width: 600px){
    .wallet__transactions-head{
        justify-content: center;
    }
}

</style>


<style>
    .deposit {
  padding: 10px 15px 0;
  gap: 5px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  max-width: 500px;
    width: 100%;
  margin: auto 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  background-color: #222222;
  border-radius: 20px;
  border: 1px solid rgb(0, 0, 0);
  box-shadow: rgba(0, 0, 0, 0.2) 0px 11px 15px -7px, rgba(0, 0, 0, 0.14) 0px 24px 38px 3px, rgba(0, 0, 0, 0.12) 0px 9px 46px 8px;
  overflow-y: auto;
  max-height: 95dvh;
}

.deposit__head {
  padding-inline: 20px;
  padding-top: 10px;
  margin-bottom: 30px;
}

.deposit__content {
  overflow-y: auto;
  padding: 10px 15px 40px;
  gap: 24px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  width: 100%;
  margin: auto 0;
  box-sizing: border-box;
}

.deposit__wrap-text {
  font-family: "Overpass", sans-serif;
  width: 100%;
}

.deposit__input-wrap {
  width: 100%;
}

.deposit__select {
  box-sizing: border-box;
  width: 100%;
  cursor: pointer;
  border-radius: 8px;
  padding: 20px 25px;
  font-size: 1.0625em;
  color: #585858;
  border: 1px solid #50e3c2;
  position: relative;
  background-color: #222222;
  background-size: cover;
  display: flex;
  align-items: center;
  gap: 15px;
}

.deposit__select::after {
  content: "";
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  width: 16px;
  height: 16px;
  background-image: url(../img/icons/arrow-down.png);
  background-position: center;
  background-repeat: no-repeat;
  background-size: contain;
}

.deposit__options {
  box-sizing: border-box;
  position: absolute;
  top: 72px;
  left: 0;
  width: 100%;
  border-radius: 8px;
  border: 1px solid #d7a3e5;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: 20px;
  z-index: 1;
  background-color: #222222;
  max-height: 180px;
    overflow-y: auto;
}

.deposit__qr-block {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  gap: 20px;
  width: 100%;
  box-sizing: border-box;
}

.deposit__qr-info {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 12px;
  width: 100%;
}

.deposit__form {
  max-width: unset !important;
}


.deposit__check {
  width: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: 15px;
}

.deposit__check-item {
  width: 100%;
  border: 1px solid #999999;
  border-radius: 4px;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  gap: 15px;
  padding: 10px;
  box-sizing: border-box;
}

.deposit__check-item-wrapper {
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  box-sizing: border-box;
}

.deposit__check-item--2 {
  justify-content: space-between;
}

.deposit__check-img-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>




    </head>
    <body>

        <div class="content-wrapper">
            <section class="cab-header__ticker cab-header__ticker--mobile">
    <div class="group">
      <div class="row">
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BTC.svg" alt="">
            <span class="ticker_BTCUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ETH.svg" alt="">
            <span class="ticker_ETHUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/LTC.svg" alt="">
            <span class="ticker_LTCUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/DOGE.svg" alt="">
            <span class="ticker_DOGEUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BNB.svg" alt="">
            <span class="ticker_BNBUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ADA.svg" alt="">
            <span class="ticker_ADAUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/SHIB.svg" alt="">
            <span class="ticker_SHIBUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/SOL.svg" alt="">
            <span class="ticker_SOLUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/XRP.svg" alt="">
            <span class="ticker_XRPUSDT"></span>
        </div>
        <div class="cab-header__ticker-item _hidden">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/WBNB.svg" alt="">
            <span class="ticker_WBNBUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/VET.svg" alt="">
            <span class="ticker_VETUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/OP.svg" alt="">
            <span class="ticker_OPUSDT"></span>
        </div>
        <div class="cab-header__ticker-item _hidden">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/MNT.svg" alt="">
            <span class="ticker_MNTUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ARB.svg" alt="">
            <span class="ticker_ARBUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/AAVE.svg" alt="">
            <span class="ticker_AAVEUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BSV.svg" alt="">
            <span class="ticker_BSWUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/STX.svg" alt="">
            <span class="ticker_STXUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/USDC.svg" alt="">
            <span class="ticker_USDCUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/TRX.svg" alt="">
            <span class="ticker_TRXUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/MATIC.svg" alt="">
            <span class="ticker_MATICUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/DOT.svg" alt="">
            <span class="ticker_DOTUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BCH.svg" alt="">
            <span class="ticker_BCHUSDT"></span>
        </div>
        <div class="cab-header__ticker-item">
            <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ETC.svg" alt="">
            <span class="ticker_ETCUSDT"></span>
        </div>
      </div>
  </div>
      
  <div class="image-holder">
    <div class="bk-image"></div>
  </div>
</section>
<div class="cab-header">
    <a href="https://bavarsis.com/"><img src="{{asset('')}}assets/img/icons/logo-main.svg" alt="" class="cab-header__logo"></a>
    <section class="cab-header__ticker cab-header__ticker--desktop">
        <div class="group">
          <div class="row">
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BTC.svg" alt="">
                <span class="ticker_BTCUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ETH.svg" alt="">
                <span class="ticker_ETHUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/LTC.svg" alt="">
                <span class="ticker_LTCUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/DOGE.svg" alt="">
                <span class="ticker_DOGEUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BNB.svg" alt="">
                <span class="ticker_BNBUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ADA.svg" alt="">
                <span class="ticker_ADAUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/SHIB.svg" alt="">
                <span class="ticker_SHIBUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/SOL.svg" alt="">
                <span class="ticker_SOLUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/XRP.svg" alt="">
                <span class="ticker_XRPUSDT"></span>
            </div>
            <div class="cab-header__ticker-item _hidden">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/WBNB.svg" alt="">
                <span class="ticker_WBNBUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/VET.svg" alt="">
                <span class="ticker_VETUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/OP.svg" alt="">
                <span class="ticker_OPUSDT"></span>
            </div>
            <div class="cab-header__ticker-item _hidden">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/MNT.svg" alt="">
                <span class="ticker_MNTUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ARB.svg" alt="">
                <span class="ticker_ARBUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/AAVE.svg" alt="">
                <span class="ticker_AAVEUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BSV.svg" alt="">
                <span class="ticker_BSWUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/STX.svg" alt="">
                <span class="ticker_STXUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/USDC.svg" alt="">
                <span class="ticker_USDCUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/TRX.svg" alt="">
                <span class="ticker_TRXUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/MATIC.svg" alt="">
                <span class="ticker_MATICUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/DOT.svg" alt="">
                <span class="ticker_DOTUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/BCH.svg" alt="">
                <span class="ticker_BCHUSDT"></span>
            </div>
            <div class="cab-header__ticker-item">
                <img src="{{asset('')}}assets/img/icons/crypto/svg/normal/ETC.svg" alt="">
                <span class="ticker_ETCUSDT"></span>
            </div>
           
          </div>
      </div>
          
      <div class="image-holder">
        <div class="bk-image"></div>
      </div>
    </section>
    <div class="cab-header__buttons">
        <div class="cab-header__button" id="CabYourBoxes">
            <span class="cab-header__button-text">Your boxes</span>
            <div class="cab-header__button-image cab-header__button-image--box"></div>
        </div>
        <div class="cab-header__button" id="CabReferal">
            <span class="cab-header__button-text">Referral link </span>
            <div class="cab-header__button-image cab-header__button-image--referal"></div>
        </div>
    </div>

<style>
    .alert_notify{
        position: relative;
    }

    .cnt_notifi{
        position: absolute;
        top:0px;
        right:-15px;
        background: #fff;
        border-radius: 100px;
        padding: 5px;
        padding-top: 7px;
        height: 15px;
        min-width: 15px;
        text-align: center;
        vertical-align: middle;
        font-size: 12px;
        color: #333;
    }

    .language__drop-down{
        max-height: 250px;
        overflow-y: auto;
    }

    @media screen and (max-width: 625px){
        .cnt_notifi{
            top: -7px;
            right: -8px;
            border-radius: 50%;
            font-size: 10px;
            z-index: 10;
            height: unset;
            min-width: unset;
        }
    }
</style>

    <div class="cab-header__personal">
        <div class="cab-header__personal-button"></div>
        <div class="cab-header__notify alert_notify" id="AlertButton" >
            <div class="cab-header__notify-image "></div>
            
            <div class="cnt_notifi">0</div>

            <span></span>
        </div>
        <div class="cab-header__personal-info">
            <div class="cab-header__avatar">
                <img src="{{asset('')}}assets/default_ava.jpg" style="border-radius: 100%;" alt="avatar">
            </div>
            <div class="cab-header__name">RITESHK</div>
        </div>
        <img class="img-s img-s--h" src="{{asset('')}}assets/img/icons/crypto/svg/s1.svg" alt="">

        
        <div class="language _one _f16">
            <div class="language__link language__select" style="text-transform: uppercase;">
                en            </div>
            <div class="language__drop-down _hidden">
                <a href="interface?lang=en" class="language__link language__link--inside">
                    EN
                </a>
                <a href="interface?lang=cn" class="language__link language__link--inside">
                    CN
                </a>
                <a href="interface?lang=de" class="language__link language__link--inside">
                    DE
                </a>
                <a href="interface?lang=hi" class="language__link language__link--inside">
                    HI
                </a>
                <a href="interface?lang=it" class="language__link language__link--inside">
                    IT
                </a>
                <a href="interface?lang=pt" class="language__link language__link--inside">
                    PT
                </a>
                <a href="interface?lang=sp" class="language__link language__link--inside">
                    SP
                </a>
                <a href="interface?lang=vn" class="language__link language__link--inside">
                    VN
                </a>

                <a href="interface?lang=bn" class="language__link language__link--inside">
                    BN
                </a>
                <a href="interface?lang=hu" class="language__link language__link--inside">
                    HU
                </a>
                <a href="interface?lang=sl" class="language__link language__link--inside">
                    SL
                </a>
                <a href="interface?lang=cz" class="language__link language__link--inside">
                    CZ
                </a>
                <a href="interface?lang=fr" class="language__link language__link--inside">
                    FR
                </a>
                <a href="interface?lang=jp" class="language__link language__link--inside">
                    JP
                </a>
                <a href="interface?lang=pl" class="language__link language__link--inside">
                    PL
                </a>
                <a href="interface?lang=ro" class="language__link language__link--inside">
                    RO
                </a>
                <a href="interface?lang=ru" class="language__link language__link--inside">
                    RU
                </a>
                <a href="interface?lang=tr" class="language__link language__link--inside">
                    TR
                </a>
                <a href="interface?lang=mn" class="language__link language__link--inside">
                    MN
                </a>
                <a href="interface?lang=kr" class="language__link language__link--inside">
                    KR
                </a>
                <a href="interface?lang=th" class="language__link language__link--inside">
                    TH
                </a>
                
            </div>
        </div>
        
    </div>
</div>
            <div class="wrapper wrapper--cabinet">
                <div class="cabinet-menu">
    <ul class="cabinet-menu__wrapper">
        <li>
            <div><a class="cabinet-menu__item  _active " href="{{route('user.dashboard')}}" data-title="Cabinet">
                    <div class="cabinet-menu__image cabinet-menu__image--crypto-box  _active "></div>Crypto box
                </a></div>
        </li>
        <li>
            <div><a class="cabinet-menu__item " href="{{route('user.Withdraw')}}" data-title="Wallet">
                    <div class="cabinet-menu__image cabinet-menu__image--wallet "></div>Wallet
                </a></div>
        </li>
        <li>
            <div><a class="cabinet-menu__item " href="{{route('user.arbitrage')}}" data-title="Trade">
                    <div class="cabinet-menu__image cabinet-menu__image--trade "></div>Arbitrage                </a></div>
        </li>
        <li>
            <div><a class="cabinet-menu__item " href="{{route('user.referral-team')}}" data-title="Team">
                    <div class="cabinet-menu__image cabinet-menu__image--my-team "></div>My team 
                </a></div>
        </li>
        <li>
            <div><a class="cabinet-menu__item " href="{{route('user.roi-bonus')}}" data-title="Bonus">
                    <div class="cabinet-menu__image cabinet-menu__image--my-bonus "></div>My bonus 
                </a></div>
        </li>
        <li>
            <div><a class="cabinet-menu__item " href="{{route('user.market')}}" data-title="Bonus">
                    <div class="cabinet-menu__image cabinet-menu__image--trade "></div>Market                </a></div>
        </li>
        
        <li>
            <div><a class="cabinet-menu__item " href="{{route('user.spot')}}" data-title="Bonus">
                    <div class="cabinet-menu__image cabinet-menu__image--my-bonus "></div>Spot Trading                </a></div>
        </li>
        
    </ul>

    <div class="swiper-box-wrapper sbw-abs">
        <div class="cabinet-menu__referal-box _hidden" id="MenuText">
            <span class="_f13 _lh1-25 _light-grey">Share your unique referral link, and when your network joins and invests, you earn a valuable crypto bonus. Start referring today to supercharge your investments! Join us now and watch your earnings grow through referrals!  </span>

            <div class="cabinet-menu__referal-info btn-clipboard" data-clipboard-text="https://bavarsis.com/page.php=create?join=RITESHK">
                <span class="_f14 _semi _light-green btn_copy_ref">Your referral link:  https://bavarsis.com/page.php=create?join=RITESHK</span>
                <img src="{{asset('')}}assets/img/icons/copy.svg" alt="copy">
                <span class="_f14 _medium _gray">(Click to copy) </span>
            </div>
           

            
            <div class="cabinet-menu__referal-info">
                <span class="_f14 _semi _pink btn_copy_ref" id="WalletWithdrawalButton_qr">QR-Code</span>
             
            </div>
                
            
        </div>

        <div class="swiper swiper--box" id="MenuSlider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                                
            </div>

            <!-- If we need navigation buttons -->
        </div>
        <div class="swiper-button-prev" id="MenuArrowLeft"></div>
        <div class="swiper-button-next" id="MenuArrowRight"></div>
    </div>
    <div class="modal modal--cabinet _hidden" id="MenuModal">
        <div class="modal__shadow modal__shadow--cabinet">
            <div class="modal__close"></div>
            <div class="swiper swiper--box-modal _hidden" id="MenuModalSlider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                                       
                </div>
    
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev--modal"  id="swiper-button-prev--modal"
                ></div>
                <div class="swiper-button-next swiper-button-next--modal" id="swiper-button-next--modal"></div>
            </div>
            <div class="cabinet-menu__referal-box _hidden" id="MenuModalText">
                <span class="_f13 _lh1-25 _light-grey">Binance Wallet for mobile app tradingIf you own cryptocurrency on another platform or wallet, you can transfer them to your Binance Wallet for trading, or grow your crypto holdings with our suite of services on Bavarsis.  </span>
    
                <div class="cabinet-menu__referal-info btn-clipboard" data-clipboard-text="https://bavarsis.com/page.php=create?join=RITESHK">
                    <span class="_f14 _semi _light-green btn_copy_ref">Your referral link:  https://bavarsis.com/page.php=create?join=RITESHK</span>
                    <img src="{{asset('')}}assets/img/icons/copy.svg" alt="copy">
                    <span class="_f14 _medium _gray ">(Click to copy) </span>
                </div>

                
                <div class="cabinet-menu__referal-info" style="justify-content: center;">
                   
                   <center>
                    <div style="padding: 10px; background: #fff; border-radius: 12px;">
                        <img class="d-block" style="height: 150px;" src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=https://bavarsis.com/page.php=create?join=RITESHK" alt="">
                    </div>
                    </center>
                </div>
                


                
            </div>
        </div>

    </div>
   
    <div class="modal _hidden" id="CabinetModalSettings">
        <div class="modal__shadow"></div>
        <div class="modal__box settings">
            <div class="modal__close"></div>
           <div class="modal__settings" id="ModalSettingsClick">
                <div class="settings__menu">
                    <span class="_one _f18 _upper _pink" data-current="personal">personal info </span>
                    <span class="_one _f18 _upper" data-current="password">change password </span>
                    <span class="_one _f18 _upper" data-current="2fa">2fa</span>
                    <!-- <span class="_one _f18 _upper" data-current="activity">account activity</span> -->
                    <span class="_one _f18 _upper" data-current="wallet">wallet address </span>
                </div>
                <div class="settings__personal-wrapper settings__personal-wrapper--personal" data-current="personal">
                    <div class="settings__personal">
                        <form class="settings__personal-data --settings" action="page.php=wallet" method="POST">
                            <div class="settings__personal-inputs">
                                <input type="text" value ="" placeholder="Name" name="uName1" class="_semi _f17 _pink settings__input">
                                <input type="text" value ="" placeholder="Surname" name="uName2" class="_semi _f17 _pink settings__input">
                                <input type="text" value ="7823676752" placeholder="+61 0000 0000 00" name="uPhone" class="_semi _f17 _pink settings__input">
                                <input type="text" value ="apollinec9@gmail.com" disabled class="_semi _f17 _pink settings__input">
                            </div>
                            <button type="submit" name="upd_profile" value="1" class="_upper _one _f17 settings__accept cryptobox__submit--deposit222">save changes </button>
                        </form>
                        <div class="settings__personal-photo" style="align-items: center;">
                            <img src="{{asset('')}}/assets/default_ava.jpg" alt="">
                            
                            <form action="https://cdn1.bavarsis.com" enctype="multipart/form-data" method="POST" style="display: none;"> 
                                <input type="file" class="form-control" id="select_ava_btn" name="filename">
                                <button type="submit" id="upd_ava_btn" name="set_avatar" value="14428">Send </button>
                            </form>
                          
                            <span class="_one _f16 _upper _pink change_avatar_class" style="cursor: pointer !important;">CHANGE PROFILE PHOTO </span>

                            <div class="cryptobox__submit-buttons wallet__balance-buttons">
                                <a href="page.php=auth?out" class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white _upper" data-hover="Logout"><div>Logout </div></a>
                            </div>
                        </div>




                    </div>
                    
<style>
    .bazuy3{
        transition: all .7s ease;
    }
    .bazuy3:hover{
        color: #50e3c2;
    }

    @media (max-width: 580px) {
        .btn-clipboard717{
        flex-direction: column !important;
    }
}
</style>

<center>
<div class="cabinet-menu__referal-info btn-clipboard717" style="justify-content: center; background: rgba(215, 163, 230, 0.16); border-radius: 10px; padding: 12px; border: 1px solid #d7a3e5; max-width: max-content;" data-clipboard-text="Bot_9bb536249b14428aad11">
    <span class="_f14 _semi _light-green btn_copy_ref" style="font-size: 15px;"><a href="https://t.me/Bavarsis_bot" target="_blank" style="color: #d7a3e5;">Bavarsis Bot:  https://t.me/Bavarsis_bot</a></span>
    <img src="{{asset('')}}assets/img/icons/copy.svg" alt="copy">
    <span class="_f14 _medium _gray bazuy3" style="font-size: 15px; cursor: pointer;">( Copy Bot key ) </span>
</div>
</center>

                </div>

                <div class="settings__personal-wrapper settings__password-wrapper _hidden" data-current="password">
                    <form class="settings__password" action="page.php=wallet" method="POST">
                        <div class="settings__input-after"><input type="password" name="old_pass" class="_semi _f17 _pink settings__input settings__password-input settings__password-input--current"  data-uncover="1" placeholder="Password">
                        <img src="{{asset('')}}assets/img/icons/eye.svg" class="eye" data-uncover="1" alt=""></div>
                        <div class="decorator"></div>
                        <div class="settings__password-new-repeat">
                            <div class="settings__input-after"><input type="password" name="new_pass" class="_semi _f17 _pink settings__input settings__password-input settings__password-input--new" data-uncover="2" placeholder="New password">
                            <img src="{{asset('')}}assets/img/icons/eye.svg" class="eye" data-uncover="2" alt=""></div>
                            <div class="settings__input-after"><input type="password" name="re_pass" class="_semi _f17 _pink settings__input settings__password-input settings__password-input--repeat" data-uncover="3" placeholder="Repeat password">
                            <img src="{{asset('')}}assets/img/icons/eye.svg" class="eye" data-uncover="3" alt=""></div>
                        </div>
                        <button type="submit" name="upd_pass" value="1" class="_upper _one _f17 settings__accept cryptobox__submit--deposit222">save changes </button>
                    </form>
                </div>


                <div class="settings__personal-wrapper settings__2fa-wrapper _hidden" data-current="2fa">
                    <img src="{{asset('')}}assets/img/icons/2fa.svg" alt="" class="settings__2fa-img-lock _mi">
                    <div class="_one _f18 _upper _tac">2-factor authentication (2fa) </div>
                    <!-- <div class="flipswitch-wrapper _mi">
                        <div class="flipswitch">
                            <input type="checkbox" name="flipswitch" class="flipswitch-cb" id="fs" checked>
                            <label class="flipswitch-label" for="fs">
                                <div class="flipswitch-inner"></div>
                                <div class="flipswitch-switch"></div>
                            </label>

                        </div>
                        <div class="flipswitch__status _one _f18 _upper _white">
                            <div class="flipswitch__on">enabled</div>
                            <div class="flipswitch__off _hidden">disabled</div>
                        </div>
                    </div> -->
                    <center>
                    <form class="settings__password" action="page.php=wallet" method="POST" style="gap: 12px;">
                       
                                        <input name="GAKey" value="DM4KRLNXUDPCBR3O" type="hidden">
                    <a href="https://www.google.com/landing/2step/" target="_blank">Google Authenticator </a><br>
                    <big>DM4KRLNXUDPCBR3O</big><br>
                    
                    <!-- <img src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2FRITESHK%40bavarsis.com%3Fsecret%3DDM4KRLNXUDPCBR3O"> -->
                                <input type="text" name="GACode" style="padding: 18px 23px; text-align: center;" class="_semi _f17 _pink settings__input settings__2fa-input _mi" placeholder="_ _ _ _ _ _">
                <button type="submit" name="upd_2fa" value="1" class="_upper _one _f17 settings__accept cryptobox__submit--deposit222">
                                        activate 2fa 
                                    </button>
           
                </form>
            </center>

                    <!-- <img src="{{asset('')}}assets/img/backgrounds/qur.png" alt="" class="settings__2fa-qr _mi">
                    <a href="" class="settings__2fa-link _pink _f17 _upper _mi">check link protection</a>
                    <div class="_one _f18 _upper _tac">enter 2fa code</div>
                    <input type="text" class="_semi _f17 _pink settings__input settings__2fa-input _mi" placeholder="_ _ _ _ _ _"> -->

                </div>

                <!-- <div class="settings__personal-wrapper settings__activity _hidden" data-current="activity">
                    <div class="_one _upper _f18 _tac _mb20">Account activity</div>
                    <div class="settings__activity-table">
                        <table class="table">
                            <thead class="_bold _f16">
                            <tr class="table__head-wrapper">
                                <th class="table__head _bold _f16 _light-grey">Date:</th>
                                <th class="table__head _bold _f16 _light-grey">IP:</th>
                                <th class="table__head _bold _f16 _light-grey">Device:</th>
                            </tr>
                            </thead>
                            <tbody class="_medium _f16">
                                                            
                            </tbody>
                        </table>
                    </div>
                </div> -->

                <div class="settings__personal-wrapper settings__wallet _hidden" data-current="wallet">
                    <div class="_one _upper _tac _f18 settings__wallet-title">enter wallet address </div>
                    <form class="settings__form-wallet" action="page.php=wallet" method="POST" style="gap: 12px;">

                                                <label for="">Bitcoin</label>
                        <input type="text" name="cur_wallet_head_5" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Litecoin</label>
                        <input type="text" name="cur_wallet_head_6" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Ethereum</label>
                        <input type="text" name="cur_wallet_head_7" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Tether (TRC20)</label>
                        <input type="text" name="cur_wallet_head_8" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Tether (ERC20)</label>
                        <input type="text" name="cur_wallet_head_9" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Doge</label>
                        <input type="text" name="cur_wallet_head_10" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">SHIBA ERC20</label>
                        <input type="text" name="cur_wallet_head_11" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Binance USD</label>
                        <input type="text" name="cur_wallet_head_12" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">TON</label>
                        <input type="text" name="cur_wallet_head_13" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Matic (polygon)</label>
                        <input type="text" name="cur_wallet_head_14" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="">Ripple</label>
                        <input type="text" name="cur_wallet_head_15" value="" class="_semi _f17 _pink settings__input settings__wallet-input">
                                                <label for="" class="_one _f14"> Pin:</label>
                        <input type="text" name="wallet_pin" class="_semi _f17 _pink settings__input settings__wallet-input"">
                        <button type="submit" class="_upper _one _f17 settings__accept cryptobox__submit--deposit222" name="upd_head_wallet" value="1">save changes </button>
                    </form>
                </div>

                <div class="settings__bottom _mi">
                    <div class="decorator"></div>
                  
                </div>
            </div>
    </div>
    </div>
</div>