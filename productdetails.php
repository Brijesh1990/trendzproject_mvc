<script type="text/javascript">
function subtotal()
{
   
   var p=document.getElementById("price").value;
   var q=document.getElementById("qty").value;
   var t=p*q;
   var d=document.getElementById("discount").value;
   var disccount=t*d/100;
   var finaltotal=t-disccount;
   document.getElementById("subtot").innerHTML=finaltotal;

//    document.getElementById("subtot").value;


//    document.write(finaltotal);



}


function login()
{

    alert('Want to add Product in Cart Login First ?')
    window.location='./';
}

</script>

    <!-- Trendz Shoes content start here -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- advertisement start here -->
                
              

                <!-- hdfc offers start here -->
                <div id="hdfc_offers">
                    <a href="#"> <img src="<?php echo $baseurl;?>images/hdfc_offer.gif"></a>
                </div>
                <!-- hdfc offers closed here -->

                <!--  products details goes   here -->
                <div id="new_arrivals">

                <div class="col-md-12 col-xs-12">

                <h2 style="color:gray">Product Details</h2>

                <form method="post">
                <hr style="border:solid 2px gray">
                    <?php
                    foreach($prod as $prod1)
                    {
                    ?>
                    
                    <div class="col-md-5 col-xs-12">

                    <img src="admin/<?php echo $prod1["pimage"];?>" class="thumbnail" style="width: 90%; height: 280px;">

                    </div>
                    
                    <div class="col-md-7 col-xs-12">
                            <address>
                            <input type="hidden" name="pid" value="<?php echo $prod1["pid"];?>" style="border:none" readonly>
                                <b style="font-size: 25px; letter-spacing: 2px;"><input type="text" name="pname" value="<?php echo $prod1["pname"];?>" style="border:none" readonly></b><br><br>
                                
                                
                                <b style="font-size: 16px; letter-spacing: 2px;">select Qty :<input type="number" name="qty" id="qty" value="<?php echo $prod1["qty"];?>" min="1" max="10" onchange="return subtotal(this.value)"></b><br><br>

                                
                                <b style="font-size: 16px; letter-spacing: 2px;"><del>Old Price <?php echo $prod1["oldprice"];?></del> Rs. <input type="text" name="price" id="price" value="<?php echo $prod1["offerprice"];?>" style="border: none; width:40px;" readonly> /- </b><br><br>
                                
                                <b style="font-size: 16px; letter-spacing: 2px;"> Discount <input type="text" name="discount" id="discount" value="<?php echo $prod1["discount"];?>" style="border: none; width:20px;" readonly><span class="fa fa-percent"></span> </b><br><br>
                                
                                <b>Descriptions :<?php echo $prod1["description"];?></b><br><br>

                                

                                <b style="font-size: 20px; letter-spacing: 2px; color:green">Subtotal Price Rs.<lable><input type="hidden" name="dprice"  value="<?php echo $prod1["discountedprice"];?>" readonly style="border: none; width: 65px;"><label id="subtot"><?php echo $prod1["discountedprice"];?></label>/-</b><br>

                                <a href="<?php echo $mainurl;?>ExploreAllProducts" style="text-transform: uppercase;" class="btn btn-lg btn-success">Continue Shopping <span class="fa fa-shopping-cart"></span></a>
                            
                               <?php
                               if(!isset($_SESSION["custid"]))
                               {
                                ?>

                                <button type="button" style="text-transform: uppercase;" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#log" data-dismiss="modal">AddToCart <span class="fa fa-shopping-bag"></span></button>

                                 <?php
                               }
                               else
                               {
                                   ?>      
                             
                            
                                <button type="submit" name="addtocart" style="text-transform: uppercase;" class="btn btn-lg btn-danger">AddToCart <span class="fa fa-shopping-bag"></span></button>
                           
                            
                             </address>
                            
                            </div>

                            <?php
                            }
                        }
                            ?>
                        


                </form> 


                    </div>   
                 </div>
            

                <div class="clearfix"></div>

                <!-- new arrvals closed here -->

                <!-- best of addidas -->

                <div id="best_deal">
                    <h2 align="center" style="text-transform: uppercase;">Best of Trendz</h2>
                    <div class="col-md-12 col-xs-12">

                        <div class="col-md-3 col-xs-12">
                            <center> <address>
                                <img src="<?php echo $baseurl;?>images/shoes.jpg" style="width: 80%; height: 200px;"><br><br>
                                <b>
                                    Men's adidas Originals Stan <br>Smith Human Made Shoes</b><br>
                                    <b><span class="fa fa-rupee"></span> 1299</b>
                            </address>
                            </center>


                        </div>

                        <div class="col-md-3 col-xs-12">
                            <center> <address>
                                <img src="<?php echo $baseurl;?>images/shoes1.jpg" style="width: 80%; height: 200px;"><br><br>
                                <b>
                                    Men's adidas Originals Stan <br>Smith Human Made Shoes</b><br>
                                    <b><span class="fa fa-rupee"></span> 1299</b>
                            </address>
                            </center>


                        </div>


                        <div class="col-md-3 col-xs-12">
                            <center> <address>
                                <img src="<?php echo $baseurl;?>images/shoes3.jpg" style="width: 80%; height: 200px;"><br><br>
                                <b>
                                    Men's adidas Originals Stan <br>Smith Human Made Shoes</b><br>
                                    <b><span class="fa fa-rupee"></span> 1299</b>
                            </address>
                            </center>


                        </div>



                        <div class="col-md-3 col-xs-12">
                            <center> <address>
                                <img src="<?php echo $baseurl;?>images/tshgirt.jpg" style="width: 80%; height: 200px;"><br><br>
                                <b>
                                    Men's adidas Originals Stan <br>Smith Human Made Shoes</b><br>
                                    <b><span class="fa fa-rupee"></span> 1299</b>
                            </address>
                            </center>


                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- best of addidas closed here -->




    <!-- newsletter start here -->

    <div class="newsletter">
        <div class="container-fluid">
            <div class="col-md-12 col-xs-12">

                <div class="col-md-6 col-xs-12">
                    <address style="color: white; padding: 0px;">

                    <h2>Sign up & get 15% off</h2>
                    <h3 >Follow Us <span class="fa fa-instagram" style="font-size: 45px;"></span></h3>
                    <p>Free shipping + Free 30-day returns | Cash on delivery available | Call us between 8AM to 8PM : 1-800-120-3300 | Email us : care@adidas.com</p>
                </address>
                </div>

                <div class="col-md-6 col-xs-12" style="margin-top:3%">
                    <form method="POST">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Email" style="height: 40px; width: 90%;" required>

                            <div class="input-group-btn">

                                <button class="btn btn-default" type="submit" style="height: 40px; width: 100%; margin-left:-115%;">
                                <i class="fa fa-arrow-circle-o-right" style="font-size:30px"></i>
                              </button>
                            </div>
                        </div>
                    </form>

                </div>


            </div>
        </div>

    </div>






    </div>
    </div>
    </div>

    <!-- Trendz Shoes content closed   here -->
