<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <?php
        if (isset($errors)) {
            foreach ($errors as $error) {
                echo '<div class="alert text-white bg-danger" role="alert">
                              <div class="iq-alert-icon">
                                 <i class="ri-information-line"></i>
                              </div>
                              <div class="iq-alert-text">'.$error.'</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>';
            }
        }
        ?>


        <?php echo !empty($session->getFlashdata('message')) ? $session->getFlashdata('message') : ''; ?>
    </div>
</div>

<!-- Wrapping element -->
<div id="toast_message" style="position: fixed; z-index: 999999; min-width: 500px; right:10px;">

</div>

<div id="process_toast_message_div" style="position: fixed; z-index: 99999; min-width: 500px; right: 1px;0px;">
    <div style="position: absolute; top: 0; right: 0;">
        <div  id="processing_toast_message"  class="toast hide" data-delay="3000">
            <div class="toast-header iq-bg-warning">
                <strong class="mr-auto"><i class="fa fa-globe"></i> Request Processing!</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                we are processing your request Please wait...
                <img src="<?php echo base_url('/assets/images/spinner.gif')?>" height="20" width="20">
            </div>
        </div>
    </div>
</div>