<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>172274P</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" type="text/css" media="only screen and (max-width:800px)" href="css/index_tablet.css"/>
    <link rel="stylesheet" type="text/css" media="only screen and (max-width:480px)" href="css/index_mobile.css"/>
    
    <script>
            // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            //FOR MOBILE 
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
           <form action="services.php">
               <input type="text" name="Search" placeholder="Search">
<!--               <button id="find">Search</button>-->
           </form>
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
            <li><a class="navi" id="home" href="index.php" title="HOME">HOME </a></li>
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
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
        <figure></figure>
     </section>
    
    <section id="s2">
        <h3>HOW IT WORKS:</h3>
        
        <div id="flexcontainer">
           <div class="flex">
               <img src="images/desktop/DESKTOP%20-%20C.png" title="choose" alt="choose">
               <p>1. Choose Your Cleaning Plan</p>
               <p>Choose the suitable cleaning<br> plan.</p>
           </div>
           <div class="flex">
               <img src="images/desktop/desktop%20-%20date_time.png" title="date" alt="date">
               <p>2. Choose Your Cleaning Date &amp; Time.</p>
               <p>Choose the suitable cleaning <br>date and time.</p>
           </div>
           <div class="flex1">
               <img src="images/desktop/desktop%20-%20pay.png" title="pay" alt="pay">
               <p>3. Pay Securely</p>
               <p>Pay securely online and manage<br> the booking. </p>
           </div>
           <div class="flex1">
               <img src="images/desktop/desktop%20-%20enjoy.png" title="enjoy" alt="enjoy">
               <p>4. Enjoy The Service</p>
               <p>Enjoy a clean and comfortable <br>home.</p>
           </div>
        </div>
    </section>  
    
    <section id="s3">
       <div id="s3_1">
           <img src="images/desktop/story.png" title="about" alt="abt">
       </div>
        <div id="s3_2">
            <h3>WHY CHOOSE US?</h3>
            <p>Helping Hand is an online platform that enables <br>customers to book reliable house cleaning services <br>in Singapore.</p>

            <p>With Helping Hand, you can book a home helper or office <br>cleaner in less than a minute, freeing up your time for <br>the more important things in life.</p>

            <p>With Helping Hand, you are only ever a few clicks away <br>from a sparkling clean home. Our customer website <br>allows you to manage your bookings and payments <br>easily.</p>
        </div>
    </section>
    
    <section id="s5">
        <h3>SPECIAL OFFERS</h3>
        <div id="s5_1">
             <img id="c" src="images/CO.png" alt="offers" title="offers">
            <img id="n" src="images/ND.png" alt="offers" title="offers">
        </div>
    </section>
    
    <section id="s4">
        <a href="booking.php" title="booking">BOOK NOW</a>
    </section>
    
    <footer>
        <p id="f1">Contact Number: 9114 1368 </p>
        <p id="f3">Email: 172274P&#64;mymail.nyp.edu.sg</p>
        <p id="f2">&copy;Copyright_172274P </p>
    </footer>
</body>
</html>