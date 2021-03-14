<?php 

    class Klientai{
        function getvardasPavarde($vardasPavarde){
            echo $vardasPavarde;
        }
    }
    $klientai = new Klientai;
    $klientai->getvardasPavarde('Alius Bosas');

?>