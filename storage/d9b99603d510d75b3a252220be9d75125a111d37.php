	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Sản phẩm</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh sách sản phẩm</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <a href="index.php?act=addsp"><input type="submit" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
            
            <a href="index.php?act=addimg"><input type="submit" value="Thêm hình ảnh mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
        </div>
        
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th style="max-width:80px">Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Giá giảm</th>
                    <th style="width:400px">Mô tả</th>
                    <th>View</th>
                    <th style="width:150px">Cài đặt</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sanpham): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                
                    
                <tbody>
                    <tr>
                        <td><?php echo e($sanpham->id); ?></td>
                        <td><?php echo e($sanpham->name); ?></td>
                        <td class="text-center"><img src='../public/upload/<?php echo e($sanpham->img); ?>' height='150' width='45%'></td>
                        <td><?php echo e(number_format($sanpham->price_old, 0, '.', '.')); ?>.000 ₫</td>
                        <td><?php echo e(number_format($sanpham->price_new, 0, '.', '.')); ?>.000 ₫</td>
                        <td><?php echo e($sanpham->mota); ?></td>
                        <td><?php echo e($sanpham->luotxem); ?></td>
                        <td class="text-center">
                            <a href="./index.php?act=updatepro&id=<?php echo e($sanpham->id); ?>"><input type="button" value="Sửa" style="width:120px; margin:5px; border:none;" ></a>
                            <a href="./index.php?act=deletepro&id=<?php echo e($sanpham->id); ?>"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a>
                            <a href="./index.php?act=imglist&idsp=<?php echo e($sanpham->id); ?>"><input type="button" value="Hình ảnh" style="width:120px;margin:5px; border:none;"></a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</div><?php /**PATH C:\xampp\htdocs\PHP2\php2_asm\app\views\admin/product/product.blade.php ENDPATH**/ ?>