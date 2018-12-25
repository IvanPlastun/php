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

?>