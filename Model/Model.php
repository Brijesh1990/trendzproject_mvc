<?php
class Model
{
    public $connection="";
    public function __construct()
    {
        session_start();    

        try
        {
            
            $this->connection=mysqli_connect("localhost","root","","trendz_project");

            // echo "Success";

        }

        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
        }
    }

    //create a member function for select all data
    public function selectalldata($table)
    {
        
        $select="select * from $table";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))

        {
            $arr[]=$result;

        }

        return $arr;
    }

//display products details
public function selectalldetails($table,$clnm,$pid)
    {
        
        $select="select * from $table where $clnm='$pid'";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))

        {
            $arr[]=$result;

        }

        return $arr;
    }

 //create a member function for select all data
 public function selectalldata1($table,$colmn,$mcatid)
 {  
     $select="select * from $table where mcatid='$mcatid'";
     $query=mysqli_query($this->connection,$select);
     while($result=mysqli_fetch_array($query))

     {
         $arr[]=$result;

     }

     return $arr;
 }


 
 //create a member function for select all data
 public function selectalldata2($table,$colmn,$catid)
 {  
     $select="select * from $table where $colmn='$catid'";
     $query=mysqli_query($this->connection,$select);
     while($result=mysqli_fetch_array($query))

     {
         $arr[]=$result;

     }

     return $arr;
 }


 
 //create a member function for total count in cart
 public function selectcountcart($table,$colmn,$colmn1,$custid)
 {  
     $select="select count($colmn) as total from $table where $colmn1='$custid'";
     $query=mysqli_query($this->connection,$select);
     while($result=mysqli_fetch_array($query))

     {
         $arr[]=$result;

     }

     return $arr;
 }

 
 
 //create a member function for total sum of products in cart
 public function selectsum($table,$colmn,$colmn1,$custid)
 {  
     $select="select sum($colmn) as total from $table where $colmn1='$custid'";
     $query=mysqli_query($this->connection,$select);
     while($result=mysqli_fetch_array($query))

     {
         $arr[]=$result;

     }

     return $arr;
 }

 //create a meber function for join customer and display adata
 public function seljoindata($table,$table1,$table2,$where,$where1,$colmn,$custid)

 {

    $sel="select * from $table join $table1 on $where join $table2 on $where1 where $colmn='$custid'";
    $query=mysqli_query($this->connection,$sel);
     while($result=mysqli_fetch_array($query))

     {
         $arr[]=$result;

     }

     return $arr;

 }

 
 //create a meber function for join customer and display adata
 public function seljoindata1($table,$table1,$where,$colmn,$custid)

 {

    $sel="select * from $table join $table1 on $where  where $colmn='$custid'";
    $query=mysqli_query($this->connection,$sel);
     while($result=mysqli_fetch_array($query))

     {
         $arr[]=$result;

     }

     return $arr;

 }
 

 //create a member function for vchange password 

 public function chngpassword($table,$password,$clnm,$opass,$npass,$cpass,$custid)
 {

    
     $sel="select $password from $table where $clnm='$custid'"; 
    $query=mysqli_query($this->connection,$sel);
    $result=mysqli_fetch_array($query);
    $p=$result["password"];
    if($p==$opass && $npass==$cpass)

    {
    
        $upd="update $table set $password='$npass' where $clnm='$custid'";
        $query=mysqli_query($this->connection,$upd);
         return $query;
    }

    else
    {
        return false;

    }

 }
 //create a member function for register customer
 public function insertalldata($table,$data)

 {

     $k=array_keys($data);
     $kk=implode(",",$k);
  
     $v=array_values($data);
     $vv=implode("','",$v);

    $insert="insert into $table($kk) values('$vv')";
     $query=mysqli_query($this->connection,$insert);
     return $query;

 }


//create a member function for login as customer

public function logincstomer($table,$em,$pass)
{
    $select="select * from $table where email='$em' and password='$pass'";
    $query=mysqli_query($this->connection,$select);
    $result=mysqli_fetch_array($query);
    $no=mysqli_num_rows($query);
    if($no>0)
    {
        $_SESSION["custid"]=$result["custid"];
        $_SESSION["em"]=$result["email"];
        $_SESSION["fname"]=$result["firstname"];
        return true;
    }
    else
    {
        return false;
    }
}

//create a member function for forget password
public function frgpassword($table,$column,$column1,$em)
{
   $select="select $column1 from $table where $column='$em'"; 
    $query=mysqli_query($this->connection,$select);
    $result=mysqli_fetch_array($query);
    $no=mysqli_num_rows($query);
    if($no>0)
    {
        $p=base64_decode($result["password"]);
        return $p;
    }
    else
    {
        return false;
    }

}

//create a member function for delete all data

public function deldata($table,$id)
{
   
    $k=array_keys($id);
    $field=implode(",",$k);
    $v=array_values($id);
    $value=implode("','",$v);

    $del="delete from $table where $field='$value'";
    $query=mysqli_query($this->connection,$del);
    return $query;


}

//create  a member function for update data
public function updata($table,$fnm,$lnm,$em,$path,$mob,$add,$sid,$ct,$rdate,$column,$id)
{
   
    $upd="update $table set firstname='$fnm',lastname='$lnm',email='$em',photo='$path',mobile='$mob',address='$add',sid='$sid',ctid='$ct',registered_date_time='$rdate' where $column='$id'";
    $query=mysqli_query($this->connection,$upd);
    return $query;




}


//create a member function logout customer

public function logout()
{

     unset($_SESSION["custid"]);
     unset($_SESSION["em"]);
     unset($_SESSION["fname"]);
     session_destroy();
     return true;

}





}



?>