
    <!-- Trendz Shoes Navigations start here -->
    <nav class="navbar navbar-fixed-top">
        <div class="col-md-12 col-xs-12">

            <div class="col-md-1 col-xs-12">

                <div class="navbar-header">
                    <div id="logo">
                        <a href="<?php echo $mainurl;?>"><img src="<?php echo $baseurl;?>images/trendz-removebg-preview.png"></a>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-xs-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: white;">
                        <span class="icon-bar" style="color: black; background-color: black;"></span>
                        <span class="icon-bar" style="color: black; background-color: black;"></span>
                        <span class="icon-bar" style="color: black; background-color: black;"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul>
                            <?php
                             foreach($mcat as $mcat1)
                             {
                                 
                            ?>
                            
                            <li class="dropdown"><a class="dropdown-header" data-toggle="dropdown" href="#"><?php echo $mcat1["mcatname"];?><span class="caret"></span></a>

                            <?php
                             if($mcat1["mcatid"]==1)
                             {
                            ?>
                            <ul class="dropdown-menu" style="width: 800px;">
                                    <div class="col-md-12 col-xs-12">
                                    <div class="col-md-4 col-xs-12">
                                    <?php
                                    foreach($cat as $cat1)
                                    {

                                        if($cat1["mcatid"]==1)
                                        {
                                       
                                    ?>
                                            <li><a href="<?php $mainurl; ?>ExploreAllProducts?loadcatid=<?php echo $cat1["catid"] ?>" style="color: black;"><?php echo $cat1["catname"];?></a></li>
                                           
                                        <?php
                                    
                                }
                            }
                                    ?>
                                    
                                    </div>
                                        <div class="col-md-4 col-xs-12">

                                            <li><a href="" style="color: black;">50% Off Hurry Up</a>
                                                <hr style="border:solid 2px red">
                                            </li>
                                            <li><img src="<?php echo $baseurl;?>images/trendz.png" style="width: 100%;"> </li>

                                        </div>

                                    </div>
                                </ul>
                             
                           
                           
                            <?php
                             }
                             elseif($mcat1["mcatid"]==2)
                            {
                            
                             ?>

<ul class="dropdown-menu" style="width: 800px;">
                                    <div class="col-md-12 col-xs-12">

                                        <div class="col-md-4 col-xs-12">

                                        <?php
                                    foreach($cat as $cat1)
                                    {

                                        if($cat1["mcatid"]==2)
                                        {
                                       
                                    ?>
                                            <li><a href="<?php $mainurl; ?>ExploreAllProducts?loadcatid=<?php echo $cat1["catid"] ?>" style="color: black;"><?php echo $cat1["catname"];?></a></li>
                                           
                                        <?php
                                    
                                }
                            }
                                    ?>
                                     </div>
                                        <div class="col-md-4 col-xs-12">

                                            <li><a href="" style="color: black;">50% Off Hurry Up</a>
                                                <hr style="border:solid 2px red">
                                            </li>
                                            <li><img src="<?php echo $baseurl;?>images/trendz.png" style="width: 100%;"> </li>

                                        </div>

                                    </div>
                                </ul>
                           

                                <?php
                             }
                             elseif($mcat1["mcatid"]==3)
                            {
                            
                             ?>

<ul class="dropdown-menu" style="width: 800px;">
                                    <div class="col-md-12 col-xs-12">

                                        <div class="col-md-4 col-xs-12">

                                        <?php
                                    foreach($cat as $cat1)
                                    {

                                        if($cat1["mcatid"]==3)
                                        {
                                       
                                    ?>
                                            <li><a href="<?php $mainurl; ?>ExploreAllProducts?loadcatid=<?php echo $cat1["catid"] ?>" style="color: black;"><?php echo $cat1["catname"];?></a>
                                        
                                        </li>
                                         
                                        <?php
                                    
                                }
                            }
                                    ?>
                                      </div>
                                        <div class="col-md-4 col-xs-12">

                                            <li><a href="" style="color: black;">50% Off Hurry Up</a>
                                                <hr style="border:solid 2px red">
                                            </li>
                                            <li><img src="<?php echo $baseurl;?>images/trendz.png" style="width: 100%;"> </li>

                                        </div>

                                    </div>
                                </ul>
                            <?php
                            }
                        }
                        ?>

 </li>
                           
                            
                            <li><a href="#">NewArrivals</a></li>
                            <li><a href="#">Drops</a></li>
                            <li><a href="#">Stores</a></li>
                            <li><a href="#"><button type="button" class="btn btn-danger btn-lg">Outlet</button></a></li>

                            <li>
                                <div class="form-group">
                                    <form method="POST">
                                        <input type="text" name="search" placeholder="Search" class="" style="width: 100%; height: 30px; border-bottom:solid  red 1px;">
                                    </form>
                                </div>
                            </li>
                            <?php
                            if(!isset($_SESSION["custid"]))
                            {
                            ?>
                            <li>
                                <a href="<?php echo $mainurl;?>ViewCart"><span class="fa fa-shopping-cart" style="font-size: 30px;"> <span class="badge badge-lg" style="background-color: red; color: white; font-size: 17px;">0</span> </span></a>
                            </li>
                            <?php
                            }
                            else
                            {
                                ?>

                            <li>
                                <a href="<?php echo $mainurl;?>ViewCart"><span class="fa fa-shopping-cart" style="font-size: 30px;"> <span class="badge badge-lg" style="background-color: red; color: white; font-size: 17px;"><?php echo $crtcount[0]["total"];?></span> </span></a>
                            </li>

<?php
}
?>
                        </ul>
                    </div>
                </div>
            </div>

    </nav>


    <!-- Trendz Shoes Navigations Closed here -->
