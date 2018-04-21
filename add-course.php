<?php
echo print_r($_POST)
/*
function randChar() {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
    $string = '';
    $max = strlen($characters) - 1;
    for ($i = 0; $i < 12; $i++) {
        $string .= $characters[mt_rand(0, $max)];
    }
    return $string;
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "id5480287_syllavid";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

do {
    $course_id = randChar();
    $sql = "SELECT id FROM courses WHERE id='" . $course_id . "';";
    $result = $conn->query($sql);
} while ($result->num_rows > 0);

$sql = "INSERT INTO courses (id, school, course_name, course_code, professor) VALUES ('" . $course_id . "', '" . $_POST["school"] . "', '" . $_POST["course_ name"] . "', '" . $_POST["course_ code"] . "', '" . $_POST["professor"] . "');"
*/
?>