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
$Wochentag_alt=$_GET["Wochentag"];
$Stunde_alt=$_GET["Stunde"];
$Minute_alt=$_GET["Minute"];
?>

        <form action="../index.php">
                <button type="submit" value="">Startseite</button>
        </form>

    <h1 style="font-family: Trebuchet MS; color:white; font-size:50px"><b><u>Welcome to<br>Clincs Smart Home</u></b></h1>
    <span style="font-family: Helvetica; color:white; font-size:18px">Select the time for the alarm</span><br><br>
    <pre><span style="font-family: Helvetica; color:white; font-size:18px">Wochentag       Stunde      Minute</span></pre>
        <form action="index.php" method="GET">
	    <select name="Wochentag">
		    <option value='Montag'>Montag</option>
		    <option value='Dienstag'>Dienstag</option>
                    <option value='Mittwoch'>Mittwoch</option>
                    <option value='Donnerstag'>Donnerstag</option>
                    <option value='Freitag'>Freitag</option>
                    <option value='Samstag'>Samstag</option>
                    <option value='Sonntag'>Sonntag</option>
	   </select><select name="Stunde">
<?php
		for($i=0;$i<24;$i++) {
		   echo "<option value='$i'>".$i."</option>";
		}
?>
	   <select><select name="Minute">
<?php
                for($i=0;$i<=60;$i++) {
                   echo "<option value='$i'>".$i."</option>";
                }
?>
	   </select><br><br>
            <button type="submit" value="Set time">Set time</button>
        </form><br><br><br>
<?php
$Minute_neu=var_dump($Stunde_alt);
//$Stunde_neu=var_dump(

$test=$Wochentag_alt+repr($Stunde_alt)+repr($Minute_alt);
    $handle=fopen("Wecker.txt","a"); //Hängt Variablen am Dateiende an
    fwrite($handle, $Wochentag_alt);
    fwrite($handle, $Stunde_alt);
    fwrite($handle, $Minute_alt);
    fwrite($handle, $test);
    fclose($handle);
?>
</body>
</html>
