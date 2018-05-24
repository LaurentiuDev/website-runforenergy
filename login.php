<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>GYM & Fitness</title>
</head>
<body style="color:#ff8080;">
    
<div class="sign up">
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
         </div>

     <script src="javaScript/validate.js"></script>
</body>
</html>