<?php
interface Crud{
    public function get();
    //public function create();
    // public function update();
    // public function delete();
}

Class CrudBarang implements Crud{
    public function get(){
        echo "Display all Records";
    }
    public function create(){
        echo "Create New Record";
    }
    public function update(){
        echo "Update Record";
    }
    public function delete(){
        echo "Delete Record";
    }
}

$crudBrg = new CrudBarang();
$crudBrg->get();
?>