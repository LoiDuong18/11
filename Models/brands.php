<?php
    class Brands{
        var $id;
        var $name;
        var $image;
        function __construct($id,$name,$image){
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
        }
        public static function getAllBrands(){
            require 'connect.php';
            $query = "SELECT * FROM brands";
            $result = $connect->query($query);
            $rs = array();
            if ($result) {
                while ($rows = mysqli_fetch_array($result)) {
                    array_push($rs,new Brands(
                        $rows["id"],
                        $rows["name"],
                        $rows["image"]
                    ));
                }
            }
            $connect->close();
            return $rs;
        }
    }
?>
