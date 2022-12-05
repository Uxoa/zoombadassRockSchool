<?php

namespace App\Controllers;

use App\Models\Student;
use App\Core\View;


class StudentController{

    public function __construct(){

        
        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {
            $this->create();
            return;
        }

        if(isset($_GET["action"]) && ($_GET["action"]) == "store"){
            $this->store($_POST);  
            return;
        }

        if(isset ($_GET["action"]) && ($_GET["action"]) == "delete"){
            $this->delete($_GET["id"]);  
            return;
        }

        if(isset ($_GET["action"]) && ($_GET["action"]) == "edit"){
            $this->edit($_GET["id"]);  
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        }

        $this->index();

    }

    

    // este es el metodo de la R de crud
    public function index()
    {
        $student = new Student;

        $students = $student->all();

        new View("studentList",["student" => $students]);

    }

 //La C de crud necesita dos métodos
public function create(){
    new View("createStudent");
}

public function store(array $request){
    $newStudent = new Student(null,$request["student"],$request["message"]); 
    $newStudent -> save(); 
    $this->index();
}

public function delete($id){
    $studentHelper = new Student(); //revisar orden de variable DB
    $student = $studentHelper->findById($id);
    $student->destroy();

    $this->index();
}

public function edit($id)
    {
        //Find Student By Id
        $studentHelper = new Student();
        $student = $studentHelper->findById($id);
        //Execute view with student atributes
        new View("EditStudent", ["student" => $student]);
    }


    public function update(array $request, $id)
    {
        // Update Student By ID
        $studentHelper = new Student();
        $student = $studentHelper->findById($id);
        $student->rename($request["student"],$request["message"]);
        $student->update();
        
        

        // Return to View List
        $this->index();
    }

}

