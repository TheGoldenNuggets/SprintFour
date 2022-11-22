<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reserve</title>
    <link rel="stylesheet" href="chooseSetStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Header-->
    <div id="heightFix" class="col-12">
        <img src="Images\mainPageHappyBride.jpg" alt="image of custom layeredarch" id="LayeredArchHeaderImage">


        <img src="Images\walnutridgelogo.png" alt="walnutridge logo" id="wrLogo" class="left">


        <div id="nav-bar" class="top-right" >
            <ul>
                <li id="checkAvailability"><a href="checkAvailabilityForm_sprintOne_final.html">CHECK AVAILABILITY</a></li>
                <li>PHOTO GALLERY</li>
                <li>WEDDING RENTALS</li>
                <li>MEET THE OWNERS</li>
                <li>ABOUT OUR SERVICE</li>
            </ul>
        </div>
    </div>
     <footer>
        <div class="row" id="footer">
            <div class="col-12 text-center">
                <br>
                
              <a href="chooseSet2.html">&nbsp;Dream Set&nbsp;</a>
              <a href="packages.php">&nbsp;Packages&nbsp;</a>
              <a href="extras.php">&nbsp;Extras&nbsp;</a>
              <a href="reserve.php">&nbsp;&#10084;&nbsp;Reserve&nbsp;&#10084;&nbsp;</a>
              <a href="confirmation.php">&nbsp;Confirmation&nbsp;</a>
                <hr>
            </div>
        </div>
    </footer>
    
     <!-- End Header-->
     <!-- php content starts here-->
    <?php
    
        $set = $_GET['set'];
        $date = $_GET['date'];
        $package = $_GET['package'];
        $addMirror1 = $_GET['addMirror1'];
        $addMirror2 = $_GET['addMirror2'];
        $addMirror3 = $_GET['addMirror3'];
        $addHexagonArbor = $_GET['addHexagonArbor'];
        $addHexagonArbor = $_GET['addHexagonArbor'];
        $addVintageCouch = $_GET['addVintageCouch'];
        $addAntiqueGallon = $_GET['addAntiqueGallon'];
        $addXLWineJugs = $_GET['addXLWineJugs'];
        $addClearAntiqueBallJars = $_GET['addClearAntiqueBallJars'];
        $addBlueAntiqueBallJars = $_GET['addBlueAntiqueBallJars'];
        $addBohoBlush = $_GET['addBohoBlush'];
        $addRusticBridal = $_GET['addRusticBridal'];
        $addRusticKeepsake = $_GET['addRusticKeepsake'];
        $addsTerraCotta = $_GET['addsTerraCotta'];
        $addVintageMirrors = $_GET['addVintageMirrors'];
        $upgrade = $_GET['upgrade'];
        
        
        
        if(isset($upgrade)){
            $package = $upgrade;
        }
        
        
        
        
    
    echo '<div class="container-fluid">';
      
            
            echo '<div class="row">';
                echo '<div class="col-6 text-center">';
                    echo '<br><label for="set">Set:&nbsp;</label>';
                    echo "$set<br>";
                    echo '<label for="package">Package:&nbsp;</label>';
                    echo "$package<br>";
                    echo '<label for="date">Date:&nbsp;</label>';
                    echo "$date<br>";
                    echo '<label for="extras">Extras:&nbsp;</label>';
                    echo "$addMirror1&nbsp; $addMirror2&nbsp; $addMirror3&nbsp; $addHexagonArbor&nbsp;";
                    echo "$addVintageCouch &nbsp;$addAntiqueGallon&nbsp; $addXLWineJugs&nbsp;";
                    echo "$addClearAntiqueBallJars&nbsp; $addBlueAntiqueBallJars&nbsp;";
                    echo "$addRusticBridal&nbsp;";
                    echo "$addRusticKeepsake&nbsp; $addsTerraCotta&nbsp; $addVintageMirrors";
                    echo '<hr>';
                    echo "\n<br/>";
                    
                    // ESTIMATED COST
                    // echo preg_replace("/[^0-9]/", ' ', $package);
                      
                      preg_match_all('!\d+!', $package, $matches);
                      $packageCost = implode(' ', $matches[0]);
                    
                      preg_match_all('!\d+!', $addMirror1, $matches1);
                      $mirror1Cost = implode(' ', $matches1[0]);
                      
                      preg_match_all('!\d+!', $addMirror2, $matches2);
                      $mirror2Cost = implode(' ', $matches2[0]);
                      
                      preg_match_all('!\d+!', $addMirror3, $matches3);
                      $mirror3Cost = implode(' ', $matches3[0]);
                      
                      preg_match_all('!\d+!', $addHexagonArbor, $matches4);
                      $addHexagonArboCost = implode(' ', $matches4[0]);
                      
                      preg_match_all('!\d+!', $addVintageCouch, $matches5);
                      $VintageCouchCost = implode(' ', $matches5[0]);
                    
                      preg_match_all('!\d+!', $addAntiqueGallon, $matches6);
                      $antiqueGallonCost = implode(' ', $matches6[0]);
                      
                      preg_match_all('!\d+!', $addXLWineJugs, $matches7);
                      $XlwineJugCost = implode(' ', $matches7[0]);
                      
                      preg_match_all('!\d+!', $addClearAntiqueBallJars, $matches8);
                      $clearAntiqueBallJArs = implode(' ', $matches8[0]);
                      
                      preg_match_all('!\d+!', $addBlueAntiqueBallJars, $matches9);
                      $blueAntiqueBallJars = implode(' ', $matches9[0]);
                      
                        preg_match_all('!\d+!', $addRusticBridal, $matches10);
                      $rusticBridalCost = implode(' ', $matches10[0]);
                      
                      preg_match_all('!\d+!', $addRusticKeepsake, $matches11);
                      $rusticKeepsakeCost = implode(' ', $matches11[0]);
                      
                      preg_match_all('!\d+!', $addsTerraCotta, $matches12);
                      $terraCottaCost = implode(' ', $matches12[0]);
                      
                      preg_match_all('!\d+!', $addVintageMirrors, $matches14);
                      $vintageMirrorsCost = implode(' ', $matches14[0]);
                      
                       preg_match_all('!\d+!', $addBohoBlush, $matches14);
                      $bohoBlushCost = implode(' ', $matches14[0]);
                      
                     $totalprice = $packageCost+$mirror1Cost+$mirror2Cost+$mirror3Cost+$addHexagonArboCost+$VintageCouchCost+$antiqueGallonCost+$XlwineJugCost+$clearAntiqueBallJArs+$blueAntiqueBallJars+$rusticBridalCost+$rusticKeepsakeCost+$terraCottaCost+$vintageMirrorsCost+$bohoBlushCost;

                      echo"<p>Estimated Total Cost: $ $totalprice </p>";
                      
                      
                echo '</div>';
                
                echo '<div class="col-6 ">';
                echo '<form action = "confirmation.php" method = "GET">';
                    echo '<label for="fname">First Name:</label><br>';
                    echo '<input type="text" id="fname" name="fname" >';
                    echo '<label for="lname">Last Name:</label><br>';
                    echo '<input type="text" id="lname" name="lname">';
                    echo '<label for="email">Email:</label><br>';
                    echo '<input type="email" id="email" name="email">';
                    echo '<label for="phone">Phone Number:</label><br>';
                    echo '<input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="xxx-xxx-xxxx">';
                echo '</div>';
            echo '</div>';
            
            
            
            echo '<form action = "confirmation.php" method = "GET">';
            echo '<input type = "hidden" name = "set" value = "'.$set.'">';
            echo '<input type = "hidden" name = "date" value = "'.$date.'">';
            echo '<input type = "hidden" name = "package" value = "'.$package.'">';
            echo '<input type = "hidden" name = "totalprice" value = "'.$totalprice.'">';

               

                if(isset($addMirror1 )){
                    
                     echo '<input type = "hidden" name = "addMirror1" value = "'.$addMirror1.'">';
                }
                if(isset($addMirror2)){
                    echo '<input type = "hidden" name = "addMirror2" value = "'.$addMirror2.'">';
                }
                if(isset($addMirror3)){
                   echo '<input type = "hidden" name = "addMirror3" value = "'.$addMirror3.'">';
                }
                if(isset($addHexagonArbor)){
                   echo '<input type = "hidden" name = "addHexagonArbor" value = "'.$addHexagonArbor.'">';
                }
                if(isset($addVintageCouch)){
                   echo '<input type = "hidden" name = "addVintageCouch" value = "'.$addVintageCouch.'">';
                }
                if(isset($addAntiqueGallon)){
                   echo '<input type = "hidden" name = "addAntiqueGallon" value = "'.$addAntiqueGallon.'">';
                }
                if(isset($addXLWineJugs)){
                   echo '<input type = "hidden" name = "addXLWineJugs" value = "'.$addXLWineJugs.'">';
                }
                if(isset($addClearAntiqueBallJars)){
                   echo '<input type = "hidden" name = "addClearAntiqueBallJars" value = "'.$addClearAntiqueBallJars.'">';
                }
                if(isset($addBlueAntiqueBallJars)){
                   echo '<input type = "hidden" name = "addBlueAntiqueBallJars" value = "'.$addBlueAntiqueBallJars.'">';
                }
                if(isset($addBohoBlush)){
                   echo '<input type = "hidden" name = "addBohoBlush" value = "'.$addBohoBlush.'">';
                }
                if(isset($aaddRusticBridal)){
                   echo '<input type = "hidden" name = "addRusticBridal" value = "'.$addRusticBridal.'">';
                }
                if(isset($addRusticKeepsake)){
                   echo '<input type = "hidden" name = "addRusticKeepsake" value = "'.$addRusticKeepsake.'">';
                }
                if(isset($addsTerraCotta)){
                   echo '<input type = "hidden" name = "addsTerraCotta" value = "'.$addsTerraCotta.'">';
                }
                if(isset($addVintageMirrors)){
                   echo '<input type = "hidden" name = "addVintageMirrors" value = "'.$addVintageMirrors.'">';
                }
                
                
                
               
                    
                     echo '<input type = "hidden" name = "packageCost" value = "'.$packageCost.'">';
                
                
               
                    
                     echo '<input type = "hidden" name = "$mirror1Cost" value = "'.$mirror1Cost.'">';
                
                
                    echo '<input type = "hidden" name = "mirror2Cost" value = "'.$mirror2Cost.'">';
                
                
                   echo '<input type = "hidden" name = "mirror3Cost" value = "'.$mirror3Cost.'">';
                
               
                   echo '<input type = "hidden" name = "addHexagonArboCost" value = "'.$addHexagonArboCost.'">';
                
                
                   echo '<input type = "hidden" name = "VintageCouchCost" value = "'.$VintageCouchCost.'">';
                
                
                   echo '<input type = "hidden" name = "antiqueGallonCost" value = "'.$antiqueGallonCost.'">';
                
               
                   echo '<input type = "hidden" name = "XlwineJugCost" value = "'.$XlwineJugCost.'">';
                
                
                   echo '<input type = "hidden" name = "clearAntiqueBallJArs" value = "'.$clearAntiqueBallJArs.'">';
                
                
                   echo '<input type = "hidden" name = "blueAntiqueBallJars" value = "'.$blueAntiqueBallJars.'">';
                
               
                   echo '<input type = "hidden" name = "bohoBlushCost" value = "'.$bohoBlushCost.'">';
                
                
                   echo '<input type = "hidden" name = "addRusticBridal" value = "'.$rusticBridalCost.'">';
                
               
                   echo '<input type = "hidden" name = "rusticKeepsakeCost" value = "'.$rusticKeepsakeCost.'">';
                
                   echo '<input type = "hidden" name = "addsTerraCotta" value = "'.$terraCottaCost.'">';
                
                
                   echo '<input type = "hidden" name = "vintageMirrorsCost" value = "'.$vintageMirrorsCost.'">';
                
                    echo'<br>';                    echo'<br>';

                
                  echo' <div class="row" >';
               echo' <div class="col-12 text-center">';
                      echo'  <button type="submit" id="btn"><h1>Submit</h1></button>';
               echo'  </div>';
            echo'</div>;'
           
    
    ?><!--Footer outside of php?-->
    
  
    <footer>
                <div class="row" id="footer">
                    <div class="col-12 text-center">
                        <p> Contact Us</p>
                        <h5>Walnut Ridge Leather Company</h5>
                        <h5>Orrville,Ohio</h5>
                        <h5>Walnutridgeleathercompany@gmail.com</h5>
                        <hr>
                    </div>
                </div>
    </footer>
    
      <script src="script.js"></script>

</body>
</html>
