<?php

namespace PhpAT\Parser\Relation;

use PhpAT\Parser\Ast\FullClassName;

class Composition extends AbstractRelation
{
    public function __construct(int $line, FullClassName $relatedClass)
    {
        parent::__construct($line, $relatedClass);
    }
}
