<?php

/*
 * This file is part of Miguel Simões generic packages.
 *
 * (c) Miguel Simões <msimoes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MiguelSimoes\Core\Equalable;

/**
 * Definition of the public contract required by instances require strict
 * comparison between instances
 *
 * @author Miguel Simões <msimoes@gmail.com>
 */
interface Equalable
{
    /**
     * Gets whether the provided value is the same as the value that is stored
     * on the instance
     *
     * @param mixed $value
     *
     * @return bool
     */
    public function equals($value): bool;
}
