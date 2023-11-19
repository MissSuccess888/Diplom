<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\feedback;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('test-post', function (User $user) 
        {
            return true;
        });

        Gate::define('test2-post', function (User $user) {

            return true;
        });
				
				// шлюз для проверки условия для написания отзывов только авторизованным пользователям
        Gate::define('feedbackGate', function (User $user, $id) 
        {
					 return $user->id === feedback::find($id)->id_user;
        });

		// 		Gate::define('adminGate', function (User $admin) 
    //     {
		// 			$admin = Users::where('email', "admin@mail.ru")->first();
    //         return $admin;
    //     });
    }
}
