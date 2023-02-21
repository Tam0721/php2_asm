	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Cập nhật tài khoản </a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
    <!--================Login Box Area =================-->
	<div class="container">
		<div class="row-title text-center" style="margin-top:20px;">
			<h3>Cập nhật tài khoản</h3>
		</div>
		
            <form action="index.php?act=edit_tk&id=<?php echo e($acc->id); ?>" method="POST" enctype="multipart/form-data" >
                <div class="form-cow">
				<div class="col form-group">
					<label for="exampleInputEmail1">Họ tên</label>
                    <input type="text" class="form-control" name="ho_ten" placeholder="Họ tên" value="<?php echo e($acc->ho_ten); ?>">
                </div>
                <div class="col form-group">
					<label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="user" placeholder="Username" value="<?php echo e($acc->user); ?>">
                </div>
                <div class="col form-group">
					<label for="exampleInputEmail1">Mật khẩu</label>
                    <input type="password" class="form-control" name="pass" placeholder="Mật khẩu" value="<?php echo e($acc->pass); ?>">
                </div>
                <div class="col form-group">
					<label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo e($acc->email); ?>" disabled>
                </div>
                <div class="col form-group">
					<label for="exampleInputEmail1">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Địa chỉ" value="<?php echo e($acc->address); ?>">
                </div>
                <div class="col form-group ">
					<label for="exampleInputEmail1">Số điện thoại</label>
                    <input type="text" class="form-control" name="tel" placeholder="Số điện thoại" value="<?php echo e($acc->tel); ?>">
                </div>
            <!-- <div class="d-flex justify-content-center">
                <input type="submit" value="Cập nhập" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
            </div> -->
                            
                <div class="d-flex justify-content-center">
                    <input type="hidden" name="ma_tk" value="<?php echo e($acc->id); ?>">
            
                    <input type="submit" value="Cập nhật" name="capnhap" class="form-control" style=" width:120px;background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;margin-bottom:15px">
                </div>
			</div>
            </form>
	</div>
				

	<!--================End Login Box Area =================-->
    <?php /**PATH D:\xampp\htdocs\php2_asm\app\views\admin/accounts/form-acc.blade.php ENDPATH**/ ?>