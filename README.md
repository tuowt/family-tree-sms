# family-tree-sms
family-tree短信接口接口

## Composer 安装

```dockerfile
composer require tuowt/family-tree-sms
```

## Usage

### 服务端发起支付请求:

```php
use FamilyTree\Factory;

// $config = Configure::read('FamilyTree');
$config = [
    // 用户登陆名
    'appId'     => 'xxxx',
    // 用户登录密码
    'appSecret' => '',
];

$app = Factory::Sms($config);

// 发起支付请求
$result = $app->sms->sendAuthCode($mobile);
```
