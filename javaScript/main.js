     function topScroll()
    {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }


    function openSlideMenu()
    {
        document.getElementById("slidebar").classList.toggle('active');
        var closeButton=document.getElementById("close");
        if(closeButton.style.display=="block")
            closeButton.style.display="none";
        else{
            closeButton.style.display="block";
        }
    }

    
    function openForm() {
        var login = document.getElementById('login');
            if(login.style.display == 'flex')
                login.style.display = 'none';
            else
                login.style.display = 'flex';
     }
    function CloseForm()
    {
        var login=document.getElementById('login');
        login.style.display='none';
    }   

    
    document.getElementById("forgot").onclick=function(){hideLogin()};
    document.getElementById("back_login").onclick=function(){showLogin()};

    function hideLogin(){
        var login=document.getElementById("login-form");
        var resetPassword=document.getElementById("reset-form");
        login.style.display='none';
        resetPassword.style.display='block';
    }    

    function showLogin()
    {
        var login=document.getElementById("login-form");
        var resetPassword=document.getElementById("reset-form");
        login.style.display='block';
        resetPassword.style.display='none';
    }
    
   $("#create").click(function() {
    $('html,body').animate({
        scrollTop: $(".sign").offset().top},'slow');
    });

    setTimeout(function() {
        $('#welcome').fadeOut('fast');
    }, 3000);

   


    

    

    