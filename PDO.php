<?php
    //Удаление данных из БД
    $db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');

    $sql = "DELETE FROM `users` WHERE name=:name";

    $stmt = $db->prepare($sql);

    $username = 'Mark Lev';

    $stmt->bindValue(':name', $username);

    $stmt->execute();

    echo "<p>Было затронуто строк: " . $stmt->rowCount() . "</p>";



    //Обновление данных в БД
    /*$db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');

    $sql = "UPDATE `users` SET name = :name WHERE id = :id";

    $stmt = $db->prepare($sql);

    $username = 'Mark Lev';
    $id = 2;

    $stmt->bindValue(':name', $username);
    $stmt->bindValue(':id', $id);

    $stmt->execute();

    echo "<p>Было затронуто строк: " . $stmt->rowCount() . "</p>";*/


    //PDO вставка данных в БД
    /*$db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');

    //Формирование запроса на добавление данных в БД
    $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (:name, :email, :password)";

    //Подготовка sql-запроса
    $stmt = $db->prepare($sql);

    $username = 'Sylvia';
    $email = 'Sylvia@gmail.com';
    $password = 'awe123';

    $stmt->bindValue(':name', $username);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);

    $stmt->execute();

    echo "<p>Было затронуто строк: " . $stmt->rowCount() . "</p>";
    echo "<p> ID добавленной записи: " . $db->lastInsertId() ."</p>";*/
    
    
    
    //Выбор данных из БД с защитой
    
    //$db = new PDO('mysql:host=localhost;dbname=mini-site', 'root', '');

    // 1. Выборка без защиты от SQL инъекций

    //Данные введенные пользователем
    /*$username = 'Bill';
    $password = '555';

    $sql = "SELECT * FROM `users` WHERE name='{$username}' AND password= '{$password}' LIMIT 1";

    $result = $db->query($sql);
    echo "<h2>Выборка записи без защиты от SQL инъекции: </h2>";
    //print_r($result->fetch(PDO::FETCH_ASSOC));

    if($result->rowCount() == 1) {
        $user = $result->fetch(PDO::FETCH_ASSOC);
        echo "Имя пользователя: {$user['name']} </br>";
        echo "Email пользователя: {$user['email']} </br>";
        echo "Пароль пользователя: {$user['password']}";
    }*/

    //2. Выборка с защитой от SQL инъекции -  в ручном режиме
    /*$username = 'Bill';
    $password = '555';

    $username = $db->quote($username);
    $username = strtr($username, array('_' => '\_', '%' => '\%'));
    
    $password = $db->quote($password);
    $password = strtr($password, array('_' => '\_', '%' => '\%'));

    echo $password . "</br>";
    echo $username;
    

    $sql = "SELECT * FROM users WHERE name='{$username}' AND password= '{$password}' LIMIT 1";

    $result = $db->query($sql);

    echo "<h2>Выборка записи без защиты от SQL инъекции: </h2>";
    //print_r($result->fetch(PDO::FETCH_ASSOC));
    if($result->rowCount() == 1) {
        $user = $result->fetch(PDO::FETCH_ASSOC);
        echo "Имя пользователя: {$user['name']} </br>";
        echo "Email пользователя: {$user['email']} </br>";
        echo "Пароль пользователя: {$user['password']}";
    }*/


    //3. Выборка с защитой от SQL инъекции -  в автоматическом режиме режиме

    /*$sql = "SELECT * FROM `users` WHERE name = :username AND password = :password LIMIT 1";
    $stmt = $db->prepare($sql);

    $username = 'Bill';
    $password = '555';

    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->execute();

    $stmt->bindColumn('name', $name);
    $stmt->bindColumn('email', $email);

    echo "<h2>Выборка записей с автоматической защитой от SQL инъекции: </h2>";
    $stmt->fetch();
    echo "Имя пользователя: {$name} <br/>";
    echo "Email пользователя: {$email} <br/>";*/


    // 4. Выборка из БД с защитой от SQL инъекции в автоматическом режиме с другим форматом запроса
    /*$sql = "SELECT * FROM `users` WHERE name = ? AND password = ? LIMIT 1";
    $stmt = $db -> prepare($sql);
    
    $username = 'Bill';
    $password = '555';

    $username = htmlentities($username);
    $password = htmlentities($password);

    $stmt->bindValue(1, $username);
    $stmt->bindValue(2, $password);
    $stmt->execute();

    //$stmt->execute(array($username, $password));

    $stmt->bindColumn('name', $name);
    $stmt->bindColumn('email', $email);

    echo "<h2>Выборка записей с автоматической защитой от SQL инъекции: </h2>";
    $stmt->fetch();
    echo "Имя пользователя: {$name} <br/>";
    echo "Email пользователя: {$email} <br/>";*/



    //PDO

    /*$db = new PDO('mysql:host=localhost;dbname=filmoteka', 'root', '');
    $sql = "SELECT * FROM `films`";
    $result = $db->query($sql);
    
    $result->bindColumn('id', $id);
    $result->bindColumn('title', $title);
    $result->bindColumn('genre', $genre);
    $result->bindColumn('description', $description);
    $result->bindColumn('photo', $photo);
    $result->bindColumn('year', $year);

    echo "<h2>Вывод данных с привязкой данных к переменным: </h2>";

    while($result->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: {$id} <br/>";
        echo "Title: {$title} <br/>";
        echo "Genre: {$genre} <br/>";
        echo "Description: {$description} <br/>";
        echo "Year: {$year} <br/><br/>";
    }*/
    


    /*$films = $result->fetchAll(PDO::FETCH_ASSOC);

    foreach ($films as $film) {

        echo "Название фильма: " . $film['title'] . "<br/>";
        echo "Жанр фильма: " . $film['genre'] . "<br/>";
        echo "Описание фильма: " . $film['description'] . "<br/>";
        echo "Постер фильма: " . $film['photo'] . "<br/>";
        echo "Год фильма: " . $film['year'] . "<br/></br>";

    }*/
    
    
    /*foreach($films as $film) {
        foreach($film as $filmIndex => $val) {
            echo "$filmIndex: $val";
            echo "<br/>";
        }
    }*/

    //print_r($result->fetchAll(PDO::FETCH_ASSOC));
    

    /*echo "<h2>Вывод записей из результата по одной: </h2>";
    while($film = $result->fetch(PDO::FETCH_ASSOC)) {
        //print_r($film);
        echo "Название фильма: " .  $film['title'] . "<br/>";
        echo "Жанр фильма: " .  $film['genre'] . "<br/>";
        echo "Описание фильма: " .  $film['description'] . "<br/>";
        echo "Постер фильма: " .  $film['photo'] . "<br/>";
        echo "Год фильма: " .  $film['year'] . "<br/><br/>";
    }*/


    /*print_r( $result->fetch(PDO::FETCH_ASSOC));
    echo "<br/>";
    print_r( $result->fetch(PDO::FETCH_ASSOC));
    echo "<br/>";
    print_r( $result->fetch(PDO::FETCH_ASSOC));
    echo "<br/>";
    print_r( $result->fetch(PDO::FETCH_ASSOC));
    echo "<br/>";
    print_r( $result->fetch(PDO::FETCH_ASSOC));
    echo "<br/>";
    print_r( $result->fetch(PDO::FETCH_ASSOC));
    echo "<br/>";
    print_r( $result->fetch(PDO::FETCH_ASSOC));*/
?>
