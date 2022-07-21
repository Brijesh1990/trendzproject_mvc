<?php
error_reporting(0);
require_once("Model/AdminModel.php");
class AdminController extends AdminModel
{
   
    public function __construct()
    {
     
        parent::__construct();

        //add state coding here
        if(isset($_POST["addstate"]))
        {
            $st=$_POST["sname"];
            $data=array("sname"=>$st);
            $chk=$this->insertalldata('trendz_state',$data);
            if($chk)
            {
                echo "<script>
                alert('State Added Successfuly')
                window.location='AddState';
                </script>";
            }
        } 

         //add city coding here
         if(isset($_POST["addcity"]))
         {
             $st=$_POST["sname"];
             $ct=$_POST["ctname"];
             $data=array("sid"=>$st,"ctname"=>$ct);
             $chk=$this->insertalldata('trendz_city',$data);
             if($chk)
             {
                 echo "<script>
                 alert('City Added Successfuly')
                 window.location='AddCity';
                 </script>";
             }
         } 


        //fetch state in add city in admin
        $st=$this->selectalldata('trendz_state');
        //manage all city in admin or show all city
        $ct=$this->selectjoindata('trendz_city','trendz_state','trendz_city.sid=trendz_state.sid');

   

        //login as admin coding here or logic here

        if(isset($_POST["login"]))
        {
            $em=$_POST["Email"];
            $pass=$_POST["Password"];
            $chk=$this->loginadmin('trendz_admin',$em,$pass);
            if($chk)
            {
                echo "<script>
                alert('You are Logged in as admin Successfuly')
                window.location='AdminDashboard';
                </script>";
            }
            else
            {
                echo "<script>
                alert('Your Email and Password  are Incorrect try again')
                window.location='./';
                </script>";
            }
        }

        //forgetpassword of admin
        if(isset($_POST["frg"]))
        {
            $em=$_POST["Email"];
            $chk=$this->frgpassword('trendz_admin','email','password',$em);

            if($chk)
            {
                echo "<script> 
                alert('Your admin Password is :' + '$chk')
                window.location='./';
                </script>";
            }

            else
            {
                echo "<script> 
                alert('This email id is not registered with us try with another Email')
                window.location='ForgetPassword';
                </script>";

            }
        }

        //delete a state in admin
        if(isset($_GET["delstate"]))
        {
            $delid=$_GET["delstate"];
            $id=array("sid"=>$delid);
            $chk=$this->delalldata('trendz_state',$id);
            if($chk)
            {
                echo "<script> 
                alert('Your Data Deleted Successfuly')
                window.location='ManageState';
                </script>";

            }
        }

          //delete a city in admin
          if(isset($_GET["delcity"]))
          {
              $delid=$_GET["delcity"];
              $id=array("ctid"=>$delid);
              $chk=$this->delalldata('trendz_city',$id);
              if($chk)
              {
                  echo "<script> 
                  alert('Your Data Deleted Successfuly')
                  window.location='ManageCity';
                  </script>";
  
              }
          }

          
          //delete a product in admin
          if(isset($_GET["delprod"]))
          {
              $delid=$_GET["delprod"];
              $id=array("pid"=>$delid);
              $chk=$this->delalldata('trendz_product',$id);
              if($chk)
              {
                  echo "<script> 
                  alert('Your Data Deleted Successfuly')
                  window.location='ManageProduct';
                  </script>";
  
              }
          }

          //add maincategory in tables
          if(isset($_POST["addmaincat"]))
          {
              $mcatnm=$_POST["mcatname"];
              $addate=$_POST["addate"];
              $data=array("mcatname"=>$mcatnm,"added_date"=>$addate);
              $chk=$this->insertalldata('trendz_maincategory',$data);

              if($chk)
              {
                
                    echo "<script> 
                    alert('MainCategory Added Successfuly')
                    window.location='AddMainCategory';
                    </script>";
      
              }
          }
          //add category in tables
          if(isset($_POST["addcat"]))
          {
              $mcatnm=$_POST["mcatname"];
              $catnm=$_POST["catname"];
              $addate=$_POST["addate"];
              $data=array("mcatid"=>$mcatnm,"catname"=>$catnm,"added_date"=>$addate);
              $chk=$this->insertalldata('trendz_category',$data);

              if($chk)
              {
                
                    echo "<script> 
                    alert('Category Added Successfuly')
                    window.location='AddCategory';
                    </script>";
      
              }
          }
//add subcategory in tables
if(isset($_POST["addsubcat"]))
{
    $mcatnm=$_POST["mcatname"];
    $catnm=$_POST["catname"];
    $subcatnm=$_POST["subcatname"];
    $addate=$_POST["addate"];
    $data=array("mcatid"=>$mcatnm,"catid"=>$catnm,"subcatname"=>$subcatnm,"added_date"=>$addate);
    $chk=$this->insertalldata('trendz_subcategory',$data);

    if($chk)
    {
      
          echo "<script> 
          alert('SuCategory Added Successfuly')
          window.location='AddSubCategory';
          </script>";

    }
}
//add Products in tables
if(isset($_POST["addprod"]))
{
    $mcatnm=$_POST["mcatname"];
    $catnm=$_POST["catname"];
    $subcatnm=$_POST["subcatname"];

    //image upload of products main image
    $tmp_name=$_FILES["pimg"]["tmp_name"];
    $type=$_FILES["pimg"]["type"];
    $size=$_FILES["pimg"]["size"]/1024;
    $path="upload_products/".$_FILES["pimg"]["name"];
    move_uploaded_file($tmp_name,$path);

    //image upload of products  image1
    $tmp_name1=$_FILES["pimg1"]["tmp_name"];
    $type1=$_FILES["pimg1"]["type"];
    $size1=$_FILES["pimg1"]["size"]/1024;
    $path1="upload_products/".$_FILES["pimg1"]["name"];
    move_uploaded_file($tmp_name1,$path1);

    //image upload of products  image2
    $tmp_name2=$_FILES["pimg2"]["tmp_name"];
    $type2=$_FILES["pimg2"]["type"];
    $size2=$_FILES["pimg2"]["size"]/1024;
    $path2="upload_products/".$_FILES["pimg2"]["name"];
    move_uploaded_file($tmp_name2,$path2);
    $pnm=$_POST["pname"];
    $qty=$_POST["qty"];
    $oprice=$_POST["oprice"];
    $nprice=$_POST["nprice"];
    $tot=$nprice*$qty;
    $discount=$_POST["dprice"];
    $dtest=$tot*$discount/100;
    $discountfprice=$tot-$dtest;

    $desc=$_POST["pdesc"];
    $addate=$_POST["addate"];
    
$data=array("mcatid"=>$mcatnm,"catid"=>$catnm,"subcatid"=>$subcatnm,"pimage"=>$path,"pimage1"=>$path1,"pimage2"=>$path2,"pname"=>$pnm,"qty"=>$qty,"oldprice"=>$oprice,"offerprice"=>$nprice,"discount"=>$discount,"discountedprice"=>$discountfprice,"description"=>$desc,"added_date"=>$addate);
    $chk=$this->insertalldata('trendz_product',$data);

    if($chk)
    {
      
          echo "<script> 
          alert('Product Added Successfuly')
          window.location='AddProduct';
          </script>";

    }
}

         //fetch main category in category
        $mcat=$this->selectalldata('trendz_maincategory');
        
        //fetch  category in subcategory
        $cat=$this->selectalldata('trendz_category');
        
        //fetch  category in subcategory
        $subcat=$this->selectalldata('trendz_subcategory');
        
        //fetch  or show  all products 
        $prod=$this->selectjoindata1('trendz_product','trendz_maincategory','trendz_category','trendz_subcategory','trendz_product.mcatid=trendz_maincategory.mcatid','trendz_product.catid=trendz_category.catid','trendz_product.subcatid=trendz_subcategory.subcatid');
        
        //edit state for update
        if(isset($_GET["edstate"]))
        {
            $ed=$_GET["edstate"];
            $edst=$this->selectedit('trendz_state','sid',$ed);

        }
        //update state
        if(isset($_POST["updstate"]))
        {   
            $ed=$_GET["edstate"];
            $snm=$_POST["sname"];
            $chk=$this->updata('trendz_state',$snm,'sid',$ed);
            if($chk)
            {
                echo "<script>
                alert('Your state successfuly Updated')
                window.location='ManageState';
                </script>";

            }
        }

       //count total customer on admin dashboard
        $totalcust=$this->selectcountdata('trendz_customer','custid');
        //count total products on admin dashboard
        $totalprod=$this->selectcountdata('trendz_product','pid');
          //logout admin logic or coding

        if(isset($_GET["lgout"]))
        {
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                alert('You are logout Successfuly')
                window.location='./';
                </script>";
            }
        }


        if($_SERVER["PATH_INFO"])
        {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("login.php");
                    break;
                case '/ForgetPassword':
                    require_once("index.php");
                    require_once("forgetpassword.php");
                    break;


                case '/AdminDashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                    break;
                    
                case '/AddMainCategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addmain_category.php");
                    require_once("footer.php");
                    break;
                    
                case '/AddCategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("add_category.php");
                    require_once("footer.php");
                    break;
                    
                    
                case '/AddSubCategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("add_subcategory.php");
                    require_once("footer.php");
                    break;
                case '/AddProduct':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addproduct.php");
                    require_once("footer.php");
                    break;
                case '/ManageProduct':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("manageproduct.php");
                        require_once("footer.php");
                        break;
                            
                case '/AddState':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addstate.php");
                    require_once("footer.php");
                    break;

                case '/ManageState':
                     require_once("index.php");
                     require_once("header.php");
                     require_once("sidebar.php");
                     require_once("managestate.php");
                     require_once("footer.php");
                    break;
                    case '/EditState':
                        require_once("index.php");
                        require_once("header.php");
                        require_once("sidebar.php");
                        require_once("editstate.php");
                        require_once("footer.php");
                       break;
                    

                case '/AddCity':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcity.php");
                    require_once("footer.php");
                    break;
                case '/ManageCity':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecity.php");
                    require_once("footer.php");
                    break;                
                default:
                    require_once("404.php");
                    break;
            }
        }

    }
}

$obj=new AdminController();



?>