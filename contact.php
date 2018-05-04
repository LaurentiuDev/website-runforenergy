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
    
    <div id="login" class="login-contact">
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
            <a href="#" id="forgot" >Forgot password?</a>  
        </form>

        <form action="includes/login.inc.php" method="POST" id="reset-form">
            <p>Reset password</p>
            <input type="text" name="email-reset" placeholder="Email"><br>
            <button type="submit" name='Login'>RESET PASSWORD</button><br><br>
            <a href="#" id="back_login">Back to login?</a>  
        </form>

    </div>
    
    
    <div id="map"></div>

    <div  class="contact-mail">
        <form action="contact.php" method="POST" id="contact-email">
            <label>Name</label><span id="name_error_message"></span><br>
            <input type="text" id="name" name="Name"><br>
            <label>Email</label><span id="email_error_message"></span><br>
            <input type="text" id="email" name="email"><br>
            <label>Subject</label><br>
            <input type="text" id="subject" name="subject"><br>
            <label>Message</label><br>
            <textarea name="message" id="message" cols="60" rows="5"></textarea>
            <button type="submit" name='sent'>Sent</button>
            <span id="sent-contact"></span>
            <?php
                if(isset($_POST['sent']))
                {
                    $name=$_POST['Name'];
                    $email=$_POST['email'];
                    $subject=$_POST['subject'];
                    $message=$_POST['message'].PHP_EOL.'Name : '.$name.PHP_EOL.'Email: '.$email;
                    
                    mail('dobresculaurentiu20@gmail.com',$subject,$message);
                    echo '<p>Mesaj trimis</p>';
                }


        ?>
        </form>
    </div>



    <?php
        include_once 'footer.php';

    ?>
    <script>
       function initMap(){
           var location= {lat:-25.363 , lng:131.044};
           var map= new google.maps.Map(document.getElementById("map"),{
               zoom:4,
               center:location
           });
       }
    </script>
    <script src="javaScript/main.js"></script>
    <script src="javaScript/validateContact.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjBziSjttUTzeeT18fj464vpZQ1mTIkOU&callback=initMap"></script>
</body>