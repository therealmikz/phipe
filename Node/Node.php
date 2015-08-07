<?php

namespace Mmat\Phipe\Node;

interface Node
{
    /**
     * @return NodeInput[]
     */
    public function getInputs();

    /**
     * @return NodeOutput[]
     */
    public function getOutputs();
}