<script src="<?php echo $baseurl;?>js/jquery2.0.3.min.js"></script>
<script src="<?php echo $baseurl;?>js/jquery.bvalidator.min.js"></script>
<script src="<?php echo $baseurl;?>js/default.min.js"></script>
<script src="<?php echo $baseurl;?>js/gray.js"></script>
<script type="text/javascript">

$(document).ready(function(){

$("#prod").bValidator();

});

</script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Products
                            
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form id="prod"  role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Select Main category</label>
                                    <div class="col-lg-6">
                                        <select name="mcatname" placeholder="" id="f-name" class="form-control" data-bvalidator="required">
                                            <option value="">-Select Main category-</option>
                                            <?php
                                             foreach($mcat as $mcat1)
                                             {
                                            ?>
                                            <option value="<?php echo $mcat1["mcatid"];?>"><?php echo $mcat1["mcatname"];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                      
                                    </div>
                                </div>
                          
                                   <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Select category</label>
                                    <div class="col-lg-6">
                                        <select name="catname" placeholder="" id="f-name" class="form-control" data-bvalidator="required">
                                            <option value="">-Select  category-</option>
                                            <?php
                                             foreach($cat as $cat1)
                                             {
                                            ?>
                                            <option value="<?php echo $cat1["catid"];?>"><?php echo $cat1["catname"];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                      
                                    </div>
                                </div>
                          
                                <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Select Subcategory</label>
                                    <div class="col-lg-6">
                                        <select name="subcatname" placeholder="" id="f-name" class="form-control" data-bvalidator="required">
                                            <option value="">-Select  Subcategory-</option>
                                            <?php
                                             foreach($subcat as $subcat1)
                                             {
                                            ?>
                                            <option value="<?php echo $subcat1["subcatid"];?>"><?php echo $subcat1["subcatname"];?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                      
                                    </div>
                                </div>
                          
                            
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Upload Product Image</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="pimg" placeholder="" id="f-name" class="form-control" data-bvalidator="required">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Upload Product Image1</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="pimg1" placeholder="" id="f-name" class="form-control" data-bvalidator="required">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Upload Product Image2</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="pimg2" placeholder="" id="f-name" class="form-control" data-bvalidator="required">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Select Product Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="pname" placeholder="" id="f-name" class="form-control" data-bvalidator="required">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Enter Qty</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="qty" placeholder="" id="f-name" class="form-control" data-bvalidator="required,digit">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Enter Old price</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="oprice" placeholder="" id="f-name" class="form-control" data-bvalidator="required,digit">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Enter New price</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="nprice" placeholder="" id="f-name" class="form-control" data-bvalidator="required,digit">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Disscount Price</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="dprice" placeholder="" id="f-name" class="form-control" data-bvalidator="required,digit">
                                    </div>
                                </div>
                                
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Product Descriptions</label>
                                    <div class="col-lg-6">
                                        <textarea name="pdesc" placeholder="" id="f-name" class="form-control" data-bvalidator="required"></textarea>
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-lg-3 control-label">Added Date</label>
                                    <div class="col-lg-6">
                                        <input type="date" name="addate" placeholder="" id="l-name" class="form-control" data-bvalidator="required">
                                       
                                    </div>
                                </div>
                          

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit" name="addprod">Add Product!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
         
</section>