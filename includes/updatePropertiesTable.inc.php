<?php

include 'dbh.inc.php';

$sql = "SELECT * FROM properties ORDER BY propertyID ASC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        

        echo "<tr>
           
                 <td>" . $row["propertyID"] . "</td>
                 <td>" . $row["userID"] . "</td>
                 <td>" . $row["type"] . "</td>
                 <td>" . $row["category"] . "</td>
                 <td>" . $row["town"] . "</td>
                 <td>" . $row["area"] . "</td>
                 <td>" . $row["address"] . "</td>
                 <td>" . $row["brand"] . "</td>
                 <td>" . $row["state"] . "</td>
                 <td>" . $row["postDate"] . "</td>
                 <td>" . $row["lastDate"] . "</td>
                 <td>" . $row["description"] . "</td>
                 <td>";  if($row["active"] == 1){
                 echo " Yes </td> ";} else if($row["active"] == 0){
                    echo " No </td> ";}
                 echo"
                 <td>" . $row["views"] . "</td>
                 
                 
                 
                 <td>
                 <a href='properties.php?propertyID=";
        echo $row["propertyID"] . "&userID=";
        echo $row['userID'] . "&type=";;
        echo $row['type'] . "&category=";
        echo $row['category'] . "&town=";
        echo $row['town'] . "&area=";
        echo $row['area'] . "&address=";
        echo $row['address'] . "&brand=";
        echo $row['brand'] . "&state=";
        echo $row['state'] . "&postDate=";
        echo $row['postDate'] . "&lastDate=";
        echo $row['lastDate'] . "&description=";
        echo $row['description'] . "&active=";
        echo $row['active'] . "&views=";
        echo $row['views'];
        echo "&modal=editProperty' class='edit'><i class='fas fa-edit' data-toggle='tooltip' title='Edit'>&#xE254;</i></a>
                          <a href='properties.php?propertyID=";

        echo $row["propertyID"];
        echo "&modal=deleteProperty'  class='delete'><i class='far fa-trash-alt' data-toggle='tooltip' title='Delete'>&#xE872;</i></a>  


                  </td>
                </tr> ";
    }
}
