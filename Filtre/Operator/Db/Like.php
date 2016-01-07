<?php
/**
 * @author Denis Fohl
 */

namespace Zac\Filtre\Operator\Db;

use Zac\Common\FieldInterface;
use Zac\Db;
use Zac\Filtre\Operator;

class Like extends DbOperator
{
    /**
     * @param Db\SelectInterface $source
     * @param FieldInterface $field
     * @return Db\SelectInterface
     */
    public function applyTo($source, FieldInterface $field)
    {
        parent::applyTo($source, $field);
        $source->where($field->getKey() . ' LIKE \'%' . $field->getValue() . '%\'');

        return $source;
    }
}