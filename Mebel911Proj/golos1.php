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
<title>Вопрос 1</title>
</head>
<body>
<div class="form-opros-body">
<form action="golos2.php" method="get" target='_blank' class="form-opros">
<!-- указываем в value цифру нужного нам голосования, для которого уже создали файлы //-->
<input type="Hidden" name="id" value="1">
<div class="question">Как вы оцениваете проделанную работу фирмы?</div>
<div class="radio">
    <input class="custom-radio" type="radio" id="color-1" name="vote" value="1" checked>
    <label for="color-1">Отлично</label>
  </div>

  <div class="radio">
    <input class="custom-radio" type="radio" id="color-2" name="vote" value="2">
    <label for="color-2">Хорошо</label>
  </div>
  <div class="radio">
    <input class="custom-radio" type="radio" id="color-3" name="vote" value="3">
    <label for="color-3">Было сложно</label>
  </div>

  <div class="radio">
    <input class="custom-radio" type="radio" id="color-4" name="vote" value="4">
    <label for="color-4">Не очень</label>
  </div>
<button type="Submit" value=" Ответить" οnclick = "window.close ();"  style="margin-top:10px;">

</form>

</div>

</body>
</html>
