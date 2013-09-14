<?php
return array(

    // 'base_url' => URL::route(Config::get('anvard::routes.login')),

    'providers' => array (


        'Facebook' => array (
            'enabled' => true,
            'keys'    => array ( 'id' => '410257975745290', 'secret' => '3ac4894754a111a6e4da0845fd88f8b8' ),
        ),

        'Twitter' => array (
            'enabled' => true,
            'keys'    => array ( 'key' => 'FJUH7owd0mjCZdp5h7s54Q', 'secret' => 'fczZ29HVKUt3GV39aKYQ71TI7AcNr4aWcD9m6t6FU' )
        ),

        'LinkedIn' => array (
            'enabled' => true,
            'keys'    => array ( 'key' => '', 'secret' => '' )
        ),
    )







);