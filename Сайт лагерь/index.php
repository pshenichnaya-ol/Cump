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
<h3 class='zagolovok'> Информация о лагерях </h3>

	<?php 
	   $categories = get_categories($mysqli);
	?>
	   <?php foreach ($categories as $category):?>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Деткий Лагерь</font></font></h4>
      </div>
	   <div class="card-body">
			<div>
		         <img class='img-thumbnail' align='right' hspace="10" vspace='15' width="500px" height="500px" src="<?=$category['URL_image']?>"> 
		    </div>
		    <div>
		        <h1 class="card-title pricing-card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a '/category.php?id=<?=$category['id']?>'><?=$category['title']?><a/><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font></h1>
	        </div>
		    <div>
		        <a '/category.php?id=<?=$category['id']?>'><?=$category['adres']?> <a/><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font> 
		    </div> <br>
		    <div>
		       <a '/category.php?id=<?=$category['id']?>'><?=$category['Content']?> <a/><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font></font>
		    </div> <br>
		   <div>
            <a href ="/zaezd.php?id=<?=$category['id']?>" class='a'style='text-decoration: none;'><button  type="button" class="btn btn-lg btn-block btn-outline-primary" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Узнать даты</font></font></button> </a>	
      </div>
    </div> 
</div>
<?php endforeach; ?> 
<div style="text-align: center;"><footer class="container">
  <p><font style="vertical-align: sub;"><font style="vertical-align: sub;">© Создание и редактирование сайтов 2019-2020 </font></p>
</footer></div>
</body>
</html>