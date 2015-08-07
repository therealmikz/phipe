<?php

namespace Mmat\Phipe\Node;

abstract class DataType extends \SplEnum
{
    /**
     * @param mixed $data
     * @return boolean
     */
    abstract public function isValid($data);
}