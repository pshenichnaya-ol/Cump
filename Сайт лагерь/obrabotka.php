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
    <a class="p-2 text-dark" href="vvod.php" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Добавить лагерь</font></font></a>
  </nav>
</div >
<div class ='container'>
<?php 
if (isset($_POST['title']) && isset($_POST['adres'])&& isset($_POST['URL_image'])&& isset($_POST['Content'])){

    // Переменные с формы
    $title = $_POST['title'];
    $adres = $_POST['adres'];
	$URL_image = $_POST['URL_image'];
    $Content = $_POST['Content'];
    
    
    $db_table = "name_lager"; // Имя Таблицы БД
    
   
     $sel = "SELECT * FROM name_lager WHERE title = '$title' or adres='$adres' or URL_image='$URL_image' or Content='$URL_image'";
     $res = mysqli_query($mysqli,$sel); 
     $num = mysqli_num_rows($res);
	  if($num == 0) {
    $result = $mysqli->query("INSERT INTO ".$db_table." (title,adres,URL_image,Content) VALUES ('$title','$adres','$URL_image','$Content')");
	
    if ($result == true){
    	echo '<div style="text-align: center;"><font size="6" color="green" style="vertical-align: inherit;"> Информация о лагере занесена в базу данных! <img width="40" height="40" src="img/yes.png"><font style="vertical-align: inherit;"> </font></font></div><br>';
    }else{
    	echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Информация не занесена в базу данных! <font style="vertical-align: inherit;"> </font></font></div><br>';
    }
}

else { echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Такие данные уже существуют в базе данных! <font style="vertical-align: inherit;"> </font></font></div><br>'; }}
?>
<hr style='height: 4'>  
<?php
if (isset($_GET['id_lager']) && isset($_GET['data_start']) && isset($_GET['data_end'])&& isset($_GET['tema'])&& isset($_GET['price'])){

    // Переменные с формы
    $id_lager = (INT)$_GET['id_lager'];
    $data_start = $_GET['data_start'];
    $data_end = $_GET['data_end'];
	$tema = $_GET['tema'];
    $price = $_GET['price'];
    
   
    $db_table = "zaezd"; // Имя Таблицы БД
    
   
     $sel = "SELECT * FROM zaezd WHERE id_lager='$id_lager'and tema='$tema'";
     $res = mysqli_query($mysqli,$sel); 
     $num = mysqli_num_rows($res);
	  if($num == 0) {
		  
	  $sel = "SELECT * FROM zaezd WHERE id_lager='$id_lager'and data_start>='$data_start' or data_end>='$data_end'";
     $res = mysqli_query($mysqli,$sel); 
     $num = mysqli_num_rows($res);
	  if($num == 0) {
    $result = $mysqli->query("INSERT INTO ".$db_table." (id_lager,data_start,data_end,tema,price) VALUES ('$id_lager','$data_start','$data_end','$tema','$price')");
    
    if ($result == true){
    	echo '<div style="text-align: center;"><font size="6" color="green" style="vertical-align: inherit;"> Информация о заездах и стоимости занесена в базу данных! <img width="40" height="40" src="img/yes.png"><font style="vertical-align: inherit;"> </font></font></div><br>';
    }else{
    	echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Информация не занесена в базу данных! <font style="vertical-align: inherit;"> </font></font></div><br>';
}}
	  else { echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Введенные даты заезда пересекаются с существующими датами заезда в данном лагере! <font style="vertical-align: inherit;"> </font></font></div><br><br><br>'; }}
	  else { echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Введенная тема уже есть в данном лагере! <font style="vertical-align: inherit;"> </font></font></div><br><br><br>'; }}?>
<a href ="vvod.php" class='a'style='text-decoration: none;'style="bottom: 200px;"><button  type="button" class="btn btn-lg btn-block btn-outline-primary" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Вернуться назад</font></font></button> </a>	
<hr style='height: 4'>
<div>
<div style="text-align: center;"><footer class="container">
  <p><font style="vertical-align: sub;">© Создание и редактирование сайтов 2019-2020 </font></p>
</footer></div>
</body>
</html>