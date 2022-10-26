<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles//background.css">
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
                    <a class="active" href="#">Analytics</a>
                </li>
                <li>
                    <a href="./details.php">Details</a>
                </li>
            </ul>
        </div>
        <div class="analytics">
            <p class="header">Analytics</p>
            <div class="top">
                <div class="one">
                    <p class="text">Average temperature</p>
                    <p class="status">35 C</p>
                </div>
                <div class="two">
                    <p class="text">number of cows</p>
                    <p class="status">7 Cows</p>
                </div>
                <div class="three">
                    <p class="text">Last check</p>
                    <p class="status">Today 7:00AM</p>
                </div>
            </div>
            <canvas id="canvas"></canvas>
        </div>
    </div>
    <div class="back">
        <div class="background"></div>
        <div class="circle one"></div>
        <div class="circle two"></div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script src="../data/utils.js"></script>
<script src="../data/setup.js"></script>
<script src="../data/config.js"></script>
<script>
    const myChart = new Chart(
        document.getElementById('canvas'),
        config
    );
</script>



</html>