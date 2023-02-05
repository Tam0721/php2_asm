<?php
    require_once __DIR__ . '/vendor/autoload.php';
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
    include 'app/controllers/Categories.php';
    include 'app/controllers/Products.php';
    include 'app/controllers/Blogs.php';
    use App\Controllers\Home;
    use App\Controllers\Product;
    use App\Controllers\Category;
    use App\Controllers\Blog;
        switch ($url) {
            case '/':
                $u = new Home();
                echo $u -> index();
                break;
            case 'category':
                $c = new Category();
                echo $c -> loadfilter_product();
                break;
            case 'category':
                $c = new Category();
                echo $c -> loadfilter_product();
                break;
            case 'blog':
                $b = new Blog();
                echo $b -> loadall_blog();
                break;
            case 'cart':
                include "view/cart.php";
                break;
            case 'cartprocess':
                include 'view/cartprocess.php';
                break;
            case 'cartupdate':
                include 'view/cartupdate.php';
                break;
            case 'delcart':
                if (isset($_GET['idsp'])&&($_GET['idsp']>=0)){
                    $ma_hh=$_GET['idsp'];
                    $size=$_GET['size'];
                    array_splice($_SESSION['giohang'],$ma_dh && $size,1);
                    delete_giohang($ma_hh,$size);
                }
                include 'view/delcart.php';
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
                include "view/category.php";
                break;
            // 
            case 'checkout':
                include 'view/checkout.php';
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
                include 'view/confirmation.php';
                break;
            case 'shippingbill':
                include "view/shippingbill.php";
                break;
            case 'listshippeddetail':
                if(isset($_GET['ma_dh'])&&($_GET['ma_dh']>0)){
                    $listchitietdh = loadone_chitietdh($_GET['ma_dh']);
                    $bill_mgg = loaddetailbill_mgg($_GET['ma_dh']);
                }
                include "view/shippeddetail.php";
                break;
            case 'listshippingdetail':
                if(isset($_GET['ma_dh'])&&($_GET['ma_dh']>0)){
                    $listchitietdh = loadone_chitietdh($_GET['ma_dh']);
                    $bill_mgg = loaddetailbill_mgg($_GET['ma_dh']);
                }
                include "view/shippingdetail.php";
                break;
            case 'contact':
                include 'view/contact.php';
                break;
            case 'historybill':
                include 'view/historybill.php';
                break;
            case 'sanphamct':
                $detail = new Product();
                echo $detail -> load_detail_product();
                break;
            case 'login':
                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $kq = getuserinfo($user,$pass);
                    $role = $kq[0]['role'];
                    if($role==1){
                        $_SESSION['role']=$role;
                        header('location: admin/index.php'); //note
                    }elseif ($role==2){ 
                        $_SESSION['role']=$role;
                        header('location: admin/index.php'); 
                    }elseif ($role==0){
                        $_SESSION['role']=$role;
                        $_SESSION['iduser']= $kq[0]['id'];
                        $_SESSION['user']= $kq[0]['user'];
                        header('location: index.php'); //note
                        break;
                    }
                }
                include 'view/login.php';
                break;
            case 'signup':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $fullname = $_POST['fullname'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    insert_taikhoan($email,$fullname,$user,$pass,$address,$tel);    
                    $thongbao="Đăng ký thành công. Vui lòng <a href='index.php?act=login'>đăng nhập</a>";
                }
                include 'view/signup.php';
                break;
            case 'suatk':
                if(isset($_GET['ma_tk'])&&($_GET['ma_tk'])){
                    $sql = "SELECT * FROM tai_khoan WHERE ma_tk =".$_GET['ma_tk'];
                    $dm = pdo_query_one($sql);
                }
                include "view/capnhat_tk.php";
                break;     
            case 'capnhat_tk':
                if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                    $ma_tk = $_POST['ma_tk'];
                    $fullname = $_POST['fullname'];
                    $user = $_POST['user']; 
                    $pass = $_POST['pass'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    update_taikhoan($ma_tk,$fullname,$user,$pass,$address,$tel); 
                }
                include 'view/capnhat_tk.php';
                break;
            case 'quenmk':
                include "view/quenmk.php";
                break;
            case 'thoat':
                unset($_SESSION['user']);
                unset($_SESSION['iduser']);
                unset($_SESSION['role']);
                header('location: index.php');
                break;
            case 'single-blog':
                include 'view/single-blog.php';
                break;
            case 'single-product':
                include 'view/single-product.php';
                break;
            case 'banner':
                include 'view/banner.php';
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