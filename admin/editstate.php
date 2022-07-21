
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
                            Edit State
                            
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form method="post" role="form" class="form-horizontal ">
                                <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Edit State Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="sname" value="<?php echo $edst[0]["sname"];  ?>" placeholder="" id="f-name" class="form-control" required>
                                      
                                    </div>
                                </div>
                               

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-danger"  type="submit" name="updstate">Update State!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
         
</section>