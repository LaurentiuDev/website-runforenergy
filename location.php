<?php
    session_start();
?>
<?php
    include_once 'head.php';
?>
<body id="location-page">

    <?php
        include_once 'header.php';
    ?>

    <div id="login" class="login-location">
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
                <a id="create" class="create-location" href="login.php">Don't have an account?<br> Sign Up</a><br><br>
                <a href="#" id="forgot">Forgot password?</a>
            </form>
            <form action="includes/login.inc.php" method="POST" id="reset-form">
            <p>Reset password</p>
            <input type="text" name="email-reset" placeholder="Email"><br>
            <button type="submit" name='Login'>RESET PASSWORD</button><br><br>
            <a href="#" id="back_login">Back to login?</a>  
             </form>
        </div>
        
    <br><br><br>
    <div id="title-section">
        <h1>Location</h1>
    </div>

    <div id="main-layout-full">
        <div id="post">
            <div id="column1">
                <div class="event-wrapper">
                   <img src="image/location1.jpg" alt="">
                   <h4><a href="#">Hayes Valley</a></h4>
                   <p>301 Fell Street at Gough <br>
                        Mon-Sun: 5:30am-11:00pm<br>
                        (415) 525-4364
                    </p>
                </div>
                
            </div>

            <div id="column2">
                    <div class="event-wrapper">
                            <img src="image/location2.jpg" alt="">
                            <h4><a href="#">Valencia</a></h4>
                            <p>675 Valencia St. <br>
                                    Mon-Sun: 5:30am-11:00pm <br>
                                    (415) 641-4200
                             </p>
                     </div>
            </div>

            <div id="column3">
                    <div class="event-wrapper">
                            <img src="image/location3.jpeg" alt="">
                            <h4><a href="#">Nob Hill</a></h4>
                            <p>1094 Bush St. <br>
                                    Mon-Sun: 5:30am-11:00pm <br>
                                    (415) 525-3454
                             </p>
                    </div>
            </div>

            <div id="column4">
                    <div class="event-wrapper">
                            <img src="image/location4.jpg" alt="">
                            <h4><a href="#">Polk Street</a></h4>
                            <p>1630 Polk St. <br>
                                    Mon-Sun: 5:00am-11:00pm <br>
                                    (415) 923-5853
                             </p>
                    </div>
            </div>

        </div>
    </div>
   
    <?php
        include_once 'footer.php';

    ?>
  
    <script src="javaScript/main.js"></script>
</body>
</html>