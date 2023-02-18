<?php

$title = "Read data from database";

include "headerr.php";
include 'db.php';
$sql ="select * from activitieslisttable";
$result = $conn->query($sql);


if($result->num_rows > 0){
    echo" <table class = 'table'>
        <tr>
        <th>    ID        </th> 
        <th>    Activities Name </th> 
        <th>    Description  </th> 
        <th>    Location       </th> 
        <th>    Start Date    </th>
        <th>    End Date   </th>
        <th>    Capacity    </th>
        </tr>";


        while($row = $result -> fetch_assoc()) {
            echo "
            <tr>
            <td><a href='updatesingle.php?id=$row[id]'>$row[id] </a>     </td>
            <td> $row[aname]     </td>
            <td> $row[description]     </td>
            <td> $row[location]      </td>
            <td> $row[startdate]   </td>
            <td> $row[enddate]   </td>
            <td> $row[capacity]   </td>
            </tr>
            ";
    }
    echo "</table>";
}
else
{
    echo "No result";
}

$conn-> close();

?>




<?php include "../layout/footer.php" ?>
        