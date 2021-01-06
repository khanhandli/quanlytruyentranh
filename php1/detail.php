<!DOCTYPE html>

<html>
    <head>
        <title>Chi tiết sản phẩm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css" >
        <style>
            a {
                text-decoration: none;
                color: orange;
            }
            h2 {
                font-size: 1.35em;
            }
        </style>
    </head>
    <body style="overflow:hidden;">
        <?php
        include './connect_db.php';
        $result = mysqli_query($con, "SELECT * FROM `GioHang` WHERE `SoChuong` = ".$_GET['SoChuong']);
        $product = mysqli_fetch_assoc($result);
        // $imgLibrary = mysqli_query($con, "SELECT * FROM `img` WHERE `SoChuong` = ".$_GET['SoChuong']);
        ?>
        <div class="container">
                    <a href="TN.php"><-Quay lại</a>

            <h2>Chi tiết sản phẩm</h2>

            <div id="product-detail">
                <div id="product-img">
                    <img src="../php/photo/<?=$product['Anh']?>" />
                </div>
                <div id="product-info">
                    <h1><?=$product['TenTruyen']?></h1>
                    <h5>Số chương: <?=$product['SoChuong']?></h5>
                    <label>Giá: </label><span class="product-price"><?= number_format($product['Gia'], 0, ",", ".") ?> VND</span><br/>
                    <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                        <input type="text" value="1" name="quantity[<?=$product['id']?>]" size="2" /><br/>
                        <input type="submit" value="Thêm vào giỏ hàng" />
                    </form>
                    <div id="notify-msg">
                </div>
                    
                </div>
                <div class="clear-both"></div>
            </div>
        </div>
        <script>
function goBack() {
  window.history.back();
}
</script>
    </body>
</html>