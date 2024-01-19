
<?php
    $showAlert = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['username'] != ""){
        include 'components/_dbconnect.php';
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $existsql = "SELECT * FROM `users` WHERE username = '$username'";
        $result = mysqli_query($conn,$existsql);
        $numexists = mysqli_num_rows($result);
        
    if($numexists > 0){
        $showAlert = true;
    }else{
        $showAlert = false;
    }

    if(!$showAlert){
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `username`, `password`,`dt`) VALUES ( '$username', '$hash', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        if($result){
            $showAlert = false;
        }else{
            $showAlert  = true;
        }
    }
            
        
    }else{
        $showAlert = true;
    }

    



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>

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

        .container{
            width: 100vw;
            height: 100vh;
            background-color: #5865F2;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .logincon{
            margin-top: 2vw;
            width: 30vw;
            height: 80vh;
            background-color: #313338;
            border-radius: 8px;
            display: flex;

        }

        .logincon .left{
            width: 35vw;
            height: 40vw;
            
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
        height: 80vh;
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

       #success{
        background-color: #D1E7DD;
       }

       #warning{
        background-color: #F8D7DA;
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
        height: 85vh;
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
    if($showAlert){
        echo'<div id="warning">
                   Your Form is not  submitted (username exists already OR Form is Empty )<strong>TRY AGAIN</strong>
                    </div>';
    }else{
            echo'<div  id="success" >
                Your Form is submitted <strong>SUCCESSFULLY</strong>
                 </div>';
             }




    ?>


    <div class="container">

        <div class="logincon">
            <div class="left">
               <h1> <i class="ri-discord-line"></i>Discord</h1>
                <h2>Welcome back!</h2>
                <h3>We're so excited to see you again!</h3>

                <form action="/discord/signup.php" method="post">
                    <label for="Emai">EMAIL*</label>
                    <input type="email" name="email" id="email" maxlength="20">
                    <label for="name">DISPLAY NAME</label>
                    <input type="text" name="name" id="name">
                    
                    <label for="username">USERNAME*</label>
                    <input type="text" name="username" id="username" maxlength="20">

                    <label for="password">PASSWORD*</label>
                    <input type="password" name="password" id="password" maxlength="20">

                    <label for="dateofbirth">DATE OF BIRTH</label>
                    <input type="date" name="date" id="date">


                    <input type="submit" value="Continue" class="log">
                    <span><h6>By registering, you agree to Discord's Terms of Service and Privacy Policy. </h6></span>

                    <h4><a href="login.php" style="text-decoration:none; color: blue;">Already have and account?</a></h4>

                </form>
            </div>
           
           
           
        </div>

    </div>



</body>
</html>