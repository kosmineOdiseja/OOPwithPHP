<?php 
    class Users{

        var $vardas;
        var $pavarde;
        const minAlga = 850;
        
        function getAll(){
            return $this->vardas;
        }
        function echoAllUsers(){
            echo $this->getAll();
        }
    }

    $naujas = new Users();
    $naujas->echoAllUsers('Alius');
    var_dump($naujas);
?>