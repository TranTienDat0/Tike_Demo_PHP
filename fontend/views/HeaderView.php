<header class="header">
    <div class="grid wide">
        <div class="header__top">
            <div class="header__logo">
                <a href="index.php" class="header__logo--link">
                    <img src="../asset/img/icon__logo.png" alt="logo" class="header__logo-top">
                </a>


            </div>

            <div class="header__form_search" id="smart-search">
                <input onkeyup="searchAjax();" id="key" type="text" class="header__form_search-input" placeholder="Tìm sản phẩm">

                <button class="header__form_search-btn" onclick="return search();">
                    <img src="../asset/img/icon__search.png" alt="search" class="header__form_search-icon">
                    <span class="header__form-search-text c-0">Tìm kiếm</span>
                </button>              
                
                <div class="header__form-search--history" id="smart-search-box">
                    <ul>
                         
                    </ul>
                </div>


            </div>

            <div class="header__user">
                <?php if (!isset($_SESSION["customer_email"])) : ?>
                    <div class="header__user-info">
                        <img src="../asset/img/user_avatar.jpg" alt="avatar" class="header__user-avatar">
                        <span class="header__user-item">
                            <span class="header__user-acount-label">
                                <a class="header__user-acount-link" href="#">Đăng nhập/Đăng ký</a>
                                <i class="header__user-icon fa-solid fa-caret-down"></i>
                            </span>
                        </span>

                        <ul class="header__user-info-menu">
                            <li class="header__user-info-item">
                                <a href="index.php?controller=account&action=login" class="header__user-info--link">
                                    Đăng nhập
                                </a>
                            </li>
                            <li class="header__user-info-item">
                                <a href="index.php?controller=account&action=register" class="header__user-info--link">
                                    Đăng ký
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div class="header__user-info">
                        <img src="../asset/img/user_avatar.jpg" alt="avatar" class="header__user-avatar">
                        <span class="header__user-item">
                            <span class="header__user-acount-label">
                                <a class="header__user-acount-link" href="#"><?php echo $_SESSION["customer_email"]; ?></a>
                                <i class="header__user-icon fa-solid fa-caret-down"></i>
                            </span>
                        </span>

                        <ul class="header__user-info-menu">
                            <li class="header__user-info-item">
                                <a href="#" class="header__user-info--link">
                                    Thông báo của tôi
                                </a>
                            </li>
                            <li class="header__user-info-item">
                                <a href="index.php?controller=account&action=logout" class="header__user-info--link">
                                    Thoát tài khoản
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="header__user-cart">
                    <style type="text/css">
                        #smart-search {
                            position: relative;
                        }

                        #smart-search-box {
                            width: 100%;
                            background: white;
                            position: absolute;
                            z-index: 1;
                        }

                        #smart-search-box ul {
                            padding: 0px;
                            margin: 0px;
                            list-style: none;
                        }

                        #smart-search-box ul li {
                            border-bottom: 1px solid #dddddd;
                        }

                        #smart-search-box img {
                            width: 70px;
                            margin-right: 5px;
                        }

                        #smart-search-box a {
                            text-decoration: none;
                            color: black;
                        }

                        #smart-search-box {
                            max-height: 300px;
                            overflow: scroll;
                            display: none;
                        }
                    </style>
                    <script type="text/javascript">
                        function search() {
                            //lay gia tri cua textbox co id=key
                            var key = document.getElementById("key").value;
                            //di chuyen den trang tim kiem
                            location.href = "index.php?controller=search&action=name&key=" + key;
                        }
                        /*
                        //kiem tra jquery (neu website chua co jquery thi phai download va add jquery vao trang)
                        $(document).ready(function(){
                          alert("jquery da load vao trang");
                        });*/
                        function searchAjax() {
                            var key = $("#key").val();
                            //hien thi box search
                            $("#smart-search-box").attr("style", "display:block");
                            //thuc hien lay thong tin bang ajax
                            $.get("index.php?controller=search&action=ajax&key=" + key, function(data) {
                                //lam rong du lieu trong the ul
                                $("#smart-search-box ul").empty();
                                //them du lieu vao the ul
                                $("#smart-search-box ul").append(data);
                            });
                        }
                    </script>
                    <?php
                    $ProductNumberCart = 0;
                    if (isset($_SESSION['cart']))
                        foreach ($_SESSION['cart'] as $product)
                            $ProductNumberCart++;
                    ?>
                    <a href="index.php?controller=cart" class="header__user-cart--link">
                        <div class="header__usert-cart-item">
                            <div class="header__user-cart-wrapper">
                                <img src="../asset/img/icon__cart.png" alt="icon__cart" class="header__user-cart-img">
                                <span class="header__user-cart-quantity"><?php echo $ProductNumberCart; ?></span>
                            </div>
                            <a href="" class="header__user-cart-text"><?php echo $ProductNumberCart; ?> Sản phẩm</a>
                        </div>

                    </a>

                </div>

            </div>

        </div>

        <div class="header__bot">
            <a href="" class="header__bot--link">
                <img src="../asset/img/icon__freeship.png" alt="freeship" class="header__bot-logo">
            </a>

            <div class="header__bot-quicklink">
                <?php
                $conn = Connection::getInstance();
                $query = $conn->query("select *from categories");
                $categories = $query->fetchAll(PDO::FETCH_OBJ);
                ?>
                <?php foreach ($categories as $rows) : ?>
                    <a class="header__bot-link" href="index.php?controller=products&action=category&catId=<?php echo $rows->id; ?>">
                        <?php echo $rows->name; ?>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>

    </div>

</header>