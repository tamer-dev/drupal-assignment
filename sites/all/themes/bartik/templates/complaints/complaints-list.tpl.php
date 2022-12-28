<h2>Created by Complaints Custom Module  </h2>
<?php
if(count($data) > 0)
{
    echo "<table><tr>
            <th>Complaint Name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Complaint Type</th>
            <th>Status</th>
            </tr>";
    foreach($data as $v)
    {
        echo "<tr>";
        if($v->complaint_name) echo "<td>" .  $v->complaint_name['und'][0]['value']  . "</td>"; else echo '<td></td>';
        if($v->email) echo "<td>" . $v->email['und'][0]['value'] . "</td>";else echo '<td></td>';
        if($v->phone) echo "<td>" . $v->phone ['und'][0]['value']. "</td>";else echo '<td></td>';
        if($v->complaint_type) echo "<td>" . $v->complaint_type['und'][0]['value'] . "</td>";else echo '<td></td>';
        if($v->workflow_status) echo "<td>" . $v->workflow_status['und'][0]['value'] . "</td>";else echo '<td></td>';
        echo "</tr>";
    }
    echo "</table>";    
}else{
    echo "No records found";
}