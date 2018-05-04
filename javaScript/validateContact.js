$(function()
{
        $("#name_error_message").hide();
        $("#email_error_message").hide();
        var error_name=false;
        var error_email=false;
        $("#name").keyup(function(){
            check_name();
        });

        $("#email").keyup(function(){
            check_email();
        });

        function check_name()
        {
            var name_length = $("#name").val().length;

            if(name_length<5 || name_length>20)
            {
                $("#name_error_message").html("Should be between 5-20 characters");
                $("#name_error_message").show();
                var error_name=true;
            }else{
                $("#name_error_message").hide(); 
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
        $("#contact-email").submit(function(){
            error_name=false;
            error_email=false;
            check_name();
            check_email();
            var subject_length = $("#subject").val().length;
            var message_length = $("#message").val().length;

            if(error_name==false && error_email==false && subject_length>0 && message_length>0)
            {
                return true;
            }else
            {
                $("#sent-contact").html("All fields are required");
                $("#sent-contact").show();
                return false;
            }

        });

});