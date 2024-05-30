
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

   





<style>
    .terminal-wrapper *{
        font-family: "Source Code Pro", "SF Mono", Monaco, Inconsolata, "Fira Mono", "Droid Sans Mono", monospace, monospace !important;
    }

    .cabinet-menu{
        min-height: unset;
    }

    .cab-header{
        font-family: 'Russo One' !important;
    }
    .cabinet-menu__item{
        font-family: 'Russo One' !important;
    }
</style>

    <div class="notify-wrap" id="NotifyBlock">




    </div>


<main contenteditable="false" class="terminal-wrapper">
    <section class="terminal-info _grad">
        <div class="terminal-info__main">
            <div class="terminal-info__drop-wrapper">
                <div class="terminal-info__select">
                    <span class="terminal-info__currency-name" id="PairNameMain">Loading...</span>
                </div>
            </div>
            <div class="terminal-info__price">
                <span class="terminal-info__price-current" id="CurrentPrice">loading...</span>
            </div>
        </div>
        <div class="terminal-info__side-info">
            <div class="terminal-info__side-content">
                <div class="terminal-info__main-info-item" id="item1">
                    <span class="terminal-info__title">Changes, 24h</span>
                    <span class="terminal-info__text" id="Changes24">loading...</span>
                </div>
                <span class="divider" id="divider1"></span>
                <div class="terminal-info__main-info-item" id="item2">
                    <span class="terminal-info__title">Min, 24h</span>
                    <span class="terminal-info__text" id="Min24">loading...</span>
                </div>
                <span class="divider" id="divider2"></span>
                <div class="terminal-info__main-info-item" id="item3">
                    <span class="terminal-info__title">Maх, 24h</span>
                    <span class="terminal-info__text" id="Max24">loading...</span>
                </div>
                <span class="divider" id="divider2"></span>
                <div class="terminal-info__main-info-item" id="item3">
                    <span class="terminal-info__title">Volume, 24h</span>
                    <span class="terminal-info__text" id="Volume24">loading...</span>
                </div>
                <span class="divider" id="divider2"></span>
                <div class="terminal-info__main-info-item" id="item3">
                    <span class="terminal-info__title" id="Volume2ExchangeTitle">Volume , 24h</span>
                    <span class="terminal-info__text" id="Volume2Exchange">loading...</span>
                </div>
            </div>
        </div>
    </section>

    <section class="terminal-trading">
        <aside class="terminal-trading__pair-stat pm">
            <section class="terminal-trading__pair _grad">

                <input class="terminal-form__input terminal-form__input--search" type="text" placeholder="SEARCH" id="TerminalSearch">

                <div class="terminal-trading__stat-table-wrapper terminal-trading__stat-table-wrapper--pairs">
                    <table class="terminal-trading__pair-table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="terminal-trading__pair-th terminal-trading__pair-th--pair">
                                        Pair:
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="current">
                                            <path class="_top" d="M4.66797 3.3335V12.6668M2.66797 6.00016L4.66797 3.3335L6.66797 6.00016H2.66797Z" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path class="_bottom" d="M11.3359 12.6663V3.33301M13.3359 9.99967L11.3359 12.6663L9.33594 9.99967H13.3359Z" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </th>
                                <th>
                                    <div class="terminal-trading__pair-th terminal-trading__pair-th--price">
                                        Price:
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="current">
                                            <path class="_top" d="M4.66797 3.3335V12.6668M2.66797 6.00016L4.66797 3.3335L6.66797 6.00016H2.66797Z" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path class="_bottom" d="M11.3359 12.6663V3.33301M13.3359 9.99967L11.3359 12.6663L9.33594 9.99967H13.3359Z" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </th>
                                <th>
                                    <div class="terminal-trading__pair-th terminal-trading__pair-th--change">
                                        Change:
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="current">
                                            <path class="_top" d="M4.66797 3.3335V12.6668M2.66797 6.00016L4.66797 3.3335L6.66797 6.00016H2.66797Z" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path class="_bottom" d="M11.3359 12.6663V3.33301M13.3359 9.99967L11.3359 12.6663L9.33594 9.99967H13.3359Z" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="PairTable">
                            <tr>
                                <td>
                                    <div class="terminal-trading__pair-title">
                                        <svg style="user-select: none" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="">
                                            <path d="M7.99794 12.3336L3.88327 14.497L4.66927 9.91496L1.33594 6.67029L5.93594 6.00363L7.99327 1.83496L10.0506 6.00363L14.6506 6.67029L11.3173 9.91496L12.1033 14.497L7.99794 12.3336Z" fill="" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="terminal-trading__pair-name">loading...</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="terminal-trading__pair-price _more">loading...</span>
                                </td>
                                <td>
                                    <span class="terminal-trading__pair-change _less">loading...</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>
            <section class="terminal-trading__stat _grad">
                <div class="terminal-trading__stat-title">
                    Transactions to the markets
                </div>
                <div class="terminal-trading__stat-table-wrapper">
                    <table class="terminal-trading__stat-table">
                        <thead>
                            <tr>
                                <th>
                                    <span class="terminal-trading__stat-th terminal-trading__stat-th--price" id="TablePriceCup">Price (USDT):</span>
                                </th>
                                <th>
                                    <span class="terminal-trading__stat-th terminal-trading__stat-th--quantity">Quantity:</span>
                                </th>
                                <th>
                                    <span class="terminal-trading__stat-th terminal-trading__stat-th--time">Time</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="MarketTable">
                        </tbody>
                    </table>
                </div>
            </section>
        </aside>

        <section class="terminal-trading__trade-form twf">

            <div class="terminal-trading__tw">
                <div class="tradingview-widget-container">
                    <div class="trading_graf" id="tradingview_BTCUSDT"></div>
                    <script src="https://s3.tradingview.com/tv.js"></script>
                </div>
            </div>

                            <div class="terminal-form" data-wrapper="holder">
                    
                    <ul class="terminal-menu">
                        <li class="terminal-menu__item _active" data-menu="limit">
                            <span class="terminal-menu__text">Limit</span>
                        </li>
                        <li class="terminal-menu__item" data-menu="market">
                            <span class="terminal-menu__text">Market</span>
                        </li>
                        <li class="terminal-menu__item" data-menu="stop">
                            <span class="terminal-menu__text">Stop limit</span>
                        </li>
                    </ul>

                    <div class="divider divider--menu"></div>

                    <div class="terminal-form__forms-wrapper" data-block="limit">
                        <div class="terminal-form__form" action="">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="buy" data-input-chain="Balance" data-chain-type="limitBuy">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="BuyPrice">Price</label>
                                <input  class="terminal-form__input" type="text" id="BuyPrice" data-input-chain="Price" data-chain-type="limitBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="BuyPrice" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="BuyAmount">Amount</label>
                                <input  class="terminal-form__input" type="text" id="BuyAmount" data-input-chain="Amount" data-chain-type="limitBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="BuyAmount" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="RangeBuy" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="Mark5" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="Mark3" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="Mark2" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="Mark4" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="Mark1" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="RangeBuyMark" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="limitBuy" data-mark-changer="Amount"/>
                                <defs>
                                    <linearGradient id="customGradient1" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1Pink" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1Grey" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2Pink" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2Grey" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3Pink" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3Grey" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4Pink" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4Grey" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="buy" data-input-chain="MaxOut" data-chain-type="limitBuy">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="LimitTotalBuy">Total</label>
                                <input  class="terminal-form__input" type="text" id="LimitTotalBuy" data-input-chain="Total" data-chain-type="limitBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="LimitTotalBuy" data-pair-from="">USDT</label>
                            </div>
                            <button id="LimitBuyButton" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Buy">
                                <div>Buy</div>
                            </button>
                        </div>
                        <div class="terminal-form__form" action="">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="sell" data-input-chain="Balance" data-chain-type="limitSell">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="SellPrice">Price</label>
                                <input  class="terminal-form__input" type="text" id="SellPrice"  data-input-chain="Price" data-chain-type="limitSell">
                                <label class="terminal-form__label terminal-form__label--right" for="SellPrice" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="SellAmount">Amount</label>
                                <input  class="terminal-form__input" type="text" id="SellAmount"  data-input-chain="Amount" data-chain-type="limitSell">
                                <label class="terminal-form__label terminal-form__label--right" for="SellAmount" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="RangeSell" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1S)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2S)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3S)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4S)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="Mark5S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="Mark3S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="Mark2S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="Mark4S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="Mark1S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="RangeSellMark" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="limitSell" data-mark-changer="Total"/>
                                <defs>
                                    <linearGradient id="customGradient1S" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreyS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2S" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreyS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3S" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreyS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4S" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreyS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="sell" data-input-chain="MaxOut" data-chain-type="limitSell">lodaing...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="LimitTotalSell">Total</label>
                                <input  class="terminal-form__input" type="text" id="LimitTotalSell" data-input-chain="Total" data-chain-type="limitSell">
                                <label class="terminal-form__label terminal-form__label--right" for="LimitTotalSell" data-pair-from="">USDT</label>
                            </div>

                            <button id="LimitSellButton" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Sell">
                                <div>Sell</div>
                            </button>
                        </div>
                    </div>
                    <div class="terminal-form__forms-wrapper _hidden" data-block="market">
                        <div class="terminal-form__form" action="">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="buy" data-input-chain="Balance" data-chain-type="marketBuy">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper terminal-form__input-wrapper--market">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketBuyPrice">Price</label>
                                <input  class="terminal-form__input" type="text" id="MarketBuyPrice" data-input-chain="Price" data-chain-type="marketBuy" value="MARKET" disabled>
                                <label class="terminal-form__label terminal-form__label--right" for="MarketBuyPrice" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketBuyAmount">Amount</label>
                                <input  class="terminal-form__input" type="text" id="MarketBuyAmount" data-input-chain="Amount" data-chain-type="marketBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="MarketBuyAmount" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="MarketRangeBuy" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1MB)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2MB)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3MB)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4MB)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="MarketBuyMark5" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="MarketBuyMark3" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="MarketBuyMark2" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="MarketBuyMark4" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="MarketBuyMark1" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="MarketRangeBuyMark" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="marketBuy" data-mark-changer="Amount"/>
                                <defs>
                                    <linearGradient id="customGradient1MB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkMB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreyMB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2MB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkMB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreyMB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3MB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkMB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreyMB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4MB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkMB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreyMB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="buy" data-input-chain="MaxOut" data-chain-type="marketBuy">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper _hidden">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketTotalBuy">Total</label>
                                <input  class="terminal-form__input" type="text" id="MarketTotalBuy" data-input-chain="Total" data-chain-type="marketBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="MarketTotalBuy" data-pair-from="">USDT</label>
                            </div>
                            <button id="MarketBuyButton" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Buy">
                                <div>Buy</div>
                            </button>
                        </div>
                        <div class="terminal-form__form" action="">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="sell" data-input-chain="Balance" data-chain-type="marketSell">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper terminal-form__input-wrapper--market">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketSellPrice">Price</label>
                                <input  class="terminal-form__input" type="text" id="MarketSellPrice"  data-input-chain="Price" data-chain-type="marketSell" value="MARKET" disabled>
                                <label class="terminal-form__label terminal-form__label--right" for="MarketSellPrice" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketSellAmount">Amount</label>
                                <input  class="terminal-form__input" type="text" id="MarketSellAmount"  data-input-chain="Amount" data-chain-type="marketSell">
                                <label class="terminal-form__label terminal-form__label--right" for="MarketSellAmount" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="MarketRangeSell" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1MS)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2MS)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3MS)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4MS)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="MarketSellMark5S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="MarketSellMark3S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="MarketSellMark2S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="MarketSellMark4S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="MarketSellMark1S" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="MarketRangeSellMark" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="marketSell" data-mark-changer="Amount"/>
                                <defs>
                                    <linearGradient id="customGradient1MS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkMS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreyMS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2MS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkMS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreyMS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3MS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkMS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreyMS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4MS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkMS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreyMS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="sell" data-input-chain="MaxOut" data-chain-type="marketSell">lodaing...</span>
                            </div>

                            <div class="terminal-form__input-wrapper _hidden">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketTotalSell">Total</label>
                                <input  class="terminal-form__input" type="text" id="MarketTotalSell" data-input-chain="Total" data-chain-type="marketSell">
                                <label class="terminal-form__label terminal-form__label--right" for="MarketTotalSell" data-pair-from="">USDT</label>
                            </div>

                            <button id="MarketSellButton" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Sell">
                                <div>Sell</div>
                            </button>
                        </div>

                    </div>
                    <div class="terminal-form__forms-wrapper _hidden" data-block="stop">
                        <div class="terminal-form__form">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="buy" data-input-chain="Balance" data-chain-type="stopBuy">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopBuyStop">Stop</label>
                                <input  class="terminal-form__input" type="text" id="StopBuyStop" data-input-chain="Stop" data-chain-type="stopBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="StopBuyStop" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopBuyPrice">Limit</label>
                                <input  class="terminal-form__input" type="text" id="StopBuyPrice" data-input-chain="Price" data-chain-type="stopBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="StopBuyPrice" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopBuyAmount">Amount</label>
                                <input  class="terminal-form__input" type="text" id="StopBuyAmount" data-input-chain="Amount" data-chain-type="stopBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="StopBuyAmount" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="StopRangeBuy" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1SB)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2SB)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3SB)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4SB)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="Mark5SB" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="Mark3SB" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="Mark2SB" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="Mark4SB" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="Mark1SB" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="RangeStopBuyMark" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="stopBuy" data-mark-changer="Amount"/>
                                <defs>
                                    <linearGradient id="customGradient1SB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkSB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreySB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2SB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkSB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreySB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3SB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkSB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreySB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4SB" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkSB" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreySB" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="buy" data-input-chain="MaxOut" data-chain-type="stopBuy">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopTotalBuy">Total</label>
                                <input  class="terminal-form__input" type="text" id="StopTotalBuy" data-input-chain="Total" data-chain-type="stopBuy">
                                <label class="terminal-form__label terminal-form__label--right" for="StopTotalBuy" data-pair-from="">USDT</label>
                            </div>
                            <button id="StopBuyButton" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Buy">
                                <div>Buy</div>
                            </button>
                        </div>
                        <div class="terminal-form__form" action="">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="sell" data-input-chain="Balance" data-chain-type="stopSell">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopSellStop">Stop</label>
                                <input  class="terminal-form__input" type="text" id="StopSellStop" data-input-chain="Stop" data-chain-type="stopSell">
                                <label class="terminal-form__label terminal-form__label--right" for="StopSellStop" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopSellPrice">Limit</label>
                                <input  class="terminal-form__input" type="text" id="StopSellPrice"  data-input-chain="Price" data-chain-type="stopSell">
                                <label class="terminal-form__label terminal-form__label--right" for="StopSellPrice" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopSellAmount">Amount</label>
                                <input  class="terminal-form__input" type="text" id="StopSellAmount"  data-input-chain="Amount" data-chain-type="stopSell">
                                <label class="terminal-form__label terminal-form__label--right" for="StopSellAmount" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="StopRangeSell" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1SS)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2SS)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3SS)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4SS)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="Mark5SS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="Mark3SS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="Mark2SS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="Mark4SS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="Mark1SS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="RangeStopSellMark" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="stopSell" data-mark-changer="Total"/>
                                <defs>
                                    <linearGradient id="customGradient1SS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkSS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreySS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2SS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkSS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreySS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3SS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkSS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreySS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4SS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkSS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreySS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="sell" data-input-chain="MaxOut" data-chain-type="stopSell">lodaing...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopTotalSell">Total</label>
                                <input  class="terminal-form__input" type="text" id="StopTotalSell" data-input-chain="Total" data-chain-type="stopSell">
                                <label class="terminal-form__label terminal-form__label--right" for="StopTotalSell" data-pair-from="">USDT</label>
                            </div>

                            <button id="StopSellButton" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Sell">
                                <div>Sell</div>
                            </button>
                        </div>
                    </div>

                    <div class="terminal-form__forms-wrapper _hidden" data-block="limit-futures">
                        <div class="terminal-form__form" action="">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="buy" data-input-chain="Balance" data-chain-type="limitBuyLFS">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="BuyPriceLFS">Price</label>
                                <input  class="terminal-form__input" type="text" id="BuyPriceLFS" data-input-chain="Price" data-chain-type="limitBuyLFS">
                                <label class="terminal-form__label terminal-form__label--right" for="BuyPriceLFS" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="BuyAmountLFS">Amount</label>
                                <input  class="terminal-form__input" type="text" id="BuyAmountLFS" data-input-chain="Amount" data-chain-type="limitBuyLFS">
                                <label class="terminal-form__label terminal-form__label--right" for="BuyAmountLFS" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="RangeBuyLFS" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1LFS)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2LFS)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3LFS)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4LFS)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="Mark5LFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="Mark3LFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="Mark2LFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="Mark4LFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="Mark1LFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="RangeBuyMarkLFS" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="limitBuyLFS" data-mark-changer="Amount"/>
                                <defs>
                                    <linearGradient id="customGradient1LFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkLFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreyLFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2LFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkLFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreyLFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3LFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkLFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreyLFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4LFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkLFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreyLFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="buy" data-input-chain="MaxOut" data-chain-type="limitBuyLFS">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="LimitTotalBuyLFS">Total</label>
                                <input  class="terminal-form__input" type="text" id="LimitTotalBuyLFS" data-input-chain="Total" data-chain-type="limitBuyLFS">
                                <label class="terminal-form__label terminal-form__label--right" for="LimitTotalBuyLFS" data-pair-from="">USDT</label>
                            </div>

                            <div class="terminal-form__ui">
                                <button id="LimitLongButtonLFS" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Long">
                                    <div>Long</div>
                                </button>
                                <button id="LimitShortButtonLFS" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Short">
                                    <div>Short</div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="terminal-form__forms-wrapper _hidden" data-block="market-futures">
                        <div class="terminal-form__form" action="">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="buy" data-input-chain="Balance" data-chain-type="marketBuyMFS">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper terminal-form__input-wrapper--market">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketBuyPriceMFS">Price</label>
                                <input  class="terminal-form__input" type="text" id="MarketBuyPriceMFS" data-input-chain="Price" data-chain-type="marketBuyMFS" value="MARKET" disabled>
                                <label class="terminal-form__label terminal-form__label--right" for="MarketBuyPriceMFS" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketBuyAmountMFS">Amount</label>
                                <input  class="terminal-form__input" type="text" id="MarketBuyAmountMFS" data-input-chain="Amount" data-chain-type="marketBuyMFS">
                                <label class="terminal-form__label terminal-form__label--right" for="MarketBuyAmountMFS" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="MarketRangeBuyMFS" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1MBMFS)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2MBMFS)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3MBMFS)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4MBMFS)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="MarketBuyMark5MFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="MarketBuyMark3MFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="MarketBuyMark2MFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="MarketBuyMark4MFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="MarketBuyMark1MFS" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="MarketRangeBuyMarkMFS" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="marketBuyMFS" data-mark-changer="Amount"/>
                                <defs>
                                    <linearGradient id="customGradient1MBMFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkMBMFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreyMBMFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2MBMFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkMBMFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreyMBMFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3MBMFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkMBMFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreyMBMFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4MBMFS" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkMBMFS" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreyMBMFS" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>

                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="buy" data-input-chain="MaxOut" data-chain-type="marketBuyMFS">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper _hidden">
                                <label class="terminal-form__label terminal-form__label--left" for="MarketTotalBuyMFS">Total</label>
                                <input  class="terminal-form__input" type="text" id="MarketTotalBuyMFS" data-input-chain="Total" data-chain-type="marketBuyMFS">
                                <label class="terminal-form__label terminal-form__label--right" for="MarketTotalBuyMFS" data-pair-from="">USDT</label>
                            </div>

                            <div class="terminal-form__ui">
                                <button id="MarketBuyButtonMFS" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Long">
                                    <div>Long</div>
                                </button>
                                <button id="MarketSellButtonMFS" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Short">
                                    <div>Short</div>
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="terminal-form__forms-wrapper _hidden" data-block="stop-futures">
                        <div class="terminal-form__form">
                            <div class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Available:</span>
                                <span class="terminal-form__stat-amount" data-balance-amount="buy" data-input-chain="Balance" data-chain-type="stopBuySF">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopBuyStopSF">Stop</label>
                                <input  class="terminal-form__input" type="text" id="StopBuyStopSF" data-input-chain="Stop" data-chain-type="stopBuySF">
                                <label class="terminal-form__label terminal-form__label--right" for="StopBuyStopSF" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopBuyPriceSF">Limit</label>
                                <input  class="terminal-form__input" type="text" id="StopBuyPriceSF" data-input-chain="Price" data-chain-type="stopBuySF">
                                <label class="terminal-form__label terminal-form__label--right" for="StopBuyPriceSF" data-pair-from="">USDT</label>
                            </div>
                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopBuyAmountSF">Amount</label>
                                <input  class="terminal-form__input" type="text" id="StopBuyAmountSF" data-input-chain="Amount" data-chain-type="stopBuySF">
                                <label class="terminal-form__label terminal-form__label--right" for="StopBuyAmountSF" data-pair-to="">BTC</label>
                            </div>

                            <svg class="terminal-form__svg" id="StopRangeBuySF" xmlns="http://www.w3.org/2000/svg" width="" height="50" viewBox="0 0 400 20" fill="none">
                                <path d="M16.9961 10.0137L96.9961 10.0137" stroke="url(#customGradient1SBSF)" stroke-width="3"/>
                                <path d="M111 10L191 9.99999" stroke="url(#customGradient2SBSF)" stroke-width="3"/>
                                <path d="M205 10L285 9.99999" stroke="url(#customGradient3SBSF)" stroke-width="3"/>
                                <path d="M299 10L379 10" stroke="url(#customGradient4SBSF)" stroke-width="3"/>
                                <rect data-this="5" class="markForm" id="Mark5SBSF" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 379 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="3" class="markForm" id="Mark3SBSF" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 191 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="2" class="markForm" id="Mark2SBSF" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 97 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="4" class="markForm" id="Mark4SBSF" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 285 10.0845)" stroke="#585858" stroke-width="3"/>
                                <rect data-this="1" class="markForm" id="Mark1SBSF" fill="transparent" width="10.0078" height="10.0078" transform="matrix(0.7063 -0.707912 0.7063 0.707912 3 10.0845)" stroke="#D7A3E5" stroke-width="3"/>
                                <rect id="RangeStopBuyMarkSF" xmlns="http://www.w3.org/2000/svg" width="12" height="12" transform="matrix(0.706429 -0.707784 0.706429 0.707784 2 10)" fill="#D7A3E5" stroke="white" stroke-width="3" data-input-percent="0.00" data-input-chain="Percent" data-chain-type="stopBuySF" data-mark-changer="Amount"/>
                                <defs>
                                    <linearGradient id="customGradient1SBSF" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1PinkSBSF" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg1GreySBSF" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="25%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient2SBSF" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="25%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2PinkSBSF" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg2GreySBSF" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="55%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient3SBSF" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="50%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3PinkSBSF" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg3GreySBSF" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="75%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                    <linearGradient id="customGradient4SBSF" gradientUnits="userSpaceOnUse" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="75%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4PinkSBSF" offset="0%" stop-color="rgba(215, 163, 229, 1)" />
                                        <stop id="lg4GreySBSF" offset="0%" stop-color="rgba(88, 88, 88, 1)" />
                                        <stop offset="100%" stop-color="rgba(88, 88, 88, 1)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div  class="terminal-form__stat">
                                <span class="terminal-form__stat-text">Max out:</span>
                                <span class="terminal-form__stat-amount" data-balance-max="buy" data-input-chain="MaxOut" data-chain-type="stopBuySF">loading...</span>
                            </div>

                            <div class="terminal-form__input-wrapper">
                                <label class="terminal-form__label terminal-form__label--left" for="StopTotalBuySF">Total</label>
                                <input  class="terminal-form__input" type="text" id="StopTotalBuySF" data-input-chain="Total" data-chain-type="stopBuySF">
                                <label class="terminal-form__label terminal-form__label--right" for="StopTotalBuySF" data-pair-from="">USDT</label>
                            </div>

                            <div class="terminal-form__ui">
                                <button id="StopBuyButtonSF" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Long">
                                    <div>Long</div>
                                </button>
                                <button id="StopSellButtonSF" class="button cryptobox__submit cryptobox__submit--deposit _one _f17 _white _upper" style="max-width: unset; padding: 16px;" data-hover="Short">
                                    <div>Short</div>
                                </button>
                            </div>

                        </div>
                    </div>

                    <style>
                        .attention{
                            text-align: center;
                            padding: 10px;
                            background: #ffae003d;
                            border-radius: 8px;
                            font-weight: 700;
                            color: #ffe4aaff;
                        }
                    </style>
                    <div class="attention _hidden" id="Attention">This currency is not used for withdrawal, you can only trade it to exchange it for USDT or other currency available in the Wallet section</div>


                </div>






































































































































































































































































































































































































































































            
        </section>

        <aside class="terminal-trading__cup _grad c">
            <div class="terminal-trading__cup-table-wrapper">
                <table class="terminal-trading__cup-table terminal-trading__cup-table--sell">
                    <thead>
                        <tr>
                            <th>
                                <span class="terminal-trading__table-text terminal-trading__table-text--th terminal-trading__table-text--left" id="TablePriceMarket">Price (USDT):</span>
                            </th>
                            <th>
                                <span class="terminal-trading__table-text terminal-trading__table-text--th terminal-trading__table-text--center">Quantity:</span>
                            </th>
                            <th>
                                <span class="terminal-trading__table-text terminal-trading__table-text--th terminal-trading__table-text--right">All:</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="BidTable">
                        <tr>
                            <td><span class="terminal-trading__table-text terminal-trading__table-text--left _less">loading...</span></td>
                            <td><span class="terminal-trading__table-text terminal-trading__table-text--center">loading...</span></td>
                            <td><span class="terminal-trading__table-text terminal-trading__table-text--right">loading...</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="terminal-trading__cup-info">
                <div class="terminal-trading__cup-price">
                    <span id="CurrentPriceCup">loading...</span>
                    <img id="CurrentPriceCupImg" src="{{asset('')}}assets/img/icons/crypto/svg/up-green.svg" alt="">
                </div>




            </div>
            <div class="terminal-trading__cup-table-wrapper">
                <table class="terminal-trading__cup-table terminal-trading__cup-table--buy">
                    <tbody id="AskTable">
                        <tr>
                            <td><span class="terminal-trading__table-text terminal-trading__table-text--left _more">loading...</span></td>
                            <td><span class="terminal-trading__table-text terminal-trading__table-text--center">loading...</span></td>
                            <td><span class="terminal-trading__table-text terminal-trading__table-text--right">loading...</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </aside>

    </section>

    <section class="terminal-stat" data-wrapper="holder">

        <ul class="terminal-menu">
            <li class="terminal-menu__item" data-menu="balance">
                <span class="terminal-menu__text">Balance</span>
            </li>
            <li class="terminal-menu__item _active" data-menu="position">
                <span class="terminal-menu__text">Wait list</span>
            </li>
            <li class="terminal-menu__item" data-menu="history">
                <span class="terminal-menu__text">Spot history</span>
            </li>






            
            <li class="terminal-menu__item" data-menu="refs">
                <span class="terminal-menu__text">Referral Commission</span>
            </li>
       

        </ul>


        <div class="divider divider--menu"></div>
        <div class="terminal-stat__table-wrapper">
            <table class="terminal-stat__table" data-block="position">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Pair</th>
                        <th>Type</th>
                        <th>Deal</th>
                        <th>Price</th>
                        <th>Volume</th>
                        <th>Stop Limit</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody id="Position">
                </tbody>
            </table>

            <table class="terminal-stat__table _hidden" data-block="history">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Pair</th>
                    <th>Type</th>
                    <th>Deal</th>
                    <th>Price</th>
                    <th>Volume</th>
                    <th>Stop Limit</th>
                    <th>Fill</th>
                </tr>
                </thead>
                <tbody id="History">
                </tbody>
            </table>

            <table class="terminal-stat__table terminal-stat__table--balance _hidden" data-block="balance">
                <thead>
                <tr>
                    <th>Currency</th>
                    <th>Value</th>
                </tr>
                </thead>
                <tbody id="Balances">
                    <tr>
                        <td>
                            <span class="terminal-stat__table-text terminal-stat__table-text--date">BTC</span>
                        </td>
                        <td>
                            <span class="terminal-stat__table-text terminal-stat__table-text--date">235423.2342</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="terminal-stat__table _hidden" data-block="futures-history">
                <thead>
                <tr>
                    <th>Currency</th>
                    <th>Entry price</th>
                    <th>Quantity</th>
                    <th>Leverage</th>
                    <th>Action</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Liquidation price</th>
                    <th>ROI</th>
                    <th>PNL</th>
                    <th>Position</th>
                </tr>
                </thead>
                <tbody id="FuturesHistory">
                </tbody>
            </table>

            <table class="terminal-stat__table _hidden" data-block="futures">
                <thead>
                <tr>
                    <th>Currency</th>
                    <th>Entry price</th>
                    <th>Quantity</th>
                    <th>Leverage</th>
                    <th>Action</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Liquidation price</th>
                    <th>ROI</th>
                    <th>PNL</th>
                    <th>Position</th>
                </tr>
                </thead>
                <tbody id="Futures">
                </tbody>
            </table>

            
                <table class="terminal-stat__table _hidden" data-block="refs" style="max-width: 800px;">
                    <thead>
                    <tr>
                        <th>Login</th>
                        <th>Order</th>
                        <th>Type</th>
                        <th>Bonus</th>
                    </tr>
                    </thead>
                    <tbody id="Refs">
                    </tbody>
                </table>
            
        </div>
    </section>
</main>


<div class="modal modal--deposit _hidden" id="FunctionalDisabledModal">
    <div class="modal__shadow"></div>
    <div class="deposit ">
        <div class="deposit__head">
            <img src="{{asset('')}}assets/img/icons/logo-main.svg" alt="" class="deposit__logo">
            <div class="modal__close"></div>
        </div>
        <div class="deposit__content" id="DepositQR">
            <div class="modal__title _upper _one _f24" style="text-align: center">This function is temporarily disabled.</div>
        </div>
    </div>
</div>

</div>
</div>

                
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js?_v=20230827163835"></script>
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
                const disable = false;
            </script>

<script>
    const measurements = [];
    const activeWebSockets = [];

    let prices, priceChanges;

    function sanitizeInputDot(that) {
        const inputField = that;
        let inputValue = inputField.value;

        // Remove non-numeric and non-dot characters
        inputValue = inputValue.replace(/[^0-9.]/g, '');

        // Ensure only one dot is present
        const dotCount = inputValue.split('.').length - 1;
        if (dotCount > 1) {
            inputValue = inputValue.replace(/\./g, (match, offset) => offset ? '' : match);
        }

        // Ensure only two digits after the dot
        const parts = inputValue.split('.');
        if (parts.length > 1) {
            parts[1] = parts[1].slice(0, 8);
            inputValue = parts.join('.');
        }

        // Update the input field with the sanitized value
        inputField.value = inputValue;
    }

    function setData(obj, data) {
        for (let element of data) {
            for (let elem of obj) {
                if (element['name'] === elem['name']) {
                    elem['text'] = element['text'];
                }
            }
        }
    }

    function setText(obj){
        for (let element of obj){
            element['dom'].textContent = element['text'];
        }
    }

    function formatTime(timestamp) {
        const date = new Date(timestamp);
        const hours = date.getHours().toString().padStart(2, '0');
        const minutes = date.getMinutes().toString().padStart(2, '0');
        return `${hours}:${minutes}`;
    }

    function bidAskCreate(data, targetBlock, bids = true) {
        targetBlock.innerHTML = '';
        let askBID;
        bids ? askBID = 'asks' : askBID = 'bids';

        const dataArray = data[askBID].slice(0, 14);
        if(askBID === 'asks'){
            dataArray.reverse();
        }
        const maxElement = dataArray.reduce((max, current) => (parseFloat(current[1]) > parseFloat(max[1]) ? current : max), dataArray[0]);

        for (let element of dataArray) {
            const row = document.createElement('tr');
            const td1 = document.createElement('td');
            const span1 = document.createElement('span');
            if(bids){
                span1.classList.add('terminal-trading__table-text', 'terminal-trading__table-text--left', '_less');
            } else {
                span1.classList.add('terminal-trading__table-text', 'terminal-trading__table-text--left', '_more');
            }
            span1.textContent = element[0];
            td1.appendChild(span1);
            row.appendChild(td1);

            const td2 = document.createElement('td');
            const span2 = document.createElement('span');
            span2.classList.add('terminal-trading__table-text', 'terminal-trading__table-text--center');
            span2.textContent = element[1];
            td2.appendChild(span2);
            row.appendChild(td2);

            const td3 = document.createElement('td');
            const span3 = document.createElement('span');
            span3.classList.add('terminal-trading__table-text', 'terminal-trading__table-text--right');
            span3.textContent = (element[0] * element[1]).toFixed(6);
            td3.appendChild(span3);

            if(maxElement[1] == element[1]){
                row.classList.add(`_wall${bids ? '--red' : '--green' }`);
            }
            row.appendChild(td3);

            row.addEventListener('click', function () {
                const value = span1.textContent;
                $('#BuyPrice').val(value);
                $('#SellPrice').val(value);
                $('#StopBuyPrice').val(value);
                $('#StopSellPrice').val(value);
                $('#BuyPriceLFS').val(value);
                $('#StopBuyPriceSF').val(value);

            })

            targetBlock.appendChild(row);
        }
    }

    function pricesHandle(data, elements, type){
        let symbol = 'symbol';
        if(type === 'P' || type === 'c'){
            symbol = 's';
        }

        for(let element of elements){
            let attr = element.getAttribute('data-pair-price');
            if(!attr){
                attr = element.getAttribute('data-pair-change');
            }
            if(!attr){
                return
            }
            const foundSymbol = data.find(item => item[symbol] === attr);
            if (foundSymbol) {
                if(type === 'priceChangePercent' || type === 'P'){
                    element.textContent = `${foundSymbol[type]}%`;
                    if(foundSymbol[type].includes('-')){
                        element.classList.remove('_more');
                        element.classList.add('_less');
                    } else {
                        element.classList.remove('_less');
                        element.classList.add('_more');
                    }
                } else {
                    element.textContent = foundSymbol[type];
                }
            }
        }
    }

    function localFavsHandler(favs, ls, table){
        if(favs.length === 0 || ls.length === 0 || !table){
            return
        }

        favs.forEach(element => {
            const attr = element.getAttribute('data-pair-fav');

            if(!attr){
                return
            }

            for(let elem of ls){
                if(elem === attr){
                    const parentTr = element.closest('tr');
                    table.insertBefore(parentTr, table.firstChild);
                    element.classList.add('_fav');
                }
            }
        })
    }

    function favHandle(pairs, table){
        if(pairs.length === 0 || !table){
            return
        }
        pairs.forEach(element => {
            element.addEventListener('click', function(e){
                this.classList.toggle('_fav');
                const pairFav = this.getAttribute('data-pair-fav');

                let favoritePairs = JSON.parse(localStorage.getItem('favoritePairs')) || [];
                if (this.classList.contains('_fav')) {
                    const parentTr = this.closest('tr');
                    table.insertBefore(parentTr, table.firstChild);

                    if (!favoritePairs.includes(pairFav)) {
                        favoritePairs.push(pairFav);
                    }
                } else {
                    const index = favoritePairs.indexOf(pairFav);
                    if (index !== -1) {
                        favoritePairs.splice(index, 1);
                    }
                }
                localStorage.setItem('favoritePairs', JSON.stringify(favoritePairs));
            })
        })
    }

    function setTable(block, data, target){
        if(!block || data.length === 0 || !target || data['error']){
            return
        }
        block.innerHTML = '';

        if(target === 'balance'){
            for(let elem of data){
                if(+elem[1] === 0){
                    continue;
                }
                const tr = document.createElement('tr');
                const tdCurrency = document.createElement('td');
                const spanCurrency = document.createElement('span');
                spanCurrency.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanCurrency.textContent = elem[0];

                tdCurrency.appendChild(spanCurrency);
                tr.appendChild(tdCurrency);

                const tdValue = document.createElement('td');
                const spanValue = document.createElement('span');
                spanValue.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanValue.textContent = elem[1];

                tdValue.appendChild(spanValue);
                tr.appendChild(tdValue);

                block.appendChild(tr);
            }
        } else if(target === 'history'){

            for(let elem of data){
                if (elem['tp'].includes('FUTURES')){
                    continue;
                }
                const tr = document.createElement('tr');

                const tdDate = document.createElement('td');
                const spanDate = document.createElement('span');
                spanDate.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanDate.textContent = getDate(elem['t']);
                tdDate.appendChild(spanDate);
                tr.appendChild(tdDate);

                const tdPair = document.createElement('td');
                const spanPair = document.createElement('span');
                spanPair.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--steam');
                spanPair.textContent = `${elem['b']}/${elem['q']}`;
                tdPair.appendChild(spanPair);
                tr.appendChild(tdPair);

                const tdType = document.createElement('td');
                const spanType = document.createElement('span');
                spanType.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--type');
                spanType.textContent = `${elem['tp']}`;
                tdType.appendChild(spanType);
                tr.appendChild(tdType);

                const tdDeal = document.createElement('td');
                const spanDeal = document.createElement('span');
                spanDeal.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--page', '_more');
                spanDeal.textContent = `${elem['si']}`;
                if(elem['si'] === 'SELL'){
                    spanDeal.classList.remove('_more');
                    spanDeal.classList.add('_less');
                }
                tdDeal.appendChild(spanDeal);
                tr.appendChild(tdDeal);

                const tdPrice = document.createElement('td');
                const spanPrice = document.createElement('span');
                spanPrice.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--price');
                spanPrice.textContent = `${elem['prc']}`;
                tdPrice.appendChild(spanPrice);
                tr.appendChild(tdPrice);

                const tdVolume = document.createElement('td');
                const spanVolume = document.createElement('span');
                spanVolume.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--volume');
                spanVolume.textContent = `${elem['qty']}`;
                tdVolume.appendChild(spanVolume);
                tr.appendChild(tdVolume);

                const tdStop = document.createElement('td');
                const spanStop = document.createElement('span');
                spanStop.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--stop');
                if(elem['sp']){
                    spanStop.textContent = `${elem['sp']}`;
                }
                tdStop.appendChild(spanStop);
                tr.appendChild(tdStop);

                const tdFilled = document.createElement('td');
                const spanFilled = document.createElement('span');
                spanFilled.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--fill');
                spanFilled.textContent = `${elem['st']}`;
                tdFilled.appendChild(spanFilled);
                tr.appendChild(tdFilled);

                block.appendChild(tr);
            }
        } else if(target === 'open'){

            for(let elem of data){
                const tr = document.createElement('tr');

                const tdDate = document.createElement('td');
                const spanDate = document.createElement('span');
                spanDate.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanDate.textContent = getDate(elem['t']);
                tdDate.appendChild(spanDate);
                tr.appendChild(tdDate);

                const tdPair = document.createElement('td');
                const spanPair = document.createElement('span');
                spanPair.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--steam');
                spanPair.textContent = `${elem['b']}/${elem['q']}`;
                tdPair.appendChild(spanPair);
                tr.appendChild(tdPair);

                const tdType = document.createElement('td');
                const spanType = document.createElement('span');
                spanType.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--type');
                spanType.textContent = `${elem['tp']}`;
                tdType.appendChild(spanType);
                tr.appendChild(tdType);

                const tdDeal = document.createElement('td');
                const spanDeal = document.createElement('span');
                spanDeal.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--page', '_more');
                spanDeal.textContent = `${elem['si']}`;
                if(elem['si'] === 'SELL'){
                    spanDeal.classList.remove('_more');
                    spanDeal.classList.add('_less');
                }
                tdDeal.appendChild(spanDeal);
                tr.appendChild(tdDeal);

                const tdPrice = document.createElement('td');
                const spanPrice = document.createElement('span');
                spanPrice.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--price');
                spanPrice.textContent = `${elem['prc']}`;
                tdPrice.appendChild(spanPrice);
                tr.appendChild(tdPrice);

                const tdVolume = document.createElement('td');
                const spanVolume = document.createElement('span');
                spanVolume.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--volume');
                spanVolume.textContent = `${elem['qty']}`;
                tdVolume.appendChild(spanVolume);
                tr.appendChild(tdVolume);

                const tdStop = document.createElement('td');
                const spanStop = document.createElement('span');
                spanStop.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--stop');
                if(elem['sp']){
                    spanStop.textContent = `${elem['sp']}`;
                }
                tdStop.appendChild(spanStop);
                tr.appendChild(tdStop);

                const tdCancel = document.createElement('td');
                const spanCancel = document.createElement('span');
                spanCancel.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--cancel');
                spanCancel.textContent = `Cancel`;
                spanCancel.setAttribute('data-id', `${elem['id']}`);
                spanCancel.addEventListener('click', function() {
                    const that = this;
                    const id = this.getAttribute('data-id');
                    // Cancel
                    $.ajax({
                        url: '/terminal_ajaxUYGYUkf431',
                        type: 'POST',
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            "m": "cancelOrder",
                            "p": {
                                id,
                            }
                        }),
                        success: function() {
                            that.closest('tr').remove();
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching Binance ticker:', error);
                        }
                    });
                })
                tdCancel.appendChild(spanCancel);
                tr.appendChild(tdCancel);

                block.appendChild(tr);
            }
        } else if(target === 'futures') {
            for (let elem of data) {
                if(elem['st'] !== 'OPEN'){
                    continue
                }

                const tr = document.createElement('tr');

                const tdPair = document.createElement('td');
                const spanPair = document.createElement('span');
                spanPair.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanPair.textContent = elem['b'];
                tdPair.appendChild(spanPair);
                tr.appendChild(tdPair);

                const tdEntryPrice = document.createElement('td');
                const spanEntryPrice = document.createElement('span');
                spanEntryPrice.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanEntryPrice.textContent = elem['ep'];
                tdEntryPrice.appendChild(spanEntryPrice);
                tr.appendChild(tdEntryPrice);

                const tdQuantity = document.createElement('td');
                const spanQuantity = document.createElement('span');
                spanQuantity.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanQuantity.textContent = elem['qty'];
                tdQuantity.appendChild(spanQuantity);
                tr.appendChild(tdQuantity);

                const tdLeverage = document.createElement('td');
                const spanLeverage = document.createElement('span');
                spanLeverage.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanLeverage.textContent = elem['l'];
                tdLeverage.appendChild(spanLeverage);
                tr.appendChild(tdLeverage);

                const tdAction = document.createElement('td');
                const spanAction = document.createElement('span');
                spanAction.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanAction.textContent = elem['si'];
                tdAction.appendChild(spanAction);
                tr.appendChild(tdAction);

                const tdStatus = document.createElement('td');
                const spanStatus = document.createElement('span');
                spanStatus.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanStatus.textContent = elem['st'];
                tdStatus.appendChild(spanStatus);
                tr.appendChild(tdStatus);

                const tdDate = document.createElement('td');
                const spanDate = document.createElement('span');
                spanDate.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanDate.textContent = getDate(elem['t']);
                tdDate.appendChild(spanDate);
                tr.appendChild(tdDate);

                const tdLiquidation = document.createElement('td');
                const spanLiquidation = document.createElement('span');
                spanLiquidation.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanLiquidation.textContent = elem['lp'];
                tdLiquidation.appendChild(spanLiquidation);
                tr.appendChild(tdLiquidation);

                const tdROI = document.createElement('td');
                const spanROI = document.createElement('span');
                spanROI.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanROI.setAttribute('data-rp-currency', `${elem['b']}USDT`);
                spanROI.setAttribute('data-rp-current-price', '');
                spanROI.setAttribute('data-rp-current-price', '');
                spanROI.setAttribute('data-rp-quantity', elem['qty']);
                spanROI.setAttribute('data-rp-leverage', elem['l']);
                spanROI.setAttribute('data-rp-entry-price', elem['ep']);
                spanROI.setAttribute('data-calc-type', 'roi');
                spanROI.textContent = '';
                tdROI.appendChild(spanROI);
                tr.appendChild(tdROI);

                const tdPNL = document.createElement('td');
                const spanPNL = document.createElement('span');
                spanPNL.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanPNL.setAttribute('data-rp-currency', `${elem['b']}USDT`);
                spanPNL.setAttribute('data-rp-current-price', '');
                spanPNL.setAttribute('data-rp-quantity', elem['qty']);
                spanPNL.setAttribute('data-rp-leverage', elem['l']);
                spanPNL.setAttribute('data-rp-entry-price', elem['ep']);
                spanPNL.setAttribute('data-calc-type', 'pnl');
                spanPNL.textContent = '';
                tdPNL.appendChild(spanPNL);
                tr.appendChild(tdPNL);

                const tdCancel = document.createElement('td');
                const spanCancel = document.createElement('span');
                spanCancel.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--cancel');
                if(elem['st'] !== 'CANCELED'){
                    spanCancel.textContent = `Close`;
                    spanCancel.setAttribute('data-id', `${elem['id']}`);
                    spanCancel.addEventListener('click', function () {
                        const that = this;
                        const id = this.getAttribute('data-id');
                        // Cancel
                        $.ajax({
                            url: '/terminal_ajaxUYGYUkf431',
                            type: 'POST',
                            dataType: 'json',
                            contentType: 'application/json',
                            data: JSON.stringify({
                                "m": "closeFuturesPosition",
                                "p": {
                                    id,
                                }
                            }),
                            success: function () {
                                that.closest('tr').remove();
                            },
                            error: function (xhr, status, error) {
                                console.error('Error fetching Binance ticker:', error);
                            }
                        });
                    })

                } else {
                    spanCancel.textContent = ``;
                }
                tdCancel.appendChild(spanCancel);
                tr.appendChild(tdCancel);

                setROIPNL(`${elem['b']}USDT`, elem['qty'], elem['l'], elem['ep'], spanROI, spanPNL, elem['si']);

                block.appendChild(tr);
            }
        } else if(target === 'futures-history'){
            for (let elem of data) {
                if(elem['st'] === 'OPEN'){
                    continue;
                }

                const tr = document.createElement('tr');

                const tdPair = document.createElement('td');
                const spanPair = document.createElement('span');
                spanPair.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanPair.textContent = elem['b'];
                tdPair.appendChild(spanPair);
                tr.appendChild(tdPair);

                const tdEntryPrice = document.createElement('td');
                const spanEntryPrice = document.createElement('span');
                spanEntryPrice.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanEntryPrice.textContent = elem['ep'];
                tdEntryPrice.appendChild(spanEntryPrice);
                tr.appendChild(tdEntryPrice);

                const tdQuantity = document.createElement('td');
                const spanQuantity = document.createElement('span');
                spanQuantity.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanQuantity.textContent = elem['qty'];
                tdQuantity.appendChild(spanQuantity);
                tr.appendChild(tdQuantity);

                const tdLeverage = document.createElement('td');
                const spanLeverage = document.createElement('span');
                spanLeverage.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanLeverage.textContent = elem['l'];
                tdLeverage.appendChild(spanLeverage);
                tr.appendChild(tdLeverage);

                const tdAction = document.createElement('td');
                const spanAction = document.createElement('span');
                spanAction.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanAction.textContent = elem['si'];
                tdAction.appendChild(spanAction);
                tr.appendChild(tdAction);

                const tdStatus = document.createElement('td');
                const spanStatus = document.createElement('span');
                spanStatus.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanStatus.textContent = elem['st'];
                tdStatus.appendChild(spanStatus);
                tr.appendChild(tdStatus);

                const tdDate = document.createElement('td');
                const spanDate = document.createElement('span');
                spanDate.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanDate.textContent = getDate(elem['t']);
                tdDate.appendChild(spanDate);
                tr.appendChild(tdDate);

                const tdLiquidation = document.createElement('td');
                const spanLiquidation = document.createElement('span');
                spanLiquidation.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanLiquidation.textContent = elem['lp'];
                tdLiquidation.appendChild(spanLiquidation);
                tr.appendChild(tdLiquidation);

                const tdROI = document.createElement('td');
                const spanROI = document.createElement('span');
                spanROI.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanROI.setAttribute('data-rp-currency', `${elem['b']}USDT`);
                spanROI.setAttribute('data-rp-current-price', '');
                spanROI.setAttribute('data-rp-current-price', '');
                spanROI.setAttribute('data-rp-quantity', elem['qty']);
                spanROI.setAttribute('data-rp-leverage', elem['l']);
                spanROI.setAttribute('data-rp-entry-price', elem['ep']);
                spanROI.setAttribute('data-calc-type', 'roi');
                spanROI.textContent = '';
                tdROI.appendChild(spanROI);
                tr.appendChild(tdROI);

                const tdPNL = document.createElement('td');
                const spanPNL = document.createElement('span');
                spanPNL.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanPNL.setAttribute('data-rp-currency', `${elem['b']}USDT`);
                spanPNL.setAttribute('data-rp-current-price', '');
                spanPNL.setAttribute('data-rp-quantity', elem['qty']);
                spanPNL.setAttribute('data-rp-leverage', elem['l']);
                spanPNL.setAttribute('data-rp-entry-price', elem['ep']);
                spanPNL.setAttribute('data-calc-type', 'pnl');
                spanPNL.textContent = '';
                tdPNL.appendChild(spanPNL);
                tr.appendChild(tdPNL);

                const tdCancel = document.createElement('td');
                const spanCancel = document.createElement('span');
                spanCancel.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--cancel');
                spanCancel.textContent = ``;
                tdCancel.appendChild(spanCancel);
                tr.appendChild(tdCancel);


                setROIPNL(`${elem['b']}USDT`, elem['qty'], elem['l'], elem['ep'], spanROI, spanPNL, elem['si'], elem['lp']);

                block.appendChild(tr);
            }
        } else if(target === 'refs'){
            for (let elem of data) {
                const tr = document.createElement('tr');

                const tdLogin = document.createElement('td');
                const spanLogin = document.createElement('span');
                spanLogin.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanLogin.textContent = elem['login'];
                tdLogin.appendChild(spanLogin);
                tr.appendChild(tdLogin);

                const tdOrder = document.createElement('td');
                const spanOrder = document.createElement('span');
                spanOrder.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanOrder.textContent = elem['order'];
                tdOrder.appendChild(spanOrder);
                tr.appendChild(tdOrder);

                const tdType = document.createElement('td');
                const spanType = document.createElement('span');
                spanType.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanType.textContent = elem['type'];
                tdType.appendChild(spanType);
                tr.appendChild(tdType);

                const tdBonus = document.createElement('td');
                const spanBonus = document.createElement('span');
                spanBonus.classList.add('terminal-stat__table-text', 'terminal-stat__table-text--date');
                spanBonus.textContent = elem['refbonus'];
                tdBonus.appendChild(spanBonus);
                tr.appendChild(tdBonus);

                block.appendChild(tr);
            }
        }
    }

    function setROIPNL(currency, quantity, leverage, entryPrice, roiBlock, pnlBlock, type, closedPrice = false){
        const dataPairPrice = document.querySelectorAll('[data-pair-price]');

        if (dataPairPrice.length === 0 || !currency || !quantity || !leverage || !entryPrice || !roiBlock || !pnlBlock){
            return
        }

        dataPairPrice.forEach(elem => {
            const attrPrice = elem.getAttribute('data-pair-price');


            if(currency === attrPrice){
                const currentPrice = (() => {
                    if(closedPrice){
                        return closedPrice
                    } else{
                        return elem.textContent
                    }
                })();

                const initialMargin = quantity / leverage * entryPrice; // INITIAL MARGIN (maybe)
                const profit = quantity * currentPrice;


                roiBlock.setAttribute('data-rp-current-price', currentPrice);
                pnlBlock.setAttribute('data-rp-current-price', currentPrice);

                const pnl = type === 'SELL'
                    ? (entryPrice - currentPrice) * quantity
                    : type === 'BUY'
                        ? (currentPrice - entryPrice) * quantity
                        : 0;

                const percentPNL = pnl / initialMargin * 100

                if (pnl < 0){
                    pnlBlock.style.color = '#ee2e72';
                } else {
                    pnlBlock.style.color = '#619f93';
                }
                pnlBlock.textContent = (pnl).toFixed(4) + ' USDT';

                if(percentPNL < 0){
                    roiBlock.style.color = '#ee2e72';
                } else {
                    roiBlock.style.color = '#619f93';
                }
                roiBlock.textContent = (percentPNL).toFixed(2) + ' %';
            }
        })
    }

    function getDate(timestamp){
        if(!timestamp){
            return
        }
        const date = new Date(timestamp * 1000);
        return `${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear().toString().slice(-2)} ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;
    }


    document.addEventListener('DOMContentLoaded', () => {
        var tvt2 =  {
            "width": "100%",
            "symbol": "BINANCE:BTCUSDT",
            "interval": "D",
            "timezone": "Etc/UTC",
            "theme": "Dark",
            "style": "1",
            "locale": "en",
            "toolbar_bg": "#f1f3f6",
            "enable_publishing": false,
            "withdateranges": true,
            "hide_side_toolbar": false,
            "allow_symbol_change": true,
            "show_popup_button": true,
            "popup_width": "1000",
            "popup_height": "650",
            "container_id": "tradingview_BTCUSDT"
        };

        var tvt =  new TradingView.widget(
            tvt2
        );

        // MAIN INFO
        const changes24 = document.querySelector('#Changes24');
        const min24 = document.querySelector('#Min24');
        const max24 = document.querySelector('#Max24');
        const volume24 = document.querySelector('#Volume24');
        const volume2Exchange = document.querySelector('#Volume2Exchange');

        const currentPrice = document.querySelector('#CurrentPrice');
        const currentPriceCup = document.querySelector('#CurrentPriceCup');
        const currentPriceCupImg = document.querySelector('#CurrentPriceCupImg');

        const marketGrad = document.querySelector('.terminal-trading__stat._grad');
        const cupGrad = document.querySelector('.terminal-trading__cup._grad');
        const headGrad = document.querySelector('.terminal-info._grad');
        const pairsGrad = document.querySelector('.terminal-trading__pair._grad');

        const marketTable = document.querySelector('#MarketTable');
        const bidTable = document.querySelector('#BidTable');
        const askTable = document.querySelector('#AskTable');
        const pairTable = document.querySelector('#PairTable');

        const dataWrapper = document.querySelectorAll('[data-wrapper]');
        const dataMenu = document.querySelectorAll('[data-menu]');
        const dataBlock = document.querySelectorAll('[data-block]');

        if(dataWrapper.length > 0 && dataBlock.length > 0 && dataMenu.length > 0){
            dataWrapper.forEach(element => {
                element.addEventListener('click', function(e){
                    const target = e.target;
                    if(!target){
                        return
                    }
                    const closest = target?.closest('[data-menu]');
                    if(!closest){
                        return
                    }
                    const attr = closest.getAttribute('data-menu');
                    if(!attr){
                        return
                    }
                    for(let elem of dataMenu){
                        if (this.contains(elem)) {
                            elem.classList.remove('_active');
                        }
                    }
                    closest.classList.add('_active');
                    for(let elem of dataBlock){
                        if (this.contains(elem)) {
                            elem.classList.add('_hidden');
                        }
                        if(elem.getAttribute('data-block') === attr){
                            elem.classList.remove('_hidden');
                        }
                    }

                    if(attr === 'history' || attr === 'balance' || attr === 'position'){
                        tableron();
                    }
                })
            })
        }


        // SPOT <-> FUTURES UI BEHAVIOR
        const dataTradeType = document.querySelectorAll('[data-trade-type]');
        if(dataTradeType.length > 0 && dataMenu.length > 0 && dataBlock.length > 0){
            dataTradeType.forEach(element => {
                element.addEventListener('click', function(){
                    const attr = element.getAttribute('data-trade-type');
                    if(!attr){
                        return
                    }

                    switch (attr) {
                        case 'spot':
                            dataBlock.forEach(elem => {
                                const elemAttr = elem.getAttribute('data-block');
                                if(elemAttr === 'limit-futures' || elemAttr === 'market' || elemAttr === 'stop' || elemAttr === 'market-futures' || elemAttr === 'stop-futures'){
                                    elem.classList.add('_hidden');
                                } else if(elemAttr === 'limit'){
                                    elem.classList.remove('_hidden');
                                }
                            })

                            dataMenu.forEach(elem => {
                                const menuAttr = elem.getAttribute('data-menu');
                                if(!menuAttr){
                                    return
                                }
                                switch (menuAttr) {
                                    case 'limit-futures':
                                        elem.setAttribute('data-menu', 'limit');
                                        elem.classList.add('_active');
                                        break;
                                    case 'market-futures':
                                        elem.setAttribute('data-menu', 'market');
                                        elem.classList.remove('_active');
                                        break;
                                    case 'stop-futures':
                                        elem.setAttribute('data-menu', 'stop');
                                        elem.classList.remove('_active');
                                        break;
                                    default:
                                        break;
                                }
                            })

                            getAndSetPairs();
                            startPoint();
                            tvt2 = {...tvt2,symbol:`BINANCE:BTCUSDT`};
                            var tvt =  new TradingView.widget(
                                tvt2
                            );
                            break;
                        case 'futures':
                            dataBlock.forEach(elem => {
                                const elemAttr = elem.getAttribute('data-block');
                                if(elemAttr === 'limit' || elemAttr === 'market' || elemAttr === 'stop' || elemAttr === 'market-futures' || elemAttr === 'stop-futures'){
                                    elem.classList.add('_hidden');
                                } else if(elemAttr === 'limit-futures'){
                                    elem.classList.remove('_hidden');
                                }
                            })

                            dataMenu.forEach(elem => {
                                const menuAttr = elem.getAttribute('data-menu');
                                if(!menuAttr){
                                    return
                                }
                                switch (menuAttr) {
                                    case 'limit':
                                        elem.setAttribute('data-menu', 'limit-futures');
                                        elem.classList.add('_active');
                                        break;
                                    case 'market':
                                        elem.setAttribute('data-menu', 'market-futures');
                                        elem.classList.remove('_active');
                                        break;
                                    case 'stop':
                                        elem.setAttribute('data-menu', 'stop-futures');
                                        elem.classList.remove('_active');
                                        break;
                                    default:
                                        break;
                                }
                            })

                            getAndSetFuturesPairs();
                            startPoint();
                            tvt2 = {...tvt2,symbol:`BINANCE:BTCUSDT`};
                            var tvt =  new TradingView.widget(
                                tvt2
                            );
                            break;
                        default:
                            break;
                    }
                    $('[data-leverage-wrapper]').toggleClass('_hidden');

                    dataTradeType.forEach(elem => {
                        elem.classList.toggle('_active');
                    })
                })
            })
        }
        // SPOT <-> FUTURES UI BEHAVIOR END


        const balances = document.querySelector('#Balances');
        const historyTable = document.querySelector('#History');
        const positionTable = document.querySelector('#Position');
        const futuresTable = document.querySelector('#Futures');
        const futuresHistoryTable = document.querySelector('#FuturesHistory');
        const refsTable = document.querySelector('#Refs');

        const backupArray = [];

        let sortPairsStatus;
        let sortPriceStatus;
        let sortPercentStatus;

        const search = document.querySelector('#TerminalSearch');
        if (search) {
            var previousValue = search.value;

            search.addEventListener('input', function() {
                if (search.value !== previousValue) {
                    findPairs(document.querySelectorAll('.terminal-trading__pair-name'), this.value);

                    previousValue = search.value;
                }
            });
        }

        function findPairs(pairs, value) {
            if (pairs.length === 0 || !value) {
                $(`#PairTable tr`).removeClass('_hidden');
                return;
            }

            pairs.forEach(element => {
                if (!element.textContent.toLowerCase().includes(value.toLowerCase())) {
                    element.closest('tr').classList.add('_hidden');
                } else {
                    element.closest('tr').classList.remove('_hidden');
                }
            });
        }

        function sortPairs(sortingPairs){
            if(!sortingPairs.length > 0) {
                return
            }
            const pairsA = [];
            sortingPairs.forEach(element => {
                const pair = element.getAttribute('data-pair');
                if(pair){
                    pairsA.push(pair);
                }
            })
            pairsA.sort();

            if(sortPairsStatus === undefined){
                sortPairsStatus = true;

                const pairToTrMap = new Map();
                sortingPairs.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair');
                    if (tr && tbody && attr) {
                        pairToTrMap.set(attr, tr);
                    }
                });

                const tbody = sortingPairs[0].closest('tbody'); // Assuming all tbody elements are the same
                const firstChild = tbody.firstChild;

                pairsA.forEach(pair => {
                    const tr = pairToTrMap.get(pair);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                });
            } else if(sortPairsStatus){
                sortPairsStatus = false;

                const pairToTrMap = new Map();
                sortingPairs.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair');
                    if (tr && tbody && attr) {
                        pairToTrMap.set(attr, tr);
                    }
                });

                const tbody = sortingPairs[0].closest('tbody'); // Assuming all tbody elements are the same
                const firstChild = tbody.firstChild;

                for (let i = pairsA.length - 1; i >= 0; i--) {
                    const pair = pairsA[i];
                    const tr = pairToTrMap.get(pair);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                }

            } else if(!sortPairsStatus){
                sortPairsStatus = undefined;

                const pairToTrMap = new Map();
                sortingPairs.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair');
                    if (tr && tbody && attr) {
                        pairToTrMap.set(attr, tr);
                    }
                });

                const tbody = sortingPairs[0].closest('tbody'); // Assuming all tbody elements are the same
                const firstChild = tbody.firstChild;

                backupArray.forEach(pair => {
                    const tr = pairToTrMap.get(pair);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                });
            }
        }

        function sortPrices(sortingPrices, sortingPairs){
            if(!sortingPrices.length > 0) {
                return
            }
            const prices0 = [];
            sortingPrices.forEach(element => {
                const pair = element.getAttribute('data-pair-price');
                const price = element.textContent;
                if(pair && price){
                    prices0.push([pair, +price]);
                }
            })
            prices0.sort(function(a, b) {
                return a[1] - b[1];
            });

            if(sortPriceStatus === undefined){
                sortPriceStatus = true;

                const priceToTrMap = new Map();
                sortingPrices.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair-price');
                    if (tr && tbody && attr) {
                        priceToTrMap.set(attr, tr);
                    }
                });

                prices0.sort(function(a, b) {
                    return a[1] - b[1];
                });

                const tbody = sortingPrices[0].closest('tbody');
                const firstChild = tbody.firstChild;

                for (let i = prices0.length - 1; i >= 0; i--) {
                    const pair = prices0[i];
                    const tr = priceToTrMap.get(pair[0]);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                }
            } else if(sortPriceStatus){
                sortPriceStatus = false;

                const priceToTrMap = new Map();
                sortingPrices.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair-price');
                    if (tr && tbody && attr) {
                        priceToTrMap.set(attr, tr);
                    }
                });

                prices0.sort(function(a, b) {
                    return a[1] - b[1];
                });

                const tbody = sortingPrices[0].closest('tbody');
                const firstChild = tbody.firstChild;

                prices0.forEach(pair => {
                    const tr = priceToTrMap.get(pair[0]);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                });

            } else if(!sortPriceStatus){
                sortPriceStatus = undefined;

                const pairToTrMap = new Map();
                sortingPairs.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair');
                    if (tr && tbody && attr) {
                        pairToTrMap.set(attr, tr);
                    }
                });

                const tbody = sortingPairs[0].closest('tbody');
                const firstChild = tbody.firstChild;

                backupArray.forEach(pair => {
                    const tr = pairToTrMap.get(pair);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                });
            }
        }

        function sortPercents(sortingPercents, sortingPairs){
            if(!sortingPercents.length > 0) {
                return
            }
            const percents0 = []
            sortingPercents.forEach(element => {
                const pair = element.getAttribute('data-pair-change');
                const percent = element.textContent.slice(0, -1);
                if(pair && percent){
                    percents0.push([pair, +percent]);
                }
            })
            percents0.sort(function(a, b) {
                return a[1] - b[1];
            });

            if(sortPercentStatus === undefined){
                sortPercentStatus = true;

                const percentToTrMap = new Map();
                sortingPercents.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair-change');
                    if (tr && tbody && attr) {
                        percentToTrMap.set(attr, tr);
                    }
                });

                percents0.sort(function(a, b) {
                    return a[1] - b[1];
                });

                const tbody = sortingPercents[0].closest('tbody');
                const firstChild = tbody.firstChild;

                for (let i = percents0.length - 1; i >= 0; i--) {
                    const pair = percents0[i];
                    const tr = percentToTrMap.get(pair[0]);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                }
            } else if(sortPercentStatus){
                sortPercentStatus = false;

                const percentToTrMap = new Map();
                sortingPercents.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair-change');
                    if (tr && tbody && attr) {
                        percentToTrMap.set(attr, tr);
                    }
                });

                percents0.sort(function(a, b) {
                    return a[1] - b[1];
                });

                const tbody = sortingPercents[0].closest('tbody');
                const firstChild = tbody.firstChild;

                percents0.forEach(pair => {
                    const tr = percentToTrMap.get(pair[0]);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                });

            } else if(!sortPercentStatus){
                sortPercentStatus = undefined;

                const pairToTrMap = new Map();
                sortingPairs.forEach(element => {
                    const tr = element.closest('tr');
                    const tbody = element.closest('tbody');
                    const attr = element.getAttribute('data-pair');
                    if (tr && tbody && attr) {
                        pairToTrMap.set(attr, tr);
                    }
                });

                const tbody = sortingPairs[0].closest('tbody');
                const firstChild = tbody.firstChild;

                backupArray.forEach(pair => {
                    const tr = pairToTrMap.get(pair);
                    if (tr) {
                        tbody.insertBefore(tr, firstChild);
                    }
                });
            }
        }

        function pairCreate(data, targetBlock) {

            targetBlock.innerHTML = '';
            const allowsPairsArray = ["BTC", "LTC", "ETH", "USDT", "DOGE", "SHIB", "BUSD", "TON", "MATIC", "XRP"];

            for (let element of data) {
                const row = document.createElement('tr');
                const td1 = document.createElement('td');
                const div1 = document.createElement('div');
                div1.classList.add('terminal-trading__pair-title');
                const svg = `<svg data-pair-fav="${element['baseAsset']}${element['quoteAsset']}" style="user-select: none" xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="">
                                        <path d="M7.99794 12.3336L3.88327 14.497L4.66927 9.91496L1.33594 6.67029L5.93594 6.00363L7.99327 1.83496L10.0506 6.00363L14.6506 6.67029L11.3173 9.91496L12.1033 14.497L7.99794 12.3336Z" fill="" stroke="" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>`
                div1.innerHTML = svg;
                const span1 = document.createElement('span');
                span1.classList.add('terminal-trading__pair-name');
                span1.textContent = `${element['baseAsset']}/${element['quoteAsset']}`;
                span1.setAttribute('data-pair', `${element['baseAsset']}${element['quoteAsset']}`)
                span1.addEventListener('click', () => {
                    startPoint(`${element['baseAsset']}${element['quoteAsset']}`, `${element['baseAsset']}`, `${element['quoteAsset']}`, activeWebSockets[0])

                    let cur_pair = `${element['baseAsset']}${element['quoteAsset']}`
                    if (!allowsPairsArray.includes(element['baseAsset'])) {
                        const attention = document.querySelector('#Attention');
                        attention?.classList.remove('_hidden');
                    } else {
                        const attention = document.querySelector('#Attention');
                        attention?.classList.add('_hidden');
                    }
                    tvt2 = {...tvt2,symbol:`BINANCE:${cur_pair}`};
                    var tvt =  new TradingView.widget(
                        tvt2
                    );
                })
                div1.appendChild(span1);
                td1.appendChild(div1);
                row.appendChild(td1);

                const td2 = document.createElement('td');
                const span2 = document.createElement('span');
                span2.classList.add('terminal-trading__pair-price');
                span2.setAttribute('data-pair-price', `${element['baseAsset']}${element['quoteAsset']}`)
                td2.appendChild(span2);
                row.appendChild(td2);

                const td3 = document.createElement('td');
                const span3 = document.createElement('span');
                span3.classList.add('terminal-trading__pair-change');
                span3.setAttribute('data-pair-change', `${element['baseAsset']}${element['quoteAsset']}`)
                td3.appendChild(span3);
                row.appendChild(td3);

                targetBlock.appendChild(row);
            }

            const favoritePairs = JSON.parse(localStorage.getItem('favoritePairs')) || [];
            const favs = document.querySelectorAll('svg[data-pair-fav]');
            prices = document.querySelectorAll('[data-pair-price]');
            priceChanges = document.querySelectorAll('[data-pair-change]');


            localFavsHandler(favs, favoritePairs, targetBlock);

            favHandle(favs, targetBlock);



            $.ajax({
                url: 'https://api.binance.com/api/v3/ticker/24hr',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    pricesHandle(data, prices, 'lastPrice');
                    pricesHandle(data, priceChanges, 'priceChangePercent');

                    // SORTING
                    const pairsBackUp = document.querySelectorAll('.terminal-trading__pair-name');
                    if(pairsBackUp.length > 0 && backupArray){
                        backupArray.length = 0;
                        pairsBackUp.forEach(element => {
                            const attr = element.getAttribute('data-pair');

                            if(attr){
                                backupArray.push(attr);
                            }
                        })
                    }


                    const sortingPairs = document.querySelectorAll('.terminal-trading__pair-name');
                    const sortingPairsTrigger = document.querySelector('.terminal-trading__pair-th.terminal-trading__pair-th--pair');

                    if(sortingPairsTrigger){
                        sortingPairsTrigger.addEventListener('click', () => {
                            sortPairs(sortingPairs)
                        })
                    }

                    const sortingPrices = document.querySelectorAll('.terminal-trading__pair-price');
                    const sortingPricesTrigger = document.querySelector('.terminal-trading__pair-th.terminal-trading__pair-th--price');

                    if(sortingPricesTrigger){
                        sortingPricesTrigger.addEventListener('click', () => {
                            sortPrices(sortingPrices, sortingPairs)
                        })
                    }

                    const sortingPercents = document.querySelectorAll('.terminal-trading__pair-change');
                    const sortingPercentsTrigger = document.querySelector('.terminal-trading__pair-th.terminal-trading__pair-th--change');

                    if(sortingPercentsTrigger){
                        sortingPercentsTrigger.addEventListener('click', () => {
                            sortPercents(sortingPercents, sortingPairs)
                        })
                    }





                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });
        }

        function startPoint(pair = 'BTCUSDT', pairFrom = 'BTC', pairTo = 'USDT'){
            const urlPrice = `https://api.binance.com/api/v3/ticker/price?symbol=${pair}`;
            const urlStat = `https://api.binance.com/api/v3/ticker/24hr?symbol=${pair}`;

            const mainInfo1Day = `${pair.toLowerCase()}@ticker_1d`; // Head info
            const marketInfo = `${pair.toLowerCase()}@trade`; // Head info
            const cupInfo = `${pair.toLowerCase()}@depth20`;

            $('#PairNameMain')[0].textContent = `${pairFrom}/${pairTo}`;

            $.ajax({
                url: `${urlPrice}`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#CurrentPrice')[0].textContent = `${data['price']}`;
                    $('#CurrentPriceCup')[0].textContent = `${data['price']}`;
                    $('#BuyPrice').val(data['price']);
                    $('#BuyPriceLFS').val(data['price']);
                    $('#SellPrice').val(data['price']);
                    $('#StopBuyPrice').val(data['price']);
                    $('#StopSellPrice').val(data['price']);
                    $('#StopBuyPriceSF').val(data['price']);

                    activeWebSockets.forEach(ws => ws.close());
                    activeWebSockets.length = 0;

                    if(bidTable && askTable && marketTable){
                        bidTable.innerHTML = '';
                        askTable.innerHTML = '';
                        marketTable.innerHTML = '';
                    }

                    let ws = new WebSocket(`wss://stream.binance.com:9443/ws/${mainInfo1Day}/${marketInfo}/${cupInfo}/!ticker@arr`);

                    activeWebSockets.push(ws);

                    wsHandler(ws);

                    $.ajax({
                        url: `/terminal_ajaxUYGYUkf431?m=getCryptoBalances&imc=true`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {

                            $('#LimitBuyButton').attr('data-pair-b', pairFrom);
                            $('#LimitBuyButton').attr('data-pair-q', pairTo);

                            $('#LimitSellButton').attr('data-pair-b', pairFrom);
                            $('#LimitSellButton').attr('data-pair-q', pairTo);

                            $('#MarketBuyButton').attr('data-pair-b', pairFrom);
                            $('#MarketBuyButton').attr('data-pair-q', pairTo);

                            $('#MarketSellButton').attr('data-pair-b', pairFrom);
                            $('#MarketSellButton').attr('data-pair-q', pairTo);

                            $('#StopBuyButton').attr('data-pair-b', pairFrom);
                            $('#StopBuyButton').attr('data-pair-q', pairTo);

                            $('#StopSellButton').attr('data-pair-b', pairFrom);
                            $('#StopSellButton').attr('data-pair-q', pairTo);

                            $('#LimitLongButtonLFS').attr('data-pair-b', pairFrom);
                            $('#LimitShortButtonLFS').attr('data-pair-b', pairFrom);

                            $('#MarketBuyButtonMFS').attr('data-pair-b', pairFrom);
                            $('#MarketSellButtonMFS').attr('data-pair-b', pairFrom);

                            $('#StopBuyButtonSF').attr('data-pair-b', pairFrom);
                            $('#StopSellButtonSF').attr('data-pair-b', pairFrom);


                            setAvailable(response, pairFrom, pairTo, data['price']);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching Binance ticker:', error);
                        }
                    });

                    $.ajax({
                        url: `${urlStat}`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#Changes24')[0].textContent = `${data['priceChangePercent']}%`;
                            if(data['priceChangePercent'] < 0){
                                $('#Changes24')[0].classList.remove('_more');
                                $('#Changes24')[0].classList.add('_less');
                            };
                            $('#Min24')[0].textContent = `${data['lowPrice']}`;
                            $('#Max24')[0].textContent = `${data['highPrice']}`;
                            $('#Volume24')[0].textContent = `${data['volume']}`;
                            $('#Volume2ExchangeTitle')[0].textContent = `Volume ${pairTo}, 24h`;
                            $('#TablePriceCup')[0].textContent = `Price (${pairTo}):`;
                            $('#TablePriceMarket')[0].textContent = `Price (${pairTo}):`;
                            $('#Volume2Exchange')[0].textContent = `${data['quoteVolume']}`;
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching Binance ticker:', error);
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });
        }

        function wsHandler(ws){
            ws.onopen = () => {
                console.log('WebSocket MARKET INFO connection opened');
            };

            ws.onmessage = (e) => {
                const message = JSON.parse(e.data);
                if (message.ping) {
                    console.clear();
                    console.log('Received Ping. Sending Pong...');
                    ws.send(JSON.stringify({ "pong": message.ping }));
                } else {
                    const data = JSON.parse(e.data);

                    if(data.e === '1dTicker'){
                        headGrad.classList.remove('_grad');
                        if(data['P'].includes('-')){
                            changes24.classList.remove('_more');
                            changes24.classList.add('_less');
                        } else {
                            changes24.classList.remove('_less');
                            changes24.classList.add('_more');
                        }
                        changes24.textContent = `${data['P']}%`;
                        min24.textContent = `${Number(data['l']).toFixed(8)}`;
                        max24.textContent = `${Number(data['h']).toFixed(8)}`;
                        volume24.textContent = `${Number(data['v']).toFixed(4)}`;
                        volume2Exchange.textContent = `${Number(data['q']).toFixed(4)}`;
                    }
                    if(data.e === 'trade'){
                        const lastPrice = currentPrice.textContent;
                        marketGrad.classList.remove('_grad');
                        let priceFlag;
                        if(lastPrice < data['p']){
                            priceFlag = '_more';
                        } else if(lastPrice > data['p']){
                            priceFlag = '_less';
                        }

                        if(lastPrice > data['p']){
                            currentPrice.classList.add('_less');
                            currentPriceCup.classList.add('_less');
                            currentPriceCupImg.setAttribute('src', 'img/icons/crypto/svg/down-red.svg');
                        } else {
                            currentPrice.classList.remove('_less');
                            currentPriceCup.classList.remove('_less');
                            currentPriceCupImg.setAttribute('src', 'img/icons/crypto/svg/up-green.svg');
                        }
                        currentPrice.textContent = data['p'];
                        currentPriceCup.textContent = data['p'];

                        const date = new Date(data['T']);
                        const hours = date.getUTCHours().toString().padStart(2, '0');
                        const minutes = date.getUTCMinutes().toString().padStart(2, '0');

                        const formattedTime = `${hours}:${minutes}`;

                        const trTmp = document.createElement('tr');
                        const structureTmp = `
                            <td>
                                <span class="terminal-trading__stat-text terminal-trading__stat-text--price ${priceFlag}">${data['p']}</span>
                            </td>
                            <td>
                                <span class="terminal-trading__stat-text terminal-trading__stat-text--quantity">${data['q']}</span>
                            </td>
                            <td>
                            <span class="terminal-trading__stat-text terminal-trading__stat-text--time">${formattedTime} GMT</span>
                        </td>`;




                        trTmp.innerHTML = structureTmp;

                        marketTable.insertBefore(trTmp, marketTable.firstChild);
                        if (marketTable.childNodes.length > 100) {
                            const lastChild = marketTable.lastChild;
                            marketTable.removeChild(lastChild);
                        }
                    }
                    if(data.hasOwnProperty('bids')){
                        cupGrad.classList.remove('_grad');
                        bidAskCreate(data, bidTable, true);
                        bidAskCreate(data, askTable, false);
                    }
                    if(Array.isArray(data)){

                        pricesHandle(data, prices, 'c');
                        pricesHandle(data, priceChanges, 'P');
                    }

                }
            };

            ws.onclose = (event) => {
                console.log(`WebSocket connection closed: ${event.code} - ${event.reason}`);
            };

            ws.onerror = (error) => {
                console.error('WebSocket error:', error);
            };
        }
        function findBalance(data, finder = 'BTC') {
            if(data.length === 0){
                return null
            }

            for (let i = 0; i < data.length; i++) {
                if (data[i][0] === finder) {
                    return data[i][1];
                }
            }
            return null;
        }
        function setAvailable(data, left = 'BTC', right = 'USDT', price = 0){
            if(data.length === 0){
                return
            }
            let buy = findBalance(data, left);
            let sell = findBalance(data, right);
            if(!buy){
                buy = '0';
            };
            if(!sell){
                sell = '0';
            };

            $('[data-balance-amount="buy"]').text(`${sell} ${right}`);
            $('[data-balance-amount="sell"]').text(`${buy} ${left}`);

            $('[data-pair-from]').text(`${right}`);
            $('[data-pair-to]').text(`${left}`);

            if(price != 0){
                $('[data-balance-max="buy"]').text(`${(parseFloat($('[data-balance-amount="buy"]').text()) / price).toFixed(8)} ${left}`);
                $('[data-balance-max="buy"]').attr('data-pair-name', left);
                $('[data-balance-max="sell"]').text(`${(parseFloat($('[data-balance-amount="sell"]').text()) * price).toFixed(8)} ${right}`);
                $('[data-balance-max="sell"]').attr('data-pair-name', right);
            } else {
                price = $('#CurrentPriceCup').text();
                $('[data-balance-max="buy"]').text(`${(parseFloat($('[data-balance-amount="buy"]').text()) / price).toFixed(8)} ${left}`);
                $('[data-balance-max="buy"]').attr('data-pair-name', left);
                $('[data-balance-max="sell"]').text(`${(parseFloat($('[data-balance-amount="sell"]').text()) * price).toFixed(8)} ${right}`);
                $('[data-balance-max="sell"]').attr('data-pair-name', right);
            }
        }

        // PAIRS
        function getAndSetPairs(){
            $.ajax({
                url: `/terminal_ajaxUYGYUkf431?m=getTradingPairs`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    pairCreate(data, pairTable);
                    pairsGrad.classList.remove('_grad');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });
        }

        getAndSetPairs();

        // FUTURES PAIRS
        function getAndSetFuturesPairs(){
            $.ajax({
                url: `/terminal_ajaxUYGYUkf431?m=getFuturesPairs`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    pairCreate(data, pairTable);
                    pairsGrad.classList.remove('_grad');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });
        }

        // getAndSetFuturesPairs();

        function tableron(that = false){
            // OPEN
            $.ajax({
                url: `/terminal_ajaxUYGYUkf431?m=getOrderHistory&s=OPEN`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    setTable(positionTable, data, 'open');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });

            // BALANCES
            $.ajax({
                url: `/terminal_ajaxUYGYUkf431?m=getCryptoBalances&imc=true`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    setTable(balances, data, 'balance');
                    if(that){
                        const pairFrom = that.getAttribute('data-pair-b');
                        const pairTo = that.getAttribute('data-pair-q');

                        if(pairFrom && pairTo){
                            setAvailable(data, pairFrom, pairTo);
                        } else {
                            setAvailable(data);
                        }
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });

            // HISTORY
            $.ajax({
                url: `/terminal_ajaxUYGYUkf431?m=getOrderHistory&l=100`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {

                    setTable(historyTable, data, 'history');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });

            //FUTURES HISTORY
            $.ajax({
                url: `/terminal_ajaxUYGYUkf431?m=getFuturesContracts&l=100`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    setTable(futuresHistoryTable, data, 'futures-history');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });

            //FUTURES
            $.ajax({
                url: `/terminal_ajaxUYGYUkf431?m=getFuturesContracts&l=100`,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    setTable(futuresTable, data, 'futures');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });

            // REFS
            $.ajax({
                url: `page.php=spot`,
                type: 'POST',
                data: 'get_ref_oper=1',
                dataType: 'json',
                success: function(data) {
                    setTable(refsTable, data, 'refs');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching Binance ticker:', error);
                }
            });
        }

        tableron();
        setInterval(() => {
            const pairHolder = document.querySelector('#LimitBuyButton');
            if(pairHolder){
                tableron(pairHolder);
            }
        }, 5000)
        startPoint();

        const inputChains = document.querySelectorAll('[data-input-chain]');
        function inputHandler(type, that){

            if(!type || !that){
                return
            }
            const chainType = that.getAttribute('data-chain-type');

            const inputTotal = document.querySelector(`[data-input-chain="Total"][data-chain-type="${chainType}"]`);
            const inputPrice = document.querySelector(`[data-input-chain="Price"][data-chain-type="${chainType}"]`);
            const inputAmount = document.querySelector(`[data-input-chain="Amount"][data-chain-type="${chainType}"]`);

            if(!inputTotal || !inputPrice || !inputAmount) {
                return
            }

            if(inputPrice.value !== 'MARKET'){
                if(type === 'Amount'){
                    if(chainType === "limitBuyLFS" || chainType === "stopBuySF"){
                        const leverage = $('[data-leverage-select]').val();
                        inputTotal.value = (that.value * inputPrice.value / leverage).toFixed(8);
                    } else {
                        inputTotal.value = (that.value * inputPrice.value).toFixed(8);
                    }
                } else{
                    if(chainType === "limitBuyLFS" || chainType === "stopBuySF"){
                        const leverage = $('[data-leverage-select]').val();
                        inputAmount.value = (that.value / inputPrice.value * leverage).toFixed(8);
                    } else {
                        inputAmount.value = (that.value / inputPrice.value).toFixed(8);
                    }
                }
            }
        }

        if(inputChains.length > 0){
            inputChains.forEach(element => {
                const attr = element.getAttribute('data-input-chain');

                if(attr === 'Amount' || attr === 'Total' || attr === 'Price' || attr === 'Stop'){
                    element.addEventListener('input', function(){
                        sanitizeInputDot(this)
                    });
                }

                if(attr === 'Amount'){
                    element.addEventListener('input', function(){
                        inputHandler('Amount', this);
                    });
                } else if(attr === 'Total'){
                    element.addEventListener('input', function(){
                        inputHandler('Total', this);
                    });
                } else if(attr === 'Price'){
                    element.addEventListener('input', function(){
                        const chain = this.getAttribute('data-chain-type');
                        const price = this.value;
                        if(!chain || !price){
                            return
                        }
                        const amount = $(`[data-chain-type="${chain}"][data-input-chain="Amount"]`).val();
                        if(!amount){
                            return;
                        }

                        $(`[data-chain-type="${chain}"][data-input-chain="Total"]`).val(amount * price).toFixed(8);
                    });
                }
            })
        }


        const limitBuyMark = document.getElementById('RangeBuyMark');
        const limitSellMark = document.getElementById('RangeSellMark');
        const marketBuyMark = document.getElementById('MarketRangeBuyMark');
        const marketSellMark = document.getElementById('MarketRangeSellMark');
        const stopBuyMark = document.getElementById('RangeStopBuyMark');
        const stopSellMark = document.getElementById('RangeStopSellMark');
        const limitBuyMarkLFS = document.getElementById('RangeBuyMarkLFS');
        const marketRangeBuyMarkMFS = document.getElementById('MarketRangeBuyMarkMFS');
        const rangeStopBuyMarkSF = document.getElementById('RangeStopBuyMarkSF');

        // RANGE MARK <-> INPUT DATA SET
        const attributeChangeCallback = function(mutationsList) {

            for (const mutation of mutationsList) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'data-input-percent' && !!mutation.target) {
                    let attr = mutation.target.getAttribute('data-input-percent');
                    const attrChanger = mutation.target.getAttribute('data-mark-changer');
                    if(!attrChanger){
                        return
                    }

                    if(!attr){
                        attr = 0;
                    }

                    const chain = mutation.target.getAttribute('data-input-chain');
                    const chainType = mutation.target.getAttribute('data-chain-type');

                    if(!chain || !chainType){
                        return
                    }

                    const inputAmount = document.querySelector(`[data-input-chain="Amount"][data-chain-type="${chainType}"]`);
                    const inputTotal = document.querySelector(`[data-input-chain="Total"][data-chain-type="${chainType}"]`);
                    const inputPrice = document.querySelector(`[data-input-chain="Price"][data-chain-type="${chainType}"]`);
                    const balance = document.querySelector(`[data-input-chain="Balance"][data-chain-type="${chainType}"]`);
                    const maxOut = document.querySelector(`[data-input-chain="MaxOut"][data-chain-type="${chainType}"]`);

                    if(!inputAmount || !balance || !inputTotal || !inputPrice || !maxOut){
                        return
                    }

                    if(!inputAmount.getAttribute('data-chain-type').includes('market') || !inputAmount.getAttribute('data-chain-type').includes('marketBuyMFS')){
                        if(attrChanger === 'Total'){
                            inputAmount.value = (parseFloat(balance.textContent) / 100 * attr).toFixed(8);
                            inputTotal.value = (inputAmount.value * inputPrice.value).toFixed(8);
                        } else if(attrChanger === 'Amount'){
                            if (chainType === "stopBuySF" || chainType === "limitBuyLFS"){
                                const leverage = $('[data-leverage-select]').val();
                                inputTotal.value = (parseFloat(balance.textContent) / 100 * attr).toFixed(8);
                                inputAmount.value = (inputTotal.value / inputPrice.value * leverage).toFixed(8);
                            } else {
                                inputTotal.value = (parseFloat(balance.textContent) / 100 * attr).toFixed(8);
                                if(inputPrice.value === 'MARKET'){
                                    const percent = +document.querySelector(`[data-input-chain="Percent"][data-chain-type="${chainType}"]`).getAttribute('data-input-percent');
                                    if(chainType.includes('Sell')){
                                        const balanceValue = parseFloat(balance.textContent);
                                        inputAmount.value = (balanceValue / 100 * percent).toFixed(8);
                                    } else {
                                        const maxOutValue = parseFloat(maxOut.textContent);
                                        inputAmount.value = (maxOutValue / 100 * percent).toFixed(8);
                                    }
                                } else {
                                    inputAmount.value = (inputTotal.value / inputPrice.value).toFixed(8);
                                }
                            }
                        }
                    } else {
                        if(attrChanger === 'Amount'){
                            if (chainType === "marketBuyMFS"){
                                const leverage = $('[data-leverage-select]').val();
                                inputAmount.value = (parseFloat(maxOut.textContent) / 100 * attr * leverage).toFixed(8);
                            } else if(chainType === "marketSell"){
                                inputAmount.value = (parseFloat(balance.textContent) / 100 * attr).toFixed(8);
                            } else {
                                inputAmount.value = (parseFloat(maxOut.textContent) / 100 * attr).toFixed(8);
                            }
                        }
                    }
                }
            }
        };
        const observer = new MutationObserver(attributeChangeCallback);
        const observerConfig = { attributes: true, attributeFilter: ['data-input-percent'] };
        observer.observe(limitBuyMark, observerConfig);
        observer.observe(limitSellMark, observerConfig);
        observer.observe(marketBuyMark, observerConfig);
        observer.observe(marketSellMark, observerConfig);
        observer.observe(stopBuyMark, observerConfig);
        observer.observe(stopSellMark, observerConfig);
        observer.observe(limitBuyMarkLFS, observerConfig);
        observer.observe(marketRangeBuyMarkMFS, observerConfig);
        observer.observe(rangeStopBuyMarkSF, observerConfig);

        function createNotify(notifyBlock, title = 'Success', text = 'Order successfully filed.'){
            if(!notifyBlock){
                return
            }

            const notify = document.createElement('div');
            notify.classList.add('terminal-notify');

            const notifyTitleBlock = document.createElement('span');
            notifyTitleBlock.classList.add('terminal-notify__title');
            notifyTitleBlock.setAttribute('data-notify-title', title);

            const notifyTextBlock = document.createElement('span');
            notifyTextBlock.classList.add('terminal-notify__text');
            notifyTextBlock.setAttribute('data-notify-text', text);

            notify.append(notifyTitleBlock);
            notify.append(notifyTextBlock);
            notifyBlock.insertBefore(notify, notifyBlock.firstChild);
            notify.classList.add('show-notify');

            setTimeout(() => {
                notify.remove();
            }, 5001);
        }

        const limitBuyButton = document.querySelector('#LimitBuyButton');
        if(limitBuyButton){
            limitBuyButton.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');
                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');
                    }
                    return
                } else {
                    const pairFrom = this.getAttribute('data-pair-b');
                    const pairTo = this.getAttribute('data-pair-q');
                    const price = $('[data-input-chain="Price"][data-chain-type="limitBuy"]').val();
                    const quantity = $('[data-input-chain="Amount"][data-chain-type="limitBuy"]').val();

                    $.ajax({
                        url: '/terminal_ajaxUYGYUkf431',
                        type: 'POST',
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            "m": 'placeLimitOrder',
                            "p": {
                                "b": pairFrom,
                                "q": pairTo,
                                "qty": quantity,
                                "prc": price,
                                "s": "BUY"
                            }
                        }),
                        success: function(data) {
                            const notifyBlock = document.querySelector('#NotifyBlock');
                            if(notifyBlock && data['success'] === true){
                                createNotify(notifyBlock, 'Success', 'Your limit order in order book!');
                            } else if(notifyBlock && data['success'] !== true){
                                createNotify(notifyBlock, 'Something wrong!', 'Your limit order is not complete!');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching Binance ticker:', error);
                        }
                    });

                    tableron();
                }
            })
        };

        const limitSellButton = document.querySelector('#LimitSellButton');
        if(limitSellButton){
            limitSellButton.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');
                    }
                }
                const pairFrom = this.getAttribute('data-pair-b');
                const pairTo = this.getAttribute('data-pair-q');
                const price = $('[data-input-chain="Price"][data-chain-type="limitSell"]').val();
                const quantity = $('[data-input-chain="Amount"][data-chain-type="limitSell"]').val();

                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": 'placeLimitOrder',
                        "p": {
                            "b": pairFrom,
                            "q": pairTo,
                            "qty": quantity,
                            "prc": price,
                            "s": "SELL"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your limit order in order book!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your limit order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const marketBuyButton = document.querySelector('#MarketBuyButton');
        if(marketBuyButton){
            marketBuyButton.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const pairTo = this.getAttribute('data-pair-q');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="marketBuy"]').val();

                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": 'placeMarketOrder',
                        "p": {
                            "b": pairFrom,
                            "q": pairTo,
                            "qty": quantity,
                            "s": "BUY"
                        }
                    }),
                    success: function(data) {
                        console.log(data)
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your market order complete!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your market order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const marketSellButton = document.querySelector('#MarketSellButton');
        if(marketSellButton){
            marketSellButton.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const pairTo = this.getAttribute('data-pair-q');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="marketSell"]').val();

                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": 'placeMarketOrder',
                        "p": {
                            "b": pairFrom,
                            "q": pairTo,
                            "qty": quantity,
                            "s": "SELL"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your market order complete!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your market order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const stopBuyButton = document.querySelector('#StopBuyButton');
        if(stopBuyButton){
            stopBuyButton.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const pairTo = this.getAttribute('data-pair-q');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="stopBuy"]').val();
                const price = $('[data-input-chain="Price"][data-chain-type="stopBuy"]').val();
                const limit = $('[data-input-chain="Stop"][data-chain-type="stopBuy"]').val();

                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": "placeStopLimitOrder",
                        "p": {
                            "b": pairFrom,
                            "q": pairTo,
                            "qty": quantity,
                            "prc": price,
                            "sp": limit,
                            "s": "BUY"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your stop-limit order in order book!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your stop-limit order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const stopSellButton = document.querySelector('#StopSellButton');
        if(stopSellButton){
            stopSellButton.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const pairTo = this.getAttribute('data-pair-q');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="stopSell"]').val();
                const price = $('[data-input-chain="Price"][data-chain-type="stopSell"]').val();
                const limit = $('[data-input-chain="Stop"][data-chain-type="stopSell"]').val();

                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": "placeStopLimitOrder",
                        "p": {
                            "b": pairFrom,
                            "q": pairTo,
                            "qty": quantity,
                            "prc": price,
                            "sp": limit,
                            "s": "SELL"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your stop-limit order in order book!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your stop-limit order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const LFSBuy = document.querySelector('#LimitLongButtonLFS');
        if(LFSBuy){
            LFSBuy.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');
                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');
                    }
                    return
                } else {
                    const pairFrom = this.getAttribute('data-pair-b');
                    const price = $('[data-input-chain="Price"][data-chain-type="limitBuyLFS"]').val();
                    const quantity = $('[data-input-chain="Amount"][data-chain-type="limitBuyLFS"]').val();

                    // TODO LEVERAGE
                    const leverage = $('[data-leverage-select]').val();

                    $.ajax({
                        url: '/terminal_ajaxUYGYUkf431',
                        type: 'POST',
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            "m": 'placeLimitFuturesOrder',
                            "p": {
                                "b": pairFrom,
                                "qty": quantity,
                                "prc": price,
                                "l": leverage,
                                "s": "BUY"
                            }
                        }),
                        success: function(data) {
                            const notifyBlock = document.querySelector('#NotifyBlock');
                            if(notifyBlock && data['success'] === true){
                                createNotify(notifyBlock, 'Success', 'Your futures limit order in order book!');
                            } else if(notifyBlock && data['success'] !== true){
                                createNotify(notifyBlock, 'Something wrong!', 'Your futures limit order is not complete!');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching Binance ticker:', error);
                        }
                    });

                    tableron();
                }
            })
        };

        const LFSSell = document.querySelector('#LimitShortButtonLFS');
        if(LFSSell){
            LFSSell.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');
                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');
                    }
                    return
                } else {
                    const pairFrom = this.getAttribute('data-pair-b');
                    const price = $('[data-input-chain="Price"][data-chain-type="limitBuyLFS"]').val();
                    const quantity = $('[data-input-chain="Amount"][data-chain-type="limitBuyLFS"]').val();

                    const leverage = $('[data-leverage-select]').val();

                    $.ajax({
                        url: '/terminal_ajaxUYGYUkf431',
                        type: 'POST',
                        dataType: 'json',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            "m": 'placeLimitFuturesOrder',
                            "p": {
                                "b": pairFrom,
                                "qty": quantity,
                                "prc": price,
                                "l": leverage,
                                "s": "SELL"
                            }
                        }),
                        success: function(data) {
                            const notifyBlock = document.querySelector('#NotifyBlock');
                            if(notifyBlock && data['success'] === true){
                                createNotify(notifyBlock, 'Success', 'Your futures limit order in order book!');
                            } else if(notifyBlock && data['success'] !== true){
                                createNotify(notifyBlock, 'Something wrong!', 'Your futures limit order is not complete!');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching Binance ticker:', error);
                        }
                    });

                    tableron();
                }
            })
        };


        const MFSBuy = document.querySelector('#MarketBuyButtonMFS');
        if(MFSBuy){
            MFSBuy.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="marketBuyMFS"]').val();
                const leverage = $('[data-leverage-select]').val();

                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": 'placeMarketFuturesOrder',
                        "p": {
                            "b": pairFrom,
                            "qty": quantity,
                            "l": leverage,
                            "s": "BUY"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your futures market order complete!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your futures market order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const MFSSell = document.querySelector('#MarketSellButtonMFS');
        if(MFSSell){
            MFSSell.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="marketBuyMFS"]').val();
                const leverage = $('[data-leverage-select]').val();
                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": 'placeMarketFuturesOrder',
                        "p": {
                            "b": pairFrom,
                            "qty": quantity,
                            "l": leverage,
                            "s": "SELL"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your futures market order complete!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your futures market order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const stopBuyButtonSF = document.querySelector('#StopBuyButtonSF');
        if(stopBuyButtonSF){
            stopBuyButtonSF.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="stopBuySF"]').val();
                const price = $('[data-input-chain="Price"][data-chain-type="stopBuySF"]').val();
                const limit = $('[data-input-chain="Stop"][data-chain-type="stopBuySF"]').val();
                const leverage = $('[data-leverage-select]').val();


                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": "placeStopLimitFuturesOrder",
                        "p": {
                            "b": pairFrom,
                            "qty": quantity,
                            "prc": price,
                            "sp": limit,
                            'l': leverage,
                            "s": "BUY"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your stop-limit order in order book!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your stop-limit order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }

        const stopSellButtonSF = document.querySelector('#StopSellButtonSF');
        if(stopSellButtonSF){
            stopSellButtonSF.addEventListener('click', function(){
                if(disable){
                    const notifyBlock = document.querySelector('#NotifyBlock');
                    if(notifyBlock){
                        createNotify(notifyBlock, 'Success', 'Yea, good');

                    } else {
                        $('#FunctionalDisabledModal')[0].classList.remove('_hidden');

                    }
                }

                const pairFrom = this.getAttribute('data-pair-b');
                const quantity = $('[data-input-chain="Amount"][data-chain-type="stopBuySF"]').val();
                const price = $('[data-input-chain="Price"][data-chain-type="stopBuySF"]').val();
                const limit = $('[data-input-chain="Stop"][data-chain-type="stopBuySF"]').val();
                const leverage = $('[data-leverage-select]').val();


                $.ajax({
                    url: '/terminal_ajaxUYGYUkf431',
                    type: 'POST',
                    dataType: 'json',
                    contentType: 'application/json',
                    data: JSON.stringify({
                        "m": "placeStopLimitFuturesOrder",
                        "p": {
                            "b": pairFrom,
                            "qty": quantity,
                            "prc": price,
                            "sp": limit,
                            'l': leverage,
                            "s": "SELL"
                        }
                    }),
                    success: function(data) {
                        const notifyBlock = document.querySelector('#NotifyBlock');
                        if(notifyBlock && data['success'] === true){
                            createNotify(notifyBlock, 'Success', 'Your stop-limit order in order book!');
                        } else if(notifyBlock && data['success'] !== true){
                            createNotify(notifyBlock, 'Something wrong!', 'Your stop-limit order is not complete!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching Binance ticker:', error);
                    }
                });
                tableron();
            })
        }


        function setStroke(attr, mark2, mark3, mark4){
            if(attr === '1'){
                mark2?.setAttribute('stroke', '#585858');
                mark3?.setAttribute('stroke', '#585858');
                mark4?.setAttribute('stroke', '#585858');
                return
            }
            if(attr === '2'){
                mark2?.setAttribute('stroke', '#D7A3E5');
                mark3?.setAttribute('stroke', '#585858');
                mark4?.setAttribute('stroke', '#585858');
                return
            }
            if(attr === '3'){
                mark2?.setAttribute('stroke', '#D7A3E5');
                mark3?.setAttribute('stroke', '#D7A3E5');
                mark4?.setAttribute('stroke', '#585858');
                return
            }
            if(attr === '4' || attr === '5'){
                mark2?.setAttribute('stroke', '#D7A3E5');
                mark3?.setAttribute('stroke', '#D7A3E5');
                mark4?.setAttribute('stroke', '#D7A3E5');
                return
            }
        }

        function setMarks(attr, data = [0, 0], mark2, mark3, mark4, rangeMark, lgObj){
            rangeMark.setAttribute('data-input-percent', `${data[0]}`);
            rangeMark.style.transform = `translateX(calc(${data[1]}% + 6px)) rotate(45deg) translateY(2px)`;

            setStroke(attr, mark2, mark3, mark4)

            if(lgObj.length > 0){
                for (let item of lgObj){
                    if(item[1] && item[2]){
                        item[1]?.setAttribute('offset', data[0] + '%');
                        item[2]?.setAttribute('offset', data[0] + '%');
                    }
                }
            }
        }

        function setMainMark(e, mouseX, mouseY, rangeMark, lgObj, range, mark1, mark2, mark3, mark4) {
            let clientX, clientY;

            if (e.type === 'touchstart' || e.type === 'touchmove') {
                // Use the first touch point for touch events
                clientX = e.touches[0].clientX;
                clientY = e.touches[0].clientY;
            } else {
                // Use clientX and clientY directly for mouse events
                clientX = e.clientX;
                clientY = e.clientY;
            }

            const rect = range.getBoundingClientRect();
            mouseX = clientX - rect.left;
            mouseY = clientY - rect.top;

            let percentage = (mouseX / rect.width) * 100;

            if (percentage > 95) {
                percentage = 95;
            } else if (percentage < 1) {
                percentage = 1;
            }
            let truePercentage = ((percentage - 1) / 94) * 100;

            rangeMark.setAttribute('data-input-percent', truePercentage.toFixed(2));
            rangeMark.style.transform = `translateX(calc(${percentage}% + 6px)) rotate(45deg) translateY(2px)`;

            if (lgObj.length > 0) {
                for (let item of lgObj) {
                    if (item[1] && item[2]) {
                        item[1]?.setAttribute('offset', percentage + '%');
                        item[2]?.setAttribute('offset', percentage + '%');
                    }
                }
            }

            if (truePercentage <= 24) {
                mark2?.setAttribute('stroke', '#585858');
                mark3?.setAttribute('stroke', '#585858');
                mark4?.setAttribute('stroke', '#585858');
            } else if (truePercentage > 24 && truePercentage <= 49) {
                mark2?.setAttribute('stroke', '#D7A3E5');
                mark3?.setAttribute('stroke', '#585858');
                mark4?.setAttribute('stroke', '#585858');
            } else if (truePercentage > 49 && truePercentage <= 74) {
                mark2?.setAttribute('stroke', '#D7A3E5');
                mark3?.setAttribute('stroke', '#D7A3E5');
                mark4?.setAttribute('stroke', '#585858');
            } else if (truePercentage > 74 && truePercentage < 100) {
                mark2?.setAttribute('stroke', '#D7A3E5');
                mark3?.setAttribute('stroke', '#D7A3E5');
                mark4?.setAttribute('stroke', '#D7A3E5');
            }
        }

        function handleRange(range, rangeMark, lg1, lg1Pink, lg1Grey, lg2, lg2Pink, lg2Grey, lg3, lg3Pink, lg3Grey, lg4, lg4Pink, lg4Grey,
                             mark1, mark2, mark3, mark4, mark5){
            const lgObj = [
                [lg1, lg1Pink, lg1Grey],
                [lg2, lg2Pink, lg2Grey],
                [lg3, lg3Pink, lg3Grey],
                [lg4, lg4Pink, lg4Grey]
            ];
            const marks = [mark1, mark2, mark3, mark4, mark5];

            let isLeftButtonDown = false;
            let mouseX;
            let mouseY;

            if(range && rangeMark && lg1 && lg2 && lg3 && lg4){

                range.addEventListener('click', function(e){
                    const target = e.target;
                    if(!target){
                        return
                    }

                    const closest = target?.closest('[data-this]');

                    if(closest){
                        return
                    }

                    setMainMark(e, mouseX, mouseY, rangeMark, lgObj, range, mark1, mark2, mark3, mark4);
                });

                range.addEventListener('mousedown', function (event) {
                    if (event.button === 0) {
                        isLeftButtonDown = true;
                    }
                });

                document.addEventListener('mouseup', function () {
                    isLeftButtonDown = false;
                });

                document.addEventListener('mousemove', function (e) {
                    if (isLeftButtonDown) {
                        setMainMark(e, mouseX, mouseY, rangeMark, lgObj, range, mark1, mark2, mark3, mark4);
                    }
                });

                range.addEventListener('touchstart', function (e) {
                    if (e.touches.length === 1) {
                        isLeftButtonDown = true;
                        setMainMark(e.touches[0], mouseX, mouseY, rangeMark, lgObj, range, mark1, mark2, mark3, mark4);
                    }
                });

                document.addEventListener('touchend', function () {
                    isLeftButtonDown = false;
                });

                document.addEventListener('touchmove', function (e) {
                    if (isLeftButtonDown && e.touches.length === 1) {
                        setMainMark(e.touches[0], mouseX, mouseY, rangeMark, lgObj, range, mark1, mark2, mark3, mark4);
                    }
                });

                if(marks.length > 0){
                    for (let item of marks){
                        item?.addEventListener('click', function(){
                            const attr = this.getAttribute('data-this');
                            if(!attr){
                                return
                            }

                            const marksData = {
                                '1': [0, 1],
                                '2': [25, 25],
                                '3': [50, 48.20],
                                '4': [75, 72],
                                '5': [100, 95]
                            }
                            setMarks(attr, marksData[attr], mark2, mark3, mark4, rangeMark, lgObj);
                        })
                    }
                }
            }
        }

        // RANGE 1
        const rangeBuy = document.querySelector('#RangeBuy');
        const rangeBuyMark = document.querySelector('#RangeBuyMark');
        const lg1 = document.querySelector('#customGradient1');
        const lg1Pink = document.querySelector('#lg1Pink');
        const lg1Grey = document.querySelector('#lg1Grey');

        const lg2 = document.querySelector('#customGradient2');
        const lg2Pink = document.querySelector('#lg2Pink');
        const lg2Grey = document.querySelector('#lg2Grey');

        const lg3 = document.querySelector('#customGradient3');
        const lg3Pink = document.querySelector('#lg3Pink');
        const lg3Grey = document.querySelector('#lg3Grey');

        const lg4 = document.querySelector('#customGradient4');
        const lg4Pink = document.querySelector('#lg4Pink');
        const lg4Grey = document.querySelector('#lg4Grey');

        const mark1 = document.querySelector('#Mark1');
        const mark2 = document.querySelector('#Mark2');
        const mark3 = document.querySelector('#Mark3');
        const mark4 = document.querySelector('#Mark4');
        const mark5 = document.querySelector('#Mark5');

        handleRange(rangeBuy, rangeBuyMark, lg1, lg1Pink, lg1Grey, lg2, lg2Pink, lg2Grey, lg3, lg3Pink, lg3Grey, lg4,
            lg4Pink, lg4Grey, mark1, mark2, mark3, mark4, mark5);

        // RANGE 2
        const rangeSell = document.querySelector('#RangeSell');
        const rangeSellMark = document.querySelector('#RangeSellMark');
        const lg1S = document.querySelector('#customGradient1S');
        const lg1PinkS = document.querySelector('#lg1PinkS');
        const lg1GreyS = document.querySelector('#lg1GreyS');

        const lg2S = document.querySelector('#customGradient2S');
        const lg2PinkS = document.querySelector('#lg2PinkS');
        const lg2GreyS = document.querySelector('#lg2GreyS');

        const lg3S = document.querySelector('#customGradient3S');
        const lg3PinkS = document.querySelector('#lg3PinkS');
        const lg3GreyS = document.querySelector('#lg3GreyS');

        const lg4S = document.querySelector('#customGradient4S');
        const lg4PinkS = document.querySelector('#lg4PinkS');
        const lg4GreyS = document.querySelector('#lg4GreyS');

        const mark1S = document.querySelector('#Mark1S');
        const mark2S = document.querySelector('#Mark2S');
        const mark3S = document.querySelector('#Mark3S');
        const mark4S = document.querySelector('#Mark4S');
        const mark5S = document.querySelector('#Mark5S');

        handleRange(rangeSell, rangeSellMark, lg1S, lg1PinkS, lg1GreyS, lg2S, lg2PinkS, lg2GreyS, lg3S, lg3PinkS, lg3GreyS, lg4S,
            lg4PinkS, lg4GreyS, mark1S, mark2S, mark3S, mark4S, mark5S);


        // RANGE 3
        const marketRangeBuy = document.querySelector('#MarketRangeBuy');
        const marketRangeBuyMark = document.querySelector('#MarketRangeBuyMark');
        const lg1MB = document.querySelector('#customGradient1MB');
        const lg1PinkMB = document.querySelector('#lg1PinkMB');
        const lg1GreyMB = document.querySelector('#lg1GreyMB');

        const lg2MB = document.querySelector('#customGradient2MB');
        const lg2PinkMB = document.querySelector('#lg2PinkMB');
        const lg2GreyMB = document.querySelector('#lg2GreyMB');

        const lg3MB = document.querySelector('#customGradient3MB');
        const lg3PinkMB = document.querySelector('#lg3PinkMB');
        const lg3GreyMB = document.querySelector('#lg3GreyMB');

        const lg4MB = document.querySelector('#customGradient4MB');
        const lg4PinkMB = document.querySelector('#lg4PinkMB');
        const lg4GreyMB = document.querySelector('#lg4GreyMB');

        const mark1MB = document.querySelector('#MarketBuyMark1');
        const mark2MB = document.querySelector('#MarketBuyMark2');
        const mark3MB = document.querySelector('#MarketBuyMark3');
        const mark4MB = document.querySelector('#MarketBuyMark4');
        const mark5MB = document.querySelector('#MarketBuyMark5');

        handleRange(marketRangeBuy, marketRangeBuyMark, lg1MB, lg1PinkMB, lg1GreyMB, lg2MB, lg2PinkMB, lg2GreyMB, lg3MB, lg3PinkMB, lg3GreyMB, lg4MB,
            lg4PinkMB, lg4GreyMB, mark1MB, mark2MB, mark3MB, mark4MB, mark5MB);


        // RANGE 4
        const marketRangeSell = document.querySelector('#MarketRangeSell');
        const marketRangeSellMark = document.querySelector('#MarketRangeSellMark');
        const lg1MS = document.querySelector('#customGradient1MS');
        const lg1PinkMS = document.querySelector('#lg1PinkMS');
        const lg1GreyMS = document.querySelector('#lg1GreyMS');

        const lg2MS = document.querySelector('#customGradient2MS');
        const lg2PinkMS = document.querySelector('#lg2PinkMS');
        const lg2GreyMS = document.querySelector('#lg2GreyMS');

        const lg3MS = document.querySelector('#customGradient3MS');
        const lg3PinkMS = document.querySelector('#lg3PinkMS');
        const lg3GreyMS = document.querySelector('#lg3GreyMS');

        const lg4MS = document.querySelector('#customGradient4MS');
        const lg4PinkMS = document.querySelector('#lg4PinkMS');
        const lg4GreyMS = document.querySelector('#lg4GreyMS');

        const mark1MS = document.querySelector('#MarketSellMark1S');
        const mark2MS = document.querySelector('#MarketSellMark2S');
        const mark3MS = document.querySelector('#MarketSellMark3S');
        const mark4MS = document.querySelector('#MarketSellMark4S');
        const mark5MS = document.querySelector('#MarketSellMark5S');

        handleRange(marketRangeSell, marketRangeSellMark, lg1MS, lg1PinkMS, lg1GreyMS, lg2MS, lg2PinkMS, lg2GreyMS, lg3MS, lg3PinkMS, lg3GreyMS, lg4MS,
            lg4PinkMS, lg4GreyMS, mark1MS, mark2MS, mark3MS, mark4MS, mark5MS);

        // RANGE 5
        const stopRangeBuy = document.querySelector('#StopRangeBuy');
        const stopRangeBuyMark = document.querySelector('#RangeStopBuyMark');
        const lg1SB = document.querySelector('#customGradient1SB');
        const lg1PinkSB = document.querySelector('#lg1PinkSB');
        const lg1GreySB = document.querySelector('#lg1GreySB');

        const lg2SB = document.querySelector('#customGradient2SB');
        const lg2PinkSB = document.querySelector('#lg2PinkSB');
        const lg2GreySB = document.querySelector('#lg2GreySB');

        const lg3SB = document.querySelector('#customGradient3SB');
        const lg3PinkSB = document.querySelector('#lg3PinkSB');
        const lg3GreySB = document.querySelector('#lg3GreySB');

        const lg4SB = document.querySelector('#customGradient4SB');
        const lg4PinkSB = document.querySelector('#lg4PinkSB');
        const lg4GreySB = document.querySelector('#lg4GreySB');

        const mark1SB = document.querySelector('#Mark1SB');
        const mark2SB = document.querySelector('#Mark2SB');
        const mark3SB = document.querySelector('#Mark3SB');
        const mark4SB = document.querySelector('#Mark4SB');
        const mark5SB = document.querySelector('#Mark5SB');

        handleRange(stopRangeBuy, stopRangeBuyMark, lg1SB, lg1PinkSB, lg1GreySB, lg2SB, lg2PinkSB, lg2GreySB, lg3SB, lg3PinkSB, lg3GreySB, lg4SB,
            lg4PinkSB, lg4GreySB, mark1SB, mark2SB, mark3SB, mark4SB, mark5SB);


        // RANGE 6
        const stopRangeSell = document.querySelector('#StopRangeSell');
        const rangeStopSellMark = document.querySelector('#RangeStopSellMark');
        const lg1SS = document.querySelector('#customGradient1SS');
        const lg1PinkSS = document.querySelector('#lg1PinkSS');
        const lg1GreySS = document.querySelector('#lg1GreySS');

        const lg2SS = document.querySelector('#customGradient2SS');
        const lg2PinkSS = document.querySelector('#lg2PinkSS');
        const lg2GreySS = document.querySelector('#lg2GreySS');

        const lg3SS = document.querySelector('#customGradient3SS');
        const lg3PinkSS = document.querySelector('#lg3PinkSS');
        const lg3GreySS = document.querySelector('#lg3GreySS');

        const lg4SS = document.querySelector('#customGradient4SS');
        const lg4PinkSS = document.querySelector('#lg4PinkSS');
        const lg4GreySS = document.querySelector('#lg4GreySS');

        const mark1SS = document.querySelector('#Mark1SS');
        const mark2SS = document.querySelector('#Mark2SS');
        const mark3SS = document.querySelector('#Mark3SS');
        const mark4SS = document.querySelector('#Mark4SS');
        const mark5SS = document.querySelector('#Mark5SS');

        handleRange(stopRangeSell, rangeStopSellMark, lg1SS, lg1PinkSS, lg1GreySS, lg2SS, lg2PinkSS, lg2GreySS, lg3SS, lg3PinkSS, lg3GreySS, lg4SS,
            lg4PinkSS, lg4GreySS, mark1SS, mark2SS, mark3SS, mark4SS, mark5SS);

        // RANGE 7 LFS
        const LFSrangeBuy = document.querySelector('#RangeBuyLFS');
        const LFSrangeBuyMark = document.querySelector('#RangeBuyMarkLFS');
        const LFSlg1 = document.querySelector('#customGradient1LFS');
        const LFSlg1Pink = document.querySelector('#lg1PinkLFS');
        const LFSlg1Grey = document.querySelector('#lg1GreyLFS');

        const LFSlg2 = document.querySelector('#customGradient2LFS');
        const LFSlg2Pink = document.querySelector('#lg2PinkLFS');
        const LFSlg2Grey = document.querySelector('#lg2GreyLFS');

        const LFSlg3 = document.querySelector('#customGradient3LFS');
        const LFSlg3Pink = document.querySelector('#lg3PinkLFS');
        const LFSlg3Grey = document.querySelector('#lg3GreyLFS');

        const LFSlg4 = document.querySelector('#customGradient4LFS');
        const LFSlg4Pink = document.querySelector('#lg4PinkLFS');
        const LFSlg4Grey = document.querySelector('#lg4GreyLFS');

        const LFSmark1 = document.querySelector('#Mark1LFS');
        const LFSmark2 = document.querySelector('#Mark2LFS');
        const LFSmark3 = document.querySelector('#Mark3LFS');
        const LFSmark4 = document.querySelector('#Mark4LFS');
        const LFSmark5 = document.querySelector('#Mark5LFS');

        handleRange(LFSrangeBuy, LFSrangeBuyMark, LFSlg1, LFSlg1Pink, LFSlg1Grey, LFSlg2, LFSlg2Pink, LFSlg2Grey, LFSlg3, LFSlg3Pink, LFSlg3Grey, LFSlg4,
            LFSlg4Pink, LFSlg4Grey, LFSmark1, LFSmark2, LFSmark3, LFSmark4, LFSmark5);

        // RANGE 7 MFS
        const MFSmarketRangeBuy = document.querySelector('#MarketRangeBuyMFS');
        const MFSmarketRangeBuyMark = document.querySelector('#MarketRangeBuyMarkMFS');
        const MFSlg1 = document.querySelector('#customGradient1MBMFS');
        const MFSlg1Pink = document.querySelector('#lg1PinkMBMFS');
        const MFSlg1Grey = document.querySelector('#lg1GreyMBMFS');

        const MFSlg2 = document.querySelector('#customGradient2MBMFS');
        const MFSlg2Pink = document.querySelector('#lg2PinkMBMFS');
        const MFSlg2Grey = document.querySelector('#lg2GreyMBMFS');

        const MFSlg3 = document.querySelector('#customGradient3MBMFS');
        const MFSlg3Pink = document.querySelector('#lg3PinkMBMFS');
        const MFSlg3Grey = document.querySelector('#lg3GreyMBMFS');

        const MFSlg4 = document.querySelector('#customGradient4MBMFS');
        const MFSlg4Pink = document.querySelector('#lg4PinkMBMFS');
        const MFSlg4Grey = document.querySelector('#lg4GreyMBMFS');

        const MFSmark1 = document.querySelector('#MarketBuyMark1MFS');
        const MFSmark2 = document.querySelector('#MarketBuyMark2MFS');
        const MFSmark3 = document.querySelector('#MarketBuyMark3MFS');
        const MFSmark4 = document.querySelector('#MarketBuyMark4MFS');
        const MFSmark5 = document.querySelector('#MarketBuyMark5MFS');

        handleRange(MFSmarketRangeBuy, MFSmarketRangeBuyMark, MFSlg1, MFSlg1Pink, MFSlg1Grey, MFSlg2, MFSlg2Pink, MFSlg2Grey, MFSlg3, MFSlg3Pink, MFSlg3Grey, MFSlg4,
            MFSlg4Pink, MFSlg4Grey, MFSmark1, MFSmark2, MFSmark3, MFSmark4, MFSmark5);

        // RANGE 8 SF
        const SFstopRangeBuy = document.querySelector('#StopRangeBuySF');
        const SFstopRangeBuyMark = document.querySelector('#RangeStopBuyMarkSF');
        const SFlg1SB = document.querySelector('#customGradient1SBSF');
        const SFlg1PinkSB = document.querySelector('#lg1PinkSBSF');
        const SFlg1GreySB = document.querySelector('#lg1GreySBSF');

        const SFlg2SB = document.querySelector('#customGradient2SBSF');
        const SFlg2PinkSB = document.querySelector('#lg2PinkSBSF');
        const SFlg2GreySB = document.querySelector('#lg2GreySBSF');

        const SFlg3SB = document.querySelector('#customGradient3SBSF');
        const SFlg3PinkSB = document.querySelector('#lg3PinkSBSF');
        const SFlg3GreySB = document.querySelector('#lg3GreySBSF');

        const SFlg4SB = document.querySelector('#customGradient4SBSF');
        const SFlg4PinkSB = document.querySelector('#lg4PinkSBSF');
        const SFlg4GreySB = document.querySelector('#lg4GreySBSF');

        const SFmark1SB = document.querySelector('#Mark1SBSF');
        const SFmark2SB = document.querySelector('#Mark2SBSF');
        const SFmark3SB = document.querySelector('#Mark3SBSF');
        const SFmark4SB = document.querySelector('#Mark4SBSF');
        const SFmark5SB = document.querySelector('#Mark5SBSF');

        handleRange(
            SFstopRangeBuy, SFstopRangeBuyMark, SFlg1SB, SFlg1PinkSB, SFlg1GreySB, SFlg2SB, SFlg2PinkSB, SFlg2GreySB, SFlg3SB, SFlg3PinkSB, SFlg3GreySB, SFlg4SB,
            SFlg4PinkSB, SFlg4GreySB, SFmark1SB, SFmark2SB, SFmark3SB, SFmark4SB, SFmark5SB
        );

        const leverageSelect = document.querySelector('[data-leverage-select]');
        console.log({leverageSelect})
        if(leverageSelect){
            let currentLeverage = leverageSelect.value;
            leverageSelect.addEventListener('change', () => {
                $('#LimitTotalBuyLFS').val($('#LimitTotalBuyLFS').val() * currentLeverage / leverageSelect.value);
                $('#StopTotalBuySF').val($('#StopTotalBuySF').val() * currentLeverage / leverageSelect.value);
                currentLeverage = leverageSelect.value;
            })
        }

    })
    
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
