<?php

namespace App\Providers;
use App\Models\Volunteer;
use App\Models\HelpRequest;
use App\Models\HelpType;
use App\Models\Admin;

use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Role;
use View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['admin.help_activities.fields'], function ($view) {
            $volunteerItems = Volunteer::pluck('name','id')->toArray();
            $view->with('volunteerItems', $volunteerItems);
        });
        View::composer(['admin.help_activities.fields'], function ($view) {
            $help_requestItems = HelpRequest::pluck('name','id')->toArray();
            $view->with('help_requestItems', $help_requestItems);
        });
        View::composer(['admin.help_requests.fields'], function ($view) {
            $help_typeItems = HelpType::pluck('name','id')->toArray();
            $view->with('help_typeItems', $help_typeItems);
        });
        View::composer(['admin.help_requests.fields'], function ($view) {
            $help_typeItems = HelpType::pluck('name','id')->toArray();
            $view->with('help_typeItems', $help_typeItems);
        });
        View::composer(['admin.help_requests.fields'], function ($view) {
            $help_typeItems = HelpType::pluck('name','id')->toArray();
            $view->with('help_typeItems', $help_typeItems);
        });
        View::composer(['admin.help_requests.fields'], function ($view) {
            $help_typeItems = HelpType::pluck('name','id')->toArray();
            $view->with('help_typeItems', $help_typeItems);
        });
        View::composer(['admin.twenty_sixes.fields'], function ($view) {
            $adminItems = Admin::pluck('name','id')->toArray();
            $view->with('adminItems', $adminItems);
        });
        View::composer(['admin.admins.fields'], function ($view) {
            $roles = Role::where('name','!=','super-admin')->where('name','!=','user')->get();
            $view->with('roles', $roles);
        });
        //
    }
}
