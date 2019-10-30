<?php
    ini_set('display_errors','On');
    error_reporting(E_ALL | E_STRICT);
 
    require_once 'include/database.php';
    require_once 'include/function.php';
	$id = (INT)$_GET ['id'];
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
<h3 class='zagolovok'> Даты заездов </h3>
	<?php $zaezd = get_zaezd($id);?>
	   <?php foreach ($zaezd as $category):?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Деткий Лагерь<a '/category.php?id=<?=$category['id']?>'><?=$category['title']?><a/></font></font></h4>
      </div>
	   <div class="card-body">
		    <div>
		       <b><font style="vertical-align: inherit;"> Дата заезда: <font style="vertical-align: inherit;"> </font></font>
		    </div> </b> <br>
			<div>
		       <a '/category.php?id=<?=$category['id']?>'> <?=$category['data_start']?> - <?=$category['data_end']?><a/><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font> 
		    </div> <br>
			 <div>
		       <font style="vertical-align: inherit;"> <b>Тема заезда:</b>  <a '/category.php?id=<?=$category['id']?>'> <?=$category['tema']?><a/><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font>
		    </div>  <br>

		   <div>
            <a href ="/price.php?id=<?=$category['id']?>" class='a'style='text-decoration: none;'><button  type="button" class="btn btn-lg btn-block btn-outline-primary" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Узнать стоимость путевки</font></font></button> </a>	
      </div>
    </div> 
</div>
<?php endforeach; ?> 
<div style="text-align: center;"><footer class="container">
  <p><font style="vertical-align: sub;"><font style="vertical-align: sub;">© Создание и редактирование сайтов 2019-2020 </font></p>
</footer></div>
</body>
</html>