<?php
return array(	
	"base_url"   => "http://your-website.com/social/provider/auth",
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
			"keys"       => array ( "key" => "ID", "secret" => "SECRET" )
			)
	),
);