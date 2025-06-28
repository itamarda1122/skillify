<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "your_email@gmail.com"; // שנה לכתובת שלך
  $subject = "הודעה חדשה מהאתר Skillify";

  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-type: text/plain; charset=UTF-8";

  $body = "שם: $name\nאימייל: $email\n\nהודעה:\n$message";

  if (mail($to, $subject, $body, $headers)) {
    echo "<h2>ההודעה נשלחה בהצלחה! נחזור אליך בהקדם.</h2>";
  } else {
    echo "<h2>אירעה שגיאה בשליחת ההודעה.</h2>";
  }
}
?>
