<?php
/**
 * @author Denis Fohl
 */

namespace Zac\Filtre\Operator;

use Zac\Common\FieldInterface;

interface OperatorInterface
{

    /**
     * @param mixed $source
     * @param FieldInterface $field
     * @return mixed
     */
    function applyTo($source, FieldInterface $field);

}
