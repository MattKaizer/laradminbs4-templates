<?php

/*
 * (c) Matias B. Moreno <morenobmatias@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */


namespace MbM\LarAdminBs4Templates;

use Illuminate\Support\ServiceProvider;

class LarAdminBs4ServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'laradminbs4-templates');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}