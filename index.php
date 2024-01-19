<?php 

    session_start();
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        header("location:login.php");
        exit;

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Comic+Neue&family=Croissant+One&family=Fasthand&family=Fuggles&family=Lato:wght@100&family=Montserrat:wght@200&family=Nosifer&family=Noto+Sans+Mahajani&family=Noto+Serif+JP:wght@200;300&family=Nunito:wght@300&family=Open+Sans&family=PT+Sans&family=Playfair+Display&family=Poppins:ital,wght@0,100;1,200&family=Press+Start+2P&family=Quicksand:wght@300;400&family=Raleway:wght@200;300&family=Roboto:wght@300&family=Tulpen+One&display=swap');

*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

::selection{
    background-color: black;
    color: #FFFFFF;
}


body {
    width: 100vw;
    height: 100vh;
    font-family: 'Comic Neue', cursive;
   overflow-x: hidden;
   
}

.container{
    width: 100vw;
    height: 80vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 5%;
    background-image: url('https://images.unsplash.com/photo-1608111283390-2e333b9b279c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;
    background-position: center;
    color: #ffffff;
}

.head h1{

    font-size: 5vw;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 800;

}

.headpara{
    width: 50vw;
}

.headpara h3{
    font-weight: 200;
    font-size: 1.5vw;
}

.headbtn{
    width: 50vw;
    height: 10vh;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5%;
}


.headbtn button:nth-child(1){
    height: 8vh;
    width: 20vw;
    border-radius: 34px;
    border: none;
    background-color: #FFFFFF;
    font-size: 1.3vw;
    transition: 0.3s ease ;
}

.headbtn button:nth-child(1):hover{
    cursor: pointer;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    color: #5865F2;
}


.headbtn button:nth-child(2){
    height: 8vh;
    width: 20vw;
    border-radius: 34px;
    border: none;
    background-color: #23272A;
    color: #FFFFFF;
    font-size: 1.3vw;
    transition: 0.3s ease ;


}

.headbtn button:nth-child(2):hover{
    cursor: pointer;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}


@media (max-width:440px) {
    .head h1{
        width:76vw;
        font-size: 10vw;
        margin:12vw;
}
    
.headpara{
    width: 70vw;
}

.headpara h3{
    font-weight: 200;
    font-size: 5vw;
}




.headbtn{
    width: 50vw;
    height: 30vh;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10%;
    flex-direction:column;
}


.headbtn button:nth-child(1){
    height: 8vh;
    width: 70vw;
    border-radius: 24px;
    font-size: 4vw;
}


.headbtn button:nth-child(2){
    height: 8vh;
    width: 70vw;
    border-radius: 24px;
    font-size: 4vw;
    margin-top: 2vh;


}


}


.footer{
    width:100vw;
    height: 80vh;
    background-color: #23272A;
}


.footer .top{
    width: 80vw;
    margin:0 10vw;
    height:60vh;
    border-bottom: 1.5px solid #3D458E;
    color:#ffffff;
    display: flex;
    justify-content: space-evenly;
    align-items: center;

}

.footer .top h2{
    color: #5865F2;
    margin-bottom: 2vw;
}

.flag{

    height: 30vh;
    width: 15vw;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

.flag .socials{
    display: flex;
    justify-content: space-evenly;
    font-size: 1.6vw;
}

.flag select{
    background-color: #23272A;
    color: white;
    height: 4vh;
}

.flag .socials h3 i{
    font-weight: 200;

}


.product{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 15vw;
}

.company{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 15vw;
}

.resources{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 18vw;
}


.policies{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 15vw;
}




.footer .bottom{
    width: 80vw;
    margin:0 10vw;
    height:20vh;
    color:#ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.footer .bottom button{
    background-color: #5865F2;
    color: #FFFFFF;
    width: 8vw;
    padding: 1vw;
    border: none;
    border-radius:23px;
    font-weight: 800;
}


@media (max-width:440px) {

.footer{
    height: 100vh;
}

.footer .top{
    width: 90vw;
    height: 80vh;
    margin: 0 5vw;
    justify-content: center;
    flex-wrap: wrap;
    gap: 3%;

}


.flag{

    height: 10vh;
    width: 50vw;
  
}

.flag .socials{
    font-size: 6vw;
}

.flag select{
    background-color: #23272A;
    color: white;
    height: 4vh;
}




.product{
    display: flex;
    flex-direction: column;
    height: 15vw;
}

.company{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 15vw;
}

.resources{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 18vw;
    margin-right: 2vw;
    margin-bottom: 2vw;
}
.policies{
    margin-left: 3vw;
    margin-bottom: 10vw;

}





.footer .bottom button{
    width: 20vw;
}

    
}
</style>

<body>
    <?php require'components/_navbar.php'?>

        <div class="container">
            <div class="head">
            <h1>IMAGINE A PLACE...<?php echo $_SESSION['username'] ?></h1>
            </div>
            <div class="headpara">
            <h3>...where you can belong to a school club, a gaming group, or a worldwide art community. Where just you and a handful of friends can spend time together. A place that makes it easy to talk every day and hang out more often.</h3>
            </div>
            <div class="headbtn">
            <button><i class="ri-download-2-line"></i>Download for Windows</button>
            <button>Open Discord in your browser</button>
            </div>    

        </div>

        
    <div class="footer">
        <div class="top">

            <div class="flag">
                
                <select name="" id="">
                    <option value="India">English</option>
                    <option value="Spain">Español🇪🇸</option>
                    <option value="France">Français🇫🇷</option>
                    <option value="Germany">Deutsch🇩🇪</option>
                    <option value="Italy">Italiano🇮🇹</option>
                    <option value="Japan">日本語🇯🇵</option>
                    <option value="China">中文🇨🇳</option>
                    <option value="Russia">Русский🇷🇺</option>
                    <option value="Arabic">العربية🇸🇦</option>
                    <option value="Portugal">Português🇵🇹</option>
                    <option value="India">हिन्दी🇮🇳</option>
               
                </select>
                <div class="socials">
                    <h3><i class="ri-twitter-x-line"></i></h3>
                    <h3><i class="ri-instagram-line"></i></h3>
                    <h3><i class="ri-facebook-circle-fill"></i></h3>
                    <h3><i class="ri-youtube-line"></i></h3>
                    <h3><i class="ri-tiktok-fill"></i></h3>
                </div>
            </div>



            <div class="product">
                <h2>Product</h2>
                <h4>Download</h4>
                <h4>Nitro</h4>
                <h4>Status</h4>
                <h4>App Directory</h4>
                <h4>New mobile Experience</h4>
            </div>



            <div class="company">
                <h2>Company</h2>
                <h4>About</h4>
                <h4>Jobs</h4>
                <h4>Brand</h4>
                <h4>News Room</h4>
                <h4>Fall Realease</h4>
            </div>



            <div class="resources">
                <h2>Resources</h2>
                <h4>College</h4>
                <h4>Support</h4>
                <h4>Safety</h4>
                <h4>Blog</h4>
                <h4>Feedback</h4>
                <h4>Streamkit</h4>
                <h4>Creators</h4>
                <h4>Community</h4>
            </div>



            <div class="policies">
                <h2>Policies</h2>
                <h4>Terms</h4>
                <h4>Privacyt</h4>
                <h4>Cokkie Setting</h4>
                <h4>Guidlines</h4>
                <h4>Acknowledgement</h4>
                <h4>Company Information</h4>
            </div>


        </div>
        <div class="bottom">
            <h1> <i class="ri-discord-line"></i>Discord</h1>
            <a href="signup.php"><button>Sign up</button></a>

        </div>
    </div>


</body>
</html>