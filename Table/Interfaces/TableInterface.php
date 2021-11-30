<?php

declare(use_strict=1);

namespace Table\Interfaces;

use Interfaces\HasAttributesInterface;
use Interfaces\TableSectionInterface;

interface TableInterface extends HasAttributesInterface
{
    public function addSection(TableSectionInterface $section): void;
    public function getCaption(): ?string;

    /**
     * @return \Traversable<TableSectionInterface>
     */
    public function getSections(): \Traversable;

    public function hasCaption(): bool;

    public function setCaption(string $caption): void;

    /**
     * @param \Traversable<TableSectionInterface> $sections
     */
    public function setSections(\Traversable $sections): void;
}
