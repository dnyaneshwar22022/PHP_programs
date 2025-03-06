<?php
// Start the session to store attendance data
session_start();

// Initialize attendance data if not set
if (!isset($_SESSION['attendance'])) {
    $_SESSION['attendance'] = [];
}

// List of students
$students = [];
for ($i = 1; $i <= 25; $i++) {
    $students[] = "Student $i";
}

// List of days in a week
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($students as $student) {
        foreach ($days as $day) {
            $key = str_replace(' ', '_', $student) . "_" . $day;
            $_SESSION['attendance'][$key] = $_POST[$key] ?? 'Abs';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Attendance</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Attendance Sheet</h2>
    <form method="post">
        <table>
            <tr>
                <th>Student</th>
                <?php foreach ($days as $day): ?>
                    <th><?php echo $day; ?></th>
                <?php endforeach; ?>
            </tr>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student; ?></td>
                    <?php foreach ($days as $day): ?>
                        <td>
                            <select name="<?php echo str_replace(' ', '_', $student) . "_" . $day; ?>">
                                <option value="Pre" <?php if (isset($_SESSION['attendance'][str_replace(' ', '_', $student) . "_" . $day]) && $_SESSION['attendance'][str_replace(' ', '_', $student) . "_" . $day] == 'Pre') echo 'selected'; ?>>Pre</option>
                                <option value="Abs" <?php if (!isset($_SESSION['attendance'][str_replace(' ', '_', $student) . "_" . $day]) || $_SESSION['attendance'][str_replace(' ', '_', $student) . "_" . $day] == 'Abs') echo 'selected'; ?>>Abs</option>
                            </select>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <input type="submit" value="Save Attendance">
    </form>
</body>
</html>
