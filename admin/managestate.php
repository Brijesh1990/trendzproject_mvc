<html>
<head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</head>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Manage State
    </div>
   
   
    <div class="table-resposnive" style="padding:15px">
    <table id="example1" class="display" style="width:100%">
        <thead>
          <tr>
           
            <th>Sid</th>
            <th>State Name</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
        <?php
         
         foreach($st as $st1)
         {

        ?>
       
          <tr>
           
            <td><?php echo $st1["sid"];?></td>
            <td><?php echo $st1["sname"];?></td>
            <td><a href="<?php $mainurl;?>EditState?edstate=<?php echo $st1["sid"]; ?>" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</a> | 

            <a href="<?php $mainurl;?>ManageState?delstate=<?php echo $st1["sid"];?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You sure to Delete State ?')"><span class="fa fa-trash"></span> Delete</a>
         
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
    $('#example1').DataTable();
} );
  
  </script>