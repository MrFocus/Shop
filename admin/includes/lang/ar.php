
<?php 

function lang( $pra ) {
         
    static $lang = array(

        'MESSAGE' => 'أهلا',
        'ADMIN'    => 'أدمن'
    );
       return $lang[$pra];

}