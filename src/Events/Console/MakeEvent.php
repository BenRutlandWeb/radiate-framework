<?php

namespace Radiate\Events\Console;

use Radiate\Console\GeneratorCommand;

class MakeEvent extends GeneratorCommand
{
    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Event';

    /**
     * The command signature.
     *
     * @var string
     */
    protected $signature = 'make:event {name : The name of the event class}
                                       {--force : Overwrite the event class if it exists}';

    /**
     * The command description.
     *
     * @var string
     */
    protected $description = 'Create a new event class';

    /**
     * Get the stub path.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/event.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace(string $rootNamespace)
    {
        return $rootNamespace . '\\Events';
    }
}
