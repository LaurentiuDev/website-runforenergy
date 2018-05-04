<header id="header">
        
        <img src="image/logo2.png" alt="logo2" >
        <span class="open-slide">
                <a href="#" onclick="openSlideMenu()">
                  <svg width="30" height="30">
                      <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                      <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                      <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                  </svg>
                </a>
        </span>
             
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="location.php">Location</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                    if(isset($_SESSION['u_id']))
                        echo '<li><a id="Logout" href="includes/logout.php"><i class="fas fa-mobile-alt"></i>&nbspLogout</a></li>';
                    else
                        echo '<li><a id="SignUp" href="#SignUp" onclick="openForm()" ><i class="fas fa-mobile-alt"></i>&nbspSign in/Sign Up</a></li>';
                ?>
            </ul>
            <?php
                if(isset($_SESSION['u_id']))
                    echo '<a id="logout-phone" href="includes/logout.php"><i class="fas fa-sign-out-alt"></i></a>';
                else
                    echo '<span id="login-phone" onclick="openForm()"><i class="fas fa-cogs"></i></span>';
            
            ?>
             
            
            <span id="close" onclick="openSlideMenu()">X</span>
            <div id="slidebar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="location.php">Location</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

    </header>