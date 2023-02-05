<?php
    namespace App\Models;
    use PDO;

    class BaseModels {
        public $conn;

        public 

        function __construct() {
            $this -> conn = new PDO("mysql:host=localhost;dbname=php2_asm;charset=utf8", "root", "");
        }

        public static function all() {
            $model = new static;
            $sql = "SELECT * FROM " . $model -> table;
            $stmt = $model -> conn -> prepare($sql);
            $stmt -> execute();
            return $stmt -> fetchAll();
        }

    }
?>