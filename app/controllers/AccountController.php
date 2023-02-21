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
                        $_SESSION['id'] = $account->id;
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
            } else {
                $model = [];
                $this -> render('account.signup', compact('model'));
            }
        }

        public function load_acc_admin() {
            $acc = Accounts::all();
            $this -> renderAdmin('accounts.accounts',['accounts'=>$acc]);
        }

        public function editAccForm(){
            $user = $_GET['user'];
            $user = isset($_GET['user']) ?  $_GET['user'] : null;

            $acc = Accounts::where('user', $user)->first();

            $this -> render('account.edit', compact('acc'));
        }

        public function editAccSave() {
            $user = $_GET['user'];
            $user = isset($_GET['user']) ?  $_GET['user']:null;
            
            $model = Accounts::where('user', $user)->first();
            $requestDB = $_POST;    
            $model->fill($requestDB);

            $model->save();
            $_SESSION['user'] = $model->user;
            header('location: index.php?url=updateuser&user='.$model->user.'');
        }

        public function addAdminForm() {
            if(isset($_POST['add-admin'])) {
                $requestData = $_POST;
                $model = new Accounts();
                $model -> fill($requestData);
                $thongbao = "Thêm tài khoản thành công.";
                $model -> save();
                $this -> renderAdmin('accounts.add', compact('model', 'thongbao'));
            } else {
                $model = [];
                $this -> renderAdmin('accounts.add', compact('model'));
            }
        }

        public function editAccAdminForm(){
            $id = $_GET['id'];
            $id = isset($_GET['id']) ?  $_GET['id'] : null;

            $acc = Accounts::where('id', $id)->first();

            $this -> renderAdmin('accounts.edit', compact('acc'));
        }

        public function editAccAdminSave() {
            $id = $_GET['id'];
            $id = isset($_GET['id']) ?  $_GET['id']:null;
            
            $model = Accounts::where('id', $id)->first();
            $requestDB = $_POST;    
            $model->fill($requestDB);

            $model->save();
            header('location: index.php?act=updateuser&id='.$model->id.'');
        }

        public function deleteAccAdmin(){
            $removeId = isset($_GET['id'])? $_GET['id']:"";

            $model = Accounts::find($removeId);
            Accounts::destroy($removeId);
            
            header('location: ./index.php?act=dskh');
        }

        
    }
?>