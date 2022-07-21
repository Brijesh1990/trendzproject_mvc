
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
                            Add City
                            
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form method="post" role="form" class="form-horizontal ">

                            <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Select State</label>
                                    <div class="col-lg-6">
                                        <select name="sname" placeholder="" id="f-name" class="form-control" required>
                                        <option value="">-Select State-</option>
                                        <?php
                                        foreach($st as $st1)
                                        {

                                        ?>
                                        <option value="<?php echo $st1["sid"];?>"><?php echo $st1["sname"];?></option>
                                        
                                         <?php
                                        }
                                        ?>
                                        </select>
                                      
                                    </div>
                                </div>


                                <div class="form-group has-success">
                                    <label class="col-lg-3 control-label">Enter City Name</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="ctname" placeholder="" id="f-name" class="form-control" required>
                                      
                                    </div>
                                </div>
                               

                                <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                        <button class="btn btn-primary"  type="submit" name="addcity">Add City!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
         
</section>