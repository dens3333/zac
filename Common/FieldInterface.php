<?php
/**
 * @author Denis Fohl
 */

namespace Zac\Common;


interface FieldInterface
{

    /**
     * @param mixed $key
     * @return void
     */
    public function setKey($key);
    /**
     * @return mixed
     */
    public function getKey();

    /**
     * @param mixed $value
     * @return void
     */
    public function setValue($value);

    /**
     * @return mixed
     */
    public function getValue();

}
