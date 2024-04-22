<?php
  include('connect.php');
?>
<?php
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
    font-family: 'Poppins','sans serif';
       
}
.nav_content{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    top:0;
    left:0;
    width: 100%;
    z-index: 1;
    background-color: rgba(65,186,216,0.95);
}
#nav-menu ul{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    list-style-type: none;
    margin: 0;
    padding: 0;
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
.landing_bg{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('./Images/Buy\ a.jpg');
    background-repeat: no-repeat;
    background-size: 100%;
    width: 100%;
    height: 70vh;
    box-sizing: border-box;
}
    
.welcome_msg{
    position: absolute;
    top: 140px;
    left: 24em;  
    text-align: center;
    max-width: 100%;  
}
h1{
    font-size: 70px;
    font-weight: bolder;
    color: rgb(65, 186, 216);
    font-style: normal;
    text-align: center;
    margin-top: 140px;
    font-size: 70px;
}
h2{
    font-size: 50px;
    font-weight: bold;
    color: white;
    font-style: italic;
    text-align: center;
}

h3{
   
    font-weight: normal;
    color: rgb(0, 0, 0);
    font-style: normal;
    text-align: center;
    margin-top: 40px;
    font-size: 70px;
    font-family: 'Poppins','sans serif';
}
form{
    background: #fff;
    width: 1000px;
    height: 55px;
    display: flex;
    border: 2px solid black;
    border-radius: 3px;
    
}
.container{
    width: 100%;
    margin-top: 80px;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    
}  


form input{
    flex: 1;
    border: none;
    outline: none;
    letter-spacing: 1px;
    gap: 2px;
}

  
form button{
    background: tomato;
    padding: 10px 50px;
    border: none;
    outline: none;
    color: #fff;
    letter-spacing: 1px;
    cursor:  pointer;
}
.grid{ 
    width:1000px;
    max-width: 90%;
    max-height: 100%;
    margin: 60px auto;
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap:40px;
    padding: 8px 12px;
   }
.grid-item{
    top: 200px;
    border:2px solid;
    border-radius: 15px;
    display: grid;
    grid-template-rows: 1fr 0.5fr;
    justify-items: center;
    height: 470px;
    width: 100%;
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
    opacity: 0;
    position: absolute;
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
             <li><a href="my_bookings.php">My bookings </a></li>
             <li><a href="feedback.php">Feedback</a></li>
             <li><a href="post.php">Post</a></li>
             <?php
             echo "<li><a href='logout.php'>Logout</a></li>";
             ?>
            </ul>
       </div>
    </header>
    <div class="landing_bg">
    </div>
    <div class="welcome_msg">
      <h1>Welcome to House Box</h1>
      <br>
      <h2>A right place to choose your desired home</h2>
    </div>
    <h3>Search your Desired Homes!!</h3>
    <div class="container">
        <form method="POST">      
              <input list="ways" placeholder="Choose Rent/Buy" name="ways">
              <datalist id="ways">
                <option value="Rent">
                <option value="Buy">
              </datalist>         
            <input list="location" placeholder="Choose Location" name="location">
            <datalist id="location" >
                <option value="Koyambedu">
                <option value="Tambaram">
                <option value="Chrompet">
            </datalist>
            <input list="rooms" placeholder="Choose Rooms" name="rooms">
            <datalist id="rooms">
                <option value="1BHK">
                <option value="2BHK">
                <option value="3BHK">
                <option value="4BHK">
            </datalist>
            <input type="search" placeholder="Min Budget" name="min_price">
            <input type="search" placeholder="Max Budget" name="max_price">
            <button type="submit" name="submit">Search</button> 
        </form>
  </div>
  <div class="grid">
  <?php
   if(!isset($_POST['submit'])){
     $select_house = "select * from housesnew where ID in (20,19,1,7,16,15,14,13,12,11) order by rand()";
     $result = mysqli_query($conn,$select_house);
     if(mysqli_num_rows($result)>0)
     {
      while($row = mysqli_fetch_assoc($result))
      { 
            $house_id = $row['ID'];
            $house_img = $row['House_image'];
            echo "<div class='grid-item'>
            <div class='image'>
                <img src='images/$house_img' alt='' width='300' height='350'>
                <button type='button' class='view_btn'><a href='view.php?house_id=$house_id'><span style='color: white';>View Details</span></a></button>
            </div>
      </div>";
      }}
     
}
 else{ 
      $type = $_POST['ways'];
      $location = $_POST['location'];
      $rooms = $_POST['rooms'];
      $min_price = $_POST['min_price'];
      $max_price = $_POST['max_price'];
      $select = "Select * from housesnew WHERE House_Type = '$type' and Place = '$location' and Bedrooms = '$rooms' and (Price between $min_price and $max_price)";
      $run = mysqli_query($conn,$select);
      if(mysqli_num_rows($run)>0)
     {
      while($row = mysqli_fetch_assoc($run)){
           if($row['BookingStatus']!=0){
            $house_id = $row['ID'];
            $house_img = $row['House_image'];
        echo "<div class='grid-item'>
        <div class='image'>
            <img src='images/$house_img' alt='' width='300' height='350'>
            <button type='button' class='view_btn'><a href='view.php?house_id=$house_id'><span style='color: white';>View Details</span></a></button>
        </div>
  </div>";
           }
   }}
}

  ?>
</div>
</body>
</html>