

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Danh mục sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ <span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Sản phẩm</span></a>
						<!-- <a href="category.html">Fashon Category</a> -->
					</nav>
				</div>
			</div>
		</div>
	</section>
	<?php
		$note = 0;
		if($note == 1)
		echo "
		<script>alert('Da them vao gio hang');</script>";

	?>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Thương hiệu giày</div>
					<ul class="main-categories">
						<!-- <li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
								 class="lnr lnr-arrow-right"></span>Fruits and Vegetables<span class="number">(53)</span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li> -->
						
								<li class="main-nav-list"><a href="index.php?url=category"><span
									class="lnr lnr-arrow-right"></span>Tất cả sản phẩm<span class="number"></span></a></li>
							<?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cates): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
								
								
									<li class="main-nav-list"><a href="index.php?url=category&iddm=<?php echo e($cates->id); ?>"><span
									class="lnr lnr-arrow-right"></span><?php echo e($cates->ten_loai); ?><span class="number"></span></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
				</div>
				<!-- <div class="sidebar-filter mt-50">
					<div class="common-filter">
						<div class="head">Sản phẩm theo giá</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Giá:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to"> - </div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<!-- <div class="sidebar-categories"> -->
					<!-- <div class="sorting">
						<select>
							<option value="1">Giá từ thấp tới cao</option>
							<option value="2">Giá từ cao tới thấp</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
						</select>
					</div>	
					<div class="pagination">
					<div class="form-group">
						<input type="text" name="kyw" class="" placeholder="Tìm..." style="border: 1px solid gray;border-radius:5px;outline:none;padding-left:5px;">
						<input type="submit" name="listgo" value="Go" style="border:1px solid gray;border-radius:5px;">
					</div>
						
					</div> -->
				<!-- </div> -->
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
							<?php $__currentLoopData = $listProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								
									<div class="col-lg-4 col-md-6">
										<div class="single-product">
											<a href="index.php?url=sanphamct&idsp=<?php echo e($sp->id); ?>">
												<img class="img-fluid" src="./public/upload/<?php echo e($sp->img); ?>" alt="" style="height:250px; width:250px;">
											</a>
											<div class="product-details">
												<h6><?php echo e($sp->name); ?></h6>
											<div class="price">
                                                <?php $price_1 = $sp->price_old; ?>
										        <?php if($sp->price_new > 0): ?> <?php $price_1 = $sp->price_new; ?> <?php endif; ?>
												<h6><?php echo e(number_format($price_1, 0, '.', '.')); ?>.000 ₫</h6>
											</div>
											<div class="prd-bottom">
												<a href="index.php?url=sanphamct&idsp=<?php echo e($sp->id); ?>" class="social-info">
													<span class="ti-bag"></span>
													<p class="hover-text">
														<input type="submit" name="addgiohang" id="them" value="Thêm giỏ" style="background: transparent;border: none !important;">
													</p>
												</lable>
											</form>
												<a href="" class="social-info">
													<span class="lnr lnr-heart"></span>
													<p class="hover-text">Yêu thích</p>
												</a>
												<a href="" class="social-info">
													<span class="lnr lnr-sync"></span>
													<p class="hover-text">So sánh</p>
												</a>
												<a href="" class="social-info">
													<span class="lnr lnr-move"></span>
													<p class="hover-text">xem thêm</p>
												</a>
											</div>
										</div>
									</div>
								</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</section>
			
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<!-- <div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
							<option value="1">Hiển thị 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div> -->
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Ưu đãi của tuần</h1>
						<p>Nhằm tri ân khách hàng cửa hàng chúng tôi đã tạo ra nhiều ưu đãi hấp dẫn
							để quý khách hàng có thể mua sắm các mẫu giày đẹp mắt với giá cả hợp lý.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<?php $__currentLoopData = $listProd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
								<div class="single-related-product d-flex" id="imgDeal">
									<a href="index.php?url=sanphamct&idsp=<?php echo e($sp->id); ?>"><img src="./public/upload/<?php echo e($sp->img); ?>" alt=""></a>
									<div class="desc">
										<a href="index.php?url=sanphamct&idsp=<?php echo e($sp->id); ?>" class="title"><?php echo e($sp->name); ?></a>
										<div class="price">
                                            <?php $price_1 = $sp->price_old; ?>
								            <?php if($sp->price_new > 0): ?> <?php $price_1 = $sp->price_new; ?> <?php endif; ?>
											<h6><?php echo e(number_format($price_1, 0, '.', '.')); ?>.000 ₫</h6>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->

	<style>
		#imgDeal img{
			width: 80px;
			height: 80px;
			border-radius: 5px;
		}
	</style>

<?php /**PATH C:\xampp\htdocs\PHP2\php2_asm\app\views/category/category.blade.php ENDPATH**/ ?>