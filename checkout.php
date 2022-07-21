<?php

$MERCHANT_KEY = "FH2qsrBv";
$SALT = "StCMXYEpZ3";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://secure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>



<script type="text/javascript">
var hash = '<?php echo $hash ?>';
function submitPayuForm() {
  if(hash == '') {
    return;
  }
  var payuForm = document.forms.payuForm;
  payuForm.submit();
}
</script>    
    
    
<body onLoad="submitPayuForm()">

    
    <!-- Trendz Shoes viewcart start here -->
    <div class="content" style="margin-top: 10%;">
        <div class="container-fluid">
            <div class="row">

            <div class="col-md-12 col-xs-12">

            <div class="col-md-7 col-xs-12" style="height: 550px;">

            <div class="card" style="box-shadow: 0px 0px 10px 2px gray; padding:15px; height: 520px;">
            <div class="card-heading"><h2 style="color:red">Fill All Required Field(*)</h2></div>
            
<?php if($formError) { ?>
    <span style="color:red; font-size:17px">Please fill all mandatory fields.</span>
    <?php
}

?>
            <div class="card-body">

            <form method="POST" action="<?php echo $action; ?>" name="payuForm" enctype="multipart/form-data">
         <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
          <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
          <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />

        	
          <div class="form-group col-md-12 col-xs-12">
          <input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" placeholder="Enter Ammount *" />
          </div>



            <div class="form-group col-md-6 col-xs-12">
                <input type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="Firstname *"  class="form-control">
            </div>

            <div class="form-group col-md-6 col-xs-12">
                <input type="text" name="lname" value="<?php echo $shwprof[0]["lastname"];?>" placeholder="Firstname *" required class="form-control">
            </div>

            <div class="form-group col-md-12 col-xs-12">
                <input type="text" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Email *" class="form-control">
            </div>
          

            <div class="form-group col-md-12 col-xs-12">
                <input type="text" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Mobile *"  class="form-control">
            </div>



            <div class="form-group col-md-12 col-xs-12">
                <textarea name="productinfo" class="form-control" placeholder="Product Info *"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
            </div>

<!-- payment success url -->
            <input type="hidden" name="surl" value="<?php echo $mainurl;?>PaymentSuccess" size="64" />
<!-- payment failure url -->

<input type="hidden" name="furl" value="<?php echo $mainurl;?>PaymentFailure" size="64" />

<input type="hidden" name="service_provider" value="payu_paisa" size="64" />


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


              
            </div>
            </div>
            
            </div>  


<div class="col-md-5 col-xs-12">
<div class="card" style="box-shadow: 0px 0px 10px 2px gray; padding:15px; height: 520px;">
<div class="card-heading"><h2>My Cart <span class="fa fa-shopping-cart" style="font-size: 30px;"> <span class="badge badge-lg" style="background-color: red; color: white; font-size: 17px;"> <?php echo $crtcount[0]["total"];?> </span> </span></h2></div>
<div class="card-body">


<table class="table table-responsive table-stripped table-hover">
<tr>
<th>Photo</th>
<th>ProductName</th>
<th>qty</th>
<th>Subtotal</th>
</tr>

<?php
foreach($shwcart as $shwcart1)
{
?>
<tr>
<td><img src="admin/<?php echo $shwcart1["pimage"];?>" width="85px" height="85px"></td>
<td><?php echo $shwcart1["pname"];?></td>
<td><?php echo $shwcart1["qty"];?></td>
<td><?php echo $shwcart1["subtotal"];?></td>
</tr>

<?php
}
?>

<tr>
<td align="right" colspan="9"><h3><div class="well well-lg bg-danger" style="background-color: lightgray; color:green">Subtotal of Products :Rs.<?php echo round($sumtot[0]["total"],2);?></div></h3></td>

</tr>

<tr>

<td align="right" colspan="9">

<?php if(!$hash) { ?>

<button type="submit" class="btn btn-lg btn-danger pull-right" >Go For Payment >></button>

<?php
}
?>

</td>

</tr>

</table>



</form>

</div>
</div> 
</div>
    
</div>


    </div>
    </div>
    </div>


    <br><br>   

    <!-- Trendz Shoes viewcart closed   here -->
