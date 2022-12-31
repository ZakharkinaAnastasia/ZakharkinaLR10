<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel = 'stylesheet' href = 'authorization.css'>
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
            <form action="https://httpbin.org/post" method="post">
               <p>Логин</p>
               <p><input type="text"/></p>
               <p>Пароль</p>
               <p><input type="password"/></p>
               <p><input type="checkbox">Запомнить меня</p>
               <input type="submit" value="Войти" />
            </form>
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