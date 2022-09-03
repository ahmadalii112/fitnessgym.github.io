<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
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
        Builder::macro('search', function ($field, $string) {
            return $string
//                ? $this->where($field, 'like', "%{$string}%")
                ? $this->where(function ($user) use ($string) {
                    $user
                        ->where('gym_id', '=', $string)
                        ->OrWhere('firstname', 'LIKE', "%{$string}%")
                        ->orWhere('lastname', 'LIKE', "%{$string}%")
                        ->orWhere('middlename', 'LIKE', "%{$string}%")
                        ->orWhere('email', 'LIKE', "%{$string}%");
                })
                : $this;
        });
        Builder::macro('toRawSql', function() {
          return array_reduce($this->getBindings(), function($sql, $binding) {
            return preg_replace('/\?/', is_numeric($binding)
              ? $binding
              : "'".$binding."'", $sql, 1);
          }, $this->toSql());
        });
    }
}
