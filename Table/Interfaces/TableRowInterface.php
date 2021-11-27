<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Interfaces\HasAttributesInterface;

interface TableRowInterface extends HasAttributesInterface
{
    /**
     * @return \Traversable<TableColumnInterface>
     */
    public function getColumns(): \Traversable;
    public function hasColumns(): bool;
}