<?php
/**
 * @author Denis Fohl
 */

namespace Zac\Common;


interface FilterAwareInterface
{
    /**
     * Returns the result of filtering $value
     *
     * @param  mixed $value
     * @throws Exception If filtering $value is impossible
     * @return mixed
     */
    public function filter($value);
}