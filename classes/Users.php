<?php 
    class Naujas{
        function getNauji(){
            return array("Jonukas", 'Grytute', 'Alius', 'Laura');
        }
    }
$pavadinimas = new Naujas; // tai sukuriamas klases objektas; 
$pavadinimu_list = $pavadinimas->getNauji(); // turedami classes objekta galime panaudoti tos klases funkcijas naudami ->
var_dump($pavadinimu_list);// print_r arba var_dumb
?>