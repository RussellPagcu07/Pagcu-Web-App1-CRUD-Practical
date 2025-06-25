<?php  
include "../Database/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Delete Student Record</title>
  <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
  <div class="container">
    <h1>Delete Student Record</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $student_id = $_POST["student_id"];

        try {
            $stmt = $conn->prepare("DELETE FROM students WHERE student_id = :student_id");
            $stmt->bindParam(':student_id', $student_id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "<p class='success-message'>Student with ID $student_id has been deleted. ✅</p>";
            } else {
                echo "<p class='warning-message'>No student found with ID $student_id. ⚠️</p>";
            }
        } catch (PDOException $e) {
            echo "<p class='error-message'>Error: ⚠️" . $e->getMessage() . "</p>";
        }

        $conn = null;
    }
    ?>

    <div class="nav-button-wrapper">
      <a href="../Pages/delete.html" class="nav-button">Delete Another</a>
      <a href="../Pages/index.html" class="nav-button">Main Menu</a>
    </div>
  </div>
</body>
</html>
