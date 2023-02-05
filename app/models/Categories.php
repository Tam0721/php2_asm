<?php 
    namespace App\Models;
    
    class Categories extends BaseModels {
        var $table = "loai";

        

        // public static function special() {
        //     $model = new static;
        //     $sql = "SELECT * FROM " . $model -> table . " WHERE special = 1";
        //     $stmt = $model -> conn -> prepare($sql);
        //     $stmt -> execute();
        //     return $stmt -> fetchAll();
        // }
    }

    // function loadall_danhmuc(){
    //     // $sql = "SELECT * from hang_hoa WHERE 1";
    //     // if ($kyw!="") {
    //     //     $sql.=" and name like '%".$kyw."%'";
    //     // }
    //     // if ($iddm>0) {
    //     //     $sql.=" and iddm ='".$iddm."'";
    //     // }
    //     $sql = "SELECT * from loai order by ten_loai desc";
    //     $listdanhmuc = pdo_query($sql);
    //     return $listdanhmuc;
    // }

?>