<?php

declare(use_strict=1);

namespace Table;

use Table\Interfaces\TableInterface;
use Table\Interfaces\TableSectionInterface;
use Table\Traits\HasAttributesTrait;

class Table implements TableInterface
{
    use HasAttributesTrait;

    private ?string $caption = null;

    /**
     * @var \Traversable<TableSectionInterface>
     */
    private \Traversable $sections;

    public function addSection(TableSectionInterface $section): void
    {
        $this->sections[] = $section;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @return \Traversable<TableSectionInterface>
     */
    public function getSections(): \Traversable
    {
        return $this->sections;
    }

    public function hasCaption(): bool
    {
        return $this->getCaption() !== null;
    }

    public function setCaption(string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * @param \Traversable<TableSectionInterface> $sections
     */
    public function setSections(\Traversable $sections): void
    {
        $this->sections = $sections;
    }
}
