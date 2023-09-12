<?php
// بيانات الاتصال بقاعدة البيانات
$servername = "sql304.liveblog365.com";
$username = "lblog_34964297";
$password = "yxkswjnmn4";
$dbname = "lblog_34964297_Ectonee";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// الكود الذي يقوم بإدخال بيانات التسجيل إلى قاعدة البيانات
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $password = $_POST["password"];

    $sql = "INSERT INTO customers (full_name, phone_number, address, city, password) VALUES ('$full_name', '$phone_number', '$address', '$city', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "تم التسجيل بنجاح";
    } else {
        echo "حدث خطأ أثناء التسجيل: " . $conn->error;
    }
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>
