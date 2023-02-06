<?php
   require_once("connection.php");
    $sql = "SELECT * FROM services WHERE categoryID = '1'";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>172274P</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/services_res.css">
    
    
     <script>
            // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
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
    <section id="s_1">
        <h1>RESIDENTIAL CLEANING</h1>
    </section>
    
    <section id="plans">
        <table>
            <tr>
                <th>Service</th>
                <th>Price</th>
                <th>Duration</th>
            </tr>
            <?php 
            while($item = mysqli_fetch_assoc($result))
            {
            ?>
              <tr>
                <td><?php echo $item['serviceName'];?></td>
                <td><?php echo '$' . $item['price'];?></td>
                <td><?php echo $item['duration'];?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </section>
    <hr>
    
    <section id="s2">
        <h2>RESIDENTIAL CLEANING INCLUDES&#58;</h2>
        <div class="s3" id="pic">
            <div id="room">
                <img src="images/room_icon.png">
                <h3>Bedrooms and living room</h3>
                <ul>
                    <li>Wiping of furniture</li>
                    <li>Dusting and Wiping exterior of <br>electrical appliances</li>
                    <li>Cleaning and polishing of mirrors</li>
                    <li>Changing of bed linen</li>
                    <li>Vacuuming and mopping of floors</li>
                </ul>
            </div>
            <div id="kitchen">
                <img src="images/kitchen_icon1.png">
                <h3>Kitchen</h3>
                <ul>
                    <li>Wiping of cabinet (exterior)</li>
                    <li>Wiping of cooking stove and exterior<br> of cooking appliances</li>
                    <li>Disinfecting of basin</li>
                    <li>Vacuuming and mopping of floors</li>
                </ul>
            </div>
        </div>
        <div class="s3" id="pic1">
             <div id="bathroom">
                <img src="images/bathroom_icon.png">
                 <h3>Bathrooms</h3>
                <ul>
                    <li>Cleaning and disinfecting of bathtub,<br> basin and toilet bowl</li>
                    <li>Cleaning and polishing of mirrors</li>
                    <li>Washing of toilet floor and walls</li>
                </ul>
            </div>
            <div id="others">
                <img src="images/others.png">
                 <h3>Others</h3>
                <ul>
                    <li>Emptying of trash</li>
                    <li>Cleaning of windows and grills</li>
                    <li>Wiping and cleaning of all ceiling fans<br> and lights</li>
                    <li>Ironing of clothes</li>
                </ul>
            </div>
        </div>
        
        <p>&#42;Cleaning of windows and grills and ironing of clothes <b>will not be included</b> in One time off cleaning session  due to time constraint.</p>
    </section>
    
   <footer>
        <p id="f1">Contact Number: 9114 1368 </p>
        <p id="f3">Email: 172274P&#64;mymail.nyp.edu.sg</p>
        <p id="f2">&copy;Copyright_172274P </p>
    </footer>
</body>
</html>