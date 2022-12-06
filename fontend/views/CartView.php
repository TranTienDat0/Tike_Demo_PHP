<?php $layout = "LayoutCart.php"; ?>
<div class="content">
    <div class="grid wide">
        <div class="row">
            <div class="content__cart-left-wrapper m-12 c-12">
                <div class="content__cart-left">
                    <h3 class="content__cart-title">Giỏ hàng</h3>
                </div>
                <div class="content__cart-label">
                    <?php
                    $ProductNumberCart = 0;
                    if (isset($_SESSION['cart']))
                        foreach ($_SESSION['cart'] as $product)
                            $ProductNumberCart++;
                    ?>
                    <div class="content__cart-label-wrapper">
                        <input type="checkbox" class="content__cart-checkbox" id="">
                        <span class="content__cart-bulk">Tất cả (<?php echo $ProductNumberCart; ?> sản phẩm)</span>
                        <span class="content__cart-unit_price m-0 c-0">Đơn giá</span>
                        <span class="content__cart-amount m-0 c-0">Số lượng</span>
                        <span class="content__cart-money m-0 c-0">Thành tiền</span>
                        <a class="content__cart-label-icon--delete clickable" href="index.php?controller=cart&action=destroy"> <img  src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" alt="deleted"></a>
                       
                    </div>
                </div>
                <form action="index.php?controller=cart&action=update" method="post">
                <div class="content__cart-products">
                    <div class="content__cart-products-title">
                        <input type="checkbox" id="" class="content__cart-product-checkbox">
                        <img src="../asset/img/icon__seller.png" class="content__cart-product-title-img">
                        <span class="content__cart-product-text">Tiki Trading</span>
                    </div>
                    <div class="content__cart-product">
                        <table>                       
                                <?php foreach ($_SESSION['cart'] as $product) : ?>
                                    <tr>

                                        <td><input type="checkbox" id="" class="content__cart-product-select"></td>
                                        <td><img src="../asset/img/<?php echo $product["photo"]; ?>" alt="" class="content__cart-product-img"></td>
                                        <td>
                                            <div class="content__cart-product-wrapper">
                                                <a href="" class="content__cart-product-name"><?php echo $product["name"]; ?></a>
                                                <span class="content__cart-product-unit_price m-0 c-0"><?php echo number_format($product["price"] ); ?>₫ </span>                                               
                                                <input type="number" id="qty" min="1" value="<?php echo $product["number"]; ?>" name="product_<?php echo $product["id"]; ?>" required="Không thể để trống" class="m-0 c-0 content__cart-product-quantity">
                                                <span class="content__cart-product-money"><?php echo number_format(($product["price"]-($product["price"]*$product["discount"])/100)*$product["number"]); ?>₫ </span>

                                                <a class="content__cart-label-icon--delete clickable" href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>" data-id="2479395"><img src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/trash.svg" alt="deleted"></a>
                                            </div>
                                        </td>

                                    </tr>                         
                        <?php endforeach; ?>
                        </table>
                    </div>
                    <div class="content__cart-products-seller" style="justify-content: space-between;">
                        <div class="content__cart-products-description"><button><a style="background-color: #ff424e;
    border-radius: 5px;padding: 13px 10px;margin-top: 16px;width: 100%;color: var(--white-color);" href="index.php">Tiếp tục mua hàng</a></button></div>
                        <div class="content__cart-products-note"><input style="border: 0;background-color: #ff424e;border-radius: 5px;padding: 13px 10px;margin-top: -8px;width: 100%;color: var(--white-color);" type="submit"value="Cập nhật"></div>
                    </div>
                </div>
                </form>
            </div>
            <div class="content__cart-right-wrapper m-0 c-0">
                <div class="content__cart-user-info">
                    <div class="content__cart-user-info-title">
                        <span class="content__cart-user-info-text">Giao tới</span>
                        <a class="content__cart-user-info-change">Thay đổi</a>
                    </div>

                    <div class="content__cart-user-info-customer">
                        <span class="content__cart-user-info-name">Tiến Đạt</span>
                        <span class="content__cart-user-info-phone">0356487***</span>
                        <span class="content__cart-user-info-address">134 đường Cầu Diễn, Phường Minh Khai, Quận Bắc Từ Liêm, Hà Nội</span>
                    </div>

                </div>

                <div class="content__cart-user-priceSummary">
                    <div class="content__cart-user-prices_item">
                        <span class="content__cart-user-prices-text">Tạm tính</span>
                        <span class="content__cart-user-prices-value"><?php echo number_format($this->cartTotal()); ?>₫</span>
                    </div>

                    <div class="content__cart-user-prices_item">
                        <span class="content__cart-user-prices-text">Giảm giá</span>
                        <span class="content__cart-user-prices-value">0 đ</span>
                    </div>

                    <div class="content__cart-user-prices_item">
                        <span class="content__cart-user-prices-text">Tổng tiền</span>
                        <span class="content__cart-user-prices-value--empty"><?php echo number_format($this->cartTotal()); ?>₫</span>
                    </div>

                </div>
                <a href="index.php?controller=cart&action=checkout"> <button class="clickable btn--buy">Mua hàng (<?php echo $ProductNumberCart; ?>)</button></a>
            </div>
        </div>

    </div>

</div>