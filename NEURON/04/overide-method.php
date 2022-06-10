<?php
Class Bapak{

    public $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function bar(){
        echo "This Function Bar From Class Bapak";
    }
}

Class Anak extends Bapak{
    // this function will be overite same method from parent class
    public function bar(){
        echo "Say Hello to ". $this->name;
    }
}

$child1 = new Anak('John Doe');
$child1->bar();
?>