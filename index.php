<?php
    echo "<h1>Hello! From Ivan Plastun.</h1>";

    echo "<h2>Массивы</h2>";
    $setBooks = array("451° по Фаренгейту", "Шантарам", "1984", "Мастер и Маргарита", "Три товарища", "Портрет Дориана Грея", "Вино из одуванчиков", "Цветы для Элджернона", "Над пропастью во ржи", "Маленький принц", "Анна Каренина","Сто лет одиночества", "Тень горы", "Атлант расправил плечи");
    
    echo "<h2>Книги</h2>";

    echo "<ol>";
    for($i = 0; $i < count($setBooks); $i++) {
        echo "<li>$setBooks[$i]</li>";
    }
    echo "</ol>";

    $carBrands = array("Audi", "Lamborghini", "Porshe", "Mercedes", "BMW", "Bugatti", "McLaren", "Land Rover", "Lexus", "Infinity", "Alfa Romeo", "Ford", "Dodge");
    $carIndex = 0;

    echo "<h2>Автомобильные бренды</h2>";

    echo "<ul>";
    while ($carIndex < count($carBrands)) {
        echo "<li>$carBrands[$carIndex]</li>";
        $carIndex++;
    }
    echo "</ul>";

    //Ассоциативный массив
    echo "<h2>Ассоциативный массив</h2>";
    $books = array(
        "Рей Брэдбери" => "451° по Фаренгейту", 
        "Грегори Дэвид Робертс" => "Шантарам",
        "Джордж Оруэлл" => "1984",
        "Михаил Афанасьевич Булгаков" => "Мастер и Маргарита",
        "Эрих Мария Ремарк" => "Три товарища",
        "Оскар Уайльд" => "Портрет Дориана Грея", 
        "Рей Брэдбери" => "Вино из одуванчиков",
        "Даниел Киз" => "Цветы для Элджернона",
        "Джером Д. Сэлинджер" => "Над пропастью во ржи",
        "Антуан де Сент-Экзюпери" => "Маленький принц",
        "Лев Толстой" => "Анна Каренина",
        "Габриэль Гарсиа Маркес" => "Сто лет одиночества",
        "Грегори Дэвид Робертс" => "Тень горы",
        "Айн Рэнд" => "Атлант расправил плечи"
    );
    echo "<ul>";
    foreach ($books as $bookAuthor => $bookName) {
        echo "<li>$bookAuthor: $bookName</li>";
    }
    echo "</ul>";


    //Функции
    echo "<h2>Функции</h2>";
    function greeting($userName = "пользователь", $dayNumber) {
        $message = '';
        switch($dayNumber) {
            case 1: 
                $message = "<p>Привет <b>$userName!</b> Хорошего и продуктивного рабочего дня!</p>";
                echo $message;
            break;
            case 2: 
                $message = "<p>Привет <b>$userName!</b> Хорошего и продуктивного рабочего дня!</p>";
                echo $message;
            break;
            case 3: 
                $message = "<p>Привет <b>$userName!</b> Хорошего и продуктивного рабочего дня!</p>";
                echo $message;
            break;
            case 4: 
                $message = "<p>Привет <b>$userName!</b> Хорошего и продуктивного рабочего дня!</p>";
                echo $message;
            break;
            case 5: 
                $message = "<p>Привет <b>$userName!</b> Хорошего и продуктивного рабочего дня!</p>";
                echo $message;
            break;
            case 6:
                $message = "<p>Привет <b>$userName!</b> Желаю вам хорошо отдохнуть в этот день!</p>";
                echo $message;
            break;
            case 7:
                $message = "<p>Привет <b>$userName!</b> Желаю вам хорошо отдохнуть в этот день!</p>";
                echo $message;
            break;
            default: 
                $message = "<p>Нет такого дня недели</p>";
                echo $message;
            break;
        }
    }
    greeting('Ivan', 3);
?>