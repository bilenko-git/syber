<?php

if ($_SERVER['SERVER_NAME'] == "https://warm-everglades-37023.herokuapp.com/") {

    $CLEARDB_DATABASE_URL = "mysql://b0e24ce5747bbd:7527aeb2@us-cdbr-iron-east-04.cleardb.net/heroku_0479a692c27d838?reconnect=true";
    $url = parse_url(getenv($CLEARDB_DATABASE_URL));

    print_r($url); 
    $host = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $dbname = substr($url["path"], 1);
} else {
    $host = 'localhost';
    $dbname = 'tenders';
    $username = 'root';
    $password = '1';
}

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host='.$hose.';dbname='.$dbname,
            'username' => $username,
            'password' => $password,
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];