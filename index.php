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
    <div id="login">
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
            <a id="create" href="#">Don't have an account?<br> Sign Up</a><br><br>
            <a href="#" id="forgot" >Forgot password?</a>  
        </form>

        <form action="includes/login.inc.php" method="POST" id="reset-form">
            <p>Reset password</p>
            <input type="text" name="email-reset" placeholder="Email"><br>
            <button type="submit" name='Login' >RESET PASSWORD</button><br><br>
            <a href="#" id="back_login">Back to login?</a>  
        </form>

    </div>
   
    <div class="slideshow-container">
        <div class="slider fade">
            <img src="image/slide4.jpg" alt="slide2" >
        </div>

        <div class="slider fade">
            <img src="image/slide3.jpg" alt="slide3" >
        </div>

        <div class="slider fade">
            <img src="image/slide2.jpg" alt="slide4" >
        </div>

        <div class="slider fade">
            <img src="image/slide5.jpg" alt="slide5" >
        </div>

        <div class="slider fade">
            <img src="image/slide6.jpg" alt="slide6" >
        </div>    

        <div class="slider fade">
            <img src="image/slide7.jpg" alt="slide7" >
        </div>

        <a class="prev" onclick="plusSlides(-1)" style="color:white;">&#10094;</a>
        <a class="next" onclick="plusSlides(1)" style="color:white;">&#10095;</a>
    </div>
   
    <?php
         if(isset($_SESSION['u_id']))
         {
            echo '<h1 id="welcome">Welcome to my website, '.$_SESSION['u_fullname'].'</h1>';
         }else
         {
             echo '<div class="sign up">
             <h1>Sign Up</h1>
             <hr id="horizontal-line">
             <form id="registration_form" action="includes/signup.inc.php" method="POST" >
                 <input type="text" id="name" name="Name" placeholder="Name"><br><span class="error_form" id="fullname_error_message"></span><br>
                 <input type="text" id="email" name="Email" placeholder="Email"><br><span class="error_form" id="email_error_message"></span><br>
                 <input type="text" name="username" id="Username" placeholder="Username"><br><span class="error_form" id="username_error_message"></span><br>
                 <input type="password" id="password" name="Password" placeholder="Password"><br><span class="error_form" id="password_error_message"></span><br>
                 <input type="password" id="retype_password" name="retype_password" placeholder="Retype password"><br><span class="error_form" id="retype_password_error_message"></span>
                 <label for="location" id="location" name="Location">Location</label><br>
                 <select id="Chooselocation" name="Location">
                     <option value="hayes Valley">Hayes Valley</option>
                     <option value="mission">Mission</option>
                     <option value="Nob Hill Bush St.">Nob Hill Bush St.</option>
                     <option value="Polk Street">Polk Street</option>
                     <option value="Inner Richmond">Inner Richmond</option>
                     <option value="Fairmont Nob Hill">Fairmont Nob Hill</option>
                 </select>
                 
                 <br>
                 <button type="submit" id="send" name="submit" >Send</button>
                 <br><span id="mail_is_sent"></span><br>
             </form>
         </div>';
         }
    ?>

    <?php
        include_once 'footer.php';

    ?>

    <script src="javaScript/main.js"></script>
    <script src="javaScript/slidebar.js"></script>
    <script src="javaScript/validate.js"></script>
</body>
</html>