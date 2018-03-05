<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="image/favicon.jpg" type="image/jpg">
<title>бокс</title>

<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div id="header">
   <img src="photo/4.jpg" alt="боксеры" class="photo"> История мирового бокса <img src="photo/5.jpg" alt="боксеры" class="photo1">
   <img src="photo/33.jpg" alt="ринг" class="photo2"></div>
   <ul id="sidebar">
			<li><a href="index.php?page=1">Главная </a></li>
			<li><a href="index.php?page=2">Величайшие боксеры мира</a></li>
			<li><a href="index.php?page=3">Техника бокса</a>
				<ul>   
						<li><a href="index.php?page=4">Подача</a></li>
						<li><a href="index.php?page=5">Техника передвижения</a> </li>
						<li><a href="index.php?page=6">Прямые удары</a></li>
						<li><a href="index.php?page=7">Боковые удары</a></li>
						<li><a href="index.php?page=8">Защита</a></li>
				</ul></li>
			<li><a href="index.php?page=9">Бокс в СССР</a></li>
			<li><a href="index.php?page=10">Бокс в России</a></li>
		    <li><a href="index.php?page=11">Залы Барнаула</a></li>
			<li><a href="index.php?page=12">Спортивное питание</a>
			<ul>   
						<li><a href="index.php?page=13">Спортивные диеты</a></li>
						<li><a href="index.php?page=14">Состав  питания</a> </li>
						<li><a href="index.php?page=15">Побочные эффекты</a></li>
				</ul></li>
			<li><a href="index.php?page=16">Правила бокса</a></li>
			<li><a href="index.php?page=17">Тест</a></li>
			<li><a href="index.php?page=18">Об авторе</a></li>
		</ul>
   <div id="content">

   <?php

if (isset($_GET['page'])) { $page=$_GET['page']; }

if (isset($page)) 
  {
   switch ($page)
    {
            case '1': include './files/index.php' ;break;
            case '2': include './files/great.php' ;break;
            case '3': include './files/equipment.php' ;break;
            case '4': include './files/#.php' ;break;
            case '5': include './files/#.php' ;break;
            case '6': include './files/#.php' ;break;
            case '7': include './files/#.php' ;break;
            case '8': include './files/#' ;break;
            case '9': include './files/SSSR.php' ;break;
            case '10': include './files/Russia.php' ;break;
            case '11': include './files/halls.php' ;break;
            case '12': include './files/sports nutrition.php' ;break;
            case '13': include './files/#.php' ;break;
            case '14': include './files/#.php' ;break;
            case '15': include './files/#.php' ;break;
            case '16': include './files/regulations.php' ;break;
            case '17': include './files/Test.php' ;break;
			case '18': include './files/author.php' ;break;
			
			default:  include './docs/404.php'  ; break;
        }
    }
    ?>
</div>
  
   <div id="footer">&copy; Семён Рыбалко</div>
 </body>
</html>