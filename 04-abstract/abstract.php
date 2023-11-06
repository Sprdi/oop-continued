<?php

abstract class Database {
    abstract public function connection();
    public function disconnect(){
        //implementasi
    }
}

class Model extends Database {
    public function connection()
    {
        
    }
}

$model = new Model();
?>