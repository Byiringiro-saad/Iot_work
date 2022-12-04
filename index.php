<?php
    include_once("./backend/backend.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/background.css">
    <title>IOT-SAAD</title>
</head>

<body>
    <div class="main">
        <div class="sidebar">
            <div class="header">
                <p>Dashboard</p>
            </div>
            <ul>
                <li>
                    <a href="./pages/analytics.php">Analytics</a>
                </li>
                <li>
                    <a href="./pages/details.php">Details</a>
                </li>
            </ul>
        </div>
        <div class="data">
            <p data-text="WELCOME TO IOT-SAAD" class="welcome">WELCOME TO AA-IOT</p>
        </div>
    </div>
    <div class="back">
        <div class="background"></div>
        <div class="circle one"></div>
        <div class="circle two"></div>
    </div>
</body>

</html>