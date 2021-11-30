<?php

declare(use_strict=1);

namespace Table;

use Table\Interfaces\TableCellInterface;
use Table\Interfaces\TableRowInterface;
use Table\Traits\HasAttributesTrait;

class TableRow implements TableRowInterface
{
    use HasAttributesTrait;

    private ?\Traversable $cells = null;

    public function addCell(TableCellInterface $cell): void
    {
        $this->cells[] = $cell;
    }

    /**
     * @return \Traversable<TableCellInterface>
     */
    public function getCells(): ?\Traversable
    {
        return $this->cells;
    }

    public function hasCells(): bool
    {
        return $this->getCells() !== null;
    }

    /**
     * @param \Traversable<TableCellInterface> $cells
     */
    public function setCells(\Traversable $cells): void
    {
        $this->cells = $cells;
    }
}
