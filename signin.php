
    <!-- signIn  modal -->

    <div class="modal fade" role="dialog" id="log" style="overflow: auto; !important">
        <div class="modal-dialog" style="width: 80%;" style="overflow: auto !important;">
            <div class="modal-content" style="height: 430px;">
                <button type="submit" class="btn btn-sm btn-danger pull-right" data-dismiss="modal" style="position: absolute; width: 35px; height: 35px; border: none;" id="modal-signup">&times;</button>

                <div class="col-md-12 col-xs-12">


                    <div class="col-md-5 col-xs-12">
                        <h2 align="center" style="background-color: red; color: white; padding: 5px; width: 90%; margin-left: 15%; border-radius:20px">Sign In with Trendz</h2>
                        <h5 align="center">Why Join with us ?</h5>
                        <img src="<?php echo $baseurl;?>images/tshgirt.jpg" style="width: 70%; height: 250px; margin-left: 15%;">
                    </div>

                    <hr style="border:solid 1px gray; position: absolute; height: 560px; margin-left: 44%;">



                    <div class="col-md-7 col-xs-12">


                        <h2 align="center" style="background-color: red; color: white; padding: 5px; width: 70%; margin-left: 15%; border-radius:20px">Sign In</h2>
                        <h5 align="center">Why Join with us ?</h5>

                        <div class="col-md-10 col-xs-12 col-md-offset-1">
                            <form method="POST">



                                <div class="form-group col-md-12 col-xs-12">
                                    <input type="text" name="em" placeholder="Email *" required class="form-control">
                                </div>


                                <div class="form-group col-md-12 col-xs-12">
                                    <input type="password" name="pass" placeholder="password *" required class="form-control">
                                </div>

                                <div class="form-group col-md-12 col-xs-12">

                                    <input type="submit" name="log" value="Login" class="btn btn-lg btn-danger" style="margin-left: 10%;">
                                    <b><a href="#" data-target="#forget" data-toggle="modal" data-dismiss="modal">Forget Password</a></b>

                                </div>

                                <div class="form-group col-md-12 col-xs-12">
                                    <center>
                                        <b>Don't Have an Account? <a href="#" data-toggle="modal" data-target="#reg" data-dismiss="modal">Register here</a></b>
                                    </center>
                                </div>

                                <center>
                                    ------------Or-------------
                                    <br><br>
                                    <button type="submit" class="btn btn-lg btn-danger" style="width: 40%;"><span class="fa fa-google"></span> Google</button>
                                    <button type="submit" class="btn btn-lg btn-info" style="width: 40%;"><span class="fa fa-facebook"></span> Facebook</button>
                                </center>

                            </form>
                        </div>
                    </div>




                </div>

            </div>
        </div>
    </div>


    <!-- signup in modal closed here -->



