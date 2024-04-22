<?php
  include('connect.php');
  if(!isset($_SESSION)){
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Box</title>
    <link rel="shortcut icon" href="./Images/Create.png" type="image/x-icon">
   
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script>
      //To check whether both the passwords match
      function checkPassword(form){
          password1 = form.password1.value;
          password2 = form.password2.value;

            if(password1==''){
            Swal.fire({
                    title: "Please enter Password",
                    icon: 'error',
                    allowOutsideClick:false,
                    confirmButtonText : 'Ok',
                    confirmButtonColor: 'rgb(69, 192, 58)',
                  })
                }
            else if(password2==''){
            Swal.fire({
                    title: "Please enter Confirm Password",
                    icon: 'error',
                    allowOutsideClick:false,
                    confirmButtonText : 'Ok',
                    confirmButtonColor: 'rgb(69, 192, 58)',
                  })
                }
            else if(password1!=password2){
              Swal.fire({
                    title: "Passwords doesn't match",
                    icon: 'error',
                    allowOutsideClick:false,
                    confirmButtonText : 'Ok',
                    confirmButtonColor: 'rgb(69, 192, 58)',
                  })
              
            }
            else{
            return true;
           }
          return false;
        }
      
    </script>
<style>
*{
    margin:0;
    padding: 0;
    font-family: 'cursive';
}
#nav-menu ul{  
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.nav_content{
    position: absolute;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    top:0;
    left:0;
    width: 100%;
    z-index: 1;
    background-color: rgba(65,186,216,0.55);
}
header img{
    width: 75px;
    box-sizing:border-box;
    margin:5px 10px;
    text-decoration: none;
}
li a{
    display: block;
    color: white;
    text-align: center;
    font-size: 1.5em;
    padding: 20px 20px;
    text-decoration: none;
    font-weight: bold;
}
li a:hover,li div:hover{
    background-color: rgb(224, 174, 37);
}
.welcome_msg{
    position: absolute;
    top: 150px;
    left: 20em;    
}
h1{
    font-weight: bolder;
    color: rgb(65, 186, 216);
    font-style: normal;
    text-align: center;
    margin-top: 140px;
    font-size: 70px;
    font-family: cursive;
}
h2{
    font-weight: bold;
    color: white;
    font-size: 30px;
    font-style: italic;
    text-align: center;
}
.landing_bg{
    background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url('./Images/Buy\ a.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    max-width: 100%;
    width: 100%;
    height: 100vh;
    position: relative;
}
.login_btn{
    border-radius: 5px;
    background-color: rgba(65,186,216,0.55);
    font-size: 25px;
    font-weight: 500;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    width:150px;
    border:none;
    color: white;
    position: relative;
    top: 1px;
    left: 190px;
    transition: all 0.5s;
}
.login_btn:hover{
    background-color: rgb(131, 202, 74);
}
.login_btn span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
.login_btn span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
.login_btn:hover span {
    padding-right: 25px;
  }
  
.login_btn:hover span:after {
    opacity: 1;
    right: 0;
  }
.signup_btn{
    border-radius: 5px;
    background-color: rgba(65,186,216,0.55);
    font-size: 25px;
    font-weight: 500;
    padding: 5px;
    text-align: center;
    text-decoration: none;
    width:150px;
    border:none;
    color: white;
    position: relative;
    bottom: 39px;
    left: 398px;
    transition: all 0.5s;
}
.signup_btn:hover{
    background-color: rgb(131, 202, 74);
}
.signup_btn span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
}
  
.signup_btn span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}
  
.signup_btn:hover span {
    padding-right: 25px;
}
  
.signup_btn:hover span:after {
    opacity: 1;
    right: 0;
}
.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}
  
.modal-content {
    border-radius: 18px;
    background-size: cover;
    background-color: rgba(255,255,255,0.6);
    margin: 3% auto 12% auto; 
    border: 1px solid #888;
    width: 45%; 
}
 
.btn1{
      font-size: 25px;
      font-weight: 500;
      padding: 5px;
      text-align: center;
      text-decoration: none;
      width:120px;
      background-color: rgb(69, 192, 58);
      color: white;
      border:none;
}
#email{
      font-size: 30px;
      font-weight: bold;
      
}
#mail{
      font-size: 20px;
      width: 75%; 
      border-radius: 30px;
      padding: 6px;
      border: 2px;
}
#pass{
      font-size: 30px;
      font-weight: bold;
}
#word{
      font-size: 20px;
      width: 50%;
      border-radius: 30px;
      padding: 6px;
      border: 2px;
}
#email1{
    font-size: 30px;
    font-weight: bold;
}
#mail1{
    font-size: 20px;
     width: 75%; 
     border-radius: 50px;
     padding: 6px;
    border: 2px;
}
#pass1{
    font-size: 30px;
    font-weight: bold;
}
#word1{
    font-size: 18px;
    width: 50%;
    border-radius: 50px;
    padding: 6px;
    border: 2px;
}
#cpass{
    font-size: 30px;
    font-weight: bold;
}
#cword{
    font-size: 20px;
    border-radius: 50px;
    width: 50%;
    padding: 6px;
    border: 2px;
} 
.container{
      width:420px;
      text-align: center;
      padding: 20px;
      margin: 10px auto ;
      margin-bottom: 20px;
      color:black;
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
img.user {
    width: 30%;
    border-radius: 50%;
}
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: red;
    font-size: 35px;
    font-weight: bold;
}
  
.close:hover,
.close:focus {
    color: black;
    cursor: pointer;
}
p{
    text-align: center;
    font-size: 50px;
    font-family: 'Poppins','sans-serif';
    font-weight: normal;
    color: black;
}

.grid{ 
    width:1000px;
    max-width: 100%;
    max-height: 100%;
    margin:50px auto;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap:40px;
    padding: 8px 12px;
}
.grid-item{
    border:2px solid;
    border-radius: 15px;
    display: grid;
    grid-template-rows: 1fr 0.5fr;
    justify-items: center;
    height: 470px;
}
.image{
    max-width:90%;
    max-height: 100%;
    object-fit: cover;
    padding: 20px;
    text-align: center;
    height: 90px;
    cursor:auto;
}
img{
    max-width: 100%;
}
.grid-item p{
    padding:8px;
}

.view_btn{
  background-color: rgba(25, 188, 228, 0.75);
  border: none;
  border-radius: 5px;
  color: white;
  padding: 10px 16px;
  text-align: center;
  text-decoration: none;
  font-size: 19px; 
  margin-left: 5px;
  margin-top: 27px;
}
.view_btn:hover{
  background-color: rgb(131, 202, 74);
}

.view_btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.view_btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.view_btn:hover span {
  padding-right: 15px;
}

.view_btn:hover span:after {
  opacity: 1;
  right: 0;
}
</style> 

  </head>
<body>
    <header class="nav_content">
     <div class="logo">
      <a href="#"><img src="./Images/Create.png" alt="logo"></a>
     </div>
    <div id="nav-menu"> 
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">My bookings </a></li>
          <li><a href="feedback.php">Feedback</a></li>
          
        </ul>
    </div>
    </header>
    <div class="landing_bg">
    </div>
    <div class="welcome_msg">
      <h1>Welcome to House Box</h1>
      <br>
      <h2>A right place to choose your desired home</h2>
    <br>
    <div onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
       <button class="login_btn" type="submit"><span>Login</span></button>
    </div>
    <div onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
       <button class="signup_btn" type="submit"><span>Sign-Up</span></button>
    </div>
    </div>
  
   
    <div id='id01' class="modal">
      <form class="modal-content animate" method="post">
          <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="./Images/avatar1.png" alt="Avatar" class="user">
            </div>
         <div class="container">
          <label for="email" id="email">Enter your email: </label><br>
          <br>
          <input type="email" id="mail" name="Email" required>
          <br><br>
          <label for="password" id="pass">Enter your Password: </label><br>
          <br>
          <input type="password" id="word" name="Password" minlength="8" maxlength="10">
          <br><br>
          <br>
          <input class="btn1" type="submit" name="login">
        </div>
      </form>
  </div>
  <?php
     if(isset($_POST['login'])){
      $email = $_POST['Email'];
      $password1 = ($_POST['Password']);
      $query = "Select * from users where Email = '$email' and Password1 = '$password1'";
      $run = mysqli_query($conn,$query);
      
      if(mysqli_num_rows($run)>0){
        if(!isset($_SESSION)){
          session_start();
        }
        $_SESSION['UserID'] = mysqli_fetch_assoc($run)['ID'];
        echo "<script>
         window.location.href='search.php';
         </script>";
    }
     }
  ?>
  
  <div id='id02' class="modal">
    <form class="modal-content animate" onSubmit="return checkPassword(this)" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="./Images/avatar1.png" alt="Avatar" class="user">
        </div>
        <div class="container">
        <label for="email" id="email1">Enter your email: </label><br>
        <br>
        <input type="email" id="mail1" name="email" required>
        <br><br>
        <label for="password" id="pass1">Enter your Password: </label><br>
        <br>
        <input type="password" id="word1" name="password1" minlength="8" maxlength="10" required>
        <br><br>
        <label for="cpassword" id="cpass">Confirm Password: </label><br>
        <br>
        <input type="password" id="cword" name="password2" minlength="8" maxlength="10" required>
        <br><br>
        <br>
        <button class="btn1" type="submit" name="sub" id="sign-up">Sign-Up</button>
        </div>
 
    </form>
   
</div>
<?php
if(isset($_POST['sub'])){
      $email = $_POST['email'];
      $password1 = $_POST['password1'];
      $query = "Select * from users where Email = '$email' and Password1 = '$password1'";
      $run = mysqli_query($conn,$query);
      if(mysqli_num_rows($run)>0){
            echo "<script>
              Swal.fire({
                  title: 'Already Registered!!',
                  text: 'Kindly Login to continue',
                  icon: 'info',
                  allowOutsideClick:false,
                  confirmButtonText : 'Ok',
                  confirmButtonColor: 'rgb(69, 192, 58)',
                }).then((result) =>
                      {
                     if(result.isConfirmed){
                             window.location.href='index.php';
                      }
                      
                            });
             
            </script>";
            
      }
      else{
      $query1 = mysqli_query($conn, "Insert into users(Email,Password1) values('$email','$password1')");
      if($query1){
            echo"<script>
              
                        Swal.fire({
                              title: 'Welcome to House Box - Thank you for Registering',
                              text: 'Kindly Login to Proceed',
                              icon: 'success',
                              allowOutsideClick:false,
                              confirmButtonText : 'Ok',
                              confirmButtonColor: 'rgb(69, 192, 58)',
                            }).then((result) =>
                            {
                              if(result.isConfirmed){
                                    window.location.href='index.php';
                              }
                        });
            </script>";
                  
      }
      else{
           echo "<script>
           Swal.fire({
            title: 'Oops!!',
            text: 'Something went wrong.Please try again!',
            icon: 'error',
            allowOutsideClick:false,
            confirmButtonText : 'Ok',
            confirmButtonColor: '#3085d6',
          })
           </script>";
       }
}
   }
  
?>
<br><br>
<p>Recommended Properties in Chennai</p>
<div class="grid">
<?php

     $select_house = "select * from housesnew where ID in (20,18,17,16,15,14,13,12,11)";
     $result = mysqli_query($conn,$select_house);
     if(mysqli_num_rows($result)>0)
     {
      while($row = mysqli_fetch_assoc($result))
      {
            $house_id = $row['ID'];
            $house_img = $row['House_image'];
            echo "<div class='grid-item'>
            <div class='image'>
                <img src='images/$house_img' alt='' width='300' height='350'>";
               
                if(isset($_SESSION['UserID'])){
                  echo"
                <button type='button' class='view_btn'><a href='view.php?house_id=$house_id'><span style='color: white';>View Details</span></a></button>";
                }
                else{
                  echo"
                  <button type='button' class='view_btn' onclick = noEventBtn()><span style='color: white';>View Details</span></button>
                  <script>
                  function noEventBtn(){
                    Swal.fire({
                      title: '',
                      text: 'Kindly Login or Register to continue',
                      icon: 'warning',
                      allowOutsideClick:false,
                      confirmButtonText : 'Ok',
                      confirmButtonColor: 'rgb(69, 192, 58)',
                    }).then((result) =>
                          {
                         if(result.isConfirmed){
                                 window.location.href='index.php';
                          }
                          
                                });
                  }
                  </script>
                  ";
                }
                echo"
            </div>
      </div>";
      }
      
     }
     
  ?>

</div>

</body>
</html>