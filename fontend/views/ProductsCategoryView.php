<?php
$layout = "LayoutTrangTrong.php";
?>
<!-- <div class="product l-10 m-12 c-12"> -->

<div class="product l-10 m-12 c-12">
    
    <?php foreach ($data as $rows) : ?>
        <div class="product-item l-3 m-4 c-6 clickable">
            <div class="product-item-wrapper">
                <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="../asset/img/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="product-item-image">
                    <div class="product-item-name" style="color: black;">
                        <?php echo $rows->name; ?>
                    </div>
                    <div class="content__product-rate">
                        <div class="content__product-rate-star">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg" style="color: rgb(253, 216, 54);">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                </path>
                            </svg>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg" style="color: rgb(253, 216, 54);">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                </path>
                            </svg>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg" style="color: rgb(253, 216, 54);">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                </path>
                            </svg>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg" style="color: rgb(253, 216, 54);">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                </path>
                            </svg>
                            <svg stroke="currentColor" fill="gray" stroke-width="0" viewBox="0 0 24 24" size="14" color="#fdd836" height="14" width="14" xmlns="http://www.w3.org/2000/svg" style="color: rgb(253, 216, 54);">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                </path>
                            </svg>
                        </div>
                        <div class="content__product-quantity">Đã bán 6</div>
                    </div>
                    <div class="product-item-price" style="color: black;"><?php echo $rows->price; ?></div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- paging -->
</div>


<!-- end paging -->