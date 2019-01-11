<?php

/*
 * This file is part of the tuowt/FamilyTree\.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FamilyTree\Sms;

use Closure;
use FamilyTree\Kernel\ServiceContainer;
use FamilyTree\Kernel\Support;

/**
 * Class Application.
 *
 * @property \FamilyTree\Sms\Mt\Client $mt  下行短信（MT）：用户方通过服务方（我方）方发送短信到目的手机
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Mt\ServiceProvider::class,
        Template\ServiceProvider::class,
    ];

    /**
     * @var array
     */
    protected $defaultConfig = [
        'http' => [
            'base_uri' => 'http://m.isms360.com:8085/',
        ],
    ];
}
