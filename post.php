<?php
    include('connect.php');
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
        .grid{ 
            width:720px;
            max-width: 100%;
            max-height: 100%;
            margin:60px auto;
            position: absolute  ;
            top: 150px;
            left: 430px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap:20px;
            padding: 8px 12px;
            border: 2px solid ;
            border-radius: 20px;
            height: 320vh; 
        }
        
        .btn1{
            /* margin-top: 105px; */
            position: relative;
            top: 135px;
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
        form{
            margin-top: -200px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .field{
            width: 120%;
            padding: 12px 12px;
            margin-top: 6px;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            border-radius: 10px;
            position: relative;
            left: 170px;
            top: 100px;
        } 
        label{
            position: relative;
            left: 170px;
            top: 100px;
            margin: 12px;
            font-size: 30px;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        h2{
            font-size: 50px;
            font-family: 'Poppins','sans serif';
            font-weight: normal;
            color:#F4C625;
            text-align: left;
            position: relative;
            top: 120px;
            left: 620px;
        }
        .title{
            border: 2px solid black;
            border-radius: 30px;
            padding: 8px;
        }
        .new{
            margin-left: 90%;
            /* margin-bottom:3px; */
        }
        .landing_bg{
            background: white;
            background-repeat: no-repeat;
            background-size: cover;
            max-width: 100%;
            width: 100%;
            height: 400vh;
            position: relative;
        }
        h3{
            text-align: center;
            font-size: 30px;
            font-family: 'Poppins','sans serif';
            position: relative;
            top: 80px;
            left: 180px;
            color: #6F25F5;
            white-space: nowrap;
        }
        #type,#beds,#baths,#park,#balcony{
            border: 2px solid black;
        }
        body{
            overflow-x: hidden;
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
             <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeMHSnuW_9i2A_26J-rH3_rC1N2Myjnq9IroJkLVbKoX9CpWQ/viewform">Feedback</a></li>
             <li><a href="#">Post</a></li>
           </ul>
       </div>
       </header>
       <div class="landing_bg">

       <h2><span class="title">Post your Houses</span></h2>
       <div class="grid">
        <form method="post">
           <h3>Enter the details of the house</h3>
           <br>
            <label for="plot">Plot Area: </label>
            <input type="text" name="plot" class="field"><br>
            <label for="built">BuiltUp Area: </label>
            <input type="text" name="built" class="field">
            <label for="face">Facing: </label>
            <input type="text" name="facing" class="field">
            <label for="address">Address: </label>
            <input type="text" name="address" class="field">
            <label for="type">House Type: </label>
            <select name="type"class="field" id="type">
                <option value="" disabled selected hidden>Choose Rent/Buy</option>
                <option value="rent">Rent</option>
                <option value="buy">Buy</option>
            </select>     
            <label for="price">Price: </label>
            <input type="text" name="budget" class="field">
            <label for="beds">Bedrooms: </label>

            <select name="beds"class="field" id="beds">
                <option value="" disabled selected hidden>Choose Rooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label for="bath" >Bathrooms: </label>
            <select name="baths"class="field" id="baths">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label for="car">Car Parking: </label>
            <select name="park"class="field" id="park">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <label for="balcony" >Balcony: </label>
            <select name="balcony"class="field" id="balcony">
                <option value="" disabled selected hidden></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <label for="furnish" >Furnishing: </label>
            <input type="text" name="furnishing" class="field">
            <label for="floor">Flooring: </label>
            <input type="text" name="flooring" class="field">
            <label for="trans">Transaction: </label>
            <input type="text" name="transaction" class="field">
            <label for="contact">Owner Contact number:</label>
            <input type="text" name="phone" class="field">
            <label for="img" >House Image: </label>
            <input type="file" name="image" class="field">
            <label for="addimg1">House Additional Image: </label>
            <input type="text" name="addimage1" class="field">
            <label for="addimg2">House Additional Image: </label>
            <input type="text" name="addimage2" class="field">
            <label for="addimg3">House Additional Image: </label>
            <input type="text" name="addimage3" class="field">
            <label for="places">Place: </label>
            <input type="text" name="place" class="field">
            <label for="dist">Distance: </label>
            <input type="text"  name="distance" class="field">
            <div class="new">
                 <input class="btn1" type="submit" name="login">
            </div>
        </div>
    </form>
    </div>
    <?php
        if(isset($_POST['login'])){
            $plot = $_POST['plot'];
            $built = $_POST['built'];
            $facing = $_POST['facing'];
            $address = $_POST['address'];
            // $type = $_POST['type'];
            $price = $_POST['budget'];
            // $bed = $_POST['beds'];
            // $bath = $_POST['baths'];
            // $car = $_POST['park'];
            // $balcony = $_POST['balcony'];
            $fur = $_POST['furnishing'];
            $floor = $_POST['flooring'];
            $transaction = $_POST['transaction'];
            $owner = $_POST['phone'];
            $img = $_POST['image'];
            $place = $_POST['place'];
            $dist = $_POST['distance'];
            $a1 = $_POST['addimage1'];
            $a2 = $_POST['addimage2'];
            $a3 = $_POST['addimage3'];
            $type = isset($_POST['type']) ? $_POST['type'] : '';
            $beds = isset($_POST['beds']) ? $_POST['beds'] : '';
            $baths = isset($_POST['baths']) ? $_POST['baths'] : '';
            $park = isset($_POST['park']) ? $_POST['park'] : '';
            $balcony = isset($_POST['balcony']) ? $_POST['balcony'] : '';

            $query = "Insert into housesNew(House_image,Plot_Area,BuiltUp_Area,Facing,Address,House_Type,Bedrooms,Bathrooms,Car_Parking,Price,Furnishing,Flooring,Balcony,Transaction,Owner_Number,Additional_img1,Additional_img2,Additional_img3,Place,Distance) values('$img',$plot,$built,'$facing','$address','$type',$beds,$baths,$park,'$price','$fur','$floor',$balcony,'$transaction','$owner','$a1','$a2','$a3','$place','$dist')";
            $run = mysqli_query($conn,$query);
        }
    ?>
</body>
</html>