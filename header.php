<?php
$mainurl="http://localhost/trendzproject/";
$baseurl="http://localhost/trendzproject/assets/";
// $mainurl="http://trendzshopp.byethost3.com/";
// $baseurl="http://trendzshopp.byethost3.com/assets/";

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Trendz Shoes Corner take your branded shoes in your Home | Rajkot | Ahemdabad | Surat| Gandhingar </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/font-awesome.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
    <link rel='icon' type='text/icon' media='screen' href='<?php echo $baseurl;?>images/favicon.png'>
    <script src='<?php echo $baseurl;?>js/jquery.js'></script>
    <script src="<?php echo $baseurl;?>js/cycle.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#slide").cycle("fade");

        });
    </script>
    <script src='<?php echo $baseurl;?>js/bootstrap.js'></script>

</head>

<body>
 
 
 
 <!-- Trendz Shoes header start here -->
 <div class="header navbar-fixed-top">

    <div class="row">
        <div class="col-md-12 col-xs-12">


            <div class="col-md-7 col-xs-12">
                <p align="center" style="color: white; margin-top:1%; margin-left:35%">Also Visit :<b>Rebook</b></p>
            </div>


            <div class="col-md-5 col-xs-12">
         
            <?php
             if(!isset($_SESSION["custid"]))
             {

            ?>

               <p align="center" style="color: white; margin-top:2%; margin-left:35%">
                    <a href="#" style="color:white" data-toggle="modal" data-target="#reg"><b>SignUp!</b></a>&nbsp;&nbsp;&nbsp;
                    <a href="#"  data-toggle="modal" data-target="#log" data-dismiss="modal" style="color:white">Login <b><span class="fa fa-user"></span></a></b>
                </p>
          
            <?php
             }
             else
             {
             ?>

            <ul class="header-link">
                
            <li class="dropdown"><a class="dropdown-header btn btn-lg btn-info" data-toggle="dropdown" href="#" style="height: auto; font-size: 17px;">

                  Welcome :<?php echo ucfirst($_SESSION["fname"]);?><span class="caret"></span></a>
                         
                            <ul class="dropdown-menu" style="width:auto;">
                                

                                            <li><a href="<?php echo $mainurl;?>ManageProfile">Manage Profile <span class="fa fa-user"></span></a></li>

                                            <li><a href="<?php echo $mainurl;?>ManageNotification">Manage Notifications <span class="fa fa-bell"><span class="badge badge-lg">0</span></span></a></li>
                                            <li><a href="<?php echo $mainurl;?>ChangePassword">Change Password <span class="fa fa-lock"></span></a></li>
                                            <li><a href="<?php echo $mainurl;?>ManageProfile?delprof=<?php echo base64_encode($shwprof[0]['custid']);?>" onclick="return confirm('Are You sure to Delete Data')">Delete Account <span class="fa fa-trash"></span></a></li>


                                </ul>
            </li>
                    
                    
                   <li> <a href="#"  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#lg" data-dismiss="modal" style="color:white">Logout Here <span class="fa fa-power-off"></span></a></li>

            </ul>
                
         

            <?php
             }
             ?>
          </div>
            
        </div>
        </div>

        </div>
 
<!-- Trendz Shoes header closed here -->



<!-- logout here -->
<div class="modal fade" role="dialog" id="lg">
    <div class="modal-dialog" style="width: 40%; margin-top:8%">
        <div class="modal-content" style="height: 150px;">


             <div class="list-group">
                 
             <div class="list-group-item" style="background-color:red; width:100%">
                 
             <h4 align="center" style="color:white">Are you Sure to logout ?</h4></div>

             <div class="list-group-item">
                 
                 <center>
                     <span class="fa fa-close" style="font-size:65px; color:red"></span>
                     <br><br>
                 <a href="<?php echo $mainurl;?>?lgout"><button type="button" class="btn btn-default btn-lg" style="border:solid 1px red">Yes</button></a>
                 &nbsp;&nbsp;
                 <a href="#"><button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">No</button></a>
</center>
                </div>




             </div>
            </div>
        </div>
    </div>









</body>

</html>