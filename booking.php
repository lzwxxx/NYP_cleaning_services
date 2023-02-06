<?php
    session_start();

    //CONNECT
    require_once("connection.php");
    if(isset($_GET['fail']))
    {
        echo "<script type='text/javascript'>alert('Please login first!');</script>";
    }

    if(isset($_SESSION['MM_Username'])) //for view booking
    {
        //SPECIFY
        $u = $_SESSION['MM_Username'];
        $sql = "SELECT * FROM booking WHERE username='$u'";
        //DO IT
        $result = mysqli_query($conn, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>172274P</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/booking.css"/>
    <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.theme.css">
    <link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        
    // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            } 
            
      $( function() {
//            $( "#tabs" ).tabs();
//            $( "#datepicker" ).datepicker();
          
            $('.links').on("click", function(event){
                event.preventDefault();
                
                var selection = $(this).html();
                
                switch(selection)
                {
                    case "MAKE A RESERVATION" :
                        $('#s3').show();
                        $('#s4').hide();
//                        $('#s5').hide();
                        break;
                    case "VIEW/ EDIT BOOKING" :
                        $('#s3').hide();
                        $('#s4').show();
//                        $('#s5').hide();
                        break;
//                    case "EDIT BOOKING" :
//                        $('#s5').show();
//                        $('#s4').hide();
//                        $('#s3').hide();
//                        break;
                    default:
                        $('#s3').show();
                        $('#s4').hide();
                        break;
                }
            });
          
            $('#category').change(function(){
                var val = $(this).val();
                $('#select option').hide();
                if (val == "residentialcleaning")
                    {
                        $(".cat1").show();
                    }
                else if (val == "springcleaning")
                    {
                        $(".cat2").show();
                    }
                else if (val == "officecleaning")
                    {
                        $(".cat3").show();
                    }
                else if (val == "movein/outcleaning")
                    {
                        $(".cat4").show();
                    }
            });
      } );
        
    </script>
</head>
<body>
    <nav>
        <div id="nav1">
            <a href="index.php"><img src="images/desktop/Logo.png" alt="home" title="home"></a>
        </div>
        <div id="nav2">
            <form action="booking.php">
               <input type="text" name="search" placeholder="Search">
<!--               <button id="find">Search</button>-->
           </form>
        </div>
        
       <?php
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
              <form class="modal-content" method="get" action="checklogin.php">
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
                <li><a class="navi" href="services.php" title="SERVICES">SERVICES</a></li>
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
    
    <section id="s1">
        <h1>BOOK NOW</h1>
    </section>
    
    <section id="s2">
        <a href="#" class="links" id="make">MAKE A RESERVATION</a>
        <a href="#" class="links" id="view">VIEW/ EDIT BOOKING</a>
<!--        <a href="#" class="links" id="edit">EDIT BOOKING</a>-->
    </section>
    
    <section id="s3">
                <form method="post" action="insertbooking.php">
                   <label>Category:</label>
                    <select name="category" id="category">
                        <option value="none">Select Category</option>
                        <option value="residentialcleaning">Residential Cleaning</option>
                        <option value="springcleaning">Spring Cleaning</option>
                        <option value="officecleaning">Office Cleaning</option>
                        <option value="movein/outcleaning">Move In/Out Cleaning</option>
                    </select>
                    
                    <label id="service">Service:</label>
                    <select id="select" name="service">
                       <option value="none">Select Service</option>
                        <option class="cat1" value="2 Rooms (<650sqft) - 1 cleaner">RC - 2 rooms &#40;&lt;&nbsp;650sqft&#41; - 1 cleaner</option>
                        <option class="cate1" value="3 Rooms (650sqft - 899sqft) - 1 cleaner">RC - 3 rooms &#40;650sqft&nbsp;&#45;&nbsp;899sqft&#41; - 1 cleaner</option>
                        <option class="cat1" value="4 Rooms (900sqft - 1009sqft) - 2 cleaners">RC - 4 rooms &#40;900sqft&nbsp;&#45;&nbsp;1009sqft&#41;  - 2 cleaners</option>
                        <option class="cat1" value="5 Rooms (1100sqft - 1299sqft) - 2 cleaners">RC - 5 rooms &#40;1100sqft&nbsp;&#45;&nbsp;1299sqft&#41;  - 2 cleaners</option>
                        <option class="cat1" value="Mansionette/ Executive (>1300sqft) - 3 cleaners">RC - Mansionette&nbsp;/&nbsp;Executive&nbsp;&#40;&gt;1300sqft&#41;  - 3 cleaners</option>
                        
                        <option class="cat2" value="2 Rooms (<650sqft) - 1 cleaner">SC - 2 rooms &#40;&lt;&nbsp;650sqft&#41; - 1 cleaner</option>
                        <option class="cat2" value="3 rooms (650sqft - 899sqft) - 2 cleaners">SC - 3 rooms &#40;650sqft&nbsp;&#45;&nbsp;899sqft&#41; - 2 cleaners</option>
                        <option class="cat2" value="4 rooms (900sqft - 1009sqft) - 3 cleaners">SC - 4 rooms &#40;900sqft&nbsp;&#45;&nbsp;1009sqft&#41;  - 3 cleaners</option>
                        <option class="cat2" value="5 rooms (1100sqft - 1299sqft) - 3 cleaners">SC - 5 rooms &#40;1100sqft&nbsp;&#45;&nbsp;1299sqft&#41;  - 3 cleaners</option>
                        <option class="cat2" value="Mansionette/ Executive (>1300sqft) - 4 cleaners">SC - Mansionette&nbsp;/&nbsp;Executive&nbsp;&#40;&gt;1300sqft&#41;  - 4 cleaners</option>
                        
                        <option class="cat3" value="Once Weekly (10 staffs and below) - 2 cleaners">OC - Once Weekly &#40;10 staffs and below&#41; - 2 cleaners</option>
                        <option class="cat3" value="Once Weekly (20 staffs and below) - 3 cleaners">OC - Once Weekly &#40;20 staffs and below&#41; - 3 cleaners</option>
                        <option class="cat3" value="Once Weekly (30 staffs and below) - 4 cleaners">OC - Once Weekly &#40;30 staffs and below&#41; - 4 cleaners</option>
                        
                        <option class="cat4" value="2 rooms (<650sqft) - 2 cleaners">MC - 2 rooms &#40;&lt;&nbsp;650sqft&#41; - 2 cleaner</option>
                        <option class="cat4" value="3 rooms (650sqft - 899sqft) - 2 cleaners">MC - 3 rooms &#40;650sqft&nbsp;&#45;&nbsp;899sqft&#41; - 2 cleaners</option>
                        <option class="cat4" value="4 rooms (900sqft - 1009sqft) - 3 cleaners">MC - 4 rooms &#40;900sqft&nbsp;&#45;&nbsp;1009sqft&#41;  - 3 cleaners</option>
                        <option class="cat4" value="5 rooms (1100sqft - 1299sqft) - 3 cleaners">MC - 5 rooms &#40;1100sqft&nbsp;&#45;&nbsp;1299sqft&#41;  - 3 cleaners</option>
                        <option class="cat4" value="Mansionette/ Executive (>1300sqft) - 4 cleaners">MC - Mansionette&nbsp;/&nbsp;Executive&nbsp;&#40;&gt;1300sqft&#41;  - 4 cleaners</option>
                    </select>
                    <br><br>
                    
                    <label>Date:</label>
                    <input type="date" name="datepicker" id="datepicker" placeholder="Select Suitable Date">
                    <br><br>
                    
                    <label>Time:</label>
                    <select name="time">
                        <option value="none">Select Suitable Timing</option>
                        <option value="7:00">7:00am</option>
                        <option value="8:00">8:00am</option>
                        <option value="9:00">9:00am</option>
                        <option value="10:00">10:00am</option>
                        <option value="11:00">11:00am</option>
                        <option value="12:00">12:00pm</option>
                        <option value="13:00">1:00pm</option>
                        <option value="14:00">2:00pm</option>
                        <option value="15:00">3:00pm</option>
                        <option value="16:00">4:00pm</option>
                        <option value="17:00">5:00pm</option>
                    </select>
                     <br><br><br>
                     
                    <button id="submit">SUBMIT</button>
                </form>
    </section>
    
    <section id="s4">
        <form method="post">
            <table>
                <tr>
                    <th>Category</th>
                    <th>Services</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Cancel?</th>
                    <th>Update?</th>
                    <th>Attended?</th>
                </tr>
                <?php
                if(isset($_SESSION['MM_Username']))
                {
                while($oneItem = mysqli_fetch_assoc($result))
                 {   
                ?>
                        <tr>
                           <td><?php echo $oneItem['categoryName'];?></td>
                            <td><?php echo $oneItem['serviceName'];?></td>
                            <td><?php echo $oneItem['date'];?></td>
                            <td><?php echo $oneItem['time'];?></td>
                            <td><?php echo $oneItem['status'];?></td>
                            <td>
                                <form method="post" action="delete.php">
                                   <input type="submit" name="cancel" value="CANCEL">
                                    <input type="hidden" name="id" value="<?php echo $oneItem['bookingID'];?> ">
                                </form>
                            </td>
                            <td>
                                <form method="post" action="update_booking.php" id="update">
                                    Date:
                                    <input type="date" name="udate">
                                    <br>
                                    Time:
                                    <select name="utime">
                                        <option value="none">Select Suitable Timing</option>
                                        <option value="7:00">7:00am</option>
                                        <option value="8:00">8:00am</option>
                                        <option value="9:00">9:00am</option>
                                        <option value="10:00">10:00am</option>
                                        <option value="11:00">11:00am</option>
                                        <option value="12:00">12:00pm</option>
                                        <option value="13:00">1:00pm</option>
                                        <option value="14:00">2:00pm</option>
                                        <option value="15:00">3:00pm</option>
                                        <option value="16:00">4:00pm</option>
                                        <option value="17:00">5:00pm</option>
                                    </select>
                                    <br>
                                    <button class="btn">UPDATE</button>
                                    <input type="hidden" name="id" value="<?php echo $oneItem['bookingID'];?> ">
                                </form>
                            </td>
                            <td>
                                <form method="post" action="update_attended.php">
                                    <input type="submit" name="yes" value="YES">
                                    <input type="hidden" name="id" value="<?php echo $oneItem['bookingID'];?> ">
                                </form>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

            </table>
        </form>
    </section>

    <footer>
        <p id="f1">Contact Number: 9114 1368 </p>
        <p id="f3">Email: 172274P&#64;mymail.nyp.edu.sg</p>
        <p id="f2">&copy;Copyright_172274P </p>
    </footer>
</body>
</html>