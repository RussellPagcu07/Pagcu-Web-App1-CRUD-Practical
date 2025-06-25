<?php
include "../Database/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Insert Student Record</title>
  <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
  <div class="container">
    <h1>Insert Student Record</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $year_level = $_POST["year_level"];
        $program = $_POST["program"];
        $email = $_POST["email"];

        try {
            $stmt = $conn->prepare("INSERT INTO students (first_name, last_name, year_level, program, email) 
                                    VALUES (:first_name, :last_name, :year_level, :program, :email)");
            $stmt->execute([
                ':first_name' => $first_name,
                ':last_name' => $last_name,
                ':year_level' => $year_level,
                ':program' => $program,
                ':email' => $email
            ]);

            echo "<p class='success-message'>Student record added successfully. ✅</p>";
        } catch (PDOException $e) {
            echo "<p class='error-message'>Error:  ⚠️" . $e->getMessage() . "</p>";
        }

        $conn = null;
    }
    ?>

    <div class="nav-button-wrapper">
      <a href="../Pages/insert.html" class="nav-button">Add Another</a>
      <a href="../Pages/index.html" class="nav-button">Main Menu</a>
    </div>
  </div>
</body>
</html>
