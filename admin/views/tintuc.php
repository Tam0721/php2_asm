	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Danh sách Blog</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh sách Blog</h3>
    </div>
    <div class="table-responsive-sm">
        <div class="d-flex ">
            <a href="index.php?act=addtt"><input type="submit" value="Thêm mới" class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"></a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Mã Blog</th>
                    <th>Tên Blog</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th>Ngày đăng</th>
                    <th style="width:200px">Cài đặt</th>
                </tr>
            </thead>

            <?php foreach ($blogs as $blo):?>
                <tr>
                    <td><?= $blo ['id']?></td>
                    <td><?= $blo ['name']?></td>
                    <td class="text-center"><?= $blo ['hinh']?></td>
                    <td><?= $blo ['mota']?></td>
                    <td><?= $blo ['ngaydang']?></td>
                    <td>
                        <a href="'.$suatt.'"><input type="button" value="Sửa" style="width:120px; margin:5px; border:none;" ></a> 
                        <a href="'.$xoatt.'"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a>
                    </td>
                </tr>
            <?php endforeach;?>
            <?php
                // foreach ($listtintuc as $tintuc) {
                //     extract($tintuc);
                //     // var_dump($sanpham);
                //     // $suatk="index.php?act=suatk&id=".$id;
                //     $xoatt="index.php?act=xoatt&id=".$id;
                //     $suatt="index.php?act=suatt&id=".$id;
                //     $ha="../upload/".$img;
                //     if (is_file($ha)) {
                //        $hinh="<img src='".$ha."' height='150' width='45%'>";
                //     }else{
                //         $hinh="Không tìm thấy hình";
                //     }
                //     echo '
                //     <tbody>
                //         <tr>
                //             <td>'.$id.'</td>
                //             <td>'.$name.'</td>
                //             <td class="text-center">'.$hinh.'</td>
                //             <td>'.$mota.'</td>
                //             <td>'.$ngaydang.'</td>
                //             <td class="text-center"><a href="'.$suatt.'"><input type="button" value="Sửa" style="width:120px; margin:5px; border:none;" ></a> <a href="'.$xoatt.'"><input type="button" value="Xóa" style="width:120px;margin:5px; border:none;"></a></td>
                //         </tr>
                //     </tbody>';
                // }
            ?>
        </table>
    </div>
</div>