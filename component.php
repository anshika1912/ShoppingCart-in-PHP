<?php

function component($productname,$product_price,$product_image,$productid)
{
    $element="
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
	<form action=\"index.php\" method=\"post\">
	<div class=\"card shadow\">
	<div>
	<img src=\"$product_image\" alt=\"image1\" class=\"img-fluid card-img-top\">
	</div>
	<div class=\"card-body\">
	<h5 class=\"class-title\">$productname</h5>
	<h6>
	<i class=\"fa fa-star\"></i>
    <i class=\"fa fa-star\"></i>
    <i class=\"fa fa-star\"></i>
    <i class=\"fa fa-star\"></i>
    <i class=\"far fa-star\"></i>
	</h6>
	<p class=\"card-text\">
		SOME QUICK EXAMPLE TEXT TO BUILD ON THE CARD
	</p>
	<h5>
		
		<span class=\"price\">Rs.$product_price.00</span>
	</h5>
	<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">ADD TO CART <i class=\"fa fa-shopping-cart\"></i></button>
	<input type='hidden' name='product_id' value='$productid'>
    
    </div>
	</div>
  	</form>
</div>
    
    ";
echo $element;
}
    function cartElement($product_image,$product_name,$product_price,$product_id){
        $element = "
        
        <form action=\"cart.php?action=remove&id=$product_id\" method=\"post\" class=\"cart-items\">
        <div class=\"border rounded\">
        <div class=\"row bg-white\">
            <div class=\"col-md-3\">
            <img src=$product_image alt=\"image1\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-6\">
            <h5 class=\"pt-2\">$product_name</h5>
            <small class=\"text-secondary\">Seller</small>
            <h5 class=\"pt-2\">Rs$product_price</h5>
            <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
            <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
            </div>
            <div class=\"col-md-3 py-5\">
            <div>
            <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-minus\"></i></button>
            <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
            <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fa fa-plus\"></i></button>
    
    </div>
    </div>
    </div>   
        </div>
    </form>
        
        ";
        echo  $element;
    }
    
