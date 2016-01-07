<?php
/**
 * @author Denis Fohl
 */

namespace Zac\Common;


class Field implements FieldInterface
{

    /**
     * @var mixed
     */
    protected $key;
    /**
     * @var mixed
     */
    protected $value;

    /**
     * @param array $params
     */
    public function __construct(array $params = array())
    {
        $this->key   = (array_key_exists('key', $params))   ? $params['key'] : null;
        $this->value = (array_key_exists('value', $params)) ? $params['value'] : null;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}