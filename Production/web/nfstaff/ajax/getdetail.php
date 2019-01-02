<?php
// include Database connection file
$confile = $_SERVER["DOCUMENT_ROOT"]. "/appconf/dbcon.php";
include($confile);


// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $req_id = $_POST['id'];

    // Get User Details
    $query = 'SELECT t1.*, t2.prefixname as masterprefixname';
    $query .= ', t3.provincename as provincename';
    $query .= ', t4.prefixname as receiptmasterprefixname';
    $query .= ', t5.provincename as receiptprovincename';
    $query .= ' FROM (((nf2018_treceiptrequest t1 LEFT JOIN nf2018_tprefix t2 on t1.prefixid=t2.prefixid)';
    $query .= ' LEFT JOIN nf2018_tprovince t3 on t1.provinceid = t3.provinceid)';
    $query .= ' LEFT JOIN nf2018_tprefix t4 on t1.receiptprefixid = t4.prefixid)';
    $query .= ' LEFT JOIN nf2018_tprovince t5 on t1.receiptprovinceid = t5.provinceid';
    $query .= ' WHERE id='.$req_id;

    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    // display JSON data
    echo json_encode($response);
}
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}

?>
