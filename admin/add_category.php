
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
                            Add  Category
                            
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form role="form" class="form-horizontal" method="post">
                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Select Main category</label>
                                    <div class="col-lg-6">
                                        <select name="mcatname" placeholder="" id="f-name" class="form-control">
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
                                    <label class="col-lg-3 control-label">Category Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="catname" placeholder="" id="f-name" class="form-control">
                                      
                                    </div>
                                </div>
                                <div class="form-group has-error">
                                    <label class="col-lg-3 control-label">Added Date</label>
                                    <div class="col-lg-6">
                                        <input type="date" name="addate" placeholder="" id="l-name" class="form-control">
                                       
                                    </div>
                                </div>
                          

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary" type="submit" name="addcat">Add Category!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
         
</section>