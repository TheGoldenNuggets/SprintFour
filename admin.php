
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="chooseSetStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
	require '/home/thegolde/walnutRidgeDB.php';
	
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    if($user == "admin"
    && $pass == "admin")
    {
            include("secure.html");
            echo'<div class="container">';
    echo'<hr>';
    echo'<div class="row">';
    echo"<hr>";
    
    $sql = 'SELECT * FROM reservation_v3 Order By date; ';
    $result = @mysqli_query($cnxn, $sql);
    
       echo'  <table class="table">';
             echo'  <thead>';
            echo'   <tr>';
             echo'  <th scope="col">Customer ID</th>';
             echo' <th scope="col">Date</th>';
             echo'   <th scope="col">Name</th>';
              echo'  <th scope="col">Set</th>';
              echo'  <th scope="col">Phone</th>';
             echo'  <th scope="col">Email</th>';
             echo'  <th scope="col">Status</th>';
             echo'       </tr>';
             echo'   </thead>';
    while ($row = mysqli_fetch_assoc($result))
    {           
        
             $conNum = $row['confirmation_number'];
             $set = $row['set'];
             $package = $row['package'];
             $status = $row['status'];
             $date = $row['date'];
             $total = $row['total_cost'];
             $customerId = $row['customer_id'];
             $firstname = $row['first_name'];
             $lastname = $row['last_name'];
             $email = $row['email'];
             $phone = $row['phone'];
             $customerId = $row['customer_id'];
             $mirror1 = $row['add_mirror_1'];
             $mirror2 = $row['add_mirror_2'];
             $mirror3 = $row['add_mirror_3'];
             $hexarbor = $row['add_hexagon_arbor'];
             $vintagecouch = $row['add_vintage_couch'];
             $aG = $row['add_antique_gallon'];
             $xlJug = $row['add_xl_wine_jugs'];
             $cabj = $row['add_clear_antinque_balljars'];
             $babj = $row['add_blue_antique_balljars'];
             $boho = $row['add_boho_blush'];
             $rusticbridal = $row['add_rustic_bridal'];
             $rustickeepsake = $row['add_rustic_keepsake'];
             $terracotta = $row['add_terra_cotta'];
             $vintagemirror = $row['add_vintage_mirror'];
             $customerId = $row['customer_id'];
             
            
            //  echo'  <table class="table">';
            //  echo'  <thead>';
            // echo'   <tr>';
            //  echo'  <th scope="col">Custome Id:'.$customerId.'</th>';
            //  echo' <th scope="col">Date</th>';
            //  echo'   <th scope="col">Name</th>';
            //   echo'  <th scope="col">Set</th>';
            //   echo'  <th scope="col">Phone</th>';
            //  echo'  <th scope="col">Email</th>';
            //  echo'       </tr>';
            //  echo'   </thead>';
              echo' <tbody>';
              echo'   <tr>';
              echo'     <th scope="row">#'.$customerId.' </th>';
              echo'   <td>'.$date.'</td>';
         echo'<td>'.$firstname.' '.$lastname.'</td>';
            echo'<td>'.$set.'</td>';
            echo'<td>'.$phone.'</td>';
             echo'<td>'.$email.'</td>';
             echo'<td>'.$status.'</td>';
            echo'</tr>';
                    
    }
    
    }
    else
    {
      
      echo 'acess denied';
    }

        
?>

</body>
</html>