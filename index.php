<?php
    require_once './vendor/autoload.php';
    require_once './commons/database-config.php';

    ob_start(); 
    session_start();
    $url = isset($_GET['url']) ? $_GET['url'] : "/";
    include 'app/views/Header.php';
    // // include 'model/bill.php';
    // // include 'model/chitietdh.php';
    // include 'app/models/BaseModels.php';
    // // include 'model/taikhoan.php';
    // include 'app/models/Products.php';
    // include 'app/models/Categories.php';
    // include 'model/tintuc.php';
    // include 'model/cart.php';
    // include 'model/hinhanh.php';
    // include 'model/magiamgia.php';
    // $ttnew=loadall_tintuc_home();
    // $cart=loadall_giohang();
    // $mgg=loadmgg(date('Y-m-d'));
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
    // $note = 0;
    // if(isset($_GET['act'])){
    //     $act = $_GET['act'];
    include 'app/controllers/CategoryController.php';
    include 'app/controllers/ProductController.php';
    include 'app/controllers/BlogController.php';
    use App\Controllers\HomeController;
    use App\Controllers\ProductController;
    use App\Controllers\CategoryController;
    use App\Controllers\AccountController;
    use App\Controllers\BlogController;
        switch ($url) {
            case '/':
                $u = new HomeController();
                $u -> index();
                break;
            case 'category':
                $c = new CategoryController();
                $c -> loadfilter_product();
                break;
            case 'blog':
                $b = new BlogController();
                $b -> loadall_blog();
                break;
            case 'cart':
                include "app/views/Cart.php";
                break;
            case 'cartprocess':
                include 'app/views/cartprocess.php';
                break;
            case 'cartupdate':
                include 'app/views/cartupdate.php';
                break;
            case 'delcart':
                if (isset($_GET['idsp'])&&($_GET['idsp']>=0)){
                    $ma_hh=$_GET['idsp'];
                    $size=$_GET['size'];
                    array_splice($_SESSION['giohang'],$ma_dh && $size,1);
                    delete_giohang($ma_hh,$size);
                }
                include 'app/views/delcart.php';
                break;
            case 'listsp':
                if (isset($_POST['listgo'])&&($_POST['listgo'])){
                    $kyw =$_POST['kyw'];
                    $iddm =$_POST['iddm'];
                }else{
                    $kyw='';
                    $iddm=0;
                }
                $sql = "select * from loai order by ten_loai desc";
                $listdanhmuc= pdo_query($sql);
                $spnew= loadall_sanpham1($kyw,$iddm);
                include "app/views/category.php";
                break;
            // 
            case 'checkout':
                include 'app/views/checkout.php';
                break;
            case 'confirmation':
                    if(isset($_POST['confirmation'])&&($_POST['confirmation'])){
                        $ma_tk = $_POST['ma_tk'];
                        $nguoi_nhan=$_POST['nguoi_nhan'];
                        $dia_chi_nhan=$_POST['dia_chi_nhan'];
                        $sdt_nhan=$_POST['sdt_nhan'];
                        $payment=$_POST['payment'];
                        $email=$_POST['email'];
                        $ngay_dat = date("Y-m-d",time());
                        $ma_gg = $_POST['mgg'];
                        if ($ma_gg == 'NULL') {
                            $ma_gg = 'NULL';
                            insert_dh($ma_tk, $ngay_dat, $nguoi_nhan, $dia_chi_nhan, $sdt_nhan, $payment, $email, $ma_gg);
                        } else {
                            $ma_gg = "'".$_POST['mgg']."'";
                            insert_dh($ma_tk, $ngay_dat, $nguoi_nhan, $dia_chi_nhan, $sdt_nhan, $payment, $email, $ma_gg);
                        }

                        $lastid = getlastinsertedid($ma_tk);
                        extract($lastid);

                        for ($i=0; $i<count($_SESSION['giohang']); $i++) {
                            $ma_hh = $_POST['ma_hh'][$i];
                            $size = $_POST['size'][$i];
                            $quantity = $_POST['so_luong'][$i];
                            insert_chitietdh($ma_dh, $ma_hh, $size, $quantity);
                            delete_cart();
                        }
                        unset($_SESSION['giohang']);
                        
                    }
                include 'app/views/confirmation.php';
                break;
            case 'shippingbill':
                include "app/views/shippingbill.php";
                break;
            case 'listshippeddetail':
                if(isset($_GET['ma_dh'])&&($_GET['ma_dh']>0)){
                    $listchitietdh = loadone_chitietdh($_GET['ma_dh']);
                    $bill_mgg = loaddetailbill_mgg($_GET['ma_dh']);
                }
                include "app/views/shippeddetail.php";
                break;
            case 'listshippingdetail':
                if(isset($_GET['ma_dh'])&&($_GET['ma_dh']>0)){
                    $listchitietdh = loadone_chitietdh($_GET['ma_dh']);
                    $bill_mgg = loaddetailbill_mgg($_GET['ma_dh']);
                }
                include "app/views/shippingdetail.php";
                break;
            case 'contact':
                include 'app/views/contact.php';
                break;
            case 'historybill':
                include 'app/views/historybill.php';
                break;
            case 'sanphamct':
                $detail = new ProductController();
                $detail -> load_detail_product();
                break;
            case 'login':
                $acc = new AccountController();
                $acc -> loginForm();
                break;
            case 'signup':
                // if(isset($_POST['dangky'])&&($_POST['dangky'])){
                //     $email = $_POST['email'];
                //     $fullname = $_POST['fullname'];
                //     $user = $_POST['user'];
                //     $pass = $_POST['pass'];
                //     $address = $_POST['address'];
                //     $tel = $_POST['tel'];
                //     insert_taikhoan($email,$fullname,$user,$pass,$address,$tel);    
                //     $thongbao="Đăng ký thành công. Vui lòng <a href='index.php?act=login'>đăng nhập</a>";
                // }
                // include 'app/views/signup.php';
                $acc = new AccountController();
                $acc -> registForm();
                break;
            case 'suatk':
                $acc = new AccountController();
                $acc-> EditForm();
                // if(isset($_GET['ma_tk'])&&($_GET['ma_tk'])){
                //     $sql = "SELECT * FROM tai_khoan WHERE ma_tk =".$_GET['ma_tk'];
                //     $dm = pdo_query_one($sql);
                // }
                // include "app/views/capnhat_tk.php";
                break;     
            case 'capnhat_tk':
                $acc = new AccountController();
                $acc-> editAcc();
                // if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                //     $ma_tk = $_POST['ma_tk'];
                //     $fullname = $_POST['fullname'];
                //     $user = $_POST['user']; 
                //     $pass = $_POST['pass'];
                //     $address = $_POST['address'];
                //     $tel = $_POST['tel'];
                //     update_taikhoan($ma_tk,$fullname,$user,$pass,$address,$tel); 
                // }
                // include 'app/views/capnhat_tk.php';
                break;
            case 'quenmk':
                include "app/views/quenmk.php";
                break;
            case 'thoat':
                unset($_SESSION['user']);
                unset($_SESSION['iduser']);
                unset($_SESSION['role']);
                header('location: index.php');
                break;
            case 'single-blog':
                include 'app/views/single-blog.php';
                break;
            case 'single-product':
                include 'app/views/single-product.php';
                break;
            case 'banner':
                include 'app/views/banner.php';
                break;
            default:
                echo "Đường dẫn ko chính xác";
                break;
        }
    // }
    // else{
    //     include 'app/views/Home.php';
    // }




    include 'app/views/Footer.php';
?>