<?php

namespace App\Providers;

use App\Model\Permission;
use App\Model\Product;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//  Method 2 -- using policies  */

//        'App\Model' => 'App\Policies\ModelPolicy',
//        Product::class => 'App\Policies\ProductPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
//  Method 1 -- only simple gate  */
        /*      Gate::define('edit_product',function ($user,$product){
                    return $user->id==$product->user_id;
                });
        */

//  Method 3 -- ACL technique
        /*        Gate::define('edit_product', function ($user) {
                    return $user->hasRole(Permission::where('permission_title', 'edit_product')->first()->role);
                });
                Gate::define('list_product', function ($user) {
                    return $user->hasRole(Permission::where('permission_title', 'list_product')->first()->role);
                });
                Gate::define('delete_product', function ($user) {
                    return $user->hasRole(Permission::where('permission_title', 'delete_product')->first()->role);
                });
        */

//  Pro Method
        foreach (Permission::all() as $permission) {
            Gate::define($permission->permission_title , function ($user) use ($permission){
                return $user->hasRole($permission->role);
            });
        }
    }

}
