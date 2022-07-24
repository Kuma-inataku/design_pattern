<?php
// require('MenuPrototype.php');

class DeepCopyMenu extends MenuPrototype
{
    protected function __clone()
    {
        $this->setComments(clone $this->getComments());
    }
}