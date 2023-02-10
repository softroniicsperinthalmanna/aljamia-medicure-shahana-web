<?php
         include 'connect.php';
         $sql=mysqli_query($con,"SELECT * from ambul_tb inner join login_tb on ambulance_tb.log_id=login_tb.log_id inner join hospital_tb on ambulance_tb.hsptl_id=hospital_tb.hsptl_id;");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>admin panel</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;    
}

.user{
    position: relative;
    width: 50px;
    height: 50px;
}

.user img{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    border-radius: 50px;

}

.topbar{
    position: fixed;
    background: #fff;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 60px;
    padding: 0;
    display: grid;
    grid-template-columns: auto 30px 50px;
    grid-gap: 15px; 
    align-items: center;
    z-index: 1;
}

.logo h2{
    left: 10%;
}


.sidebar{
    position: fixed;
    top: 60px;
    width: 260px;
    height: calc(100% - 60px);
    background: #D9D9D9;
    overflow-x: hidden;
}
.sidebar ul{
    margin-top: 20px;
}

.sidebar ul li{
    width: 100%;
    list-style: none;
    
}

.sidebar ul li:hover{
    background: #6873A9;
}

.sidebar ul li a{
    width: 100%;
    text-decoration: none;
    color: #000000;
    height: 60px;
    display: flex;
    align-items: center;
}

.sidebar ul li a i{
    min-width: 60px;
    font-size: 24px;
    text-align: center;
    height: 35;
    width: 35;
}

.sidebar ul li a div{
    width: 289;
    height: 61;
}

.heading{
    position: absolute;
    top: 60px;
    width: calc(100% - 260px);
    left: 260px;
    display: grid;
    grid-template-columns: 10px 20px;
    grid-gap: 15px;
    padding: 25px 20px;
}

.main{
    position: absolute;
    top: 115px;
    width: calc(100% - 260px);
    left: 260px;
    min-height: calc(100vh - 60px);
    background: #f5f5f5;
}

img{
    width: 80px;
    height: 80px;
    border-radius: 50%;
}

.grid{
    top: 10px;
    display: grid;
    grid-template-columns: auto auto auto;
    padding: 10px;
    grid-gap: 5px;
}
.grid .item{
    text-align: center;
    padding: 20px;
}
</style>
</head>
<body>
   <div class="container">
    
      <div class="topbar">
        <div class="logo">
            <h2>Medicure</h2>
        </div>
        <a href="notification.html">
            <i class="fas fa-bell"></i>
            </a>
            <div class="user">
                <a href="edit.html">
                <img src="img.jpg" alt="">
                </a>
            </div>
      </div>
      <div class="sidebar">
        <ul>
            <li>
                <a href="admin.php">
                    <i class="fas fa-th-large"></i>
                    <div>Dashboard</div>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class="fas fa-user"></i>
                    <div>User</div>
                </a>
            </li>
            <li>
                <a href="hospital.php">
                    <i class="fas fa-hospital"></i>
                    <div>Hospital</div>
                </a>
            </li>
            <li>
                <a href="appointment.php">
                    <i class="far fa-calendar-alt"></i>
                    <div>Appointment</div>
                </a>
            </li>
            <li>
                <a href="rating.html">
                    <i class="fas fa-star"></i>
                    <div>Rating</div>
                </a>
            </li>
        </ul>
      </div>
      <div class="heading">
        <i class="fas fa-align-right"></i>
        <h3>Rating</h3>
      </div>
      <div class="main">
         <div class="grid-container">
            <div class="grid">
             <div class="item">
                 <img src="pro3.png" alt=""><br>
                 Aysha<br>
                 aysha1@gmail.com<br>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
             </div>
             <div class="item">
                <img src="pro2.jpg" alt=""><br>
                Shafna<br>
                shafna1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
            <div class="item">
                <img src="pro4.jpeg" alt="" ><br>
                Ashikh<br>
                ashikh1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
            <div class="item">
                <img src="pro2.jpg" alt=""><br>
                Raniya<br>
                raniya1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
            <div class="item">
                <img src="pro4.jpeg" alt=""><br>
                Ali<br>
                ali1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
            <div class="item">
                <img src="pro3.png" alt="" ><br>
                Aysha<br>
                aysha1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
            <div class="item">
                <img src="pro3.png" alt=""><br>
                Aysha<br>
                aysha1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
            <div class="item">
                <img src="pro3.png" alt=""><br>
                Aysha<br>
                aysha1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
            <div class="item">
                <img src="pro3.png" alt=""><br>
                Aysha<br>
                aysha1@gmail.com<br>
                <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="far fa-star"></i>
                 <i class="far fa-star"></i>
            </div>
          </div>
         </div>
      </div>
    </div> 
</body>
</html>