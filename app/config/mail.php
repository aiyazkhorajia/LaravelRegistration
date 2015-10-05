<?php

return array(
 
    'driver' => 'smtp',
 
    'host' => 'smtp.gmail.com',
 
    'port' => 465,
 
    'from' => array('address' => 'authapp@awesomeauthapp. com', 'name' => 'Awesome Laravel 4 Auth App'),
 
    'encryption' => 'ssl',
 
    'username' => 'testingforms222@gmail.com',
 
    'password' => 'testing1234',
 
    'sendmail' => '/usr/sbin/sendmail -bs',
 
    'pretend' => false,
 
);