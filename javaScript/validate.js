$(function()
    {
        $("#fullname_error_message").hide();
        $("#email_error_message").hide();
        $("#username_error_message").hide();
        $("#password_error_message").hide();
        $("#retype_password_error_message").hide();

        var error_name=false;
        var error_password=false;
        var error_retype_password=false;
        var error_email=false;
        var error_username=false;

        
        $("#name").keyup(function(){
            check_name();
        });

        $("#email").keyup(function(){
            check_email();
        });

        $("#Username").keyup(function(){
            check_username();
        });

        $("#password").keyup(function(){
           check_password();
        });

        $("#retype_password").keyup(function(){
            check_retype_password();
        });
       
        function check_name()
        {
            var name_length = $("#name").val().length;

            if(name_length<5 || name_length>20)
            {
                $("#fullname_error_message").html("Should be between 5-20 characters");
                $("#fullname_error_message").show();
                var error_name=true;
            }else{
                $("#fullname_error_message").hide(); 
            }
        }

        function check_username(){
            var username_length = $("#Username").val().length;

            if(username_length<5 || username_length>20){
                $("#username_error_message").html("Should be between 5-20 characters");
                $("#username_error_message").show();
                error_username=true;  
            }else{
                $("#username_error_message").hide();
            }
        }

        function check_password(){
            var password_length=$("#password").val().length;

            if(password_length<8)
            {
                $("#password_error_message").html("At least 8 characters");
                $("#password_error_message").show();
                error_password=true;
            }else{
                $("#password_error_message").hide();
            }
        }

        function check_retype_password(){
            var password=$("#password").val();
            var retype_password=$("#retype_password").val();

            if(password!= retype_password)
            {
                $("#retype_password_error_message").html("Passwords don't match");
                $("#retype_password_error_message").show();
                error_retype_password=true;
            }else{
                $("#retype_password_error_message").hide();
            }
        }



        function check_email()
        {
            var pattern=new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
            
            if(pattern.test($("#email").val())){
                $("#email_error_message").hide();
            }
            else{
                    $("#email_error_message").html("Invalid email address");
                    $("#email_error_message").show();
                    error_email=true;
                }
        }

    $("#registration_form").submit(function(){
        error_name=false;
        error_email=false;
        error_username=false;
        error_password=false;
        error_retype_password=false;

        check_name();
        check_email();
        check_username();
        check_password();
        check_retype_password();
      
        
        if(error_name==false && error_email==false && error_username==false && error_password==false && error_retype_password==false)
        {
            $("#mail_is_sent").html("Account is created");
            $("#mail_is_sent").show(3000);
            return true;
        }else{
            $("#mail_is_sent").html("All fields are required");
            $("#mail_is_sent").show();
            return false;
        }
    
    });
});