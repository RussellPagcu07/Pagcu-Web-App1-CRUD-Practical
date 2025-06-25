<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Record</title>
  <link rel="stylesheet" href="../CSS/styles.css">
</head>
<body>
  <div class="container">
    <h1>Student Record</h1>

    <?php
    include "../Database/database.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["student_id"])) {
        $student_id = $_POST["student_id"];

        try {
            $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = :student_id");
            $stmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
            $stmt->execute();
            $student = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($student):
    ?>
                <table>
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
                  <tbody>
                    <tr>
                      <td><?= htmlspecialchars($student['student_id']) ?></td>
                      <td><?= htmlspecialchars($student['first_name']) ?></td>
                      <td><?= htmlspecialchars($student['last_name']) ?></td>
                      <td><?= htmlspecialchars($student['year_level']) ?></td>
                      <td><?= htmlspecialchars($student['program']) ?></td>
                      <td><?= htmlspecialchars($student['email']) ?></td>
                    </tr>
                  </tbody>
                </table>
    <?php
            else:
                echo "<p>No student found with ID <strong>$student_id</strong>. ⚠️</p>";
            endif;
        } catch (PDOException $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }

        $conn = null;
    } else {
        echo "<p>Please provide a valid student ID.</p>";
    }
    ?>

    <form action="../Pages/retrieve.html">
      <button type="submit" class="secondary">Back</button>
    </form>
  </div>
</body>
</html>
