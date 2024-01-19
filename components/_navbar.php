<?php

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    $loggedin = false;

}else{
    $loggedin = true;
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>discord</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue&family=Croissant+One&family=Fasthand&family=Fuggles&family=Lato:wght@100&family=Montserrat:wght@200&family=Nosifer&family=Noto+Sans+Mahajani&family=Noto+Serif+JP:wght@200;300&family=Nunito:wght@300&family=Open+Sans&family=PT+Sans&family=Playfair+Display&family=Poppins:ital,wght@0,100;1,200&family=Press+Start+2P&family=Quicksand:wght@300;400&family=Raleway:wght@200;300&family=Roboto:wght@300&family=Tulpen+One&display=swap');

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

      

        body{
            width: 100vw;
            height: 100vh;
            background-color: #FFFFFF;
            font-family: 'Comic Neue', cursive;
   
        }

        .navbar{
            width: 100vw;
            height: 8vh;
            display: flex;
            justify-content:space-evenly;
            align-items: center;
            background-color: #404EED;
            color: #ffffff;
        }

        .navbar .left {
            display: flex;
            width: 20vw;
            justify-content: start;
            align-items: center;
            cursor: pointer;
        }
        .navbar .left i{
            font-size: 2vw;
            color: white;
            padding:0  0.5vw;

        }


        .navbar .center{
            display: flex;
            gap: 5%;
            position: relative;
            width: 50vw;
            padding: 1vw;
        }

        .navbar .center h3{
            cursor: pointer;
            
        }

        .navbar .right i{
            display: none;
        }
        .navbar .center h3:hover{
            text-decoration: underline;
        }


        .navbar .right{
            width: 20vw;
         
            display: flex;
            gap: 10%;
        }

        .navbar .right h3{
            width: 5vw;
            padding: 0.4vw;
            background-color: #ffffff;
            color: black;
            font-weight: 500;
            border-radius: 24px;
            text-align: center;
            cursor: pointer;
        }

        @media (max-width:440px){
           
            .navbar{
             width: 100vw;
            }

            .navbar .left{
                width: 30vw;
            }
            .navbar .left i{
            font-size: 10vw;
            margin-left:10vw;
            }



        .navbar .center{
            display: none;
        }

        .navbar .right i{
            display: block;
            font-size: 8vw;
            font-weight: 800;
          
        }

        .navbar .right{
            width: 60vw;
         
            display: flex;
            gap: 5%;
        }


        
        .navbar .right h3{
            width: 20vw;
            font-size: 4vw;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
        }

        }

    </style>


</head>

<body>

    <div class="navbar">
        <div class="left">
            <i class="ri-discord-line"></i>
            <h3>Discord</h3>
        </div>


        <div class="center">
            <h3>Download</h3>
            <h3>Nitro</h3>
            <h3>Discover</h3>
            <h3>Safety</h3>
            <h3>Support</h3>
            <?php
            
            if($loggedin){
                echo'
                
                <h3><a href="/discord/index.php" style="text-decoration: none; color: #FFFFFF;">Home</a></h3>
                <h3><a href="/discord/logout.php" style="text-decoration: none; color: #FFFFFF;">Logout</a></h3>
                ';
            }
            
            ?>

        </div>

        <div class="right">
<?php
if(!$loggedin){
    echo'<h3><a href="/discord/login.php" style="text-decoration: none; color: #000;">Login</a></h3>
    <h3><a href="/discord/signup.php" style="text-decoration: none; color: #000;">Signup</a></h3>
        <i class="ri-menu-line"></i>';
}
    
?>
        </div>


    </div>

</body>
</html>