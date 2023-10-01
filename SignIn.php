 <script> 
    function display1(){
       
        document.getElementById("signup").style.display="none";
        document.getElementById("signin").style.display="block";
    }
    function display2(){
       
        document.getElementById("signin").style.display="none";
        document.getElementById("signup").style.display="block";
    }
</script>
<section class="resume-section" id="awards">
    <div class="resume-section-content" style="display: none;" id="signup">
                    <h2 class="mb-5">Sign Up</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <form action="Action/UserAction.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="hidden" name="admin_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="adminname">Enter Name</label>
                                        <input type="text" name="admin_name" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="adminpass">Enter Password</label>
                                        <input type="password" name="admin_pass" class="form-control"/>
                                    </div>
                                       <div class="form-group">
                                        <label for="adminemail">Enter Email</label>
                                        <input type="email" name="admin_Email" class="form-control"/>
                                       </div>
                                    <div class="form-group">
                                        <label for="image">select profile picture</label>
                                        <input type="file" name="file" id="admin_img" class="form-control"/>
                                       </div>
                                    
                                    <br>
                                       <input type="submit" value="Sing Up" class="form-control" name="singup"/>
                                       <a onclick="display1()">Already User Signin</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    
     <div class="resume-section-content" style="" id="signin">
                    <h2 class="mb-5">Sign In</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <form action="Action/UserAction.php" method="POST">
                                     <div class="form-group">
                                        <label for="adminemail">Enter Email</label>
                                        <input type="email" name="admin_Email" class="form-control"/>
                                       </div><br>
                                    <div class="form-group">
                                        <label for="adminpass">Enter Password</label>
                                        <input type="password" name="admin_pass" class="form-control"/>
                                    </div>
                                      
                                       <input type="submit" value="SingIn" class="form-control" name="SignIn"/>
                                       <a onclick="display2()">New User SignUp</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</section>
   <?php
   
   ?>
