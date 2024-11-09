<?php
include("header.php");
include("slider.php");
include("class/product_class.php");
?>

<?php
    $product =new product;
    if($_SERVER ['REQUEST_METHOD']=== 'POST'){
        // var_dump($_POST,$_FILES);
        // echo '<pre>';
        // echo print_r($_FILES);
        // echo '</pre>';
        $insert_product = $product ->insert_product($_POST, $_FILES);    
    }
?>

<div class="admin-content-right">
    <div class="admin-content-right-product-add">
        <h1>Thêm Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
            <input name="product_name" required type="text">
            <label for="">Chọn danh mục <span style="color: red;">*</span></label>
            <select name="category_id" id="">
                <option value="#">--Chọn--</option>
                <?php
                    $show_category = $product -> show_category();
                    if ($show_category) {while($result=$show_category->fetch_assoc()){
                ?>
                <option value="<?php echo $result['category_id'] ?>"><?php echo $result['category_name'] ?></option>
                <?php
                    }}
                ?>
            </select>
            <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
            <select name="brand_id" id="">
                <option value="">--Chọn--</option>
                <?php
                    $show_brand = $product -> show_brand();
                    if ($show_brand) {while($result=$show_brand->fetch_assoc()){
                ?>
                <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                <?php
                    }}
                ?>
            </select>
            <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
            <input name="product_price" required type="text">
            <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
            <input name="product_price_new" required type="text">
            <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
            <textarea required name="product_desc" id="" cols="30" rows="10"></textarea>
            <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
            <input name="product_img" required type="file">
            <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
            <input name="product_img_desc" required multiple type="file">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>