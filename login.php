<?php
require_once "dbconfig.php" ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>PROMOSAUCE | Login</title>
        <link rel="stylesheet" href="mainStyles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    </head>

    <body>

        <div class="header">

            <div class="container">

                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.png" width="125px">
                    </div>
    
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="explore.php">Explore</a></li>
                            <li><a href="login.php">Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="" id="wallet">Connect wallet</a></li>
                        </ul>
                    </nav>
    
                </div>
            </div>

            <div class="login">            
    
                <div class="logincontainer">
    
                    <div class="card">
                        <div class="inner-box" id="card">
        
                            <div class="card-front">
                                <h2>LOGIN</h2>
                                <form action="">
                                    <input type="email" class="input-box" placeholder="Your Email-ID" id="loginEmail">
                                    <input type="password" class="input-box" placeholder="Password" id="loginPassword">
                                    <button type="submit" class="submit-btn" onclick="login()">Submit</button>
                                    <input type="checkbox"><span>Remember Me</span>
                                </form>
                                <button type="button" class="btn" onclick="openRegister()" >I'm new here</button>
                                <a href="">Forgot Password</a>
                            </div>
        
                            <div class="card-back">
                                <h2>SIGN UP</h2>
                                <form action="">
                                    <input type="text" class="input-box" placeholder="Your Name" id="name">
                                    <input type="email" class="input-box" placeholder="Your Email-ID" id="email">
                                    <input type="password" class="input-box" placeholder="Password" id="password">
                                    <button type="submit" class="submit-btn" onclick="register()">Submit</button>
                                    <input type="checkbox"><span>Remember Me</span>
                                </form>
                                <button type="button" class="btn" onclick="openLogin()">I have an account</button>
                                <a href="">Forgot Password</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
    

        </div>
        
        <script>
            var card = document.getElementById('card');
            function openRegister() {
                card.style.transform = "rotateY(-180deg)";
            }
            function openLogin() {
                card.style.transform = "rotateY(0deg)";
            }
            function login(){
                const loginemail = document.getElementById('loginEmail').value;
                const loginpassword=document.getElementById('loginPassword').value;
                if(loginemail===""){
                    return alert("Please enter your email id")
                }
                if(loginpassword===""){
                    return alert("Please enter your password")
                }
                alert("Your email is: "+loginemail+" Your password is :"+loginpassword);
            }
            function register(){ 
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const password=document.getElementById('password').value;
                if(name===""){
                    return alert("Please enter your name")
                }
                if(email===""){
                    return alert("Please enter your email id")
                }
                if(password===""){
                    return alert("Please enter your password")
                }
                alert("Your name is: "+name+" Your email is : "+email+" Your password is :"+password);
            }
        </script>

    </body>

</html>