<?php

use FamilyTree\Factory;

$config = [
    // 用户登陆名
    'appId'     => 'xxxx',
    // 用户登录密码
    'appSecret' => '',
];

$app = Factory::sms($config);

// 发起支付请求
$result = $app->sms->sendAuthCode($mobile);
