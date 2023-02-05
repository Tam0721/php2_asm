<?php
    namespace App\Models;

    class Blogs extends BaseModels {
        var $table = "tin_tuc tt";
    }

    // function insert_tintuc($name,$hinh,$mota,$ngaydang){
    //     // $sql = "INSERT INTO hang_hoa (name,price,img,mo_ta,iddm) VALUES ('$tensp','$giasp','$hinh','$mota','$iddm')";
    //     $sql = "INSERT INTO tin_tuc (name, img, mota,ngaydang)
    //     VALUES ('$name', '$hinh', '$mota','$ngaydang')";
    //     pdo_execute($sql);
    // }
    // function delete_tintuc($id){
    //     $sql = "DELETE FROM tin_tuc WHERE id=".$id;
    //     pdo_execute($sql);
    // }
    // function loadone_tintuc($id){
    //     $sql = "SELECT * from tin_tuc WHERE id=".$id;
    //     $tintuc = pdo_query($sql);
    //     return $tintuc;
    // }

?>