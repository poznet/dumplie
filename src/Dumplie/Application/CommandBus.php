<?php

declare (strict_types=1);

namespace Dumplie\Application;

interface CommandBus
{
    /**
     * @param $command
     * @return void
     */
    public function handle($command);
}