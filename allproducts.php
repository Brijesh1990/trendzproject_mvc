
    <!-- Trendz Shoes content start here -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- advertisement start here -->
                
                <div id="advertisement" style="margin-top:9%">

                    <a href="#"> <img src="<?php echo $baseurl;?>images/content.jpg" style="width: 100%; height:200px;"></a>
                </div>
                <!-- advertisement closed here -->


                <!-- hdfc offers start here -->
                <div id="hdfc_offers">
                    <a href="#"> <img src="<?php echo $baseurl;?>images/hdfc_offer.gif"></a>
                </div>
                <!-- hdfc offers closed here -->



                <!-- populars now  start here -->
                <div class="jumbotron" id="popular">
                    <h1 align="center">Popular right now</h1>
                    <div class="col-md-12 col-xs-12">

                        <div class="col-md-2 col-xs-12">
                            <div class="well well-lg" id="box">
                                <center>
                                    <b style="color: white; padding: 10px;">Face Cover <span class="fa fa-arrow-right"></span></b>
                                </center>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="well well-lg" id="box">
                                <center>
                                    <b style="color: white; padding: 10px;">Football Boots <span class="fa fa-arrow-right"></span></b>
                                </center>
                            </div>
                        </div>

                        <div class="col-md-2 col-xs-12">
                            <div class="well well-lg" id="box">
                                <center>
                                    <b style="color: white; padding: 10px;">Ultraboost shoes <span class="fa fa-arrow-right"></span></b>
                                </center>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="well well-lg" id="box">
                                <center>
                                    <b style="color: white; padding: 10px;">Supestars <span class="fa fa-arrow-right"></span></b>
                                </center>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="well well-lg" id="box">
                                <center>
                                    <b style="color: white; padding: 10px;">stan smith <span class="fa fa-arrow-right"></span></b>
                                </center>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <div class="well well-lg" id="box">
                                <center>
                                    <b style="color: white; padding: 10px;">Track pants <span class="fa fa-arrow-right"></span></b>
                                </center>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- populars now  closed here -->


                <!-- All products  here -->

                <div id="new_arrivals">
                    <div class="col-md-12 col-xs-12">

                    <div class="col-md-4 col-xs-12">
                        <div class="jumbotron">
                        <h3 align="center">Popular right now</h3>
                        <hr style="border:solid 2px black">
              

                            <ul class="sidebar-link">
                                <?php
                                foreach($cat as $cat1)
                                {
                                ?>
                                <li><a href="#"><?php echo $cat1["catname"];?></a></li>
                                <hr style="border: solid 1px black;">

                                <?php
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                    
                    <div class="col-md-8 col-xs-12">

                    <?php
                    foreach($prod as $prod1)
                    {
                    ?>
                    
                    <div class="col-md-4 col-xs-12" id="box-newarrival">

                    <center>
                            <address>
                            <img src="admin/<?php echo $prod1["pimage"];?>">
                            <br><br> 
                                <b>H FOR ZX 7000 HEYTEA</b>
                                <p><a href="<?php echo $mainurl;?>ExploreAllProductsDetails?pid=<?php echo base64_encode($prod1["pid"]);?>" style="text-transform: uppercase;">For More Details >></a></p>
                             </address>
                            </center>
                            </div>

                            <?php
                            }
                            ?>
                        



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
