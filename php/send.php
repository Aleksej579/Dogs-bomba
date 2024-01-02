<?php
$adminemail="aleksej.eremenko579@gmail.com";
 
$date=date("d.m.y");
$time=date("H:i");
$backurl="https://dogsbomba.000webhostapp.com/#home";

$name=$_POST['name'];
$tel=$_POST['tel'];
$email=$_POST['email']; 
$city=$_POST['city']; 

if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 { 
  echo 
"<center>Вернитесь <a 
href='javascript:history.back(1)'><B>назад</B></a>. Вы 
указали неверные данные!"; 
  } 
 else 
 { 
$msg=" 
  Имя:     $name
  Телефон: $tel
  E-mail:  $email
  Город:   $city
";
  
mail("$adminemail", "$date $time Сообщение 
от $name", "$msg"); 
  
$f = fopen("message.txt", "a+"); 
fwrite($f," \n $date $time Сообщение от $name"); 
fwrite($f,"\n $msg "); 
fwrite($f,"\n ---------------"); 
fclose($f);
  
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
$msg 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";  
exit; 
 } 
?>