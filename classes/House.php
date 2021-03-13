<?php 
    Class house{
        function build($name){
            echo $name;
        }
    }
    $house_first = new house;
    $house_first->build('Home Sweet Home');
    $house_secont = new house;
    $house_secont->build('Multi-Corporations Inc.');
?>