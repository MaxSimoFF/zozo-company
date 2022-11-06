<?php

namespace App\Providers;

use App\Models\Member;
use Illuminate\Support\ServiceProvider;

class MemberProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'includes.partials.team',
            static function ($view) {
                $teamManagers = Member::managers()->orderBy('position')->get();
                $teamMembers = Member::members()->orderBy('position')->get();
                $view->with('teamManagers', $teamManagers);
                $view->with('teamMembers', $teamMembers);
            }
        );
    }
}
