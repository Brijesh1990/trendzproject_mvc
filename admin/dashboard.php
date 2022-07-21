<?php
if(!isset($_SESSION["aid"]))
{
   echo "<script>
   window.location='./';
   </script>";
}


?>
<section id="container">
   
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
            <div class="market-updates">
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-2">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-eye"> </i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Visitors</h4>
                            <h3><span class="badge badge-info">0</span></h3>
                          
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-1">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Users</h4>
                            <h3><span class="badge badge-danger"><?php echo $totalcust[0]["total"];?></span></h3>
                            <p>Manage Customer</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-3">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-usd"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                           <a href="<?php echo $mainurl;?>ManageProduct"> <h4>Total Products</h4>
                            <h3><span class="badge badge-danger"><?php echo $totalprod[0]["total"];?></span></h3>
                            <p>Manage Products</p></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-3 market-update-gd">
                    <div class="market-update-block clr-block-4">
                        <div class="col-md-4 market-update-right">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-8 market-update-left">
                            <h4>Total Orders</h4>
                            <h3><span class="badge badge-danger">0</span></h3>
                            <p>Manage Orders</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="clearfix"> </div>
                <div class="clearfix"> </div>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>


            <!-- tasks -->

            <!-- //tasks -->

        </section>
        <!-- footer -->

        <!-- / footer -->
    </section>
    <!--main content end-->
</section>



