<?php
    //Create custom auto using middleware.

    php artisan make:middleware RoleType

    app/Http/Middleware/RoleType.php

    namespace App\Http\Middleware;
    use Closure;

    class RoleType
    {
        public function handle($request, Closure $next)
        {
            if ($request->type != 'admin') {
                return response()->json('Please enter valid role type');
            }

            return $next($request);
        }
    }

    protected $routeMiddleware = [
        ...
        'roleType' => \App\Http\Middleware\RoleType::class,
    ];

    Route::get('check/role','UserController@checkRole')->middleware('roleType');


    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class UserController extends Controller
    {
        public function checkRole()
        {
            dd('checkRole');
        }
    }

    http://localhost:8000/check/role?type=user
    http://localhost:8000/check/role?type=admin
?>