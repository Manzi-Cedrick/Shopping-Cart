<?php 
$productname = $_POST['product_name'];
$productprice = $_POST['product_price'];
$file = $_FILES['product_image'];
include './connect.php';
$file_tmp_name = $file['tmp_name'];
$final_file = $file['name'];
move_uploaded_file($file_tmp_name,'Carts/'.$final_file);
$sql = "insert into cart_data(productname,productprice,productImage) VALUES ('$productname','$productprice','$final_file')";
$insert = mysqli_query($conn,$sql);
if($insert){
    echo "Successfully sent to the database";
    // header('location : cart.php');
    // echo "<script>window.location='/cart.php'</script>";
}
else{
    die(mysqli_error($conn));
}
?>