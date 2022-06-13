<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$token = "5328902088:AAEzPg3NmjQMhUWDYtAPC0sQS1zVpk4UaeA";
$chat_id = "-772215767";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email' => $email,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: /index.html');
}
?>