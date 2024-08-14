<?php

use HookManager\Facades\HookManager;

require_once './../vendor/autoload.php';

HookManager::doAction('someHook', 'arash', 12);