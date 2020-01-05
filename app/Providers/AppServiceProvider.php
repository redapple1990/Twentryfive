<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Events;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $users = User::all();
        //$events = App\Events::all();

        $items = Events::all();
        // foreach ($items as $item) {
        //     echo $item->name;
        // }

        // View::composer(['layouts.partials.header'], function ($view) {
        //     $view->with('categories', compact('items')); // bind data to view
        // });
        
        //Schema::defaultStringLength(191);
        //return view('index', ['events_data' => $events_data]);
        //return view('layouts.partials.header',compact('items'));
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
