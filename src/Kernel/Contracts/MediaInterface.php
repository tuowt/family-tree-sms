<?php

/*
 * This file is part of the tuowt/FamilyTree\.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FamilyTree\Kernel\Contracts;

/**
 * Interface MediaInterface.
 */
interface MediaInterface extends MessageInterface
{
    /**
     * @return string
     */
    public function getMediaId();
}
