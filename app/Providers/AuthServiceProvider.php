<?php

namespace App\Providers;

use App\Question;
use App\Policies\QuestionPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Question::class => QuestionPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // providing access using Gates
        /*
        \Gate::define('update-question', function($user, $question) {
            return $user->id === $question->user_id;
        });

        \Gate::define('delete-question', function($user, $question) {
            return $user->id === $question->user_id;
        });
        */
    }
}