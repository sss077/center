<?

/* https://api.telegram.org/bot5326723249:AAER7naHVOuNyuDn0LczV7EQ3x5RDx93VxA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$date = $_POST['user_date'];
$token = "5326723249:AAER7naHVOuNyuDn0LczV7EQ3x5RDx93VxA";
$chat_id = "-639370848";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
 
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
