<?php

declare(use_strict=1);

namespace Table\Enums;

enum TableCellType: string
{
    case Data = 'td';
    case Header = 'th';
}
