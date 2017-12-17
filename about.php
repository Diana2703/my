<?php
      $name = 'Диана';
      $age = 17;
      $mail = 'safinadiana2000@mail.ru';
      $city = 'Ульяновск';
      $aboutMe = 'Я являюсь студенткой 1 курса Ульяновского технического государственного университета, направления Информатика и вычислительная техника';
 ?>

 <!DOCTYPE html>
 <html lang="ru">
 <head>
 	<meta charset="UTF-8">
 	<title>Резюме</title>
 	 <style type="text/css"> 
   H1 { 
    font-family: Arial;
    font-size: 24px;
    font-weight: lighter;
   }
</style>
 </head>
 <body>
 	
 			<div>
 				<i><b>
 				Имя
 			</i></b>
 			</div>
 			<div>
 				<? echo $name ?>
 			</div>
 			<div>
 				<i><b>
 				Возраст
 			</i></b>
 			</div>
 			<div>
 				<? echo $age ?>
 			</div>
 			<div>
 				<i><b>
 				Mail
 			</i></b>
 			</div>
 			<div>
 				<? echo $mail ?>
 			</div>
 			<div>
 				<i><b>
 				Город
 			</i></b>
 			</div>
 			<div>
 				<? echo $city ?>
 			</div>
 			<div>
 				<i><b>
 				Обо мне
 			</i></b>
 			</div>
 			<div>
 				<? echo $aboutMe ?>
 			</div>
 		
 </body>
 </html>