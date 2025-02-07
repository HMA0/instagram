<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = isset($_POST['number']) ? trim($_POST['number']) : '';

    if (!empty($number)) {
        $file = 'numbers.txt';
        file_put_contents($file, $number . PHP_EOL, FILE_APPEND | LOCK_EX);
        echo "تم حفظ الرقم بنجاح!";
    } else {
        echo "الرجاء إدخال رقم صالح.";
    }
} else {
    echo "طلب غير صالح!";
}
?>
