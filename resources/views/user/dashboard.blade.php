

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

   


<style>#other_depo_modal_23{display: none;}#other_depo_modal_23_2{display:
 none;}#DepIDNot1_2{line-height: 16px;}#DepIDNot1_3{line-height: 16px;}</style>
 <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 <div class="modal modal--withdrawal _hidden" id="WModal">
 <div class="modal__shadow"></div>
 <div class="modal__box modal__box--deposit deposit" style="height: unset; justify-content: flex-start;">
 <div class="modal__wallet-wrapper" style="box-sizing: border-box; padding-bottom: 30px;
  justify-content: space-evenly; min-height: 250px;" id="other_depo_modal">
  <div class="modal__close"></div><div class="modal__title _f14 _hidden"
   id="DepIDNot1" style="text-align: center;">
   <span class="modal__title _upper _one _f18">Warning!</span>
   <br><br>When using the early withdrawal function, you will be
    charged a commission of <b id="text_p_perc">30%</b> and your application 
    will be reviewed within <b id="text_p_days_ifdelated">30</b> 
    days.<br><br>Your amount for early withdrawal: <span id="ResultDepo" 
    style="color: #d7a3e5"></span></div><div class="modal__title _f18 _hidden"
     id="DepID1" style="text-align: center;">For false activation of trading pools, 
     commission for early withdrawal up to 90 days:<br><br>
     For amounts over $2,000 commission 20%<br>For amounts 
     over $5,000 commission 30%<br>For amounts over $15,000 commission 
     38%<br><br>For amounts up to $2,000, or for early withdrawal after 90 
     days, the commission is 0% Please be careful!<br>
     <br>Your early withdrawal fee will be <span style="color: #d7a3e5;">
     <span id="plan1_out_perc">0</span>%</span><br><br>The withdrawal amount is 
     <span style="color: #d7a3e5;"><span id="plan1_out_sum">0</span></span><br><br>
     Confirm early withdrawal?</div><form action="page.php=cryptobox" method="POST" 
     style="flex-direction: row;"><button style="margin-top: 0;" type="submit" 
     name="close_early" value="1"class="modal__submit modal__submit--withdrawal _one _f17
      _upper" id="WModalSubmit">Accept</button><div style="background-color: red; margin-top: 0;" 
      data-close="true"class="modal__submit modal__submit--withdrawal _one _f17 _upper">Cancel
      </div></form></div><div class="modal__wallet-wrapper" style="box-sizing: border-box; padding-bo
      ttom: 30px; justify-content: space-evenly; min-height: 250px;" id="other_depo_modal_23"><div class
      ="modal__close"></div><div class="modal__title _f14 _hidden" id="DepIDNot1_2" style="text-align: cent
      er;"><span class="modal__title _upper _one _f18">Warning!</span><br><br>Dear partner, early withdrawal 
      in the deposit <span id="depo_ppp_name"></span> is not available.<br><br>You have repaid the full amou
      'nt of the investment.<br><br>Your investments: <span id="depo_ppp_dep" style="color: #d7a3e5"></span><
      br>Your withdrawal: <span id="depo_ppp_out" style="color: #d7a3e5"></span></div></div><div class="modal_
      _wallet-wrapper" style="box-sizing: border-box; padding-bottom: 30px; justify-content: space-evenly; 
      min-height: 250px;" id="other_depo_modal_23_2"><div class="modal__close"></div><div class="modal__title
       _f14 _hidden" id="DepIDNot1_3" style="text-align: center;"><span class="modal__title _upper _one 
       _f18">Warning!</span><br><br>Dear partner, early withdrawal of deposit <span id="depo_ppp_name2">
       </span> is available in the amount: <span id="res_23_out" style="color: #d7a3e5"></span><br><br><b sty
       le="padding: 8px;border-radius: 10px;background: #fad577;display: block;color: #45360f;font-weight: 
       normal;">Dear partner, be careful!<br>You have paid back part of the deposit; you can end this deposit
        ahead of schedule and receive the balance amount before the payback on your balance. The remaining part
         of the deposit will be closed.</b></div><div class="modal__title _f18"  style="text-align: center;">Ar
         e you sure you want to use the early withdrawal feature?</div><form action="page.php=cryptobox"
          method="POST" style="flex-direction: row;"><button style="margin-top: 0;" type="submit" name="close_early" 
          value="1"class="modal__submit modal__submit--withdrawal _one _f17 _upper" id="WModalSubmit2">Accept</but
          ton><div style="background-color: red; margin-top: 0;" data-close="true"class="modal__submit modal__submit-
          -withdrawal _one _f17 _upper">Cancel</div></form></div></div></div><style>.cryptobox__submit--new._disable {color: #cbcbcb;}.box-main__card-form-amount-wrapper {text-align: center;}</style><div class="cryptobox__content"><div class="cryptobox__left"><div class="cryptobox__top-info"><section class="cryptobox__cards"><div class="cryptobox__cards--small"><div class="cryptobox__card cryptobox__card--small selected_box cur_box_1" data-attr-pname="Beginner" data-attr-min="25.00" data-attr-min2="from 25.00" data-attr-max="100000000.000000" data-attr-perc="0.50" data-attr-days="180" data-attr-pid="1" data-attr-day1="1-14 days" data-attr-perc1="0.5%" data-attr-day2="15-90 days" data-attr-perc2="0.75%" data-attr-day3="91-180 days" data-attr-perc3="1.0%" data-attr-text_reinvest="Reinvest unavailable" data-attr-text_return="Return of the Capital after CryptoBox ending" data-attr-text_out="Early capital withdrawal available from day 15" data-attr-text_out2="Available one deposit per account" data-attr-text_out3="Your income percentage are increases automatically after each day-milestone."><div class="cryptobox__card-title"><div class="cryptobox__card-title-text">Beginner</div><div class="cryptobox__card-title-timer"><img src="{{asset('')}}assets/img/icons/clock.svg" alt="clock"><span>180 days</span></div></div><div class="cryptobox__card-info _one"><span>Amount: </span><span>USDT </span><br><span class="_numberInfo _ls17">from 25.00</span></div><div class="cryptobox__card-rate-info"><!-- <div class="cryptobox__card-img-currency-wrapper"><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div></div> --><div class="cryptobox__card-rate cryptobox__card-rate--small">0.5-1.0%</div></div></div><div class="cryptobox__card cryptobox__card--small selected_box cur_box_2" data-attr-pname="Pre-intermediate" data-attr-min="500.00" data-attr-min2="from 500.00" data-attr-max="100000000.000000" data-attr-perc="1.00" data-attr-days="180" data-attr-pid="2" data-attr-day1="1-60 days" data-attr-perc1="1.0%" data-attr-day2="61-100 days" data-attr-perc2="1.25%" data-attr-day3="101-180 days" data-attr-perc3="1.5%" data-attr-text_reinvest="Reinvest available" data-attr-text_return="Return of the Capital after CryptoBox ending" data-attr-text_out="Early capital withdrawal available from day 120" data-attr-text_out2="0" data-attr-text_out3="Your income percentage are increases automatically after each day-milestone."><div class="cryptobox__card-title"><div class="cryptobox__card-title-text">Pre-intermediate</div><div class="cryptobox__card-title-timer"><img src="{{asset('')}}assets/img/icons/clock.svg" alt="clock"><span>180 days</span></div></div><div class="cryptobox__card-info _one"><span>Amount: </span><span>USDT </span><br><span class="_numberInfo _ls17">from 500.00</span></div><div class="cryptobox__card-rate-info"><!-- <div class="cryptobox__card-img-currency-wrapper"><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div></div> --><div class="cryptobox__card-rate cryptobox__card-rate--small">1.0-1.5%</div></div></div><div class="cryptobox__card cryptobox__card--small selected_box cur_box_3" data-attr-pname="Intermediate" data-attr-min="5000.00" data-attr-min2="from 5000.00" data-attr-max="100000000.000000" data-attr-perc="1.50" data-attr-days="365" data-attr-pid="3" data-attr-day1="1-90 days" data-attr-perc1="1.5%" data-attr-day2="91-180 days" data-attr-perc2="1.75%" data-attr-day3="181-365 days" data-attr-perc3="2.0%" data-attr-text_reinvest="Reinvest available" data-attr-text_return="Return of the Capital after CryptoBox ending" data-attr-text_out="Early capital withdrawal available from day 180" data-attr-text_out2="0" data-attr-text_out3="Your income percentage are increases automatically after each day-milestone."><div class="cryptobox__card-title"><div class="cryptobox__card-title-text">Intermediate</div><div class="cryptobox__card-title-timer"><img src="{{asset('')}}assets/img/icons/clock.svg" alt="clock"><span>365 days</span></div></div><div class="cryptobox__card-info _one"><span>Amount: </span><span>USDT </span><br><span class="_numberInfo _ls17">from 5000.00</span></div><div class="cryptobox__card-rate-info"><!-- <div class="cryptobox__card-img-currency-wrapper"><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div></div> --><div class="cryptobox__card-rate cryptobox__card-rate--small">1.5-2.0%</div></div></div></div><div class="cryptobox__cards--big"><div class="cryptobox__card cryptobox__card--big selected_box cur_box_5" data-attr-pname="Cryptopool 1" data-attr-min="50000.000000" data-attr-min2="from 50000.00" data-attr-max="100000000.000000" data-attr-perc="0.81" data-attr-days="365" data-attr-pid="5" data-attr-text_reinvest="Floating daily income percentage from 0.75% to 2.00%." data-attr-text_return="Return of the Capital after CryptoBox ending" data-attr-text_out="Income transfer on the Balance every Seven day after CryptoPool opening. Daily income percentage will be shown in the Wallet." data-attr-text_out2="Early capital withdrawal anytime."><div class="cryptobox__card-title"><div class="cryptobox__card-title-text">Cryptopool 1</div><div class="cryptobox_
          _card-title-timer"><img src="{{asset('')}}assets/img/icons/clock.svg" alt="clock">
          <span>365 Days </span></div></div><div class="cryptobox__card-info _one"><span>Amount: </span><span>USDT </span><br><span class="_numberInfo _ls17">from  50000.00</span></div><div class="cryptobox__card-rate-info"><!-- <div class="cryptobox__card-img-currency-wrapper"><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div></div> --><div class="cryptobox__card-rate cryptobox__card-rate--big">0.75-2.0%</div></div></div><div class="cryptobox__card cryptobox__card--big selected_box cur_box_6" data-attr-pname="Cryptopool 2" data-attr-min="250000.000000" data-attr-min2="from 250000.00" data-attr-max="100000000.000000" data-attr-perc="1.50" data-attr-days="365" data-attr-pid="6" data-attr-text_reinvest="Floating daily income percentage from 1.30% to 3.00%." data-attr-text_return="Return of the Capital after CryptoBox ending" data-attr-text_out="Income transfer on the Balance every Seven day after CryptoPool opening. Daily income percentage will be shown in the Wallet." data-attr-text_out2="Early capital withdrawal anytime."><div class="cryptobox__card-title"><div class="cryptobox__card-title-text">Cryptopool 2</div><div class="cryptobox__card-title-timer"><img src="{{asset('')}}assets/img/icons/clock.svg" alt="clock"><span>365 Days </span></div></div><div class="cryptobox__card-info _one"><span>Amount: </span><span>USDT </span><br><span class="_numberInfo _ls17">from  250000.00</span></div><div class="cryptobox__card-rate-info"><!-- <div class="cryptobox__card-img-currency-wrapper"><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div></div> --><div class="cryptobox__card-rate cryptobox__card-rate--big">1.3-3.0%</div></div></div><div class="cryptobox__card cryptobox__card--big selected_box cur_box_8" data-attr-pname="Arbitrage USDT-BTC" data-attr-min="1000.000000" data-attr-min2="from 1000.00" data-attr-max="350000.000000" data-attr-perc="1.01" data-attr-days="90" data-attr-pid="8" data-attr-text_reinvest="Reinvest available" data-attr-text_return="Return of the Capital after CryptoBox ending" data-attr-text_out="Profits are received every day at 16.00 GMT" data-attr-text_out2="The period for making a profit is 24 hours. You will receive you
          r first profit in the coefficient of the time spent on your financial asset at 16.00 GMT." data-attr-text_outnew="Deposit works from Monday to Friday. On Saturday and Sunday, profits are not received and are not counted."><div class="cryptobox__card-title"><div class="cryptobox__card-title-text" style="font-size: 0.9em; word-break: keep-all; width: 40%;">Arbitrage USDT-BTC</div><div class="cryptobox__card-title-timer" style="font-size: 0.8em;"><img src="{{asset('')}}assets/img/icons/clock.svg" alt="clock"><span>90 Weekdays </span></div></div><div class="cryptobox__card-info _one"><span>Amount: </span><span>USDT </span><br><span class="_numberInfo _ls17">from  1000.00</span></div><div class="cryptobox__card-rate-info"><!-- <div class="cryptobox__card-img-currency-wrapper"><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div></div> --><div class="cryptobox__card-rate cryptobox__card-rate--big">0.8-1.5%</div></div></div><div class="cryptobox__card cryptobox__card--small selected_box cur_box_9" data-attr-pname="Pre-intermediant staking" data-attr-min="1000.000000" data-attr-min2="from 1000.00" data-attr-max="999999.000000" data-attr-perc="2.50"  data-attr-day1="1-92 day (Profits are reinvested automatically)" data-attr-perc1="2.5%" data-attr-day2="93-183 day (Profit is reported under `Profit`)" data-attr-perc2="3.0%" data-attr-days="183" data-attr-pid="9" data-attr-text_reinvest="" data-attr-text_return="Total profit will be available for withdrawal in 183 days" data-attr-text_out="The initial investment is included in the profit" data-attr-text_out2="Profits are reinvested automatically" data-attr-text_out3="Your income percentage automatically increases after each stage." data-attr-text_outnew="Deposit works from Monday to Friday. On Saturday and Sunday, profits are not received and are not counted."><div class="cryptobox__card-title"><div class="cryptobox__card-title-text" style="font-size: 0.9em; word-break: keep-all; width: 40%;">Pre-intermediant staking</div><div class="cryptobox__card-title-timer" style="font-size: 0.8em;"><img src="{{asset('')}}assets/img/icons/clock.svg" alt="clock"><span>183&nbsp;Days</span></div></div><div class="cryptobox__card-info _one"><span>Amount: </span><span>USDT </span><br><span class="_numberInfo _ls17">from  1000.00</span></div><div class="cryptobox__card-rate-info"><!-- <div class="cryptobox__card-img-currency-wrapper"><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div><div class="cryptobox__card-img-currency"></div></div> --><div class="cryptobox__card-rate cryptobox__card-rate--small">2.50-3.0%</div></div></div></div></section><section class="cryptobox__plan-info" id="CabinetArrowRight">To get started, select one of the boxes<img src="{{asset('')}}assets/img/backgrounds/Arrow.svg" alt="arrow"></section><form class="cryptobox__calc cryptobox__calc--mobile _hidden" method="POST" action="page.php=cryptobox" id="CabinetCalcRightMobile"><div class="cryptobox__calc-top"><img src="{{asset('')}}assets/img/icons/cross.png" alt="close" class="cryptobox__calc-close"><span class="_one _f28">Deposit activation </span><div class="cryptobox__card-calc"><div class="cryptobox__calc-top-info"><div class="cryptobox__calc-info"><div class="_one _f24 calc_pname">Box #1 </div><div class="cryptobox__calc-sub _one"><span class="_medium _f22">Min: </span><span class="_medium _f22 cur_dep_val">USDT </span><br><span class="_semi _f26 calc_sum">100</span></div></div><img class="cryptobox__calc-image" src="{{asset('')}}assets/img/icons/crypto/svg/normal/ADA.svg" style="display: none;" alt="crypto"></div><div class="cryptobox__calc-bottom-info"><div class="cryptobox__calc-inputs _one"><div class="dropdown _light-green _medium _f17 CabinetCalcDropdownMain"><span class="dropdown__choose">Choose </span><img src="{{asset('')}}assets/img/icons/arrow-bottom.svg" alt="arrrow" class="dropdown__arrow"></div><div class="dropdown__menu _hidden CabinetDropdownMenu"><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_5" data-attr-psysn="btc" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/btc.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Bitcoin  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-5"  value="5" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_6" data-attr-psysn="ltc" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/ltc.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Litecoin  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-6"  value="6" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_7" data-attr-psysn="eth" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/eth.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Ethereum  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-7"  value="7" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_8" data-attr-psysn="usdt" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/usdt.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Tether (TRC20)  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-8"  value="8" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_9" data-attr-psysn="usdt" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/usdt.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Tether (ERC20)  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-9"  value="9" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_10" data-attr-psysn="doge" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/doge.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Doge  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-10"  value="10" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_11" data-attr-psysn="shib" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/shib.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">SHIBA ERC20  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-11"  value="11" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_12" data-attr-psysn="busd" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/busd.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Binance USD  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-12"  value="12" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_13" data-attr-psysn="ton" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/ton.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">TON  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-13"  value="13" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_14" data-attr-psysn="matic" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/matic.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Matic (polygon)  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-14"  value="14" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_15" data-attr-psysn="xrp" data-attr-curbal="0.000000"  id="CabinetCalcDropdownSelect0"><img src="{{asset('')}}assets/img/icons/crypto/pink/xrp.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Ripple  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000</small></span><input type="radio" name="currency" id="currencyMobile-15"  value="15" class="_hidden"></label></div><input type="hidden" name="box" class="box_id"><input type="hidden" name="box_loan_id" class="box_loan_id"><label for="amountMobile" style="position: relative;"><input type="text" class="dropdown__amount-input amount_mob max_depo_inp_amount" name="amount" id="amountMobile" placeholder="Amount" style="padding-right: 40px; box-sizing: border-box"><span class="max_depo_bal _pink" style="position: absolute;right: 0;top: 50%;transform: translateY(-50%);height: 100%;padding-right: 10px;padding-left: 10px;display: flex;align-items: center;justify-content: center;cursor: pointer;border-radius: 0 10px 10px 0;">Max</span></label></div>
          <div class="cryptobox__calc-profit"><div class="_one _f18" style="text-align: right;">Total profit: </div><div class="_one _f30 calc_profit" style="font-size: 1.275em;">0.00</div></div></div></div></div><div class="cryptobox__calc-right-mobile"><div class="cryptobox__submit-buttons"><a class="button cryptobox__submit cryptobox__submit--calc  _one _f17 _pink _upper calc_btn" name="calculate" data-attr-type="2" data-hover="calculate"><div>calculate </div></a><button class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white _upper" type="submit" name="deposit" value="1" data-hover="deposit"><div>deposit</div></button></div><!-- <div class="cryptobox__calc-bottom _medium _f15 _light-grey">If you own cryptocurrency on another platform or wallet, you can transfer them to your Binance Wallet for trading, or grow your crypto holdings with our suite of services on Bavarsis.</div> --><div class="calc-info calc-info--mobile"><div class="calc-text if_text_out3"></div><div class="calc-info__item change_fr calc-info__item--mobile"><div class="calc-info__days if_day1"></div><div class="calc-info__perc if_perc1"></div></div><div class="calc-info__item change_fr calc-info__item--mobile"><div class="calc-info__days if_day2"></div><div class="calc-info__perc if_perc2"></div></div><div class="calc-info__item change_fr calc-info__item--mobile"><div class="calc-info__days if_day3"></div><div class="calc-info__perc if_perc3"></div></div></div><div class="calc-text-wrapper calc-text-wrapper--mobile"><div class="calc-text if_text_return"></div><div class="calc-text if_text_reinvest"></div><div class="calc-text if_text_out _pink"></div><div class="calc-text if_text_out2"></div><div class="calc-text if_text_outnew"></div></div></div></form></div><div class="decorator decorator--cabinet"></div><div class="cryptobox__bottom-info"><section class="balance"><div class="balance__content"><div class="balance__info"><div class="balance__title">Balance: </div><div class="balance__money"><div class="balance__image"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="crypto"></div><div class="balance__text"><span class="_semi _f32">USDT</span> <span class="_bold _f36 _ls12">0.00</span></div></div></div><div class="balance__list"><div class="balance__decoration"><img src="{{asset('')}}assets/img/icons/allM.svg" alt="list"><div class="_one balance__list-item-title">Box opened: </div></div><div class="balance__list-item-value _semi _f22 _pink" style="font-size:1.1em;">0</div><div class="balance__decoration"><img src="{{asset('')}}assets/img/icons/allM.svg" alt="list"><div class="_one balance__list-item-title">Daily profit: </div></div><div class="balance__list-item-value _semi _f22 _pink" style="font-size:1.1em;">USDT 0.00</div><div class="balance__decoration"><img src="{{asset('')}}assets/img/icons/allM.svg" alt="list"><div class="_one balance__list-item-title">Total profit: </div></div><div class="balance__list-item-value _semi _f22 _pink" style="font-size:1.1em;">USDT 0.00</div><div class="balance__decoration balance__decoration--last"><img src="{{asset('')}}assets/img/icons/allM.svg" alt="list"><div class="_one balance__list-item-title">All invested: </div></div><div class="balance__list-item-value _semi _f22 _pink" style="font-size:1.1em;">USDT 0.00</div></div></div></section><div class="swiper swiper--cab-info" id="CabinetImagesSliderRight"><!-- Additional required wrapper --><div class="swiper-wrapper"><!-- Slides --><div class="swiper-slide"><iframe width="560" height="315" src="https://www.youtube.com/embed/wnQnLkxkHs4?si=9iG5gvb9Pr6NHRLe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div><div class="swiper-slide"><div class="slide slide-2" style="background-image: url('{{asset('')}}d2.png');"><span></span></div></div><div class="swiper-slide"><div class="slide slide-3" style="background-image: url('{{asset('')}}slide-1.png');"><span></span></div></div><div class="swiper-slide"><div class="slide slide-4" style="background-image: url('{{asset('')}}d4.png');"><span></span></div></div></div><!-- If we need pagination --><div class="swiper-pagination"></div></div></div></div><div class="cryptobox__calc cryptobox__calc--desktop _hidden" id="CabinetCalcRight"><form class="cryptobox__calc-top" action="page.php=cryptobox" method="POST"><img src="{{asset('')}}assets/img/icons/cross.png" alt="close" class="cryptobox__calc-close"><span class="_one _f28">Deposit activation </span>
<style>
    .credit_btn{
        font-size: 12px;
        border: 1px solid #d7a3e5;
        padding: 5px 8px;
        border-radius: 10px;
        transition: all .7s ease;
        cursor: pointer;
    }

    .credit_btn.active{
        background: #d7a3e5;
    }

    .credit_btn:hover{
        background: #d7a3e5;
    }

    .btn_open_loan{
        display: none;
    }

    /* .no_after_card:after{
        content: ;
    } */
</style>
<div class="cryptobox__card-calc"><div class="cryptobox__calc-top-info"><div class="cryptobox__calc-info"><div class="_one _f24 calc_pname">Box #1 </div><div class="cryptobox__calc-sub _one"><span class="_medium  _f22">Amount: </span><span class="_medium _f22 cur_dep_val">USDT </span><br><span class="_semi _f26 calc_sum">100</span></div></div><img class="cryptobox__calc-image" src="{{asset('')}}assets/img/icons/crypto/svg/normal/ADA.png" style="display: none;" alt="crypto"></div><div class="cryptobox__calc-bottom-info"><div class="cryptobox__calc-inputs _one"><div class="dropdown _light-green _medium _f17 CabinetCalcDropdownMain"><span class="dropdown__choose">Choose currency </span><img src="{{asset('')}}assets/img/icons/arrow-bottom.svg" alt="arrrow" class="dropdown__arrow"></div><div class="dropdown__menu _hidden CabinetDropdownMenu"><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_5" data-attr-psysn="btc" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BTC.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Bitcoin  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 BTC</small></span><input type="radio" name="currency" id="currency-5" value="5" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_6" data-attr-psysn="ltc" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/LTC.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Litecoin  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 LTC</small></span><input type="radio" name="currency" id="currency-6" value="6" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_7" data-attr-psysn="eth" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ETH.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Ethereum  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 ETH</small></span><input type="radio" name="currency" id="currency-7" value="7" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_8" data-attr-psysn="usdt" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Tether (TRC20)  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 USDT</small></span><input type="radio" name="currency" id="currency-8" value="8" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_9" data-attr-psysn="usdt" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Tether (ERC20)  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 USDT</small></span><input type="radio" name="currency" id="currency-9" value="9" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_10" data-attr-psysn="doge" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/DOGE.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Doge  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 DOGE</small></span><input type="radio" name="currency" id="currency-10" value="10" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_11" data-attr-psysn="shib" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/SHIB.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">SHIBA ERC20  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 SHIB</small></span><input type="radio" name="currency" id="currency-11" value="11" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_12" data-attr-psysn="busd" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BUSD.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Binance USD  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 BUSD</small></span><input type="radio" name="currency" id="currency-12" value="12" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_13" data-attr-psysn="ton" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/TON.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">TON  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 TON</small></span><input type="radio" name="currency" id="currency-13" value="13" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_14" data-attr-psysn="matic" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/MATIC.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Matic (polygon)  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 MATIC</small></span><input type="radio" name="currency" id="currency-14" value="14" class="_hidden"></label><label class="dropdown__item psys_ico_sel psys_dis_ids psys_dis_id_15" data-attr-psysn="xrp" data-attr-curbal="0.000000"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/XRP.svg" alt="ada" class="dropdown__item-image"><span style="line-height: 14px;">Ripple  <br><small style="color: rgb(243, 187, 33); display: block;">0.000000 XRP</small></span><input type="radio" name="currency" id="currency-15" value="15" class="_hidden"></label></div><input type="hidden" name="box" class="box_id"><input type="hidden" name="box_loan_id" class="box_loan_id"><label for="amountDesktop" style="position: relative;"><input type="text" class="dropdown__amount-input amount_pc max_depo_inp_amount" name="amount" id="amountDesktop" placeholder="Amount" style="padding-right: 50px; box-sizing: border-box"><span class="max_depo_bal _pink" style="position: absolute;right: 0;top: 50%;transform: translateY(-50%);height: 100%;padding-right: 10px;padding-left: 10px;display: flex;align-items: center;justify-content: center;cursor: pointer;border-radius: 0 10px 10px 0;">Max</span></label></div><div class="cryptobox__calc-profit"><div class="_one _f18" style="text-align: right;">Total profit: </div><div class="_one _f30 calc_profit" style="font-size: 1.275em;">0.00</div></div></div></div><div class="cryptobox__submit-buttons"><a class="button cryptobox__submit cryptobox__submit--calc  _one _f17 _pink _upper calc_btn"  name="calculate" data-hover="calculate" data-attr-type="1"><div>calculate</div></a><button class="button cryptobox__submit cryptobox__submit--deposit  _one _f17 _white _upper" type="submit" name="deposit" value="1" data-hover="deposit"><div>deposit </div></button></div><div class="calc-info"><div class="calc-text if_text_out3"></div><div class="calc-info__item change_fr"><div class="calc-info__days if_day1"></div><div class="calc-info__perc if_perc1"></div></div><div class="calc-info__item change_fr"><div class="calc-info__days if_day2"></div><div class="calc-info__perc if_perc2"></div></div><div class="calc-info__item change_fr"><div class="calc-info__days if_day3"></div><div class="calc-info__perc if_perc3"></div></div></div><div class="calc-text-wrapper"><div class="calc-text if_text_return"></div><div class="calc-text if_text_reinvest"></div><div class="calc-text if_text_out _pink"></div><div class="calc-text if_text_out2"></div><div class="calc-text if_text_outnew"></div></div></form><!-- <div class="cryptobox__calc-bottom _medium _f15 _light-grey">If you own cryptocurrency on another platform or wallet, you can transfer them to your Binance Wallet for trading, or grow your crypto holdings with our suite of services on Bavarsis.</div> --></div></div></div></div><script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?_v=20230827163835"></script>
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
    var test_mode = 0;
</script>

<script>




function toogle_reinv(ids){
        $.ajax({
    type: 'POST',
    url: 'page.php=cryptobox',
    data: 'setautorinv=1&ids='+ids,
    success: function(ex) {
  
        var obj = JSON.parse(ex);
       
        if(obj['status'] == 1){
            $("#fs_"+ids).prop('checked', true);
            console.log('on')
        }
        else if(obj['status'] == 2){
            $("#fs_"+ids).prop('checked', false);
            console.log('off')
        }

        




        
      }


    });
    }

$(".activate_reinv").click(function(){
    var cur_ids = $(this).attr('data-attr-swid')*1;
    toogle_reinv(cur_ids);

})


$(".activate_loan_switch").click(function(){
    var box_loan_id = $(this).attr('data-attr-swid')*1;
    $(".box_loan_id").val(box_loan_id);

})


var pname = '';
        var pmin = 0;
        var pmax = 0;
        var pperc =  0; 
        var pdays = 0;
        var box_id = 0;
        var btn_open_loan_id = 0;
        var psys_ico_name = '';


        $(".btn_open_loan").click(function(){
            btn_open_loan_id = $(this).attr('data-attr-loandpid')*1;
            $(".activate_loan_switch").attr('data-attr-swid', btn_open_loan_id);
        });

    $(".selected_box").click(function(){

        pname = $(this).attr('data-attr-pname');
        pmin = $(this).attr('data-attr-min')*1;
        pmin2 = $(this).attr('data-attr-min2');
        pmax = $(this).attr('data-attr-max')*1;
        pperc = $(this).attr('data-attr-perc')*1;
        pdays = $(this).attr('data-attr-days')*1;
        box_id = $(this).attr('data-attr-pid')*1;
        $(".box_id").val($(this).attr('data-attr-pid')*1);
        $(".btn_open_loan").attr('data-attr-loandpid', $(this).attr('data-attr-pid')*1);

        var day1 = $(this).attr('data-attr-day1');
        var perc1 = $(this).attr('data-attr-perc1');
        var day2 = $(this).attr('data-attr-day2');
        var perc2 = $(this).attr('data-attr-perc2');
        var day3 = $(this).attr('data-attr-day3');
        var perc3 = $(this).attr('data-attr-perc3');
        var text_reinvest = $(this).attr('data-attr-text_reinvest');
        var text_return = $(this).attr('data-attr-text_return');
        var text_out = $(this).attr('data-attr-text_out');
        var text_out2 = $(this).attr('data-attr-text_out2');
        var text_out3 = $(this).attr('data-attr-text_out3');
        var text_outnew = $(this).attr('data-attr-text_outnew');
        
        
        $("#amount_loan").val(0);
        $(".sum_reserve_loan").html(0);
        $(".loan_net_profit").html(0 + " "+psys_ico_name);
    $(".loan_30_profit").html(0 + " "+psys_ico_name);
    $(".loan_70_profit").html(0 + " "+psys_ico_name);
    $("#loan_fs_1").prop('checked', false);
    $(".box_loan_id").val(0);


        if(test_mode){

            if(box_id > 3){
                if(box_id != 9){
                    $(".calc_btn").hide();
                    $(".cryptobox__submit--deposit").css('max-width', '100%');
                }
                else{
                    $(".calc_btn").show();
                    $(".cryptobox__submit--deposit").css('max-width', '100%');
                }
            }
            else{
                $(".calc_btn").show();
                $(".cryptobox__submit--deposit").css('max-width', '100%');
            }

        }
        else{
            if(box_id > 3){
                $(".calc_btn").hide();
                $(".cryptobox__submit--deposit").css('max-width', '100%');
            }
            else{
                $(".calc_btn").show();
                $(".cryptobox__submit--deposit").css('max-width', '100%');
            }
        }

      

        if(box_id == 7){
            $(".CabinetCalcDropdownMain").css('display','none');
            $(".cur_dep_val").html("BTC");
        }
        else{
            $(".CabinetCalcDropdownMain").css('display','flex');
            $(".cur_dep_val").html("USDT");
        }

        if(box_id == 8){
            $(".psys_dis_ids").css('display','none');
            $(".psys_dis_id_5").css('display','flex');
            $(".psys_dis_id_8").css('display','flex');
            $(".psys_dis_id_9").css('display','flex');
            $(".if_text_outnew").show();
        }
        else{
            $(".psys_dis_ids").css('display','flex');
            $(".if_text_outnew").hide();
        }

       if(box_id > 2){
        $(".btn_open_loan").css('display', 'none');
       }else{
        if(psys_ico_name){
            $(".btn_open_loan").css('display', 'flex');    
        }
       }

        if(!day1){
            $(".if_day1").hide();
            $(".if_day2").hide();
            $(".if_day3").hide();
            $(".if_perc1").hide();
            $(".if_perc2").hide();
            $(".if_perc3").hide();
            $(".calc-info").hide();
            $(".if_text_return").show();
            $(".if_text_reinvest").show();
            $(".change_fr").css('grid-template-columns','1fr 1fr');
            $(".change_fr").css('justify-items','start');
        }
        else if(!day3){
            $(".if_day1").show();
            $(".if_day2").show();
            $(".if_day3").hide();
            $(".if_perc1").show();
            $(".if_perc2").show();
            $(".if_perc3").hide();
            $(".calc-info").show();
            $(".if_text_reinvest").hide();
            $(".change_fr").css('grid-template-columns','2fr 1fr');
            $(".change_fr").css('justify-items','end');
            
        }
        else{
            $(".if_day1").show();
            $(".if_day2").show();
            $(".if_day3").show();
            $(".if_perc1").show();
            $(".if_perc2").show();
            $(".if_perc3").show();
            $(".calc-info").show();
            $(".if_text_return").show();
            $(".if_text_reinvest").show();
            $(".change_fr").css('grid-template-columns','1fr 1fr');
            $(".change_fr").css('justify-items','start');
        }
  
        $(".if_day1").html(day1);
        $(".if_day2").html(day2);
        $(".if_day3").html(day3);
        $(".if_perc1").html(perc1);
        $(".if_perc2").html(perc2);
        $(".if_perc3").html(perc3);
        $(".if_text_reinvest").html(text_reinvest);
        $(".if_text_return").html(text_return);
        $(".if_text_out").html(text_out);
        $(".if_text_outnew").html(text_outnew);
        
        if(text_out2 != 0){
            $(".if_text_out2").html(text_out2);
        }else{
            $(".if_text_out2").empty();
        }

        if(text_out3 != 0){
            $(".if_text_out3").html(text_out3+"<br><br>");
        }else{
            $(".if_text_out3").empty();
        }

        $(".calc_pname").html(pname);
        $(".calc_sum").html(pmin2);
    });

    $(".calc_btn").click(function(){
        var type_calc = $(this).attr('data-attr-type')*1;

var amount_pc = $(".amount_pc").val()*1;
var amount_mob = $(".amount_mob").val()*1;
var amount_dep = 0;

if(type_calc == 1){
    amount_dep = amount_pc;
}
else{
    amount_dep = amount_mob;
}


// if(amount_dep > pmax){
//     $(".amount_mob").val(pmax);
//     $(".amount_pc").val(pmax);
//     amount_dep = pmax;
// }

// if(amount_dep < pmin){
//     $(".amount_mob").val(pmin);
//     $(".amount_pc").val(pmin);
//     amount_dep = pmin;
// }


if(box_id == 1){
    var cur_perc = 152.25;
    $(".calc_profit").html(((amount_dep/100*cur_perc)+amount_dep).toFixed(6));
}
else if(box_id == 2){
    var cur_perc = 230;
    $(".calc_profit").html(((amount_dep/100*cur_perc)+amount_dep).toFixed(6));
}
else if(box_id == 3){
    var cur_perc = 658.75;
    $(".calc_profit").html(((amount_dep/100*cur_perc)+amount_dep).toFixed(6));
}
else if(box_id == 9){
    var cur_perc_1 = 2.5;
    var cur_perc_2 = 3;

    for (let index = 1; index < 93; index++) {
        amount_dep_dif = amount_dep/100*cur_perc_1;
        amount_dep += amount_dep_dif;
    }

    $(".calc_profit").html(((amount_dep/100*cur_perc_2)*91).toFixed(6));
}


//$(".calc_profit").html((amount_dep/100*pperc*pdays+amount_dep).toFixed(2));
});



$("#amount_loan").on('input', function(){
        var sum_loan = $(this).val()*1;
        var sum_reserve = sum_loan/100*30;
        var sum_p70 = sum_loan - sum_reserve;
        
        $(".amount_mob").val(sum_loan);
        $(".amount_pc").val(sum_loan);
        $(".sum_reserve_loan").html(sum_reserve + " "+psys_ico_name);



if(box_id == 1){
    var cur_perc = 152.25;
    var sum_loan_profit_30 = ((sum_loan/100*cur_perc)/100*30).toFixed(6);
    var sum_loan_profit_net = ((sum_loan/100*cur_perc)-sum_p70).toFixed(6);
    $(".loan_net_profit").html(sum_loan_profit_net + " "+psys_ico_name);
    $(".loan_30_profit").html(sum_loan_profit_30 + " "+psys_ico_name);
    $(".loan_70_profit").html(sum_p70 + " "+psys_ico_name);
}
else if(box_id == 2){
    var cur_perc = 230;
    var sum_loan_profit_30 = ((sum_loan/100*cur_perc)/100*30).toFixed(6);
    var sum_loan_profit_net = ((sum_loan/100*cur_perc)-sum_p70).toFixed(6);
    $(".loan_net_profit").html(sum_loan_profit_net + " "+psys_ico_name);
    $(".loan_30_profit").html(sum_loan_profit_30 + " "+psys_ico_name);
    $(".loan_70_profit").html(sum_p70 + " "+psys_ico_name);
}


});

var cur_max_depo_bal = 0;
$(".psys_ico_sel").click(function(){
 psys_ico_name = $(this).attr('data-attr-psysn');
 cur_max_depo_bal = $(this).attr('data-attr-curbal')*1;
 $(".btn_open_loan").css('display', 'flex');
$(".cryptobox__calc-image").show();
$(".cryptobox__calc-image").attr('src','img/icons/crypto/svg/normal/'+psys_ico_name.toUpperCase()+'.svg');
});

$(".max_depo_bal").click(function(){
$(".max_depo_inp_amount").val(cur_max_depo_bal);
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