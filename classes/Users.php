<?php 
    class Naujas{
        function getNauji(){
            return array("Jonukas", 'Grytute', 'Alius', 'Laura');
        }
    }
$pavadinimas = new Naujas; // tai sukuriamas klases objektas; 
$pavadinimu_list = $pavadinimas->getNauji(); // taip panaudojamas, klases methodas.
var_dump($pavadinimu_list);// print_r arba var_dumb
?>