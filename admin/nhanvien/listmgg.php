	<!-- start banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container" style="height:200px;">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Admin</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Mã Giảm Giá</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
<div class="container-fluid">
    <div class="row-title text-center" style="margin-top:20px;">
        <h3>Danh sách mã giảm giá</h3>
    </div>
    <div class="table-responsive-sm">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Mã giảm giá</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Giá trị</th>
                </tr>
            </thead>
            <?php
                foreach ($listmagiam as $giamgia) {
                    extract($giamgia);
                    $xoagg="index.php?act=xoamgg&ma_gg=".$ma_gg;
                    echo '
                    <tbody>
                        <tr>
                            <td>'.$ma_gg.'</td>
                            <td>'.$ngay_bd.'</td>
                            <td>'.$ngay_kt.'</td>
                            <td>'.number_format($giatri, 0, '.', '.').'.000 ₫</td>
                        </tr>
                    </tbody>';
                }
            ?>
        </table>
    </div>
</div>