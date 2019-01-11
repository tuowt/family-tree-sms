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

    public function encodeMessage($message) {
        return strtoupper(bin2hex(iconv('UTF-8', 'UCS-2BE', $message)));
    }
}
