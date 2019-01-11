<?php

    //ООП
    //person1
    /*$person1_name = 'Peter';
    $person1_speciality = 'Programmer';
    $person1_age = 20;
    function person1_hello($name, $spec, $age) {
        echo "Hello! My name is $name. I am $spec and $age years old";
    }
    person1_hello($person1_name, $person1_speciality, $person1_age);

    echo "<br/>";

    //person2
    $person2_name = 'Sam';
    $person2_speciality = 'web-designer';
    $person2_age = 24;
    function person2_hello($name, $spec, $age) {
        echo "Hello! My name is $name. I am $spec and $age years old";
    }
    person2_hello($person2_name, $person2_speciality, $person2_age);*/

    //Создание класса
    /*class Person {
        public $name = 'Peter';
        public $speciality = 'Programmer';
        public $age = 25;
    }

    //Создание объекта 
    $person = new Person;
    echo $person->name;
    echo "<br/>";
    echo $person->speciality;
    echo "<br/>";
    echo $person->age;*/

    /*class Person {
        public $name;
        public $speciality;
        public $age;

        public function greeting($name, $spec, $age) {
            echo "Hello! My name is $name. I am $spec and $age years old";
        }
    }

    $person = new Person;
    $person->name = 'Bill';
    $person->speciality = 'Manager';
    $person->age = 30;
    $person->greeting($person->name, $person->speciality, $person->age);*/

    /*class Person {
        public $name;
        public $speciality;
        public $age;

        public function greeting() {
            echo "Hello! My name is $this->name. I am $this->speciality and $this->age years old";
        }
    }

    $person = new Person;
    $person->name = 'Bill';
    $person->speciality = 'Manager';
    $person->age = 30;
    $person->greeting();*/

    class Person {
        public $name, $speciality, $age;

        //Создание функции конструктра
        public function __construct($name, $spec, $age) {
            $this->name = $name;
            $this->speciality = $spec;
            $this->age = $age;
        }

        public function greeting() {
            echo "Hello! My name is $this->name. I am $this->speciality and $this->age";
        }
    }

    //Создание объекта с помощью вызова функции конструктора по имени класса
    $person1 = new Person('Mark', 'programmer', 20);
    $person1->greeting();

    echo '<br/>';

    $person2 = new Person('Jane', 'web-designer', 25);
    $person2->greeting();





?>