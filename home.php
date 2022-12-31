<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset = "UTF-8">
  <link rel = 'stylesheet' href = 'communication.css'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
  <?php require "name.php"; ?>
</head>
    
<body>
  <div class="header">
    <div class="container">
        <div class="header-line">
            <h1 class="h">Домашняя страница</h1>
            
                <!--<a class="nav-item" href="index.php">Главная</a>--> 
                <a class="nav-item" href="<?php 

                    $name='Главная'; 
                    $link='index.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
                <a class="nav-item" href="#contact">Контакты</a>
                <!--<a class="autorization" href="authorization.php">Авторизация</a>--> 
                <a class="autorization" href="<?php 

                    $name='Авторизация'; 
                    $link='authorization.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
           
        </div>
    </div>    
  </div>


  <div class="form1">
     <div class="container2">
         <div class="content">
            <?php
            echo '<p> Здравствуйте,'.$_POST['name'].'</p>'; //выводим ФИО
            if ($_POST['category'] == '1'){ //проверяем тип обращения
            echo '<p>Спасибо за ваше предложение:</p>';
            echo '<textarea>'.$_POST['message'].'</textarea>';//вывод текста сообщения
            }else{
             echo '<p>Мы рассмотрим Вашу жалобу:</p>';
             echo '<textarea>'.$_POST['message'].'</textarea>';
            }
            if (isset($_POST['attachment']) & $_POST['attachment'] != '') echo 'Вы приложили следующий файл: '.$_POST['attachment'];
            echo '<a class="btn" href="communication.php?name='.$_POST['name'].'&email='.$_POST['email'].'&source='.$_POST['source'].'">Заполнить снова</a>';
            ?>
         </div>
     </div>
    </div>


     <div class="footer">
      <div class="header-line">
          <p class="foot" id = "email">Почта: nastzah03@inbox.ru</p>
          <p class="foot" id = "contact">Телефон: 89160775180</p>
          <!--<a class="nav" href="communication.php">Обратная связь</a>--> 
          <a class="nav" href="<?php 

                    $name='Обратная связь'; 
                    $link='communication.php'; 
                    $current_page=true; 

                    echo $link; 

                ?>"><?php 

                    if( $current_page ) 
                        echo $name;
            
                ?></a>
          <p class = "foot" id = "date"><?php require "date.php" ?></p>
      </div>   
  </div>
</body>
</html>