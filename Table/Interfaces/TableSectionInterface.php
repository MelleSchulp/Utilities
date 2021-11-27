<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Enums\TableSectionType;
use Interfaces\HasAttributesInterface;
use Interfaces\TableRowInterface;

interface TableSectionInterface extends HasAttributesInterface
{
    /**
     * @return \Traversable<TableRowInterface>
     */
    public function getRows(): \Traversable;
    public function getType(): TableSectionType;
    public function hasRows(): bool;
}
