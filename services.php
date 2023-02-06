<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>172274P</title>
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/global.css">
     <script>
            // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            
            function openSlideMenu(){
               document.getElementById('side-menu').style.width='250px';
            }

            function closeSlideMenu(){
               document.getElementById('side-menu').style.width='0';
            }
    </script> 
</head>
<body>
    <nav>
        <div id="nav1">
            <a href="index.php"><img src="images/desktop/Logo.png" alt="home" title="home"></a>
        </div>
        <div id="nav2">
            <input type="text" name="Search" placeholder="Search">
        </div>
        
        <?php
            session_start();
            if(isset($_SESSION['MM_Username']))
            {
        ?>
               <button id="out"><a href="logout.php">LOGOUT</a></button> 
        <?php
            }else
            {
         ?>       
            <div id="nav3">
            <button id="rbtn" style="width:auto;"><a href="register.php">REGISTER</a></button>
            <button id="lbtn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">LOGIN</button>

             <div id="id02" class="modal">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <form class="modal-content" method="post" action="checklogin.php">
                <div class="container">
                  <h1>Login</h1>
                  <label><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" required>

                  <label><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="pswd" required>
                 
                  <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">CANCEL</button>
                    <button type="submit" class="signupbtn">LOGIN</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
        <?php
            }
        ?>
   
        <ul id="nav4">
            <li><a class="navi" href="index.php" title="HOME">HOME </a></li>
            <div class="dropdown">
                <li><a class="navi" id="services" href="services.php" title="SERVICES">SERVICES</a></li>
                 <div class="dropdown-content">
                    <a href="services_res.php">Residential Cleaning</a>
                    <a href="services_spring.php">Spring Cleaning</a>
                    <a href="services_office.php">Office Cleaning</a>
                    <a href="services_move.php">Move in/ out Cleaning</a>
                </div>
            </div>
            <li><a id="book" href="booking.php" title="BOOKING">BOOKING</a></li>
            <li><a href="profile.php">PROFILE</a></li>
        </ul>
    </nav>
    
    <nav class="navbar">
        <span class="open-slide">
            <a href="#" onclick="openSlideMenu()">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                    <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                    <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                </svg>
            </a>
        </span>
    
    </nav>
    
    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
        <a href="index.php">HOME</a>
        <a href="services.php">SERVICES</a>
        <a href="booking.php">BOOKING</a>
        <a href="profile.php">PROFILE</a>
    </div>
    
     <section id="s1">
         <h3>OUR SERVICES</h3>
    </section>
    
    <section>
        <div id="s2">
            <div class="flex">
                <a href="services_res.php"><img src="images/rc_3.JPG"></a>
                <h4>RESIDENTIAL CLEANING</h4>
            </div>
            <div class="flex">
                <a href="services_spring.php"><img src="images/sc.jpg"></a>
                <h4>SPRING CLEANING</h4>
            </div>
        </div>
        <div id="s3">
           <div class="flex">
               <a href="services_office.php"><img src="images/oc.jpg"></a>
               <h4>OFFICE CLEANING</h4>
            </div>
            <div class="flex">
                <a href="services_move.php"><img src="images/pr.jpg"></a>
                <h4>MOVE IN/OUT CLEANING</h4>
            </div>
        </div>
    </section>
    
    <footer>
        <p id="f1">Contact Number: 9114 1368 </p>
        <p id="f3">Email: 172274P&#64;mymail.nyp.edu.sg</p>
        <p id="f2">&copy;Copyright_172274P </p>
    </footer>
    
</body>
</html>