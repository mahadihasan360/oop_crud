<?php


// Database Management System

abstract class Database {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "oop129";
    private $connection;



    private function connection () {

        return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);

    }


    // Create data

    protected function Create ($sql) {

        $this -> connection () -> query($sql);

    }

    // All data

    protected function All ($table,$order = "DESC") {

       return $this -> connection () -> query("SELECT * FROM $table ORDER by id $order");

    }

    // Find data

    protected function Find ($table,$id) {

        return $this -> connection () -> query("SELECT * FROM $table WHERE id='$id'");
    }

    // Delete data

    protected function Delete ($table,$id) {

       $this -> connection () -> query("DELETE FROM $table  WHERE id = '$id'");

    }

    // Update data

    protected function Update () {

    }

    // Where data

    protected function Where () {

    }

    // orwhere data

    protected function orWhere () {

    }










    
}