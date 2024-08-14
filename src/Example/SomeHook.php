<?php

namespace HookManager\Example;
use HookManager\Facades\HookManager;

class SomeHook {

    public function __construct(){
        HookManager::addAction('someHook', $this, 'someMethod');
    }

    public function someMethod(string $param1, string|int $param2){
        echo "{$param1}, {$param2}";
    }

}