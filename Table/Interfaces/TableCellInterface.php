<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Table\Enums\TableCellType;
use Table\Interfaces\HasAttributesInterface;

interface TableCellInterface extends HasAttributesInterface
{
    public function getContent(): ?string;
    public function getType(): TableCellType;
    public function setContent(string $content): void;
    public function setType(TableCellType $type): void;
}
