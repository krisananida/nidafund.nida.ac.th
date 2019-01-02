<?php

   // include Database connection file
    //include("dbcon.php");
    $confile = $_SERVER["DOCUMENT_ROOT"]. "/appconf/dbcon.php";
    include($confile);

    $query = "SELECT provinceid, provincename FROM nf2018_tprovince ORDER BY provincename";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

        // if query results contains rows then featch those rows

    $number = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        if($row['provinceid']!== '10'){
          $data .= '<option value="'.$row['provinceid'].'">'.$row['provincename'].'</option>';
        }
        else{
          $data .= '<option selected value="'.$row['provinceid'].'">'.$row['provincename'].'</option>';
        }
        $number++;
    }

    echo $data;
?>
