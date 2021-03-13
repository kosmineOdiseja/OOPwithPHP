<?php
    class clientele{
        var $nombre; // properties (savybes)
        var $apillido; // is pradziu savybems nereikia apibrezineti jokiu reiksmiu/verciu.
        var $email; // nes vertes reiksmes naudosime is naujo klases objekto su simboliu junginiu ->
        
        function get_All(){ 
            
        }

    }

    $client = new clientele;
    $client->nombre="Karolis";
    $client->apllido="Valsauskas";

    $client2 = new clientele; // cia paaiskeja dar vienas klases privalumas, kad ta klase galime naudotis kelis kartus su skirtingomis reiksmemis.
    $client2->nombre = "Gedinimas"; // galime dirbti su kiekvienu atskirai arba tik su ja viena. 
    $client2->apillido = "Kyrarygis";

    class Users{
        var $db_table;

        function getAll(){
            $this->db_table = 'albatros';
        }
        function echoAll(){
            echo $this->getAll();
        }
    }// kaip matome $this galima naudoti tiek sabybems tiek methodams. Tai yra vienas is OOP tikslu.


        // kostantantos 
    class AccesToConst{
        const PI = 3.14; // tai yra konstanta, kuri gali buti klaseje, bet gali buti ir uz klases ribu, kad butu panaudojama N kartu skripte eigoje.

        function echoPi(){
            echo AccesToConst::PI; // vietoj self dar galima rasyti classes pavadinima pzz AccesToConst:: bet negalima rasyti $this, tai constanta nera kintamasis.
        }
    } // ir tai nejucia prakalbome apie statiniu atributu ir methodu panaudojima su dviem dvitaskiais. :: 