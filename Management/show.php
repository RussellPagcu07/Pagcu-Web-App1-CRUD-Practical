<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Records Table</title>
  <link rel="stylesheet" href="../CSS/styles.css">
  <style>
    body {
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
  <?php
  include "../Database/database.php";

  try {
      $stmt = $conn->query("SELECT * FROM students ORDER BY student_id ASC");

      if ($stmt->rowCount() === 0) {
          echo "<p style='text-align:center;'>No records found. ⚠️</p>";
      } else {
          echo "<div class='table-wrapper'>"; 
          echo "<table>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Year Level</th>
                      <th>Program</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>";

          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>
                      <td>" . htmlspecialchars($row['student_id']) . "</td>
                      <td>" . htmlspecialchars($row['first_name']) . "</td>
                      <td>" . htmlspecialchars($row['last_name']) . "</td>
                      <td>" . htmlspecialchars($row['year_level']) . "</td>
                      <td>" . htmlspecialchars($row['program']) . "</td>
                      <td>" . htmlspecialchars($row['email']) . "</td>
                    </tr>";
          }

          echo "</tbody></table>";
          echo "</div>";
      }
  } catch (PDOException $e) {
      echo "<p>Error: " . $e->getMessage() . "</p>";
  }

  $conn = null;
  ?>
</body>
</html>
