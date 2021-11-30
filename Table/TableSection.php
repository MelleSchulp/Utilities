<?php

declare(use_strict=1);

namespace Table;

use Table\Enums\TableSectionType;
use Table\Interfaces\TableRowInterface;
use Table\Interfaces\TableSectionInterface;
use Table\Traits\HasAttributesTrait;

class TableSection implements TableSectionInterface
{
    use HasAttributesTrait;

    private \Traversable $rows;
    private TableSectionType $type;

    public function addRow(TableRowInterface $row): void
    {
        $this->rows[] = $row;
    }

    /**
     * @return \Traversable<TableRowInterface>
     */
    public function getRows(): \Traversable
    {
        return $this->rows;
    }

    public function getType(): TableSectionType
    {
        return $this->type;
    }

    public function hasRows(): bool
    {
        return $this->getRows() !== null;
    }

    /**
     * @param \Traversable<TableRowInterface> $rows
     */
    public function setRows(\Traversable $rows): void
    {
        $this->rows = $rows;
    }

    public function setType(TableSectionType $type): void
    {
        $this->type = $type;
    }
}
