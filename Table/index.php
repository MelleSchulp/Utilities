<?php

declare(strict_types=1);

namespace Table;

use Table\Interfaces\TableInterface;

class TableCreator
{
    public function __construct(TableInterface $table)
    {
        $this->table = $table;
    }

    public function create()
    {
        $table = $this->table;
    }
}