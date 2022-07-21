    <!-- Trendz Shoes viewcart start here -->
    <div class="content" style="margin-top: 10%;">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12 col-xs-12">

    
         <?php
          if(!isset($_SESSION["custid"]))
          {

         ?>


            <div class="col-md-10 col-xs-12 col-md-offset-1">

            <div class="card" style="box-shadow: 0px 0px 10px 2px gray; padding:15px">
            <div class="card-heading"><h2>My Cart</h2></div>
            <div class="card-body">
            
            <center>
            <img src="<?php echo $baseurl;?>images/emptycart.png" style="width: 30%;">
            <br>
            <h3>Misssing Cart Items</h3>
            <p>Login to see Items or add into cart  you added Previously</p>
            <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#log" data-dismiss="modal">Login</button>


            </center>            
            
            
            </div>
            </div> 
            </div>
            <?php
          }
          else
          {
              ?>

          

<div class="col-md-10 col-xs-12 col-md-offset-1">
<div class="card" style="box-shadow: 0px 0px 10px 2px gray; padding:15px">
<div class="card-heading"><h2>My Cart <span class="fa fa-shopping-cart" style="font-size: 30px;"> <span class="badge badge-lg" style="background-color: red; color: white; font-size: 17px;"> <?php echo $crtcount[0]["total"];?> </span> </span></h2></div>
<div class="card-body">


<table class="table table-responsive table-stripped table-hover">
<tr>
<th>#Id</th>
<th>Photo</th>
<th>ProductName</th>
<th>qty</th>
<th>Price</th>
<th>Discount</th>
<th>Subtotal</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
foreach($shwcart as $shwcart1)
{
?>
<tr>
<td><?php echo $shwcart1["cartid"];?></td>
<td><img src="admin/<?php echo $shwcart1["pimage"];?>" width="85px" height="85px"></td>
<td><?php echo $shwcart1["pname"];?></td>
<td><?php echo $shwcart1["quantity"];?></td>
<td><?php echo $shwcart1["price"];?></td>
<td><?php echo $shwcart1["discount"];?>%</td>
<td><?php echo $shwcart1["subtotal"];?></td>
<td><?php echo $shwcart1["status"];?></td>
<td><a href="<?php $mainurl;?>ViewCart?delcrt=<?php echo base64_encode($shwcart1["cartid"]);?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You sure to Delete Cart ?')">Delete <span class="fa fa-trash"></td>
</tr>

<?php
}
?>

<tr>
<td align="right" colspan="9"><h3><div class="well well-lg bg-danger" style="background-color: lightgray; color:green">Subtotal of Products :Rs.<?php echo round($sumtot[0]["total"],2);?></div></h3></td>

</tr>
<tr>
<td align="right" colspan="9">

<a href="<?php echo $mainurl;?>Checkout" onclick="return confirm('Are you sure to go For checkout ?')"><button type="button" class="btn btn-lg btn-danger pull-right" >Checkout Here</button></a>
</td>
</tr>

</table>




<?php
          }
          ?>



</div>
</div> 
</div>
            




</div>


    </div>
    </div>
    </div>


    <br><br>   

    <!-- Trendz Shoes viewcart closed   here -->
