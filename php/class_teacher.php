<?php
    require 'class_person.php';
    // require_once 'class_person.php';

    class Teacher extends Person {
        
        public $teaFileName = '';
        public $education = '';
        public $experience = '';

        function __construct($name, $surname, $patronymic, $birthday, $FileName, $education, $experience) {
            parent::__construct($name, $surname, $patronymic, $birthday);
                $this->teaFileName = $FileName;
                $this->education = $education;
                $this->experience = $experience;
        }

    }

