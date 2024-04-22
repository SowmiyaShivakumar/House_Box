<?php
   require_once 'connect.php';
   global $run;
   $select_house = "SELECT * FROM housesnew WHERE ID = {$_GET['house_id']}";
   $run = mysqli_query($conn,$select_house);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>House Box</title>
    <style>
   .grid{ 
    width:1000px;
    max-width: 90%;
    max-height: 100%;
    margin:60px auto;
    position: relative;
    top: 170px;
    left: 15px;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap:20px;
    padding: 8px 12px;
    border: 2px solid ;
    border-radius: 20px;
    height: 130vh; 
    /* align-items: center; */
}
.image{
    max-width:100%;
    max-height: 100%;
    object-fit: cover;
    padding: 20px;
    text-align: center;
    height: 100px;
    width: 150%;
    position: relative;
    top: 69px;
    cursor:auto;
    margin: 15px;
}
/* .image:hover{
   
    transform: scale(1.1);
} */
img{
    max-width: 100%;
}
#nav-menu ul{
   
   display: flex;
   flex-direction: row;
   justify-content: space-between;
   
   list-style-type: none;
   margin: 0;
   padding: 0;
   /* overflow: hidden; */
   
}
.nav_content{
   position: absolute;
   display: flex;
   flex-direction: row;
   justify-content: space-between;
   align-items: center;
   top:0;
   left:0;
   /* right: 0; */
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
.container{
    font-size: 28px;
    font-family: 'Times New Roman', Times, serif;
    position: relative;
    left: 120px;
}
.grid-item{
    /* border:2px solid;
    border-radius: 15px; */
   width: 350px;
   height: 140px;
   display: flex;
   /* justify-content: flex-start; */
   align-items: center;
   /* margin-bottom: 24px; */
   background-color: #f5f5f5;
   border-radius: 8px;
   background-clip: padding-box;
}

.grid-item > li{
    list-style-type: none;
    width: auto;
    padding: 0 10px 0 24px;
    float: left;
    margin: 0 12px 0 0;
    color: #303030;
    font-size: 14px;
    font-weight: 400;
    line-height: 10px;
    border-right: 1px solid #d7d7d7;
    position: relative;
    /* align-items: center; */
    display: flex;
    justify-content: center;
}
.li_element{
    font-weight: 600;
    font-size: 25px;
    padding: 10px;
    position: relative;
    top: 75px;
    right: 50px;
}
.li_element2{
    font-weight: 600;
    font-size: 25px;
    padding: 10px;
    position: relative;
    top: 75px;
    right: 65px;
}
.li_element3{
    font-weight: 600;
    font-size: 25px;
    padding: 10px;
    position: relative;
    top: 75px;
    right: 45px;
}
#tub{
    position: relative;
    bottom: 1px;
    right: 10px;
}
#bed{
    position: relative;
    bottom: 1px;
    right: 0px;
    left: 1px;
}
#car{
    position: relative;
    bottom: 1px;
    right: 0px;
    left: 1px;
}
button{
    top:61%;
    min-height: 45px;
    min-width: 135px;
    background-color:#1b9fca;
    color: #fff;
    border:none;
    border-radius:15px;
    font-size: 20px;
    padding: 8px;
}
body{
    background-color: #FFFFFF;
    overflow-x:hidden;
}
#contact{
    display: none;
    position: relative;  
    bottom: 75px;
    left: 190px;
    border : 2px solid  #DB8780; 
    border-radius: 20px;
    text-align: center;
    padding: 4px;
    width: 240px;
    font-style: italic;
}
.grid-item2{
   
    border-radius: 15px;
    display: grid;
    grid-template-rows: 1fr 1fr 1fr;
    gap: 10px;
    justify-items: center;
    height: 300px; 
}
.addi_image{
    position: relative;
    max-width: 90%;
    max-height: 100%; 
    object-fit: cover;
    padding: 20px;
    text-align: center;
    height: 90px;
    cursor:auto;
}
.new_img{
    position: relative;
    top: 850px;
    right: 290px;
    min-height: 40px;
    min-width: 130px;
    margin-top: 28px;
    background-color:#1b9fca;
    color: #fff;
    border:none;
    border-radius:12px;
    font-size: 20px;
    padding: 8px;
}
h2{
    font-size: 50px;
    font-family: 'cursive';
    font-weight: bold;
    font-style: italic;
    color: #49AF8E ;
    text-align: left;
    position: relative;
    top: 100px;
    left: 300px;
}
.title{
    border: 2px solid rgba(65,186,216,0.55);
    border-radius: 30px;
    padding: 8px;
}
p > img {
    position: relative;
    bottom: 100px;
    right: 100px;
}
.place{
    font-size: 30px;
    position: relative;
    bottom: 180px;
    left: 20px;
    justify-self: start;
    align-self: start;
}
.house{
    position: relative;
    bottom: 35px;
    left: 100px;
}
.book_button{
    position: absolute;
    top: 26em;
    left: 100px;
    min-height: 45px;
    min-width: 135px;
    background-color:#f08080;
    color: #fff;
    border:none;
    border-radius:12px;
    font-size: 20px;
    padding: 8px;
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
          <li><a href="#">Home</a></li>
          <li><a href="my_bookings.php">My bookings </a></li>
          <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeMHSnuW_9i2A_26J-rH3_rC1N2Myjnq9IroJkLVbKoX9CpWQ/viewform">Feedback</a></li>
          <?php
             echo "<li><a href='logout.php'>Logout</a></li>";
          ?>
        </ul>
    </div>
    </header>
    <h2><span class="title">Discover - A Detailed House Information</span></h2>
    <?php
    global $run;
    global $house;
     while($house = mysqli_fetch_assoc($run)){
     ?>
        <div class='grid'>
            <div class='image'>
            <p title="<?php echo $house['Distance']?> from Chennai Border"><img src="./Images/location.png"  alt=""  width="70" height="70"> 
              <p class="place">
                 <?php echo $house['Place'] ?>
              </p>
            </p>
            <p class="house">
                <img src="./Images/<?php echo $house['House_image']; ?>" title="<?php echo $house['Distance']?> from Chennai Border" alt="" width="350" height="400">
            </p>
            <?php
            $house_id = $house['ID'];
            echo"
            <form method='POST'>
            <button type='button' class='book_button' name='book'><a href='my_bookings.php?house_id=$house_id' style='text-decoration: none; color:white;'>Book</a></button><br>
            </form>";
            ?>
            </div>
            <div class='container'>
                <ul class='grid-item'>
                <li>
                    <img src="./Images/baths.png" alt="" id="tub" width="70" height="70">
                   
                    <span class='li_element'><?php echo $house['Bathrooms']?> </span>
                </li>
                <li>
                    <img src="./Images/BED (2).png" alt="" id="bed" width="190" height="70">
                    <span class='li_element2'><?php echo $house['Bedrooms']?></span>
                </li>
                <li>
                    <img src="./Images/cars.jpg" id="car" alt=""  width="100" height="70">
                    
                    <span class='li_element3'><?php echo $house['Car_Parking']?></span>
                </li>
                </ul>
            <p><b>Plot Area : </b><?php echo $house['Plot_Area'] ?> sqft</p>
            <p><b>Built-Up Area : </b><?php echo $house['BuiltUp_Area'] ?> sqft</p>
            <p><b> Facing : </b><?php echo $house['Facing'] ?></p>
            <p><b>ADDRESS : </b><?php echo $house['Address'] ?></p>
            <p><b>PRICE : ₹</b><?php echo $house['Price'] ?></p>
            <p><b>Furnishing : </b><?php echo $house['Furnishing'] ?></p>
            <p><b>Flooring :</b><?php echo $house['Flooring'] ?> </p>
            <p><b>Balcony : </b><?php echo $house['Balcony'] ?></p>
            <p><b>Transaction : </b><?php echo $house['Transaction'] ?></p>          
            <button class="owner_no" onclick = myFunction() >Contact Owner</button><br><br>
            
             <div id="contact">
            </div> 

            
            <?php
             $a = $house['Owner_Number'];
            ?>
           <script>
           function myFunction(){
           
            let a = document.getElementById('contact');
            a.style.display='block';
            a.innerHTML = <?php 
             echo "$a";
            ?>   
               
            }
           </script>
          
          </div>
        
        <?php
          $additional_img1 = $house['Additional_img1'];
          $additional_img2 = $house['Additional_img2'];
          $additional_img3 = $house['Additional_img3'];
        ?>
        <?php
         
         if(!is_null($additional_img1) and !is_null($additional_img2) and !is_null($additional_img3)){
            echo" 
        <form method='post'>
           <button name='addi_imgs' value='display' class='new_img'>View Additional Images</button>
           
           <script>
            document.querySelector('.grid').style.height='139vh';
           </script>
        </form> 
        ";
        ?>
         
        <?php
        if(isset($_POST['addi_imgs'])){
            echo"
            <div class='grid-item2'>
              <div class='addi_image'>
            <img src='$additional_img1' alt='' width='300' height='300'>
              </div>
            </div>
            <div class='grid-item2'>
              <div class='addi_image'>
            <img src='$additional_img2' alt='' width='300' height='300'>
              </div>
            </div>
            <div class='grid-item2'>
              <div class='addi_image'>
            <img src='$additional_img3' alt='' width='300' height='300'>
              </div>
            </div>
            <script>
             document.querySelector('.grid').style.height='195vh';
            </script>
           
            ";
          }
        }
        ?>
      
        </div>
       
    

     <?php }
        ?>
</body>
</html>