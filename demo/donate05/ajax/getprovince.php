<?php

   // include Database connection file
    include("dbcon.php");

    $query = "SELECT provinceid, provincenameth FROM dn1_tprovince ORDER BY provincenameth";

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

        // if query results contains rows then featch those rows

    $number = 1;
    while($row = mysqli_fetch_assoc($result))
    {
        if($row['provinceid']!== '10'){
          $data .= '<option value="'.$row['provinceid'].'">'.$row['provincenameth'].'</option>';
        }
        else{
          $data .= '<option selected value="'.$row['provinceid'].'">'.$row['provincenameth'].'</option>';
        }
        $number++;
    }

    echo $data;
?>
