<?php

namespace HookManager;

use HookManager\Contracts\HookManagerContract;

final class HookManager implements HookManagerContract{

    private array $hooks = [];

    public function addAction (
        string  $hookName, 
        object  $classInstance, 
        string  $methodName, 
        int     $priority = 10
    ) : void{
        $this->hooks[$hookName][$priority][] = [
            'classInstance' => $classInstance, 
            'methodName'    => $methodName
        ];
    }

    public function doAction(string $hookName, ...$args) {
        if(isset($this->hooks[$hookName])){
            foreach ($this->sortHooksByPriority($this->hooks[$hookName]) as $hook){
                // $hook['classInstance']->{$hook['methodName']}(...$args);
                call_user_func_array([$hook['classInstance'], $hook['methodName']], $args);
            }
        }
    }

    private function sortHooksByPriority($hooks){
        ksort($hooks);
        return call_user_func_array('array_merge', $hooks);
    }


}