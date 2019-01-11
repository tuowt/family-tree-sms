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
$result = $app->sms->sendAuthCode([
    'userName'       => '用户名',
    'userId'         => '1',
    'orderNO'        => 'O123456',
    'channel'        => 'wx_mini',
    // 支付的来源,如果不设置则会使用配置里的支付来源
    'paySource'      => '0',
    'subject'        => '标题',
    'body'           => '腾讯充值中心-QQ会员充值',
    'expireDateTime' => date('Y-m-d H:i:s', strtotime("+1 day")),
    'amount'         => 88,
    // 支付结果通知网址,如果不设置则会使用配置里的默认地址
    'notifyUrl'      => 'https://pay.weixin.qq.com/wxpay/pay.action',
]);
```
