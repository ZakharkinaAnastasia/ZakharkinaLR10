<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset = "UTF-8">
    <link rel = 'stylesheet' href = 'style.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-line">
            
                <img src="logo.png" alt="a photo" id="logo-poly" height="50" margin-right="35px">
                <a class="nav-item" href="index.php">Главная</a>
                <a class="nav-item" href="#contact">Контакты</a>
                <!--<a class="nav-item" href="math.php">Математика</a>-->
                <!--<a class="autorization" href="authorization.php">Авторизация</a>-->
                <a class="nav" href="<?php 

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

<div class="body2">
        <div class="container2">
            <div class="content">
                <?php
                 if( isset($_POST['data']) & $_POST['data'] != '') // если передан текст для анализа
                 {
                     $text = $_POST['data'];
                     echo 'Текст для анализа: '.$text.'<br>'; // выводим текст
                     test_it(iconv("utf-8", "cp1251",$text.' ')); // анализируем текст с помощью test_it
                 }
                 else // если текста нет или он пустой
                     echo '<div class="src_error">Нет текста для анализа</div>'; // выводим ошибку
            
                function test_it($text){
                    // количество символов в тексте определяется функцией размера текста
                    $count = strlen($text) - 1;
                    echo 'Количество символов: '.$count.'<br>';
                    // определяем ассоциированный массив с цифрами
                    $cifra=array( '0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true,
                    '5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true );
                    $letter=array(
                        'A'=>true, 'a'=>true, 'B'=>true, 'b'=>true, 'C'=>true, 'c'=>true, 'D'=>true, 'd'=>true, 'E'=>true, 'e'=>true, 'F'=>true, 'f'=>true, 'G'=>true, 'g'=>true, 'H'=>true, 'h'=>true, 'I'=>true, 'i'=>true,
                        'J'=>true, 'j'=>true, 'K'=>true, 'k'=>true, 'L'=>true, 'l'=>true, 'M'=>true, 'm'=>true, 'N'=>true, 'n'=>true, 'O'=>true, 'o'=>true, 'P'=>true, 'p'=>true, 'Q'=>true, 'q'=>true, 'R'=>true, 'r'=>true,
                        'S'=>true, 's'=>true, 'T'=>true, 't'=>true, 'U'=>true, 'u'=>true, 'V'=>true, 'v'=>true, 'W'=>true, 'w'=>true, 'X'=>true, 'x'=>true, 'Y'=>true, 'y'=>true, 'Z'=>true, 'z'=>true, 'А'=>true, 'а'=>true, 
                        'Б'=>true, 'б'=>true, 'В'=>true, 'в'=>true, 'Г'=>true, 'г'=>true, 'Д'=>true, 'д'=>true, 'Е'=>true, 'е'=>true, 'Ё'=>true, 'ё'=>true, 'Ж'=>true, 'ж'=>true, 'З'=>true, 'з'=>true, 
                        'И'=>true, 'и'=>true, 'Й'=>true, 'й'=>true, 'К'=>true, 'к'=>true, 'Л'=>true, 'л'=>true, 'М'=>true, 'м'=>true, 'Н'=>true, 'н'=>true, 'О'=>true, 'о'=>true, 'П'=>true, 'п'=>true, 'Р'=>true, 'р'=>true, 
                        'С'=>true, 'с'=>true, 'Т'=>true, 'т'=>true, 'У'=>true, 'у'=>true, 'Ф'=>true, 'ф'=>true, 'Х'=>true, 'х'=>true, 'Ц'=>true, 'ц'=>true, 'Ч'=>true, 'ч'=>true, 'Ш'=>true, 'ш'=>true, 'Щ'=>true, 'щ'=>true, 
                        'Ъ'=>true, 'ъ'=>true, 'Ы'=>true, 'ы'=>true, 'Ь'=>true, 'ь'=>true, 'Э'=>true, 'э'=>true, 'Ю'=>true, 'ю'=>true, 'Я'=>true, 'я'=>true
                    );
                    $big_letter = array(
                        'A'=>true, 'B'=>true, 'C'=>true, 'D'=>true, 'E'=>true, 'F'=>true, 'G'=>true, 'H'=>true, 'I'=>true, 'J'=>true, 'K'=>true, 'L'=>true, 'M'=>true, 'N'=>true, 'O'=>true, 'P'=>true, 'Q'=>true, 'R'=>true,
                        'S'=>true, 'T'=>true, 'U'=>true, 'V'=>true, 'W'=>true, 'X'=>true, 'Y'=>true, 'Z'=>true, 'А'=>true, 'Б'=>true, 'В'=>true, 'Г'=>true, 'Д'=>true, 'Е'=>true, 'Ё'=>true, 'Ж'=>true, 'З'=>true, 'И'=>true, 
                        'Й'=>true, 'К'=>true, 'Л'=>true, 'М'=>true, 'Н'=>true, 'О'=>true, 'П'=>true, 'Р'=>true, 'С'=>true, 'Т'=>true, 'У'=>true, 'Ф'=>true, 'Х'=>true, 'Ц'=>true, 'Ч'=>true, 'Ш'=>true, 'Щ'=>true, 'Ъ'=>true, 
                        'Ы'=>true, 'Ь'=>true, 'Э'=>true, 'Ю'=>true, 'Я'=>true
                    );
                    $little_letter = array(
                        'a'=>true, 'b'=>true, 'c'=>true, 'd'=>true, 'e'=>true, 'f'=>true, 'g'=>true, 'h'=>true, 'i'=>true, 'j'=>true, 'k'=>true, 'l'=>true, 'm'=>true, 'n'=>true, 'o'=>true, 'p'=>true, 'q'=>true, 'r'=>true,
                        's'=>true, 't'=>true, 'u'=>true, 'v'=>true, 'w'=>true, 'x'=>true, 'y'=>true, 'z'=>true, 'а'=>true, 'б'=>true, 'в'=>true, 'г'=>true, 'д'=>true, 'е'=>true, 'ё'=>true, 'ж'=>true, 'з'=>true, 'и'=>true, 
                        'й'=>true, 'к'=>true, 'л'=>true, 'м'=>true, 'н'=>true, 'о'=>true, 'п'=>true, 'р'=>true, 'с'=>true, 'т'=>true, 'у'=>true, 'ф'=>true, 'х'=>true, 'ц'=>true, 'ч'=>true, 'ш'=>true, 'щ'=>true, 'ъ'=>true, 
                        'ы'=>true, 'ь'=>true, 'э'=>true, 'ю'=>true, 'я'=>true
                    );
                    $punctuation_marks = array(
                        '.'=>true, ','=>true, '!'=>true, '?'=>true, '...'=>true, ':'=>true, ';'=>true, '-'=>true, '('=>true, ')'=>true, '"'=>true
                    );
                    // вводим переменные для хранения информации о:
                    $cifra_amount=0; // количество цифр в тексте
                    $letter_amount = 0; //кол-во букв
                    $big_letter_amount = 0;
                    $little_letter_amount = 0;
                    $punctuation_marks_amount = 0;
                    $word_amount=0; // количество слов в тексте
                    $word=''; // текущее слово
                    $words=array(); // список всех слов
                    $words_list = array();
                    for($i=0; $i<strlen($text); $i++) // перебираем все символы текста
                    {
                    if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $cifra) ) // если встретилась цифра
                    $cifra_amount++; // увеличиваем счетчик цифр
                    if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $letter) ) 
                    $letter_amount++; 
                    if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $big_letter) ) 
                    $big_letter_amount++; 
                    if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $little_letter) ) 
                    $little_letter_amount++; 
                    if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $punctuation_marks) ) 
                    $punctuation_marks_amount++; 

                    // если в тексте встретился пробел или текст закончился
                    if( $text[$i]==' ' || $i==strlen($text)-1)
                    {
                        array_unshift($words_list, $word);//добавляет переданные аргументы в начало массива
                    if( $word ) // если есть текущее слово
                    {
                    // если текущее слово сохранено в списке слов
                    if( isset($words[$word]) )
                    $words[ $word ]++; // увеличиваем число его повторов
                    else
                    $words[ $word ]=1; // первый повтор слова
                    }
                    $word=''; // сбрасываем текущее слово
                    }
                    else // если слово продолжается
                    $word.=$text[$i]; //добавляем в текущее слово новый символ
                    }
                    // выводим количество цифр в тексте
                    echo 'Количество цифр: '.$cifra_amount.'<br>';
                    echo 'Количество букв: '.$letter_amount.'<br>';
                    echo 'Количество заглавных букв: '.$big_letter_amount.'<br>';
                    echo 'Количество маленьких букв: '.$little_letter_amount.'<br>';
                    echo 'Количество знаков препинания: '.$punctuation_marks_amount.'<br>';
                    echo 'Количество слов: '.count($words).'<br>';
                    echo 'Список слов:<br>';
                    sort($words_list);
                    foreach($words_list as $row) {
                        echo iconv("cp1251", "utf-8",$row).': '.substr_count($text, $row)."<br>\r\n";
                    };
                    test_symbs($text);
                }

                function test_symbs($text){//подсчет количества повторений каждого символа
                    $symbs=array(); // массив символов текста
                    $l_text=strtolower( $text ); // переводим текст в нижний регистр
                    // последовательно перебираем все символы текста
                    for($i=0; $i<strlen($l_text); $i++)
                    {
                        if( isset($symbs[$l_text[$i]]) ) // если символ есть в массиве
                        $symbs[$l_text[$i]]++; // увеличиваем счетчик повторов
                        else // иначе
                        $symbs[$l_text[$i]]=1; // добавляем новый символ в массив
                    }
                        //return $symbs; // возвращаем массив с числом вхождений символов в тексте
                        //echo 'Количество повторений каждого символа в тексте: '.implode($symbs).'<br>';
                    echo 'Количество повторений каждого символа в тексте:<br>';
                    foreach($symbs as $key=>$row) { 
                        if(iconv("cp1251", "utf-8",$key) == ' ') {
                            echo "Пробелов";//подписываем пробелы
                        }
                        echo iconv("cp1251", "utf-8",$key.': '). $row . '<br>';
                    };
                } 

                echo '<form class = "form" action="index.php">
                <button type="submit">Другой текст для анализа</button>
                </form>'
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