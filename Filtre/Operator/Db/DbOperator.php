<?php
/**
 * @author Denis Fohl
 */

namespace Zac\Filtre\Operator\Db;

use Zac\Common;
use Zac\Db;
use Zac\Filtre;


abstract class DbOperator implements Filtre\Operator\OperatorInterface
{

    public function applyTo($source, Common\FieldInterface $field)
    {
        $this->typeHint($source);
    }

    protected function typeHint($source)
    {
        if (!($source instanceof Db\SelectInterface)) {
            throw new \InvalidArgumentException();
        }
    }

}
