<?php
    namespace App\Controllers;
    use App\Models\Accounts;
    use App\Controllers\BaseController;

    class AccountController extends BaseController {
        public function loginForm() {
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $account = Accounts::where('user', $user)->first();
                $role = $account->role;
                $_SESSION['role'] = $role;
                $checkpwd = $pass == $account->pass ? true : false;
                if ($checkpwd == false) {
                    header('location: index.php?url=login');
                    exit();
                } else if ($checkpwd == true) {
                    $_SESSION['user'] = $account->user;
                    if ($role == 1) {
                        // $_SESSION['role'] = $role;
                        header('location: admin/index.php'); //note
                    } elseif ($role == 2) { 
                        // $_SESSION['role'] = $role;
                        header('location: admin/index.php'); 
                    } elseif ($role == 0) {
                        // $_SESSION['role'] = $role;
                        $_SESSION['iduser'] = $account->id;
                        $_SESSION['user']= $account->user;
                        header('location: ./'); //note
                        // break;
                    }
                }
                $this -> render('account.login', compact('account'));
            } else {
                $account = [];
                $this -> render('account.login', compact('account'));
            }
        }

        public function registForm() {
            if(isset($_POST['dangky'])) {
                $requestData = $_POST;
                $model = new Accounts();
                $model -> fill($requestData);
                $thongbao = "Đăng ký thành công. Vui lòng <a href='index.php?url=login'>đăng nhập</a>";
                $model -> save();
                $this -> render('account.signup', compact('model', 'thongbao'));
                // header('Location: ./');
                // $email = $_POST['email'];
                // $fullname = $_POST['fullname'];
                // $user = $_POST['user'];
                // $pass = $_POST['pass'];
                // $address = $_POST['address'];
                // $tel = $_POST['tel'];
                // insert_taikhoan($email,$fullname,$user,$pass,$address,$tel);    
                // $thongbao="Đăng ký thành công. Vui lòng <a href='index.php?act=login'>đăng nhập</a>";
            } else {
                $model = [];
                $this -> render('account.signup', compact('model'));
            }
        }

        public function load_acc_admin() {
            $acc = Accounts::all();
            $this -> renderAdmin('accounts.accounts',['accounts'=>$acc]);
        }

        public function editAccform(){
            $id = isset($_GET['id']) ?  $_GET['id']:null;
            $model = Accounts::find($id);
            $this->renderAdmin('accounts.form-acc',['acc'=>$model]);
            
        }
        public function editAccSave(){
            $id = $_GET['id'];
            $id = isset($_GET['id']) ?  $_GET['id']:null;
            
            $model = Accounts::find($id);
            $requestData = $_POST;
            $model->fill($requestData);
            $model->save();
            header('location: ./index.php?act=dskh');
        }

        public function EditForm(){

            if(isset($_POST['capnhat'])) {
                $id = $_POST['id'];
                $user = $_POST['user'];
                $_SESSION['user'] = $user;
                $requestData = $_POST;
                $model = new Accounts();
                $model -> fill($requestData);
                $model -> save();
                $this->render('account.edit-form-acc',compact('user','model'));

            }
            
        }

        public function deleteAccAdmin(){
            $removeId = isset($_GET['id'])? $_GET['id']:"";

            $model = Accounts::find($removeId);
            Accounts::destroy($removeId);
            
            header('location: ./index.php?act=dskh');
        }

        
    }
?>