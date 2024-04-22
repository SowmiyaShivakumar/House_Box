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
        h1{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-style: italic;
            margin-top: 10%;
            font-size: 50px;
        }
        table,th,tr{
            text-align: center;
           
        }
        table {
          border-collapse: collapse;
          width: 90%;
          margin-left: 70px;
          right: 90px;
          align-items: center;
          justify-content: center;
        }
        
        th, td {
          border: 1px solid black;
          padding: 6px; 
        }
        
        th {
          background-color: #f2f2f2;
          color: black;
          text-align: center;
        }
        .book_btn{
        font-size: 25px;
        font-weight: 500;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        width:120px;
        background-color: rgb(69, 192, 58);
        color: white;
        border:none;  
        border-radius: 20px;
        }
        .remove_btn{
        font-size: 25px;
        font-weight: 500;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        width:120px;
        background-color: #F63E16;
        border-radius: 20px;
        color: white;
        border:none;
        }
        </style>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
             <?php
             echo "<li><a href='logout.php'>Logout</a></li>";
             ?>
           </ul>
       </div>
       </header>
       <h1>My Dream Home</h1>
       <br><br><br><br>       
       <table>
        <tr>
           <th style="width: 30%";>House-Image</th>
           <th style="width: 20%";>Price</th>
           <th style="width: 28%";>Booking</th>
           <th style="width: 30%";>Cancellation</th>
        </tr>
        <?php
            if(isset($_GET['house_id']) ){
                $h_id = $_GET['house_id'];
                $select_house = "SELECT * FROM housesnew WHERE ID=$h_id";
                $run = mysqli_query($conn,$select_house);
                $house = mysqli_fetch_assoc($run);
                $_SESSION['HouseID'] = $house['ID'];
                $id = $house['ID'];
                $img = $house['House_image'];
                $price = $house['Price'];
                $up = "Update housesnew set BookingStatus=false where ID = $id";
                $del = mysqli_query($conn,$up); 
                $display = "Select * from my_bookings where User_ID = {$_SESSION['UserID']}";
                $run2 = mysqli_query($conn, $display);
                $display1 = "Select * from my_bookings where User_ID = {$_SESSION['UserID']} and House_ID = $h_id";
                $run3 = mysqli_query($conn,$display1);
                if(!mysqli_num_rows($run3)>0){
                    $run1 = "Insert into my_bookings(User_ID,House_ID,House_Img,Budget) values({$_SESSION['UserID']}, $id,'$img',$price)";       
                    $book = mysqli_query($conn, $run1);
                }
                if(mysqli_num_rows($run3)!=0){    
                 while($row=mysqli_fetch_assoc($run3)){
                    $budget = $row['Budget'];
                    $book_img = $row['House_Img'];
                    $house_id = $row['House_ID'];
                    echo"
                    <tr>
                    <td><img src = './Images/$book_img' width='200' height='200'></td>
                    <td>$budget</td>
                    <form action='send_mail.php'>
                    <td><button class='book_btn' id='book' onclick='sweet()'>Book</button></td>
                    </form>
                    <form method='POST' action='remove_booking.php'>
                    <input type='number' style='display:none;' value=$house_id name='hid'>
                    <td><button type='submit' name='remove' class='remove_btn'>Remove</button></td>
                    </form>
                    </tr>
                    
                    ";
                 }
                }
            }         
        ?>
        </table>
        <script>
            function sweet(){
            Swal.fire({
                icon: 'success',
                title: 'Booking has been confirmed',
                confirmButtonText: 'OK'
                
            });
            }
     </script>
</body>
</html>