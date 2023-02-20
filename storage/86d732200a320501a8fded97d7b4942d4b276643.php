	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Thêm ảnh mới</h3>
            </div>
            <div class="container">
                <form action="index.php?act=save-img" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Sản phẩm</label> <br>
                        <select name="ma_hh" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-sm example" required>
                            <option selected>Chọn sản phẩm</option> 
                                
                            <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sanpham): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    
                                <option value="<?php echo e($sanpham->id); ?>" ><?php echo e($sanpham->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div> <br><br>
                        <label>Hình</label> <br>
                        <input type="file" name="img[]" id="" class="" multiple required>
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Thêm mới" name="themmoi" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Đặt lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                    </div>
                    <?php
                        if (isset($thongbao)&&($thongbao!="")) echo '<h2 style="font-size:15px; color:red;text-align:center;" >'.$thongbao.'</h2>';
                    ?>
                </form>
            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\PHP2\php2_asm\app\views\admin/image/add-img.blade.php ENDPATH**/ ?>