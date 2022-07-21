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
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Manage City
    </div>
   
   
    <div class="table-resposnive" style="padding:15px">
    <table id="example" class="display" style="width:100%">
        <thead>
          <tr>
           
            <th>Ctid</th>
            <th>State Name</th>
            <th>City Name</th>
            <th>Action</th>
         
          </tr>
        </thead>
        <tbody>
        <?php
         
         foreach($ct as $ct1)
         {

        ?>
       
          <tr>
           
            <td><?php echo $ct1["ctid"];?></td>
            <td><?php echo $ct1["sname"];?></td>
            <td><?php echo $ct1["ctname"];?></td>
            <td><a href="#" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a> | 

            <a href="<?php echo $mainurl;?>ManageCity?delcity=<?php echo $ct1["ctid"];?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You sure to Delete City')"><span class="fa fa-trash"></span> Delete</a>
         
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