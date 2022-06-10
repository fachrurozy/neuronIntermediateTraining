<?php
Class MyObject{
    
    // membuat sebuah static property
    static $instance=0;

    public function __construct(){
        // melakukan increment terhadap property instance
        $this->instance = ++self::$instance;
    }

    public function __clone(){
        $this->instance = ++self::$instance;
    }
}

// membuat object yang merupakan instance dari class MyObject
$object1 = new MyObject();
print_r($object1);

// Melakukan proses clone dari $object1
$object2 = clone $object1;
print_r($object2);
?>