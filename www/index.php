<?php
// PHP7/HTML5, EDGE/CHROME                                    *** index.php ***

// ****************************************************************************
// *  TMapTools               Коллекция (это пока) переработанных действующих *
// *                  примеров на PHP-HTML-CSS-JS из различных источников для *
// *                  обеспечения работы сайта с картами в формате тайлов OSM *
// ****************************************************************************

//                                                   Автор:       Труфанов В.Е.
//                                                   Дата создания:  09.11.2021
// Copyright © 2021 tve                              Посл.изменение: 19.11.2021

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Коллекция примеров для сайта с картами в формате тайлов OSM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="SmartMenus/site.css">
<link rel="stylesheet" href="SmartMenus/sm-core-css.css">
<link rel="stylesheet" href="SmartMenus/sm-blue.css">
<script src="Jsx/jquery-1.11.1.min.js"></script>
<script src="SmartMenus/jquery.smartmenus.min.js"></script>

<script>
$(document).ready(function() {
  $('.sm').smartmenus({
    showFunction: function($ul, complete) {
      $ul.slideDown(250, complete);
    },
    hideFunction: function($ul, complete) {
     $ul.slideUp(250, complete); 
    }
  });
}); 
</script>

</head>
<body>
<div class="wrapper">
   <header>
   Коллекция примеров для сайта с картами в формате тайлов OSM
   </header>
   <div class="content">
      <div class="main">
      <ul class="sm sm-blue">
         
         <li><a href="#">LeafletJS - работа с картами</a>
            <ul>
               <li><a href="/_LeafletJS/index.html">LeafletJS — Начало работы</a></li>
               <li><a href="#">LeafletJS — Проба2</a></li>     
            </ul>
         </li>
        
         <li><a href="#">Пример меню</a>
            <ul>
            <li><a href="#">Штуковины</a>
               <ul>
                  <li><a href="#">Простая штуковина</a></li>
                  <li><a href="#">Стандартная штуковина</a></li>
                  <li><a href="#">Продвинутая штуковина</a></li>
               </ul>
            </li>
            <li><a href="#">Гаджеты</a>
               <ul>
                  <li><a href="#">Простой гаджет</a></li>
                  <li><a href="#">Стандартный гаджет</a></li>
                  <li><a href="#">Продвинутый гаджет</a></li>
               </ul>
            </li>
            <li><a href="#">Машина времени</a></li>
            </ul>
         </li>
      </ul>
      </div>
   </div>
   <footer>
   <p>Коллекция примеров для сайта с картами в формате тайлов OSM</p>
   </footer>
</div>
</body>
</html>
<?php

?> <?php // <!-- --> ************************************** ViewEnviron.php ***

