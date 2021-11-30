<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Table\Enums\TableCellType;
use Table\Interfaces\HasAttributesInterface;

interface TableCellInterface extends HasAttributesInterface
{
    public function getContent(): string;
    public function getType(): TableCellType;
}
