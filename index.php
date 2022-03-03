<?php
session_start();
define("server", "localhost");
define("user", "root");
define("password", "");
define("database", "PROMOSAUCE");
$con = mysqli_connect(server, user, password, database) or die("connection error");
echo "<script>alert('Connected to PROMOSAUCE database')</script>)";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PROMOSAUCE | NFT Market place</title>
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

        <div class="row">

            <div class="col text">
                <h1>Discover, Find, Sell<br>Extraordinary NFTs</h1>
                <p>marketPlace for all kinds of character<br>collections of Non Fungible Tokens</p>
                <a href="explore.html" id="btn">Explore Now 🤖</a>
            </div>

            <div class="col">
                <img src="images/imgslider2.png">
            </div>

        </div>

    </div>
    <div class="footer">
        <span class="ftext">Nishanth Pilli </span>
        <span class="ftext">20BCE0906</span><br>
        <span class="ftext">IWP ASSESSMENT-2</span>
    </div>

</body>

</html>