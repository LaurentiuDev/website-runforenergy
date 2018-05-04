<?php
    session_start();
?>
<?php
    include_once 'head.php';
?>
<body>

    <?php
        include_once 'header.php';
    ?>


    <div id="login" class="login-services">
            <button id="closeForm" onclick="CloseForm()">X</button>
            <h1>LOGIN</h1>
            <?php 
           $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
           if(strpos($fullUrl,"login=userIncorrect")==true)
           {
            echo '<p class="error">User not exist</p>';

           }elseif(strpos($fullUrl,"login=wrongPassword")==true)
           {
            echo '<p class="error">Incorrect password</p>';
           
           }elseif(strpos($fullUrl,"login=emptyfield")==true)
           {
            echo '<p class="error">All fieds are required</p>';
            
           }
        ?>
            <form action="includes/login.inc.php" method="POST" id="login-form">
                <input type="text" name="login-username" placeholder="Username"><br>
                <input type="password" name="login-password" placeholder="Password"><br>
                <button type="submit" name='Login'>SIGN IN</button><br>
                <a id="create" href="login.php">Don't have an account?<br> Sign Up</a><br><br>
                <a href="#" id="forgot">Forgot password?</a>
            </form>

             <form action="includes/login.inc.php" method="POST" id="reset-form">
                <p>Reset password</p>
                <input type="text" name="email-reset" placeholder="Email"><br>
                <button type="submit" name='Login'>RESET PASSWORD</button><br><br>
                <a href="#" id="back_login">Back to login?</a>
                </form>
    </div>
    <div class="clearfix"></div>

    <div class="container-services">
       <h1 id="services-title">SERVICES</h1>
    </div>
   
    <div id="container">

            <div class="row">

                <div class="col-sm-3 col1" >
                <h1>Personal Training</h1>
                <p><span>Work with a personal trainer to set challenging fitness goals and achieve them step by step.</span></p>
               
                </div>

                <div class="col-sm-3 col2">
                <h1>Group Training</h1>
                <p><span>Train in effective, energizing and affordable groups of four to eight people.</span></p>
                </div>

                <div class="col-sm-3 col3">
                <h1>Yoga</h1>
                <p><span>Discover various benefits of yoga, a combination of strength, balance, and flexibility.</span></p>
                    
                </div>

                <div class="col-sm-3 col4">
                <h1>Massage Theraphy</h1>
                <p><span>Swedish, deep tissue, Thai, and many more invigorating options.</span></p>
                        
                </div>
            </div>
       
    </div>
    <div id="prices">
        <h1 id="pricing">PRICING</h1>
        <h2>Basic : <span class="price"><i class="fas fa-dollar-sign"></i>77</span> per month</h2>
        <h2>Cardio Comfort : <span class="price"><i class="fas fa-dollar-sign"></i>100</span> per month</h2>
        <h2>Wellness : <span class="price"><i class="fas fa-dollar-sign"></i>130</span> per month</h2>
    </div>
   
  
    <?php
        include_once 'footer.php';

    ?>
    <div class="clearfix"></div>
    
    <script src="javaScript/main.js"></script>
    
</body>
</html>