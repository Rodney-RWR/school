<table class="table table-striped">
    <thead>
        <tr>
            <th>UUID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Access Key</th>
            <th>Phone Number</th>
            <th>Activated</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>

<?php
include_once('/databaseConnect.php');
$query = $sqlLink->query("SELECT * FROM list_users ORDER by id");
while($row = $query->fetch_array()){
    echo "<tr>";
    echo "<td>".$row['uuid']."</td>";
    echo "<td>".$row['firstname'].$row['lastname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['security_key']."</td>";
    echo "<td>".$row['phone_no']."</td>";
    echo "<td>".$row['activated']."</td>";
    echo "<td>".$row['role']."</td>";
    echo "</tr>";
}
?>
      </tbody>
</table>
