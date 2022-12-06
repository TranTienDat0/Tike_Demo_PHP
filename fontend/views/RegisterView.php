<?php $layout = "LayoutAccount.php"; ?>
<div class="content">
            <div class="grid wide">
                <div class="content__login">
                    <img src="../asset/img/bg_login.png" alt="" class="content__login-img">
                    <?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
          <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>      
          <?php endif; ?>
                    <form action="index.php?controller=account&action=registerPost" method="post" class="content__login-form">
                        <div class="content__login-form-caption">Đăng ký</div>
                        <input type="text" name="email" id="" class="content__login-form-input content__login-form-userName" placeholder="Nhập Email" required>
                        <br>
                         <input type="text" name="password" id="" class="content__login-form-input content__login-form-userName" placeholder="Nhập Password" required>
                        <br>                          
                        <input type="text" name="name" id="" class="content__login-form-input content__login-form-userName" placeholder="Nhập Name">
                        <br>
                        <input type="text" name="address" id="" class="content__login-form-input content__login-form-userName" placeholder="Nhập Địa chỉ">
                        <br>
                        <input type="text" name="phone" id="" class="content__login-form-input content__login-form-userName" placeholder="Nhập Số điện thoại">
                        <button class="content__login-form-btn--login">Đăng ký</button>                     
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
                            <a href="Login.html" class="content-login-form-footer-link">Đăng nhập</a>
                        </div>

                    </form>
                </div>

            </div>

        </div>