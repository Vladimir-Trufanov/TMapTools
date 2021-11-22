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

<link rel="manifest" href="manifest.json">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

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
               <li><a href="/_LeafletJS/LeafletJS.html">LeafletJS — Базовый пример</a></li>
               <li><a href="/_Lososinnoe/Lososinnoe.html">Lososinnoe — Учебная карта</a></li>     
            </ul>
         </li>
        
         <li><a href="#">Уроки на Виданской-17б</a>
            <ul>
               <li><a href="/_Vidanskaja17b/Vidanskaja17b.html">Начальные условия</a></li>
               <li><a href="#">---Стандартная штуковина</a></li>
               <li><a href="#">---Продвинутая штуковина</a></li>
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

