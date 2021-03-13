<?php 
    class Users{

        function get_all() {
            return array('Petriukas', 'Jonukas');
        }
    }
    $user = new Users; // galima sukurti $user = new Users();
    // Users() - skliaustai reikalingi tam, kad jeigu klases sukurimo metu butu naudojami parametrai - panasiai kaip funkcijos. Daugiau apie tai klases konstruktoriai.
    $user_list = $user->get_all();
    // turedami klases objekta galime jau naudotis tos klases funkcijomis, po kintamojo rasydami simbolius -> - kaip matome pavyzdyje.

?>
