<?php

/*
 * This file is part of the tuowt/FamilyTree\.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FamilyTree\Kernel\Contracts;

/**
 * Interface EventHandlerInterface.
 */
interface EventHandlerInterface
{
    /**
     * @param mixed $payload
     */
    public function handle($payload = null);
}
