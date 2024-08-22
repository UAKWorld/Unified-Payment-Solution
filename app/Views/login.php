<!-- Sign in Start -->
<style>
.botIcon {
    display: none;
}
</style>
<section class="sign-in-page">
    <div class="container bg-white mt-5 p-0">

        <div class="row no-gutters">
            <div class="col-sm-6 align-self-center">
                <!--flash-->
                <?= $this->include('nav/flash_message_view') ?>
                <div class="sign-in-from">
                    <h1 class="mb-0 dark-signin">Sign in to Staging account</h1>
                    <p>Enter your email address and password to access admin panel.</p>
                    <form class="mt-4" id="form" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control mb-0" id="exampleInputEmail1"
                                placeholder="Enter email" name="user_email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <a href="<?php echo base_url('forgot_password');?>" class="float-right">Forgot password?</a>
                            <input type="password" class="form-control mb-0" id="exampleInputPassword1"
                                placeholder="Password" name="user_password">
                        </div>
                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <!--<input type="checkbox" class="custom-control-input" id="customCheck1">-->
                                <!--<label class="custom-control-label" for="customCheck1">Remember Me</label>-->
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Sign in</button>
                        </div>
                        <div class="sign-info">
                            <!--                            <span class="dark-color d-inline-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>-->
                            <ul class="iq-social-media">
                                <!--<li><a href="<?php echo base_url('dashboard');?>"><i class="ri-facebook-box-line"></i></a></li>-->
                                <!--<li><a href="#"><i class="ri-twitter-line"></i></a></li>-->
                                <!--<li><a href="#"><i class="ri-instagram-line"></i></a></li>-->
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="sign-in-detail text-white">
                    <!--                    <a class="sign-in-logo mb-5" href="#"><img src="--><?php //echo base_url('assets/images/logo-white.png');?>
                    <!--" class="img-fluid" alt="logo"></a>-->
                    <div class="slick-slider11" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true"
                        data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1"
                        data-items-mobile-sm="1" data-margin="0">
                        <div class="item">
                            <img src="<?php echo base_url('assets/images/login/1.png');?>" class="img-fluid mb-4"
                                alt="logo">
                            <h4 class="mb-1 text-white">Manage your Accounts</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.
                            </p>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('assets/images/login/1.png');?>" class="img-fluid mb-4"
                                alt="logo">
                            <h4 class="mb-1 text-white">Manage your Students</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.
                            </p>
                        </div>
                        <div class="item">
                            <img src="<?php echo base_url('assets/images/login/1.png');?>" class="img-fluid mb-4"
                                alt="logo">
                            <h4 class="mb-1 text-white">Manage your School</h4>
                            <p>It is a long established fact that a reader will be distracted by the readable content.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign in END -->
<script>
$('#form input').keydown(function(e) {
    if (e.keyCode == 13) {
        $('#form').submit();
    }
});
</script>