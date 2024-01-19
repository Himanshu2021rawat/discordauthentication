
<?php
    $login = false;
 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'components/_dbconnect.php';
  
        $username = $_POST['username'];
        $password = $_POST['password'];

     $sql = " SELECT * from users where username = '$username'";
     $result = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($result);
     if($num == 1){

        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password,$row['password'])){

                
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                header("location:index.php");

                
            }
        }


     }else{
           $login = false;
     }

    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue&family=Croissant+One&family=Fasthand&family=Fuggles&family=Lato:wght@100&family=Montserrat:wght@200&family=Nosifer&family=Noto+Sans+Mahajani&family=Noto+Serif+JP:wght@200;300&family=Nunito:wght@300&family=Open+Sans&family=PT+Sans&family=Playfair+Display&family=Poppins:ital,wght@0,100;1,200&family=Press+Start+2P&family=Quicksand:wght@300;400&family=Raleway:wght@200;300&family=Roboto:wght@300&family=Tulpen+One&display=swap');

        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            height: 100vh;
            font-family: 'Comic Neue', cursive;
            overflow: hidden;
        }

        #success{
        background-color: #D1E7DD;
       }

       #warning{
        background-color: #F8D7DA;
       }
        .container{
            width: 100vw;
            height: 100vh;
            background-color: #5865F2;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .logincon{
            margin-top: 10vw;
            width: 60vw;
            height: 30vw;
            background-color: #313338;
            border-radius: 8px;
            display: flex;

        }

        .logincon .left{
            width: 35vw;
            height: 30vw;
            
            color: #dadada;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-direction: column;
            padding: 2vw;
            gap: 2%;
        }


       .left form{
        width: 25vw;
        height: 30vh;
        display: flex;
        justify-content: space-between;
        flex-direction:column ;
    }
    .left form input{
        height: 2vw;
        background-color:#1E1F22;
        color: #fff;
        padding: 0 1vw;
        border: none;
       }

       .left .log{
        background-color: #5865F2;
        height: 2.6vw;
       }

       


        .logincon .right{
            width: 25vw;
            height: 30vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #fff;
        }


        .logincon .right h3{
            color: #dadada;
            font-size: 0.98vw;
        }

        .logincon .right img{
            width: 15vw;
        }


@media (max-width:440px) {
    .container{
            width: 100vw;
            height: 100vh;
            background-color: #313338;
           
        }

        .logincon{
            width: 100vw;
            height: 80vh;
        }

        .logincon .left{
            width: 100vw;
            height: 80vh;
        }

        .logincon .right{
            display: none;
        }

    .left form{
        width: 80vw;
        height: 40vh;
        display: flex;
        justify-content: space-between;
        flex-direction:column ;
    }
    .left form input{
        height: 10vw;
        background-color:#1E1F22;
        color: #fff;
        padding: 0 1vw;
        border: none;
       }

       .left .log{
        background-color: #5865F2;
        height: 10vw;
       }



    }


    </style>

    
</head>
<body>
    
    <?php require'components/_navbar.php'?>
    

    <?php 

        if(!$login){
            echo'<div id="warning" >
            <strong>Invalid Creadentials OR Form is Empty  </strong>
             </div>';   
            
        }else{
            
             echo'<div  id="success" >
             <strong>You are logedIn</strong>
              </div>';
        }

    ?>


    <div class="container">

        <div class="logincon">
            <div class="left">
            <h1> <i class="ri-discord-line"></i>Discord</h1>
                <h2>Welcome back!</h2>
                <h3>We're so excited to see you again!</h3>

                <form action="/discord/login.php" method="post">
                    <label for="username">Username*</label>
                    <input type="text" name="username" id="username">
                    <label for="password">PASSWORD*</label>
                    <input type="password" name="password" id="password"><span><h4>Forgot your password?</h4></span>
                    <input type="submit" value="Log in" class="log">
                    <span><h4>Need an account?<a href="signup.php">Register</a> </h4></span>

                </form>
            </div>
           
           
           
            <div class="right">

                <img src="frame.png" alt="">
                <h2>Login with QR Code</h2>
                <h3>Scan this with the Discord mobile</h3>
                    <h3>app to log in instantly.</h3>

            </div>
        </div>

    </div>



</body>
</html>