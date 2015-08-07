<?php

namespace Mmat\Phipe\Node;

interface NodeInput
{
    /**
     * @param DataType $type
     * @return boolean
     */
    public function acceptsType(DataType $type);

    /**
     * @param NodeOutput $node
     */
    public function attach(NodeOutput $node);

    /**
     * Returns data compatible with InputType that's accepted in method 'acceptsType'
     * @return mixed
     */
    public function getData();

    /**
     * @return string
     */
    public function getName();
}