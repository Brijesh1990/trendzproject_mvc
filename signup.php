
    <!-- signup up modal -->

    <div class="modal fade" role="dialog" id="reg" style="overflow: auto; !important">
        <div class="modal-dialog" style="width: 80%;" style="overflow: auto !important;">
            <div class="modal-content" style="height: 630px;">
                <button type="submit" class="btn btn-sm btn-danger pull-right" data-dismiss="modal" style="position: absolute; width: 35px; height: 35px; border: none;" id="modal-signup">&times;</button>

                <div class="col-md-12 col-xs-12">


                    <div class="col-md-5 col-xs-12">
                        <h2 align="center" style="background-color: red; color: white; padding: 5px; width: 90%; margin-left: 15%; border-radius:20px">SignUp with Trendz</h2>
                        <h5 align="center">Why Join with us ?</h5>
                        <img src="<?php echo $baseurl;?>images/tshgirt.jpg" style="width: 90%; margin-left: 15%;">
                    </div>

                    <hr style="border:solid 1px gray; position: absolute; height: 560px; margin-left: 44%;">



                    <div class="col-md-7 col-xs-12">


                        <h2 align="center" style="background-color: red; color: white; padding: 5px; width: 70%; margin-left: 15%; border-radius:20px">Create Account</h2>
                        <h5 align="center">Why Join with us ?</h5>

                        <div class="col-md-10 col-xs-12 col-md-offset-1">
                            <form method="POST" enctype="multipart/form-data">

                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="text" name="fname" placeholder="Firstname *" required class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="text" name="lname" placeholder="Firstname *" required class="form-control">
                                </div>

                                <div class="form-group col-md-12 col-xs-12">
                                    <input type="text" name="em" placeholder="Email *" required class="form-control">
                                </div>


                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="password" name="pass" placeholder="password *" required class="form-control">
                                </div>


                                <div class="form-group col-md-6 col-xs-12">
                                    <input type="password" name="cpass" placeholder="Confirm password *" required class="form-control">
                                </div>

                                <div class="form-group col-md-12 col-xs-12">
                                    <input type="file" name="img" placeholder="Photo *" required class="form-control">
                                </div>

                                <div class="form-group col-md-12 col-xs-12">
                                    <input type="text" name="mob" placeholder="Mobile *" required class="form-control">
                                </div>


                                <div class="form-group col-md-12 col-xs-12">
                                    <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
                                </div>



                                <div class="form-group col-md-12 col-xs-12">
                                    <select name="state" placeholder="State *" required class="form-control">

                                        <option value="">--Select State--</option>

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




                                <div class="form-group col-md-12 col-xs-12">
                                    <select name="city" placeholder="City *" required class="form-control">

                                        <option value="">--Select City--</option>
                                       
                                        <?php
                                        foreach($ct as $ct1)
                                        {
                                        ?>
                                        <option value="<?php echo $ct1["ctid"];?>"><?php echo $ct1["ctname"];?></option>
                                        <?php
                                        }
                                        ?> 
                                    </select>
                                </div>



                                <div class="form-group col-md-12 col-xs-12">

                                    <input type="submit" name="reg" value="Register" class="btn btn-lg btn-danger" style="margin-left: 57%;">
                                    <input type="reset" name="res" value="Clear" class="btn btn-lg btn-info" style="float: right;">

                                </div>

                                <div class="form-group col-md-12 col-xs-12">
                                    <center>
                                        <b>Aready have an Account <a href="#" data-toggle="modal" data-target="#log" data-dismiss="modal">Login here</a></b>
                                    </center>
                                </div>

                            </form>
                        </div>
                    </div>




                </div>

            </div>
        </div>
    </div>


    <!-- signup up modal closed here -->





