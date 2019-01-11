<?php

/*
 * This file is part of the tuowt/FamilyTree\.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FamilyTree\Sms\Mt;

use FamilyTree\Kernel\Support;
use FamilyTree\Sms\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 发送短信验证码
     *
     * @param array $params
     *
     * @return \Psr\Http\Message\ResponseInterface|\FamilyTree\Kernel\Support\Collection|array|object|string
     *
     * @throws \FamilyTree\Kernel\Exceptions\InvalidConfigException
     */
    public function sendAuthCode($mobile, $message) {

        $params = [
            'src'   => $this->app['config']->appId,
            'pwd'   => $this->app['config']->appSecret,
            'ServiceID' => 'SEND',
            'dest'  => "86{$mobile}",
            'codec' => '8',
            'msg'   => $this->app['template']->encodeMessage($message),
        ];

        return $this->httpPost($this->wrap('mt/MT3.ashx'), $params);
    }
}
