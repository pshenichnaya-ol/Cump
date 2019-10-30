<?php
    ini_set('display_errors','On');
    error_reporting(E_ALL | E_STRICT);
 
    require_once 'include/database.php';
    require_once 'include/function.php';
 
?>

<!DOCTIPE html>
<html lang='ru'>
<head>
  <meta charset = 'UFT-8'>
  <meta name='viewport' content = 'width=device-width, initial - scale=1.0'>
  <meta http-equiv='X-UA-Copatible' content='ie=edge'>
  <link rel="SHORTCUT ICON" href="img/ico.png" type="image/x-icon">
  <link rel='stylesheet' href ='style.css'>
  <link rel='stylesheet' href ='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<title> Лагеря Магнитогорска </title>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><font style="vertical-align: inherit;"><img src="img/glav.jpg" 
  width="100" height="100" alt="lorem"><font style="vertical-align: inherit;"> Детские лагеря магнитогорска </font></font></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная</font></font></a>
    <a class="p-2 text-dark" href="vvod.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Добавить лагерь</font></font></a>
  </nav>
</div >
<div class ='container'>
 <div class="form-group">
 <h3 class='zagolovok'> Добавить лагерь и дату заезда </h3> 
 <hr style='height: 4'>
  <h4 class='zag'> Добавить лагерь:</h4> <br>
 <form method="POST" action="obrabotka.php">
  <input class="form-control" name="title" type="text" required placeholder="Название лагеря"/> <br>
  <input class="form-control" name="adres" type="text" required placeholder="Адрес"/> <br>
  <input class="form-control" name="URL_image" type="text" required placeholder="URL-картинки"/> <br>
  <input class="form-control" name="Content" type="text" required placeholder="Краткое описание"/> <br>
  <input class="btn btn-primary"  type="submit" value="Добавить запись"/>
 </form></div> <br>

<hr style='height: 4'>
    <h4 > Добавить заезд и стоимость: </h4> <br>
      <?php 
	   $name_lager = get_categories($mysqli);?> 
         
       <div> 
		  <form method="GET" action="obrabotka.php">
			      <small id="emailHelp" class="form-text text-muted">Выберете лагерь</small>
                     <div><select name="id_lager" class="form-control">
					 <?php foreach ($name_lager as $category):?>   
                        <a> <option value="<?=$category['id']?>"><?=$category['title']?></a></option>
                <?php endforeach; ?>  
                     </select></div><br>
	        <small class="form-text text-muted">Дата начала смены</small>
			<input class="form-control" name="data_start" type="date" required placeholder="Дата начала смены"/> <br>
			<small class="form-text text-muted">Дата конца смены</small>
            <input class="form-control" name="data_end" type="date" required placeholder="Дата конца смены"/> <br>
			<input class="form-control" name="tema" type="text" required placeholder="Тема смены"/> <br>
            <input class="form-control" name="price" type="number" required placeholder="Стоимость путевки в рублях"/> <br>
			<input class="btn btn-primary" type="submit" value="Добавить запись"/>
           </form>
       </div> 
<div style="text-align: center;"><footer class="container">
  <p><font style="vertical-align: sub;"><font style="vertical-align: sub;">© Создание и редактирование сайтов 2019-2020 </font></p>
</footer></div>
</body>
</html>