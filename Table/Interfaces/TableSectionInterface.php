<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Table\Enums\TableSectionType;
use Table\Interfaces\HasAttributesInterface;
use Table\Interfaces\TableRowInterface;

interface TableSectionInterface extends HasAttributesInterface
{
    public function addRow(TableRowInterface $row): void;

    /**
     * @return \Traversable<TableRowInterface>
     */
    public function getRows(): \Traversable;
    public function getType(): TableSectionType;
    public function hasRows(): bool;
    /**
     * @param \Traversable<TableRowInterface> $rows
     */
    public function setRows(\Traversable $rows): void;
    public function setType(TableSectionType $type): void;
}
