<?php
    /**
     *
     */
    class Products
    {
        var $id;
        var $name;
        var $image;
        var $newprice;
        var $oldprice;
        var $brand;
        var $category;
        var $isshow;
        function __construct($id,$name,$image,$newprice,$oldprice,$brand,$category,$isshow)
        {
            $this->id = $id;
            $this->name = $name;
            $this->image = $image;
            $this->newprice = $newprice;
            $this->oldprice = $oldprice;
            $this->brand = $brand;
            $this->$category = $category;
            $this->isshow = $isshow;
        }
        public static function getAllProducts(){
            require 'connect.php';
            $query = "SELECT * FROM products WHERE isshow = 1";
            $result = $connect->query($query);
            $rs = array();
            if ($result) {
                while ($rows = mysqli_fetch_array($result)) {
                    array_push($rs,new Products(
                        $rows["id"],
                        $rows["name"],
                        $rows["image"],
                        $rows["newprice"],
                        $rows["oldprice"],
                        $rows["brand"],
                        $rows["category"],
                        $rows["isshow"]
                    ));
                }
            }
            $connect->close();
            return $rs;
        }
        public static function getRatingById($id){
            require 'connect.php';
            $query = "SELECT id_product,ROUND(AVG(rating),1) AS countRating FROM products_rating GROUP BY id_product";
            $result = $connect->query($query);
            if (mysqli_num_rows($result)>0) {
                while ($rows = mysqli_fetch_array($result)) {
                    if ($id == $rows["id_product"]) {
                        return $rows["countRating"];
                    }
                }
            }
        }
    }

?>
