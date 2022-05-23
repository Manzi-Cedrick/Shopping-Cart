<?php 

function components($productname,$product_price,$product_imgs,$product_id){
    $element = '
    <form method="post"> 
    <div class="row mt-12 h-96 w-80 bg-slate-200 rounded-xl drop-shadow-2xl">
            <div class="row_image h-48 m-auto">
                <img class="w-96 h-full rounded-xl" src='.$product_imgs.' alt="images">
            </div>
            <div class="row_data p-5">
                <span class="text-2xl font-bold text-center">'.$productname.'</span>
                    <div class="flex text-yellow-400 pt-2 text-left w-44 justify-evenly ">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                <div class="block mp-10 text-center">
                    <span class="text-2xl font-bold ">'.$product_price.'$</span>
                    <input type="submit" value="Add to Cart" name="adding" class="mt-4 bg-yellow-500 pointer font-bold text-white h-12 w-44 block absolute left-16"/>
                    <input type="hidden" name="product_id" value='.$product_id.'/>
                </div>
                </div>
                </div>
                </form>
                ';
                
    echo "$element";
}
function cartElement($productname,$product_price,$product_imgs,$product_ids)
{
    $element='<form action="./cart.php" method="GET" >
    <div class="row mb-18 ml-5 flex h-44 w-2/4 bg-slate-200 rounded-xl drop-shadow-2xl">
    <div class="row_image h-full m-auto">
    <img class="w-96 h-full rounded-xl" src='.$product_imgs.' alt="images">
    </div>
    <div class="block">
    <div class="row_data px-5 pt-2">
    <span class="text-2xl font-bold text-center">'.$productname.'</span>
    <div class="flex text-yellow-400 pt-2 text-left w-44 justify-evenly ">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <div class="block mp-10 text-center ">
    <span class="text-2xl font-bold text-slate-500">'.$product_price.'</span>
    <div class="flex justify-between">
                        <button class="mt-2 bg-yellow-500 pointer font-bold text-white h-12 w-44 block  "> <a href="cartedit.php?id='.$product_ids.'">Save For Later</a></button>&nbsp;
                        <button class="mt-2 bg-red-500 pointer font-bold text-white h-12 w-32 block  "> <a href="cartedit.php?id='.$product_ids.'">Remove</a></button>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mt-12 mr-4 flex justify-space px-10">
                        <button class="text-black h-6 w-6 text-sm rounded-full"><i class="fa fa-minus"></i></button>
                        <input type="text" class="h-6  w-6 text-center flex justify-center font-bold" value="1">
                        <button class="text-black h-6 w-6 text-sm rounded-full"><i class="fa fa-plus"></i></button>
                </div>
    </div>
    </form>';
    echo $element;
}
// const element = $_POST['product_id'];
?>