<?php

namespace HookManager\Providers;

use HookManager\HookManager;
use Illuminate\Support\ServiceProvider;

final class HookServiceProvider extends ServiceProvider {

    public function register(){
        $this->app->singleton('hookmanager', function(){
            return new HookManager();
        });
    }


    public function boot(){
        // soon
    }


}