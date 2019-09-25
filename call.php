<?php

$conn = new mysqli("localhost", "root", "", "yo");
$sql = "SELECT id, full_name, email FROM register";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
      echo "<table>
      <tr>
      <th> ID </th>
      <th>Nama</th>
      <th>Email</th>";
      while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["id"] ."</td><td>". $row["full_name"] . "</td><td>". $row["email"] ."</td></tr>";
      }
      echo "</table>";
    }
    else {
      echo "0 result";
    }
    ?>