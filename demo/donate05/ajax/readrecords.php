<?php
	// include Database connection file
	include("dbcon.php");

	// Design initial table header

	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Amount</th>
							<th>File</th>
						</tr>';

	$query = "SELECT * FROM dn1_tbillrequest ORDER BY id DESC";
	//t1 join dn1_tprovince t2 on t1.provinceid = t2.provinceid";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{

        $address = $row['address']." ".$row['district']." ".$row['provinceid'];
        $filelink = "http://demo01.donate.nida.ac.th/donate05/uploadfile/".$row['uploadfilename'];
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['fname'].'</td>
				<td>'.$row['lname'].'</td>
				<td>'.$row['email'].'</td>
        <td>'.$row['phone'].'</td>
        <td>'.$address.'</td>
        <td>'.$row['amount'].'</td>';
				if(!$row['uploadfilename']==""){
					$data .= '<td>
						<a href="'.$filelink.'" target="_blank">หลักฐาน
					</td>';
				}
				else{
					$data .= '<td>
						&nbsp
					</td>';
				}
				'<td>
					<button class="btn btn-warning"><a href="'.$filelink.'" target="_blank">หลักฐาน</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found
    	$data .= '<tr><td colspan="8">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;

?>
