<?php $layout = "LayoutTrangChiTiet.php"; ?>
<main class="product">
    <div class="grid wide">
                <div class="row">
                    <div class="product-image l-4 m-6 c-12">                       
                        <img src="../asset/img/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="product-image--img">
                    </div>

                    <div class="product-info l-8 cm-6 c-12">
                        <div class="product-info-brand_wrapper">
                            <div class="product-info-brand-name">
                                <span class="product-info-brand-text">Thương hiệu:</span>
                                <a href="" class="product-info-brand-link">Sunhouse</a>
                            </div>

                            <div class="product-info-brand-top">
                                <span class="product-info-brand-text product-info-brand-text-right">Đứng thứ 27 trong</span>
                                <a href="" class="product-info-brand-link">Top 1000 chảo bán chạy tháng này</a>
                            </div>

                        </div>

                        <div class="product-info-name"><?php echo $rows->name; ?></a></div>

                        <div class="content__product-rate">
                            <div class="content__product-rate-star">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(253, 216, 54);">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                    </path>
                                </svg>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(253, 216, 54);">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                    </path>
                                </svg>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(253, 216, 54);">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                    </path>
                                </svg>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(253, 216, 54);">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                    </path>
                                </svg>
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                    size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg"
                                    style="color: rgb(253, 216, 54);">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content__product-quantity">Đã bán 230</div>
                        </div>

                        <div class="product-info-price"><?php echo $rows->price; ?></a></div>

                        <div class="product-button">
                            <div class="btn btn--buy clickable"><a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>">Chọn mua</div>
                            <div class="btn btn--buy-2 clickable">Trả góp</div>
                        </div>

                    </div>
                </div>
            </div>
</main>