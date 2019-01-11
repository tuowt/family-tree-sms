<?php

/*
 * This file is part of the tuowt/FamilyTree\.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FamilyTree\Sms\Template;

use FamilyTree\Sms\Application;

class Client
{
    protected $template = [
        'authCode' => '您的验证码是：{$code}。为保障信息安全，请勿告诉他人。',
    ];

    /**
     * @var \FamilyTree\Sms\Application
     */
    protected $app;

    /**
     * Constructor.
     *
     * @param \FamilyTree\Sms\Application $app
     */
    public function __construct(Application $app) {
        $this->app = $app;
    }

    public function authCodeMessage($code) {
        $sign = $this->_getSign();
        $message = $sign . str_replace('{$code}', $code, $this->template['authCode']);
        return $this->_encode($message);
    }

    protected function _getSign() {
        return '【' . $this->app['config']->sign . '】';
    }

    protected function _encode($str) {
        return strtoupper(bin2hex(iconv('UTF-8', 'UCS-2BE', $str)));
    }
}
