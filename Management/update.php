<?php
include "../Database/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Student Record</title>
  <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
  <div class="container">
    <h1>Update Student Record</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $student_id = $_POST["student_id"];

        try {
            $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = :student_id");
            $stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
            $stmt->execute();
            $student = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$student) {
                echo "<p class='warning-message'>Student with ID $student_id not found. ⚠️</p>";
            } else {
                $first_name = !empty($_POST["first_name"]) ? $_POST["first_name"] : $student["first_name"];
                $last_name = !empty($_POST["last_name"]) ? $_POST["last_name"] : $student["last_name"];
                $year_level = !empty($_POST["year_level"]) ? $_POST["year_level"] : $student["year_level"];
                $program = !empty($_POST["program"]) ? $_POST["program"] : $student["program"];
                $email = !empty($_POST["email"]) ? $_POST["email"] : $student["email"];

                $updateStmt = $conn->prepare("
                    UPDATE students SET 
                        first_name = :first_name,
                        last_name = :last_name,
                        year_level = :year_level,
                        program = :program,
                        email = :email
                    WHERE student_id = :student_id
                ");

                $updateStmt->execute([
                    ':first_name' => $first_name,
                    ':last_name' => $last_name,
                    ':year_level' => $year_level,
                    ':program' => $program,
                    ':email' => $email,
                    ':student_id' => $student_id
                ]);

                echo "<p class='success-message'>Student record updated successfully. ✅</p>";
            }
        } catch (PDOException $e) {
            echo "<p class='error-message'>Error: ⚠️" . $e->getMessage() . "</p>";
        }

        $conn = null;
    }
    ?>

    <div class="nav-button-wrapper">
      <a href="../Pages/update.html" class="nav-button">Update Another</a>
      <a href="../Pages/index.html" class="nav-button">Main Menu</a>
    </div>
  </div>
</body>
</html>
