	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Tài khoản</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Thông tin tài khoản</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <a href="index.php?act=addadmin"><input type="submit" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Mã tài khoản</th>
                    <th>Họ tên</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Vai trò</th>
                    <th style="width:200px;">Cài đặt</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $acc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($acc->id); ?></td>
                    <td><?php echo e($acc->ho_ten); ?></td>
                    <td><?php echo e($acc->user); ?></td>
                    <td><?php echo e($acc->email); ?></td>
                    <td><?php echo e($acc->address); ?></td>
                    <td><?php echo e($acc->tel); ?></td>
                    
                    <td><?php echo e(($acc->role==1)? 'Admin': (($acc->role==0)? 'Khách hàng':'Nhân viên')); ?></td>
                    <td>
                        <a href="./index.php?act=updateuser&id=<?php echo e($acc->id); ?>">
                            <input type='button' value='Sửa' style='width:120px; margin:5px; border:none;' <?php echo e(($acc->role==1)? '': (($acc->role==0)? 'disabled':'')); ?>>
                        </a> 
                        <a href="./index.php?act=deleteuser&id=<?php echo e($acc->id); ?>">
                            <input type="button" value="Xóa" style="width:120px;margin:5px; border:none;" <?php echo e(($acc->role==1)? 'disabled' : ''); ?>>
                        </a>
                    </td>
                </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php
                // foreach ($listtaikhoan as $taikhoan) {
                //     extract($taikhoan);
                //     // $suatk="index.php?act=suatk&id=".$id;
                //     $xoatk="index.php?act=xoatk&ma_tk=".$ma_tk;
                //     $suatk="index.php?act=suatk&ma_tk=".$ma_tk;
                //     echo '
                //     <tbody>
                //         <tr>
                //             <td>'.$ma_tk.'</td>
                //             <td>'.$ho_ten.'</td>
                //             <td>'.$user.'</td>
                //             <td>'.$email.'</td>
                //             <td>'.$address.'</td>
                //             <td>'.$tel.'</td>
                //             <td>'.(($role==1)? "Admin":(($role==0)? "Khách hàng":"Nhân viên")).'</td>
                //             <td>
                //                 <a href="'.$suatk.'">'
                //                     .(($role==0)? "<input type='button' value='Sửa' style='width:120px; margin:5px; border:none;' disabled>":"<input type='button' value='Sửa' style='width:120px; margin:5px; border:none;'>").
                //                 '</a> 
                //                 <a href="'.$xoatk.'">
                //                     <input type="button" value="Xóa" style="width:120px;margin:5px; border:none;">
                //                 </a>
                //             </td>
                //         </tr>
                //     </tbody>';
                // }
            ?>
        </table>
    </div>
</div><?php /**PATH C:\xampp\htdocs\PHP2\php2_asm\app\views\admin/accounts/accounts.blade.php ENDPATH**/ ?>