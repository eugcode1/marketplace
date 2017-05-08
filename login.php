<?php require("header.html"); ?>
<!-- Page Content -->
<div class="container page-container">
    <div class="panel">
        <div class="row-fluid">
            <div class="col-sm-12 col-md-6 offset-md-3" id="loginbox">
                <h3>Sign In</h3>
                <form role = "form" action = "" method = "post" >
                    <div class="form-group ">
                        <label class="sr-only" for="formInputGroup">Username</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <input name="username" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" required="true">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="formInputGroup">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                            <input name="password" type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password" required="true">
                        </div>
                    </div>
                    <button name="login" type="submit" class="btn btn-mint">Login</button>
                    <button name="login" type="submit" class="btn btn-primary">Login with Facebook</button>
                </form>
                <div>
                    <div style="padding-top:15px; font-size:85%" >
                        <hr/>
                        Don't have an account!
                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                            Sign Up Here
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-md-6 offset-md-3" id="signupbox"  style="display: none">
                <h3>Register</h3>
                <form role = "form" action = "" method = "post">
                    <div class="form-group ">
                        <label class="sr-only" for="formInputGroup">Username</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <input name="username" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" required="true">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="formInputGroup">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></div>
                            <input name="password" type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password" required="true">
                        </div>
                    </div>
                    <button name="register" type="submit" class="btn btn-mint">Register</button>
                </form>
                <div style="padding-top:15px; font-size:85%" >
                    <hr/>
                    Already have an account?
                    <a href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()">
                        Sign In Here
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container -->
<?php require("footer.html")?>