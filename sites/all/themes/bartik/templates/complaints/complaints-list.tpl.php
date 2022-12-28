<h2>Created by Complaints Custom Module  </h2>
<?php
if(count($data) > 0)
{
    echo "<table><tr>
            <th>Id</th>
            <th>Complaint Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Complaint Type</th>
            <th>Status</th>
            </tr>";
    $count = 1;
    foreach($data as $v)
    {
        echo "<tr>";
        echo "<td>" . $count . "</td>";
        echo "<td>" . $v->complaint_name['und'][0]['value'] . "</td>";
        echo "<td>" . $v->email['und'][0]['value'] . "</td>";
        echo "<td>" . $v->phone ['und'][0]['value']. "</td>";
        echo "<td>" . $v->complaint_type['und'][0]['value'] . "</td>";
        echo "<td>" . $v->workflow_status['und'][0]['value'] . "</td>";
        echo "</tr>";
        $count++;
    }
    echo "</table>";    
}else{
    echo "No records found";
}