<?php

namespace App\Models;

use App\Database;

class Student{

    private ?int $id;
    private string $student;
    private string $message;
    private ?string $dateTime;


    private $table = "reservations";
    private $database;

    public function __construct( $id = null, string $student = '', string $message = '', string $dateTime = null)
        {
            $this->id =$id;
            $this->student =$student;
            $this->message =$message;
            $this->dateTime =$dateTime;

        if(!$this->database){
            $this->database = new Database();
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $studentArray = $query->fetchAll();

        $studentList = [];

        foreach ($studentArray as $student){
            $studentItem = new Student($student["id"], $student["student"], $student["message"], $student["dateTime"]);

            array_push($studentList, $studentItem);
        }

        return $studentList; 
        
    }


    public function getId(){
        return $this->id;  
    }

    public function getMessage(){
        return $this->message;
    }

    public function getStudent(){
        return $this->student;
    }

    public function getDateTime(){
        return $this->dateTime;
    }

    public function save(){
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`student`, `message`) VALUES ('$this->student','$this->message');");
        
    }

    public function findById($id){
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $result = $query->fetchAll();
        
        return new Student($result[0]["id"], $result[0]["student"], $result[0]["message"], $result[0]["dateTime"]);
    }

    public function destroy(){
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");

    }

    public function rename($studentNew,$messageNew)
    {
        $this->student = $studentNew;
        $this->message = $messageNew;
        
    }

    public function Update()
    {
        $this->database->mysql->query("UPDATE `{$this->table}` SET `student` =  '{$this->student}', `message` =  '{$this->message}' WHERE `id` = {$this->id}");
    }

}