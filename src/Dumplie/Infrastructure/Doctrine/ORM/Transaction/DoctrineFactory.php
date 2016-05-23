<?php

declare (strict_types = 1);

namespace Dumplie\Infrastructure\Doctrine\ORM\Transaction;

use Dumplie\Application\Transaction\Factory;
use Dumplie\Application\Transaction\Transaction;

final class DoctrineFactory implements Factory
{
    public function __construct()
    {
        // use doctrine orm here
    }

    /**
     * @return Transaction
     */
    public function open() : Transaction
    {
        return new DoctrineTransaction();
    }
}