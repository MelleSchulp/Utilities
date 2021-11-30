<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Table\Interfaces\HasAttributesInterface;

interface TableRowInterface extends HasAttributesInterface
{
    /**
     * @return \Traversable<TableCellInterface>
     */
    public function getCells(): \Traversable;
    public function hasCells(): bool;
}
