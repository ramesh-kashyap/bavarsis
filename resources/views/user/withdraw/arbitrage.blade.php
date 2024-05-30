

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
    .table__item--price {
        justify-content: left;
    }

    .trade__tw-wrapper {
        background: transparent;
        border: 0px;

    }

    .trade__tw-widget {
        border: 0px;
    }

    .trade__history-table {
        min-height: 450px;
    }

    .trade__exchange-info > img {
        height: 29px;
        width: 29px;
    }

    .trade__exchange-info {
        font-size: 15px;
    }

    #list_buy_ex {
        gap: 23px !important;
    }

    #list_sell_ex {
        gap: 23px !important;
    }
</style>


<style>
    .bonus {
        flex-direction: column;
        justify-content: center;
    }

    .bonus__item-info {
        flex-direction: column;
        text-align: left !important;
        align-items: flex-start !important;
    }

    .bonus__item-info p {
        margin: 3px;
    }


    .trading-bot {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 12px;
    }

    .trading-bot__card {
        cursor: pointer;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 24px;
        padding: 20px 16px;
        border-radius: 20px;
        border: 1px solid var(--color-transparency, rgba(0, 0, 0, 0.20));
        background: linear-gradient(211deg, rgba(0, 0, 0, 0.20) 0.01%, rgba(0, 0, 0, 0.15) 42.05%, rgba(0, 0, 0, 0.10) 104.81%), var(--color-transparency, rgba(0, 0, 0, 0.20));
        transition: all 0.5s ease;
    }

    .trading-bot__card:hover {
        transition: all 0.5s ease;
        border: 1px solid #d7a3e5;
    }

    .trading-bot__header {
        display: flex;
        flex-direction: row;
        gap: 16px;
        justify-content: space-between;
        align-items: center;
    }

    .trading-bot__head-left {
        display: flex;
        flex-direction: row;
        gap: 16px;
        align-items: center;
    }

    .trading-bot__card path {
        transition: all 0.5s ease;
    }

    .trading-bot__card:hover path {
        transition: all 0.5s ease;
        fill: #d7a3e5;
    }

    .trading-bot__head-title {
        color: var(--color-white, #FFF);
        font-family: Russo One;
        font-size: 1.125rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .trading-bot__head-right {
        display: flex;
        flex-direction: row;
        gap: 16px;
        align-items: center;
        justify-content: center;
    }

    .trading-bot__head-text {
        color: var(--color-light-gray, #999);
        font-family: sans-serif;
        font-size: 0.75rem;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .trading-bot__date {
        color: var(--color-white, #FFF);
        font-family: sans-serif;
        font-size: 0.75rem;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .trading-bot__info {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 16px;
        align-items: flex-end;
        flex-wrap: wrap;
    }

    .trading-bot__list {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
    }

    .trading-bot__item {
        color: var(--color-white, #FFF);
        font-family: Russo One;
        font-size: 0.75rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        display: flex;
        align-items: center;
    }

    .trading-bot__item::before {
        content: '';
        width: 6px;
        height: 6px;
        background: #d7a3e5;
        display: inline-block;
        margin-right: 10px;
    }

    .trading-bot__info-percent-wrapper {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .trading-bot__info-percent {
        color: var(--color-pink, #D7A3E5);
        text-align: right;
        font-family: Russo One;
        font-size: 1rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .trading-bot__foot {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        align-items: flex-end;
    }

    .trading-bot__foot-info {
    }

    .trading-bot__foot-info-part {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: flex-start;
    }

    .trading-bot__foot-text {
        color: var(--color-light-gray, #999);
        font-family: sans-serif;
        font-size: 0.75rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-right: 10px;
    }

    .trading-bot__foot-text-2 {
        color: var(--color-white, #FFF);
        font-family: sans-serif;
        font-size: 0.875rem;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .trading-bot__foot-text-2--strong {
        color: var(--color-white, #FFF);
        font-family: sans-serif;
        font-size: 0.875rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .trading-bot__foot-img {
    }

    .modal-tb {
        position: fixed;
        inset: 0;
        backdrop-filter: blur(6px);
        visibility: hidden;
        z-index: -1;
        opacity: 0;
        user-select: none;
    }

    .modal-tb._active {
        z-index: 10000000;
        visibility: visible;
        opacity: 1;
        transition: all 0.5s ease;
    }

    .modal-tb__content {
        border-radius: 20px;
        border: 1px solid var(--color-transparency, rgba(0, 0, 0, 0.20));
        background: var(--color-light-black, #222);
        position: absolute;
        top: 50%;
        left: 120%;
        transform: translate(-50%, -50%);
        background-size: cover;
        max-width: min(90%, 1200px);
        width: 100%;
        max-height: min(80%, 650px);
        height: 100%;
        border-radius: 15px;
        box-shadow: 0px 0px 20px 0px #0000004d;
        opacity: 0;
        transition: all 0.5s ease;
        gap: 36px;
        overflow: auto;
        display: grid;
        justify-items: center;
        align-items: start;
        padding: 80px 70px;
        user-select: none;
    }

    .modal-tb__content._active {
        left: 50%;
        opacity: 1;
        transition: all 0.5s ease;
    }


    .modal-tb__main {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 24px;
    }

    .modal-tb__head-wrapper {
        gap: 40px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    .modal-tb__head-left {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .modal-tb__head-title {
        color: var(--color-white, #FFF);
        font-family: Russo One;
        font-size: 1.5rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        text-transform: uppercase;
    }

    .modal-tb__head-right {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        gap: 8px;
    }

    .modal-tb__head-right-item {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: center;
    }

    .modal-tb__head-text {
        color: var(--color-light-gray, #999);
        font-family: Raleway;
        font-size: 0.875rem;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .modal-tb__head-date {
        color: var(--color-white, #FFF);
        font-family: sans-serif;
        font-size: 1rem;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }

    .modal-tb__info {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        justify-content: center;
    }

    .modal-tb__info-text {
        color: var(--color-gray, #585858);
        font-family: Raleway;
        font-size: 1.125rem;
        font-style: normal;
        font-weight: 400;
        line-height: 140%;
        margin: unset;
        text-align: center;
    }

    ._mtb-gray {
        color: var(--color-gray, #585858);
        font-family: Raleway;
        font-size: 1.125rem;
        font-style: normal;
        font-weight: 700;
        line-height: 140%;
    }

    .modal-tb__stat {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 60px;
    }

    .modal-tb__stat-left {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .modal-tb__stat-info {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .modal-tb__stat-img-currency {
        color: var(--color-pink, #D7A3E5);
        text-align: right;
        font-family: Russo One;
        font-size: 1rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .modal-tb__stat-img-graph {
        max-width: 140px;
        width: 100%
    }

    .modal-tb__stat-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .modal-tb__stat-text {
        color: var(--color-white, #FFF);
        font-family: Russo One;
        font-size: 0.9375rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    ._fw700 {
        font-weight: 700;
    }

    .modal-tb__table-wrapper {
        max-width: 880px;
        width: 100%;
        overflow: auto;
        position: relative;
        min-height: 315px;
    }

    .modal-tb__table {
        width: 100%;
        border-collapse: collapse;
        position: absolute;
    }

    .modal-tb__table tr {

        border-bottom: 1px solid #222222;
        background: rgba(255, 255, 255, 0.05);

    }

    .modal-tb__table tr:first-child {

        background: transparent;

    }

    .modal-tb__table td {
        padding: 14px 20px;
        color: var(--color-pink, #D7A3E5);
        text-align: center;
        font-variant-numeric: lining-nums proportional-nums;
        font-family: Raleway;
        font-size: 0.75rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .modal-tb__table th {
        padding: 14px 20px;
        color: var(--color-white, #FFF);
        text-align: center;
        font-family: Russo One;
        font-size: 0.75rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .modal-tb__table-td-title {
        color: var(--color-white, #FFF);
        font-family: Russo One;
        font-size: 0.875rem;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }


    @media screen and (max-width: 1600px) {
        html {
            font-size: 13px;
        }
    }

    @media screen and (max-width: 1430px) {
        html {
            font-size: 16px;
        }

        .trading-bot {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }
    }

    @media screen and (max-width: 1250px) {

        html {
            font-size: 13px;
        }

        .trading-bot {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }
    }

    @media screen and (max-width: 1100px) {

        html {
            font-size: 16px;
        }

        .trading-bot {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }
    }

    @media screen and (max-width: 850px) {

        html {
            font-size: 13px;
        }

        .trading-bot {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }
    }

    @media screen and (max-width: 750px) {

        html {
            font-size: 16px;
        }

        .trading-bot {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 12px;
        }

        .modal-tb__content {
            padding: 60px 30px 60px;
            max-height: min(60%, 650px);
        }

        .modal-tb__head-wrapper {
            flex-wrap: wrap;
            gap: 10px;
        }
    }

    @media screen and (max-width: 450px) {

        html {
            font-size: 13px;
        }

        .trading-bot {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 12px;
        }
    }
</style>


    <div class="modal-tb" id="ModalTB">
        <div class="modal-tb__content" id="ModalTBMain">
            <div class="close" data-mtb-close=""></div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB1">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 4</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">409 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">21 days </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 4</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">1.02 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=1+.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">CoinBase -  ETHUSDT</span>
                                <span class="modal-tb__stat-text">OKX - DOTUSDT</span>
                                <span class="modal-tb__stat-text">Kucoin - XRPUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">0.52%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.54%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">3.76%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.20%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.20%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.20%</span> / <span
                                            class="_green">1.80%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 300,640.00</span></td>
                                <td><span>$ 1,807,909.00</span></td>
                                <td><span>$ 24,619,608.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/9.08sec</span></td>
                                <td><span>0min/8.63sec</span></td>
                                <td><span>0min/8.80sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.04%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB2">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 12</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">368 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">6 days </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 12</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">1.62 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=2+.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">Binance ADAUSDT</span>
                                <span class="modal-tb__stat-text">Binance BTCUSDT</span>
                                <span class="modal-tb__stat-text">Kraken ETHUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">0.65%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.72%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">3.33%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.13%</span> / <span
                                            class="_green">1.77%</span></td>
                                <td><span class="_red">-1.13%</span> / <span
                                            class="_green">1.77%</span></td>
                                <td><span class="_red">-1.13%</span> / <span
                                            class="_green">1.77%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 170,375.00</span></td>
                                <td><span>$ 1,900,369.00</span></td>
                                <td><span>$ 22,845,508.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/8.96sec</span></td>
                                <td><span>0min/8.62sec</span></td>
                                <td><span>0min/9.21sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.03%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB3">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 13</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">368 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">11 days </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 13</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">-0.57 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=3-.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">CoinBase - ADAUSDT</span>
                                <span class="modal-tb__stat-text">OKX - DOTUSDT</span>
                                <span class="modal-tb__stat-text">BitFinex - LTCUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">0.17%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.34%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">2.51%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.18%</span> / <span
                                            class="_green">1.76%</span></td>
                                <td><span class="_red">-1.18%</span> / <span
                                            class="_green">1.76%</span></td>
                                <td><span class="_red">-1.18%</span> / <span
                                            class="_green">1.76%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 306,535.00</span></td>
                                <td><span>$ 1,903,637.00</span></td>
                                <td><span>$ 22,448,944.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/10.26sec</span></td>
                                <td><span>0min/9.17sec</span></td>
                                <td><span>0min/10.10sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>0.00%</span></td>
                                <td><span>0.00%</span></td>
                                <td><span>0.03%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB4">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 14</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">348 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">0 days  19 hours </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 14</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">0.80 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=4+.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">Binance - ADAUSDT</span>
                                <span class="modal-tb__stat-text">Binance - BTCUSDT</span>
                                <span class="modal-tb__stat-text">Kraken - ETHUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">0.71%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.84%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">3.15%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.15%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.15%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.15%</span> / <span
                                            class="_green">1.80%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 239,568.00</span></td>
                                <td><span>$ 1,760,274.00</span></td>
                                <td><span>$ 21,195,631.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/9.85sec</span></td>
                                <td><span>0min/9.78sec</span></td>
                                <td><span>0min/9.71sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.03%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB5">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 15</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">322 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">24 days </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 15</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">0.19 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=5+.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">CoinBase - ADAUSDT</span>
                                <span class="modal-tb__stat-text">OKX - DOTUSDT</span>
                                <span class="modal-tb__stat-text">Bitfinex - LTCUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">0.49%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.56%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">3.15%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.11%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.11%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.11%</span> / <span
                                            class="_green">1.80%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 274,425.00</span></td>
                                <td><span>$ 2,054,551.00</span></td>
                                <td><span>$ 21,219,138.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/10.31sec</span></td>
                                <td><span>0min/9.78sec</span></td>
                                <td><span>0min/9.95sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>0.00%</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.03%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB6">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 33</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">263 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">28 days </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 33</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">0.74 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=6+.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">Kraken - BTCUSDT</span>
                                <span class="modal-tb__stat-text">BitStamp - DOTUSDT</span>
                                <span class="modal-tb__stat-text">Kucoin - ADAUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">1.03%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.80%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">2.06%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.17%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.17%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.17%</span> / <span
                                            class="_green">1.80%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 230,691.00</span></td>
                                <td><span>$ 1,722,456.00</span></td>
                                <td><span>$ 15,522,151.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/9.62sec</span></td>
                                <td><span>0min/10.40sec</span></td>
                                <td><span>0min/8.81sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.02%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB7">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 67</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">220 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">23 days </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 67</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">0.23 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=7+.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">Bitfinex - ETHUSDT</span>
                                <span class="modal-tb__stat-text">Binance - SOLUSDT</span>
                                <span class="modal-tb__stat-text">OKX - BTCUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">0.41%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.67%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">1.27%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.17%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.17%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.17%</span> / <span
                                            class="_green">1.80%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 241,883.00</span></td>
                                <td><span>$ 2,354,473.00</span></td>
                                <td><span>$ 13,804,086.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/9.83sec</span></td>
                                <td><span>0min/9.26sec</span></td>
                                <td><span>0min/8.62sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>0.00%</span></td>
                                <td><span>0.01%</span></td>
                                <td><span>0.01%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                            <div class="modal-tb__main _hidden" data-mtb-content="MTB8">
                    <div class="modal-tb__head-wrapper">
                        <div class="modal-tb__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33"
                                 fill="none">
                                <path d="M23.8338 16.5002C27.8839 16.5002 31.1672 19.7834 31.1672 23.8335C31.1672 27.8836 27.8839 31.1668 23.8338 31.1668C19.7837 31.1668 16.5005 27.8836 16.5005 23.8335C16.5005 19.7834 19.7837 16.5002 23.8338 16.5002ZM16.5302 19.1659C16.1346 19.7836 15.8152 20.4549 15.5853 21.1663L6.17188 21.1667C5.61959 21.1667 5.17188 21.6144 5.17188 22.1667V23.3765C5.17188 24.2507 5.5532 25.0814 6.2161 25.6513C7.89354 27.0935 10.4216 27.8349 13.8338 27.8349C14.6323 27.8349 15.3824 27.7943 16.0847 27.7136C16.4166 28.3805 16.835 28.9988 17.3233 29.5541C16.2537 29.7419 15.0898 29.8349 13.8338 29.8349C9.98116 29.8349 6.99607 28.9594 4.91224 27.1679C3.80741 26.218 3.17188 24.8335 3.17188 23.3765V22.1667C3.17188 20.5099 4.51502 19.1667 6.17188 19.1667L16.5302 19.1659ZM23.8338 19.1658L23.714 19.1765C23.4419 19.2259 23.2273 19.4405 23.1779 19.7126L23.1672 19.8325L23.1667 23.1658L19.8307 23.1668L19.7109 23.1776C19.4387 23.227 19.2242 23.4415 19.1748 23.7137L19.164 23.8335L19.1748 23.9533C19.2242 24.2254 19.4387 24.44 19.7109 24.4894L19.8307 24.5002L23.168 24.4991L23.1686 27.8381L23.1794 27.958C23.2288 28.2301 23.4433 28.4447 23.7155 28.4941L23.8353 28.5048L23.9551 28.4941C24.2273 28.4447 24.4418 28.2301 24.4912 27.958L24.502 27.8381L24.5014 24.4991L27.8399 24.5002L27.9597 24.4894C28.2319 24.44 28.4464 24.2254 28.4958 23.9533L28.5066 23.8335L28.4958 23.7137C28.4464 23.4415 28.2319 23.227 27.9597 23.1776L27.8399 23.1668L24.5 23.1658L24.5005 19.8325L24.4897 19.7126C24.4404 19.4405 24.2258 19.2259 23.9537 19.1765L23.8338 19.1658ZM13.8343 3.16748C14.3405 3.16748 14.7589 3.54369 14.8251 4.03179L14.8343 4.16748L14.8332 5.16615L19.5005 5.16682C21.1573 5.16682 22.5005 6.50997 22.5005 8.16682V14.1729C22.5005 14.5745 22.4216 14.9576 22.2785 15.3076C20.7781 15.5779 19.4126 16.2359 18.2881 17.1732L8.16715 17.1729C6.5103 17.1729 5.16715 15.8298 5.16715 14.1729V8.16682C5.16715 6.50997 6.5103 5.16682 8.16715 5.16682L12.8332 5.16615L12.8343 4.16748C12.8343 3.70724 13.1452 3.31962 13.5684 3.2032L13.6986 3.17661L13.8343 3.16748ZM19.5005 7.16682H8.16715C7.61487 7.16682 7.16715 7.61454 7.16715 8.16682V14.1729C7.16715 14.7252 7.61487 15.1729 8.16715 15.1729H19.5005C20.0528 15.1729 20.5005 14.7252 20.5005 14.1729V8.16682C20.5005 7.61454 20.0528 7.16682 19.5005 7.16682ZM10.8329 9.16682C11.7528 9.16682 12.4986 9.91259 12.4986 10.8325C12.4986 11.7525 11.7528 12.4983 10.8329 12.4983C9.91292 12.4983 9.16715 11.7525 9.16715 10.8325C9.16715 9.91259 9.91292 9.16682 10.8329 9.16682ZM16.8232 9.16682C17.7431 9.16682 18.4889 9.91259 18.4889 10.8325C18.4889 11.7525 17.7431 12.4983 16.8232 12.4983C15.9032 12.4983 15.1575 11.7525 15.1575 10.8325C15.1575 9.91259 15.9032 9.16682 16.8232 9.16682Z"
                                      fill="#585858"/>
                            </svg>
                            <span class="modal-tb__head-title">Lancelot 68</span>
                        </div>

                        <div class="modal-tb__head-right">
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Run time:</span>
                                <span class="modal-tb__head-date">220 days</span>
                            </div>
                            <div class="modal-tb__head-right-item">
                                <span class="modal-tb__head-text">Last calibration:</span>
                                <span class="modal-tb__head-date">28 days </span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-tb__info">
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot 68</span> is an advanced cryptocurrency arbitrage bot specially developed for internal use by <span
                                    class="_mtb-gray">Bavarsis</span>. This bot is a high-tech solution designed to optimise and automate arbitrage trading processes on various cryptocurrency exchanges.
                        </p>
                        <p class="modal-tb__info-text"><span class="_pink">Lancelot features:</span></p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Automated arbitrage:</span> Lancelot performs automated arbitrage between different cryptocurrency exchanges, identifying price differences and conducting profitable trades.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Analytics and Market Research:</span> With powerful analysis algorithms, Lancelot continuously monitors market trends and changes to make informed decisions.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Security and Privacy:</span> Lancelot is designed with a strong emphasis on security, ensuring the protection of funds and confidential data processing.
                        </p>
                        <p class="modal-tb__info-text"><span class="_mtb-gray">Rapidly fast:</span> Every Lancelot transaction takes less than 10 seconds, making Lancelot one of the fastest on the market.
                        </p>
                    </div>

                    <div class="modal-tb__stat">
                        <div class="modal-tb__stat-left">
                            <div class="modal-tb__stat-info">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt=""
                                     class="modal-tb__stat-img-currency">
                                <span class="_pink">0.48 %</span>
                            </div>
                                                            <img src="{{asset('')}}assets/img/charts/Property 1=8+.png" alt="" class="modal-tb__stat-img-graph">
                            
                        </div>
                        <div class="modal-tb__stat-right">

                                                            <span class="modal-tb__stat-text">OKX - LTCUSDT</span>
                                <span class="modal-tb__stat-text">KRAKEN DOTUSDT</span>
                                <span class="modal-tb__stat-text">BitStamp XRPUSDT</span>
                            
                        </div>
                    </div>

                    <div class="modal-tb__table-wrapper">
                        <table class="modal-tb__table">
                            <tr>
                                <th></th>
                                <th>Week</th>
                                <th>Month</th>
                                <th>All time</th>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">AVG Daily P/L (%)</span></td>
                                <td><span class="_pink _fw700">-0.69%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">0.47%</span>
                                </td>
                                <td>
                                    <span class="_pink _fw700">1.44%</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Max Loss/Gain (%)</span></td>
                                <td><span class="_red">-1.20%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.20%</span> / <span
                                            class="_green">1.80%</span></td>
                                <td><span class="_red">-1.20%</span> / <span
                                            class="_green">1.80%</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Volume</span></td>
                                <td><span>$ 215,713.00</span></td>
                                <td><span>$ 1,574,281.00</span></td>
                                <td><span>$ 12,113,648.00</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Trades</span></td>
                                <td><span>0min/8.86sec</span></td>
                                <td><span>0min/9.58sec</span></td>
                                <td><span>0min/10.12sec</span></td>
                            </tr>
                            <tr>
                                <td><span class="modal-tb__table-td-title">Profit/Volume %</span></td>
                                <td><span>-0.01%</span></td>
                                <td><span>0.00%</span></td>
                                <td><span>0.01%</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                    </div>
    </div>
    <div class="bonus">
        <span style="color: var(--color-white, #FFF);
    text-align: center;
    font-variant-numeric: lining-nums proportional-nums;
    font-family: Russo One;
    font-size: 1.5rem;
    font-style: normal;
    font-weight: 400;
    line-height: normal;">Bavarsis Trading Bots</span>
        <div class="trading-bot" id="MTBTrigger">


                            <div class="trading-bot__card" data-mtb-trigger="MTB1">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 4</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">409 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">CoinBase - ETHUSDT</li>
                                <li class="trading-bot__item">OKX - DOTUSDT</li>
                                <li class="trading-bot__item">Kucoin - XRPUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">1.02 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">1,807,909.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">925,195.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=1+.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
                            <div class="trading-bot__card" data-mtb-trigger="MTB2">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 12</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">368 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">Binance ADAUSDT</li>
                                <li class="trading-bot__item">Binance BTCUSDT</li>
                                <li class="trading-bot__item">Kraken ETHUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">1.62 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">1,900,369.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">759,701.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=2+.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
                            <div class="trading-bot__card" data-mtb-trigger="MTB3">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 13</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">368 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">CoinBase - ADAUSDT</li>
                                <li class="trading-bot__item">OKX - DOTUSDT</li>
                                <li class="trading-bot__item">BitFinex - LTCUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">-0.57 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">1,903,637.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">563,773.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=3-.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
                            <div class="trading-bot__card" data-mtb-trigger="MTB4">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 14</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">348 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">Binance - ADAUSDT</li>
                                <li class="trading-bot__item">Binance - BTCUSDT</li>
                                <li class="trading-bot__item">Kraken - ETHUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">0.80 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">1,760,274.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">666,860.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=4+.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
                            <div class="trading-bot__card" data-mtb-trigger="MTB5">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 15</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">322 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">CoinBase - ADAUSDT</li>
                                <li class="trading-bot__item">OKX - DOTUSDT</li>
                                <li class="trading-bot__item">Bitfinex - LTCUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">0.19 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">2,054,551.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">669,377.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=5+.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
                            <div class="trading-bot__card" data-mtb-trigger="MTB6">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 33</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">263 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">Kraken - BTCUSDT</li>
                                <li class="trading-bot__item">BitStamp - DOTUSDT</li>
                                <li class="trading-bot__item">Kucoin - ADAUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">0.74 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">1,722,456.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">319,800.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=6+.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
                            <div class="trading-bot__card" data-mtb-trigger="MTB7">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 67</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">220 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">Bitfinex - ETHUSDT</li>
                                <li class="trading-bot__item">Binance - SOLUSDT</li>
                                <li class="trading-bot__item">OKX - BTCUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">0.23 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">2,354,473.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">175,716.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=7+.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
                            <div class="trading-bot__card" data-mtb-trigger="MTB8">
                    <div class="trading-bot__header">
                        <div class="trading-bot__head-left">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                 fill="none">
                                <path d="M23.3338 16.0002C27.3839 16.0002 30.6672 19.2834 30.6672 23.3335C30.6672 27.3836 27.3839 30.6668 23.3338 30.6668C19.2837 30.6668 16.0005 27.3836 16.0005 23.3335C16.0005 19.2834 19.2837 16.0002 23.3338 16.0002ZM16.0302 18.6659C15.6346 19.2836 15.3152 19.9549 15.0853 20.6663L5.67188 20.6667C5.11959 20.6667 4.67188 21.1144 4.67188 21.6667V22.8765C4.67188 23.7507 5.0532 24.5814 5.7161 25.1513C7.39354 26.5935 9.92156 27.3349 13.3338 27.3349C14.1323 27.3349 14.8824 27.2943 15.5847 27.2136C15.9166 27.8805 16.335 28.4988 16.8233 29.0541C15.7537 29.2419 14.5898 29.3349 13.3338 29.3349C9.48116 29.3349 6.49607 28.4594 4.41224 26.6679C3.30741 25.718 2.67188 24.3335 2.67188 22.8765V21.6667C2.67188 20.0099 4.01502 18.6667 5.67188 18.6667L16.0302 18.6659ZM23.3338 18.6658L23.214 18.6765C22.9419 18.7259 22.7273 18.9405 22.6779 19.2126L22.6672 19.3325L22.6667 22.6658L19.3307 22.6668L19.2109 22.6776C18.9387 22.727 18.7242 22.9415 18.6748 23.2137L18.664 23.3335L18.6748 23.4533C18.7242 23.7254 18.9387 23.94 19.2109 23.9894L19.3307 24.0002L22.668 23.9991L22.6686 27.3381L22.6794 27.458C22.7288 27.7301 22.9433 27.9447 23.2155 27.9941L23.3353 28.0048L23.4551 27.9941C23.7273 27.9447 23.9418 27.7301 23.9912 27.458L24.002 27.3381L24.0014 23.9991L27.3399 24.0002L27.4597 23.9894C27.7319 23.94 27.9464 23.7254 27.9958 23.4533L28.0066 23.3335L27.9958 23.2137C27.9464 22.9415 27.7319 22.727 27.4597 22.6776L27.3399 22.6668L24 22.6658L24.0005 19.3325L23.9897 19.2126C23.9404 18.9405 23.7258 18.7259 23.4537 18.6765L23.3338 18.6658ZM13.3343 2.66748C13.8405 2.66748 14.2589 3.04369 14.3251 3.53179L14.3343 3.66748L14.3332 4.66615L19.0005 4.66682C20.6573 4.66682 22.0005 6.00997 22.0005 7.66682V13.6729C22.0005 14.0745 21.9216 14.4576 21.7785 14.8076C20.2781 15.0779 18.9126 15.7359 17.7881 16.6732L7.66715 16.6729C6.0103 16.6729 4.66715 15.3298 4.66715 13.6729V7.66682C4.66715 6.00997 6.0103 4.66682 7.66715 4.66682L12.3332 4.66615L12.3343 3.66748C12.3343 3.20724 12.6452 2.81962 13.0684 2.7032L13.1986 2.67661L13.3343 2.66748ZM19.0005 6.66682H7.66715C7.11487 6.66682 6.66715 7.11454 6.66715 7.66682V13.6729C6.66715 14.2252 7.11487 14.6729 7.66715 14.6729H19.0005C19.5528 14.6729 20.0005 14.2252 20.0005 13.6729V7.66682C20.0005 7.11454 19.5528 6.66682 19.0005 6.66682ZM10.3329 8.66682C11.2528 8.66682 11.9986 9.41259 11.9986 10.3325C11.9986 11.2525 11.2528 11.9983 10.3329 11.9983C9.41292 11.9983 8.66715 11.2525 8.66715 10.3325C8.66715 9.41259 9.41292 8.66682 10.3329 8.66682ZM16.3232 8.66682C17.2431 8.66682 17.9889 9.41259 17.9889 10.3325C17.9889 11.2525 17.2431 11.9983 16.3232 11.9983C15.4032 11.9983 14.6575 11.2525 14.6575 10.3325C14.6575 9.41259 15.4032 8.66682 16.3232 8.66682Z"
                                      fill="#585858"/>
                            </svg>

                            <span class="trading-bot__head-title">Lancelot 68</span>
                        </div>
                        <div class="trading-bot__head-right">
                            <span class="trading-bot__head-text">Run time:</span>
                            <span class="trading-bot__date">220 days</span>
                        </div>
                    </div>

                    <div class="trading-bot__info">
                        <ul class="trading-bot__list">
                                                            <li class="trading-bot__item">OKX - LTCUSDT</li>
                                <li class="trading-bot__item">KRAKEN DOTUSDT</li>
                                <li class="trading-bot__item">BitStamp XRPUSDT</li>
                                                    </ul>
                        <div class="trading-bot__info-percent-wrapper">
                            <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/USDT.svg" alt="">
                            <span class="trading-bot__info-percent">0.48 %</span>
                        </div>
                    </div>

                    <div class="trading-bot__foot">
                        <div class="trading-bot__foot-info">
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">Monthly volume: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">1,574,281.00</span></span>
                            </div>
                            <div class="trading-bot__foot-info-part">
                                <span class="trading-bot__foot-text">All time profit: </span>
                                <span class="trading-bot__foot-text-2">USDT <span
                                            class="trading-bot__foot-text-2 trading-bot__foot-text-2--strong">174,858.00</span></span>
                            </div>
                        </div>
                                                    <img src="{{asset('')}}assets/img/charts/Property 1=8+.png" alt="" class="trading-bot__foot-img"
                                 style="max-height: 50px;">
                                            </div>
                </div>
            

        </div>
        <hr style="width: 100%;    height: 2px;
    background-color: #81818181;
    border: none;
    border-radius: 5px;">
    </div>
    <div class="trade">
        <div class="trade__top">
            <div class="trade__order">
                <div class="_one _f36">Order</div>
                <div class="trade__order-table">
                    <table class="table">
                        <thead class="_bold _f16">
                        <tr class="table__head-wrapper">
                            <th class="table__head table__head--number">#</th>
                            <th class="table__head table__head--name">Exchange:</th>
                            <th class="table__head table__head--price">Price (USDT):</th>
                            <th class="table__head table__head--quantity">Quantity:</th>
                            <th class="table__head table__head--action">Type:</th>
                        </tr>
                        </thead>
                        <tbody class="_medium _f16" id="last_orders">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="trade__tw">
                <div class="trade__top3"><span class="_one _f36">Market chart </span>

                </div>
                <div class="trade__tw-wrapper" style="padding: 0px !important;">
                    <!-- <div class="trade__tw-traders">
                        <div class="trade__trader">
                            <img src="{{asset('')}}assets/img/icons/face.png" alt="" class="trade__avatar">
                            <div class="trade__trader-info-wrapper">
                                <div class="_medium _f16">Dianne Russell</div>
                                <div class="trade__trader-main">
                                    <div class="_one _f14 _light-grey">Daily profit:</div>
                                    <div class="trade__trader-main-data">
                                        <img src="{{asset('')}}assets/img/icons/crypto/pink/ada.png" alt="">
                                        <div class="_medium _f18 _upper">USDT</div>
                                        <div class="_bold _f24">17.842</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trade__trader">
                            <img src="{{asset('')}}assets/img/icons/face.png" alt="" class="trade__avatar">
                            <div class="trade__trader-info-wrapper">
                                <div class="_medium _f16">Dianne Russell</div>
                                <div class="trade__trader-main">
                                    <div class="_one _f14 _light-grey">Daily profit:</div>
                                    <div class="trade__trader-main-data">
                                    <img src="{{asset('')}}assets/img/icons/crypto/pink/ada.png" alt="">
                                    <div class="_medium _f18 _upper">USDT</div>
                                    <div class="_bold _f24">17.842</div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="trade__trader">
                            <img src="{{asset('')}}assets/img/icons/face.png" alt="" class="trade__avatar">
                            <div class="trade__trader-info-wrapper">
                                <div class="_medium _f16">Dianne Russell</div>
                                <div class="trade__trader-main">
                                    <div class="_one _f14 _light-grey">Daily profit:</div>
                                    <div class="trade__trader-main-data">
                                    <img src="{{asset('')}}assets/img/icons/crypto/pink/ada.png" alt="">
                                    <div class="_medium _f18 _upper">USDT</div>
                                    <div class="_bold _f24">17.842</div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="trade__tw-widget" style="padding: 0px !important;">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div id="tradingview_823dd"></div>

                            <style>
                                @media screen and (min-width: 1440px) and (max-width: 1599px) {
                                    .trade__tw-widget {
                                        min-height: 460px;
                                    }
                                }
                            </style>


                            <script type="text/javascript"
                                    src="https://s3.tradingview.com/tv.js?_v=20230830055435"></script>
                            <script type="text/javascript">
                                new TradingView.widget(
                                    {
                                        "autosize": true,
                                        "symbol": "BINANCE:BTCUSDT",
                                        "interval": "1H",
                                        "timezone": "Etc/UTC",
                                        "theme": "dark",
                                        "style": "1",
                                        "locale": "en",
                                        "enable_publishing": false,
                                        "allow_symbol_change": true,
                                        "container_id": "tradingview_823dd"
                                    }
                                );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>


        <div class="trade__bottom">
            <div class="trade__history">
                <div class="_one _f36">History</div>
                <div class="trade__history-menu _one _upper _f16" style="justify-content: flex-start;">
                    <!-- <div class="trade__history-select-wrapper">
                        <div class="_one __f16 _light-grey _upper">sorted:</div>
                        <div class="trade__history-select">
                            <div class="trade__history-select-text TradeAllTypeMain">
                                <span class="dropdown__choose">All type</span>
                            </div>
                            <div class="trade__history-select-options _hidden TradeAllTypeMenu">
                                <label class="trade__history-select-option TradeAllTypeOptions">All type
                                    <input type="radio" name="history" id="" class="_hidden" checked>
                                </label>
                                <label class="trade__history-select-option TradeAllTypeOptions trade__history-select-option--buy">Buy
                                    <input type="radio" name="history" id="" class="_hidden">
                                </label>
                                <label class="trade__history-select-option TradeAllTypeOptions trade__history-select-option--sell">Sell
                                    <input type="radio" name="history" id="" class="_hidden">
                                </label>
                            </div>
                        </div>
                    </div> -->


                    <style>
                        .btn_search {
                            display: block;
                            width: 18px;
                            height: 18px;
                            background-image: url("../img/icons/search.svg");
                            background-size: cover;
                        }

                        .trade__history-search:after {
                            content: none;
                        }
                    </style>
                    <div class="_one _f13 _upper _light-grey trade__history-search"><input type="text"
                                                                                           placeholder="search by number"
                                                                                           id="order_search_id">

                    </div>
                    <span class="btn_search"></span>
                </div>

                <div class="trade__history-table">
                    <table class="table search_order_table">
                        <thead class="_bold _f16">
                        <tr class="table__head-wrapper">
                            <th class="table__head table__head--number">#</th>
                            <th class="table__head table__head--name">Exchange:</th>
                            <th class="table__head table__head--price">Price (USDT):</th>
                            <th class="table__head table__head--quantity">Quantity:</th>
                            <th class="table__head table__head--action">Type:</th>
                            <td class="table__item table__item--date">Date:</td>
                        </tr>
                        </thead>
                        <tbody class="_medium _f16" id="all_orders">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="bonus__ad bonus__ad--trade" style="gap: 24px; align-items: center;">

                <form action="" class="--trade" style="width: 100%;
            max-width: 378px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 16px;
            position: relative;">
                    <div class="_one _f18 _upper">choose currency</div>

                    <div class="modal__select TradeModalMain"><span class="dropdown__choose">Сhoose currency</span>
                    </div>
                    <div class="modal__options _hidden TradeModalMenu">
                                                    <label class="modal__option TradeModalOptions select_arbbox_currency" data-attr-fs="1"
                                   for="currency-1">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BTC.svg" alt="currency">
                                BTC
                                <input type="radio" name="select_list_ex" value="1" class="_hidden">
                            </label>
                                                    <label class="modal__option TradeModalOptions select_arbbox_currency" data-attr-fs="2"
                                   for="currency-2">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ETH.svg" alt="currency">
                                ETH
                                <input type="radio" name="select_list_ex" value="2" class="_hidden">
                            </label>
                                                    <label class="modal__option TradeModalOptions select_arbbox_currency" data-attr-fs="3"
                                   for="currency-3">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/LTC.svg" alt="currency">
                                LTC
                                <input type="radio" name="select_list_ex" value="3" class="_hidden">
                            </label>
                                                    <label class="modal__option TradeModalOptions select_arbbox_currency" data-attr-fs="4"
                                   for="currency-4">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/XRP.svg" alt="currency">
                                XRP
                                <input type="radio" name="select_list_ex" value="4" class="_hidden">
                            </label>
                                                    <label class="modal__option TradeModalOptions select_arbbox_currency" data-attr-fs="5"
                                   for="currency-5">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/SOL.svg" alt="currency">
                                SOL
                                <input type="radio" name="select_list_ex" value="5" class="_hidden">
                            </label>
                                                    <label class="modal__option TradeModalOptions select_arbbox_currency" data-attr-fs="6"
                                   for="currency-6">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/DOT.svg" alt="currency">
                                DOT
                                <input type="radio" name="select_list_ex" value="6" class="_hidden">
                            </label>
                                                    <label class="modal__option TradeModalOptions select_arbbox_currency" data-attr-fs="7"
                                   for="currency-7">
                                <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ADA.svg" alt="currency">
                                ADA
                                <input type="radio" name="select_list_ex" value="7" class="_hidden">
                            </label>
                        
                    </div>
                    <a id="submit_arbbox_currency"
                       class="button cryptobox__submit cryptobox__submit--trade  _one _f17 _pink _upper cryptobox__submit--deposit222"
                       data-hover="accept" style="max-width: unset;">
                        <div>accept</div>
                    </a>
                </form>


                <style>
                    .bonus__ad {
                        background: linear-gradient(45deg, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.2) 51%, rgba(0, 0, 0, 0.3) 100%) !important;
                    }
                </style>


                <style>
                    @media screen and (max-width: 1772px) {
                        .content-wrapper .TradeModalMenu {
                            top: 95px;
                        }
                    }

                    @media screen and (min-width: 1421px) and (max-width: 1840px) {
                        .trade__buy {
                            display: none;
                        }

                        .trade__sell {
                            max-width: unset;
                        }

                        .trade__sell-title-desktop {
                            display: none;
                        }

                        .trade__sell-title-mobile {
                            display: block;
                        }

                        .trade__sell .trade__exchange-buy {
                            display: flex;
                        }

                        .decorator--team-table {
                            display: none;
                        }
                    }
                </style>

                <div class="trade__exchange trade__exchange--refactor">
                    <div class="trade__sell">
                        <div class="_one _f20 _upper trade__sell-title-desktop">market buy</div>
                        <div class="_one _f20 _upper trade__sell-title-mobile">market sell/buy</div>


                        <div id="list_buy_ex" style="width: 100%; display: flex;
                    flex-direction: column; gap: 15px;">

                        </div>

                    </div>
                    <div class="decorator decorator--team-table"></div>
                    <div class="trade__buy">
                        <div class="_one _f20 _upper">market sell</div>

                        <div id="list_sell_ex" style="width: 100%; display: flex;
                    flex-direction: column; gap: 15px;">

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal  modal--withdrawal _hidden" id="modalTrade">
        <div class="modal__shadow"></div>
        <div class="modal__box modal__box--deposit modal__box--trade">
            <div class="modal__wallet-wrapper">
                <div class="modal__close"></div>
                                    <form action="" class="--trade">
                        <div class="_one _f18 _upper">choose currency</div>

                        <div class="modal__select TradeModalMain"><span class="dropdown__choose">Сhoose currency</span>
                        </div>
                        <div class="modal__options _hidden TradeModalMenu">
                                                            <label class="modal__option TradeModalOptions select_arbbox_currency"
                                       data-attr-fs="1"
                                       for="currency-1">
                                    <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/BTC.svg" alt="currency">
                                    BTC
                                    <input type="radio" name="select_list_ex" value="1" class="_hidden">
                                </label>
                                                            <label class="modal__option TradeModalOptions select_arbbox_currency"
                                       data-attr-fs="2"
                                       for="currency-2">
                                    <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ETH.svg" alt="currency">
                                    ETH
                                    <input type="radio" name="select_list_ex" value="2" class="_hidden">
                                </label>
                                                            <label class="modal__option TradeModalOptions select_arbbox_currency"
                                       data-attr-fs="3"
                                       for="currency-3">
                                    <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/LTC.svg" alt="currency">
                                    LTC
                                    <input type="radio" name="select_list_ex" value="3" class="_hidden">
                                </label>
                                                            <label class="modal__option TradeModalOptions select_arbbox_currency"
                                       data-attr-fs="4"
                                       for="currency-4">
                                    <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/XRP.svg" alt="currency">
                                    XRP
                                    <input type="radio" name="select_list_ex" value="4" class="_hidden">
                                </label>
                                                            <label class="modal__option TradeModalOptions select_arbbox_currency"
                                       data-attr-fs="5"
                                       for="currency-5">
                                    <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/SOL.svg" alt="currency">
                                    SOL
                                    <input type="radio" name="select_list_ex" value="5" class="_hidden">
                                </label>
                                                            <label class="modal__option TradeModalOptions select_arbbox_currency"
                                       data-attr-fs="6"
                                       for="currency-6">
                                    <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/DOT.svg" alt="currency">
                                    DOT
                                    <input type="radio" name="select_list_ex" value="6" class="_hidden">
                                </label>
                                                            <label class="modal__option TradeModalOptions select_arbbox_currency"
                                       data-attr-fs="7"
                                       for="currency-7">
                                    <img src="{{asset('')}}assets/img/icons/crypto/svg/pink/ADA.svg" alt="currency">
                                    ADA
                                    <input type="radio" name="select_list_ex" value="7" class="_hidden">
                                </label>
                            
                        </div>
                        <a id="submit_arbbox_currency"
                           class="button cryptobox__submit cryptobox__submit--trade  _one _f17 _pink _upper cryptobox__submit--deposit222"
                           data-hover="accept">
                            <div>accept</div>
                        </a>
                    </form>
                    <div class="trade__exchange">
                        <div class="trade__sell">
                            <div class="_one _f20 _upper trade__sell-title-desktop">market buy</div>
                            <div class="_one _f20 _upper trade__sell-title-mobile">market sell/buy</div>


                            <div id="list_buy_ex" style="width: 100%; display: flex;
                    flex-direction: column; gap: 15px;">

                            </div>

                        </div>
                        <div class="decorator decorator--team-table"></div>
                        <div class="trade__buy">
                            <div class="_one _f20 _upper">market sell</div>

                            <div id="list_sell_ex" style="width: 100%; display: flex;
                    flex-direction: column; gap: 15px;">

                            </div>

                        </div>
                    </div>
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
    function upd_stat_market(){
        $.ajax({
    type: 'POST',
    url: 'page.php=arbitrage',
    data: 'get_markets_stat=1',
    success: function(ex) {
  
        
      }


    });
    }

    function get_orders(){
        $.ajax({
    type: 'POST',
    url: 'page.php=arbitrage',
    data: 'get_markets_stat=2',
    success: function(ex) {
  
        var obj = JSON.parse(ex);
        $("#last_orders").empty();
        if(flag_sorted == 0){
        $("#all_orders").empty();
        }
        var img_arrow = '';
        var curr_name = '';
        var color_text = '';
        for (const v in obj['last_orders']) {

            if(obj['last_orders'][v]['aoType'] == 'BUY'){
                img_arrow = "{{asset('')}}assets/img/icons/crypto/svg/up-green.svg";
                color_text = '_light-green';
            }
            else{
                img_arrow = "{{asset('')}}assets/img/icons/crypto/svg/down-red.svg";
                color_text = '_red';
            }

            curr_name = obj['last_orders'][v]['aoCurr'].toLowerCase();

            $("#last_orders").append(' <tr class="table__item-wrapper"><td class="table__item table__item--number">'+obj['last_orders'][v]['aoNum']+'</td><td class="table__item table__item--name">'+obj['last_orders'][v]['aoExchange']+'</td><td class="table__item table__item--price"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/'+curr_name.toUpperCase()+'.svg" alt=""><span>'+obj['last_orders'][v]['aoPrice']+'</span></td><td class="table__item table__item--quantity">'+obj['last_orders'][v]['aoAmount']+'</td><td class="table__item table__item--action"><span class="'+color_text+'">'+obj['last_orders'][v]['aoType']+'</span><img src="'+img_arrow+'" alt=""></td></tr>')
        }

        img_arrow = '';
        curr_name = '';
        color_text = '';

        if(flag_sorted == 0){
        for (const v in obj['all_orders']) {

            if(obj['all_orders'][v]['aoType'] == 'BUY'){
                img_arrow = "{{asset('')}}assets/img/icons/crypto/svg/up-green.svg";
                color_text = '_light-green';
            }
            else{
                img_arrow = "{{asset('')}}assets/img/icons/crypto/svg/down-red.svg";
                color_text = '_red';
            }

            curr_name = obj['all_orders'][v]['aoCurr'].toLowerCase();

            $("#all_orders").append(' <tr class="table__item-wrapper"><td class="table__item table__item--number">'+obj['all_orders'][v]['aoNum']+'</td><td class="table__item table__item--name">'+obj['all_orders'][v]['aoExchange']+'</td><td class="table__item table__item--price"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/'+curr_name.toUpperCase()+'.svg" alt=""><span>'+obj['all_orders'][v]['aoPrice']+'</span></td><td class="table__item table__item--quantity">'+obj['all_orders'][v]['aoAmount']+'</td><td class="table__item table__item--action"><span class="'+color_text+'">'+obj['all_orders'][v]['aoType']+'</span><img src="'+img_arrow+'" alt=""></td><td class="table__item table__item--date">'+obj['all_orders'][v]['aoDate']+'</td></tr>')
        }
    }
        




        
      }


    });
    }

var flag_sorted = 0;
    $(".btn_search").click(function(){
        var search_oid = $("#order_search_id").val()*1;
        if(search_oid){
            flag_sorted = 1;
            get_orders_sorted(search_oid);
        }
        else{
            flag_sorted = 0;
            get_orders();
        }
    });

    $("#order_search_id").on('input', function() {
        var search_oid = $("#order_search_id").val()*1;
  if(search_oid){
            flag_sorted = 1;
            get_orders_sorted(search_oid);
        }
        else{
            flag_sorted = 0;
            get_orders();
        }
});

    let inp = document.querySelector('#order_search_id');


inp.addEventListener('keypress',  e => {
    if(!/\d/.test(e.key))
    e.preventDefault();
});

let inp2 = document.querySelector('#order_search_id2');


// inp2.addEventListener('keypress',  e => {
//     if(!/\d/.test(e.key))
//     e.preventDefault();
// });

let inp3 = document.querySelector('#order_search_id3');


// inp3.addEventListener('keypress',  e => {
//     if(!/\d/.test(e.key))
//     e.preventDefault();
// });

    function get_orders_sorted(id_order){
        $.ajax({
    type: 'POST',
    url: 'page.php=arbitrage',
    data: 'get_markets_stat=222&id_order='+id_order,
    success: function(ex) {
  
        var obj = JSON.parse(ex);
       
        $("#all_orders").empty();
        var img_arrow = '';
        var curr_name = '';
        var color_text = '';
        for (const v in obj['last_orders']) {

            if(obj['last_orders'][v]['aoType'] == 'BUY'){
                img_arrow = "{{asset('')}}assets/img/icons/crypto/svg/up-green.svg";
                color_text = '_light-green';
            }
            else{
                img_arrow = "{{asset('')}}assets/img/icons/crypto/svg/down-red.svg";
                color_text = '_red';
            }

            curr_name = obj['last_orders'][v]['aoCurr'].toLowerCase();

            $("#all_orders").append(' <tr class="table__item-wrapper"><td class="table__item table__item--number">'+obj['last_orders'][v]['aoNum']+'</td><td class="table__item table__item--name">'+obj['last_orders'][v]['aoExchange']+'</td><td class="table__item table__item--price"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/'+curr_name.toUpperCase()+'.svg" alt=""><span>'+obj['last_orders'][v]['aoPrice']+'</span></td><td class="table__item table__item--quantity">'+obj['last_orders'][v]['aoAmount']+'</td><td class="table__item table__item--action"><span class="'+color_text+'">'+obj['last_orders'][v]['aoType']+'</span><img src="'+img_arrow+'" alt=""></td><td class="table__item table__item--date">'+obj['last_orders'][v]['aoDate']+'</td></tr>')
        }

        




        
      }


    });
    }

    let beforePrice = {};
    let dataPrice = {};
    const scaleRed = 'scale-red';
    const scaleGreen = 'scale-green';
    const scaleNone = 'scale-none';

    function findObjectByAeName(array, aeName) {
        if (!array || !aeName) {
            return
        }
        const item = array.find(item => item.aeName === aeName);
        if (!item) {
            return
        }
        return (item.curr_s*1).toFixed(2);
    }

    function get_list_ex(cur_ex_id){
        $.ajax({
    type: 'POST',
    url: 'page.php=arbitrage',
    data: 'get_markets_stat=3&cur_ex_id='+cur_ex_id,
    success: function(ex) {



        var obj = JSON.parse(ex);
        $("#list_buy_ex").empty();
        $("#list_sell_ex").empty();

        $("#list_buy_ex2").empty();
        $("#list_sell_ex2").empty();


     var curr_name = '';

     if(cur_ex_id == 1){
        curr_name = 'btc';
     }else if(cur_ex_id == 2){
        curr_name = 'eth';
     }else if(cur_ex_id == 3){
        curr_name = 'ltc';
     }else if(cur_ex_id == 4){
        curr_name = 'xrp';
     }else if(cur_ex_id == 5){
        curr_name = 'sol';
     }else if(cur_ex_id == 6){
        curr_name = 'dot';
     }else if(cur_ex_id == 7){
        curr_name = 'ada';
     }



     var price_a = 0;
     var price_b = 0;

     beforePrice = dataPrice;
     dataPrice = obj

     console.group();
            console.log(beforePrice)
            console.log(dataPrice)
            console.groupEnd();

     let scalerBuy, scalerSell, scalerSell2;


        for (const v in obj['ex_buy']) {

            price_a = (obj['ex_buy'][v]['curr_s']*1).toFixed(2);
            
            const stockName = obj['ex_buy'][v]['aeName'];

            const finder = findObjectByAeName(beforePrice.ex_buy, stockName);

            if(price_a > finder || !finder){
                scalerBuy = scaleGreen;
            } else if(price_a == finder){
                scalerBuy = scaleNone;
            }
            else {
                scalerBuy = scaleRed;
            }

            
            price_b_tmp = findObjectByAeName(obj.ex_sell, stockName);



            const finderSell = findObjectByAeName(beforePrice.ex_sell, stockName);

            if(price_b_tmp > finderSell || !finderSell){
                scalerSell = scaleGreen;
            } else if(price_b_tmp == finder){
                scalerSell = scaleNone;
            }
            else {
                scalerSell = scaleRed;
            }

    
                $("#list_buy_ex").append('<div class="trade__item"><div class="trade__exchange-info _one _f16 _upper trade__exchange-name"><img src="{{asset('')}}assets/img/exch/'+obj['ex_buy'][v]['aeName']+'.svg" alt="">'+obj['ex_buy'][v]['aeName']+'</div><div class="trade__exchange-info _medium _f20 trade__exchange-sell"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/'+curr_name.toUpperCase()+'.svg" alt=""><span class="'+scalerBuy+'">'+price_a+'</span></div><div class="trade__exchange-info _medium _f20 trade__exchange-buy"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/'+curr_name.toUpperCase()+'.svg" alt=""><span class="'+scalerSell+'">'+price_a+'<span></div></div><div class="decorator decorator--trade-sell"></div>');
                $("#list_buy_ex2").append('<div class="arbitrage__item"><div class="arbitrage__exchange-info arbitrage__exchange-name"><img src="{{asset('')}}assets/img/exch/'+obj['ex_buy'][v]['aeName']+'.svg" alt="">'+obj['ex_buy'][v]['aeName']+'</div><div class="arbitrage__exchange-info arbitrage__exchange-sell"><img src="{{asset('')}}assets/img/icons/crypto/svg/normal/'+curr_name.toUpperCase()+'.svg" alt=""><span class="'+scalerBuy+'">'+price_a+'</span></div></div>');


           
        }

        for (const v in obj['ex_sell']) {

            price_b = (obj['ex_sell'][v]['curr_s']*1).toFixed(2);

            const stockName = obj['ex_sell'][v]['aeName'];

            const finder = findObjectByAeName(beforePrice.ex_sell, stockName);


            if(price_b > finder || !finder){
                scalerSell2 = scaleGreen;
            } else if(price_b == finder){
                scalerSell2 = scaleNone;
            }
            else {
                scalerSell2 = scaleRed;
            }



$("#list_sell_ex").append(' <div class="trade__item"><div class="trade__exchange-info _one _f16 _upper trade__exchange-name"><img src="{{asset('')}}assets/img/exch/'+obj['ex_sell'][v]['aeName']+'.svg" alt="">'+obj['ex_sell'][v]['aeName']+'</div><div class="trade__exchange-info _medium _f20 trade__exchange-buy"><img src="{{asset('')}}assets/img/icons/crypto/svg/pink/'+curr_name.toUpperCase()+'.svg" alt=""><span class="'+scalerSell2+'">'+price_b+'</span></div></div>');
$("#list_sell_ex2").append(' <div class="arbitrage__item"><div class="arbitrage__exchange-info arbitrage__exchange-name"><img src="{{asset('')}}assets/img/exch/'+obj['ex_sell'][v]['aeName']+'.svg" alt="">'+obj['ex_sell'][v]['aeName']+'</div><div class="arbitrage__exchange-info arbitrage__exchange-buy"><img src="{{asset('')}}assets/img/icons/crypto/svg/normal/'+curr_name.toUpperCase()+'.svg" alt=""><span class="'+scalerSell2+'">'+price_b+'</span></div></div>');
}


        
      }


    });
    }

    var cur_ex_list_id = 1;

    $(".select_arbbox_currency").click(function(){
        cur_ex_list_id = $(this).attr('data-attr-fs')*1;
    });

    $("#submit_arbbox_currency").click(function(){
        get_list_ex(cur_ex_list_id);
        clearInterval(interval_id);
        interval_id = setInterval("get_list_ex("+cur_ex_list_id+")", 5000);
    });

    get_orders();
     get_list_ex(1);
     var interval_id = setInterval("get_list_ex("+cur_ex_list_id+")", 5000);
    upd_stat_market()
    setInterval("upd_stat_market()", 3000);
     setInterval("get_orders()", 10000);
    
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