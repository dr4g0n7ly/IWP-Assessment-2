<?php
require_once "dbconfig.php" 
$result = select("SELECT * FROM 'nft'") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROMOSAUCE | Explore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mainStyles.css">
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

        <h1 id="exploretext">Explore NFTs</h1>

        <div class="section">

            <div class="expcards">

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-4.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-2">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-3.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-2">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-6.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-2">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-1.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-3">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-5.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-2">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-2.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-2">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-3.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-2">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>

                <div class="expcard">

                    <div class="expbox">
                        <img src="images/NFT-4.jpg" class="NFT">
                    </div>
                    <h4 id="NFT-name">Pink Bomb</h4>
                    <div class="small-row">
                        <div class="small-col">
                            <p>Owned By</p>
                            <h5>SalvadorDali</h5>

                        </div>
                    
                        <div class="small-col-2">
                            <p>Current bid</p>
                            <h4>4.89 ETH</h4>
                        </div>
                    </div>

                    <div class="bid">
                        <h5>Place bid</h5>
                    </div>

                </div>
                
            </div>

        </div>

    </div>

    
</body>
</html>