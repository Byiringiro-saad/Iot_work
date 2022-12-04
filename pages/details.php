<?php
    #read file content
    $f=fopen('../backend/data.txt', "r");
    $content="";
    
    while(!feof($f)){
    $content.= fgets($f)."\n";
    }

    fclose($f);

    #Parse the content to get line after line
    foreach(explode("\n",$content) as $row):
    if(!empty($row)){
        $column = explode(" -- ",$row);
        $timestamp=$column[0];
        $device=$column[1];
        $temperature = $column[2]." <sup>o</sup>C";
        $humidity=$column[3];
        $heat_index=$column[4];
        print "<tr>";
        print "<td>".$timestamp."</td>";
        print "<td>".$device."</td>";
        print "<td>".$temperature."</td>";
        print "<td>".$humidity."</td>";
        print "<td>".$heat_index."</td>";
        print "</tr>";
    }
    endforeach;
    print "</tbody>";
    print "</table>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/background.css">
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
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
                    <a href="./analytics.php">Analytics</a>
                </li>
                <li>
                    <a class="active" href="#">Details</a>
                </li>
            </ul>
        </div>
        <div class="analytics">
            <p class="header">Details</p>
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
            <div class="table" id="table"></div>
        </div>
    </div>
    <div class="back">
        <div class="background"></div>
        <div class="circle one"></div>
        <div class="circle two"></div>
    </div>
</body>
<script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>
<script src="../data/table.js"></script>

</html>