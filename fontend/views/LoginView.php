<?php $layout = "LayoutAccount.php"; ?>

<div class="content">
	<div class="grid wide">
                <div class="content__login">
                    <img src="../asset/img/bg_login.png" alt="" class="content__login-img">
                    <form class="content__login-form" method="post" action="index.php?controller=account&action=loginPost" >
                        <div class="content__login-form-caption">Đăng nhập</div>
                        <input type="text" id="" class="content__login-form-input content__login-form-userName"
                            placeholder="Email/Số điện thoại/Tên đăng nhập" name="email">
                        <input type="password" id="" class="content__login-form-input content__login-form-password"
                            placeholder="Mật khẩu" name="password">                      
                        <button class="content__login-form-btn--login" type="submit">Đăng nhập</button>
                        <div class="content__login-form-help">
                            <span class="content__login-form-help-text">Quên mật khẩu</span>
                            <span class="content__login-form-help-text">Đăng nhập với SMS</span>
                        </div>


                        <div class="content__login-form-connect">
                            <div class="line">
                                <div class="content__login-form-connect-text">Hoặc</div>
                            </div>
                            <div class="content__login-form-groupbtn">
                                <button class="content__login-form-btn">
                                    <img src="../asset/img/icon__facebook.png" alt="" class="icon-img icon--facebook">
                                    <span class="content__login-form-text">Facebook</span>
                                </button>

                                <button class="content__login-form-btn">
                                    <img src="../asset/img/icon__google.png" alt="" class="icon-img icon--facebook">
                                    <span class="content__login-form-text">Google</span>
                                </button>

                            </div>
                        </div>

                        <div class="content__login-form-footer">
                            <span class="content-login-form-footer-text">Bạn mới biết đến Tiki?</span>
                            <a href="index.php?controller=account&action=register" class="content-login-form-footer-link">Đăng ký</a>
                        </div>

                    </form>
                </div>

            </div>
</div>