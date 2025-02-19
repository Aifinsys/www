<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 接收表單資料
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // 設定收件人信箱
    $to = "ailabstop@gmail.com"; // 信箱
    
    // 設定郵件標題
    $subject = "新表單提交 - $name";
    
    // 組合郵件內容
    $email_content = "姓名: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "電話: $phone\n\n";
    $email_content .= "訊息:\n$message\n";

    // 設定郵件標頭
    $headers = "From: $email";

    // 寄送郵件
    if (mail($to, $subject, $email_content, $headers)) {
        echo "感謝提交! 我們會盡快回覆您。";
    } else {
        echo "提交失敗，請稍後再試。";
    }
}
?>