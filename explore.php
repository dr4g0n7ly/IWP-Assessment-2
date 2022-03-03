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
                <?php
                $con = mysqli_connect("localhost", "root", "", "PROMOSAUCE") or die("connection error");
                $query = mysqli_query($con, "SELECT * FROM nft") or die(mysqli_error($con));
                while ($row = mysqli_fetch_array($query)) {
                    extract($row); ?>
                    <div class="expcard">
                        <div class="expbox">
                            <img src="<?php echo $row["image"] ?>" class="NFT">
                        </div>
                        <h4 id="NFT-name"><?php echo $row["Name"] ?></h4>
                        <div class="small-row">
                            <div class="small-col">
                                <p>Owned By</p>
                                <h5><?php echo $row["Owned By"] ?></h5>

                            </div>

                            <div class="small-col-2">
                                <p>Current bid</p>
                                <h4><?php echo $row["Price"] ?> ETH</h4>
                            </div>
                        </div>

                        <div class="bid">
                            <h5>Place bid</h5>
                        </div>

                    </div>
                <?php } ?>


            </div>

        </div>

    </div>


</body>

</html>