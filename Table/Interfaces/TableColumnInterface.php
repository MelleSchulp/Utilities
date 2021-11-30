<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Table\Enums\TableColumnType;
use Table\Interfaces\HasAttributesInterface;

interface TableColumnInterface extends HasAttributesInterface
{
    public function getContent(): string;
    public function getType(): TableColumnType;
}
