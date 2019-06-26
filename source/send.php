<?php
$name = $_POST['name'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$mail = htmlspecialchars($mail);

$name = urldecode($name);
$tel = urldecode($tel);
$mail = urldecode($mail);

$name = trim($name);
$tel = trim($tel);
$mail = trim($mail);

echo $name;
echo "<br>";
echo $tel;
echo "<br>";
echo $mail;

if (mail("panica913@gmail.com", "Заявка с сайта", "ФИО:".$name." Моб. номер: ".$tel," Время проката: ".$mail,"  From: panica913@gmail.com \r\n")) {
  echo "Сообщение успешно отправлено";
} else {
  echo "При отправке сообщения возникли ошибки";
}
?>
