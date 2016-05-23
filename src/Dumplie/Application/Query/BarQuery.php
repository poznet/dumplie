<?php

declare (strict_types = 1);

namespace Dumplie\Application\Query;

use Dumplie\Application\Query\Result\BarResult;

interface BarQuery
{
    /**
     * @return BarResult
     */
    public function lastBar() : BarResult;
}