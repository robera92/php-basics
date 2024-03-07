<?php
namespace OOP;

class User{ // deklaruota klase
    protected $userName; // objekto atributas
    protected $email;
    protected $role;
    protected $notes = [];

    function __construct($userName, $email, $role){ // kvieciamas objekto kurimo metu
        $this->userName = $userName;
        $this->email = $email;
        $this->role = $role;
    }

    public function showUserInfo(){ // objekto metodas arba getter
        return [
            $this->userName,
            $this->email,
            $this->role,
            $this->notes
        ];
    }

    public function addNote($note){
        $this->notes[] = $note;
    }

    public function __toString(){
        return $this->userName;
    }

}

?>