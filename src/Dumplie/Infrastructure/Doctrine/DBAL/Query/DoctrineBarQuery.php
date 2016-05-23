<?php

declare (strict_types = 1);

namespace Dumplie\Infrastructure\Doctrine\DBAL\Query;

use Dumplie\Application\Query\BarQuery;
use Dumplie\Application\Query\Result\BarResult;

final class DoctrineBarQuery implements BarQuery
{
    public function lastBar() : BarResult
    {
        // use doctrine dbal to fetch lightweight results from DB
        return new BarResult();
    }
}