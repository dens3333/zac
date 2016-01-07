<?php
/**
 * @author Denis Fohl
 */

namespace Zac\Filtre;

use Zac\Common;


class Critere
{
    /**
     * @var Common\FieldInterface
     */
    protected $field;
    /**
     * @var  Operator\Operator
     */
    protected $operator;
    /**
     * @var Common\FilterAwareInterface[]
     */
    protected $filterLst;

    /**
     * @return Common\FieldInterface
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @param Common\FieldInterface $field
     */
    public function setField(Common\FieldInterface $field)
    {
        $this->field = $field;
    }

    /**
     * @return Operator\Operator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param Operator\Operator $operator
     */
    public function setOperator(Operator\Operator $operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return Common\FilterAwareInterface[]
     */
    public function getFilterLst()
    {
        return $this->filterLst;
    }

    /**
     * @param Common\FilterAwareInterface[] $filterLst
     */
    public function setFilterLst(array $filterLst)
    {
        $this->filterLst = $filterLst;
    }

    /**
     *
     */
    public function applyTo()
    {
        $value = $this->getField()->getValue();
        foreach ($this->getFilterLst() as $filter) {
            $value = $filter->filter($value);
        }
        $filteredField = clone($this->getField());
        $filteredField->setValue($value);

        $this->getOperator()->applyTo($filteredField);
    }

}