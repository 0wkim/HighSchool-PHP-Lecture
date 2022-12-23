<?php 
// namespace
    namespace sungil;

// class 사용
    class Human
    {
        public $name; // public : 모든 영역에서 사용 가능
        public $hobbies = [];

        public function __construct($name, $hobbies = []) // $hobbies = [] : 기본값 설정
        {
            $this->name = $name;
            $this->hobbies = $hobbies;
        }

        public function hasHobby(string $hobby) : bool 
        {
            return in_array($hooby, $this->hobbies); 
            // in_array : 받은 데이터가 배열 안애 존재하는지 알아보는 함수
        }

        public function insertHobby(string $hobby)
        {
            $this->hobbies[] = $hobby;
        }

    // name 변수 세팅
        public function setName(string $name)
        {
            $this->name = $name;
        }
    }