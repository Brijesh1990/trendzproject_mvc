  <div class="clearfix"></div>
  <div class="clearfix"></div>
  <br><br><br><br>
    <!-- Trendz Shoes content start here -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <br><br>
            <div class="col-md-12 col-xs-12">

            <div class="col-md-4 col-xs-12">
                <div class="jumbotron">
                <h4 align="center"><a class="dropdown-header btn btn-lg btn-danger"  href="#" style="height: auto; font-size: 17px; color:white">

Welcome :<?php echo ucfirst($_SESSION["fname"]);?></a></h4>
                <hr>



                 
                <ul class="sidebar-link-menu"  style="width:auto;">
                                

                <li><a href="<?php echo $mainurl;?>ManageProfile">Manage Profile <span class="fa fa-user"></span></a></li>

<li><a href="<?php echo $mainurl;?>ManageNotification">Manage Notifications <span class="fa fa-bell"><span class="badge badge-lg">0</span></span></a></li>
<li><a href="<?php echo $mainurl;?>ChangePassword">Change Password <span class="fa fa-lock"></span></a></li>
<li><a href="<?php echo $mainurl;?>ManageProfile?delprof=<?php echo base64_encode($shwprof[0]['custid']);?>" onclick="return confirm('Are You sure to Delete Data')">Delete Account <span class="fa fa-trash"></span></a></li>

        
        
       <li> <a href="#"  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#lg" data-dismiss="modal" style="color:white">Logout Here <span class="fa fa-power-off"></span></a></li>

</ul>




                </div>
            </div>

            <div class="col-md-8 col-xs-12">
                <div class="jumbotron" style="height: 760px;">
             



    <h2 align="center" style="background-color: red; color: white; padding: 5px; width: 70%; margin-left: 15%; border-radius:20px">Update Your Account</h2>
    
    <div class="col-md-12 col-xs-12">
        <form method="POST" enctype="multipart/form-data">
        <div class="form-group col-md-12 col-xs-12">
                <img src="<?php echo $shwprof[0]["photo"];?>" style="width: 100%; height: 200px;">
                <input type="file" name="img" placeholder="Photo *" required class="form-control">
            </div>

            <div class="form-group col-md-6 col-xs-12">
                <input type="text" name="fname" value="<?php echo $shwprof[0]["firstname"];?>" placeholder="Firstname *" required class="form-control">
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <input type="text" name="lname" value="<?php echo $shwprof[0]["lastname"];?>" placeholder="Firstname *" required class="form-control">
            </div>

            <div class="form-group col-md-12 col-xs-12">
                <input type="text" name="em" placeholder="Email *" value="<?php echo $shwprof[0]["email"];?>" required class="form-control">
            </div>
          

            <div class="form-group col-md-12 col-xs-12">
                <input type="text" name="mob" value="<?php echo $shwprof[0]["mobile"];?>" placeholder="Mobile *" required class="form-control">
            </div>


            <div class="form-group col-md-12 col-xs-12">
                <textarea name="address" placeholder="Address *" required class="form-control"> <?php echo $shwprof[0]["address"];?> </textarea>
            </div>



            <div class="form-group col-md-12 col-xs-12">
                <select name="state" placeholder="State *" required class="form-control">

                    <option value="">--Select State--</option>

                    <?php
                    foreach($st as $st1)
                    {    
                        if($st1["sid"]==$shwprof[0]["sid"])
                        {


                    ?>
                    <option value="<?php echo $shwprof[0]["sid"];?>" selected='selected'><?php echo $shwprof[0]["sname"];?></option>
                   
                   
                   <?php
                    }

                    else
                    {
                    ?>
                     <option value="<?php echo $st1["sid"];?>"><?php echo $st1["sname"];?></option>
                   
                     <?php
                    }
                }
                ?>
                </select>
            </div>




            <div class="form-group col-md-12 col-xs-12">
                <select name="city" placeholder="City *" required class="form-control">

                    <option value="">--Select City--</option>
                   
                    <?php
                    foreach($ct as $ct1)
                    {
                        if($ct1["ctid"]==$shwprof[0]["ctid"])
                        {


                    ?>
                    <option value="<?php echo $shwprof[0]["ctid"];?>" selected='selected'><?php echo $shwprof[0]["ctname"];?></option>
                   
                   
                   <?php
                    }

                    else
                    {
                    ?>
                     <option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>
                   
                     <?php
                    }
                }
                ?> 
                </select>
            </div>



            <div class="form-group col-md-12 col-xs-12">

                <input type="submit" name="upd" value="Update" class="btn btn-lg btn-danger">
               
            </div>


        </form>
    </div>
</div>
              





                </div>
            </div>

                  

                    </div>
                </div>
            </div>
        </div>
        
   


    <!-- best of addidas closed here -->


