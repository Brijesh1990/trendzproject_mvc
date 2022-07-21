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
                <div class="jumbotron" style="height: 450px;">
             



    <h2 align="center" style="background-color: red; color: white; padding: 5px; width: 70%; margin-left: 15%; border-radius:20px">Change Your Password <span class="fa fa-lock"></h2>
    
    <div class="col-md-12 col-xs-12">
        <form method="POST" enctype="multipart/form-data">

<div class="form-group col-md-12 col-xs-12">
<input type="password" name="opass" placeholder="Enter Old password *" required class="form-control">
</div>


<div class="form-group col-md-12 col-xs-12">
<input type="password" name="npass" placeholder="Enter New password *" required class="form-control">
</div>


<div class="form-group col-md-12 col-xs-12">
<input type="password" name="cpass" placeholder="Enter Confirm Password *" required class="form-control">
</div>
      
            <div class="form-group col-md-12 col-xs-12">

                <input type="submit" name="chngpass" value="Submit" class="btn btn-lg btn-success">
               
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


