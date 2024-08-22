
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <div class="iq-sidebar-logo">
            <div class="top-logo">
                <a href="#" class="logo">

                    <span>Rao's</span>
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="navbar-left">
                <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                    
                    <!--<li><a onclick="history.back()" class="nav-link">-->
                    <!--<svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor"-->
                    <!--    xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd"-->
                    <!--        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">-->
                    <!--    </path>-->
                    <!--</svg></a></li>-->
                    
                </ul>
                <div class="iq-search-bar d-none d-md-block">
                    <form action="#" class="searchbox">
                      
                        <a onclick="history.back()" class="nav-link"  style="color:#5a61fd;margin-top: 30px!important;cursor: pointer;">
                    <svg class="bi bi-arrow-left-short" width="32" height="32"  viewBox="0 0 16 16" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">
                        </path>
                    </svg> BACK</a>
                        <div class="searchbox-datalink">
                            <h6 class="pl-3 pt-3 pb-3">Pages</h6>
                            <ul class="m-0 pl-3 pr-3 pb-3">
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link router-link-exact-active router-link-active pr-2"><i class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-message-line pr-2"></i>Chat</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-profile-line pr-2"></i>Profile</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-chat-check-line pr-2"></i>Todo</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-mail-line pr-2"></i>Email</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-message-line pr-2"></i>Product Listing</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-file-list-line pr-2"></i>Product Details</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-compasses-line pr-2"></i>Faq</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="<?php echo base_url('');?>" class="nav-link"><i class="ri-clockwise-line pr-2"></i>Form-wizard</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <?php if ($include_accounting_list == YES) {?>
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="nav-item">
                        <a class="search-toggle iq-waves-effect language-title" href="javascript:void(0)"><i class="fa fa-calendar" aria-hidden="true"></i> Year: <?php  echo session()->get('accounting_year')?> <i class="ri-arrow-down-s-line"></i></a>
                        <div class="iq-sub-dropdown">
                            <?php
                            foreach ($account_period_list as $accounting_period) {
                                ?>
                                <a class="iq-sub-card accounting_period" href="javascript:void(0)" data-period-id="<?php echo raos_encode($accounting_period['period_id']);?>" data-accounting-year="<?php echo $accounting_period['accounting_year'];?>" data-accounting-year-status="<?php echo $accounting_period['status'];?>" data-period-url="<?php echo base_url('ajax_update_current_accounting_period')?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $accounting_period['accounting_year'];?></a>
                                <?php
                            }
                            ?>
                        </div>
                    </li>

                </ul>
                <?php } ?>
            </div>
            <ul class="navbar-list">
                <li>
                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                        <?php if($session->get('profile_image')!=''){?>
                        <img src="<?php echo base_url('assets/images/profile/'.$session->get('profile_image'));?>" class="img-fluid rounded mr-3" alt="user">
                      <?php } else { ?>
                        <img src="<?php echo base_url('assets/images/user.png');?>" class="img-fluid rounded mr-3" alt="user">
                        <?php }?>
                        <div class="caption">
                            <h6 class="mb-0 line-height text-white"><?php echo $session->get('user_name');?></h6>
                            <span class="font-size-12 text-white">Available</span>
                        </div>
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello <?php echo $session->get('user_name');?></h5>
                                    <span class="text-white font-size-12">Available</span>
                                </div>
                                <a href="<?php echo base_url('user_profile');?>" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                        </div>
                                    </div>
                                </a>
                                <!--<a href="<?php echo base_url('');?>" class="iq-sub-card iq-bg-primary-hover">-->
                                <!--    <div class="media align-items-center">-->
                                <!--        <div class="rounded iq-card-icon iq-bg-primary">-->
                                <!--            <i class="ri-profile-line"></i>-->
                                <!--        </div>-->
                                <!--        <div class="media-body ml-3">-->
                                <!--            <h6 class="mb-0 ">Edit Profile</h6>-->
                                <!--            <p class="mb-0 font-size-12">Modify your personal details.</p>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</a>-->
                                <!--<a href="<?php echo base_url('');?>" class="iq-sub-card iq-bg-primary-hover">-->
                                <!--    <div class="media align-items-center">-->
                                <!--        <div class="rounded iq-card-icon iq-bg-primary">-->
                                <!--            <i class="ri-account-box-line"></i>-->
                                <!--        </div>-->
                                <!--        <div class="media-body ml-3">-->
                                <!--            <h6 class="mb-0 ">Account settings</h6>-->
                                <!--            <p class="mb-0 font-size-12">Manage your account parameters.</p>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</a>-->
                                <!--<a href="<?php echo base_url('');?>" class="iq-sub-card iq-bg-primary-hover">-->
                                <!--    <div class="media align-items-center">-->
                                <!--        <div class="rounded iq-card-icon iq-bg-primary">-->
                                <!--            <i class="ri-lock-line"></i>-->
                                <!--        </div>-->
                                <!--        <div class="media-body ml-3">-->
                                <!--            <h6 class="mb-0 ">Privacy Settings</h6>-->
                                <!--            <p class="mb-0 font-size-12">Control your privacy parameters.</p>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</a>-->
                                <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary dark-btn-primary" href="<?php echo base_url('logout');?>" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>
         