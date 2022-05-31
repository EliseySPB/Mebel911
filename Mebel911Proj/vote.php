<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/style-opros.css"> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/
css2?family=Lato:wght@100;300;400&family=Z
en+Maru+Gothic&display=swap" rel="stylesheet"> 
<title>Опрос завершён</title>
</head>
<body>
<div class="form-opros-body">
	<div class="otvet-block">
	<?php

// получаем файлы по определенному голосованию
$id =  (int) $_GET['id'];
if (!empty($_GET['vote'])){
$vote = (int) $_GET['vote'];
	if (file_exists("$id.dat")) {
 $ip= $_SERVER['SERVER_ADDR'];
 $ip_file = file_get_contents("ip$id.dat");
 $ip_abbr = explode(",", $ip_file);
 $data = file("$id.dat");

 // если это не просто просмотр результатов
 if ($vote) {
 foreach($ip_abbr as $value)
 if ($ip == $value) {echo "<p><b><font color=red size=18px> Вы уже голосовали! </font></b></p>";
 exit;
 }

 // выводим благодарность
 echo "<p><b><font color=green> Спасибо! </font></b><br /><i>*Показаны результаты с Вашим голосованием:</i><p>";
 }
 
 // если это не просмотр результатов, а голосование,
 // производим необходимые действия для учета голоса
 if ($vote) {
 $f = fopen("$id.dat","w");
 flock($f,LOCK_EX);
 fputs($f, "$data[0]");
 for ($i=1;$i<count($data);$i++) {
 $votes = explode("~", $data[$i]);
 if ($i==$vote) $votes[0]++;
 fputs($f,"$votes[0]~$votes[1]");
 fflush($f);
 flock($f,LOCK_UN);
 }
 fclose($f);
 $ip_adr = fopen("ip$id.dat","a++");
 flock($ip_adr,LOCK_EX);
 fputs($ip_adr, "$ip".",");
 fflush($ip_adr);
 flock($ip_adr,LOCK_UN);
 fclose($ip_adr);
 }
 $data = file("$id.dat");
 // выводим заголовок голосования - 1я строка файла
 echo "<b>$data[0]</b><p>";
 // печатаем список ответов и результатов - остальные строки
 for ($i=1;$i<count($data);$i++) {
 $votes = explode("~", $data[$i]); // значение~ответ
 echo "$votes[1]: <b>$votes[0]</b><br>";
 }
 $ip_file = file_get_contents("ip$id.dat");
 $ip_abbr = explode(",", $ip_file);
 echo "<br>Всего проголосовало: <b>".(count($ip_abbr)-1)."</b>";
	} else {
 echo "Такого голосования не существует.";
 exit;
	}
} else {
	if (file_exists("$id.dat")) {
 $ip= $_SERVER['REMOTE_ADDR'];
 $ip_file = file_get_contents("ip$id.dat");
 $ip_abbr = explode(",", $ip_file);
 $data = file("$id.dat");
 // если это не просто просмотр результатов
 // выводим благодарность
 echo "<p><b><font color=green> Спасибо! </font></b><br /><i>*Показаны результаты голосования:</i><p>";
	}
 // выводим заголовок голосования - 1я строка файла
 echo "<b>$data[0]</b><p>";
 // печатаем список ответов и результатов - остальные строки
 for ($i=1;$i<count($data);$i++) {
 $votes = explode("~", $data[$i]); // значение~ответ
 echo "$votes[1]: <b>$votes[0]</b><br>";
 }
 echo "<br>Всего проголосовало: <b>".(count($ip_abbr)-1)."</b>";


}


echo "<br>";



$id =  2;
if (!empty($_GET['vote'])){
$vote = 2;
	if (file_exists("$id.dat")) {
 $ip= $_SERVER['SERVER_ADDR'];
 $ip_file = file_get_contents("ip$id.dat");
 $ip_abbr = explode(",", $ip_file);
 $data = file("$id.dat");


if ($vote) {
	$f = fopen("$id.dat","w");
	flock($f,LOCK_EX);
	fputs($f, "$data[0]");
	for ($i=1;$i<count($data);$i++) {
	$votes = explode("~", $data[$i]);
	if ($i==$vote) $votes[0]++;
	fputs($f,"$votes[0]~$votes[1]");
	fflush($f);
	flock($f,LOCK_UN);
	}
	fclose($f);
	$ip_adr = fopen("ip$id.dat","a++");
	flock($ip_adr,LOCK_EX);
	fputs($ip_adr, "$ip".",");
	fflush($ip_adr);
	flock($ip_adr,LOCK_UN);
	fclose($ip_adr);
	}
	$data = file("$id.dat");
	// выводим заголовок голосования - 1я строка файла
	echo "<b>$data[0]</b><p>";
	// печатаем список ответов и результатов - остальные строки
	for ($i=1;$i<count($data);$i++) {
	$votes = explode("~", $data[$i]); // значение~ответ
	echo "$votes[1]: <b>$votes[0]</b><br>";
	}
	$ip_file = file_get_contents("ip$id.dat");
	$ip_abbr = explode(",", $ip_file);
	echo "<br>Всего проголосовало: <b>".(count($ip_abbr)-1)."</b>";
	  } else {
	echo "Такого голосования не существует.";
	exit;
	  }
  } else {
	  if (file_exists("$id.dat")) {
	$ip= $_SERVER['REMOTE_ADDR'];
	$ip_file = file_get_contents("ip$id.dat");
	$ip_abbr = explode(",", $ip_file);
	$data = file("$id.dat");
	// если это не просто просмотр результатов
	// выводим благодарность
	}
	// выводим заголовок голосования - 1я строка файла
	echo "<b>$data[0]</b><p>";
	// печатаем список ответов и результатов - остальные строки
	for ($i=1;$i<count($data);$i++) {
	$votes = explode("~", $data[$i]); // значение~ответ
	echo "$votes[1]: <b>$votes[0]</b><br>";
	}
	echo "<br>Всего проголосовало: <b>".(count($ip_abbr)-1)."</b>";
  }




  echo "<br>";

  $id =  3;
if (!empty($_GET['vote'])){
$vote = 3;
	if (file_exists("$id.dat")) {
 $ip= $_SERVER['SERVER_ADDR'];
 $ip_file = file_get_contents("ip$id.dat");
 $ip_abbr = explode(",", $ip_file);
 $data = file("$id.dat");


if ($vote) {
	$f = fopen("$id.dat","w");
	flock($f,LOCK_EX);
	fputs($f, "$data[0]");
	for ($i=1;$i<count($data);$i++) {
	$votes = explode("~", $data[$i]);
	if ($i==$vote) $votes[0]++;
	fputs($f,"$votes[0]~$votes[1]");
	fflush($f);
	flock($f,LOCK_UN);
	}
	fclose($f);
	$ip_adr = fopen("ip$id.dat","a++");
	flock($ip_adr,LOCK_EX);
	fputs($ip_adr, "$ip".",");
	fflush($ip_adr);
	flock($ip_adr,LOCK_UN);
	fclose($ip_adr);
	}
	$data = file("$id.dat");
	// выводим заголовок голосования - 1я строка файла
	echo "<b>$data[0]</b><p>";
	// печатаем список ответов и результатов - остальные строки
	for ($i=1;$i<count($data);$i++) {
	$votes = explode("~", $data[$i]); // значение~ответ
	echo "$votes[1]: <b>$votes[0]</b><br>";
	}
	$ip_file = file_get_contents("ip$id.dat");
	$ip_abbr = explode(",", $ip_file);
	echo "<br>Всего проголосовало: <b>".(count($ip_abbr)-1)."</b>";
	  } else {
	echo "Такого голосования не существует.";
	exit;
	  }
  } else {
	  if (file_exists("$id.dat")) {
	$ip= $_SERVER['REMOTE_ADDR'];
	$ip_file = file_get_contents("ip$id.dat");
	$ip_abbr = explode(",", $ip_file);
	$data = file("$id.dat");
	// если это не просто просмотр результатов
	// выводим благодарность
	}
	// выводим заголовок голосования - 1я строка файла
	echo "<b>$data[0]</b><p>";
	// печатаем список ответов и результатов - остальные строки
	for ($i=1;$i<count($data);$i++) {
	$votes = explode("~", $data[$i]); // значение~ответ
	echo "$votes[1]: <b>$votes[0]</b><br>";
	}
	echo "<br>Всего проголосовало: <b>".(count($ip_abbr)-1)."</b>";
  }
?>
</div>
</div>

</body>
</html>
<style>
   .graf {
    background: #ECF5E4;
    width: 18px; height: 18px;
    text-align: center;
    font: 13px Times, serif;
    border: 2px solid #95CD8B;
    border-right: 2px solid #D0E6BB;
     border-radius: 100px;
   }
  </style>