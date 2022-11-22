

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation page</title>
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
              <a href="reserve.php">&nbsp;Reserve&nbsp;</a>
              <a href="confirmation.php">&nbsp;&#10084;&nbsp;Confirmation&nbsp;&#10084;&nbsp;</a>
                <hr>
            </div>
        </div>
    </footer>
    
     <!-- End Header-->
     <!--starting php-->
     <?php
        $confirmation = rand(100000,200000);
        $set = $_GET['set'];
        $date = $_GET['date'];
        $package = $_GET['package'];
        $addMirror1 = $_GET['addMirror1'];
        $addMirror2 = $_GET['addMirror2'];
        $addMirror3 = $_GET['addMirror3'];
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
        
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $totalprice = $_GET[totalprice];

        $packageCost = $_GET['packageCost'];
        $mirror1Cost = $_GET['$mirror1Cost'];
        $mirror2Cost = $_GET['mirror2Cost'];
        $mirror3Cost = $_GET['mirror3Cost'];
        $addHexagonArboCost = $_GET['addHexagonArboCost'];
        $VintageCouchCost = $_GET['VintageCouchCost'];
        $packageCost = $_GET['packageCost'];
        $antiqueGallonCost = $_GET['antiqueGallonCost'];
        $XlwineJugCost = $_GET['XlwineJugCost'];
        $clearAntiqueBallJArs = $_GET['clearAntiqueBallJArs'];
        $blueAntiqueBallJars = $_GET['blueAntiqueBallJars'];
        $bohoBlushCost = $_GET['bohoBlushCost'];
        $rusticBridalCost = $_GET['rusticBridalCost'];
        $rusticKeepsakeCost = $_GET['rusticKeepsakeCost'];
        $terraCottaCost = $_GET['terraCottaCost'];
        $vintageMirrorsCost = $_GET['vintageMirrorsCost'];
        $status = "unconfirmed";
        
     
     echo '<div class= "container">';
        echo '<div class = "row">';
            echo ' <div class = "col-4"></div>';
            echo ' <div class = "col-4">';
                 echo '<div><h1>Confirmation</h1></div>';
                 
            echo'</div>';
            echo ' <div class = "col-4"></div>';
        echo '</div>';
        
                 echo'<hr>';
                 
        echo'<div class="row">';
            echo'<div class="col-12 text-center">';
                 echo "<p style='text-align: center;'>Thank you $fname for your reservation!&nbsp; </p>"; 
                 echo "<p> Below is a summary of your order details.&nbsp;</p>";
                 echo "<p> The Walnut Ridge Wedding Rental Team will be confirming their order soon.</p>";
             echo '</div>';
        echo '</div>';
        echo'<div id="box" class="row">';
            echo '<div  class="col-6 text-center"  >';
                     echo "<p>Name:&nbsp;$fname $lname</p>";
                     echo "<p>Email Adress:&nbsp;$email</p>";
                     echo "<p>Phone Number:&nbsp;$phone</p>";
                     echo "<p>Reservation Date:&nbsp;$date</p> ";
                     echo "<p>Confirmation #: $confirmation</p>";
                     echo"<p>Estimated Total Cost:$ $totalprice </p>";
                    
            echo '</div>';
            echo '<div class="col-6 text-center">';
                     echo "<p>Set:&nbsp;$set</p>";
                     
                     echo "<p>Package:&nbsp;$package</p>";
                     echo "<p>Extras:</p>";
                     
                     if(isset($addMirror1)){
                         echo"<p>&nbsp;$addMirror1</p>";
                         $mirror1 = 1;
                     }else{
                         $mirror1 = 0;
                     };
                     if(isset($addMirror2)){
                         echo"<p>&nbsp;$addMirror2 </p>";
                          $mirror2 = 1;
                     }else{
                         $mirror2 = 0;
                     };
                     if(isset($addMirror3)){
                         echo"<p>&nbsp;$addMirror3 </p>";
                          $mirror3 = 1;
                     }else{
                         $mirror3 = 0;
                     };
                     if(isset($addHexagonArbor)){
                         echo"<p>&nbsp;$addHexagonArbor</p>";
                         $hexarbor = 1;
                     }else{
                         $hexarbor = 0;
                     };
                      if(isset($addVintageCouch)){
                         echo"<p>&nbsp;$addVintageCouch</p>";
                         $vintagecouch = 1; 
                     }else{
                         $vintagecouch = 0;
                     };
                     if(isset($addAntiqueGallon)){
                         echo"<p>&nbsp;$$addAntiqueGallon</p>";
                         $aG = 1;
                     }else{
                         $aG = 0;
                     };
                     if(isset($addXLWineJugs)){
                         echo"<p>&nbsp;$addXLWineJugs</p>";
                         $xljug = 1;
                     }else{
                         $xljug = 0;
                     };
                     if(isset($addClearAntiqueBallJars)){
                         echo"<p>&nbsp;$addClearAntiqueBallJars</p>";
                         $cabj = 1;
                     }
                     else{$cabj = 0;};
                     if(isset($addBlueAntiqueBallJars)){
                         echo"<p>&nbsp;$addBlueAntiqueBallJars </p>";
                         $babj = 1;
                     }else{
                         $babj = 0;
                     };
                       if(isset($addRusticBridal)){
                         echo"<p>&nbsp;$addRusticBridal</p>";
                         $rusticbride = 1;
                     }else{ $rusticbride = 0;
                         
                     };
                     if(isset($addRusticKeepsake)){
                         echo"<p>&nbsp;$addRusticKeepsake</p>";
                         $rustickeep = 1;
                     }else{
                         $rustickeep = 0;
                     };
                     if(isset($addsTerraCotta)){
                         echo"<p>&nbsp;$addsTerraCotta</p>";
                         $terracotta = 1;
                     }else{
                         $terracotta = 0;
                     };
                     if(isset($addVintageMirrors)){
                         echo"<p>&nbsp;$addVintageMirrors</p>";
                         $vintagemirror = 1;
                     }else{
                         $vintagemirror = 0;
                     };
                       if(isset($addBohoBlush)){
                         echo"<p>&nbsp;$addBohoBlush</p>";
                         $boho= 1;
                     }else{
                         $boho = 0;
                     };
            echo '</div>';
           
         echo '</div>';
                    echo '<hr>';
         
     echo '</div>';
     
     //EMAIL CONFIRMATION
     $to = $email;
     $subject = 'Walnut Ridge Reservation Order';
     $from = 'Walnutridgeleathercompany@gmail.com';
     
     // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Create email headers
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
        
    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= "<h1 style='text-align: center;'>Reservation Order Confirmed<h1>";
    $message .= "<h4><p style='text-align: center;'> We are So excited! Thank you $fname $lname Walnut Ridge has confirmed your order.</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Please review your order below!</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Confirmation Number: $confirmation</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Reservation details:</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Name: $fname $lname</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Email: $email</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Phone: $phone</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Date: $date</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Set: $set</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Package: $package</p></h4>";
    $message .= "<h4><p style='text-align: center;'>Extras: $addMirror1  $addMirror2 $addMirror3 $addHexagonArbor $addVintageCouch $addXLWineJugs $addClearAntiqueBallJars $addBlueAntiqueBallJars $addRusticBridal $addRusticBridal $addRusticKeepsake $addsTerraCotta $addVintageMirrors $addBohoBlush</p></h4>";
    $message .= "<h4><p style='text-align: center;'><b>Estimated Total Cost:</b> $$totalprice</p></h4>";
    $message .= '</body></html>';
    
   
     
    // Sending email
    if(mail($to, $subject, $message, $headers)){
        
        echo "<p style='text-align: center;'>Your email has been successfully sent!<p>";
    } else{
       
        echo 'Unable to send email. Please try again.';
    }
    
    
    // sending info to dataBase
    require '/home/thegolde/walnutRidgeDB.php';
    
 
    
    	
    // 	$add2customer = "INSERT INTO `customer` (`first_name`,`last_name`,`email`,`phone`)
    // 	VALUES
    // 	('$fname','$lname','$email','$phone')";
    //     $customerResult = @mysqli_query($cnxn, $add2customer);
        
    //     $add2order = "INSERT INTO `order` (`confirmation_number`,`set`,`package`,`status`,`date`,`total_cost`)
    //     VALUES
    //     ('$confirmation','$set','$package','$status','$date','$totalprice')";
    //     $orderResult = @mysqli_query($cnxn, $add2order);
        
    //     $add2extras = "INSERT INTO `extras` (`add_mirror_1`,`add_mirror_2`,`add_mirror_3`,`add_hexagon_arbor`,`add_vintage_couch`,`add_antique_gallon`,
    //     `add_xl_wine_jugs`,`add_clear_antinque_balljars`,`add_blue_antique_balljars`,`add_boho_blush`,`add_rustic_bridal`,
    //     `add_rustic_keepsake`,`add_terra_cotta`,`add_vintage_mirror`)
    //     VALUES
    //     ('$mirror1','$mirror2','$mirror3','$hexarbor','$vintagecouch','$aG','$xljug','$cabj','$babj','$rusticbride','$rustickeep','$terracotta','$vintagemirror','$boho')";
    //     $extrasResult = @mysqli_query($cnxn, $add2extras);
        
        $add2reservationv3 = "INSERT INTO `reservation_v3` (`confirmation_number`,`set`,`package`,`first_name`,`last_name`,`date`,`email`,`phone`,`total_cost`,`status`,`add_mirror_1`,`add_mirror_2`,`add_mirror_3`,`add_hexagon_arbor`,`add_vintage_couch`,`add_antique_gallon`,
        `add_xl_wine_jugs`,`add_clear_antinque_balljars`,`add_blue_antique_balljars`,`add_boho_blush`,`add_rustic_bridal`,
        `add_rustic_keepsake`,`add_terra_cotta`,`add_vintage_mirror`)
    	VALUES
    	('$confirmation','$set','$package','$fname','$lname','$date','$email','$phone','$totalprice','$status','$mirror1','$mirror2','$mirror3','$hexarbor','$vintagecouch','$aG','$xljug','$cabj','$babj','$rusticbride','$rustickeep','$terracotta','$vintagemirror','$boho')";
        $reservationv3Result = @mysqli_query($cnxn,  $add2reservationv3);
        
        
    ?>
    <!--Footer outside of php?-->
    <footer>
                <div class="row text-center" id="footer">
                    <div class="col-12">
                        <p> Contact Us</p>
                        <h5>Walnut Ridge Leather Company</h5>
                        <h5>Orrville, Ohio</h5>
                        <h5>Walnutridgeleathercompany@gmail.com</h5>
                        <hr>
                    </div>
                </div>
    </footer>
      <script src="script.js"></script>

</body>
</html>
