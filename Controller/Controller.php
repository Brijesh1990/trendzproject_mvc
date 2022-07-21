<?php
//error_reporting(0);
require_once("Model/Model.php");
class Controller extends Model
{
      public function __construct()

    {

           parent:: __construct();
           //fetch state in customer form
           $st=$this->selectalldata('trendz_state');
           //fetch city in customer form
           $ct=$this->selectalldata('trendz_city');
           //register customer coding here
           if(isset($_POST["reg"]))
           {
               date_default_timezone_set("Asia/Calcutta");

               $fnm=$_POST["fname"];
               $lnm=$_POST["lname"];
               $em=$_POST["em"];
               $pass=base64_encode($_POST["pass"]);
               $cpass=base64_encode($_POST["cpass"]);
             //image upload here
             $tmp_name=$_FILES["img"]["tmp_name"];
             $size=$_FILES["img"]["size"]/1024;
             $type=$_FILES["img"]["type"];
             $path="uploads/customer_photo/".$_FILES["img"]["name"];
             move_uploaded_file($tmp_name,$path);
               $mob=$_POST["mob"];
               $add=$_POST["address"];
               $sid=$_POST["state"];
               $ct=$_POST["city"];
               $rdate=date("d/m/y H:i:s");

               if($pass==$cpass)
               {
               $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"password"=>$pass,"photo"=>$path,"mobile"=>$mob,"address"=>$add,"sid"=>$sid,"ctid"=>$ct,"registered_date_time"=>$rdate);
               $chk=$this->insertalldata('trendz_customer',$data);
               if($chk)
               {
                   
                echo "<script>
                alert('Your Account Successfuly Created')
                window.location='./';
                </script>";
               }

               }
               else
               {
                   echo "<script>
                   alert('Your Password does not macthed')
                   window.location='./';
                   </script>";
               }
           }

           //login as customer
           if(isset($_POST["log"]))
           {
               $em=$_POST["em"];
               $pass=base64_encode($_POST["pass"]);
               $chk=$this->logincstomer('trendz_customer',$em,$pass);

               if($chk)
               {
                echo "<script>
                alert('You are Logged in as Customer Successfully')
                window.location='./';
                </script>";

               }

               else
               {
                echo "<script>
                alert('Your Email and Password Incorect try again')
                window.location='./';
                </script>";
               }
           }


           
           //forget password of  customer
           if(isset($_POST["frg"]))
           {
               $em=$_POST["email"];
               
               $chk=$this->frgpassword('trendz_customer','email','password',$em);

               if($chk)
               {
                echo "<script>
                alert('Your Password is :'+ '$chk')
                window.location='./';
                </script>";

               }

               else
               {
                echo "<script>
                alert('Your Email does not exist try again')
                window.location='./';
                </script>";
               }
           }
           //fetch all maincategories in cutomer menu
           $mcat=$this->selectalldata('trendz_maincategory');
           //fetch all categories in cutomer menu
           $cat=$this->selectalldata('trendz_category');
           //fetch all products in customer module
           $prod=$this->selectalldata('trendz_product');
           //fetch a products details here
           if(isset($_GET["pid"]))
           {
               $pid=base64_decode($_GET["pid"]);
               $prod=$this->selectalldetails('trendz_product','pid',$pid);
           }

           //logout as a customer here

           if(isset($_GET["lgout"]))
           {
                
            $lgout=$_GET["lgout"];
            $log=$this->logout();
            if($log)
            {
                echo "<script>
                alert('You are Logout Successfuly')
                window.location='./';
                </script>";

            }

           }

           //display customer data

           if(isset($_SESSION["custid"]))
           {
               $custid=$_SESSION["custid"];
               $shwprof=$this->seljoindata('trendz_customer','trendz_state','trendz_city','trendz_customer.sid=trendz_state.sid','trendz_customer.ctid=trendz_city.ctid','custid',$custid);


           }

           //change password of customer

           if(isset($_POST["chngpass"]))
           {
               $opass=base64_encode($_POST["opass"]);
               $npass=base64_encode($_POST["npass"]);
               $cpass=base64_encode($_POST["cpass"]);

               $chng=$this->chngpassword('trendz_customer','password','custid',$opass,$npass,$cpass,$custid);

               if($chng)
               {
                echo "<script>
                alert('Your Password  Successfuly Changed')
                window.location='ManageProfile';
                </script>";
               }

               else
               {

                echo "<script>
                alert('Your Password, New password and Confirm password does not Matched try again')
                window.location='ChangePassword';
                </script>";

               }
           }


           //add product in cart here

           if(isset($_POST["addtocart"]))
           {
            $custid=$_SESSION["custid"];
            $pid=$_POST["pid"];
            $pnm=$_POST["pname"];
            $qty=$_POST["qty"];
            $price=$_POST["price"];
            $discount=$_POST["dprice"];
                          
            $tot=$discount*$qty;
            //echo $tot;
            // $dtest=$tot*$discount/100;
            // $discountfprice=$tot-$dtest;

            $adate=date("d/m/Y");
            
            $data=array("custid"=>$custid,"pid"=>$pid,"pname"=>$pnm,"quantity"=>$qty,"price"=>$price,"subtotal"=>$tot,"added_date"=>$adate);
            $chk=$this->insertalldata('trendz_cart',$data);
            if($chk)
            {
                
             echo "<script>
             alert('Product Added Succefuly in Cart')
             window.location='ViewCart';
             </script>";
            }

           }
    

           //select and count cart
           if(isset($_SESSION["custid"]))
           {

            $custid=$_SESSION["custid"];
           $crtcount=$this->selectcountcart('trendz_cart','cartid','custid',$custid);
         
           }


           //view cart details in added by customer

           if(isset($_SESSION["custid"]))
           {
               $custid=$_SESSION["custid"];
               $shwcart=$this->seljoindata1('trendz_cart','trendz_product','trendz_cart.pid=trendz_product.pid','custid',$custid);


           }
        

           //delete cart from cartview
           if(isset($_GET["delcrt"]))
           {
               $id=base64_decode($_GET["delcrt"]);
               $id=array("cartid"=>$id);
               $chk=$this->deldata('trendz_cart',$id);
               if($chk)
               {
                echo "<script>
                alert('Cart Deleted Succefuly')
                window.location='ViewCart';
                </script>";
               }
           }

           //sum of total products in cart
           if(isset($_SESSION["custid"]))
           {
           $custid=$_SESSION["custid"];
           $sumtot=$this->selectsum('trendz_cart','subtotal','custid',$custid);
           }

           //update customer profile
           if(isset($_POST["upd"]))
           {
               $id=$_SESSION["custid"];
               $fnm=$_POST["fname"];
               $lnm=$_POST["lname"];
               $em=$_POST["em"];
            
             //image upload here
             $tmp_name=$_FILES["img"]["tmp_name"];
             $size=$_FILES["img"]["size"]/1024;
             $type=$_FILES["img"]["type"];
             $path="uploads/customer_photo/".$_FILES["img"]["name"];
             move_uploaded_file($tmp_name,$path);
            
               $mob=$_POST["mob"];
               $add=$_POST["address"];
               $sid=$_POST["state"];
               $ct=$_POST["city"];
               $rdate=date("d/m/y H:i:s");
               $data=array("firstname"=>$fnm,"lastname"=>$lnm,"email"=>$em,"photo"=>$path,"mobile"=>$mob,"address"=>$add,"sid"=>$sid,"ctid"=>$ct,"registered_date_time"=>$rdate);
               
               $chk=$this->updata('trendz_customer',$fnm,$lnm,$em,$path,$mob,$add,$sid,$ct,$rdate,'custid',$id);
               if($chk)
               {
                echo "<script>
                alert('Your Profile Updated Successfully')
                window.location='ManageProfile';
                </script>";
               }

           }

           //load category of products

           if(isset($_GET["loadcatid"]))
           {
               $catid=$_GET["loadcatid"];
               $prod=$this->selectalldata2('trendz_product','catid',$catid);
           }
           //Load project in controller or load view 

            if($_SERVER["PATH_INFO"]) 

            {
             
                switch ($_SERVER["PATH_INFO"]) {
                    case '/':
                        require_once("header.php");
                        require_once("menu.php");
                        require_once("slider.php");
                        require_once("content.php");
                        require_once("footer.php");
                        require_once("signup.php");
                        require_once("signin.php");
                        require_once("forgetpassword.php");
                        break;
                    

                        case '/Contact-Us':
                            require_once("header.php");
                            require_once("menu.php");
                            require_once("contact-us.php");
                            require_once("footer.php");
                            require_once("signup.php");
                            require_once("signin.php");
                            require_once("forgetpassword.php");
                            break;

                            case '/ManageProfile':
                                require_once("header.php");
                                require_once("menu.php");
                                require_once("manageprofile.php");
                                require_once("footer.php");
                                break;

                                
                            case '/ChangePassword':
                                require_once("header.php");
                                require_once("menu.php");
                                require_once("changepassword.php");
                                require_once("footer.php");
                                break;

                        case '/ExploreAllProducts':
                            require_once("header.php");
                            require_once("menu.php");
                            require_once("allproducts.php");
                            require_once("footer.php");
                            require_once("signup.php");
                            require_once("signin.php");
                            require_once("forgetpassword.php");
                            break;
                        case '/ExploreAllProductsDetails':
                            require_once("header.php");
                            require_once("menu.php");
                            require_once("productdetails.php");
                            require_once("footer.php");
                            require_once("signup.php");
                            require_once("signin.php");
                            require_once("forgetpassword.php");
                            break;

                        case '/ViewCart':
                            require_once("header.php");
                            require_once("menu.php");
                            require_once("viewcart.php");
                            require_once("signup.php");
                            require_once("signin.php");
                            require_once("footer.php");
                            break;
                        case '/Checkout':
                            require_once("header.php");
                            require_once("menu.php");
                            require_once("checkout.php");
                            require_once("signup.php");
                            require_once("signin.php");
                            require_once("footer.php");
                            break;
                        
                        case '/PaymentSuccess':
                            require_once("header.php");
                            require_once("menu.php");
                            require_once("paymentssuccess.php");
                            require_once("signup.php");
                            require_once("signin.php");
                            require_once("footer.php");
                            break;
                            
                            case '/PaymentFailure':
                                require_once("header.php");
                                require_once("menu.php");
                                require_once("paymentfailure.php");
                                require_once("signup.php");
                                require_once("signin.php");
                                require_once("footer.php");
                                break;



                            case '/ManageOrder':
                                require_once("header.php");
                                require_once("menu.php");
                                require_once("ordersuccess.php");
                                require_once("footer.php");
                                break;


                                case '/PrintInvoice':
                                    require_once("header.php");
                                    require_once("menu.php");
                                    require_once("invoice.php");
                                    require_once("footer.php");
                                    break;
                    default:
                        
                    require_once("header.php");
                    require_once("menu.php");
                    require_once("404.php");
                    require_once("footer.php");
                        break;
                }


            }
           
      


    }

}

$obj=new Controller;



?>