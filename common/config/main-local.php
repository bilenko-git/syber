<?php

print_r($_SERVER['SERVER_NAME']);
if ($_SERVER['SERVER_NAME'] == "fast-depths-93211.herokuapp.com") {
    $host = 'us-cdbr-iron-east-04.cleardb.net';
    $username = 'bff799ef47fc17';
    $password = 'e90ac439';
    $dbname = 'heroku_047cb044e59f6a5';
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