<?php

namespace OOP;


class Student extends User{

    private $group;
    private $subjects = [];

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


}