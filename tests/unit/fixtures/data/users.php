<?php
return [
    [
        'username' => 'user',
        'email' => 'user@mail.com',
        'auth_key' => 'K3nF701it7tzNsHddEiq0BZ0i-OU8S3xV',
        'password' => md5('q' . Yii::$app->params['SALT']),
        'mobile_number' => 123123123,
        'location' => 'dhjashjklads',
        'status' => 1,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
        'bought_items_count' => 0,
    ],
    [
        'username' => 'admin',
        'email' => 'admin@mail.com',
        'auth_key' => 'dZlXsVnIDg1IzFgX4EduAqkEPuphhOh9q',
        'password' => md5('q' . Yii::$app->params['SALT']),
        'mobile_number' => 123123123,
        'location' => 'dhjashjklads',
        'status' => 3,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
        'bought_items_count' => 0,
    ],
    [
        'username' => 'moderator',
        'email' => 'moderator@mail.com',
        'auth_key' => 'dZlXsVnIDgIzFgX4EduAqk1EPuphhOh9q',
        'password' => md5('q' . Yii::$app->params['SALT']),
        'mobile_number' => 123123123,
        'location' => 'dhjashjklads',
        'status' => 2,
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
        'bought_items_count' => 0,
    ],
];