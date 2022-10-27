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
                $members = Member::all();
                $view->with('members', $members);
            }
        );
    }
}
