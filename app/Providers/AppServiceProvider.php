<?php

namespace App\Providers;

use App\Models\Project;
use Illuminate\Support\Facades\View;
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
    public function boot()
    {
        //
        $psids = Project::pluck('service_id')->toArray();
        View::share(['services'=>\App\Models\Service::all(), 'project_services'=>\App\Models\Service::whereIn('id', $psids)->distinct()->get()]);
        
    }
}
