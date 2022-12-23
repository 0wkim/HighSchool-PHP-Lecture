<?php 
// namespace 불러오기
    namespace sungil;

// Human class 불러오기
    require_once("Human.php");

    class Student extends Human 
    {
        public $code;

        public function __construct($name="", $hobbies=[], $code=0)
        {
            parent::__construct($name, $hobbies);
            $this->code = $code;
        }
    }

