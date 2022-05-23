<header class="h-16 w-full bg-slate-800 relative">
    <nav class="nav pt-3 px-5">
        <a href="./cart.php">
            <h3  class="text-2xl text-white font-bold px-20">
                <i class="fa fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
    </nav>
    <div class="absolute flex justify-around right-10 top-3">
        <button class="bg-slate-600 h-10 w-10 rounded-xl"><a href="./cartedit.php"><i class="fa fa-shopping-cart text-xl font-bold text-white"></i></a></button>&nbsp;
        <div class="bg-slate-600 mt-2 w-12 h-8 rounded-full  text-center ">
        <?php 
        if(isset($_SESSION['cart'])){
            $count = count($_SESSION['cart']);
            echo "<span class='text-yellow-400 text-xl'>$count</span>";
        }else{
            echo "<span class=' text-white text-2xl pt-10'>0</span>";
        }
       ?>
       </div>
    </div>
</header>