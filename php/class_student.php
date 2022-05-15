<?php
    require_once 'class_person.php';

    class Student extends Person {
        
        public $studFileName = '';

        public function __construct($name, $surname, $patronymic, $birthday, $FileName) {
            parent::__construct($name, $surname, $patronymic, $birthday);
                $this->studFileName = $FileName;
        }
    }
?>
