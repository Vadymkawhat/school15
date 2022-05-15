<?php
    class Person {

        public $perName = '';
        public $perSurname = '';
        public $perPatronymic = '';
        public $perBirthday = '';
      
        // метод виводу повного імені персони
        function PrintAllName() {
            echo $this->perSurname." ". $this->perName." ".$this->perPatronymic;
        }
        function PrintBirthday() {
            echo $this->perBirthday;
        }
        // метод обрахунку віку
        function CalcBirthday() {
            $dateDiff = date_diff(new DateTime(), new DateTime($this->perBirthday))->y;
            echo $dateDiff;
        }
        // конструктор
        public function __construct($name, $surname, $patronymic, $birthday) {
            $this->perName = $name;
            $this->perSurname = $surname;
            $this->perPatronymic = $patronymic;
            $this->perBirthday = $birthday;
        }
        
    }
?>