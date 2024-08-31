<div id="preloader">
    <div class="spinner-border color-highlight" role="status"></div>
</div>

<div id="footer-bar" class="footer-bar-4">
    <a href="javascript:void(0);" class="initiate_transaction under_price_transaction" data-card-id="2"
        data-type="TRANSPORT"><i class="fa fa-subway"></i></a>
    <a href="javascript:void(0);" class="initiate_transaction under_price_transaction" data-card-id="3"
        data-type="GROCERY"><i class="fa fa-shopping-basket"></i></a>
    <a href="javascript:void(0);" class="initiate_transaction under_price_transaction" data-card-id="4"
        data-type="FURNITURE"><i class="fa fa-couch"></i></a>
    <a href="javascript:void(0);" class="initiate_transaction under_price_transaction" data-card-id="1"
        data-type="FOODDINING"><i class="fa fa-utensils"></i></a>
</div>

<div class="page-content pt-5">

    <div class="container">
        <div class="menu-slider owl-carousel owl-no-dots">
            <div class="item">
                <a href="#" class="btn btn-s btn-full mb-3 font-600 mustard-border-tab font-size-10">Bank Cards</a>
            </div>
            <div class="item">
                <a href="<?php echo base_url('memberships'); ?>"
                    class="btn btn-s btn-full mb-3 font-600 normal-border-tab font-size-10">Memberships</a>
            </div>
            <div class="item">
                <a href="<?php echo base_url('subscriptions'); ?>"
                    class="btn btn-s btn-full mb-3 font-600 normal-border-tab font-size-10">Subscriptions</a>
            </div>
        </div>
    </div>

    <a href="<?php echo base_url('reset_balances')?>"
        class="reset-button">
        <img src="<?php echo base_url('assets/images/reset.png') ?>"
            alt="">
    </a>



    <!-- <div class="addCardContainer mt-3">
        <i class="fa fa-plus-circle addContainerButton"></i>

    </div> -->

    <!-- warning and success message toast triggers -->
    <a href="javascript:void(0)" data-toast="toast-3" id="toast-success" style="display:none;">
        <i class="fa fa-square color-gray-dark"></i>
        <span>Toast Center Warning</span>
        <i class="fa fa-angle-right"></i>
    </a>

    <a href="javascript:void(0)" class="border-0" data-toast="toast-4" id="toast-failure" style="display:none;">
        <i class="fa fa-square color-gray-dark"></i>
        <span>Toast Center Warning</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="javascript:void(0)" class="border-0" data-toast="toast-5" id="insufficient-funds" style="display:none;">
        <i class="fa fa-square color-gray-dark"></i>
        <span>Toast Center Warning</span>
        <i class="fa fa-angle-right"></i>
    </a>

    <a href="javascript:void(0)" data-toast="toast-6" id="toast-success-balance" style="display:none;">
        <i class="fa fa-square color-gray-dark"></i>
        <span>Toast Center Warning</span>
        <i class="fa fa-angle-right"></i>
    </a>

    <a href="javascript:void(0)" class="border-0" data-toast="toast-7" id="toast-failed-balance" style="display:none;">
        <i class="fa fa-square color-gray-dark"></i>
        <span>Toast Center Warning</span>
        <i class="fa fa-angle-right"></i>
    </a>


    <!-- toasts with warning and success messages -->
    <div id="toast-3" class="toast toast-tiny toast-bottom bg-green-dark" data-delay="3000" data-autohide="true"><i
            class="fa fa-check mr-3"></i>Success</div>
    <div id="toast-4" class="toast toast-tiny toast-bottom bg-red-dark" data-delay="3000" data-autohide="true"><i
            class="fa fa-times mr-3"></i>Failed! Retry</div>
    <div id="toast-5" class="toast toast-tiny toast-bottom bg-red-dark" data-delay="3000" data-autohide="true"><i
            class="fa fa-times mr-3"></i>Insufficient Funds!</div>

    <div id="toast-6" class="toast toast-tiny toast-bottom bg-green-dark" data-delay="3000" data-autohide="true"><i
            class="fa fa-check mr-3"></i>Balance Added</div>
    <div id="toast-7" class="toast toast-tiny toast-bottom bg-red-dark" data-delay="3000" data-autohide="true"><i
            class="fa fa-times mr-3"></i>Failed!</div>

    <!-- modal triggers -->
    <a id="trigger_modal" href="#" data-menu="menu-language" style="display:none">
        <i class="fa fa-share-alt color-blue-dark"></i>
        <span>Share List</span>
        <i class="fa fa-angle-right"></i>
    </a>

    <a id="trigger_modal_transaction" href="#" data-menu="menu-success-1" style="display:none">
        <i class="fa fa-check color-green-dark"></i>
        <span>Success Sheet</span>
        <i class="fa fa-angle-right"></i>
    </a>

    <a id="trigger_modal_warning" href="#" data-menu="menu-warning-1" style="display:none">
        <i class="fa fa-times color-red-dark"></i>
        <span>Warning Sheet</span>
        <i class="fa fa-angle-right"></i>
    </a>




    <div class="swipe-container">
        <div id="slider" class="slider">
            <?php if(isset($card_details) && !empty($card_details)) {?>
            <?php $i=1;
                foreach($card_details as $cards) { ?>
            <div class="slide bg-image-repeat <?php echo ($i == 2) ? 'slide--active' : '' ?>"
                data-slide="<?php echo $i; ?>"
                style="background-image: url('<?php echo base_url('assets/images/'. constant($cards['card_image']))?>">

                <!-- transaction price -->

                <!-- min to max price range for transaction is between 10% to 80 % -->
                <?php if($cards['card_category']!== 'FURNITURE') { ?>
                <input type="hidden"
                    id="<?php echo $cards['card_category']?>"
                    data-current-bal="<?php echo $cards['card_balance']?>"
                    data-min-price="<?php echo round(($cards['card_balance']/100), 10) ?>"
                    data-max-price="<?php echo round(($cards['card_balance']/100) * 80, 1) ?>">
                <?php } else {?>
                <!-- min to max price range for furniture transaction is 120 %  all the time to invoke the use other cards for a transaction-->

                <input type="hidden"
                    id="<?php echo $cards['card_category']?>"
                    data-current-bal="<?php echo $cards['card_balance']?>"
                    data-min-price="<?php echo round(($cards['card_balance']/100) * 120, 1) ?>"
                    data-max-price="<?php echo round(($cards['card_balance']/100) * 120, 1) ?>">
                <?php } ?>
                <!-- transaction price -->


                <div class="displayBalance">
                    <span> Available Balance: £
                        <?php echo number_format($cards['card_balance'], 2)?></span>
                </div>
                <div class=" settingsBar">
                    <div class="flex-item-1">
                        <i class="fa fa-cog controls-icons"></i>
                    </div>
                    <div class="flex-item-2">
                        <?php if(constant($cards['card_category']) === FURNITURE) {?>
                        <i class="fa fa-couch controls-icons"></i>
                        <?php } elseif(constant($cards['card_category']) === TRANSPORT) { ?>
                        <i class="fa fa-subway controls-icons"></i>
                        <?php } elseif(constant($cards['card_category']) === GROCERY) { ?>
                        <i class="fa fa-shopping-basket controls-icons"></i>
                        <?php } elseif(constant($cards['card_category']) === FOODDINING) { ?>
                        <i class="fa fa-utensils controls-icons"></i>
                        <?php }?>
                    </div>
                    <?php if($i == 2) {?>
                    <div class="flex-item-7">
                        <input type="checkbox" class="scaleUp" id="random" checked>
                        <label class="text-y" for="random">Default</label>
                    </div>
                    <?php }?>
                    <div class="flex-item-4 right-item">
                        <div class="custom-control ios-switch ios-switch-icon">
                            <input type="checkbox"
                                class="ios-input card-status <?php echo $cards['card_category']?>_status"
                                id="toggle-id-<?php echo $i?>"
                                <?php echo ($cards['card_status'] == 1) ? 'checked' : ''?>
                            data-id="<?php echo $i?>"
                            data-current-status="<?php echo $cards['card_status']; ?>">
                            <label class="custom-control-label"
                                for="toggle-id-<?php echo $i?>"></label>
                        </div>
                    </div>

                </div>
            </div>

            <?php $i++;
                }
            } ?>
        </div>

        <div class="controls">
            <div class="button-up up"></div>
            <div class="button-down down"></div>
        </div>



    </div>




</div>

<!-- modals -->
<div id="menu-language" class="menu menu-box-bottom adjust-width rounded-s bg-green-dark" data-menu-height="700">

    <div class="menu-title">
        <p class="my-0 py-0 fs-14 color-black">Hi, the <span id="fundsShortCard"></span> card for a transaction of
            £<span id="fundsShort"></span>, is
            short on
            funds!. Please select the other
            cards to complete the transaction.</p>

    </div>
    <div class="mt-5">
        <span class="alertCard">Please select a card!</span>

    </div>

    <div class="mr-3 ml-3 mt-4">
        <div class="list-group list-custom-small mt-5">
            <form id="otherCardTransaction">

                <?php if(isset($card_details) && !empty($card_details)) {?>
                <?php $i=1;
                    foreach($card_details as $cards) { ?>
                <?php if($cards['card_balance'] > 0) { ?>
                <div
                    id="card_id_<?php echo $cards['card_id']?>">
                    <div class="form-check" style="display:inline!important;">
                        <!-- <input type="hidden"
                            name="<?php // echo $cards['card_id']?>_balance"
                        value="<?php // echo $cards['card_balance']?>">
                        -->
                        <input type="checkbox"
                            name="<?php echo $cards['card_id']?>"
                            value="<?php echo $cards['card_id']?>"
                            id="<?php echo $cards['card_id']?>"
                            class="card_order">
                        <label class="form-check-label pt-3"
                            for="<?php echo $cards['card_id']?>">
                            <span class="price-checkbox">
                                £
                                <?php echo number_format($cards['card_balance'], 2)?>
                            </span>
                        </label>
                    </div>


                    <a href="#"
                        id="card-<?php echo $cards['card_id']?>">
                        <img class="mr-3 mt-2"
                            src="<?php echo base_url('assets/images/'. constant($cards['card_image']))?>">
                    </a>
                </div>


                <?php $i++;
                }
                    }
                } ?>
                <input type="hidden" name="failedTranscationPrice" id="failedTranscationPrice">

                <button
                    class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s submit-transaction bg-custom-theme color-custom-theme">
                    Submit</button>
            </form>


        </div>

        <div class="mt-5">
            <span class="alertLessFunds">Insufficient Funds! Cancelling the Transaction</span>
        </div>
        <div class="mt-5">
            <span class="alertTransactionFailure">Something went wrong! Please try again later</span>
        </div>

        <a href="#"
            class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-red-light cancel-transaction">Cancel
            Transaction</a>

        <div class="clear"></div>
    </div>
</div>

<div id="menu-success-1" class="menu menu-box-bottom adjust-width menu-box-detached bg-green-dark rounded-m"
    data-menu-height="335">
    <h1 class="text-center mt-4"><i class="fa fa-3x fa-check-circle scale-box color-white shadow-xl rounded-circle"></i>
    </h1>
    <h1 class="text-center mt-3 font-700 color-black">Successful Transaction</h1>
    <p class="boxed-text-l color-black opacity-70" id="transactionDet">
        You can continue with your previous actions.
    </p>
    <a href="javascript:void();" onclick="location.reload();"
        class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-600 bg-custom-theme color-custom-theme">Okay</a>
</div>


<div id="menu-warning-1" class="menu menu-box-bottom adjust-width menu-box-detached bg-red-dark rounded-m"
    data-menu-height="335">
    <h1 class="text-center mt-4"><i class="fa fa-3x fa-times-circle scale-box color-white shadow-xl rounded-circle"></i>
    </h1>
    <h1 class="text-center mt-3 text-uppercase color-white font-700">Failed!</h1>
    <p class="boxed-text-l color-white opacity-70" id="statusInactive">
        You can continue with your previous actions.
    </p>
    <a href="#"
        class="close-menu btn btn-m btn-center-l button-s shadow-l rounded-s text-uppercase font-600 bg-white color-black close-my-tab">Okay</a>
</div>
<!-- php flash messages -->
<script type="text/javascript">
    <?php if(!empty($session->getFlashdata('message'))) { ?>
    <?php if($session->getFlashdata('message') == 'success') { ?>

    setTimeout(() => {
        $('#toast-success-balance').trigger('click');

    }, 1000);
    <?php } else {?>
    setTimeout(() => {
        $('#toast-failed-balance').trigger('click');
    }, 1000);
    <?php }
    } ?>
</script>