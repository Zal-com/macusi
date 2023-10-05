<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){

        /*
        $accepted_languages = explode(';', $request->server('HTTP_ACCEPT_LANGUAGE'));
        //dd($accepted_languages);

        foreach ($accepted_languages as $lang){
            if(array_key_exists(strtoupper(explode(',', $lang)[1]), config('custom.available_languages'))){
                App::setLocale(explode(',', $lang[1]));
            }
            else{
                App::setLocale(config('app.fallback_locale'));
            }
        }
        */

        Paginator::useBootstrapFour();
    }
}
