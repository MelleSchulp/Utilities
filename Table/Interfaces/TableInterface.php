<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Interfaces\HasAttributesInterface;
use Interfaces\TableSectionInterface;

interface TableInterface extends HasAttributesInterface
{
    public function getCaption(): string;
    public function hasCaption(): bool;

    /**
     * @return \Traversable<TableSectionInterface>
     */
    public function getSections(): \Traversable;

    public function setCaption(string $caption): void;
}
