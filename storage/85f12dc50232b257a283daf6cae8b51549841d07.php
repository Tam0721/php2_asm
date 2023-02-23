	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Cập nhật sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Cập nhật sản phẩm</h3>
            </div>
            <div class="container">
                <?php 
                    // if(is_array($sanpham)){
                        // extract($sanpham);
                        // var_dump($sanpham);
                    // }
                    // $ha="../upload/".$img;
                    // if (is_file($ha)) {
                    //    $hinh="<img src='".$ha."' height='150' width='45%'>";
                    // }else{
                    //     $hinh="Không tìm thấy hình";
                    // }
                ?>
                <form action="index.php?act=updatesp&id=<?php echo e($model->id); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <select name="iddm" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example">
                            <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if($ca->id == $model->iddm): ?> selected <?php endif; ?> value="<?php echo e($ca->id); ?>"><?php echo e($ca->ten_loai); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" name="name" id="" class=" form-control" value="<?php echo e($model->name); ?>">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="text" name="price_old" id="" class=" form-control" value="<?php echo e(number_format($model->price_old, 0, '.', '.')); ?>.000">
                    </div>
                    <div class="form-group">
                        <label>Giá giảm</label>
                        <input type="text" name="price_new" id="" class=" form-control" value="<?php echo e(number_format($model->price_new, 0, '.', '.')); ?>.000">
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label><br>
                        <input type="file" name="img" id="" class="" value="">
                        <?php echo e($model->img); ?>

                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label><br>
                        <label><input name="trang_thai" type="radio" <?php if($model->trang_thai == 0): ?> checked <?php endif; ?> value="0">Hết hàng</label>
                        <label><input name="trang_thai" type="radio" <?php if($model->trang_thai == 1): ?> checked <?php endif; ?> value="1">Còn hàng</label>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="10" class=" form-control" value=""><?php echo e($model->mota); ?></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="id" value="<?php echo e($model->id); ?>">
                        <input type="submit" value="Cập nhật" name="capnhap" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Nhập lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
                    </div>
                    <!-- <input type="submit" value="Thêm mới" name="themmoi" class="btn btn-default border-0 " style="margin-bottom:15px; width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <input type="reset" value="Nhập lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    <a href="index.php?act=lisdm"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a> -->
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div><?php /**PATH D:\xampp\htdocs\php2_asm\app\views\admin/product/edit.blade.php ENDPATH**/ ?>