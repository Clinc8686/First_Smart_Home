<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Smart Home Clinc</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link href="assets/css/main.css" rel="stylesheet">
<?php
$disable_desk=$_GET["disable_desk"];
$hex1=$_GET["farbe1"];
$disable_bed=$_GET["disable_bed"];
$hex2=$_GET["farbe2"];
?>
    </head>
    <body background="assets/images/index.jpg">
        <div class="site" id="page">
            <section class="hero-section hero-section--image clearfix clip">
                <div class="hero-section__wrap">
                    <div class="container">
                        <div class="title-01 title-01--11 text-center">
                            <h2 class="title__heading">
                                <span>Welcome to <br>Clincs Smart Home</span>
                            </h2>
			        <!-- ------------------------ START FÜR LED 1 ------------->
                                <div class="title__action" method="GET">
				     <form action="index.php">
  					Select your color for LED on desk:
  					    <input type="color" name="farbe1"><br><br>
  					    <input type="submit" class="btn btn-success" value="set color desk">
				     </form>
					<?php
					   $hex1=$_GET["farbe1"];
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

				</div> <!-- btn btn-success ist Design für Button -->
				<div class="title__action" method="GET">
				     <form action="index.php"><br>
                                            <input type="submit" class="btn btn-success" value="disable_desk" name="disable_desk">
                                     </form>
				</div> <!-- btn btn-success ist Design für Button -->
			      <?php
				   if($disable_desk == "disable_desk")
				   {
				   echo exec("sudo pigpiod");
				   echo exec("pigs p 27 0");
				   echo exec("pigs p 17 0");
				   echo exec("pigs p 22 0");
				   }
			      ?>
			      <!-- ---------------------ENDE LED 1 & START LED 2----------------- -->
			      <div class="title__action" method="GET">
                                     <form action="index.php"><br>
                                        Select your color for LED on bed:
                                            <input type="color" name="farbe2"><br><br>
                                            <input type="submit" class="btn btn-success" value="set color bed">
                                     </form>
                                        <?php
                                           $hex2=$_GET["farbe2"];
                                           list($r, $g, $b) = sscanf($hex2, "#%02x%02x%02x");
                                           //echo "$hex -> $r $g $b";
                                           echo exec("sudo pigpiod");
                                           echo exec("pigs p 27 $r");
                                           //echo "Pin 27 geht";
                                           echo exec("pigs p 17 $g");
                                           //echo "Pin 17 geht";
                                           echo exec("pigs p 22 $b");
                                           //echo "Pin 22 geht";
                                        ?>

                                </div> <!-- btn btn-success ist Design für Button -->
                                <div class="title__action" method="GET">
                                     <form action="index.php"><br>
                                            <input type="submit" class="btn btn-success" value="disable_bed" name="disable_bed">
                                     </form>
                                </div> <!-- btn btn-success ist Design für Button -->
                              <?php
                                   if($disable_bed == "disable_bed")
                                   {
                                   echo exec("sudo pigpiod");
                                   echo exec("pigs p 27 0");
                                   echo exec("pigs p 17 0");
                                   echo exec("pigs p 22 0");
                                   }
                              ?>

			    <!-- ---------------------ENDE LED 2 & START LED 3----------------- -->
			    <div class="title__action" method="GET">
                                     <form action="index.php">
                                        Select your color for LED on desk:
                                            <input type="color" name="farbe1"><br><br>
                                            <input type="submit" class="btn btn-success" value="set color desk">
                                     </form>
                                        <?php
                                           $hex1=$_GET["farbe1"];
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

                                </div> <!-- btn btn-success ist Design für Button -->
                                <div class="title__action" method="GET">
                                     <form action="index.php"><br>
                                            <input type="submit" class="btn btn-success" value="disable_desk" name="disable_desk">
                                     </form>
                                </div> <!-- btn btn-success ist Design für Button -->
                              <?php
                                   if($disable_desk == "disable_desk")
                                   {
                                   echo exec("sudo pigpiod");
                                   echo exec("pigs p 27 0");
                                   echo exec("pigs p 17 0");
                                   echo exec("pigs p 22 0");
                                   }
                              ?>
                              <!-- ---------------------ENDE LED 3----------------- -->

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
