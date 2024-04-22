<?php
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    *{
    margin:0;
    padding: 0;
    font-family: 'Poppins','sans serif';
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
    form {
      margin-top: 10px;
      width: 50%;
      margin: 0 auto;
      padding: 2em;
      border: 1px solid #090909;
      border-radius: 5px;
      position: relative;
      top: 150px;
      height: 90vh;
    }
    label {
      font-size: 27px;
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"],
    input[type="email"],
    textarea {
      width: 95%;
      margin: auto;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    h2{
        text-align: center;
        font-size: 30px;
        font-family: 'Poppins','sans serif';
        position: relative;
        top: 130px;
    }
    .btn1{
            margin-top: 20px;
            font-size: 25px;
            font-weight: 500;
            padding: 5px;
            text-align: center;
            text-decoration: none;
            width:120px;
            border-radius: 15px;
            background-color: rgb(69, 192, 58);
            color: white;
            border:none;
    }
    .btn1:hover {
            background-color: #3e8e41;
    }
    body{
        background:white;
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
             <li><a href="post.php">Post</a></li>
             <?php
             echo "<li><a href='logout.php'>Logout</a></li>";
             ?>
           </ul>
       </div>
       </header>
    <h2>Feedback Form</h2>
  <form method="POST">
  
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="user_experience">How was the user experience?</label>
    <textarea id="user_experience" name="user" rows=10 required></textarea>

    <label for="feedback">Any other Feedback:</label>
    <textarea id="feedback" name="feedback" rows=10 required></textarea>
    <button type="submit" name="Submit" class="btn1">Submit</button>
    </form>
    <?php
    if(isset($_POST['Submit'])){
      $mail = $_POST['email'];
      $user_experience = $_POST['user'];
      $feedback = $_POST['feedback'];
      $query = "Insert into feedback(email,Question1,Review) values('$mail','$user_experience','$feedback')";
      $run = mysqli_query($conn,$query);
      echo "<script>
              window.location.href='index.php';
      </script>";
    }
    ?>
</body>
</html>
