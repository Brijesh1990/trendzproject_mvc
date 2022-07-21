<html>
  <head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  </head>
</html>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="panel panel-default">
    <div class="panel-heading">
      Manage Products
    </div>
   
   <div class="table-responsive">
    <div style="padding:15px; overflow: auto;">
    <table id="example" class="display" style="width:120%">
        <thead>
          <tr>
           
            <th>Pid</th>
            <th>MainCategory</th>
            <th>Category</th>
            <th>SubCategory</th>
            <th>Image</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Pname</th>
            <th>Qty</th>
            <th>OldPrice</th>
            <th>offerprice</th>
            <th>Disscount</th>
            <th>Discription</th>
            <th>Added_Date</th>
            <th>Action</th>
         
          </tr>
        </thead>
        <tbody>
        <?php
         
         foreach($prod as $prod1)
         {

        ?>
       
          <tr>
           
            <td><?php echo $prod1["pid"];?></td>
            <td><?php echo $prod1["mcatname"];?></td>
            <td><?php echo $prod1["catname"];?></td>
            <td><?php echo $prod1["subcatname"];?></td>
            <td><img src="<?php echo $prod1["pimage"];?>" style="width:50px; height:50px"></td>
            <td><img src="<?php echo $prod1["pimage1"];?>" style="width:50px; height:50px"></td>
            <td><img src="<?php echo $prod1["pimage2"];?>" style="width:50px; height:50px"></td>
            <td><?php echo $prod1["pname"];?></td>
            <td><?php echo $prod1["qty"];?></td>
            <td><?php echo $prod1["oldprice"];?></td>
            <td><?php echo $prod1["offerprice"];?></td>
            <td><?php echo $prod1["discount"];?></td>
            <td><div style="height: 75px; width: 200px; overflow:auto"><?php echo $prod1["description"];?></div></td>
            <td><?php echo $prod1["added_date"];?></td>
          
            <td colspan="3"><a href="#" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a> | 
            <a href="<?php echo $mainurl;?>ManageProduct?delprod=<?php echo $prod1["pid"];?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You sure to Delete City')"><span class="fa fa-trash"></span> Delete</a>
         
        </td>
            
          </tr>
          
      <?php
         }
         ?>
        </tbody>
        </table>
    </div>
    </div>
    </div>
   

    <script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
} );
  
  </script>