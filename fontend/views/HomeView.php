<?php $layout = "LayoutTrangChu.php"; ?>

<div class="content__product row">
	<?php
	$hotProducts = $this->modelHotProducts();
	?>
	<?php foreach ($hotProducts as $rows) : ?>
		<div class="content__product-item col l-2-4 m-4 c-12 item-hover">
			<a class="" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img class="content__product-img" src="../asset/img/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive">
			<div class="content__product-info">
				<h3 class="content__product-name" style="color: black;"><?php echo $rows->name; ?></h3>
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

				<div class="content__product-price" style="color: black;"><?php echo $rows->price; ?></div>
			</div>
		</a>
		</div>
	<?php endforeach; ?>
</div>