<!DOCTYPE html>
<html lang="de">
<head>
    <title>Smart Home Clinc</title>
    <meta charset="UTF-8">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body bgcolor=black>
<?php
    $disabledesk=$_GET["disabledesk"];
    $hex1=$_GET["colordesk"];
?>
    <h1 style="font-family: Trebuchet MS; color:white; font-size:50px"><b><u>Welcome to<br>Clincs Smart Home</u></b></h1>
    <span style="font-family: Helvetica; color:white; font-size:18px">Select your color for LED on </span>
        <form action="index.php">
            <input type="color" name="colordesk" value=$hex1><br><br>
                <button type="submit" value="set color desk">Set color on desk</button>
        </form>
            <?php
                list($r, $g, $b) = sscanf($hex1, "#%02x%02x%02x");
                //echo "$hex -> $r $g $b";
                echo exec("sudo pigpiod");
                echo exec("pigs p 27 $r");
                //echo "Pin 27 geht";
                echo exec("pigs p 17 $g");
                //echo "Pin 17 geht";
                echo exec("pigs p 22 $b");
                //echo "Pin 22 geht";
            ?>
        <form action="index.php" method="GET"><br>
            <button type="submit" value="disabledesk" name="disabledesk">Disable desk</button>
        </form>
            <?php
                if($disabledesk == "disabledesk")
                {
                echo exec("sudo pigpiod");
                echo exec("pigs p 27 0");
                echo exec("pigs p 17 0");
                echo exec("pigs p 22 0");
                }
            ?>
<!-- -------------------------------------------- HIER BEGINNT LED 2 ------------------------------------ -->
</body>
</html>
