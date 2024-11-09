<?php
include("header.php");
include("slider.php");
include("class/product_class.php");
?>

<div class="admin-content-right">
    <div class="admin-content-right-product-add">
        <h1>Thêm Sản Phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
            <input type="text">
            <label for="">Chọn danh mục <span style="color: red;">*</span></label>
            <select name="" id="">
                <option value="">--Chọn--</option>
            </select>
            <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
            <select name="" id="">
                <option value="">--Chọn--</option>
            </select>
            <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
            <input type="text">
            <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
            <input type="text">
            <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
            <textarea name="" id=""></textarea>
            <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
            <input type="file">
            <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
            <input multiple type="file">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>
</section>
</body>

</html>