<?php
    namespace App\Controllers;
    use App\Models\Accounts;
    use App\Controllers\BaseController;

    class AccountController extends BaseController {
        public function loginForm() {
            if (isset($_POST['dangnhap'])){
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

        public function load_acc_admin(){
            $accounts = Accounts::all();
            include "../admin/views/taikhoan.php";
        }
    }
?>