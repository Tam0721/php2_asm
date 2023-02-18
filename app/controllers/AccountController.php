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

        public function loginUser() {
            $this -> getUser($this->user, $this->pass);
        }

        public function getUser() {
            $user = Accounts::where('user', $user)->first();

        }

        public function loginProcess() {
            // if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                // $user = $_POST['user'];
                // $pass = $_POST['pass'];
                // $account = Accounts::where('user', $user)->first();
                // $checkpwd = $pass == $account->password ? true : false;
                // if ($checkpwd == false) {
                //     header('location: index.php?url=login');
                //     exit();
                // } else if ($checkpwd == true) {
                //     $_SESSION['user'] = $account->user;
                // }
                // $role = $account->role;
                // if ($role == 1) {
                //     // $_SESSION['role'] = $role;
                //     header('location: ./admin/index.php'); //note
                // } elseif ($role == 2) { 
                //     // $_SESSION['role'] = $role;
                //     header('location: ./admin/index.php'); 
                // } elseif ($role == 0) {
                //     // $_SESSION['role'] = $role;
                //     $_SESSION['iduser'] = $account->id;
                //     $_SESSION['user']= $account->user;
                //     header('location: ./'); //note
                //     // break;
                // }
            // }
            // if (isset($_POST['dangnhap'])){
            //     $user = $_POST['user'];
            //     $pass = $_POST['pass'];
            //     $account = Accounts::where('user', $user)->first();
            //     $this -> render('account.login', compact('account'));
            // }
            // $this -> render('account.login', compact('account'));
        }
    }
?>