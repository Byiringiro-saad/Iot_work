<?php
    if(!empty($_POST["device"]) && !empty($_POST["temperature"])){
        include_once("dataProcess.php");
        $obj = new DataProcess("data.txt");
        $dataArg = $obj->getTimestamp(2) # In Rwanda the offset is 2 hours
            ." -- "
            .$_POST["device"]
            ." -- "
            .$_POST["temperature"]
            ." -- "
            .$_POST["humidity"]
            ." -- "
            .$_POST["heat_index"]
            ."\n";
            
            $obj->writeDataToFile($dataArg);
            print "<div styles='width:100vh; height:50px; display:flex; align-items:center; justify-content:center'>";
            print "<p>";
            print "Success";
            print "</p>";
            print "</div>";
    }
?>
