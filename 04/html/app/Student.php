<?php

namespace OOP;


class Student implements User{

    protected $userName; // objekto atributas
    protected $email;
    protected $role;
    protected $notes = [];
    protected $group;
    protected $subjects = [];

    public function addGroup(string $group){
        $this->group = $group;
    }  
    
    public function addSubject(string $subject){
        $this->subjects[] = $subject;
    }
    
    public function showUserInfo(){ // objekto metodas arba getter
        return [
            $this->userName,
            $this->email,
            $this->role,
            $this->notes,
            $this->group,
            $this->subjects
        ];
    }

    public function addNote($note){

    }


}