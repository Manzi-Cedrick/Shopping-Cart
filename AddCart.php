<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./addcart.css">
</head>
<body>
    <?php include './header.php'; ?>
    <div class="container">
        <form action="./sendcart.php" method="post" enctype="multipart/form-data">
            <label>Product Name</label><input type="text" placeholder="Product Name" name="product_name" required>
            <label>Product Price</label><input type="number" placeholder="Price" name="product_price" required>
            <label>Product Image</label><input type="file" placeholder="New File" name="product_image" required>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>
</body>
</html>