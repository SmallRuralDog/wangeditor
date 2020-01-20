<?php

namespace Smallruraldog\Wangeditor;

use Illuminate\Support\ServiceProvider;
use SmallRuralDog\Admin\Admin;

class FormItemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Admin::script('wangeditor', __DIR__.'/../dist/js/form-item.js');
        //Admin::style('wangeditor', __DIR__.'/../dist/css/form-item.css');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
