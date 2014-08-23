<?php

return new \Phalcon\Config(array(
    'key' => array(
        'appId' => 'your app id',
       'secret' => 'your secret'
    ),
    'scope' => 'email,publish_actions,offline_access,read_friendlists,status_update,user_birthday',
    'redirect_uri' => "account/facebook_login",
));

