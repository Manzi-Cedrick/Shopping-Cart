<?php
require_once( './component.php');
require_once('./connect.php');
session_start();
if(isset($_POST['adding'])){
    $pri=$_POST['product_id'];
if(isset($_SESSION['cart'])){
    $item_array_id = array_column($_SESSION['cart'],$pri);
    if(in_array($pri,$item_array_id)){
        echo '<script>alert("The Item is already in cart")</script>';
    }else{
        $count = count($_SESSION['cart']);
        $item_array= array('item_id'=>$pri);
        $_SESSION['cart'][$count]=$item_array;
    }
}else{
    $item_array= array('item_id'=>$pri);
    $_SESSION['cart'][0]=$item_array;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="./tailwind.css">
    <script src="https://kit.fontawesome.com/954941076f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="./carts.css">
</head>
<body>
    <?php require_once('./header.php');?>
    <div class="container1">
        <div class="rowhandler">
        <?php 
        $sql = "SELECT * FROM cart_data";
        $result = mysqli_query($conn,$sql);
        if ( mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $productname = $row['productname'];
                $product_price = $row['productprice'];
                $product_imgs = 'Carts/'.$row['productImage'];
                $product_id = $row['id'];
                components($productname,$product_price,$product_imgs,$product_id);
            }
        }
        ?>;
        </div>
    </div>
</body>
</html>
