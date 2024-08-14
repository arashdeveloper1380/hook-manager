<?php

namespace HookManager\Facades;

use Illuminate\Support\Facades\Facade;

final class HookManager extends Facade{

    protected static function getFacadeAccessor(){
        return 'hookmanager';
    }
    
}