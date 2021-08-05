
<?php 

function lang( $pra ) {
         
    static $lang = array(

        'MESSAGE' => 'Welcome',
        'ADMIN'    => 'Admin'
    );
       return $lang[$pra];

}