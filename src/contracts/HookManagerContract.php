<?php

namespace HookManager\Contracts;

interface HookManagerContract {

    public function addAction (
        string $hookName, 
        object $classInstance, 
        string $methodName, 
        int $priority = 10
    ) : void;

    public function doAction(
        string $hookName,
        ...$args
    );

}