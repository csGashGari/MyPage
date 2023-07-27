<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$usernameh = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["password"];
$pass2 = $_POST["password2"];
$number = $_POST["number"];
}
$servername = "localhost";
$username = "root";
$password = "Mgashgari1";
$dbname = "test";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//----------------------------------------------------------------------------//

$flag = true;
if ($pass != $pass2) {
    $flag = false;
}

if ($flag === true ){
    $sql = "INSERT INTO users (username, email, password, password2, number)
    VALUES ('$usernameh', '$email', '$pass', '$pass2', '$number')";
}
    else
    die("كلمة المرور غير متطابقة");

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
