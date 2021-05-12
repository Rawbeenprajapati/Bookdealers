<?php

function component($productname,$productprice,$productimage,$quantity,$isbn,$writer,$edition,$stock,$totalprice,$productid){
  $element="  
  <div class=\"col-md-3 col-sm-6 my-3 my-md-0 c1\">
  <form action=\"actionbuy.php\" method=\"POST\" name=\"catalog\">
  <div class=\"card shadow\">
  <div class=\"image\">
  <img src=\"$productimage\" alt=\"image1\" class=\"img-fluidcard-img-top my-3\" >
  </div>
  <div class=\"card-body\">
  <h5 class=\"card-title\">$productname</h5>
  <h6>
  <i class=\"fas fa-star\"></i>
  <i class=\"fas fa-star\"></i>
  <i class=\"fas fa-star\"></i>
  <i class=\"fas fa-star\"></i>
  <i class=\"far fa-star\"></i>
  </h6>
  <p> &raquo; broad content at low price<br>&nbsp; and know to use the different programs and features.</p>
  <h5>
  <small><del>रू599</del></small>
  <span class=\"price\">रू$productprice</span>
  </h5>
  <button type=\"submit\" name=\"add\" class=\"btn btn-primary my-3\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
  <input type='hidden' name='bookname' value='$productname'>
  <input type='hidden' name='bookprice' value='$productprice'>
  <input type='hidden' name='bookimg' value='$productimage'>
  <input type='hidden' name='bookqty' value='$quantity'>
  <input type='hidden' name='bookisbn' value='$isbn'>
  <input type='hidden' name='bookwriter' value='$writer'>
  <input type='hidden' name='bookedition' value='$edition'>
  <input type='hidden' name='bookstock' value='$stock'>
  <input type='hidden' name='booktotal' value='$totalprice'>
  <input type='hidden' name='bookid' value='$productid'>
  </div>
  </div>
  </form>   
  </div> ";
  echo $element;
}


function cartElement($productimage,$productname,$productprice,$productid)
{ 

  $element="
  <form action=\"cart.php?action=remove&id=$productid\" method=\"POST\" class=\"cart-items\">
  <div class=\"border rounded\">
  <div class=\"row bg-white\">
  <div class=\"col-md-3 pl-0\">
  <img src=\"$productimage\" alt=\"img1\" class=\"img-fluid\">
  </div>
  <div class=\"col-md-6\">
  <h5 class=\"pt-2\">$productname</h5>
  <small class=\"text-secondary\">Seller:Sajha Book Thela</small>
  <h5 class=\"pt-2\">रू$productprice</h5>
  <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
  </div>
  <div class=\"col-md-3 py-5\">
  <div>
  <form method=\"post\">
  Quantity:
  <input type=\"text\" value=\"1\" name=\"quantity\" class=\"form-control w-25 d-inline\" id=\"quantity\">
  <input type=\"submit\"  name=\"add\" value=\"OK\"/>

  </form>

  </div>
  </div>
  </div>
  </div>
  </form>
  ";
  echo $element;

  echo "
  <script type=\"text/javascript\">
  function increment$productid()
  {

    var quantity=parseInt(document.getElementsById('quantity').innerHTML);
    quantity=quantity+1;
    document.getElementsById('quantity').innerHTML=quantity;
  }
  function decrement$productid()
  {

   var quantity=parseInt(document.getElementsById('quantity$productid').innerHTML);
   quantity=quantity-1;
   document.getElementsById('quantity$productid').innerHTML=quantity;
 }

 </script>
 ";  
}
?>