<?php

declare (strict_types = 1);

namespace Dumplie\Infrastructure\Doctrine\ORM\Transaction;

use Dumplie\Application\Transaction\Transaction;

final class DoctrineTransaction implements Transaction
{
    public function commit()
    {
    }

    public function rollback()
    {
    }
}