<?php
return array(	
	"base_url"   => url()."/login/social",
	"providers"  => array (
		"Google"     => array (
			"enabled"    => true,
			"keys"       => array ( "id" => "ID", "secret" => "SECRET" ),
			),
		"Facebook"   => array (
			"enabled"    => true,
			"keys"       => array ( "id" => "ID", "secret" => "SECRET" ),
			),
		"Twitter"    => array (
			"enabled"    => true,
			"keys"       => array ( "key" => "FJUH7owd0mjCZdp5h7s54Q", "secret" => "czZ29HVKUt3GV39aKYQ71TI7AcNr4aWcD9m6t6FU" )
			)
	),
);