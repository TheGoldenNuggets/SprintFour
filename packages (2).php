<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Packages</title>
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
              <a href="packages.php">&nbsp;&#10084;&nbsp;Packages&nbsp;&#10084;&nbsp;</a>
              <a href="extras.php">&nbsp;Extras&nbsp;</a>
              <a href="reserve.php">&nbsp;Reserve&nbsp;</a>
              <a href="confirmation.php">&nbsp;Confirmation&nbsp;</a>
                <hr>
            </div>
        </div>
    </footer>
    
     <!-- End Header-->
     <!-- php content starts here-->
<?php
    require '/home/thegolde/walnutRidgeDB.php';
    echo '<div class="container-fluid text-center ">';
    
    
    //a few of our variables from the choose set page
    $set = $_GET['set'];
    $date = $_GET['date'];
    $datearray = explode("-",$date);
    $month = $datearray[1];

    // here is the code to check for availability!
    
    function checkAvailability ($set, $date){
     global $cnxn;
    $startDate = new DateTime($date);
    $endDate = new DateTime($date);
    date_modify($startDate, '-2 days');
    date_modify($endDate, '+2 days');
    $sql = "SELECT * FROM reservation_v3 WHERE `set` = '".$set."' and `date` BETWEEN '".$startDate->format('Y-m-d')."' AND '".$endDate->format('Y-m-d')."'";

    $result = @mysqli_query($cnxn, $sql);
    $num_rows = mysqli_num_rows($result);
    return $num_rows;
}

$number = checkAvailability($set,$date);

// if($num_rows == 1 && ($set == "Layered Arch" || $set == "Modern Round")){
//     echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
//     echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
//     echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
// }elseif($num_rows == 2 && ($set == "Dark Walnut") || ($set == "Rustic Wood") || ($set == "Vintage Mirror")){
//     echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
//     echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
//     echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
// }         dont delete this please  



// switch ($number) {
//   case 1:
//     switch($set){
//         case "Layered Arch":
//             echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
//             echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
//             echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
//             break;
//         case "Modern Round":
//             echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
//             echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
//             echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
//             break;
//     }
//     break;
//   case 2:
//      switch($set){
//         case "Dark Walnut":
//             echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
//             echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
//             echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
//             break;
//         case "Rustic Wood":
//             echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
//             echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
//             echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
//             break;
//         case "Vintage Mirror":
//             echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
//             echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
//             echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
//             break;
//     }
//     break;

//   default:
    


if(($number == 1 && (($set == "Layered Arch" )|| ($set == "Modern Round")))){
    echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
    echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
    echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
}elseif($number == 2){// && (($set == "Dark Walnut" || $set == "Rustic Wood" || $set == "Vintage Mirror"))){
    echo '<p> There is '.$number.' reservations for '.$set.' on '.$date.'</p>';
    echo'<p> We schedule reservations 2 days before and 2 days after your wedding date.</p>';
    echo'<p> Please <a href="chooseSet2.html"><u>go back</u></a> and reserve a different set for that date.</p>';
}

else{

    ////////////////////////////////////////////////////////////////

    

    // here is our logic dependant on the set that was chosen
   
    if( $set == "Layered Arch")
    {
       // echo "<p> $month</p>" ;
        // if($month == "01"){
        //     echo "<p>$set not available</p>";
        //     echo "<p>Please go back and choose a different set</p>";
        // }else{
            
        
        
        echo "<p>You selected <i>" .$set. "</i> with a wedding date of <i>" .$date. "</i> </p>";   
        echo "<h3>Please choose a package below.</h3>";
        
                                         echo "<hr>";
        
        echo '<div class="row text-center ">';
            echo '<div class="col-4 text-center feature">';
                  
                echo "<h3>Full Set Rental $849</h3>";
                
                echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
               
               
                echo "<p><h6><u>Comes with each of the following.</u></h6><p>";
                
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
                
                echo '</div>';
                 
                  echo '<form action = "extras.php" method = "GET">';
            echo '<input type = "hidden" name = "set" value = "'.$set.'">';
            echo '<input type = "hidden" name = "date" value = "'.$date.'">';
            echo'<hr>';
            
            echo '<input type="radio" id="package" name="package" value="Full Set Rental($849)">';
            echo '<label for="Full Set Rental id="areaClick">&nbsp;Full Set Rental($849)</label><br>';
              
            
            
            echo "</div>";
    
                                        echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo "<h3>Pick Six Rental $749</h3>";
                
                echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
                echo "<h6><u>Please choose six of the following items.</u></h6>";
                
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
                
                echo '</div>';
                echo '<hr>';
                echo '<input type="radio" id="package" name="package" value="Pick Six Rental($749)">';
                echo '<label for="Pick Six Rental">&nbsp;Pick Six Rental($749)</label><br>';
            
                
                        
            echo '</div>';
            
                                          echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo "<h3>Pick Four Rental $649</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
                echo "<h6><u>Please choose four of the following items.</u></h6>";
                
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
                
                echo '</div>';
                echo '<hr>';
                
                
            echo '<input type="radio" id="package" name="package" value="Pick Four Rental($649)">';
            echo '<label for="Pick Four Rental">&nbsp;Pick Four Rental($649)</label><br>';
                
                        
            echo '</div>';
                    
        echo "</div>";
        
    
            
            
        echo '</div>';
        echo '</div>';
        }
        
   // }

    elseif( $set == "Modern Round"){
        // if($month == "02"){
        //     echo "<p>$set not available</p>";
        //     echo "<p>Please go back and choose a different set</p>";
        // }else{
            
        echo "<p>You selected <i>" .$set. "</i> with a wedding date of <i>" .$date. "</i> </p>";   
        echo "<h3>Please choose a package below.</h3>";
        
                                         echo "<hr>";
        
        echo '<div class="row">';
            echo '<div class="col-4 feature">';
                echo "<h3>Full Set Rental $799</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                  echo '</div>';
                
                //start of form
                  echo '<form action = "extras.php" method = "GET">';
            echo '<input type = "hidden" name = "set" value = "'.$set.'">';
            echo '<input type = "hidden" name = "date" value = "'.$date.'">';
            echo'<hr>';
            
            echo '<input type="radio" id="package" name="package" value="Full Set Rental($799)">';
            echo '<label for="Full Set Rental">&nbsp;Full Set Rental($799)</label><br>';
            
            
            echo "</div>";
    
                                        echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo "<h3>Pick Six Rental $699</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
                echo "<h6><u>Please choose six of the following items.</u></h6>";
                
                echo '<h6>- Large Custom Welcome (round center becomes a keepsake)</h6>';
                
                echo '<h6>- Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</h6>';
                
                echo '<h6>- 1-30 free standing table numbers</h6>';
                
                echo '<h6>- Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</h6>';
                
                echo '<h6>- Set of “Reserved” signs (5)</h6>';
                
                echo '<h6>- 2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</h6>';
                
                echo '<h6>- 2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</h6>';
                
                echo '<h6>- 1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</h6>';
                
                echo '<h6>- All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</h6>';
                
                                  echo '</div>';

                
                echo '<hr>';
                echo '<input type="radio" id="package" name="package" value="Pick Six Rental($699)">';
                echo '<label for="Pick Six Rental">&nbsp;Pick Six Rental($699)</label><br>';
            
                
                        
            echo '</div>';
            
                                          echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo "<h3>Pick Four Rental $599</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
                echo "<h6><u>Please choose four of the following items.</u></h6>";
                
                 echo '<h6>- Large Custom Welcome (round center becomes a keepsake)</h6>';
                
                echo '<h6>- Large Magnetic Rectangular (“Find Your Seat”, “Cocktails”, “Let’s Party”, or customize)</h6>';
                
                echo '<h6>- 1-30 free standing table numbers</h6>';
                
                echo '<h6>- Modern Locking Card Box or Vintage Industrial Typewriter Rental with custom message to guests (up to 100 words)</h6>';
                
                echo '<h6>- Set of “Reserved” signs (5)</h6>';
                
                echo '<h6>- 2 Selections of Small Square Bracket Signs (“In Loving Memory”, “Gifts & Cards”, “Take One”, and/or customize)</h6>';
                
                echo '<h6>- 2 Selections of Small Horizontal Bracket Signs (“Guestbook”, “Programs”, “Mr. & Mrs”. “Take One”, “Gifts and Cards”,  and/or customize)</h6>';
                
                echo '<h6>- 1 Medium Table Top  (“Unplugged Ceremony”, or Magnetic Sign with “Cocktails” heading,  “In Loving Memory” heading or customize.</h6>';
                
                echo '<h6>- All Full Set Rental Clients receive 1 SMALL COMPLIMENTARY 3-D CUSTOMIZATION on a small sign in addition to their Round Welcome Sign Keepsake</h6>';
                
                                                  echo '</div>';

                echo"<hr>";
                
            echo '<input type="radio" id="package" name="package" value="Pick Four Rental($599)">';
            echo '<label for="Pick Four Rental">&nbsp;Pick Four Rental($599)</label><br>';
                
                        
            echo '</div>';
                    
        echo "</div>";
        
    
            
            
        echo '</div>';
        echo '</div>';
        }
   // }
    elseif( $set == "Dark Walnut")
    {
        // if($month == "04"){
        //     echo "<p>$set not available</p>";
        //     echo "<p>Please go back and choose a different set</p>";
        // }else{
            
        echo "<p>You selected <i>" .$set. "</i> with a wedding date of <i>" .$date. "</i> </p>";   
        echo "<h3>Please choose a package below.</h3>";
        
                                         echo "<hr>";
        
        echo '<div class="row">';
            echo '<div class="col-4 feature">';
                echo "<h3>Full Package Rental $299</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                
                                                                  echo '</div>';

                
                  echo '<form action = "extras.php" method = "GET">';
            echo '<input type = "hidden" name = "set" value = "'.$set.'">';
            echo '<input type = "hidden" name = "date" value = "'.$date.'">';
            echo'<hr>';
            
            echo '<input type="radio" id="package" name="package" value="Full Set Rental($299)">';
            echo '<label for="Full Set Rental">&nbsp;Full Set Rental($299)</label><br>';
            
            
            echo "</div>";
    
                                        echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo '<h3>Dark Walnut "No Seating" Rental $245</h3>';
                
                echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                
                                                                                  echo '</div>';

                echo '<br>';
                echo '<br>';
                
                echo '<hr>';
                echo '<input type="radio" id="package" name="package" value="Dark Walnut No Seating Rental($245)">';
                echo '<label for="Dark Walnut "No Seating" Rental($245)">&nbsp;Pick Six Rental($245)</label><br>';
            
                
                        
            echo '</div>';
            
                                          echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo "<h3>You Pick Four Rental $199</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
                 echo "<h6><u>Choose four of the following:</u></h6>";
                
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
                
                                                          echo '</div>';

                echo '<hr>';
                
                echo '<input type="radio" id="package" name="package" value="Pick Four Rental($199)">';
                echo '<label for="Pick Four Rental">&nbsp;Pick Four Rental($199)</label><br>';
                
                        
            echo '</div>';
                    
        echo "</div>";
        
    
            
            
        echo '</div>';
        echo '</div>';
        }
   // }

    elseif( $set == "Vintage Mirror")
    {
        // if($month == "03"){
        //     echo "<p>$set not available</p>";
        //     echo "<p>Please go back and choose a different set</p>";
        // }else{
            
               echo "<p>You selected <i>" .$set. "</i> with a wedding date of <i>" .$date. "</i> </p>";   
        echo "<h3>Please choose a package below.</h3>";
        
                                         echo "<hr>";
        
        echo '<div class="row">';
            echo '<div class="col-4 feature">';
                echo "<h3>Vintage Mirror Platinum Package $849</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                
                                                                       echo '</div>';

                
                  echo '<form action = "extras.php" method = "GET">';
            echo '<input type = "hidden" name = "set" value = "'.$set.'">';
            echo '<input type = "hidden" name = "date" value = "'.$date.'">';
            echo'<hr>';
            
            echo '<input type="radio" id="package" name="package" value="Vintage Mirror Platinum Package ($849)">';
            echo '<label for="Vintage Mirror Platinum Package ($849)">&nbsp;Vintage Mirror Platinum Package ($849)</label><br>';
            
            
            echo "</div>";
    
                                        echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo '<h3>Vintage Mirror Gold Package Rental $799</h3>';
                
                echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                
                                                                                      echo '</div>';

                
                echo '<br>';
                echo '<br>';
                 echo '<br>';
                
                echo '<hr>';
                echo '<input type="radio" id="package" name="package" value="Vintage Mirror Gold Package Rental $799">';
                echo '<label for="Vintage Mirror Gold Package Rental ($799)">&nbsp;Vintage Mirror Gold Package Rental ($799)</label><br>';
            
                
                        
            echo '</div>';
            
                                          echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo "<h3>Vintage Mirror Pick Six Rental Package $649</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                
                 echo '</div>';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                
                echo '<hr>';
                
                echo '<input type="radio" id="package" name="package" value="Vintage Mirror Pick Six Rental Package ($649)">';
                echo '<label for="Vintage Mirror Pick 6 Rental Package ($649)">&nbsp;Vintage Mirror Pick Six Rental Package ($649)</label><br>';
                
                        
            echo '</div>';
                    
        echo "</div>";
        
    
            
            
       
        
         echo '<div class="row">';
            echo '<div class="col-4 feature">';
            
                echo "<h3>Vintage Mirror Pick Four Rental Package $599</h3>";
                
                  echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                        
                         echo '</div>';
                        
                        echo '<br>';
                        
                        echo '<hr>';
                        
                        echo '<input type="radio" id="package" name="package" value="Vintage Mirror Pick Four Rental Package ($599)">';
                        echo '<label for="Vintage Mirror Pick Four Rental Package ($599)">&nbsp;Vintage Mirror Pick Four Rental Package ($599)</label><br>';
            echo '</div>';
             echo '<div class="col-4 feature">';
            
                echo "<h3>Additional Custom Mirrors</h3>";
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                         
                        
                      echo '<h6>- SMALL (up to 12 words) $40</h6>';
                        
                        echo '<h6>- MEDIUM (up to 24 words) $60</h6>';
                        
                        echo '<h6>- LARGE (up to 60 words) $80</h6>';
                        
                        echo '<h6>- Table Numbers 1-30</h6>';
                        
                        echo '<h6>&nbsp;More words may be added depending on the design.  Additional words may require an &nbsp;additional fee.</h6>';
                        
                       echo '</div>';
                        
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        echo '<br>';
                        
                        
                        
                        echo '<hr>';
                        
                        //complicated checkboc mini form!! - cooresponds to extras page, uses checked box to add a mirror, user can choose one tw or three and any combination of that
                        
                echo '<label for="Small Mirror($40)"><b>Small Mirror($40)</b></label>
                <input type="checkbox" id="Small Mirror($40)" name="addMirror1" value="Small Mirror($40)" >';

                echo '<label for="Medium Mirror($60)"><b>&nbsp;&nbsp;&nbsp;Medium Mirror($60)</b></label>
                <input type="checkbox"  id="Modern Round" name="addMirror2" value="Medium Mirror($60)" >';

                echo '<label for="Large Mirror($80)"><b>&nbsp;&nbsp;&nbsp;Large Mirror($80)</b></label>
                <input type="checkbox"  id="Large Mirror($80)" name="addMirror3" value="Large Mirror($80)">';
                
            echo '</div>';
            
            
        echo '</div>';
        }
  //  }
    elseif( $set == "Rustic Wood")
    {
        // if($month == "05"){
        //     echo "<p>$set not available</p>";
        //     echo "<p>Please go back and choose a different set</p>";
        // }else{
            
        echo "<p>You selected <i>" .$set. "</i> with a wedding date of <i>" .$date. "</i> </p>";   
        echo "<h3>Please choose a package below.</h3>";
        
                                         echo "<hr>";
        
        echo '<div class="row">';
            echo '<div class="col-4 feature">';
                echo "<h3>Rustic Wood Full Package Rental $299</h3>";
                
                echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                
                 echo '</div>';
                
                  echo '<form action = "extras.php" method = "GET">';
            echo '<input type = "hidden" name = "set" value = "'.$set.'">';
            echo '<input type = "hidden" name = "date" value = "'.$date.'">';
            echo'<hr>';
            
            echo '<input type="radio" id="package" name="package" value="Rustic Wood Full Package Rental $299">';
            echo '<label for="Rustic Wood Full Package Rental $299">&nbsp;Rustic Wood Full Package Rental $299</label><br>';
            
            
            echo "</div>";
    
                                        echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo '<h3>Rustic Wood “No Seating” Rental $245</h3>';
                
                 echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
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
                
                echo '<br>';
                echo '<br>';
                                 echo '</div>';

                echo '<hr>';
                echo '<input type="radio" id="package" name="package" value="Rustic Wood No Seating Rental $245">';
                echo '<label for="Rustic Wood No Seating Rental $245">&nbsp;Rustic Wood No Seating Rental ($245)</label><br>';
            
                
                        
            echo '</div>';
            
                                          echo"<hr>";
                     
            echo '<div class="col-4 feature">';
                echo "<h3>Rustic Wood “You Pick Four” Rental $199</h3>";
                
                echo '<button type="button" class="collapsible text-center">See Details</button>';
                echo '<div class="content">';
                
                 echo "<h6><u>Choose four of the following:</u></h6>";
                
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
                
                                                 echo '</div>';

                echo '<hr>';
                
                echo '<input type="radio" id="package" name="package" value="Rustic Wood “You Pick Four” Rental $199">';
                echo '<label for="Rustic Wood “You Pick Four” Rental ($199)">&nbsp;Rustic Wood “You Pick Four” Rental ($199)</label><br>';
                
                        
            echo '</div>';
                    
        echo "</div>";
         echo'  <br>';
          echo'  <br>';
           echo'  <br>';
    
            
            
        echo '</div>';
        echo '</div>';
        }
    

    echo '</div>';
   

    echo '<form action = "extras.php" method = "GET">';
    echo '<input type = "hidden" name = "set" value = "'.$set.'">';
    echo '<input type = "hidden" name = "date" value = "'.$date.'">';

 echo'  <br>'; echo'  <br>';
            echo' <div class="row" >';
               echo' <div class="col-12 text-center">';
                      echo'  <button type="submit" id="btn"><h1>Submit</h1></button>';
               echo'  </div>';
            echo'</div>';}

           
    ?>
    
    <!--Footer outside of php?-->
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







