<?php
include "database.php";
?>

<?php

class brand {
    private $db;

    public function __construct()
    {
        $this ->db = new Database();
    }
    public function insert_brand($category_id, $brand_name)
    {
        $query ="INSERT INTO tbl_brand (category_id, brand_name) VALUES ('$category_id','$brand_name')";
        $result = $this ->db -> insert($query);
        header("Lacotien");
        header('location:brandlist.php');
        return $result;
    }
    public function show_category()
    {
        $query ="SELECT *FROM tbl_category ORDER BY category_id DESC";
        $result = $this ->db -> select($query);
        return $result;
    }

    public function show_brand()
    {
        // $query ="SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query ="SELECT tbl_brand*,tbl_category.category_name
                 FROM tbl_brand INNER JOIN tbl_category ON tbl_brand.category_id = tbl.category.category_id
                 ORDER BY tbl_brand.brand_id DESC";
        $result = $this ->db -> select($query);
        return $result;
    }

    public function get_category($category_id,){
        $query ="SELECT *FROM tbl_category WHERE category_id= '$category_id'";
        $result = $this ->db -> select($query);
        return $result;
    }
    public function update_category($category_id, $category_name){
        $query = "UPDATE tbl_category SET category_name = '$category_name' WHERE category_id= '$category_id' ";
        $result = $this ->db -> update($query);
        header('location:categorylist.php');
        return $result;
    }
    public function delete_category($category_id){
        $query = "DELETE FROM tbl_category WHERE category_id= '$category_id'";
        $result = $this ->db -> delete($query);
        header('location:categorylist.php');
        return $result;
    }
}
?>