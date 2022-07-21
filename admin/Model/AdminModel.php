<?php
class AdminModel
{

    public $connection="";
    public function __construct()
    {

        session_start();
        
        try
        {
        $this->connection=mysqli_connect("localhost","root","","trendz_project");

        }
        catch(Exception $e)
        {
             
            die(mysqli_error($this->connection,$e));

        }
    }


    //create a member function for insertalldata

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
    
    //create a member function for select and join tables
    public function selectjoindata($table,$table1,$where)
    {
        $select="select * from $table join $table1 on $where";
        $query=mysqli_query($this->connection,$select);
        while($result=mysqli_fetch_array($query))

        {
         $arr[]=$result;

        }

        return $arr;
    }


     //create a member function for select and join tables
     public function selectedit($table,$column,$ed)
     {
         $select="select * from $table where $column='$ed'";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
 
         {
          $arr[]=$result;
 
         }
 
         return $arr;
     }

     
     //create a member function for select and join tables
     public function  updata($table,$snm,$column,$ed)
     {
         $select="update $table set sname='$snm' where $column='$ed'";
         $query=mysqli_query($this->connection,$select);
         return $query;
     }
     //create a member function for select and join tables
     public function selectjoindata1($table,$table1,$table2,$table3,$where,$where1,$where2)
     {
         $select="select * from $table join $table1 on $where join $table2 on $where1 join $table3 on $where2";
         $query=mysqli_query($this->connection,$select);
         while($result=mysqli_fetch_array($query))
 
         {
          $arr[]=$result;
 
         }
 
         return $arr;
     }
    
    //create a member function for admin login
    public function loginadmin($table,$em,$pass)
    {
        $select="select * from $table where email='$em' and password='$pass'";
        $query=mysqli_query($this->connection,$select);
        $result=mysqli_fetch_array($query);
        $no=mysqli_num_rows($query);
        if($no>0)
        {
            $_SESSION["aid"]=$result["aid"];
            $_SESSION["Email"]=$result["email"];
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
            $p=$result["password"];
            return $p;
        }
        else
        {
            return false;
        }

    }

    //create a member function for delete data
    public function delalldata($table,$id)
    {
        $k=array_keys($id);
        $field=implode(",",$k);
        $v=array_values($id);
        $id=implode("','",$v);
        $delete="delete from $table where $field='$id'"; 
        $query=mysqli_query($this->connection,$delete);
        return $query;
    }

    
 //create a member function for total count data
 public function selectcountdata($table,$colmn)
 {  
     $select="select count($colmn) as total from $table";
     $query=mysqli_query($this->connection,$select);
     while($result=mysqli_fetch_array($query))

     {
         $arr[]=$result;

     }

     return $arr;
 }
    //create a member function for logout admin

    public function logout()
    {
    
        unset($_SESSION["aid"]);
        unset($_SESSION["Email"]);
        session_destroy();
        return true;


    }
}


?>