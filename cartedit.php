<?php 
session_start();
require_once('./component.php');
require_once('./connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styles</title>
    <link rel="stylesheet" href="./tailwind.css">
    <script src="https://kit.fontawesome.com/954941076f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <?php require_once('./header.php'); ?>
    <div class=" ml-5 mt-4 mb-4 w-2/4 h-12 text-black border-2 text-center border-solid border-b-slate-900">
        <span class='text-2xl font-bold '>My Cart</span>
    </div>
    <!-- <div class='flex justify-around'>
        <div class='block'> -->
    <?php 
        if(isset($_SESSION['cart'])){
            $sql = "SELECT * FROM cart_data";
            $result = mysqli_query($conn,$sql);
            if(!$result){echo "Error";}
            // print_r($product_id);
            while ($row = mysqli_fetch_array($result)){
                // foreach($product_id as $id){
                    // if($row['id']==$id){
                $product_ids=$row['id'];
                $total=0;
                $productname = $row['productname'];
                $product_id=array_column($_SESSION['cart'],$product_ids);
                $product_price = $row['productprice'];
                $total =+ (int)$product_price;
                $product_imgs = 'Carts/'.$row['productImage'];
                cartElement($productname,$product_price,$product_imgs,$product_ids);
                // }else{
                    // echo "Error: Product";
                // }
            // }
        }die(mysqli_error($conn));
        }else{
            echo "<span>Cart is Empty</span>";
        }
    ?>
    <!-- </div>
    <div class="block h-24 w-44 bg-slate-800">
        <h2 class="text-black">Price Details</h2>
            <div class='flex'>
                <?php
                 /*
                if(!empty($_SESSION['cart'])){
                    $count = count($_SESSION['cart']);
                    echo "<span class='font-bold text-black'>$count</span>";
                }else{
                    echo "<span class='font-bold text-black'>0</span>";
                }*/ ?>
            </div>
            <div>
                <h2>Amount Delivered</h2>
                <div class='flex'>
                    <h2>Payable Amount</h2>
                    <h2><?php /* echo $total */?></h2>
                </div>
            </div>
    </div> -->
    <!-- </div> -->
</body>
</html>