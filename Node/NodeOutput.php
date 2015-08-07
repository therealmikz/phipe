<?php

namespace Mmat\Phipe\Node;

interface NodeOutput
{
    /**
     * @return DataType
     */
    public function getType();

    /**
     * @return mixed
     */
    public function getData();
}