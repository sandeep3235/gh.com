<?php

if(isset($-POST['name'])){

$server ="localhost";
$username ="root";
$password ="";

$con = mysqli_connect($server, $$username, $password)

if(!$con){
die("connection to this database failed due to " . mysqli_connect connectionn error());
}
echo "success connecting to the db"

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = "INSERT INTO 'sattudb'.`sattutable` (`Name`, `Email`, `Phone`, `desc`) 
VALUES ('$name ', '$email', '$phone', '$desc');";



if($con-> query($sql)==true);{
echo "successfully inserted";
}
else{
echo "ERROR : $sql<br> $con-> erorr";    
}

$con->close():
?>
}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;600&display=swap" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Singh & Sons Consultants do better with your Life </title>
</head>
<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp ">
            <div class="logo"><img src="img/newlogo.jpg" alt="logo"></div>
            <li><a href="home">Home</a></li>
            <li><a href="about Us">About</a></li>
            <li><a href="services">Services</a></li>
            <li><a href="contact us">Contact Us</a></li>
        </ul>
        <div class="rightnav v-class-resp">
        <input type="text" name="search" id="search" class="se">
        <button class="btn btn-sm">search</button>
    </div>
    <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    </nav>
    <section class="background first-section">
        <div class="box-main">
            <div class="firsthalf">
                <h2>RAMSONS CORPORATIONS</h2>
            <p class="small-text">The futuristic hiring solutions are here for your busines 
                that will transformm your  hring experience and give your the best vlue</p>
            </div>
            <div class="secoundhalf">
                <img src="img/interview.jpg" alt="new york" class="img">  
            </div>
        </div>
    </section>
    <section class="secound-section">
        <div class="paras">
        <h1 class="heading">OUR MISSION & VISION </h1>
         <p class="subheading">Recruitment has many different steps. 
             
            First, the company needs to advertise that it has a job available. 
             People then send an application. 
             This usually includes a curriculum vitae, which is a summary of what a person has done until now in their life. 
             The best applicants are selected and they come for an interviews. 
             This might also include some further tests or exercises to do. 
             The person chosen is then given an offer of a job. 
             Finally, they can choose to take it or not.</p>
        </div>
         <div class="thumbnail">  
            <img src="img/interview.jpg" alt="callcenter" class="imgfluid" height="300"> </div>
    </section>
    <section class="third-section secbackground">
        <div class="paras">
        <h1 class="heading">THE SERVICES WE PROVIDE</h1>
         <p class="subheading">Recruitment has many different steps. 
             
            First, the company needs to advertise that it has a job available. 
             People then send an application. 

             This usually includes a curriculum vitae, which is a summary of what a person has done until now in their life. 
             
             The best applicants are selected and they come for an interviews. 
             
             This might also include some further tests or exercises to do. 
             
             The person chosen is then given an offer of a job. 
             
             Finally, they can choose to take it or not.</p>
         <p class="subheading">Hiring Solutions</p>
         <p class="subheading">Infrastucture Solutions</p>
         <p class="subheading">Businesss Solutions</p>
        </div>
         <div class="thumbnail">  
            <img src="img/interview.jpg"  alt="callcenter" class="imgfluid" height="300"> </div>
    </section>
    <section class="fourth-section secbackground">
        <div class="paras">
        <h2 class="heading">CORE VALUES OF OUR BUSINESS</h2>
         <p class="subheading">Recruitment has many different steps. 
             First, the company needs to advertise that it has a job available. 
             People then send an application. 
             This usually includes a curriculum vitae, which is a summary of what a person has done until now in their life. 
             The best applicants are selected and they come for an interviews. 
             This might also include some further tests or exercises to do. 
             The person chosen is then given an offer of a job. 
             Finally, they can choose to take it or not.</p>
         <p class="subheading">Work Ethics</p>
         <p class="subheading">Unmatchable Client Experinece</p>
        </div>
         <div class="thumbnail">  
            <img src="img/interview.jpg"  alt="callcenter" class="imgfluid" height="300"> </div>
    </section>

    <section class="footer">
    <h2 class="text-center">Contact Us </h2>
        <div class="form">
            <input class= "from-input" type="text" name="name" id="name" placeholder="enter your name">
            <input class= "from-input" type="email" name="email" id="email" placeholder="enter your email">
            <input class= "from-input" type="number" name="website" id="phone" placeholder="enter your phone no">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" class="text" placeholder="elaborate your concern"> </textarea>
            <button class="btn btn-dark">submit</button>
        </div> 
 </section>
 <copyright class="background">
    <p class="text-footer">
     copyright &copy; 2029 All Rights Reserved
    </p>
 </copyright>
 <script src="js/resp.js"></script>
</body>
</html>
  