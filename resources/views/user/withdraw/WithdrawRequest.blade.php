

<div class="alert _hide" id="AlertBlock">
    <div class="alert__head">
        <span class="alert__title">Notification </span>
        <img src="{{asset('')}}assets/img/icons/close.svg" alt="" class="alert__close" id="AlertClose">
    </div>
    <a class="alert__link">
        <span class="alert__link-text close_all_notifi">Mark all as read </span>
    </a>
    <div class="alert__block">
        <span class="alert__block-title">Unread</span>

        
                <!-- <div class="alert__item">
            <div class="alert__item-info">
                <span class="alert__item-title">New referral</span>
                <div class="alert__text-wrapper">
                    <span class="alert__text-left">+1 NEW </span>
                    <span class="alert__text-right">Referral registered</span>
                </div>
            </div>
            <img src="{{asset('')}}assets/img/icons/close.svg" alt="" class="alert__item-close">
        </div>
        <div class="alert__item">
            <div class="alert__item-info">
                <span class="alert__item-title">Referral bonus</span>
                <div class="alert__text-wrapper">
                    <span class="alert__text-left">+10 USD </span>
                    <span class="alert__text-right">Profit from CryptoBox received</span>
                </div>
            </div>
            <img src="{{asset('')}}assets/img/icons/close.svg" alt="" class="alert__item-close">
        </div>
        <div class="alert__item">
            <div class="alert__item-info">
                <span class="alert__item-title">Profit from CryptoBox</span>
                <div class="alert__text-wrapper">
                    <span class="alert__text-left">+10 USD </span>
                    <span class="alert__text-right">Referral bonus received</span>
                </div>
            </div>
            <img src="{{asset('')}}assets/img/icons/close.svg" alt="" class="alert__item-close">
        </div> -->
    </div>
    
    
   
    
    
</div>



   <div class="modal modal--withdrawal _hidden" id="WalletWithdrawalModal_qr">
    <div class="modal__shadow"></div>

    <div class="modal__box modal__box--deposit deposit" style="height: unset;">
        <div class="modal__wallet-wrapper" style="box-sizing: border-box; padding-bottom: 30px;">
            <div class="modal__close"></div>
            <div class="modal__title _upper _one _f18">
        
                <center>
                    <div style="padding: 10px; background: #fff; border-radius: 12px; width: max-content;">
                        <img class="d-block" style="height: 180px;" src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&data=https://bavarsis.com/page.php=create?join=RITESHK" alt="">

                    </div>
                    <p class="_f16">Referral QR code for registration</p>
                    </center>
        </div>
    </div>



</div>
</div>

   


<div class="wallet"><div class="wallet__left"><style>.deposit__check-text{word-break: break-all;}</style><div class="wallet__balance"><!-- <div class="wallet__balance-info"><div class="_one _f28">Balance:</div><div class="wallet__balance-info-bottom"><img src="{{asset('')}}assets/img/icons/crypto/pink/ada.png" alt="ada"><span class="_semi _f32">USDT</span><span class="_bold _f36">0.00</span></div></div> --><div class="wallet__balance-info"><div class="_one _f28">Balance :</div><div class="wallet__balance-select"><div class="wallet__history-select-text WalletMain"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""><span class="dropdown__choose dropdown__choose--left _f32 _one">USD 0.00 </span></div><div class="wallet__history-select-options _hidden WalletMenu _one"><label class="wallet__history-select-option WalletOptions"><input type="radio" name="history" id="" class="_hidden" checked><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/crypto/svg/normal/BTC.svg" alt=""><span class="wallet__option-span wallet__option-span--1 _light-grey">BTC 0.00</span></label><label class="wallet__history-select-option WalletOptions"><input type="radio" name="history" id="" class="_hidden"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/crypto/svg/normal/ETH.svg" alt=""><span class="wallet__option-span wallet__option-span--2 _light-grey">ETH 0.00</span></label><label class="wallet__history-select-option WalletOptions"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/crypto/svg/normal/LTC.svg" alt=""><span class="wallet__option-span wallet__option-span--3 _light-grey">LTC 0.00</span><input type="radio" name="history" id="" class="_hidden"></label><label class="wallet__history-select-option WalletOptions"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/crypto/svg/normal/USDT.svg" alt=""><span class="wallet__option-span wallet__option-span--3 _light-grey">USDT 0.00</span><input type="radio" name="history" id="" class="_hidden"></label></div></div></div><div class="wallet__balance-buttons-wrapper"><div class="cryptobox__submit-buttons wallet__balance-buttons"><div class="button cryptobox__submit cryptobox__submit--calc  _one _f17 _pink _upper" data-hover="make deposit" id="WalletDepositButton"><div>make deposit </div></div><div class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white _upper" data-hover="withdrawal" id="WalletWithdrawalButton"><div>withdrawal </div></div></div></div></div><div class="decorator decorator--wallet-desktop"></div><style>.wallet__forms{display: grid;grid-template-columns: repeat(auto-fit, minmax(222px, 1fr));}@media screen and (min-width: 0px) and (max-width: 1920px){.wallet__form-item{max-width: unset;}}</style><div class="wallet__forms _one"><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency5"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BTC.svg" alt="ada"><span class="_f16">Bitcoin:</span><span class="_semi _f22">0.000000<small>&nbsp;BTC</small></span><div class="wallet__form-search" data-target="ChangeCurrency5"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency5"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_5" data-attr-wiw="5" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="5" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="5" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_5">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency6"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/LTC.svg" alt="ada"><span class="_f16">Litecoin:</span><span class="_semi _f22">0.000000<small>&nbsp;LTC</small></span><div class="wallet__form-search" data-target="ChangeCurrency6"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency6"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_6" data-attr-wiw="6" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="6" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="6" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_6">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency7"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ETH.svg" alt="ada"><span class="_f16">Ethereum:</span><span class="_semi _f22">0.000000<small>&nbsp;ETH</small></span><div class="wallet__form-search" data-target="ChangeCurrency7"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency7"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_7" data-attr-wiw="7" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="7" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="7" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_7">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency8"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada"><span class="_f16">Tether (TRC20):</span><span class="_semi _f22">0.00<small>&nbsp;USDT</small></span><div class="wallet__form-search" data-target="ChangeCurrency8"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency8"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_8" data-attr-wiw="8" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="8" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="8" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_8">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency9"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada"><span class="_f16">Tether (ERC20):</span><span class="_semi _f22">0.00<small>&nbsp;USDT</small></span><div class="wallet__form-search" data-target="ChangeCurrency9"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency9"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_9" data-attr-wiw="9" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="9" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="9" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_9">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency10"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/DOGE.svg" alt="ada"><span class="_f16">Doge:</span><span class="_semi _f22">0.000000<small>&nbsp;DOGE</small></span><div class="wallet__form-search" data-target="ChangeCurrency10"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency10"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_10" data-attr-wiw="10" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="10" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="10" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_10">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency11"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/SHIB.svg" alt="ada"><span class="_f16">SHIBA ERC20:</span><span class="_semi _f22">0.000000<small>&nbsp;SHIB</small></span><div class="wallet__form-search" data-target="ChangeCurrency11"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency11"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_11" data-attr-wiw="11" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="11" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="11" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_11">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency12"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BUSD.svg" alt="ada"><span class="_f16">Binance USD:</span><span class="_semi _f22">0.000000<small>&nbsp;BUSD</small></span><div class="wallet__form-search" data-target="ChangeCurrency12"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency12"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_12" data-attr-wiw="12" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="12" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="12" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_12">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency13"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/TON.svg" alt="ada"><span class="_f16">TON:</span><span class="_semi _f22">0.000000<small>&nbsp;TON</small></span><div class="wallet__form-search" data-target="ChangeCurrency13"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency13"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_13" data-attr-wiw="13" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="13" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="13" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_13">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency14"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/MATIC.svg" alt="ada"><span class="_f16">Matic (polygon):</span><span class="_semi _f22">0.000000<small>&nbsp;MATIC</small></span><div class="wallet__form-search" data-target="ChangeCurrency14"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency14"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_14" data-attr-wiw="14" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="14" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="14" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_14">ACCEPT </button></form></div></div><div class="wallet__pair"><div class="wallet__form-item" id="ChangeCurrency15"><div class="wallet__form-item-prev"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/XRP.svg" alt="ada"><span class="_f16">Ripple:</span><span class="_semi _f22">0.000000<small>&nbsp;XRP</small></span><div class="wallet__form-search" data-target="ChangeCurrency15"><img src="{{asset('')}}assets/img/icons/search-grey.svg" alt="search"><span class="_medium _f12 _light-grey">Currency settings </span></div></div><form action="page.php=wallet" method="POST" class="wallet__form _hidden"><img src="{{asset('')}}assets/img/icons/cross.png" alt="" data-target="ChangeCurrency15"><div class="wallet__form-input"><label for="" class="_one _f14">Wallet :</label><input type="text" name="cur_wallet_15" data-attr-wiw="15" placeholder="Wallet" value="" class="_medium _f10 _white"></div><div class="wallet__form-input"><label for="" class="_one _f14">Pin:</label><input type="text" name="cur_wallet_pin" data-attr-wiw="15" placeholder="_ _ _ _" class="_medium _f10 _white pin-revolution RealInput" style="display: none"><div class="pin-inputs-wrapper"><input type="text" maxlength="1" name="pin_1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"><input type="text" maxlength="1" name="pin_4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="start__input start__input--pin _semi _f17 _pink settings__input pin-input-new" placeholder="_"></div></div><button type="submit" name="upd_wallet_cab" value="15" class="_one _f10 _upper wallet__submit cryptobox__submit--deposit222 btn_cab_wallet_15">ACCEPT </button></form></div></div></div></div><div class="decorator decorator--wallet-mobile"></div><div class="wallet__right"><div class="wallet__transactions"><div class="wallet__transactions-head" style="flex-wrap: wrap; gap: 15px;"><span class="_one _f16">Transaction History </span><div class="bonus__milestone-search _one _f16 _upper "><form action="page.php=wallet" method="POST" class="new-form-table"><!-- <div class="_light-grey">choose:</div> --><div class="bonus__milestone-drop BonusMilestoneMain"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/allM.svg" alt=""><!-- <span class="dropdown__choose _pink"> --><span class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="padding: 5px 15px; font-size: 12px;"><!-- <img class="arrow" src="{{asset('')}}assets/img/icons/search.svg" alt="">--> choose:</span></div><div class="bonus__milestone-drop-menu  BonusMilestoneMenu _hidden"><label for="table-radio-1" class="bonus__milestone-drop-item BonusMilestoneOptions imet_click_filter_oper" data-attr-status="0"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/allM.svg" alt=""><div>All</div><input type="radio" name="opers_filter" value="1" id="table-radio-1" checked style="display: none"></label><label for="table-radio-2" class="bonus__milestone-drop-item BonusMilestoneOptions imet_click_filter_oper" data-attr-status="0"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/allM.svg" alt=""><div>Deposit profit</div><input type="radio" name="opers_filter" value="2" id="table-radio-2"  style="display: none"></label><label for="table-radio-3" class="bonus__milestone-drop-item BonusMilestoneOptions imet_click_filter_oper" data-attr-status="0"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/allM.svg" alt=""><div>Referral profit</div><input type="radio" name="opers_filter" value="3" id="table-radio-3"  style="display: none"></label><label for="table-radio-4" class="bonus__milestone-drop-item BonusMilestoneOptions imet_click_filter_oper" data-attr-status="0"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/allM.svg" alt=""><div>Withdraw</div><input type="radio" name="opers_filter" value="4" id="table-radio-4"  style="display: none"></label><label for="table-radio-5" class="bonus__milestone-drop-item BonusMilestoneOptions imet_click_filter_oper" data-attr-status="0"><img class="dropdown__choose-img" src="{{asset('')}}assets/img/icons/allM.svg" alt=""><div>Bonus</div><input type="radio" name="opers_filter" value="5" id="table-radio-5"  style="display: none"></label></div><label for="submitSelect" style="cursor: pointer;"><input type="submit" class="submit send_btn_filter" name="oper_filter_cab" value="1" id="submitSelect" style="display: none;"><!-- <div class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white _upper" data-hover="Apply" id="WalletWithdrawalButton"><div>Apply </div></div> --></label></form></div></div><div class="wallet__transactions-info"><script type="text/javascript" src="js/lists.js"></script><table class="list table table_cab_opers"><thead><tr><th class="header"></th><th class="header"></th><th class="header"><!-- <a href="page.php=wallet?sort=oTS1"> --><!-- </a> --></th><th class="header"></th><th class="header"><!-- <a href="page.php=wallet?sort=oState"> --><!-- </a> --></th><th class="header"></th></tr></thead><tr class="odd" align="left"><tr class="table__item-wrapper"><td class="table__item table__item--transaction-name"><a href="page.php=wallet?payto=TGJaMpkboM6dFg7s5pjQzaeu6Y5MFdcdU3&ps=8&sum_in=100.000000" class="table__item-inner table__item-inner--left" style="color: #fff;"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="notWhiteActually"><span class="wallet__item-name _medium _f14">Tether (TRC20)<br><b>Add funds</b></span></a></td><td class="table__item table__item--transaction-action"><div class="table__item-inner table__item-inner--right"><span class="_light-green">100.000000</span><img src="{{asset('')}}assets/img/icons/up-green.png" alt=""></div></td><td class="table__item table__item--transaction-date">today 05:11<br><span class="cl_light_blue" style="color: rgb(233, 153, 49);">Pending </span></td></tr></tr></table><br></div><!-- <div class="wallet__transactions-pages"><img src="{{asset('')}}assets/img/icons/arrow-left.svg" alt="left"><span class="_medium _f16">22/100</span><img src="{{asset('')}}assets/img/icons/arrow-right.svg" alt="right"></div> --></div></div></div></div></div><div class="modal modal--deposit _hidden" id="WalletDepositModal"><div class="modal__shadow"></div><div class="deposit "><div class="deposit__head"><img src="{{asset('')}}assets/img/icons/logo-main.svg" alt="" class="deposit__logo"><div class="modal__close"></div></div><div class="deposit__content" id="DepositQR"><div class="modal__title _upper _one _f24">make deposit</div><form action="page.php=wallet" method="POST" class="deposit__form"><div class="deposit__input-wrap"><!-- <span class="deposit__wrap-text deposit__prefix _f13 _light-grey"></span> --><div class="deposit__select WalletModalDepositMain--new"><!-- <img src="" alt=""> --><span class="dropdown__choose">Сhoose currency</span><div class="deposit__options _hidden WalletModalDepositMenu--new"><label class="modal__option WalletModalDepositOption" for="DepositCurrency-5"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BTC.svg" alt="ada">Bitcoin<input type="radio" name="currency" value="5" id="DepositCurrency-5" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-6"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/LTC.svg" alt="ada">Litecoin<input type="radio" name="currency" value="6" id="DepositCurrency-6" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-7"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ETH.svg" alt="ada">Ethereum<input type="radio" name="currency" value="7" id="DepositCurrency-7" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-8"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada">Tether (TRC20)<input type="radio" name="currency" value="8" id="DepositCurrency-8" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-9"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada">Tether (ERC20)<input type="radio" name="currency" value="9" id="DepositCurrency-9" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-10"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/DOGE.svg" alt="ada">Doge<input type="radio" name="currency" value="10" id="DepositCurrency-10" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-11"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/SHIB.svg" alt="ada">SHIBA ERC20<input type="radio" name="currency" value="11" id="DepositCurrency-11" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-12"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BUSD.svg" alt="ada">Binance USD<input type="radio" name="currency" value="12" id="DepositCurrency-12" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-13"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/TON.svg" alt="ada">TON<input type="radio" name="currency" value="13" id="DepositCurrency-13" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-14"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/MATIC.svg" alt="ada">Matic (polygon)<input type="radio" name="currency" value="14" id="DepositCurrency-14" class="_hidden"></label><label class="modal__option WalletModalDepositOption" for="DepositCurrency-15"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/XRP.svg" alt="ada">Ripple<input type="radio" name="currency" value="15" id="DepositCurrency-15" class="_hidden"></label></div></div><!-- <span class="deposit__wrap-text deposit__suffix _f12 _grey">#</span> --></div><input type="text" class="modal__input" placeholder="Deposit amount in currency" name="amount_recive" id="order_search_id2"><button type="submit" name="add_funds" value="1" class="modal__submit _one _f17 _upper" style="margin-top: 30px;">make deposit</button></form></div></div></div><div style="display: none;" class="button cryptobox__submit cryptobox__submit--calc  _one _f17 _pink _upper" data-hover="make deposit" id="WalletDepositButton2"><div>make deposit2 </div></div><div class="modal modal--deposit _hidden" id="WalletDepositModal2"><div class="modal__shadow"></div><div class="deposit"><div class="deposit__head"><img src="{{asset('')}}assets/img/icons/logo-main.svg" alt="" class="deposit__logo"><div class="modal__close"></div></div><div class="deposit__content" id="DepositQR"><div class="modal__title _upper _one _f18">make deposit</div><div class="deposit__qr-block"><img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=" alt=""><div class="deposit__qr-info" style="justify-content: center;"><span class="deposit__qr-head _f18 _white _one">Transfer funds to address</span><span class="deposit__qr-text  _f14 _light-grey _one">The transaction will complete automatically</span></div></div><div class="deposit__check"><div class="deposit__check-item deposit__check-item--1"><img src="{{asset('')}}assets/img/icons/crypto/svg/normal/.svg" alt=""><span class="deposit__check-text"></span></div><div class="deposit__check-item-wrapper"><span class="deposit__wrap-text deposit__prefix _f13 _light-grey" style="text-transform: uppercase;">Deposit amount in currency:</span><div class="deposit__check-item deposit__check-item--2 btn-clipboard88" data-clipboard-text="0.000000" data-copy="true"><span class="deposit__check-text">0.000000 </span><div class="deposit__check-img-wrapper"><img src="{{asset('')}}assets/img/icons/copy.svg" alt=""></div></div></div><div class="deposit__check-item-wrapper"><span class="deposit__wrap-text deposit__prefix _f13 _light-grey" style="text-transform: uppercase;"> wallet address :</span><div class="deposit__check-item deposit__check-item--2 btn-clipboard99" data-clipboard-text="" data-copy="true"><span class="deposit__check-text"></span><div class="deposit__check-img-wrapper"><img src="{{asset('')}}assets/img/icons/copy.svg" alt=""></div></div></div></div></div></div></div><div class="modal modal--withdrawal _hidden" id="WalletWithdrawalModal"><div class="modal__shadow"></div><div class="modal__box modal__box--deposit deposit" style="height: unset;"><div class="modal__wallet-wrapper" style="box-sizing: border-box; padding-bottom: 30px;"><div class="modal__close"></div><div class="modal__title _upper _one _f18">withdrawal</div><style>.out_tag{display: none;}</style><form action="page.php=wallet" method="POST"><div class="modal__select WalletModalWithdrawalMain" style="margin-bottom: 16px;"><span class="dropdown__choose">Сhoose currency</span></div><div class="modal__options _hidden WalletModalWithdrawalMenu"><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="5" for="WithdrawalCurrency-5"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BTC.svg" alt="ada">Bitcoin <span style="color: #50e3c2;">(0.000000 BTC)</span><input type="radio" name="currency" value="5" id="WithdrawalCurrency-5" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="6" for="WithdrawalCurrency-6"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/LTC.svg" alt="ada">Litecoin <span style="color: #50e3c2;">(0.000000 LTC)</span><input type="radio" name="currency" value="6" id="WithdrawalCurrency-6" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="7" for="WithdrawalCurrency-7"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ETH.svg" alt="ada">Ethereum <span style="color: #50e3c2;">(0.000000 ETH)</span><input type="radio" name="currency" value="7" id="WithdrawalCurrency-7" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="8" for="WithdrawalCurrency-8"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada">Tether (TRC20) <span style="color: #50e3c2;">(0.000000 USDT)</span><input type="radio" name="currency" value="8" id="WithdrawalCurrency-8" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="9" for="WithdrawalCurrency-9"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada">Tether (ERC20) <span style="color: #50e3c2;">(0.000000 USDT)</span><input type="radio" name="currency" value="9" id="WithdrawalCurrency-9" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="10" for="WithdrawalCurrency-10"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/DOGE.svg" alt="ada">Doge <span style="color: #50e3c2;">(0.000000 DOGE)</span><input type="radio" name="currency" value="10" id="WithdrawalCurrency-10" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="11" for="WithdrawalCurrency-11"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/SHIB.svg" alt="ada">SHIBA ERC20 <span style="color: #50e3c2;">(0.000000 SHIB)</span><input type="radio" name="currency" value="11" id="WithdrawalCurrency-11" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="12" for="WithdrawalCurrency-12"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BUSD.svg" alt="ada">Binance USD <span style="color: #50e3c2;">(0.000000 BUSD)</span><input type="radio" name="currency" value="12" id="WithdrawalCurrency-12" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="13" for="WithdrawalCurrency-13"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/TON.svg" alt="ada">TON <span style="color: #50e3c2;">(0.000000 TON)</span><input type="radio" name="currency" value="13" id="WithdrawalCurrency-13" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="14" for="WithdrawalCurrency-14"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/MATIC.svg" alt="ada">Matic (polygon) <span style="color: #50e3c2;">(0.000000 MATIC)</span><input type="radio" name="currency" value="14" id="WithdrawalCurrency-14" class="_hidden"></label><label class="modal__option WalletModalWithdrawalOptions select_out_psys" data-num="15" for="WithdrawalCurrency-15"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/XRP.svg" alt="ada">Ripple <span style="color: #50e3c2;">(0.000000 XRP)</span><input type="radio" name="currency" value="15" id="WithdrawalCurrency-15" class="_hidden"></label></div><input type="text" class="modal__input" placeholder="Withdrawal amount" name="amount_send" id="order_search_id3"><input type="text" class="modal__input out_tag" placeholder="Tag" name="amount_send_tag"><small>If you withdraw ETH, Tether ERC20, BTC cryptocurrency, we may charge an additional fee. Please, bear in mind that minimal withdrawal amount for (ETH, Tether ERC20, BTC) is 150 USDT. The rest of the cryptocurrency will be withdrawn without commission.</small><button type="submit" name="send_funds" value="1" class="modal__submit modal__submit--withdrawal _one _f17 _upper">send money</button></form></div></div></div><script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?_v=20230827163835"></script>
<script src="{{asset('')}}assets/js/app.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>


<script>


$(".imet_click_filter_oper").click(function(){
    $(".send_btn_filter")[0].click();
});


$(".WalletDepositButton_rank").click(function(){
    var cur_rank_title = $(this).attr('data-attr-rtitle');
    var cur_rank_rtext = $(this).attr('data-attr-rtext');
    $("#rank_modal_title").html(cur_rank_title);
    $("#rank_modal_text").html(cur_rank_rtext);
});

    $("#date_r_reg_refs_filter").on('click', function() {
        var r_date_from_2 = $(".r_date_from_2").val();
        var r_date_to_2 = $(".r_date_to_2").val();
       
        var timestamp_from = Date.parse(r_date_from_2);
        timestamp_from = timestamp_from / 1000;
        var timestamp_to = Date.parse(r_date_to_2);
        timestamp_to = timestamp_to / 1000;
        

        $('.date_r_reg_refs').each(function(i,elem) {

if( timestamp_from == timestamp_to){
    if (($(this).attr("data-attr-regdate")*1 < timestamp_from) && $(this).attr("data-attr-regdate")*1 > timestamp_to) {
                $(this).css('display', 'none');
            } else {
                $(this).css('display', 'table-row');
            }
}
else{
    if (($(this).attr("data-attr-regdate")*1 < timestamp_from) || $(this).attr("data-attr-regdate")*1 > timestamp_to) {
                $(this).css('display', 'none');
            } else {
                $(this).css('display', 'table-row');
            }
}

           
});


});


$("#date_r_reg_refs_filter_1").on('click', function() {
        var r_date_from_2 = $(".r_date_from_1").val();
        var r_date_to_2 = $(".r_date_to_1").val();
       
        var timestamp_from = Date.parse(r_date_from_2);
        timestamp_from = timestamp_from / 1000;
        var timestamp_to = Date.parse(r_date_to_2);
        timestamp_to = timestamp_to / 1000;
        

        $('.date_r_reg_refs_1').each(function(i,elem) {

if( timestamp_from == timestamp_to){
    if (($(this).attr("data-attr-regdate")*1 < timestamp_from) && $(this).attr("data-attr-regdate")*1 > timestamp_to) {
                $(this).css('display', 'none');
            } else {
                $(this).css('display', 'table-row');
            }
}
else{
    if (($(this).attr("data-attr-regdate")*1 < timestamp_from) || $(this).attr("data-attr-regdate")*1 > timestamp_to) {
                $(this).css('display', 'none');
            } else {
                $(this).css('display', 'table-row');
            }
}

           
});


});


$("#date_r_reg_refs_filter_3").on('click', function() {
        var r_date_from_2 = $(".r_date_from_3").val();
        var r_date_to_2 = $(".r_date_to_3").val();
       
        var timestamp_from = Date.parse(r_date_from_2);
        timestamp_from = timestamp_from / 1000;
        var timestamp_to = Date.parse(r_date_to_2);
        timestamp_to = timestamp_to / 1000;
        

        $('.date_r_reg_refs_3').each(function(i,elem) {

if( timestamp_from == timestamp_to){
    if (($(this).attr("data-attr-regdate")*1 < timestamp_from) && $(this).attr("data-attr-regdate")*1 > timestamp_to) {
                $(this).css('display', 'none');
            } else {
                $(this).css('display', 'table-row');
            }
}
else{
    if (($(this).attr("data-attr-regdate")*1 < timestamp_from) || $(this).attr("data-attr-regdate")*1 > timestamp_to) {
                $(this).css('display', 'none');
            } else {
                $(this).css('display', 'table-row');
            }
}

           
});


});
</script>






<script>
document.addEventListener('DOMContentLoaded', () => {
    const depositModalWindowNew = document.querySelectorAll('.deposit')
    const depositModalWindowDrop = document.querySelector('.WalletModalDepositMain--new');
    const depositModalWindowDropMenu = document.querySelector('.WalletModalDepositMenu--new');

    if(depositModalWindowNew.length > 0 && depositModalWindowDrop && depositModalWindowDropMenu){
        depositModalWindowNew.forEach(element => {
            const elementText = element.querySelector('.dropdown__choose');
            element.addEventListener('click', (e) => {
                const target = e.target;
                if(!target){
                    return
                }
                const closestSelect = target?.closest('.WalletModalDepositMain--new');
                const closestDrop = target?.closest('.WalletModalDepositMenu--new');
                const closestLabel = target?.closest('.WalletModalDepositOption');

                if(!closestSelect && !closestDrop){
                    depositModalWindowDropMenu.classList.add('_hidden');
                    return
                }

                closestDrop ? depositModalWindowDropMenu.classList.add('_hidden') : depositModalWindowDropMenu.classList.toggle('_hidden');
                if(
                    closestLabel && elementText
                ){
                    elementText.textContent = closestLabel.textContent
                }
            })
        })
    }

    const mtb = document.querySelector('#ModalTB');
    const mtbMain = document.querySelector('#ModalTBMain');
    const mtbContent = document.querySelectorAll('[data-mtb-content]');
    const mtbTrigger = document.querySelector('#MTBTrigger');

    if(mtb, mtbMain, mtbContent.length>0, mtbTrigger){
        mtbTrigger.addEventListener('click', (e) => {
                const target = e.target;
                if(!target){
                    return
                }

                const closest = target?.closest('[data-mtb-trigger]');

                if(!closest){
                    return
                }

                const closestAttr = closest.getAttribute('data-mtb-trigger');

                if(!closestAttr){
                    return
                }

                mtb.classList.add('_active');
                mtbMain.classList.add('_active');
                mtbContent.forEach(element => {
                    element.classList.add('_hidden');
                    if(element.getAttribute('data-mtb-content') === closestAttr){
                        element.classList.remove('_hidden');
                    }
                })
            })
    }
    
    if (mtb) {
        mtb.addEventListener('click', (e) => {
            const target = e.target;
            
            if (!target) {
                return;
            }

            const closest = target.closest('#ModalTBMain');
            const closest2 = target.closest('[data-mtb-close]');
            
            if (closest2) {
                closeMtb();
            }

            if (!closest) {
                closeMtb();
            }
        });

        function closeMtb() {
            mtb.classList.remove('_active');
            mtbMain.classList.remove('_active');
        }
    }

})


var container = document.querySelectorAll(".pin-inputs-wrapper");

if(container.length > 0){
    container.forEach(element => {
        element.onkeyup = function(e) {
            var target = e.srcElement;
            var maxLength = parseInt(target.attributes["maxlength"].value, 10);
            var myLength = target.value.length;
            if (myLength >= maxLength) {
                var next = target;
                while (next = next.nextElementSibling) {
                    if (next == null)
                        break;
                    if (next.tagName.toLowerCase() == "input") {
                        next.focus();
                        break;
                    }
                }
            }
        }
    })
}

const walletFormNew = document.querySelectorAll('.wallet__form');

if(walletFormNew.length > 0){
    walletFormNew.forEach(element => {
        element.addEventListener('click', (e) => {
            const target = e.target;
            if(!target){
                return
            }
            const closest = target?.closest('button[type="submit"]');
            if(!closest){
                return
            }

            const realInput = element.querySelector('.RealInput');

            const pin1Block = element.querySelector('.pin-input-new[name="pin_1"]');
            const pin2Block = element.querySelector('.pin-input-new[name="pin_2"]');
            const pin3Block = element.querySelector('.pin-input-new[name="pin_3"]');
            const pin4Block = element.querySelector('.pin-input-new[name="pin_4"]');

            const pin1 = pin1Block?.value;
            const pin2 = pin2Block?.value;
            const pin3 = pin3Block?.value;
            const pin4 = pin4Block?.value;

            if(realInput && pin1 && pin2 && pin3 && pin4){
                realInput.value = `${pin1}${pin2}${pin3}${pin4}`;
            }

            pin1Block?.remove()
            pin2Block?.remove()
            pin3Block?.remove()
            pin4Block?.remove()

            e.currentTarget.submit();
        })
    })
}

</script>




<script>
     new Clipboard('.btn-clipboard');
    new Clipboard('.btn-clipboard77');

    new Clipboard('.btn-clipboard88');
    new Clipboard('.btn-clipboard99');
    new Clipboard('.btn-clipboard998');
    new Clipboard('.btn-clipboard717');

    

    function reverc_copy(){
        $(".btn_copy_ref").css('opacity', '1');
    }

    function reverc_copy2(){
        $(".show_copied_p").css('opacity','0');
        setTimeout("reverc_copy2_2()", 500);
    }

    function reverc_copy2_2(){
        $(".show_copied_p").hide();
    }

    $(".btn-clipboard77").click(function(){
        $(".show_copied_p").show();
        $(".show_copied_p").css('opacity','1');
         setTimeout("reverc_copy2()", 1100);
    });

    $(".btn-clipboard").click(function(){
        $(".btn_copy_ref").css('opacity', '0.3');
         setTimeout("reverc_copy()", 300);
    });


    
</script>








<script>
  var options = {
  chart: {
    type: 'donut'
  },
  fill: {
  colors: ['#50e3c2', '#d7a3e5']
},
legend: {
    show: false
  },
  series: [0, 0],

    labels: ['Покрытая сумма', 'Сумма задолженности']
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

$(".show_loan_box_stat").click(function(){
var loan_box_stat1 = $(this).attr('data-attr-stat1')*1;
var loan_box_stat2 = $(this).attr('data-attr-stat2')*1;
var loan_box_stat3 = $(this).attr('data-attr-stat3');

    options.series = [loan_box_stat1, loan_box_stat2];
    options.labels = ['Покрытая сумма'+" "+loan_box_stat3, 'Сумма задолженности'+" "+loan_box_stat3];

    $(".sum_stat_loan1").html(loan_box_stat1+" "+loan_box_stat3);
    $(".sum_stat_loan2").html(loan_box_stat2+" "+loan_box_stat3);

     chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
});


// options.series = [70.15, 600];
//  chart = new ApexCharts(document.querySelector("#chart"), options);
// chart.render();
</script>




    <script>
        function get_last_tron(marker) {
            // Validate marker input (assuming it's a simple string)
            if (!marker || typeof marker !== 'string') {
                console.error('Invalid marker');
                return;
            }

            // Sanitize input to prevent injection attacks
            var sanitizedMarker = encodeURIComponent(marker);

            // Make AJAX request with proper security measures
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                url: 'https://www.binance.com/api/v3/ticker',
                data: { symbol: sanitizedMarker }, // Pass data as object to ensure proper encoding
                dataType: 'json', // Specify expected data type
                success: function(response) {
                    // Check if response is valid JSON
                    if (response && response.lastPrice !== undefined) {
                        // Access response safely
                        var lastPrice = parseFloat(response.lastPrice);
                        if (!isNaN(lastPrice)) {
                            // Update DOM safely
                            $(".ticker_" + sanitizedMarker).html(`${sanitizedMarker.slice(0, sanitizedMarker.length - 4)}: ${lastPrice.toFixed(6)}$`);
                        } else {
                            console.error('Invalid price data received');
                        }
                    } else {
                        console.error('Invalid response format');
                    }
                },
                error: function(xhr, status, error) {
                    // Check if error status is not 400 (Bad Request)
                    if (xhr.status !== 400) {
                        console.error('Error occurred:', error);
                    }
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

        get_last_tron('WBNBUSDT');
        setInterval("get_last_tron('WBNBUSDT')", 10000);

        get_last_tron('VETUSDT');
        setInterval("get_last_tron('VETUSDT')", 10000);
        get_last_tron('OPUSDT');
        setInterval("get_last_tron('OPUSDT')", 10000);

        get_last_tron('MNTUSDT');
        setInterval("get_last_tron('MNTUSDT')", 10000);

        get_last_tron('ARBUSDT');
        setInterval("get_last_tron('ARBUSDT')", 10000);
        get_last_tron('AAVEUSDT');
        setInterval("get_last_tron('AAVEUSDT')", 10000);

        get_last_tron('BSVUSDT');
        setInterval("get_last_tron('BSVUSDT')", 10000);

        get_last_tron('STXUSDT');
        setInterval("get_last_tron('STXUSDT')", 10000);
        get_last_tron('USDCUSDT');
        setInterval("get_last_tron('USDCUSDT')", 10000);
        get_last_tron('TRXUSDT');
        setInterval("get_last_tron('TRXUSDT')", 10000);
        get_last_tron('MATICUSDT');
        setInterval("get_last_tron('MATICUSDT')", 10000);
        get_last_tron('DOTUSDT');
        setInterval("get_last_tron('DOTUSDT')", 10000);
        get_last_tron('BCHUSDT');
        setInterval("get_last_tron('BCHUSDT')", 10000);
        get_last_tron('ETCUSDT');
        setInterval("get_last_tron('ETCUSDT')", 10000);
        get_last_tron('BSWUSDT');
        setInterval("get_last_tron('BSWUSDT')", 10000);
    </script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const body = document.querySelector('body')
        const walletDrop = document.querySelectorAll('.wallet__history-select-options');
        const inputDrop = document.querySelectorAll('.dropdown__menu');
        const historyDrop = document.querySelectorAll('.trade__history-select-options');
        const bonusDrop = document.querySelectorAll('.bonus__milestone-drop-menu');

        if(body){
            body.addEventListener('click', (e) => {
                const target = e.target;

                const closest = target?.closest('.BonusMilestoneMain') || target?.closest('.trade__history-select-wrapper') || target?.closest('.WalletMain') || target?.closest('.CabinetCalcDropdownMain');

                if(closest){
                    return
                }

                if(walletDrop.length > 0){
                    walletDrop.forEach((element) => {
                        element.classList.add('_hidden');
                    })
                }
                if(inputDrop.length > 0){
                    inputDrop.forEach((element) => {
                        element.classList.add('_hidden');
                    })
                }
                if(historyDrop.length > 0){
                    historyDrop.forEach((element) => {
                        element.classList.add('_hidden');
                    })
                }
                if(bonusDrop.length > 0){
                    bonusDrop.forEach((element) => {
                        element.classList.add('_hidden');
                    })
                }
            })
        }
    })


    $("#WalletDepositModal").click(function(){
console.log(111);
    });

</script>




<script>
  $(".search_refs").on('input', function() {
  let text = $(".search_refs_inp_2").val();
  $(".ref_table tbody tr td:first-child span").each(function() {
    if ($(this).text().search(new RegExp(`${text}`, 'i')) < 0 && text != '') {
      $(this).parent().parent().hide("slow");
    } else {
      $(this).parent().parent().show("slow");
    }
  });
});

$(".search_refs1").on('input', function() {
  let text = $(".search_refs_inp_1").val();
  $(".ref_table_1 tbody tr td:first-child span").each(function() {
    if ($(this).text().search(new RegExp(`${text}`, 'i')) < 0 && text != '') {
      $(this).parent().parent().hide("slow");
    } else {
      $(this).parent().parent().show("slow");
    }
  });
});

$(".search_refs3").on('input', function() {
  let text = $(".search_refs_inp_3").val();
  $(".ref_table_3 tbody tr td:first-child span").each(function() {
    if ($(this).text().search(new RegExp(`${text}`, 'i')) < 0 && text != '') {
      $(this).parent().parent().hide("slow");
    } else {
      $(this).parent().parent().show("slow");
    }
  });
});


$(".BonusMilestoneOptions").click(function(){
var cur_b_status = $(this).attr('data-attr-status')*1;

if(cur_b_status == 0){
    $(".all_b_items").show();
}
else{
    $(".all_b_items").hide();
    $(".item_b_"+cur_b_status).show();
}

});



</script>








<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 16266537;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/16266537/" rel="nofollow">{$arr_lang[562]} </a>, {$arr_lang[563]}  <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">{$arr_lang[564]} </a></noscript>
<!-- End of LiveChat code -->


<script>
    $(".change_avatar_class").click(function(){
        $("#select_ava_btn")[0].click();
    });

    document.getElementById('select_ava_btn').addEventListener('change', function(){
  if( this.value ){
    $("#upd_ava_btn")[0].click();
  } else {
    
  }
});

$(".close_notifi").click(function(){

    var nidn = $(this).attr('data-attr-nid')*1;
    $.ajax({
    type: 'POST',
    url: 'page.php=wallet',
    data: 'close_notifi=1&nidn='+nidn,
    success: function(ex) {
      
      }
    });
});

$(".close_all_notifi").click(function(){

$.ajax({
type: 'POST',
url: 'page.php=wallet',
data: 'close_notifi=2',
success: function(ex) {
  $(".alert__item_notifi").hide();
  }
});
});


$(".select_out_psys").click(function(){
var select_out_psys = $(this).attr('data-num')*1;
if(select_out_psys == 15 || select_out_psys == 13){
$(".out_tag").show();
}
else{
    $(".out_tag").hide();
}
});



</script>

    </body>
</html>