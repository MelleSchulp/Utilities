<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Table\Interfaces\HasAttributesInterface;
use Table\Interfaces\TableCellInterface;

interface TableRowInterface extends HasAttributesInterface
{
    public function addCell(TableCellInterface $cell): void;

    /**
     * @return \Traversable<TableCellInterface>
     */
    public function getCells(): ?\Traversable;
    public function hasCells(): bool;

    /**
     * @param \Traversable<TableCellInterface> $cells
     */
    public function setCells(\Traversable $cells): void;
}
