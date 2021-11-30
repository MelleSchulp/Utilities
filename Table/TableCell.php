<?php

declare(use_strict=1);

namespace Table;

use Table\Enums\TableCellType;
use Table\Traits\HasAttributesTrait;

class TableCell implements TableCellInterface
{
    use HasAttributesTrait;

    private ?string $content;

    private TableCellType $type;

    public function getContent(): string
    {
        return $this->content;
    }

    public function getType(): TableCellType
    {
        return $this->type;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function setType(TableCellType $type): void
    {
        $this->type = $type;
    }
}
