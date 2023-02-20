</style>
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Chi tiết sản phẩm</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="index.php?url=category">Sản phẩm <span class="lnr lnr-arrow-right"></span></a>
						<a href="index.php?url=sanphamct">Chi tiết</a>
						
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
        
    <div class="container-fluid" style="margin-top: 30px;">
        <div class= "row">
            <div class ="col-sm-5">
                <div style="text-align: center; border:1px solid #ccc;">
                    <img id="show" width="70%" src="./public/upload/<?php echo e($detail_product->img); ?>" alt="">
                </div>

                <!-- demo -->
                <div style="text-align: center; margin-top: 10px;">
                    <img src="./public/upload/<?php echo e($detail_product->img); ?>" width="15%" onclick="myFunction(this)">
                    <?php $__currentLoopData = $listImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <img src="./public/upload/<?php echo e($img->img); ?>" width="15%" onclick="myFunction(this)">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- end demo -->

                <div style="margin-top: 20px;">
                    <h4>Mô tả</h4>
                    <p style="margin-left: 20px;"><?php echo e($detail_product->mota); ?></p>
                </div>
            </div>
            <div class ="col-sm-3">
                <h1 style="text-align:center;font-size:22px;"><?php echo $detail_product['name']?></h1>
                <!-- <p style="font-weight:bold; text-align:center; color:red;font-size:25px;">$  -->
                        <?php if($detail_product->price_new > 0): ?>
                            <p style="font-weight:bold; text-align:center; color:red;font-size:25px;">
                                <?php echo e(number_format($detail_product->price_new, 0, '.', '.')); ?>.000 ₫</p>
                            <p style="text-align:center; color:black;font-size:15px; text-decoration: line-through;">
                                <?php echo e(number_format($detail_product->price_old, 0, '.', '.')); ?>.000 ₫</p>
                        <?php else: ?>
                            <p style="font-weight:bold; text-align:center; color:red;font-size:25px;">
                                <?php echo e(number_format($detail_product->price_old, 0, '.', '.')); ?>.000 ₫</p>
                        <?php endif; ?>
                        <form action="index.php?url=cartprocess" method="post">
                            <div class="btn-size">
                                <h6>Chọn size:</h6>
                                <div class="switch-field">
                                    <input type="radio" id="radio-1" name="size" value="35" checked/>
                                    <label for="radio-1">35</label> 
                                    <input type="radio" id="radio-2" name="size" value="36" />
                                    <label for="radio-2">36</label> 
                                    <input type="radio" id="radio-3" name="size" value="37" />
                                    <label for="radio-3">37</label> 
                                    <input type="radio" id="radio-4" name="size" value="38" />
                                    <label for="radio-4">38</label> 
                                    <input type="radio" id="radio-5" name="size" value="39" />
                                    <label for="radio-5">39</label>
                                </div>
                                <div class="switch-field" >
                                    <input type="radio" id="radio-6" name="size" value="40" />
                                    <label for="radio-6">40</label>
                                    <input type="radio" id="radio-7" name="size" value="41" />
                                    <label for="radio-7">41</label>
                                    <input type="radio" id="radio-8" name="size" value="42" />
                                    <label for="radio-8">42</label>
                                    <input type="radio" id="radio-9" name="size" value="43" />
                                    <label for="radio-9">43</label>
                                    <input type="radio" id="radio-10" name="size" value="44" />
                                    <label for="radio-10">44</label>
                                </div>
                                </div>        
                            <div id="output"></div>          
                            <div class="">
                                <h6 style="margin-top: 20px;">Số lượng</h6> 
                                <div class="amount-form" style="margin-left: 20px;">
                                    <!-- <button class="btn-minus" id="minus" onclick="handleMinus()"><i class="fa-solid fa-minus"></i></button> -->   
                                    <input type="number" value="1"  name="soluong" step="1" min="1" max="900">
                                    <input type="hidden" name="id" value="<?php echo e($detail_product->id); ?>">
                                    <input type="hidden" name="name" value="<?php echo e($detail_product->name); ?>">
                                    <input type="hidden" name="price" value="<?php echo e(($detail_product->price_new > 0)? $detail_product->price_new:$detail_product->price_old); ?>">
                                    <input type="hidden" name="img" value="<?php echo e($detail_product->img); ?>">
                                    <input type="hidden" name="note" value="0">

                        <!-- <button class="btn-plus" id="plus" onclick="handlePlus()"><i class="fa-solid fa-plus"></i></button>  -->
                        

                        <input type="submit" name="addgiohang" value="<?php echo e(($detail_product->trang_thai)? "Đặt hàng":"Hết hàng"); ?>" <?php echo e($detail_product->trang_thai? "":"disabled"); ?> class="btn btn-default border-0" style="margin:0px 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;">

                        
                        
                    </form>
                    </a>
                        <!-- <input type="submit" name="addgiohang"  id="btn" value="<?=$detail_product['trang_thai']? " Đặt hàng":"Hết hàng"?>" <?=$detail_product['trang_thai']? "":"disabled"?> class="btn btn-default border-0" style="margin:0 0 15px 15px; width:120px; background: linear-gradient(131deg, rgba(255,117,0,1) 12%, rgba(255,184,0,1) 86%); color:#fff;"> -->
                    </form>
                </div>
            </div>
                
        
                <div class="">
                    <h6 style="margin-top: 10px;">SKU</h6>
                    <p style="margin-left: 20px;"><?php echo e($detail_product->ten_loai); ?></p>
                </div>
                <div class="">
                    <h6 style="margin-top: 20px;">Loại: </h6>
                    <p style="margin-left: 20px;">Giày <?php echo e($detail_product->ten_loai); ?></p>
                </div>
               
            </div>
            <div class ="col-sm content-pr">
                <div class= "row" style="margin-left: 30px; margin-top: 80px;">
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all;">
                        <p><i class="fa-solid fa-rotate"></i>&nbsp;</p><span style="word-wrap: break-word;"> Chính hãng 100% - Đổi trả trong 1 tháng (đối với sản phẩm chưa sử dụng)</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all;">
                        <p><i class="fa-solid fa-truck"></i>&nbsp;</p><span> Miễn phí giao hàng cho đơn hàng từ 500.000đ trong 10km đầu tiên</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all; margin-top: 20px;">
                        <p><i class="fa-solid fa-share-from-square"></i>&nbsp;</p><span> Thu tiền khi nhận hàng, thanh toán trực tuyến với nhiều phương thức</span>
                    </div>
                    <div class ="col-md-5 col-sm-6 text-center" style="word-break: break-all; margin-top: 20px;">
                        <p><i class="fa-solid fa-headset"></i>&nbsp;</p><span> Trung tâm cuộc gọi: 1900.679.678 (7:30 - 22:00)</span>
                    </div>
                </div>
            </div>
    </div>
    <!--  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
            // $("input").keyup(function(){
            //     txt = $("input").val();
                $("#binhluan").load("view/comment.php", {idpro: <?php echo e($detail_product->id); ?>});
            // });
            });

            function myFunction(imgs) {
                var expandImg = document.getElementById("show");
                expandImg.src = imgs.src;
            };
        </script>
        <div class="form-group" id="binhluan">
            
        </div>
    </div>  
    <style>
        .btn-minus{
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        .btn-plus{
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        .content-1 p{
            text-align: center;
        }
        .btn-size button{
            margin-top: 5px;
        }
        .btn-size button:hover{
            background-color: #ccc;
        }
        .amount-form{
            display: flex;
        }
        .amount-form input{
            outline: none;
            width: 50px;
            text-align: center;
            height: 35px;
            /* background-color: aqua; */
            border: 1px solid #ccc;
        }
        .amount-form button{
            border: 1px solid #ccc;
            outline: none;
            height: 35px;
            width: 35px;
            background-color: #cccc;
        }
        .slide-link {
            margin-left: 140px;
            margin-top: -50px;
            display: flex;
            justify-content: space-around;
            justify-items: center;
            width: 400px;
        }
        .slide-link a{
            width: 80px;
            height: 80px;
        }
        .slide-link a img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    
        .switch-field {
            display: flex;
            margin-bottom: 5px;
            overflow: hidden;
        }

        .switch-field input {
            position: absolute !important;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            width: 1px;
            border: 0;
            overflow: hidden;
        }

        .switch-field label {
            background-color: #ffffff;
            color: black;
            font-size: 14px;
            font-weight: 500;
            line-height: 1;
            text-align: center;
            padding: 8px 16px;
            margin-right: -1px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
            transition: all 0.1s ease-in-out;
        }

        .switch-field label:hover {
            cursor: pointer;
        }

        .switch-field input:checked + label {
            background-color: orange;
            box-shadow: none;
        }

        .switch-field label:first-of-type {
            border-radius: 4px 0 0 4px;
        }

        .switch-field label:last-of-type {
            border-radius: 0 4px 4px 0;
        }

        /* This is just for CodePen. */

        .form {
            max-width: 600px;
            font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
            font-weight: normal;
            line-height: 1.625;
            margin: 8px auto;
            padding: 16px;
        }
        
    </style>
</div><?php /**PATH C:\xampp\htdocs\PHP2\php2_asm\app\views/product/detail.blade.php ENDPATH**/ ?>