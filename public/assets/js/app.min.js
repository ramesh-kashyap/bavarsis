/******/ (() => {
    // webpackBootstrap
    /******/ "use strict";
    var __webpack_exports__ = {};
    function dropdownSet(main, select, value) {
        if (main.length > 0 && select.length > 0 && value.length > 0) {
            const mainImage = main[0].querySelector("img.dropdown__choose-img");
            main.forEach((item) => {
                item.addEventListener("click", () => {
                    select.forEach((menu) => {
                        menu.classList.toggle("_hidden");
                    });
                });
            });
            value.forEach((element) => {
                element.addEventListener("click", () => {
                    const result = element.textContent;
                    const targetImage = element.querySelector("img.dropdown__choose-img")?.getAttribute("src");
                    if (mainImage && targetImage) {
                        mainImage.setAttribute("src", targetImage);
                    }
                    select.forEach((menu) => {
                        menu.classList.add("_hidden");
                    });

                    main.forEach((part) => {
                        part.querySelector(".dropdown__choose").textContent = result;
                    });
                });
            });
        }
    }

    document.addEventListener("DOMContentLoaded", () => {
        const body = document.querySelector("body");

        const alertButton = document.querySelector("#AlertButton");
        const alertBlock = document.querySelector("#AlertBlock");
        const alertClose = document.querySelector("#AlertClose");

        if (alertButton && alertBlock) {
            alertButton.addEventListener("click", () => {
                alertBlock.classList.toggle("_hide");
            });
            body.addEventListener("click", (e) => {
                const target = e.target;
                if (!target) {
                    return;
                }
                const closest = target?.closest("#AlertBlock");
                const closest2 = target?.closest("#AlertButton");
                if (closest || closest2) {
                    return;
                }
                alertBlock.classList.add("_hide");
            });
            if (alertClose) {
                alertClose.addEventListener("click", () => {
                    alertBlock.classList.toggle("_hide");
                });
            }
        }

        const alertItemCloseAll = document.querySelectorAll(".alert__item-close");

        if (alertItemCloseAll.length > 0) {
            alertItemCloseAll.forEach((element) => {
                element.addEventListener("click", (e) => {
                    e.stopPropagation();
                    const target = e.target;
                    if (!target) {
                        return;
                    }

                    const closest = target?.closest(".alert__item");

                    if (!closest) {
                        return;
                    }

                    const closest2 = target?.closest(".alert__block");
                    if (closest2) {
                        const hasChildWithClass = closest2.querySelectorAll(".alert__item");
                        const result = hasChildWithClass.length <= 1;
                        if (!result) {
                            closest.remove();
                            return;
                        }
                        closest.remove();
                        closest2.remove();
                    }
                });
            });
        }

        const cryptoboxCards = document.querySelectorAll(".cryptobox__card");
        const cryptoboxCalc = document.querySelector("#CabinetCalcRight");
        const cryptoboxCalcMobile = document.querySelector("#CabinetCalcRightMobile");
        const cryptoboxArrow = document.querySelector("#CabinetArrowRight");
        const cryptoboxImagesSlider = document.querySelector("#CabinetImagesSliderRight");

        const openBoxesSlider = document.querySelector("#CabinetCardsSliderRight");
        const cryptoboxCalcCloseButtons = document.querySelectorAll(".cryptobox__calc-close");

        if (cryptoboxArrow) {
            if (
                cryptoboxCards.length > 0 &&
                cryptoboxCalc &&
                cryptoboxCalcMobile &&
                cryptoboxCalcCloseButtons.length > 0 &&
                cryptoboxImagesSlider
            ) {
                cryptoboxCards.forEach((card) => {
                    card.addEventListener("click", () => {
                        const screenWidth = window.innerWidth;
                        cryptoboxCalc.classList.add("_hidden");
                        cryptoboxCalcMobile.classList.add("_hidden");
                        cryptoboxArrow.classList.add("_hidden");
                        if (screenWidth < 1440) {
                            cryptoboxCalcMobile.classList.remove("_hidden");
                            return;
                        }
                        cryptoboxImagesSlider.classList.add("_hidden");
                        cryptoboxCalc.classList.remove("_hidden");
                    });
                });
                cryptoboxCalcCloseButtons.forEach((button) => {
                    button.addEventListener("click", () => {
                        const screenWidth = window.innerWidth;
                        cryptoboxCalc.classList.add("_hidden");
                        cryptoboxCalcMobile.classList.add("_hidden");

                        if (screenWidth >= 1440) {
                            cryptoboxImagesSlider.classList.remove("_hidden");
                            cryptoboxArrow.classList.remove("_hidden");
                        }
                    });
                });
            }
        } else if (openBoxesSlider) {
            if (
                cryptoboxCards.length > 0 &&
                cryptoboxCalc &&
                cryptoboxCalcMobile &&
                cryptoboxCalcCloseButtons.length > 0 &&
                cryptoboxImagesSlider
            ) {
                cryptoboxCards.forEach((card) => {
                    card.addEventListener("click", () => {
                        const screenWidth = window.innerWidth;
                        cryptoboxCalc.classList.add("_hidden");
                        cryptoboxCalcMobile.classList.add("_hidden");
                        openBoxesSlider.classList.add("_hidden");
                        if (screenWidth < 1440) {
                            cryptoboxCalcMobile.classList.remove("_hidden");
                            return;
                        }
                        cryptoboxImagesSlider.classList.add("_hidden");
                        cryptoboxCalc.classList.remove("_hidden");
                    });
                });
                cryptoboxCalcCloseButtons.forEach((button) => {
                    button.addEventListener("click", () => {
                        const screenWidth = window.innerWidth;
                        cryptoboxCalc.classList.add("_hidden");
                        cryptoboxCalcMobile.classList.add("_hidden");

                        if (screenWidth >= 1440) {
                            cryptoboxImagesSlider.classList.remove("_hidden");
                            openBoxesSlider.classList.remove("_hidden");
                        }
                    });
                });
            }
        }

        const cryptoboxCalcDropdownMain = document.querySelectorAll(".CabinetCalcDropdownMain");
        const cryptoboxDropdownMenu = document.querySelectorAll(".CabinetDropdownMenu");
        const cryptoboxCalcDropdownSelect = document.querySelectorAll(".dropdown__item");

        dropdownSet(cryptoboxCalcDropdownMain, cryptoboxDropdownMenu, cryptoboxCalcDropdownSelect);

        const menuModal = document.querySelector("#MenuModal");
        const cabYourBoxes = document.querySelector("#CabYourBoxes");
        const menuSlider = document.querySelector("#MenuSlider");
        const menuArrowLeft = document.querySelector("#MenuArrowLeft");
        const menuArrowRight = document.querySelector("#MenuArrowRight");
        const menuModalSlider = document.querySelector("#MenuModalSlider");

        const cabReferal = document.querySelector("#CabReferal");
        const menuReferal = document.querySelector("#MenuText");
        const menuModalReferal = document.querySelector("#MenuModalText");

        if (
            cabYourBoxes &&
            menuSlider &&
            menuModalSlider &&
            menuModal &&
            menuArrowLeft &&
            menuArrowRight &&
            cabReferal &&
            menuReferal &&
            menuModalReferal
        ) {
            menuModal.classList.add("_hidden");
            menuArrowLeft.classList.add("_hidden");
            menuArrowRight.classList.add("_hidden");
            menuModalSlider.classList.add("_hidden");
            menuSlider.classList.add("_hidden");
            menuReferal.classList.add("_hidden");
            menuModalReferal.classList.add("_hidden");

            cabYourBoxes.addEventListener("click", () => {
                const screenWidth = window.innerWidth;
                menuModal.classList.add("_hidden");
                menuModalReferal.classList.add("_hidden");
                menuReferal.classList.add("_hidden");

                if (screenWidth <= 1400) {
                    menuModal.classList.remove("_hidden");
                    menuModalSlider.classList.remove("_hidden");
                    return;
                }
                menuArrowLeft.classList.toggle("_hidden");
                menuArrowRight.classList.toggle("_hidden");
                menuSlider.classList.toggle("_hidden");
            });
            cabReferal.addEventListener("click", () => {
                const screenWidth = window.innerWidth;
                menuModal.classList.add("_hidden");
                menuModalSlider.classList.add("_hidden");
                menuArrowLeft.classList.add("_hidden");
                menuArrowRight.classList.add("_hidden");
                menuSlider.classList.add("_hidden");

                if (screenWidth <= 1400) {
                    menuModal.classList.remove("_hidden");
                    menuModalReferal.classList.remove("_hidden");
                    return;
                }
                menuReferal.classList.toggle("_hidden");
            });
        }

        const modalClose = document.querySelectorAll(".modal__close");
        const modal = document.querySelectorAll(".modal");

        if (modalClose.length > 0) {
            modalClose.forEach((element) => {
                element.addEventListener("click", () => {
                    modal.forEach((item) => {
                        item.classList.add("_hidden");
                    });
                });
            });
        }

        const walletDepositButton = document.querySelector("#WalletDepositButton");
        const walletDepositModal = document.querySelector("#WalletDepositModal");

        if (walletDepositButton && walletDepositModal) {
            walletDepositButton.addEventListener("click", () => {
                walletDepositModal.classList.remove("_hidden");
            });
        }

        const walletDepositButton2 = document.querySelector("#WalletDepositButton2");
        const walletDepositModal2 = document.querySelector("#WalletDepositModal2");

        if (walletDepositButton2 && walletDepositModal2) {
            walletDepositButton2.addEventListener("click", () => {
                walletDepositModal2.classList.remove("_hidden");
            });
        }

        const WalletDepositButton_rank = document.querySelectorAll(".WalletDepositButton_rank");
        const walletDepositModal_rank = document.querySelector("#walletDepositModal_rank");

    
        
        if (WalletDepositButton_rank.length > 0) {
            WalletDepositButton_rank.forEach((element) => {
                element.addEventListener("click", () => {
                    walletDepositModal_rank.classList.remove("_hidden");
                });
            });
        }
        
       

        const walletWithdrawalButton = document.querySelector("#WalletWithdrawalButton");
        const walletWithdrawalModal = document.querySelector("#WalletWithdrawalModal");

        const walletWithdrawalButton_qr = document.querySelector("#WalletWithdrawalButton_qr");
        const walletWithdrawalModal_qr = document.querySelector("#WalletWithdrawalModal_qr");

        if (walletWithdrawalButton && walletWithdrawalModal) {
            walletWithdrawalButton.addEventListener("click", () => {
                walletWithdrawalModal.classList.remove("_hidden");
            });
        }

        if (walletWithdrawalButton_qr && walletWithdrawalModal_qr) {
            walletWithdrawalButton_qr.addEventListener("click", () => {
                walletWithdrawalModal_qr.classList.remove("_hidden");
            });
        }

        const withdrawalModal = document.querySelector("#WModal");
        const withdrawalButton = document.querySelectorAll(".wModalButton");
        const depIDnot1 = document.querySelector('#DepIDNot1');
        const depID1 = document.querySelector('#DepID1');
        const plan1_out_perc = document.querySelector('#plan1_out_perc');
        const plan1_out_sum = document.querySelector('#plan1_out_sum');
        const depIDnot1_2 = document.querySelector('#DepIDNot1_2');
        const depIDnot1_3 = document.querySelector('#DepIDNot1_3');
        
        const wModalSubmit = document.querySelector('#WModalSubmit');
        const wModalSubmit2 = document.querySelector('#WModalSubmit2');

        if(withdrawalModal){
            withdrawalModal.addEventListener('click', function(e){
                const target = e.target;
                if(!target){
                    return;
                }

                const closest = target?.closest('[data-close]');

                if(closest){
                    withdrawalModal.classList.add('_hidden');
                }
            });
        };


        if (withdrawalModal && withdrawalButton.length > 0 && depIDnot1 && depID1 && wModalSubmit && wModalSubmit2) {
            withdrawalButton.forEach(element => {
                element.addEventListener("click", function(e){
                    if(this.classList.contains('_disable')){
                        return
                    }

                    const depID = this.getAttribute('data-dep-pid');
                    const curDep = this.getAttribute('data-depo-amount');
                    const curPPercp = this.getAttribute('data-p-perc');
                    const curPDaysp = this.getAttribute('data-p-days');

                    var flagokup = this.getAttribute('data-p-flagokup');
                    const ppp_name = this.getAttribute('data-p-ppp_name');
                    const ppp_dz0 = this.getAttribute('data-p-ppp_dz0');
                    const ppp_out = this.getAttribute('data-p-ppp_out');
                    const ppp_in = this.getAttribute('data-p-ppp_in');
                    const deps_cnt = this.getAttribute('data-p-cntdeps');

                    const out1_perc = this.getAttribute('data-p-out1_perc');
                    const out1_sum = this.getAttribute('data-p-out1_sum');
                    const out1_curr = this.getAttribute('data-p-out1_curr');

                    


                    if(!curDep || !depID){
                        return
                    }

                    wModalSubmit.setAttribute('value', this.getAttribute('data-dep-did'));
                    wModalSubmit2.setAttribute('value', this.getAttribute('data-dep-did'));

                    if(depID != 1){

                        
                        const depSpan = document.querySelector('#ResultDepo');
                        const depSpan2 = document.querySelector('#text_p_perc');
                        const depSpan3 = document.querySelector('#text_p_days');
                        const other_depo_modal = document.querySelector('#other_depo_modal');
                        const other_depo_modal_23 = document.querySelector('#other_depo_modal_23');
                        const other_depo_modal_23_2 = document.querySelector('#other_depo_modal_23_2');
                        const res_23_out = document.querySelector('#res_23_out');
                        const depo_ppp_name = document.querySelector('#depo_ppp_name');
                        const depo_ppp_name2 = document.querySelector('#depo_ppp_name2');
                        const depo_ppp_dep = document.querySelector('#depo_ppp_dep');
                        const depo_ppp_out = document.querySelector('#depo_ppp_out');
                        
                        

                        if(depID == 2 || depID == 3){
                           
                        
                            if(flagokup == 1){
                                other_depo_modal.style.display = 'none';
                                other_depo_modal_23.style.display = 'flex';
                                depo_ppp_name.textContent = ppp_name;
                                depo_ppp_dep.textContent = ppp_dz0+"$";
                                depo_ppp_out.textContent = ppp_out+"$";
    
                                depIDnot1_2.classList.remove('_hidden');
                            }
                            else{
                               
                                other_depo_modal.style.display = 'none';
                                other_depo_modal_23_2.style.display = 'flex';
                                depo_ppp_name2.textContent = ppp_name;

                                if(deps_cnt == 1){
                                    var kkz_res = (ppp_in-ppp_out).toFixed(2);
                                }
                                else{
                                    var kkz_res = (ppp_dz0-ppp_out).toFixed(2);
                                }

                                
                                res_23_out.textContent = kkz_res+"$";

                                depIDnot1_3.classList.remove('_hidden');
                            }
                           
                            
                        }
                        else{
                            other_depo_modal_23.style.display = 'none';
                            other_depo_modal.style.display = 'flex';

                            if(depSpan){
                                depSpan.textContent = curDep;
                            }
    
                            if(depSpan2){
                                if(curPPercp != ''){
                                    depSpan2.textContent = curPPercp;
                                }
                                else{
                                    depSpan2.textContent = "30%";
                                }
                            }
    
                            if(depSpan3){
                                if(curPDaysp != ''){
                                    depSpan3.textContent = curPDaysp;
                                }
                                else{
                                    depSpan3.textContent = "30";
                                }
                            }

                            console.log(depID)
                        depIDnot1.classList.remove('_hidden');
                        depID1.classList.add('_hidden');
                        }


                     
                        
                    }
                    else {
                        depIDnot1.classList.add('_hidden');
                        depID1.classList.remove('_hidden');
                        plan1_out_perc.textContent = out1_perc;
                        plan1_out_sum.textContent = out1_sum+" "+out1_curr;
                    }

                    withdrawalModal.classList.remove("_hidden");
                });
            })
        }

        const newsTagsMain = document.querySelector(".tags--main");
        const newsCardsBlocks = document.querySelectorAll(".swiper-slide");

        if (newsTagsMain && newsCardsBlocks.length > 0) {
            newsTagsMain.addEventListener("click", (e) => {
                const target = e.target;
                if (!target || !target.getAttribute("data-tag")) {
                    return;
                }

                const targetAttr = target?.getAttribute("data-tag");

                if (targetAttr === "All") {
                    newsCardsBlocks.forEach((element) => {
                        element.classList.remove("_extermination");
                    });
                    return;
                }

                newsCardsBlocks.forEach((element) => {
                    const elementParse = element.querySelector(`span[data-tag="${targetAttr}"]`);
                    if (!elementParse) {
                        element.classList.add("_extermination");
                        return;
                    }
                    element.classList.remove("_extermination");
                });
            });
        }

        const myTeamActiveButton = document.querySelector("#MyTeamActiveButton");
        const myTeamRegisteredButton = document.querySelector("#MyTeamRegisteredButton");
        const myTeamSButton = document.querySelector("#MyTeamSButton");
        const myTeamEarningsButton = document.querySelector("#MyTeamEarningsButton");

        const myTeamModal = document.querySelector("#MyTeamModal");

        const myTeamActiveMenu = document.querySelector("#MyTeamActiveMenu");
        const myTeamRegisteredMenu = document.querySelector("#MyTeamRegisteredMenu");
        const myTeamSMenu = document.querySelector("#MyTeamSMenu");
        const myTeamEarningsMenu = document.querySelector("#MyTeamEarningsMenu");

        const myTeamActiveTable = document.querySelector("#MyTeamActiveTable");
        const myTeamRegisteredTable = document.querySelector("#MyTeamRegisteredTable");
        const myTeamSTable = document.querySelector("#MyTeamSTable");
        const myTeamEarningsTable = document.querySelector("#MyTeamEarningsTable");

        if (
            myTeamModal &&
            myTeamActiveButton &&
            myTeamRegisteredButton &&
            myTeamSButton &&
            myTeamEarningsButton &&
            myTeamActiveMenu &&
            myTeamRegisteredMenu &&
            myTeamSMenu &&
            myTeamEarningsMenu &&
            myTeamActiveTable &&
            myTeamRegisteredTable &&
            myTeamSTable &&
            myTeamEarningsTable
        ) {
            myTeamActiveButton.addEventListener("click", () => {
                //drop pink
                myTeamRegisteredMenu.classList.remove("_pink");
                myTeamSMenu.classList.remove("_pink");
                myTeamEarningsMenu.classList.remove("_pink");

                //hide tables
                myTeamRegisteredTable.classList.add("_hidden");
                myTeamSTable.classList.add("_hidden");
                myTeamEarningsTable.classList.add("_hidden");

                myTeamActiveMenu.classList.add("_pink");
                myTeamActiveTable.classList.remove("_hidden");
                myTeamModal.classList.remove("_hidden");
            });
            myTeamActiveMenu.addEventListener("click", () => {
                //drop pink
                myTeamRegisteredMenu.classList.remove("_pink");
                myTeamSMenu.classList.remove("_pink");
                myTeamEarningsMenu.classList.remove("_pink");

                //hide tables
                myTeamRegisteredTable.classList.add("_hidden");
                myTeamSTable.classList.add("_hidden");
                myTeamEarningsTable.classList.add("_hidden");

                myTeamActiveMenu.classList.add("_pink");
                myTeamActiveTable.classList.remove("_hidden");
            });
        }
        if (
            myTeamModal &&
            myTeamActiveButton &&
            myTeamRegisteredButton &&
            myTeamSButton &&
            myTeamEarningsButton &&
            myTeamActiveMenu &&
            myTeamRegisteredMenu &&
            myTeamSMenu &&
            myTeamEarningsMenu &&
            myTeamActiveTable &&
            myTeamRegisteredTable &&
            myTeamSTable &&
            myTeamEarningsTable
        ) {
            myTeamRegisteredButton.addEventListener("click", () => {
                //drop pink
                myTeamActiveMenu.classList.remove("_pink");
                myTeamSMenu.classList.remove("_pink");
                myTeamEarningsMenu.classList.remove("_pink");

                //hide tables
                myTeamActiveTable.classList.add("_hidden");
                myTeamSTable.classList.add("_hidden");
                myTeamEarningsTable.classList.add("_hidden");

                myTeamRegisteredMenu.classList.add("_pink");
                myTeamRegisteredTable.classList.remove("_hidden");
                myTeamModal.classList.remove("_hidden");
            });
            myTeamRegisteredMenu.addEventListener("click", () => {
                //drop pink
                myTeamActiveMenu.classList.remove("_pink");
                myTeamSMenu.classList.remove("_pink");
                myTeamEarningsMenu.classList.remove("_pink");

                //hide tables
                myTeamActiveTable.classList.add("_hidden");
                myTeamSTable.classList.add("_hidden");
                myTeamEarningsTable.classList.add("_hidden");

                myTeamRegisteredMenu.classList.add("_pink");
                myTeamRegisteredTable.classList.remove("_hidden");
            });
        }
        if (
            myTeamModal &&
            myTeamActiveButton &&
            myTeamRegisteredButton &&
            myTeamSButton &&
            myTeamEarningsButton &&
            myTeamActiveMenu &&
            myTeamRegisteredMenu &&
            myTeamSMenu &&
            myTeamEarningsMenu &&
            myTeamActiveTable &&
            myTeamRegisteredTable &&
            myTeamSTable &&
            myTeamEarningsTable
        ) {
            myTeamSButton.addEventListener("click", () => {
                //drop pink
                myTeamActiveMenu.classList.remove("_pink");
                myTeamRegisteredMenu.classList.remove("_pink");
                myTeamEarningsMenu.classList.remove("_pink");

                //hide tables
                myTeamActiveTable.classList.add("_hidden");
                myTeamRegisteredTable.classList.add("_hidden");
                myTeamEarningsTable.classList.add("_hidden");

                myTeamSMenu.classList.add("_pink");
                myTeamSTable.classList.remove("_hidden");
                myTeamModal.classList.remove("_hidden");
            });
            myTeamSMenu.addEventListener("click", () => {
                //drop pink
                myTeamActiveMenu.classList.remove("_pink");
                myTeamRegisteredMenu.classList.remove("_pink");
                myTeamEarningsMenu.classList.remove("_pink");

                //hide tables
                myTeamActiveTable.classList.add("_hidden");
                myTeamRegisteredTable.classList.add("_hidden");
                myTeamEarningsTable.classList.add("_hidden");

                myTeamSMenu.classList.add("_pink");
                myTeamSTable.classList.remove("_hidden");
            });
        }
        if (
            myTeamModal &&
            myTeamActiveButton &&
            myTeamRegisteredButton &&
            myTeamSButton &&
            myTeamEarningsButton &&
            myTeamActiveMenu &&
            myTeamRegisteredMenu &&
            myTeamSMenu &&
            myTeamEarningsMenu &&
            myTeamActiveTable &&
            myTeamRegisteredTable &&
            myTeamSTable &&
            myTeamEarningsTable
        ) {
            myTeamEarningsButton.addEventListener("click", () => {
                //drop pink
                myTeamActiveMenu.classList.remove("_pink");
                myTeamRegisteredMenu.classList.remove("_pink");
                myTeamSMenu.classList.remove("_pink");

                //hide tables
                myTeamActiveTable.classList.add("_hidden");
                myTeamRegisteredTable.classList.add("_hidden");
                myTeamSTable.classList.add("_hidden");

                myTeamEarningsMenu.classList.add("_pink");
                myTeamEarningsTable.classList.remove("_hidden");
                myTeamModal.classList.remove("_hidden");
            });
            myTeamEarningsMenu.addEventListener("click", () => {
                //drop pink
                myTeamActiveMenu.classList.remove("_pink");
                myTeamRegisteredMenu.classList.remove("_pink");
                myTeamSMenu.classList.remove("_pink");

                //hide tables
                myTeamActiveTable.classList.add("_hidden");
                myTeamRegisteredTable.classList.add("_hidden");
                myTeamSTable.classList.add("_hidden");

                myTeamEarningsMenu.classList.add("_pink");
                myTeamEarningsTable.classList.remove("_hidden");
            });
        }

        const walletForms = document.querySelector(".wallet__forms");

        if (walletForms) {
            walletForms.addEventListener("click", (e) => {
                const target = e.target.closest("[data-target]");
                if (!target) {
                    return;
                }
                const blockID = target.dataset.target;
                const parent = document.querySelector(`#${blockID}`);
                if (!parent) {
                    return;
                }

                parent.querySelector("form")?.classList.toggle("_hidden");
                parent.querySelector("div.wallet__form-item-prev")?.classList.toggle("_hidden");
            });
        }
        const walletModalDepositMain = document.querySelectorAll(".WalletModalDepositMain");
        const walletModalDepositMenu = document.querySelectorAll(".WalletModalDepositMenu");
        const walletModalDepositOption = document.querySelectorAll(".WalletModalDepositOption");

        dropdownSet(walletModalDepositMain, walletModalDepositMenu, walletModalDepositOption);

        const walletModalWithdrawalMain = document.querySelectorAll(".WalletModalWithdrawalMain");
        const walletModalWithdrawalMenu = document.querySelectorAll(".WalletModalWithdrawalMenu");
        const walletModalWithdrawalOption = document.querySelectorAll(".WalletModalWithdrawalOptions");

        dropdownSet(walletModalWithdrawalMain, walletModalWithdrawalMenu, walletModalWithdrawalOption);

        const walletModalWithdrawalChoiceMain = document.querySelectorAll(".WalletModalWithdrawalChoiceMain");
        const walletModalWithdrawalChoiceMenu = document.querySelectorAll(".WalletModalWithdrawalChoiceMenu");
        const walletModalWithdrawalChoiceOption = document.querySelectorAll(".WalletModalWithdrawalChoiceOptions");

        dropdownSet(
            walletModalWithdrawalChoiceMain,
            walletModalWithdrawalChoiceMenu,
            walletModalWithdrawalChoiceOption
        );

        const tradeCheckPrice = document.querySelector(".trade__top3-price");
        const tradeModal = document.querySelector("#modalTrade");

        if (tradeCheckPrice && tradeModal) {
            tradeCheckPrice.addEventListener("click", () => {
                tradeModal.classList.remove("_hidden");
            });
        }

        const tradeModalMain = document.querySelectorAll(".TradeModalMain");
        const tradeModalMenu = document.querySelectorAll(".TradeModalMenu");
        const tradeModalOptions = document.querySelectorAll(".TradeModalOptions");

        dropdownSet(tradeModalMain, tradeModalMenu, tradeModalOptions);

        const tradeAllTypeMain = document.querySelectorAll(".TradeAllTypeMain");
        const tradeAllTypeMenu = document.querySelectorAll(".TradeAllTypeMenu");
        const tradeAllTypeOptions = document.querySelectorAll(".TradeAllTypeOptions");

        dropdownSet(tradeAllTypeMain, tradeAllTypeMenu, tradeAllTypeOptions);

        const walletMain = document.querySelectorAll(".WalletMain");
        const walletMenu = document.querySelectorAll(".WalletMenu");
        const walletOptions = document.querySelectorAll(".WalletOptions");

        dropdownSet(walletMain, walletMenu, walletOptions);

        const bonusMilestoneMain = document.querySelectorAll(".BonusMilestoneMain");
        const bonusMilestoneMenu = document.querySelectorAll(".BonusMilestoneMenu");
        const bonusMilestoneOptions = document.querySelectorAll(".BonusMilestoneOptions");

        dropdownSet(bonusMilestoneMain, bonusMilestoneMenu, bonusMilestoneOptions);

        const arbitrageProMain = document.querySelectorAll(".ArbitrageProMain");
        const arbitrageProMenu = document.querySelectorAll(".ArbitrageProMenu");
        const arbitrageProOptions = document.querySelectorAll(".ArbitrageProOptions");

        if(arbitrageProMain.length > 0 && arbitrageProMenu.length > 0 && arbitrageProOptions.length > 0 ){
            console.log({arbitrageProMain});
            dropdownSet(arbitrageProMain, arbitrageProMenu, arbitrageProOptions);
        }

        const cabinetSettingsButton = document.querySelector(".cab-header__personal-button");
        const cabinetSettingsModal = document.querySelector("#CabinetModalSettings");
        if (cabinetSettingsButton && cabinetSettingsModal) {
            cabinetSettingsButton.addEventListener("click", () => {
                cabinetSettingsModal.classList.remove("_hidden");
            });
        }

        const modalSettings = document.querySelector("#ModalSettingsClick");

        if (modalSettings) {
            modalSettings.addEventListener("click", (e) => {
                const target = e.target.closest("[data-current]");
                if (!target) {
                    return;
                }
                const attr = target.getAttribute("data-current");

                const spanAll = document.querySelectorAll("span[data-current]");
                const tableAll = document.querySelectorAll(`div[data-current]`);
                const spanCurrent = document.querySelector(`span[data-current="${attr}"]`);
                const tableCurrent = document.querySelector(`div[data-current="${attr}"]`);

                if (tableCurrent) {
                    spanAll.forEach((element) => {
                        element.classList.remove("_pink");
                    });
                    tableAll.forEach((element) => {
                        element.classList.add("_hidden");
                    });

                    spanCurrent.classList.add("_pink");
                    tableCurrent.classList.remove("_hidden");
                }
            });
        }

        const modalShadowClose = document.querySelectorAll(".modal__shadow");

        if (modalShadowClose.length > 0) {
            modalShadowClose.forEach((element) => {
                if (element.classList.contains("modal__shadow--cabinet")) {
                    return;
                }
                element.addEventListener("click", () => {
                    const modal = element.closest(".modal");
                    if (modal) {
                        modal.classList.add("_hidden");
                    }
                });
            });
        }

        const formPasswordEye = document.querySelectorAll("img.eye");

        if (formPasswordEye.length > 0) {
            formPasswordEye.forEach((element) => {
                element.addEventListener("click", (e) => {
                    const img = e.target.getAttribute("src");
                    if (img.includes("eye.png")) {
                        e.target.setAttribute("src", "./img/icons/eye-closed.svg");
                    } else {
                        e.target.setAttribute("src", "./img/icons/eye.svg");
                    }
                    const attr = element.getAttribute("data-uncover");
                    const uncoverTarget = document.querySelector(`input[data-uncover="${attr}"]`);
                    if (uncoverTarget) {
                        const uncoverAttr = uncoverTarget.getAttribute("type");
                        if (uncoverAttr == "text") {
                            uncoverTarget.setAttribute("type", "password");
                            return;
                        }
                        uncoverTarget.setAttribute("type", "text");
                    }
                });
            });
        }

        const burger = document.querySelector(".burger");
        const mobileMenu = document.querySelector(".mobile-menu");

        if (burger && mobileMenu && body) {
            burger.addEventListener("click", () => {
                mobileMenu.classList.remove("_hidden");
                body.classList.add("_lock");
            });
            mobileMenu.addEventListener("click", (e) => {
                const target = e.target;

                if (target?.classList.contains("close") || target?.classList.contains("mobile-menu__link")) {
                    mobileMenu.classList.add("_hidden");
                    body.classList.remove("_lock");
                }
            });
        }

        const faqItems = document.querySelectorAll(".index__faq-item");

        if (faqItems.length > 0) {
            faqItems.forEach((element) => {
                element.addEventListener("click", (e) => {
                    e.stopPropagation();
                    const answer = element.querySelector(".index__faq-answer");
                    const arrows = element.querySelector(".arrows");

                    if (!answer) {
                        return;
                    }
                    if (arrows) {
                        arrows.classList.toggle("_active");
                    }
                    if (answer.style.maxHeight) {
                        answer.style.maxHeight = null;
                        answer.style.opacity = 0;
                        answer.style.padding = "0 10px";
                        answer.style.transistion = "all 1s ease;";
                    } else {
                        answer.style.opacity = 1;
                        answer.style.padding = 10 + "px";
                        answer.style.maxHeight = answer.scrollHeight + "px";
                    }
                });
            });
        }

        const hubPresentations = document.querySelectorAll(".index__hub");

        if (hubPresentations.length > 0) {
            hubPresentations.forEach((element) => {
                element.addEventListener("click", (e) => {
                    e.stopPropagation();
                    const answer = element.querySelector(".index__hub-text");
                    const arrowBefore = element.querySelector(".index__hub-img--1");
                    const arrowAfter = element.querySelector(".index__hub-img--2");
                    const target = e.target;
                    const closest = target?.closest(".button");

                    if (closest?.classList.contains("button")) {
                        return;
                    }
                    if (!answer) {
                        return;
                    }
                    if (arrowBefore && arrowAfter) {
                        arrowBefore.classList.toggle("_active");
                        arrowAfter.classList.toggle("_active");
                    }

                    if (answer.style.maxHeight) {
                        answer.removeAttribute("style");
                    } else {
                        answer.style.maxHeight = answer.scrollHeight + "px";
                    }
                });
                element.click();
            });
        }

        const videoBlock = document.querySelector("#myVideo");
        const videoButton = document.querySelector(".index__video-play");
        const videoWrapper = document.querySelector(".index__video-wrapper");

        if (videoBlock && videoButton && videoWrapper) {
            const videoBlockRect = videoBlock.getBoundingClientRect();
            const topPositionRelativeToViewport = videoBlockRect.top;
            const scrollTop = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;
            const absoluteTopPosition = topPositionRelativeToViewport + scrollTop;

            const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
            const rightEdgeOfFourthBlock = videoBlockRect.right;
            const distanceToRightCorner = viewportWidth - rightEdgeOfFourthBlock;

            videoButton.style.top = absoluteTopPosition + "px";
            videoButton.style.height = (videoBlock.offsetHeight / 100) * 77 + "px";
            videoButton.classList.remove("_hidden");
        }

        const stepButtons = document.querySelectorAll(".index__arbitrage-buttons-wrapper");
        const videos = document.querySelectorAll("video[data-video]");

        console.log(videos);

        if (stepButtons.length > 0 && videos.length > 0) {
            stepButtons.forEach((element) => {
                element.addEventListener("click", (e) => {
                    const target = e.target;
                    if (!target) {
                        return;
                    }

                    const closestAttr = target?.closest(".button").getAttribute("data-video");
                    console.log(closestAttr);
                    if (!closestAttr) {
                        return;
                    }

                    videos.forEach((element) => {
                        const elementAttr = element.getAttribute("data-video");
                        if (elementAttr === closestAttr) {
                            element.classList.remove("_hidden");
                            return;
                        }
                        element.classList.add("_hidden");
                    });
                });
            });
        }

        const arbitrageDrop = document.querySelector(".index__arbitrage-faq");

        if (arbitrageDrop) {
            arbitrageDrop.addEventListener("click", (e) => {
                const target = e.target;
                let hiddenCheck = false;
                if (!target) {
                    return;
                }

                const closest = target?.closest(".index__arbitrage-faq-item");
                if (!closest) {
                    return;
                }
                const drop = closest.querySelector(`.index__arbitrage-faq-item-drop`);
                const arrow = closest.querySelector(`.arrows`);

                if (!drop || !arrow) {
                    return;
                }

                arrow.classList.toggle("_active");
                drop.classList.remove("_hidden");

                if (drop.style.maxHeight) {
                    drop.style.maxHeight = null;
                    drop.style.opacity = 0;
                    drop.style.transistion = "all 0.5s ease;";
                    drop.style.paddingTop = "0";
                    drop.style.visibility = "hidden";
                } else {
                    drop.style.paddingTop = "10px";
                    drop.style.opacity = 1;
                    drop.style.maxHeight = drop.scrollHeight + "px";
                    drop.style.visibility = "visible";
                }
            });
        }

        const indexVideoPlay = document.querySelector(".index__video-play");
        const indexVideoPlayMobile = document.querySelector(".index__video-play-mobile");
        const indexYoutube = document.querySelector(".index__youtube");
        const indexIFrame = document.querySelector(".index__youtube iframe");
        const dim = document.querySelector(".dim");

        if (indexVideoPlay && indexVideoPlayMobile && dim && body && indexYoutube && indexIFrame) {
            const iframeSRC = indexIFrame.getAttribute("src");

            indexYoutube.addEventListener("click", (e) => {
                const target = e.target;
                if (target?.tagName === "IFRAME") {
                    return;
                }
                dim.classList.remove("_active");
                body.classList.remove("_lock");
                indexYoutube.classList.remove("_active");
                indexIFrame.setAttribute("src", `${iframeSRC}`);
            });
            dim.addEventListener("click", () => {
                dim.classList.remove("_active");
                body.classList.remove("_lock");
                indexYoutube.classList.remove("_active");
                indexIFrame.setAttribute("src", `${iframeSRC}`);
            });

            indexVideoPlay.addEventListener("click", () => {
                dim.classList.toggle("_active");
                body.classList.add("_lock");
                indexYoutube.classList.add("_active");
            });
            indexVideoPlayMobile.addEventListener("click", () => {
                dim.classList.toggle("_active");
                body.classList.add("_lock");
                indexYoutube.classList.add("_active");
            });
        }

        const languages = document.querySelectorAll(".language");

        if (languages.length > 0) {
            languages.forEach((element) => {
                element.addEventListener("click", (e) => {
                    e.stopPropagation();
                    const menu = element.querySelector(".language__drop-down");

                    if (menu) {
                        menu.classList.toggle("_hidden");
                    }
                });
            });
        }

        const newsCards = document.querySelectorAll(".news__card");
        if (newsCards.length > 0) {
            newsCards.forEach((element) => {
                element.addEventListener("click", (e) => {
                    const elementHref = element.getAttribute("href");
                    window.location.href = elementHref;
                });
            });
        }

        const swiper = new Swiper(".swiper--cab-info", {
            // Optional parameters
            direction: "horizontal",
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: true,
            grabCursor: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        const optionsSwiperSlides = {
            slidesPerView: 1,
        };

        const swiperBox = document.querySelector(".swiper--box");
        let swiperBoxSlides = null;
        if (swiperBox) {
            swiperBoxSlides = swiperBox.querySelectorAll(".swiper-slide");
        }

        if (swiperBoxSlides?.length > 1) {
            optionsSwiperSlides.slidesPerView = 2;
        }

        const swiper2 = new Swiper(".swiper--box", {
            direction: "horizontal",
            slidesPerView: optionsSwiperSlides.slidesPerView,
            spaceBetween: 10,
            grabCursor: true,
            whatchOverflow: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: "#MenuArrowLeft",
                prevEl: "#MenuArrowRight",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                1600: {
                    slidesPerView: optionsSwiperSlides.slidesPerView,
                },
            },
        });

        const swiper3 = new Swiper(".swiper--box-main", {
            direction: "horizontal",
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: true,
            navigation: {
                nextEl: "#swiper-button-next--main",
                prevEl: "#swiper-button-prev--main",
            },
        });

        const swiper4 = new Swiper(".swiper--box-modal", {
            direction: "horizontal",
            slidesPerView: optionsSwiperSlides.slidesPerView,
            spaceBetween: 40,
            grabCursor: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: "#swiper-button-next--modal",
                prevEl: "#swiper-button-prev--modal",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                800: {
                    slidesPerView: optionsSwiperSlides.slidesPerView,
                },
            },
        });

        const swiper5 = new Swiper(".newsSwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: "auto",
            spaceBetween: 10,
            preventClicksPropagation: true,
            breakpoints: {
                320: {
                    spaceBetween: 10,
                },
                768: {
                    spaceBetween: 30,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                },
            },
        });
    });

    /******/
})();
