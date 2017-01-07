<?php

if ($_SERVER['SERVER_NAME'] == "https://fast-depths-93211.herokuapp.com/") {

    $CLEARDB_DATABASE_URL = "mysql://bff799ef47fc17:e90ac439@us-cdbr-iron-east-04.cleardb.net/heroku_047cb044e59f6a5?reconnect=true";
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