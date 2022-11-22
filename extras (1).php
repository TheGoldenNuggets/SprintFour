<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Extras</title>
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
              <a href="extras.php">&nbsp;&#10084;&nbsp;Extras&nbsp;&#10084;&nbsp;</a>
              <a href="reserve.php">&nbsp;Reserve&nbsp;</a>
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
        $datearray = explode("-",$date);
        $month = $datearray[1];
        $upgrade;
    
        
        
        echo '<div class="container-fluid">';
            // echo '<div class="row text-center">';
            
              // echo "<p>&nbsp;&nbsp;&nbsp;| Set: $set &nbsp;|&nbsp;</p>";
            //     echo "<br>";
            //     echo "<p> Date: $date &nbsp;|&nbsp;</p>";
            //     echo "<br>";
            //     echo "<p>Package: $package &nbsp;|&nbsp;</p>";
            //     if(isset($addMirror1 )){
            //         echo '<p>&nbsp; + A Small Mirror($40) &nbsp;| </p> ';
            //     }
            //     if(isset($addMirror2)){
            //         echo '<p>&nbsp; + A Medium Mirror($60) &nbsp;| </p> ';
            //     }
            //     if(isset($addMirror3)){
            //         echo '<p>&nbsp; + A Large Mirror($80) &nbsp;| </p> ';
            //     }
            // echo "</div>";
            
            echo '<div class="row text-center">';
            echo'<div class="col-12 text-center">';
                echo '<p>&nbsp;&nbsp;&nbsp;<i><h3>Please consider some extras.</p>';
                echo '<br>';
            echo '</div>';
            echo '</div>';
            
                        echo '<div class="row text-center">';
                echo '<div class="col-4">';
        //          if($month == "01"){
        //     echo "<p>Hexagon Arbor is not availible in January</p>";
        // }else{
                    echo "<h3>Hexagon Arbor</h3>";
                    echo "<h6>Handmade; incorporating reclaimed wood, & custom laser cut metal brackets.</u></h6>";
                    echo "<h6>Price includes delivery, set-up and tear-down within a 30-mile radius of Orrville, OH $350</u></h6>";
                
                    
        
        echo "<br>"; 

        
                     echo '<form action = "reserve.php" method = "GET">';
                    echo '<label for="Hexagon Arbor($350)"><b>Hexagon Arbor($350)</b></label>
                    <input type="checkbox" id="Hexagon Arbor($350)" name="addHexagonArbor" value="Hexagon Arbor($350)" >';
      //  }
        //       if($month == "05"){
        //     echo "<p>Delivery is not availible in May</p>";
        // }else{
                        echo '<label for="Delivery"><b>&nbsp;&nbsp;&nbsp;Delivery</b></label>
                    <input type="checkbox" id="Delivery" name="addDelivery" value="Delivery" >';
                   
       // }
                echo "</div>";

            
                echo '<div class="col-4">';
                      
                    echo "<h3>Decor Accents</h3>";
                    echo "<h6>Vintage sofa, convenient containers, and one-of-a-kind extras to streamline & complete your look. </h6>";
                    echo "<h6>(Decor pieces are available to rental customers who have contracted a rental set or minimum order for their event date.)</h6>";
        //             if($month == "02"){
        //     echo "<p>Vintage Couch is not availible in Febuary</p>";
        // }else{
                     echo '<form action = "reserve.php" method = "GET">';
                    echo '<label for="Vintage Couch - $99"><b>Vintage Couch - $99</b></label>
                    <input type="checkbox" id="Vintage Couch - $99" name="addVintageCouch" value="Vintage Couch - $99" >';
       // }
        //              if($month == "03"){
        //     echo "<p>Jugs are not availible in March</p>";
        // }else{
                     echo '<label for="Antique Gallon Jugs - $4 each"><b>&nbsp;&nbsp;&nbsp;Antique Gallon Jugs - $4 each</b></label>
                    <input type="checkbox" id="Antique Gallon Jugs - $4 each" name="addAntiqueGallon" value="Antique Gallon Jugs - $4 each" >';
                    
                     echo '<label for="XL Wine Jugs - $20 each"><b>&nbsp;&nbsp;&nbsp;XL Wine Jugs - $20 each</b></label>
                    <input type="checkbox" id="XL Wine Jugs - $20 each" name="addXLWineJugs" value="XL Wine Jugs - $20 each" >';
    //   // }
    //                  if($month == "04"){
    //         echo "<p>Jars are not availible in April</p>";
    //     }else{
                     echo '<label for="Clear Antique Ball Jars - $30 "><b>Clear Antique Ball Jars - $30 </b></label>
                    <input type="checkbox" id="Clear Antique Ball Jars - $30 " name="addClearAntiqueBallJars" value="Clear Antique Ball Jars - $30 " >';
                    
                     echo '<label for="Blue Antique Ball Jars - $30"><b>&nbsp;&nbsp;&nbsp;Blue Antique Ball Jars - $30</b></label>
                    <input type="checkbox" id="Blue Antique Ball Jars - $30" name="addBlueAntiqueBallJars" value="Blue Antique Ball Jars - $30" >';
       // }

                echo "</div>";

                echo '<div class="col-4">';
                
                
                    echo "<h3>Party Pack Rentals</h3>";
                    echo "<h6>Luxury signage for bridal showers, baby showers, birthday parties, anniversaries,graduation parties, and celebrations of life.  </h6>";
                    
        
        echo "<br>";
        echo "<br>"; 

        
                    
                     echo '<form action = "reserve.php" method = "GET">';
                     
                    echo '<label for="Boho Blush Package $129"><b>Boho Blush Package $129</b></label>
                    <input type="checkbox" id="Boho Blush Package $129" name="addBohoBlush" value="Boho Blush Package $129" >';
                    
                     echo '<label for="Rustic Bridal Shower $99"><b>Rustic Bridal Shower $99</b></label>
                    <input type="checkbox" id="Rustic Bridal Shower $99" name="addRusticBridal" value="Rustic Bridal Shower $99" >';
                    
                    echo '<label for="Rustic Keepsake Shower $99"><b>Rustic Keepsake Shower $99</b></label>
                    <input type="checkbox" id="Rustic Keepsake Shower $99" name="addRusticKeepsake" value="Rustic Keepsake Shower $99" >';
                    
                     echo '<label for="TERRACOTTA ARCH PACKAGE $129"><b>TERRACOTTA ARCH PACKAGE $129</b></label>
                    <input type="checkbox" id="TERRACOTTA ARCH PACKAGE $129" name="addsTerraCotta" value="TERRACOTTA ARCH PACKAGE $129" >';
                    
                     echo '<label for="VINTAGE MIRRORS $229 "><b>VINTAGE MIRRORS $229</b></label>
                    <input type="checkbox" id="Vintage Mirrors $229" name="addVintageMirrors" value="VINTAGE MIRRORS $229" >';
                    

                    
                    
                echo "</div>";
                  
                echo '<div class="col-12">';
                // Layered Arch
                if($set=="Layered Arch"){
                    if($package == "Pick Four Rental($649)"){
                        echo"<p> You have made a fantastic decision choosing $package... </p>";
                       echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                       
                       echo '<form action = "reserve.php" method = "GET">';
                       echo '<input type="radio" id="package" name="upgrade" value= "Pick Six Rental($749)">';
                       echo '<label for="Pick Six Rental">&nbsp;Pick Six Rental + $100</label><br>';
                        echo '<h6>- Customized welcome sign (choice of trellis halfarch or smooth half arch insert up to 25 words text)</h6>';
                        echo '<h6>- 3 piece seating chart half arch set (print service for cards is available for a small additional fee)</h6>';
                        echo '<h6>- Table numbers 1-30</h6>';
                        echo '<h6>- Gold Card Terrarium with choice of “Gifts & Cards” sign)</h6>';
                        echo '<h6>- 5 “Reserved” signs</h6>';
                        echo '<h6>- Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Dont Mind if I Do," “In Loving Memory”)</h6>';
                        echo '<h6>- Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</h6>';
                        echo '<h6>- 1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</h6>';
                        echo '<h6>- 1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</h6>';
                        echo '<h6>- Unplugged Ceremony sign</h6>';
                        echo '<h6>- Hairpin Record Player Prop</h6>';
                        echo '<h6>- "Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above</h6>';
                       echo"<hr>";
                       echo '<input type="radio" id="package" name="upgrade" value= "Full Set Rental($849)">';
                       echo '<label for="Pick Six Rental">&nbsp;Full Set Rental + $200</label><br>';
                        echo '<h6>- Customized welcome sign (choice of trellis halfarch or smooth half arch insert up to 25 words text)</h6>';
                        echo '<h6>- 3 piece seating chart half arch set (print service for cards is available for a small additional fee)</h6>';
                        echo '<h6>- Table numbers 1-30</h6>';
                        echo '<h6>- Gold Card Terrarium with choice of “Gifts & Cards” sign)</h6>';
                        echo '<h6>- 5 “Reserved” signs</h6>';
                        echo '<h6>- Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Dont Mind if I Do," “In Loving Memory”)</h6>';
                        echo '<h6>- Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</h6>';
                        echo '<h6>- 1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</h6>';
                        echo '<h6>- 1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</h6>';
                        echo '<h6>- Unplugged Ceremony sign</h6>';
                        echo '<h6>- Hairpin Record Player Prop</h6>';
                        echo '<h6>- "Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above</h6>';
                       }
                    else if ($package == "Pick Six Rental($749)"){
                        echo"<p> You have made a fantastic decision choosing $package... </p>";
                       echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                        echo '<form action = "reserve.php" method = "GET">';
                        echo '<input type="radio" id="package" name="upgrade" value= "Full Set Rental($849)">';
                        echo '<label for="Pick Six Rental">&nbsp;Full Set Rental + $100</label><br>';
                        echo '<h6>- Customized welcome sign (choice of trellis halfarch or smooth half arch insert up to 25 words text)</h6>';
                        echo '<h6>- 3 piece seating chart half arch set (print service for cards is available for a small additional fee)</h6>';
                        echo '<h6>- Table numbers 1-30</h6>';
                        echo '<h6>- Gold Card Terrarium with choice of “Gifts & Cards” sign)</h6>';
                        echo '<h6>- 5 “Reserved” signs</h6>';
                        echo '<h6>- Up to 2 Double Half Arch Small signs (“Gifts & Cards,” “Take One,” “Dont Mind if I Do," “In Loving Memory”)</h6>';
                        echo '<h6>- Up to 2 Sunset Small signs (“Please Sign Our Guestbook,” “Gifts & Cards,” “In Loving Memory”)</h6>';
                        echo '<h6>- 1 Double Half Arch Medium sign (“Cheers,” “The Bar,” “Guestbook,” or Custom Acrylic Text)</h6>';
                        echo '<h6>- 1 Double Full Arch Medium sign (“Signature Drinks,” or Custom Acrylic Text)</h6>';
                        echo '<h6>- Unplugged Ceremony sign</h6>';
                        echo '<h6>- Hairpin Record Player Prop</h6>';
                        echo '<h6>- "Mr & Mrs" Custom Head Table Keepsake is a free gift in addition to the items above</h6>';
                      } // end of else if pick six layard arch
                }
                  // modern round
                  else if($set=="Modern Round"){
                      if($package == "Pick Four Rental($599)"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "reserve.php" method = "GET">';
                          echo '<input type="radio" id="package" name="upgrade" value="Pick Six Rental($699)">';
                          echo '<label for="Pick Six Rental">&nbsp;Pick Six Rental + $100</label><br>';
                           echo '<h6>- Large Custom Welcome (round center becomes a keepsake)</h6>';
                
                            echo '<h6>- Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</h6>';
                            
                            echo '<h6>- 1-30 free standing table numbers</h6>';
                            
                            echo '<h6>- Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</h6>';
                            
                            echo '<h6>- Set of “Reserved” signs (5)</h6>';
                            
                            echo '<h6>- 2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</h6>';
                            
                            echo '<h6>- 2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</h6>';
                            
                            echo '<h6>- 1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</h6>';
                            
                            echo '<h6>- All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</h6>';
                            
                            
                            echo '<hr>';
                            echo '<input type="radio" id="package" name="upgrade" value="Full Set Rental($799)">';
                            echo '<label for="Full Set Rental">&nbsp;Full Set Rental + $200</label><br>';
                             echo "<h6><u>Includes each of the following 10 items.</u></h6>";
                
                            echo '<h6>- Large Custom Welcome (round center becomes a keepsake)</h6>';
                            
                            echo '<h6>- Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</h6>';
                            
                            echo '<h6>- 1-30 free standing table numbers</h6>';
                            
                            echo '<h6>- Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</h6>';
                            
                            echo '<h6>- Set of “Reserved” signs (5)</h6>';
                            
                            echo '<h6>- 2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</h6>';
                            
                            echo '<h6>- 2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</h6>';
                            
                            echo '<h6>- 1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</h6>';
                            
                            echo '<h6>- All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</h6>';
                            
                          
                      }// if modern round pick four
                      else if($package == "Pick Six Rental($699)"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "reserve.php" method = "GET">';
                          echo '<input type="radio" id="package" name="upgrade" value="Full Set Rental($799)">';
                            echo '<label for="Full Set Rental">&nbsp;Full Set Rental + $100</label><br>';
                             echo "<h6><u>Includes each of the following 10 items.</u></h6>";
                
                            echo '<h6>- Large Custom Welcome (round center becomes a keepsake)</h6>';
                            
                            echo '<h6>- Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</h6>';
                            
                            echo '<h6>- 1-30 free standing table numbers</h6>';
                            
                            echo '<h6>- Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</h6>';
                            
                            echo '<h6>- Set of “Reserved” signs (5)</h6>';
                            
                            echo '<h6>- 2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</h6>';
                            
                            echo '<h6>- 2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</h6>';
                            
                            echo '<h6>- 1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</h6>';
                            
                            echo '<h6>- All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</h6>';
                      }
                  }// if modern round
                  
                  else if($set=="Dark Walnut"){
                      if($package == "Pick Four Rental($199)"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "extras.php" method = "GET">';
                          echo '<input type="radio" id="package" name="upgrade" value="Dark Walnut No Seating Rental($245)">';
                          echo '<label for="Dark Walnut "No Seating" Rental($245)">&nbsp;Dark Walnut No Seating Rental + $46</label><br>';
                          echo "<h6><u>Includes:</u></h6>";
                            echo '<h6>- “Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</h6>';
                            
                            echo '<h6>- Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc))</h6>';
                            
                            echo '<h6>- “Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</h6>';
                            
                            echo '<h6>- “We know that you would be here today if Heaven weren’t so far away”  (10” x 10.5” memorial sign or seat saver with small easel)</h6>';
                            
                            echo '<h6>- “Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</h6>';
                            
                            echo '<h6>- “Better” & “Together” Chair Hangers (with cord 10.25” x 17.25”) (2pc)</h6>';
                            
                            echo '<h6>- “Please Sign our Guestbook” (self standing 7.25” x 16”)</h6>';
                            
                            echo '<h6>- “Just Married” & “Thank You” (reversible photo-shoot prop 7.25” x 31”)</h6>';
                            
                            echo '<h6>- “Take One” (7.25” x 7.25”)</h6>';
                            
                            echo '<h6>- “Programs” (7.25” x 16”)</h6>';
                            
                            echo '<h6>- “Enjoy the Moment, no photography please” 10.5” x 17” with small easel</h6>';
                            
                            echo '<h6>- 8 Reserved signs (3.5” x 12”  4 with cord hanger option) (8pc)</h6>';
                            
                            echo '<h6>- Antique Leather and Wooden Trunk with “Cards” Banner</h6>';
                          echo '<hr>';
                          
                          echo '<input type="radio" id="package" name="upgrade" value="Full Set Rental($299)">';
                            echo '<label for="Full Set Rental">&nbsp;Full Set Rental + $100</label><br>';
                             echo "<h6><u>Includes:</u></h6>";
                
                            echo '<h6>- “Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</h6>';
                            
                            echo '<h6>- “Find your Seat”  (35.5” x 21” organizer with 30 clips & easel) </h6>';
                            
                            echo '<h6>- Table Numbers, double-sided (Numbers 1-30, 3.5” x 9”)</h6>';
                            
                            echo '<h6>- Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc))</h6>';
                            
                            echo '<h6>- “Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</h6>';
                            
                            echo '<h6>- “We know that you would be here today if Heaven weren’t so far away”  (10” x 10.5” memorial sign or seat saver with small easel)</h6>';
                            
                            echo '<h6>- “Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</h6>';
                            
                            echo '<h6>- “Better” & “Together” Chair Hangers (with cord 10.25” x 17.25”) (2pc)</h6>';
                            
                            echo '<h6>- “Please Sign our Guestbook” (self standing 7.25” x 16”)</h6>';
                            
                            echo '<h6>- “Just Married” & “Thank You” (reversible photo-shoot prop 7.25” x 31”)</h6>';
                            
                            echo '<h6>- “Take One” (7.25” x 7.25”)</h6>';
                            
                            echo '<h6>- “Programs” (7.25” x 16”)</h6>';
                            
                            echo '<h6>- “Enjoy the Moment, no photography please” 10.5” x 17” with small easel</h6>';
                            
                            echo '<h6>- 8 Reserved signs (3.5” x 12”  4 with cord hanger option) (8pc)</h6>';
                            
                            echo '<h6>- Antique Leather and Wooden Trunk with “Cards” Banner</h6>';
                      }// if pick four walnut
                      else if ($package == "Dark Walnut No Seating Rental($245)"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "extras.php" method = "GET">';
                          echo '<input type="radio" id="package" name="upgrade" value="Full Set Rental($299)">';
                            echo '<label for="Full Set Rental">&nbsp;Full Set Rental + $100</label><br>';
                             echo "<h6><u>Includes:</u></h6>";
                
                            echo '<h6>- “Welcome to Our Beginning” Round (24” diameter, with easel) or Rectangular (35.5” x 21” with easel)</h6>';
                            
                            echo '<h6>- “Find your Seat”  (35.5” x 21” organizer with 30 clips & easel) </h6>';
                            
                            echo '<h6>- Table Numbers, double-sided (Numbers 1-30, 3.5” x 9”)</h6>';
                            
                            echo '<h6>- Antique Jug with “Honeymoon Fund” (jug & mini-hanger, 4.75” x 10”) (2pc))</h6>';
                            
                            echo '<h6>- “Mr. & Mrs.” Head Table Sign with small easel 7.25” x 22.5”</h6>';
                            
                            echo '<h6>- “We know that you would be here today if Heaven weren’t so far away”  (10” x 10.5” memorial sign or seat saver with small easel)</h6>';
                            
                            echo '<h6>- “Here comes the Bride” ring bearer carrier  (10.25” x 17.25” with cord)</h6>';
                            
                            echo '<h6>- “Better” & “Together” Chair Hangers (with cord 10.25” x 17.25”) (2pc)</h6>';
                            
                            echo '<h6>- “Please Sign our Guestbook” (self standing 7.25” x 16”)</h6>';
                            
                            echo '<h6>- “Just Married” & “Thank You” (reversible photo-shoot prop 7.25” x 31”)</h6>';
                            
                            echo '<h6>- “Take One” (7.25” x 7.25”)</h6>';
                            
                            echo '<h6>- “Programs” (7.25” x 16”)</h6>';
                            
                            echo '<h6>- “Enjoy the Moment, no photography please” 10.5” x 17” with small easel</h6>';
                            
                            echo '<h6>- 8 Reserved signs (3.5” x 12”  4 with cord hanger option) (8pc)</h6>';
                            
                            echo '<h6>- Antique Leather and Wooden Trunk with “Cards” Banner</h6>';
                      }
                  }// if walnut
                  
                  else if($set=="Rustic Wood"){
                      if($package == "Rustic Wood “You Pick Four” Rental $199"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                       echo '<form action = "extras.php" method = "GET">';
                       echo '<input type="radio" id="package" name="upgrade" value="Rustic Wood No Seating Rental $245">';
                         echo '<label for="Rustic Wood No Seating Rental $245">&nbsp;Rustic Wood No Seating Rental + $46</label><br>';
                         echo "<h6><u>Includes:</u></h6>";
                
                         echo '<h6>- “Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</h6>';
                        
                        echo '<h6>- Antique Glass Jug with “Honeymoon Fund” (jug & mini- hanger 4.75”x 10”) (2pc) (2pc))</h6>';
                        
                        echo '<h6>- “Mr. & Mrs.” Head Table Blocks (3pc)</h6>';
                        
                        echo '<h6>- “We know that you would be here today if Heaven weren’t so far away” (9.75” x 16” framed memorial seat saver)</h6>';
                        
                        echo '<h6>- Here Comes Your Bride” ring bearer carrier (9.75 x 15” framed with cord)</h6>';
                        
                        echo '<h6>- “Mr. & Mrs.” Chair Hangers (with cord 9.75” x 15”) (2pc)</h6>';
                        
                        echo '<h6>- “Guestbook please sign” (self standing 5.5” x 20”)</h6>';
                        
                        echo '<h6>- “Just Married” & “Thank You” (Reversible photo-shoot prop 5.5” x 29.5”)</h6>';
                        
                        echo '<h6>- "Take One” (5.5” x 6”)</h6>';
                        
                        echo '<h6>- “Programs” (15.75” x 5.5”)</h6>';
                        
                        echo '<h6>- “In Loving Memory of those who are forever in our hearts” (6”x 5.5” self standing)</h6>';
                        
                        echo '<h6>- 8 “Reserved” signs (2.75” x 10” 4 with cord hanger option) (8pc)</h6>';
                        
                        echo '<h6>- Antique Whitewashed Trunk with “Cards” Bannerr</h6>';
                        echo"<hr>";
                        echo '<input type="radio" id="package" name="upgrade" value="Rustic Wood Full Package Rental $299">';
            echo '<label for="Rustic Wood Full Package Rental $299">&nbsp;Rustic Wood Full Package Rental + $100</label><br>';
            echo "<h6><u>Includes:</u></h6>";
                
                echo '<h6>- “Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</h6>';
                
                echo '<h6>- “Find your Seat” (32.5” x 18.5” framed organizer with 25 clips & easel) </h6>';
                
                echo '<h6>- Table Numbers (1-25 3.5”x 3.5” with mini easels) (50 pc)</h6>';
                
                echo '<h6>- Antique Glass Jug with “Honeymoon Fund” (jug & mini- hanger 4.75”x 10”) (2pc) (2pc))</h6>';
                
                echo '<h6>- “Mr. & Mrs.” Head Table Blocks (3pc)</h6>';
                
                echo '<h6>- “We know that you would be here today if Heaven weren’t so far away” (9.75” x 16” framed memorial seat saver)</h6>';
                
                echo '<h6>- Here Comes Your Bride” ring bearer carrier (9.75 x 15” framed with cord)</h6>';
                
                echo '<h6>- “Mr. & Mrs.” Chair Hangers (with cord 9.75” x 15”) (2pc)</h6>';
                
                echo '<h6>- “Guestbook please sign” (self standing 5.5” x 20”)</h6>';
                
                echo '<h6>- “Just Married” & “Thank You” (Reversible photo-shoot prop 5.5” x 29.5”)</h6>';
                
                echo '<h6>- "Take One” (5.5” x 6”)</h6>';
                
                echo '<h6>- “Programs” (15.75” x 5.5”)</h6>';
                
                echo '<h6>- “In Loving Memory of those who are forever in our hearts” (6”x 5.5” self standing)</h6>';
                
                echo '<h6>- 8 “Reserved” signs (2.75” x 10” 4 with cord hanger option) (8pc)</h6>';
                
                echo '<h6>- Antique Whitewashed Trunk with “Cards” Bannerr</h6>';
                      }
                      else if($package == "Rustic Wood No Seating Rental $245"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "extras.php" method = "GET">';
                          echo '<input type="radio" id="package" name="upgrade" value="Rustic Wood Full Package Rental $299">';
            echo '<label for="Rustic Wood Full Package Rental $299">&nbsp;Rustic Wood Full Package Rental + $54</label><br>';
            echo "<h6><u>Includes:</u></h6>";
                
                echo '<h6>- “Welcome to Our Beginning” (approximately 32” x 18 ”with easel) Your choice of white framed, or rustic stained</h6>';
                
                echo '<h6>- “Find your Seat” (32.5” x 18.5” framed organizer with 25 clips & easel) </h6>';
                
                echo '<h6>- Table Numbers (1-25 3.5”x 3.5” with mini easels) (50 pc)</h6>';
                
                echo '<h6>- Antique Glass Jug with “Honeymoon Fund” (jug & mini- hanger 4.75”x 10”) (2pc) (2pc))</h6>';
                
                echo '<h6>- “Mr. & Mrs.” Head Table Blocks (3pc)</h6>';
                
                echo '<h6>- “We know that you would be here today if Heaven weren’t so far away” (9.75” x 16” framed memorial seat saver)</h6>';
                
                echo '<h6>- Here Comes Your Bride” ring bearer carrier (9.75 x 15” framed with cord)</h6>';
                
                echo '<h6>- “Mr. & Mrs.” Chair Hangers (with cord 9.75” x 15”) (2pc)</h6>';
                
                echo '<h6>- “Guestbook please sign” (self standing 5.5” x 20”)</h6>';
                
                echo '<h6>- “Just Married” & “Thank You” (Reversible photo-shoot prop 5.5” x 29.5”)</h6>';
                
                echo '<h6>- "Take One” (5.5” x 6”)</h6>';
                
                echo '<h6>- “Programs” (15.75” x 5.5”)</h6>';
                
                echo '<h6>- “In Loving Memory of those who are forever in our hearts” (6”x 5.5” self standing)</h6>';
                
                echo '<h6>- 8 “Reserved” signs (2.75” x 10” 4 with cord hanger option) (8pc)</h6>';
                
                echo '<h6>- Antique Whitewashed Trunk with “Cards” Bannerr</h6>';
                      }
                  }// if rustic wood
                    
                  else if($set == "Vintage Mirror"){
                      if ($package == "Vintage Mirror Pick Four Rental Package ($599)"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "extras.php" method = "GET">';
                          echo '<input type="radio" id="package" name="upgrade" value="Vintage Mirror Pick Six Rental Package ($649)">';
                echo '<label for="Vintage Mirror Pick 6 Rental Package ($649)">&nbsp;Vintage Mirror Pick Six Rental Package + $50</label><br>';
                echo "<h6><u>PRICING INCLUDES DELIVERY AND TEARDOWN WITH A 30 MILE RADIUS OF ORRVILLE, OH.
CHOOSE 6 OF THE FOLLOWING ITEMS</u></h6>";
                
              echo '<h6>- Welcome Sign with custom names & date & large wrought iron easel</h6>';
                
                echo '<h6>- Antique Typewriter Rental with customized message (100 words or less)</h6>';
                
                echo '<h6>- Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</h6>';
                
                echo '<h6>- Table Numbers 1-30</h6>';
                
                echo '<h6>- Leather Domed Trunk with “cards” mirror with stand</h6>';
                
                echo '<h6>- “Enjoy the Moment- no photography please” mirror with stand</h6>';
                
                echo '<h6>- “Guestbook” mirror with stand</h6>';
                
                echo '<h6>- “Take One” small vanity mirror</h6>';
                echo '<hr>';
                
                echo '<input type="radio" id="package" name="upgrade" value="Vintage Mirror Gold Package Rental $799">';
                echo '<label for="Vintage Mirror Gold Package Rental ($799)">&nbsp;Vintage Mirror Gold Package Rental + $200</label><br>';
                echo "<h6><u>PRICING INCLUDES DELIVERY AND TEARDOWN WITH A 30 MILE RADIUS OF ORRVILLE, OH.
INCLUDES ALL THE FOLLOWING 8 ITEMS</u></h6>";
                
                 echo '<h6>- Welcome Sign with custom names & date & large wrought iron easel</h6>';
                
                echo '<h6>- Antique Typewriter Rental with customized message (100 words or less)</h6>';
                
                echo '<h6>- Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</h6>';
                
                echo '<h6>- Table Numbers 1-30</h6>';
                
                echo '<h6>- Leather Domed Trunk with “cards” mirror with stand</h6>';
                
                echo '<h6>- “Enjoy the Moment- no photography please” mirror with stand</h6>';
                
                echo '<h6>- “Guestbook” mirror with stand</h6>';
                
                echo '<h6>- “Take One” small vanity mirror</h6>';
                echo '<hr>';
                echo '<input type="radio" id="package" name="upgrade" value="Vintage Mirror Platinum Package ($849)">';
            echo '<label for="Vintage Mirror Platinum Package ($849)">&nbsp;Vintage Mirror Platinum Package + $250</label><br>';
            echo "<h6><u>PRICING INCLUDES DELIVERY AND TEARDOWN WITHIN A 30 MILE RADIUS OF ORRVILLE, OH
INCLUDES ALL OF THE FOLLOWING 11 ITEMS</u></h6>";
                
                echo '<h6>- Welcome Sign with custom names & date & large wrought iron easel</h6>';
                
                echo '<h6>- Antique Typewriter Rental with customized message (100 words or less)</h6>';
                
                echo '<h6>- Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</h6>';
                
                echo '<h6>- Table Numbers 1-30</h6>';
                
                echo '<h6>- Leather Domed Trunk with “cards” mirror with stand</h6>';
                
                echo '<h6>- “Enjoy the Moment- no photography please” mirror with stand</h6>';
                
                echo '<h6>- “Guestbook” mirror with stand</h6>';
                
                echo '<h6>- “Take One” small vanity mirror</h6>';
                
                echo '<h6>- 1 Large Full Custom Mirror (50 words or less) with large wrought iron easel</h6>';
                
                echo '<h6>- 1 Medium Full Custom Mirror (20 words or less)  with large wrought iron easel</h6>';
                
                echo '<h6>- 1 Small Custom Mirror (10 words or less) with wrought iron easel';
                      }
                      else if ($package == "Vintage Mirror Pick Six Rental Package ($649)"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "extras.php" method = "GET">';
                          echo '<input type="radio" id="package" name="upgrade" value="Vintage Mirror Gold Package Rental $799">';
                echo '<label for="Vintage Mirror Gold Package Rental ($799)">&nbsp;Vintage Mirror Gold Package Rental + $150</label><br>';
                echo "<h6><u>PRICING INCLUDES DELIVERY AND TEARDOWN WITH A 30 MILE RADIUS OF ORRVILLE, OH.
INCLUDES ALL THE FOLLOWING 8 ITEMS</u></h6>";
                
                 echo '<h6>- Welcome Sign with custom names & date & large wrought iron easel</h6>';
                
                echo '<h6>- Antique Typewriter Rental with customized message (100 words or less)</h6>';
                
                echo '<h6>- Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</h6>';
                
                echo '<h6>- Table Numbers 1-30</h6>';
                
                echo '<h6>- Leather Domed Trunk with “cards” mirror with stand</h6>';
                
                echo '<h6>- “Enjoy the Moment- no photography please” mirror with stand</h6>';
                
                echo '<h6>- “Guestbook” mirror with stand</h6>';
                
                echo '<h6>- “Take One” small vanity mirror</h6>';
                echo '<hr>';
                echo '<input type="radio" id="package" name="upgrade" value="Vintage Mirror Platinum Package ($849)">';
            echo '<label for="Vintage Mirror Platinum Package ($849)">&nbsp;Vintage Mirror Platinum Package + $200</label><br>';
            echo "<h6><u>PRICING INCLUDES DELIVERY AND TEARDOWN WITHIN A 30 MILE RADIUS OF ORRVILLE, OH
INCLUDES ALL OF THE FOLLOWING 11 ITEMS</u></h6>";
                
                echo '<h6>- Welcome Sign with custom names & date & large wrought iron easel</h6>';
                
                echo '<h6>- Antique Typewriter Rental with customized message (100 words or less)</h6>';
                
                echo '<h6>- Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</h6>';
                
                echo '<h6>- Table Numbers 1-30</h6>';
                
                echo '<h6>- Leather Domed Trunk with “cards” mirror with stand</h6>';
                
                echo '<h6>- “Enjoy the Moment- no photography please” mirror with stand</h6>';
                
                echo '<h6>- “Guestbook” mirror with stand</h6>';
                
                echo '<h6>- “Take One” small vanity mirror</h6>';
                
                echo '<h6>- 1 Large Full Custom Mirror (50 words or less) with large wrought iron easel</h6>';
                
                echo '<h6>- 1 Medium Full Custom Mirror (20 words or less)  with large wrought iron easel</h6>';
                
                echo '<h6>- 1 Small Custom Mirror (10 words or less) with wrought iron easel';
                      }
                      else if ($package == "Vintage Mirror Gold Package Rental $799"){
                          echo"<p> You have made a fantastic decision choosing $package... </p>";
                   echo"<p> But your fate is not sealed, consider an upgrade?</p>";
                          echo '<form action = "extras.php" method = "GET">';
                echo '<input type="radio" id="package" name="upgrade" value="Vintage Mirror Platinum Package ($849)">';
            echo '<label for="Vintage Mirror Platinum Package ($849)">&nbsp;Vintage Mirror Platinum Package + $50</label><br>';
            echo "<h6><u>PRICING INCLUDES DELIVERY AND TEARDOWN WITHIN A 30 MILE RADIUS OF ORRVILLE, OH
INCLUDES ALL OF THE FOLLOWING 11 ITEMS</u></h6>";
                
                echo '<h6>- Welcome Sign with custom names & date & large wrought iron easel</h6>';
                
                echo '<h6>- Antique Typewriter Rental with customized message (100 words or less)</h6>';
                
                echo '<h6>- Choice of Linen Seating Chart Stringer or Large Custom Mirror for gold seal application</h6>';
                
                echo '<h6>- Table Numbers 1-30</h6>';
                
                echo '<h6>- Leather Domed Trunk with “cards” mirror with stand</h6>';
                
                echo '<h6>- “Enjoy the Moment- no photography please” mirror with stand</h6>';
                
                echo '<h6>- “Guestbook” mirror with stand</h6>';
                
                echo '<h6>- “Take One” small vanity mirror</h6>';
                
                echo '<h6>- 1 Large Full Custom Mirror (50 words or less) with large wrought iron easel</h6>';
                
                echo '<h6>- 1 Medium Full Custom Mirror (20 words or less)  with large wrought iron easel</h6>';
                
                echo '<h6>- 1 Small Custom Mirror (10 words or less) with wrought iron easel';
                      }
                  }
                  
                  
                // end of class
                
                echo '</div>';

        echo "</div>";
        
        echo '<form action = "reserve.php" method = "GET">';
        echo '<input type = "hidden" name = "set" value = "'.$set.'">';
        echo '<input type = "hidden" name = "date" value = "'.$date.'">';
        echo '<input type = "hidden" name = "package" value = "'.$package.'">';
                if(isset($addMirror1 )){
                    
                     echo '<input type = "hidden" name = "addMirror1" value = "'.$addMirror1.'">';
                }
                if(isset($addMirror2)){
                    echo '<input type = "hidden" name = "addMirror2" value = "'.$addMirror2.'">';
                }
                if(isset($addMirror3)){
                   echo '<input type = "hidden" name = "addMirror3" value = "'.$addMirror3.'">';
                }
               
                
    

          echo' <div class="row" >';
               echo' <div class="col-12 text-center">';
                 
                      echo'  <button type="submit" id="btn"><h1>Submit</h1></button>';
               echo'  </div>';
            echo'</div>;'
        
        
    ?>
    
    <!--Footer outside of php?-->
    <footer>
                <div class="row text-center" id="footer">
                    <div class="col-12">
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



