	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Product Type</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <?php 
    ?>
        <div class="row-form">
            <div class="row-title text-center" style="margin-top:20px;">
                <h3>Cập nhật danh mục</h3>
            </div>
            <div class="container">
                <form action="index.php?act=editcate&id=<?php echo e($model->id); ?>" method="post">
                    <div class="form-group">
                        <label for="email">Mã danh mục</label>
                        <input type="text" name="id" id="" value="<?php echo e($model->id); ?>" disabled class=" form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="pwd">Tên danh mục</label>
                        <input type="text" name="ten_loai" id="" class=" form-control" value="<?php echo e($model->ten_loai); ?>">
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="hidden" name="id" value="<?php echo e($model->id); ?>">
                        <input type="submit" value="Cập nhật" name="capnhapdm" class="form-control " style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <input type="reset" value="Đặt lại" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
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
    </div><?php /**PATH D:\xampp\htdocs\php2_asm\app\views\admin/category/edit.blade.php ENDPATH**/ ?>