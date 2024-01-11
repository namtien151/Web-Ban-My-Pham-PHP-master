
<main class="main-content">

<!--== Start Page Header Area Wrapper ==-->
<section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="page-header-st3-content text-center text-md-start">
                    <ol class="breadcrumb justify-content-center justify-content-md-start">
                        <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                        <li class="breadcrumb-item active text-dark" aria-current="page">Account</li>
                    </ol>
                    <h2 class="page-header-title">Account</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Page Header Area Wrapper ==-->

<!--== Start Account Area Wrapper ==-->
<section class="section-space">
    <div class="container">
        <div class="row mb-n8">
            <div class="col-lg-6 mb-8">
                <!--== Start Login Area Wrapper ==-->
                <div class="my-account-item-wrap">
                    <h3 class="title">Login</h3>
                    <div class="my-account-form">
                        <form action="index.php?act=dangkydangnhap" method="post">
                            <div class="form-group mb-6">
                                <label for="login_username">Username or Email Address <sup>*</sup></label>
                                <input type="email" id="login_username" name="email">
                            </div>

                            <div class="form-group mb-6">
                                <label for="login_pwsd">Password <sup>*</sup></label>
                                <input type="password" id="login_pwsd" name="pass">
                            </div>

                            <div class="form-group d-flex align-items-center mb-14">
                                <button class="btn" type="submit" name="dangnhap" value="dangnhap">Login</button>

                                <div class="form-check ms-3">
                                    <input type="checkbox" class="form-check-input" id="remember_pwsd">
                                    <label class="form-check-label" for="remember_pwsd">Remember Me</label>
                                </div>
                            </div>
                            <a class="lost-password" href="index.php?act=quenmk">Lost your Password?</a>
                        </form>
                    </div>
                </div>
                <!--== End Login Area Wrapper ==-->
            </div>
            <div class="col-lg-6 mb-8">
                <!--== Start Register Area Wrapper ==-->
                <div class="my-account-item-wrap">
                    <h3 class="title">Register</h3>
                    <div class="my-account-form">
                        <form action="index.php?act=dangkydangnhap" method="post">
                            <div class="form-group mb-6">
                                <label for="register_username">Username or Email Address <sup>*</sup></label>
                                <input type="email" id="register_username" name="email">
                            </div>

                            <div class="form-group mb-6">
                                <label for="register_pwsd">Password <sup>*</sup></label>
                                <input type="password" id="register_pwsd" name="pass">
                            </div>

                            <div class="form-group">
                                <p class="desc mb-4">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.</p>
                                <button class="btn" type="submit" name="dangky" value="dangky">Register</button>
                            </div>
                        </form>
                        <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo '<script type="text/javascript">
                            window.alert("'.$thongbao.'");
                          </script>';
                        }
                        ?>
                    </div>
                </div>
                <!--== End Register Area Wrapper ==-->
            </div>
        </div>
    </div>
</section>
<!--== End Account Area Wrapper ==-->

</main>